<?php

namespace App\Http\Controllers;

//use resources\view\feed.bl
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Like;

class LikeController extends Controller
{
       public function  toggle(Post $post){
     $like=Like::where('user_id',auth::id())->where('post_id',$post->id)->fist();
     if($like){
        $like->delete();

     }
     else{
        Like::create([
            'user_id'=>auth::id(),
            'post_id'=>$post->id,

        ]);
     }   return redirect()->route('feed');
   }
}
