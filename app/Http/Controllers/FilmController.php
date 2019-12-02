<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Film;
use DB;

use App\Events\FilmCreated;


class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function __construct(){
        
        $this->middleware('auth');
    }
    
    
    public function index()
    {
        
          $Films = Film::where('owner_id', auth()->id()) ->get();
        
    
        
        return view('Films.index', compact('Films'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Films.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        
        $validated = request()->validate(['Title' => ['required', 'min:1', 'max:100'], 'Genre' => ['required', 'min:1', 'max:25'],'Synopsis' => ['required', 'min:1', 'max:250']]);
        $validated['owner_id'] = auth()->id();
        $Film = Film::create($validated);
       event(new FilmCreated($Film));
       session()->flash('message', 'The film has been created...');
       
        return redirect ('/Films');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Film $Film)
    {
        
        //$this->authorize('view', $Film);#### OO Method
        //if ($Film->owner_id !== auth()->id()){#### Inline method
           // abort(403);
       // }
       
       if(\Gate::denies('view', $Film)){
           abort(403);
       }
       
       
        return view('Films.show', compact('Film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Film $Film)
    {
         if(\Gate::denies('view', $Film)){
           abort(403);
       }
        return view ('Films.edit', compact ('Film'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Film $Film)
    {
        $Film->Title = request('Title');
        $Film->Genre = request('Genre');        
        $Film->Synopsis = request('Synopsis');
        
        $Film->save();
        session()->flash('message', 'The film has been updated.....');
        return redirect ('/Films');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $Film)
    {
         $Film->delete();
         session()->flash('message', 'The film has been deleted.....');
         return redirect('/Films');
    }
    
  
}
