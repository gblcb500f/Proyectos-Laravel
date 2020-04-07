@extends('layout')
@section('content')
@auth
<div class="container ">
    <div class="row">
        <div class="mt-5">
            <h1 class="text-center">El permiso de la pagina</h1>
        </div>
    </div>
   {{--  <?php
    $user=Auth::user();
        if($user->esAdmin()){
            echo "Eres Administrador tienes total control en la pagina";
        }else{
            echo "Eres un usuario tienes unas ciertas restricciones";
        }
   ?> --}}
</div>
@endauth()


@endsection
