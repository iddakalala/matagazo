<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
class Post extends Model
{
 protected $guarded =[]; 

 public function comments()
 {
 	return $this->hasMany(Comment::class);
 }
 public function addComment($body)
 {
 	 // add a comment to  a post
 	 // first way
 	 
   /*	Comment::create([
      'body'=> request('body'),
      'post_id' =>$this->id

   		]);*/
  // second way
  $this->comments()->create(compact('body'));
 }
}
