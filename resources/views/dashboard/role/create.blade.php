@extends('dashboard.master')
@section('Titulo','NuevoArtículo')
@include('layouts/navigation')
@section('contenido')
<divc class="container py-4">
<form action="{{ route('article.store') }}"method="post">
@csrf
<div class="form-group row">
      <leble for="code"class="col-sm-2 col-form-leble">Código</leble>
      <div class="col-sm-10" >
        <input type="text" class="form-control"name="code" id="code" placeholder=" Ingrese el código del producto">
      </div>
      </div>
      <br>
<div class="form-group row">
      <leble for="name"class="col-sm-2 col-form-leble">Nombre</leble>
      <div class="col-sm-10" >
        <input type="text" class="form-control"name="name" id="name" placeholder=" Nombre del producto">
      </div>
 </div>
 <br>
 <div class="form-group row">
      <leble for="categorie"class="col-sm-2 col-form-leble">Categoria</leble>
      <div class="col-sm-10" >
        <select name="categorie" id="categorie" class="form-select" required>
            <option value="">Selecionar Categoria</option>
            @foreach($categorie as $categorie)
            <option value="{{$categorie->id}}">{{$categorie->name}}</option>
            @endforeach
        </select>
      </div>
 </div>
 <br>
      <div class="form-group row">
      <leble for="sale_price"class="col-sm-2 col-form-leble">Valor Venta</leble>
      <div class="col-sm-10" >
        <input type="text" class="form-control"name="sale_price" id="sale_price" placeholder=" Ingrese el valor del producto">
      </div>
      </div>
      <br>
      <div class="form-group row">
      <leble for="stock"class="col-sm-2 col-form-leble">Catidad disponible (Stock)</leble>
      <div class="col-sm-10" >
        <input type="text" class="form-control"name="stock" id="stock" placeholder=" Ingrese la cantidad disponible">
      </div>
 </div>
      <div class="form-group row">
      <leble for="description">Descripcion</leble>
      <div class="col-sm-10" >
       <input class="form-control" name="description" id="description"></input>
      </div>
      </div>
      <div class="form-group row">
      <leble for="state">Estado</leble>
      <div class="col-sm-10" >
       <select class="form-control" name="state"id="state" >
        <option value="1">Activo</option>
        <option value="0">Inactivo</option>
       </select>
      </div>
      </div>
      <div class="form-group row">
           <div class="col-sm-10 offset-sm-2" >
             <button type="submit"class="btn btn-success">Registrar</button>
             <a href="{{url('dashboard/categorie')}}"class="btn btn-secondary">Regresar</a>
      </div>
      </div>

</form>
</divc>

@endsection