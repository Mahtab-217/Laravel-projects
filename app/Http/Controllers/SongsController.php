<?php

namespace App\Http\Controllers;
use App\Models\Songs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
class SongsController extends Controller
{
    //
    public function Create(Request $request){
        $song = new Songs();
        $request->validate([
            "singer"=>"required|string|max:30",
            "song"=>"nullable|file|mimes:mp3,wav|max:12288",
        ]);
        $filePath=null;
        if($request->hasFile('song')){
       $filePath=$request->file('song')->store('songs','public');
       $song->singer=$request->singer;
       $song->song=$filePath;
       $song->save();
       return redirect('songs');

        }
      
    }
        public function Destroy(Request $request,$id){
            $song=Songs::findOrFail($id);
            if($song->song){
                  Storage::disk('public')->delete($song->song);
            }
            $song->delete();
          return redirect("songs");
      }
      public function index(){
           $songs = Songs::all();
         return view('Song.home',compact('songs'));

        }
}
