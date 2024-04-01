<?php

namespace App\Http\Controllers;

use App\Models\Bucketlist;
use Illuminate\Http\Request;

class BucketlistController extends Controller
{
    public function index () {

        $bucket = Bucketlist::get();

        return view ('viajes.bucketlist', ['bucket' => $bucket]);
    }

    public function show (Bucketlist $bucket) {

        return view ('viajes.detallebucket', ['bucket' => $bucket]);
    }
}
