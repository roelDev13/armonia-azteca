@extends('plantilla')

@section('contenido')

<div class="hero-image">
<div class="hero-text">
    <h1 style="font-size:50px">Armonia Azteca</h1><br>
    <div>
        <p>Stock!</p>  
        <form class="form-inline" action="{{ route('/search') }}" method="get" role="search">
            {{ csrf_field() }}
            <input type="text" class="form-control" size="50" placeholder="Encuentra lo que estas buscando" name="search">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
    </div>
</div>
</div>

    @stop 