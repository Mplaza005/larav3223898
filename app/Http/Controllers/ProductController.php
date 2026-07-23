<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Product;
use App\models\User;

class ProductController extends Controller
{

    public function index(){

    $products = Product::all();
    return $products;


    }


     public function create (){

    $users=User::all();

     return view('product.create',compact('users'));


    }

    public function store(Request $request){

    // $product= new Product();

    // $product->nombre=$request->name;
    // $product->precio=$request->precio;
    // $product->peso=$request->peso;
    // $product->tamano=$request->tamano;

    // $product->save();

    $product=Product::create($request->all());


    return  $product;

    }
}
