<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];
    
       public function Ordered($Ordered = true){
        $this->update(compact('Ordered'));
        
    }
    
    public function NotOrdered(){
        $this->Ordered(false);
        
    }
    
    
    public function Film (){
        
        return $this->belongsTo(Film::class);
    }
    
}
