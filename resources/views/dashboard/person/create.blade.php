@extends('dashboard.master')
@section('Titulo','NuevoCliente')
@include('layouts/navigation')
@section('contenido')
<divc class="container py-4">
<form action="{{ route('person.store') }}"method="post">
@csrf
<div class="form-group row">
      <leble for="type">Tipo de persona</leble>
    <div class="col-sm-10" >
       <select class="form-control" name="type"id="type" >
        <option value="1">Persona Natural</option>
        <option value="2">Empresa</option>
        <option value="3">Proveedor</option>
       </select>
    </div>
</div>

<div class="form-group row">
      <leble for="First_Name">Nombres</leble>
      <div class="col-sm-10" >
        <input type="text" class="form-control"name="First_Name" id="First_Name" placeholder=" Nombres del Usuario">
      </div>
      </div>

      <div class="form-group row">
      <leble for="Last_Name">Apellidos</leble>
      <div class="col-sm-10" >
        <input type="text" class="form-control"name="Last_Name" id="Last_Name" placeholder=" Apellidos del Usuario">
      </div>
      </div>

      <div class="form-group row">
      <leble for="Document_Type">Tipo de documento</leble>
    <div class="col-sm-10" >
       <select class="form-control" name="Document_Type"id="Document_Type" >
        <option value="1">CC</option>
        <option value="2">TI</option>
        <option value="3">Pasaporte</option>
        <option value="4">NIT</option>
       </select>
    </div>
</div>

<div class="form-group row">
      <leble for="Document_Number">Número de documento</leble>
      <div class="col-sm-10" >
        <input type="text" class="form-control"name="Document_Number" id="Document_Number" placeholder=" Número de documento del Usuario">
      </div>
      </div>

 <div class="form-group row">
      <leble for="Adress">Dirección</leble>
      <div class="col-sm-10" >
        <input type="text" class="form-control"name="Adress" id="Adress" placeholder=" Dirección del Usuario">
      </div>
 </div>

 <div class="form-group row">
      <leble for="Phone">Número telefónico</leble>
      <div class="col-sm-10" >
        <input type="text" class="form-control"name="Phone" id="Phone" placeholder=" Teléfono del Usuario">
      </div>
 </div>

 <div class="form-group row">
      <leble for="Email">Correo</leble>
      <div class="col-sm-10" >
        <input type="text" class="form-control"name="Email" id="Email" placeholder=" Correo del Usuario">
      </div>
 </div>
<br>
      
      <div class="form-group row">
           <div class="col-sm-10 offset-sm-2" >
             <button type="submit"class="btn btn-success">Registrar</button>
             <a href="{{url('dashboard/categorie')}}"class="btn btn-secondary">Regresar</a>
      </div>
      </div>

</form>
</divc>

@endsection