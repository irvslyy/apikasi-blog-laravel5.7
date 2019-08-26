<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

   protected $fillable = [
   		'post_id',
   		'user_id',
   		'message',
   ];

   public function Blog()
   {
   	return $this->belongsTo(Post::class);
   }
}
