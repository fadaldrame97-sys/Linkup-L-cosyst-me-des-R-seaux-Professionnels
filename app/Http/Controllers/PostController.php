<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
 public function index (){
    $post=Post::with('user')->latest()->get();

    return view('feed',compact('posts'));
 }
}
