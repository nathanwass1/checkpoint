<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Trailer extends Model
{
    public function parent(){
        return $this->morphTo('watchable');
    }
}
