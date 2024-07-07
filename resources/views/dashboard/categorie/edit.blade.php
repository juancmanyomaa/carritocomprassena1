@extends('dashboard.master')
@section('Titulo','NuevaCategorias')
@include('layouts/navigation')
@section('contenido')
<divc class="container py-4">
    <h1 class="mb-4">Modificar Categoria</h1>
<form action="{{ url('dashboard/categorie/'.$categorie->id) }}"method="post">
@csrf
@method('PUT')
<div class="form-group row">
      <leble for="name"class="col-sm-2 col-form-leble">Nombre</leble>
      <div class="col-sm-10" >
        <input type="text" class="form-control"name="name" id="name" value="{{$categorie->name}}" placeholder=" Nombre El Categoria">
      </div>
      <div class="form-group row">
      <leble for="description">Descripcion</leble>
      <div class="col-sm-10" >
       <textarea class="form-control" name="description" id="description">{{$categorie->description}}</textarea>
      </div>
      </div>
      <div class="form-group row">
      <leble for="state">Estado</leble>
      <div class="col-sm-10" >
       <select class="form-control" name="state"id="state" >
        <option value="1"{{ $categorie->state==1 ? 'selected' : ''}}>Activo</option>
        <option value="0"{{ $categorie->state==0 ? 'selected' : ''}}>Inactivo</option>
       </select>
      </div>
      </div>
      <div class="form-group row">
           <div class="col-sm-10 offset-sm-2" >
             <button type="submit"class="btn btn-success">Actualizar</button>
             <a href="{{url('dashboard/categorie')}}"class="btn btn-secondary">Regresar</a>
      </div>
      </div>
</div>
</form>
</divc>

@endsection