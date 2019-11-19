<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
class Review extends Model
{
    public static function boot(){
        parent::boot();
        
        static::updating(function($review){
            $review->adjust();
            
        });
    }
    
    
    public function adjustments(){
        return $this->belongsToMany(User::class, 'adjustments')
        ->withTimestamps()
        ->withPivot(['before', 'after'])
        ->latest('pivot_updated_at');
        
    }
    
    public function adjust($userId = null){
        $userId = $userId ?: Auth::id();
        $changed = $this->getDirty();
         return $this->adjustments()->attach($userId, $this->getDiff());
    }
    
    protected function getDiff(){
            $changed = $this->getDirty();
            $before = json_encode(array_intersect_key($this->fresh()->toArray(),$changed));
            $after = json_encode($changed);
        return compact('before', 'after');
    }
}

