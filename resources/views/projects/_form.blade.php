@csrf
<label > Titulo del blog<br>
    <input type="text" name="title" value="{{old('title',$blog->title)}}" >
    </label><br>
    <label >Contenido del blog<br>
        <textarea name="descripcion" id="" cols="30" rows="10" >{{old('descripcion',$blog->descripcion)}}</textarea>
    </label><br>
    <input type="file" name="img">
<button>{{$btnText}}</button>








