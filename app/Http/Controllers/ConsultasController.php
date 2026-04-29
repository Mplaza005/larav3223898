<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;


use Illuminate\Http\Request;

class ConsultasController extends Controller
{


    public function consulta(){

    //  $post = new Post();//crearme un objeto del tipo de dato a consultar
    //  $post=Post::find(1);
    //  return $post->user;
    //  return $post->category;

    //   $user = new User();//crearme un objeto del tipo de dato a consultar
    //   $user=User::find(2);
    //   //return $user->profile;
    //   return $user->posts;

      $categories = Category::with(['posts.user'])->get();

      return  $categories;

    }
}
