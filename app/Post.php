<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function comments(){
        return $this->hasMany(Comments::class);
    }
    
    public function ratings(){
        return $this->belongsToMany(Rating::class);
    }
    
    public function posts(){
        return $this->belongsTo(User::class);
    }
    use Likable;
    
}
