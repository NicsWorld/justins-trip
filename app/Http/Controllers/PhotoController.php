<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    public function index(){
      $posts = Post::orderBy('created_at', 'desc')->get();
      return view('photos')->with(compact('posts'));
    }
}
