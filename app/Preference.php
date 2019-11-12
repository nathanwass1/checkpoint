<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Preference extends Model
{
    public function posts()
{
    return $this->hasManyThrough(Post::class, User::class);
}    
}
