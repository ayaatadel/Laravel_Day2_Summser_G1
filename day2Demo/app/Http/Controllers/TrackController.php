<?php

namespace App\Http\Controllers;

use App\Models\Track;
use Illuminate\Http\Request;

class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $tracks=Track::paginate(5);
        // dd($tracks);
        return view('tracks.index',compact('tracks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
           return view('tracks.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // dd($request);
        $request->validate([
            'name'=>'required|unique:tracks|min:2',
            "about"=>'required|max:30|min:5'
        ],[
            'name.unique'=>'this track name already exist',
            'name.min'=>'track name must be more than or qeual 2 charactres',
            "about.unique"=>"this track about already exist"
        ]);

        $requestData=$request->all();
        $track=Track::create($requestData);
        return to_route('tracks.show',compact('track'));
        // file 'logo'
        // if($reques->hasFile('logo'))
    }

    /**
     * Display the specified resource.
     */
    public function show(Track $track)
    {
        //
        // dump($track);
        return view('tracks.show',compact('track'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Track $track)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Track $track)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Track $track)
    {
        //
        $track->delete();
        return to_route('tracks.index');
    }
}
