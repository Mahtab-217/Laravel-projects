<?php

namespace App\Http\Controllers;
use App\Models\Students;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    //
    public function fetchData(){
     $allStudents =Students::where("score",">",80)->Where("age","<",20)->orWhere("id",[1,2,3,4,5])->get();
     return $allStudents;
    }
}
