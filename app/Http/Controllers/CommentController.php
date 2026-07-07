<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreCommentRequest;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Post;
class CommentController extends Controller
{
     public function store(StoreCommentRequest $request, Post $post){
     $data=$request->validated();

     Comment::create([
      'content'=>$data['content'],
       'user_id'=>Auth::id(),
       'post_id'=>$post->id,
     ]);
     
     return redirect()->route('feed');
 }

  public function destroy($id){
     $comment=comment::findOrFail($id);

     $this->authorize('delete', $comment);
     $comment->delete();

     return redirect()->route('feed');
  }

}
