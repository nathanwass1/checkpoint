<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class collection extends Model
{
    public function trailers (){
        
        return $this->morphMany(Trailer::class,'watchable');
        
        
    }
}
