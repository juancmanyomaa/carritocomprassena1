@extends('dashboard.master')
@section('titulo','categorias')
@include('layouts/navigation')
@section('contenido')
<main>
    <div>
<h1>Listado de categorias</h1>
<br>
<a href="{{url('dashboard/categorie/create')}}"class="btn btn-primary btn-sm"> Nueva Categoria</a>
<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th>ID Categoria</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Estado</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categorie as $categorie)
        <tr>
            <td scope="row">{{$categorie->id}}</td>
            <td>{{$categorie->name}}</td>
            <td>{{$categorie->description}}</td>
            <td>{{$categorie->state ? _('Activo'):_('Inactivo')}}</td>
            <td><a href="{{url('dashboard/categorie/'.$categorie->id.'/edit')}}"class="bi bi-pencil"></td>
        <td>
            <form action="{{url('dashboard/categorie/'.$categorie->id)}}"method="post">
                @method("DELETE")
                @csrf
                <button class="bi bi-eraser-fill" type="submit"></button>
            </form>
        </td>
        </tr>
        <tr>
            <td scope="row"></td>
            <td></td>
            <td></td>
        </tr>
        @endforeach
    </tbody>
</table>
    </div>
</main>
@endsection