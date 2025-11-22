<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //
    public function addData(){
     Db::table("students")->insert([
        [
            "name"=>"Sima",
            "lastName"=>"Qurbani",
             "gender"=>"f",
             "age"=>"27"
        ],

          [
            "name"=>"Mahtab",
            "lastName"=>"Nasiri",
             "gender"=>"f",
             "age"=>"18"
        ], 

         [
            "name"=>"Murtaza",
            "lastName"=>"Sharifi",
             "gender"=>"m",
             "age"=>"13"
        ],  
        
        [
            "name"=>"Mustafa",
            "lastName"=>"Nasiri",
             "gender"=>"m",
             "age"=>"8"
        ],
     ]);
        return "Data inserted successfully";
    }
    public function fetchData(){
          $allStudents =  DB::table("students")->get();
          return $allStudents;
    }
}