<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongsController extends Controller
{
    //
    public function Create(Request $request){
        $song= new Songs();
        $request->validate([
            "singer"=>"required|string|max:30",
            "song"=>"nullable|audio|mimes:mp3,wav|max:12288",
        ]);
        $filePath=null;
        if($request->hasFile('song')){
       $filePath=$request->file('song')->store('songs','public');
       $song->singer=$request->singer;
       $song->song=$request->song;
       $song->save();
       return redirect('/');

        }
      
    }
      public function index(){
           $songs = Songs::all();
         return view('Song.home',compact('songs'));

        }
}
