<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categorie;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexc()
    {
          $categories = Categorie::all();

        return view('indexc', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createc()
    {
        return view('createc');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storec(Request $request)
    {
        $validateData = $request->validate([


            'name'=>'required|max:255',
            'description'=>'required|max:255',
            

        ]);
    

        $categories = Categorie::create($validateData);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showc(Categorie $categorie ,$id)
    {
         $categorie = Categorie::find($id);
       return view('showc', compact('categorie'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editc(Categorie $categorie ,$id)
    {
       

         $categorie = Categorie::find($id);
        return view('editc', compact('categorie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatec(Request $request, $id)
    {
         
    $validatedData = $request->validate([


            'name'=>'required|max:255',
            'description'=>'required|max:255',


        
    ]);

    Categorie::whereId($id)->update($validatedData);


         return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyc( Categorie $categorie,$id)
    {
          $categorie = Categorie::find($id);
       $categorie->delete();
    return redirect()->back();
    }
}
