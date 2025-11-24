<?php

namespace App\Http\Controllers;
use App\Models\Students;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //
        public function addData(){
      $student = new Students();
      $student->name="Mah";
      $student->lastName="Nasiri";
      $student->score=100;
      $student->save;
      return "Data added successfully";
    }
    public function fetchData(){
      $allStudents= Students::select('name','score','id','lastName')->where("id",">",20)->get();
      return $allStudents;
    }
    
    //  $oneStudent=   DB::table("students")->where("name","Ali");
    //  return $oneStudent;
//    $sortedStudents= DB::table("students")->orderBy("score", "desc")->get();
//      return $sortedStudents;
//     }
    public function update(){
        $student =Students::find(50);
        $student->name="Ali";
        $student->lastName="Ahmadi";
        $student->update();
        return "Data was updated";
//         DB::table("students")->where("score","<", 50)->update(["lastName"=>"Failed Ones"]);
//         return "Data was updated successfully";
    }
//     public function delete(){
//         DB::table("students")->where("score","<",10)->delete();
//         return "افراد شکست خورده حذف شد";
    }
    

