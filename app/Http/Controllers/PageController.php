<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    


    
    
    
}
