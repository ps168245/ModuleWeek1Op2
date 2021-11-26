<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\song;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // door private kan alle functies erbij en public kan iedere 
    
    public function index()
    {
        // dd('gdfhgd');
        // cntrl + / = comment text
        //$songs = ['Living on a prayer', 'Nothing else matters', 'Thunderstruck', 'Back in black', 'Ace of spades'];
        //return view('songs.index', ['songs' => $songs]);

        return view('songs.index', ['songs' =>song::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('songs.create');
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:100',
            'singer' => 'required|max:100',
        ]);
       Song::create($request->except('_token'));
       // redirect naar web.php van view
       return redirect()->route('songs.index'); //redirect naar de routes > web.php 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        //$songs = ['Living on a prayer', 'Nothing else matters', 'Thunderstruck', 'Back in black', 'Ace of spades'];
        //$song = $songs[$id];
        
        
        return view('songs.show', ['song' => song::find($id)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $songs = ['Living on a prayer', 'Nothing else matters', 'Thunderstruck', 'Back in black', 'Ace of spades'];
        // pakt de juiste id
        // $song = $songs[$id];
        // geeft de naam van de song mee
        return view('songs.edit' ,  ['song' => song::find($id)]);

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        // Song::edit($request->except('_token'));
        // dd($request); (laat errors zien)
        $validated = $request->validate([
            'title' => 'required|max:100',
            'singer' => 'required|max:100',
        ]);
        Song::find($request['id'])->update($request->except(['id','_token']));
        
        return redirect()->route('songs.index'); //redirect naar de routes > web.php 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        // return view('songs.delete', ['songID' => song::find($id)]);
        Song::destroy($id);
        return redirect('songs');

    }
}
