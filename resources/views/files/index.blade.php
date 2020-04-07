@extends('layout')
@section('content')


<form action="{{route('files.update',$file) }}"
    class="dropzone" id="my-awesome-dropzone">
      {{ csrf_field() }}
   {{--   <label >Imagen del blog<br>
        <input type="file" name="img" value="{{old('img',$file->img)}}">
    </label><br><br>  --}}
    
<button>Enviar</button>
</form> 
@endsection
{{-- 
asset('/file/'.$file->id.'/imagenes')  --}}