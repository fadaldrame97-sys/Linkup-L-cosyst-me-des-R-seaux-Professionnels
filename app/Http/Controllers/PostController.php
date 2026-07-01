<?php

namespace App\Http\Controllers;

//use resources\view\feed.bl
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
 public function index (){
    $posts=Post::with('user')->latest()->get();

    return view('feed',compact('posts'));
 }

 public function store(Request $request){
     $data=$request->validate([
      'content'=>['required|string|max:1000']
     ]);

     Post::create([
      'content'=>$data['content'], 'user_id'=>Auth::id()
     ]);
     
     return redirect()->route('feed') ->with('success', 'Publication créée avec succès.');
 }
}
