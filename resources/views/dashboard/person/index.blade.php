@extends('dashboard.master')
@section('titulo','Datos del Usuario')
@include('layouts/navigation')
@section('contenido')
<main>
    <div>
<h1>Listado de Usuarios</h1>
<br>
<a href="{{url('dashboard/person/create')}}"class="btn btn-primary btn-sm"> Nuevo usuario</a>

<table class="table table-dark table-striped">
    <thead>
        <tr>
            <th>ID Usuario</th>
            <th>Tipo de persona </th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Tipo de documento</th>
            <th>Número de documento</th>
            <th>Dirección</th>
            <th>Celular</th>
            <th>Correo</th>
            <th>FechaCreación</th>
            <th>FechaActualización</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
    </thead>
    <tbody>
        @foreach($person as $person)
        <tr>
            <td scope="row">{{$person->id}}</td>
            <td>{{$person->type }}</td>
            <td>{{$person->First_Name}}</td>
            <td>{{$person->Last_Name}}</td>
            <td>{{$person->Document_Type}}</td>
            <td>{{$person->Document_Number}}</td>
            <td>{{$person->Adress}}</td>
            <td>{{$person->Phone}}</td>
            <td>{{$person->Email}}</td>
            <td>{{$person->created_at}}</td>
            <td>{{$person->updated_at}}</td>
            <td><a href="{{url('dashboard/person/'.$person->id.'/edit')}}"class="bi bi-pencil"></td>
        <td>
            <form action="{{url('dashboard/person/'.$person->id)}}"method="post">
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