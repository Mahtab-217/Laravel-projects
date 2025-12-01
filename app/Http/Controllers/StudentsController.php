<?php

namespace App\Http\Controllers;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //
    public function fetchData(){
   $students= Students::all();
return $students;


      //  $students = Students::whereAny(["age", "score"],">",95)->get();->orWhere("name","LIKE","%B%")
     $students =Students::where("score",">",80)->Where("age",">",70)->orWhere("id",[10])->get();
       $students = Students::where("name","LIKE","%tt%")->get();
     return $students;
    }
    public function putData(){
      $newStudents=Students::where("score",">",80)->where("age","<",20)->get();
      return $newStudents;
    }
     public function first(){
   $students= Students::male()->get();
return $students;
     }
      public function second(){
   $students= Students::male()->get();
return $students;
      }
      public function little(){
            $f =Students::female()->where("age","<",18)->get();
            return $f;
      }
        public function young(){
            $f =Students::female()->where(function($query){
                  $query->where("age","<=",40)->where("age",">",18);
            })->get();
            return $f;
      }
        public function old(){
            $f =Students::female()->where("age",">",40)->get();
            return $f;
      }
      public function delete(){
            Students::findorFail(1)->delete();
            return "one item was deleted";
      }
      public function showDeletedData(){
           $students= Students::onlyTrashed()->get();
            return $students;
      }
      public function restoreData(){
            Students::withTrashed()->findorFail(1)->restore();
            return "Item was restored";
      }
}
