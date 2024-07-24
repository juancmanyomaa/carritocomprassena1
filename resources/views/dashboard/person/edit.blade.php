@extends('dashboard.master')
@section('Titulo','NuevoCliente')
@include('layouts/navigation')
@section('contenido')
<divc class="container py-4">
    <h1 class="mb-4">Modificar Usuario</h1>
<form action="{{ url('dashboard/person/'.$person->id) }}"method="post">
@csrf
@method('PUT')

<div class="form-group row">
      <leble for="type">Tipo de persona</leble>
    <div class="col-sm-10" >
       <select class="form-control" name="type"id="type" >
        <option value="1"{{$person->type=='Persona Natural' ? 'selected' : ''}}>Persona Natural</option>
        <option value="2"{{$person->type=='Empresa' ? 'selected' : ''}}>Empresa</option>
        <option value="3"{{$person->type=='Proveedor' ? 'selected' : ''}}>Proveedor</option>
       </select>
    </div>
</div>



<div class="form-group row">
      <leble for="First_Name">Nombres</leble>
      <div class="col-sm-10" >
        <input type="text" class="form-control"name="First_Name" id="First_Name" value="{{$person->First_Name}}"placeholder=" Nombres del Usuario">
      </div>
      </div>

      <div class="form-group row">
      <leble for="Last_Name">Apellidos</leble>
      <div class="col-sm-10" >
        <input type="text" class="form-control"name="Last_Name" id="Last_Name" value="{{$person->Last_Name}}" placeholder=" Apellidos del Usuario">
      </div>
      </div>

      <div class="form-group row">
      <leble for="Document_Type">Tipo de documento</leble>
    <div class="col-sm-10" >
       <select class="form-control" name="Document_Type"id="Document_Type" >
        <option value="1"{{$person->Document_Type=='CC' ? 'selected' : ''}}>CC</option>
        <option value="2"{{$person->Document_Type=='TI' ? 'selected' : ''}}>TI</option>
        <option value="3"{{$person->Document_Type=='Pasaporte' ? 'selected' : ''}}>Pasaporte</option>
        <option value="4"{{$person->Document_Type=='NIT' ? 'selected' : ''}}>NIT</option>
       </select>
    </div>
</div>

<div class="form-group row">
      <leble for="Document_Number">Número de documento</leble>
      <div class="col-sm-10" >
        <input type="text" class="form-control"name="Document_Number" id="Document_Number" value="{{$person->Document_Number}}" placeholder=" Número de documento del Usuario">
      </div>
      </div>

 <div class="form-group row">
      <leble for="Adress">Dirección</leble>
      <div class="col-sm-10" >
        <input type="text" class="form-control"name="Adress" id="Adress" value="{{$person->Adress}}" placeholder=" Dirección del Usuario">
      </div>
 </div>

 <div class="form-group row">
      <leble for="Phone">Número telefónico</leble>
      <div class="col-sm-10" >
        <input type="text" class="form-control"name="Phone" id="Phone" value="{{$person->Phone}}" placeholder=" Teléfono del Usuario">
      </div>
 </div>

 <div class="form-group row">
      <leble for="Email">Correo</leble>
      <div class="col-sm-10" >
        <input type="text" class="form-control"name="Email" id="Email" value="{{$person->Email}}" placeholder=" Correo del Usuario">
      </div>
 </div>
<br>
      
      <div class="form-group row">
           <div class="col-sm-10 offset-sm-2" >
             <button type="submit"class="btn btn-success">Actualizar</button>
             <a href="{{url('dashboard/categorie')}}"class="btn btn-secondary">Regresar</a>
      </div>
      </div>

</form>
</divc>
@endsection