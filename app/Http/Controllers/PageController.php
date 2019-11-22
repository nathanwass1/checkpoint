<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Notifications\FilmSubscriptionPurchased;
use App\User;
use App\Post;

class PageController extends Controller
{
     public function contacts (){
    	return view ('contacts');
    }
    
    public function about (){
        $options = [
            'Input Favourite Film',
            'Fill out the genre',
            'Fill out the synopsis',
            'Upload an image',
            'Submit to site'            
        ];
        
        $example1 = ['Terminator 2',
        'Action',
        'A cyborg, identical to the one who failed to kill Sarah Connor, must now protect her teenage son, John Connor, from a more advanced and powerful cyborg.'];
        
        
        
        
    	return view ('about', ['options' => $options], ['example1' => $example1]);
    }
    
    public function snacks(){
        $snackcollection = collect([
        ['name'=>'Popcorn','category'=>'Savoury','price'=>'2.50','meerkat'=>true],
        ['name'=>'Skittles','category'=>'Sweet','price'=>'1.50'],
        ['name'=>'Toblerone','category'=>'Sweet','price'=>'2.00'],
        ['name'=>'Ice Cream','category'=>'Sweet','price'=>'2.75'],
        ['name'=>'Nachos','category'=>'Savoury','price'=>'3.50'],
        ['name'=>'Hotdog','category'=>'Savoury','price'=>'3.00'],
        ['name'=>'Chocolate Bar','category'=>'Sweet','price'=>'0.90','meerkat'=>true],
        ['name'=>'Tunnocks Tea Cake','category'=>'Sweet','price'=>'1.00'],
        ]);
        $freeItems = $snackcollection->where('meerkat', true);
        $totalPrice = $snackcollection->sum('price');
        $totalDiscount = $freeItems->sum('price');
        $finalPrice = $totalPrice - $totalDiscount;
        $groupedCollection = $snackcollection->groupBy('category');
        return view('snacks')
                ->with('price', $totalPrice)
                ->with('freeItems', $freeItems)
                ->with('totalDiscount', $totalDiscount)
                ->with('finalPrice', $finalPrice)
                ->with('groupedCollection', $groupedCollection->all());
    }
    
public function welcome(){
  
    return view('welcome'); 
}

public function subscribe(){
    $user = User::first();
    $user->notify(new FilmSubscriptionPurchased);
    return view('welcome');
    
}  


    
    
}
