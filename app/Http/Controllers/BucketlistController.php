<?php

namespace App\Http\Controllers;

use App\Models\Bucketlist;
use App\Models\category;
use App\Models\Day;
use App\Models\Experience;
use App\Models\Icon;
use App\Models\State;
use ErrorException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BucketlistController extends Controller
{
    public function index()
    {

        $bucket = Bucketlist::get();
        $categories = category::all();
        $states = State::all();
        return view('viajes.bucketlist', ['bucket' => $bucket, 'states' => $states, 'categories' => $categories]);
    }

    public function show(Bucketlist $bucketlist)
    {
        $bukets = Bucketlist::all();
        $days = Day::where('bucketlist_id', $bucketlist->id)->get();

        return view('viajes.detallebucket', ['bucket' => $bucketlist, 'experiences' => $bukets,'days' => $days]);
    }

    public function listBucketlists()
    {

        $buckets = Bucketlist::paginate(10);
        return view('admin.bucketlists.index', compact('buckets'));
    }

    public function create()
    {
        $categories =  category::all();
        $states = State::all();
        return view('admin.bucketlists.create',compact('categories','states'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'longdescription' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,bmp,gif,svg|max: 2048',
            'days' => 'required',
            'price' => 'required'
        ]);

        $image = $request->file('image')->store('public/bucketlist');
        $url = Storage::url($image);

        $bucket = Bucketlist::create([
            'title' => $request->title,
            'description' => $request->description,
            'description_en' => $request->description_en,
            'longdescription' => $request->longdescription,
            'longdescription_en' => $request->longdescription_en,
            'days' => $request->days,
            'category_id' => $request->category_id,
            'image' => $url,
            'price' => $request->price,
            'state_id' => $request->state_id
        ]);

        return redirect()->route('admin.bucketlists.index');
    }
    public function edit(Bucketlist $bucketlist)
    {
        $categories =  category::all();
        $days = Day::where('bucketlist_id',$bucketlist->id)->get();
        $states = State::all();
        return view('admin.bucketlists.edit', compact('bucketlist','days','categories','states'));
    }

    public function update(Request $request, Bucketlist $bucketlist)
    {
        if ($request->file('image')) {
            $image = $request->file('image')->store('public/experiences');
            $url = Storage::url($image);
            $bucketlist->update([
                'image' => $url,

            ]);
            //dd($request);
        }else{
            $bucketlist->update([
                'title' => $request->title,
                'description' => $request->description,
                'description_en' => $request->description_en,
                'longdescription' => $request->longdescription,
                'longdescription_en' => $request->longdescription_en,
                'days' => $request->days,
                'typetour' => '',
                'category_id' => $request->category_id,
                'price' => $request->price,
                'days' => $request->days,
                'state_id' => $request->state_id
            ]);
        }
        return redirect()->route('admin.bucketlists.index');
    }
    public function destroy(Bucketlist $bucketlist)
    {
        if ($bucketlist->days()->count()) {
            return redirect()->route('admin.bucketlists.index')->withErrors(['msg' => 'No se puede eliminar el bucketlist por que cuenta con 1 o mas dias vinculados']);
        }else if($bucketlist->gategory && $bucketlist->gategory){
            return redirect()->route('admin.bucketlists.index')->withErrors(['msg' => 'Tiene categorias o estado relacionados']);
        }else{
            $bucketlist->delete();
            return redirect()->route('admin.bucketlists.index');
        }
    }


    public function createDay(Bucketlist $bucketlist){
        $icons = Icon::all();
        return view('admin.bucketlists.createDay',compact('bucketlist','icons'));
    }


    public function storeDay(Request $request)
    {
        /* return $request; */
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,bmp,gif,svg|max: 2048',
        ]);

        $image = $request->file('image')->store('public/days/bucketlist');
        $url = Storage::url($image);

        $bucket = Bucketlist::find($request->bucketlist);

        $day = $bucket->days()->create([
            'title' => $request->title,
            'description' => $request->description,
            'title_en' => $request->title_en,
            'description_en' => $request->description_en,
            'image' => $url,
            'bucketlist_id' => $request->bucketlist_id,
        ]);


        $day->icons()->attach($request->icons);
        return redirect()->route('admin.bucketlists.edit',$bucket);
    }

    public function editDay(Day $day)
    {
        $day = Day::find($day->id);
        $icons = Icon::all();
        $arrayicons = $day->icons;
        return view('admin.bucketlists.editDay', compact('day','icons','arrayicons'));
    }

    public function updateDay(Request $request, Day $day)
    {
        if ($request->file('image')) {
            $image = $request->file('image')->store('public/days/bucketlist');
            $url = Storage::url($image);
            $day->update([
                'image' => $url
            ]);
        }

        $day->update([
            'title' => $request->title,
            'description' => $request->description,
            'title_en' => $request->title_en,
            'description_en' => $request->description_en,
        ]);

        $bucket = Bucketlist::find($day->bucketlist_id);
        $day->icons()->sync($request->icons);
        return redirect()->route('admin.bucketlists.edit',$bucket);
    }

    public function deleteDay(Day $day){
        $bucket = Bucketlist::find($day->bucketlist_id);
        try {
            $day->delete();
            return redirect()->back();
        } catch (\Throwable $th) {
            return back()->with('error', 'No se puede eliminar ya que tiene 1 o más iconos vinculados');
        }
    }
}
