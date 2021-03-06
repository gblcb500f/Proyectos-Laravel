@extends('layout')
@section('title','Crear Blog')
@section('content')
<h1> Insertar datos</h1>
@include('partials.validation-error')

<form action="{{route('projects.store')}}" method="post">
<label for="">Titulo
    <input type="text" name="titulo" placeholder="Nombre del titulo">
</label><br>
<label for="">Fecha Inicio
    <div class="input-group date" data-provide="datepicker">
        <input type="text" name="FechaInicio" class="form-control">
        <div class="input-group-addon">
            <span class="glyphicon glyphicon-th"></span>
        </div>
    </div>
</label><br>
<label for="">Fecha Final
    <div class="input-group date" data-provide="datepicker">
        <input type="text" name="FechaFin" class="form-control">
        <div class="input-group-addon">
            <span class="glyphicon glyphicon-th"></span>
        </div>
    </div>
</label><br>

<label for="">Provincia
    <select class="selector" name="provincia[]" multiple="multiple">
    <option value='alava'>Álava</option>
    <option value='albacete'>Albacete</option>
    <option value='alicante'>Alicante/Alacant</option>
    <option value='almeria'>Almería</option>
    <option value='asturias'>Asturias</option>
    <option value='avila'>Ávila</option>
    <option value='badajoz'>Badajoz</option>
    <option value='barcelona'>Barcelona</option>
    <option value='burgos'>Burgos</option>
    <option value='caceres'>Cáceres</option>
    <option value='cadiz'>Cádiz</option>
    <option value='cantabria'>Cantabria</option>
    <option value='castellon'>Castellón/Castelló</option>
    <option value='ceuta'>Ceuta</option>
    <option value='ciudadreal'>Ciudad Real</option>
    <option value='cordoba'>Córdoba</option>
    <option value='cuenca'>Cuenca</option>
    <option value='girona'>Girona</option>
    <option value='laspalmas'>Las Palmas</option>
    <option value='granada'>Granada</option>
    <option value='guadalajara'>Guadalajara</option>
    <option value='guipuzcoa'>Guipúzcoa</option>
    <option value='huelva'>Huelva</option>
    <option value='huesca'>Huesca</option>
    <option value='illesbalears'>Illes Balears</option>
    <option value='jaen'>Jaén</option>
    <option value='acoruña'>A Coruña</option>
    <option value='larioja'>La Rioja</option>
    <option value='leon'>León</option>
    <option value='lleida'>Lleida</option>
    <option value='lugo'>Lugo</option>
    <option value='madrid'>Madrid</option>
    <option value='malaga'>Málaga</option>
    <option value='melilla'>Melilla</option>
    <option value='murcia'>Murcia</option>
    <option value='navarra'>Navarra</option>
    <option value='ourense'>Ourense</option>
    <option value='palencia'>Palencia</option>
    <option value='pontevedra'>Pontevedra</option>
    <option value='salamanca'>Salamanca</option>
    <option value='segovia'>Segovia</option>
    <option value='sevilla'>Sevilla</option>
    <option value='soria'>Soria</option>
    <option value='tarragona'>Tarragona</option>
    <option value='santacruztenerife'>Santa Cruz de Tenerife</option>
    <option value='teruel'>Teruel</option>
    <option value='toledo'>Toledo</option>
    <option value='valencia'>Valencia/Valéncia</option>
    <option value='valladolid'>Valladolid</option>
    <option value='vizcaya'>Vizcaya</option>
    <option value='zamora'>Zamora</option>
    <option value='zaragoza'>Zaragoza</option>
      </select>
</label><br>
<label for="">Editoriales
    <select class="selector" name="editorial" >

        
        <option value='alava'>Álava</option>
        <option value='albacete'>Albacete</option>
        <option value='alicante'>Alicante/Alacant</option>
        <option value='almeria'>Almería</option>
        <option value='asturias'>Asturias</option>
        <option value='avila'>Ávila</option>
        <option value='badajoz'>Badajoz</option>
        <option value='barcelona'>Barcelona</option>
        <option value='burgos'>Burgos</option>
        <option value='caceres'>Cáceres</option>
        <option value='cadiz'>Cádiz</option>
        <option value='cantabria'>Cantabria</option>
        <option value='castellon'>Castellón/Castelló</option>
        <option value='ceuta'>Ceuta</option>
        <option value='ciudadreal'>Ciudad Real</option>
        <option value='cordoba'>Córdoba</option>
        <option value='cuenca'>Cuenca</option>
        <option value='girona'>Girona</option>
        <option value='laspalmas'>Las Palmas</option>
        <option value='granada'>Granada</option>
        <option value='guadalajara'>Guadalajara</option>
        <option value='guipuzcoa'>Guipúzcoa</option>
        <option value='huelva'>Huelva</option>
        <option value='huesca'>Huesca</option>
        <option value='illesbalears'>Illes Balears</option>
        <option value='jaen'>Jaén</option>
        <option value='acoruña'>A Coruña</option>
        <option value='larioja'>La Rioja</option>
        <option value='leon'>León</option>
        <option value='lleida'>Lleida</option>
        <option value='lugo'>Lugo</option>
        <option value='madrid'>Madrid</option>
        <option value='malaga'>Málaga</option>
        <option value='melilla'>Melilla</option>
        <option value='murcia'>Murcia</option>
        <option value='navarra'>Navarra</option>
        <option value='ourense'>Ourense</option>
        <option value='palencia'>Palencia</option>
        <option value='pontevedra'>Pontevedra</option>
        <option value='salamanca'>Salamanca</option>
        <option value='segovia'>Segovia</option>
        <option value='sevilla'>Sevilla</option>
        <option value='soria'>Soria</option>
        <option value='tarragona'>Tarragona</option>
        <option value='santacruztenerife'>Santa Cruz de Tenerife</option>
        <option value='teruel'>Teruel</option>
        <option value='toledo'>Toledo</option>
        <option value='valencia'>Valencia/Valéncia</option>
        <option value='valladolid'>Valladolid</option>
        <option value='vizcaya'>Vizcaya</option>
        <option value='zamora'>Zamora</option>
        <option value='zaragoza'>Zaragoza</option>

    </select>
</label><br>
<label for="">Tipo de publicacion
    <input type="text" name="TipoPublicacion" placeholder="Aventuras,ficcion....">
</label><br>
<label for="">Descripcion
   <textarea name="descripcion" id="" cols="15" rows="5"></textarea>
</label><br>

</form>
@endsection