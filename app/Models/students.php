<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    //
    protected $table ='students';
    use HasFactory;
    public function scopeMale($query){
        $query->where("age",">",40)->where("gender","m");

}
public function scopeFemale($query){
    $query->where("gender","f");
}
}
