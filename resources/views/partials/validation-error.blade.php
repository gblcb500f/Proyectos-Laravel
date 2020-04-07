@if ($errors->any())
<ul>
    @foreach ($errors->all() as $item)
        <li>{{$item}}</li>
    @endforeach
</ul>
@else
<p>No hay errores</p>
@endif