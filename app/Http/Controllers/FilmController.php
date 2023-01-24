<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Film;
use App\Models\ Categorie;
use  Illuminate\Support\Facades\DB;



class FilmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($description = null)
    {
       
   $films = Film::join('categories', 'films.categorie_id', '=', 'categories.id')
               ->get(['films.*', 'categories.name']);
       
    //,dd($films);

        return view('index', compact('films'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $categories = Categorie::all();
    return view('create', compact('categories'));
        //return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $validateData = $request->validate([
 
            'categorie_id' => 'required',
            'title'=>'required|max:255',
            'year'=>'required|max:255',
            'description'=>'required|max:255',

            

        ]);
    

        $films = Film::create($validateData);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( Film $film, $id)
    {


            $categorie = $film->categorie->name;    
    return view('show', compact('film', 'categorie'));

        //$film = Film::find($id);
       //return view('show', compact('film'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function edit(Film $film, $id)
    {
       
         $film = Film::find($id);
        return view('edit', compact('film'));


    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, $id)
    {
    
        
    
    $validateData = $request->validate([


            'title'=>'required|max:255',
            'year'=>'required|max:255',
            'description'=>'required|max:255'


        
    ]);

    Film::whereId($id)->update($validateData);


         return redirect()->back();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Film $film, $id)
    {

          $film = Film::find($id);
       $film->delete();
    return redirect()->back();
    
}
}
