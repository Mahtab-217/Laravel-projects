<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //
    public function fetchData(){
    //  $oneStudent=   DB::table("students")->where("name","Ali");
    //  return $oneStudent;
   $sortedStudents= DB::table("students")->orderBy("score", "desc")->get();
     return $sortedStudents;
    }
    public function update(){
        DB::table("students")->where("score","<", 50)->update(["lastName"=>"Failed Ones"]);
        return "Data was updated successfully";
    }
    public function delete(){
        DB::table("students")->where("score","<",10)->delete();
        return "افراد شکست خورده ها حذف شد";
    }
}
