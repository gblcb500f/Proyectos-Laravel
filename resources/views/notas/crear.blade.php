@extends('layout')
@section('content')
    @include('partials.validation-error')
    
  <form action="{{route('notas.store')}}" method="post">
    @csrf
     <p>Titulo: <br> <input type="text" name="titulo"></p>
     <p>Contenido:</p>
      <textarea name="contenido" id="" cols="30" rows="10"></textarea>
      <button>Guardar</button>
  </form>
@endsection
 
