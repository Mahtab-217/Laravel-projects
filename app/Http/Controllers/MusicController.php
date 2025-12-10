<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicController extends Controller
{
    //
    public function add(Request $request){
        $request->validate([
            "name"=>"required|string|max:30",
            "music"=>"nullable|audio|mimes:mp3,mav|max:12806",

        ]);
    $filePath= null;
    if($request->hasFile('music')){
        $filePath=$request->file('music')->store();
    
    };

    }

}
