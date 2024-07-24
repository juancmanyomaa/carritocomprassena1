@extends('dashboard.master')
@section('titulo','Ingresos')
@include('layouts/navigation')
@section('contenido')
<br>
<h2>Aquí estarán los detalles de ingresos</h2>
<div class="container py-4">
    
    <a href="{{url('dashboard/income')}}"class="btn btn-secondary">Regresar</a>

</div>
@endsection