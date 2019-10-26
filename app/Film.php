<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $guarded = [];
    
    public function tasks(){
        
        return $this->hasMany(Task::class);
        
    }

public function addTask($task){
        
        $this->tasks()->create($task);
        
    
}

}