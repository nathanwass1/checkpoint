<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Film;

class OrderController extends Controller
{
     public function store(Film $Film){
        
        
        $attributes = request()->validate(['Item' => 'required']);
       $Film->addOrder($attributes);
       
        
        
        return back();
    
}

 public function update(Order $Order){
        $method = request()->has('Ordered') ? 'Ordered' : 'NotOrdered';
        $Order->$method();
    return back();
            
    }


}
