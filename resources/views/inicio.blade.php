@extends('plantilla')

@section('contenido')

@if(session()->has('mensaje'))
            {!!"<script>Swal.fire('Ohoh','No tenemos el instrumento en inventario por el momento','warning')</script>"!!}
@endif

@if(session()->has('mensaje2'))
            {!!"<script>Swal.fire('Ohoh','No tenemos ese componente en inventario por el momento','warning')</script>"!!}
@endif

<div class="hero-image">
<div class="hero-text">
    <h1 style="font-size:50px">Armonia Azteca</h1><br>
    <div>
        <p>¿Gustas buscar algún instrumento en epecial?</p>  
        <form class="form-inline" action="{{ route('buscar.search') }}" method="get" role="search">
            {{ csrf_field() }}
            {!!method_field('get')!!}
            <input type="text" class="form-control" size="50" placeholder="Encuentra lo que estas buscando" name="search">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
    </div>
    <br>
    <div>
        <p>¿O tal vez un componente para tu instrumento?</p>  
        <form class="form-inline" action="{{ route('buscar.searchCom') }}" method="get" role="search">
            {{ csrf_field() }}
            {!!method_field('get')!!}
            <input type="text" class="form-control" size="50" placeholder="Encuentra lo que estas buscando" name="search2">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
    </div>
</div>
</div>

    @stop 