@extends('layout')
@section('titel',$blog->titel)
@section('content')

<div class="container">
    @auth
    <h1>{{$blog->title}}</h1>
   
        <a class="btn btn-dark" href="{{route('projects.edit',$blog->id)}}">Editar</a> 
         <form action="{{route('projects.destroy',$blog->id)}}" method="post">
            @csrf @method("DELETE")
            <br>
            <button class="btn btn-dark">Eliminar</button>
            </form> 
  
    
    @endauth
        <p>Titulo: {{$blog->titulo}}</p>
        <p>Usuario: {{$blog->user->name}}</p>
        <p>Fecha inicio: <img src="{{$blog->FechaInicio}}"></p>
        <p>Fecha fin: {{$blog->FechaFin}}</p>
        <br> 
    
    <a class="btn btn-dark" href="{{route('projects.index')}}">Volver al inicio</a>
    @endsection
</div>
