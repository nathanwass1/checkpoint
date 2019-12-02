<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;


class ReviewsController extends Controller
{
    public function show(Review $review){
        
        
        
        
        return view('Reviews.show')->withReview($review);
    }
    
     public function index()
    {
        
          $reviews = Review::all();
          
        
        return view('Reviews.index', compact('reviews'));
    }

    
}
