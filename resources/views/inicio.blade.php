@extends('plantilla')

@section('contenido')

<div class="hero-image">
<div class="hero-text">
    <h1 style="font-size:50px">Armonia Azteca</h1><br>
    <div>
        <p>Stock!</p>  
        <form class="form-inline" action="{{ URL::to('/search') }}" method="POST" role="search">
            <input type="email" class="form-control" size="50" placeholder="Encuentra lo que estas buscando" name="q">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>
    </div>
</div>
</div>

    @stop 