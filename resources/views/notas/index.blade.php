@extends('layout')
@section('content')
    <table>
        <thead>
            <th>ID</th>
            <th>Titulo</th>
            <th>Accion</th>
        </thead>
        <tbody>
            @if (isset($notas))
            @foreach ($notas as $item)
                <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->titulo}}</td>
                <td>
                    @can('eliminar notas')
                 <a href="{{route('notas.eliminar',$item->id)}}">Eliminar nota</a>
                    @else
                    Usted no puede eliminar nota    
                    @endcan
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else 
    Lo sentimos no hay notas a mostrar
    @endif
   
 <a href="{{route('notas.create')}}">Crear Notas</a>
 @endsection