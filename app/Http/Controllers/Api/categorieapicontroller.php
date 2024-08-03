<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;

class categorieapicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories=Categorie::all();
        return($categories);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categorie= new Categorie();
        $categorie->name=$request->input('name');
        $categorie->description=$request->input('description');
        $categorie->state=$request->input('state');
        $categorie->save();
        return $categorie;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categorie=categorie ::findorFail($id);
        return response()-> json ($categorie);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
              'name'=>'string|max:50|unique:categories,name, ' .$id,
              'description'=> 'nullable|string|max:256' ,
              'state'=> 'boolean',

        ]);

        $categorie=categorie::find($id);
        $categorie->name=$request->input('name');
        $categorie->description=$request->input('description');
        $categorie->state=$request->input('state');
        $categorie->save();
        return $categorie;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $categorie=categorie::find($id);
        $categorie->delete();
        return ('categoria eliminada');
    }
}
