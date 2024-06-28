<?php

namespace App\Http\Controllers;

use App\Models\Bucketlist;
use App\Models\Day;
use App\Models\Experience;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BucketlistController extends Controller
{
    public function index()
    {

        $bucket = Bucketlist::get();

        return view('viajes.bucketlist', ['bucket' => $bucket]);
    }

    public function show(Bucketlist $bucket)
    {
        $bukets = Bucketlist::all();
        return view('viajes.detallebucket', ['bucket' => $bucket, 'experiences' => $bukets]);
    }

    public function listBucketlists()
    {

        $buckets = Bucketlist::paginate(10);
        return view('admin.bucketlists.index', compact('buckets'));
    }

    public function create()
    {
        return view('admin.bucketlists.create');
    }

    public function store(Request $request)
    {


        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'longdescription' => 'required',
            'typetour' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,bmp,gif,svg|max: 2048',
            'days' => 'required',
            'price' => 'required'
        ]);

        $image = $request->file('image')->store('public/bucketlist');
        $url = Storage::url($image);

        $bucket = Bucketlist::create([
            'title' => $request->title,
            'description' => $request->description,
            'longdescription' => $request->longdescription,
            'days' => $request->days,
            'typetour' => $request->typetour,
            'image' => $url,
            'price' => $request->price
        ]);

        return view('admin.bucketlists.edit',compact('bucket'));
    }
    public function edit(Bucketlist $bucket)
    {
        $bucket = Bucketlist::find($bucket->id);
        $days = Day::where('bucketlist_id',$bucket->id)->get();
        return view('admin.bucketlists.edit', compact('bucket','days'));
    }

    public function update(Request $request, Bucketlist $bucket)
    {
        if ($request->file('image')) {
            $image = $request->file('image')->store('public/experiences');
            $url = Storage::url($image);
            $bucket->update([
                'image' => $url
            ]);
        }

        $bucket->update([
            'title' => $request->title,
            'description' => $request->description,
            'longdescription' => $request->longdescription,
            'days' => $request->days,
            'typetour' => $request->typetour,
            'price' => $request->price,
        ]);

        return redirect()->route('admin.bucketlists.index');
    }
    public function destroy(Bucketlist $bucket)
    {
        $bucket->delete();
        return redirect()->route('admin.bucketlists.index');
    }


    public function createDay(Bucketlist $bucket){
        $bucket = Bucketlist::find($bucket->id);
        return view('admin.bucketlists.createDay',compact('bucket'));
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

        $bucket->days()->create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $url,
            'bucketlist_id' => $request->bucketlist_id,
        ]);

        return redirect()->route('admin.bucketlists.edit',compact('bucket'));
    }

    public function editDay(Day $day)
    {
        $day = Day::find($day->id);
        return view('admin.bucketlists.editDay', compact('day'));
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
        ]);

        $bucket = Bucketlist::find($day->bucketlist_id);

        return redirect()->route('admin.bucketlists.edit',compact('bucket'));
    }
}
