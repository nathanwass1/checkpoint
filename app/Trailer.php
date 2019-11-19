<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trailer extends Model
{
    public function watchable(){
        return $this->morphTo();
    }
}
