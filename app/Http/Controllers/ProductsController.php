<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ProductsController extends Controller
{
    //
    public function index(){
        return Products::all();
    }
    public function add(){
        $product =new Products();
        $product->pro_name = "Apple";
        $product->price = 120;
        $product->model = "Afghani";
        $product->save();
        return "Apple was saved";
    }
    public function show($id){
$product = new products();
$single = $product->findOrfail($id);
return $single;
    }
    public function update($id){
        $item = new product();
      $single=  $item->findOrfail($id);
        $single->pro_name = "Red Apple";
        $singl->price =150;
        $single->update();
        return "Apple was editted";
    }
    public function delete($id){
        $item= new product();
        $deletedItem=$item->findOrfail($id);
$deletedItem->delete();
return "item was deleted";
    }
}
