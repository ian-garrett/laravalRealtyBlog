<?php

namespace App\Http\Controllers;

// use DB;
// ^^method 1
use App\MLS;
use App\Post;
// use Illuminate\Http\Request;
use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;


class MLSController extends Controller
{
    public function MLS()
    {
		// $mlss = DB::table('MLStest')->get();
		// ^^method 1

        if ($search = Request::get('q'))
        {
            $mlss = Post::search($search);
        }
        else{
            $mlss = MLS::all();
        }

		return view('MLS.index', compact('mlss')); 
    }

    // public function show($id)
    // {
    // 	$mls = MLS::find($id);
    // 	return view('MLS.show', compact('mls'));
    // }

    public function show(MLS $mls)
    {
        //EAGER LOADING STUFF
        // $mls = MLS::with('notes.user')->find(3);
        // return $mls;

        // $mls->load('notes.user');

        // return $mls;

    	return view('MLS.show', compact('mls'));
    }

}