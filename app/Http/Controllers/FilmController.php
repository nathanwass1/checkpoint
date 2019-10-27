<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;


class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $Films = Film::all();
        
    
        
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
        
        //Film::create(request()->all());
        
        $validated = request()->validate(['Title' => ['required', 'min:1', 'max:100'], 'Genre' => ['required', 'min:1', 'max:25'],'Synopsis' => ['required', 'min:1', 'max:250']]);
        //$validated['owner_id'] = auth()->id();
        Film::create($validated);
        
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
         return redirect('/Films');
    }
}
