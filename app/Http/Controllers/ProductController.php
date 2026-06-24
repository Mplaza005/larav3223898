<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;

class ProductController extends Controller
{
     public function create (){

     return view('product.create');


    }

    public function store(Request $request){

    $product= new Product();

    $product->nombre=$request->name;
    $product->precio=$request->precio;
    $product->peso=$request->peso;
    $product->tamano=$request->tamano;

    $product->save();


    return  $product;

    }
}
