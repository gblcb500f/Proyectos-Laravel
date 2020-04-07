@extends('layout')
@section('title','Blog')
@section('content')
@auth

    <div class="container ">
        <h1 class="text-center mt-5">Tu perfil</h1>
        <div class="row">
            <div class="col col-5 bg-danger">
            <a href="{{route('projects.create')}}" class="btn btn-dark">Crear un nuevo blog</a>
            </div>
            <div class="col col-2"></div>
            <div class="col col-5 bg-danger">
            
         </div>
        </div>
        <h3 class="mt-5">Aqui puedes ver todos tus blogs subidos :</h3>
        @isset($blog)
        @foreach ($blog as $item)
        <div class="row">
            <div class="col col-12 bg-danger">
            <h3>{{$item->title}}</h3>
            <p>{{$item->user->name}}</p>
            <p class="mt-5"><img src="{{$item->img}}"><br>{{$item->texto}}</p>
            </div>
        </div>    
        <a href="{{route('projects.show',$item->id)}}" class="btn btn-dark">Editar un blog</a>
        <a href="{{route('files.index',$item->id)}}" class="btn btn-dark">Subir imagenes</a>
        @endforeach
            @else 
            <p>Lo sentimos no tiene blogs a mostrar</p>
        @endisset
    </div>

@else 
<div class="container ">
    <div class="row">
        <div class="col col-12 mt-5">
            <h1 class="text-center ">Lo sentimos, no ha iniciado sesion , no podra ver nada hasta entonces</h1>
        </div>
        
    </div>
   
</div>

@endauth
@endsection