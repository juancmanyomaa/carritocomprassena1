<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Categorie;

class articleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $article=Article::all();
        return view('dashboard.article.index',['article'=>$article]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorie=Categorie::all();
        return view('dashboard.article.create',['categorie'=>$categorie]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $article= new Article();
        $article-> code=$request->input('code');
        $article-> name=$request->input('name');
        $article-> sale_price=$request->input('sale_price');
        $article-> stock=$request->input('stock');
        $article-> description=$request->input('description');
        $article-> state=$request->input('state');
        $article-> idCategory=$request->input('categorie');
        $article-> save ();
        return view ("dashboard.article.message",['msg'=>"Artículo creada con exito"]);

        
           
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
    public function edit($id)
    {
        $article=Article::find($id);
        return view('dashboard.article.edit', ['article'=>$article,'categorie'=>Categorie::all()]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $article= Article::find($id);
        $article-> code=$request->input('code');
        $article-> name=$request->input('name');
        $article-> sale_price=$request->input('sale_price');
        $article-> stock=$request->input('stock');
        $article-> description=$request->input('description');
        $article-> state=$request->input('state');
        $article-> idCategory=$request->input('categorie');
        $article-> save ();
        return view ("dashboard.article.message",['msg'=>"Artículo actualizado con exito"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $article=Article::find($id);
        $article->delete();
        return redirect("dashboard/article");
    }
}
