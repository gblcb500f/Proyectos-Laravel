@extends('layout')
@section('title','Crear Blog')
@section('content')
<h1> Insertar datos</h1>
@include('partials.validation-error')
<div class="container">
<form action="{{route('projects.store')}}" method="post">
    @include('projects._form',['btnText'=>'Guardar'])
</form>
</div>
@endsection