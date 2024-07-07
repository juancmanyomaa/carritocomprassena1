<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Categorie;
class categorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorie=Categorie::all();
        return view('dashboard.categorie.index',['categorie'=>$categorie]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.categorie.create');
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
        return view("dashboard.categorie.message",['msg'=>"Categoria agregada con exito"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit( $id)
    {
        $categorie=categorie::find($id);
        return view('dashboard.categorie.edit',['categorie'=>$categorie]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $categorie=categorie::find($id);
        $categorie->name=$request->input('name');
        $categorie->description=$request->input('description');
        $categorie->state=$request->input('state');
        $categorie->save();
        return view("dashboard.categorie.message",['msg'=>"Categoria actualizada con exito"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $categorie=categorie::find($id);
        $categorie->delete();
        return redirect("dashboard/categorie");  
    }
}
