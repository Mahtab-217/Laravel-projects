<?php

namespace App\Http\Controllers;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //
    public function fetchData(){
     $allStudents =Students::where("score",">",80)->Where("age","<",30)->orWhere("id",[10])->get();
     return $allStudents;
    }
}
