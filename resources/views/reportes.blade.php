@extends('plantilla')

@section('contenido')

@if(session()->has('mensaje'))
            {!!"<script>Swal.fire('Exito','Reporte registrado!','success')</script>"!!}
        @endif

<div class="container">
<h2>Todas las ventas: Componente</h2>
    <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> Filtrar
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
        <input class="form-control" id="myInput" type="text" placeholder="Search..">
        <li><a href="#">Fecha</a></li>
        <li><a href="#">Empleado</a></li>
        </ul>
    </div>
<div class="table-responsive">          
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Componente</th>
            <th>Instrumento</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Total</th>
            <th>Fecha</th>
            <th>Empleado</th>
            <th></th>
            
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>Cuerdas</td>
            <td>Taylor GS mini</td>
            <td>1</td>
            <td>$6000 USD</td>
            <td>$6000 USD</td>
            <td>2020-10-01</td>
            <td>Victor Dimas Elias</td>
            <td>
                <button type="button" class="btn btn-default" aria-label="Left Align"
                data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                </button>
            </td>
        </tr>

        <tr>
            <td>2</td>
            <td>Amplificador</td>
            <td>Fender Stratocaster</td>
            <td>1</td>
            <td>$6000 USD</td>
            <td>$6000 USD</td>
            <td>2020-10-01</td>
            <td>Victor Dimas Elias</td>
            <td>
                <button type="button" class="btn btn-default" aria-label="Left Align"
                data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                </button>
            </td>
        </tr>

        <tr>
            <td>3</td>
            <td>Afinador</td>
            <td>Gibson Les Paul</td>
            <td>2</td>
            <td>$200 USD</td>
            <td>$400 USD</td>
            <td>2020-10-01</td>
            <td>Victor Dimas Elias</td>
            <td>
                <button type="button" class="btn btn-default" aria-label="Left Align"
                data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                </button>
            </td>
        </tr>

        <tr>
            <td>4</td>
            <td>Afinador</td>
            <td>Bombo DW</td>
            <td>3</td>
            <td>$600 USD</td>
            <td>$1800 USD</td>
            <td>2020-10-01</td>
            <td>Victor Dimas Elias</td>
            <td>
                <button type="button" class="btn btn-default" aria-label="Left Align"
                data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                </button>
            </td>
        </tr>
        </tbody>
    </table>
</div>
</div>
    @stop 