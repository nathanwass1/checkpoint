<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;
use App\Mail\FilmCreated;

class Film extends Model
{
    //protected $fillable = ['Title', 'Genre', 'Synopsis']; ##Removed to prevent SQL owner_id error.
    protected $guarded = [];
    
    
    protected static function boot (){
        parent::boot();
        
        static::created(function($Film){
             
        });
    }
    
     public function owner (){
        
        return $this->belongsTo(User::class);
        
        
    }
    
    public function Orders(){
        
        return $this->hasMany(Order::class);
        
    }

public function addOrder($Order){
        
        $this->Orders()->create($Order);
        
    
}

}