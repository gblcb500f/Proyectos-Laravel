@extends('layout')
@section('titel','Editar blog')
@section('content')
@auth

    <div class="container ">
        <h3 class="text-center mt-5">Selecciona un blog para editar</h3>
        <div class="row">
            <div class="col col-5 bg-danger">
            <a href="{{route('projects.create')}}" class="btn btn-dark">Crear un nuevo blog</a>
            </div>
            <div class="col col-2"></div>
            <div class="col col-5 bg-danger">
                <a href="{{route('projects.index')}}" class="btn btn-dark">Muestrame los blogs</a>
            </div>
        </div>
        @include('partials.validation-error')
        <form action="{{route('projects.update',$blog->id)}}" method="post">
         @method("PATCH")
        @include('projects._form',['btnText'=>'Actualizar'])
        </form>
         
        
       
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