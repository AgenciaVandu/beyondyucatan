<?php

namespace App\Http\Controllers;

use App\Models\Bucketlist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BucketlistController extends Controller
{
    public function index () {

        $bucket = Bucketlist::get();

        return view ('viajes.bucketlist', ['bucket' => $bucket]);
    }

    public function show (Bucketlist $bucket) {

        return view ('viajes.detallebucket', ['bucket' => $bucket]);
    }

    public function listBucketlists(){

        $buckets = Bucketlist::paginate(10);
        return view('admin.bucketlists.index', compact('buckets'));
    }

    public function create(){
        return view('admin.bucketlists.create');
    }

    public function store(Request $request)
    {


        $request->validate([
            'title' =>'required',
            'description' =>'required',
            'longdescription' =>'required',
            'typetour' =>'required',
            'image' =>'required|mimes:jpeg,jpg,png,bmp,gif,svg|max: 2048',
            'days' =>'required',
            'price' => 'required'
        ]);

        $image = $request->file('image')->store('public/bucketlist');
        $url = Storage::url($image);

        Bucketlist::create([
            'title' => $request->title,
            'description' => $request->description,
            'longdescription' => $request->longdescription,
            'days' => $request->days,
            'typetour' => $request->typetour,
            'image' => $url,
            'price' => $request->price,
        ]);

        return redirect()->route('admin.bucketlists.index');
    }
    public function edit(Bucketlist $bucket)
    {
        return view('admin.bucketlists.edit', compact('bucket'));
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
}
