<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    public function post(){
        return $this->belongsTo(Post::class);
    }
    
   use Likable;
}
