<?php

namespace App\Http\Controllers;

use App\Models\Developers;
use Illuminate\Http\Request;

class DevelopersController extends Controller
{
    //
    public function create(){
        $developer=Developers::all();
        return $developer;
    }
}
