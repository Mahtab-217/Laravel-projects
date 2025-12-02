<?php

namespace App\Http\Controllers;
use App\Models\S;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function index(){
        return view('search');
    }
 
}
