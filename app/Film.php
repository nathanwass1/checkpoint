<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = ['Title', 'Genre', 'Synopsis'];
    
    public function Orders(){
        
        return $this->hasMany(Order::class);
        
    }

public function addOrder($Order){
        
        $this->Orders()->create($Order);
        
    
}

}