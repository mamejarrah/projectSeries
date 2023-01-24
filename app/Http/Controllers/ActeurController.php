<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Acteur;

class ActeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexa()
    {
          $acteurs = Acteur::all();

        return view('indexa', compact('acteurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createa()
    {
       return view('createa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storea(Request $request)
    {
          $validateData = $request->validate([


            'prenomNom'=>'required|max:255',
            'telephone'=>'required|max:255',
            

        ]);
    

        $acteurs = Acteur::create($validateData);

        return redirect('acteurs');//->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showa(Acteur $acteur, $id)
    {
         $acteur = Acteur::find($id);
       return view('showa', compact('acteur'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edita(Acteur $acteur,$id)
    {
        
         $acteur = Acteur::find($id);
        return view('edita', compact('acteur'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatea(Request $request, $id)
    {
         $validatedData = $request->validate([


            'prenomNom'=>'required|max:255',
            'telephone'=>'required|max:255',


        
    ]);

  Acteur::whereId($id)->update($validatedData);


         return redirect('acteurs');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroya(Acteur $acteur,$id)
    {
       $acteur = Acteur::find($id);
       $acteur->delete();
    return redirect()->back();
    }
}
