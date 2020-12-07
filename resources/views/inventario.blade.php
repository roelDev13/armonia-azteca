@extends('plantilla')

@section('contenido')

@if(session()->has('mensaje'))
    {!!"<script>Swal.fire('Exito','Reporte registrado!','success')</script>"!!}
@endif

<div class="container">
<h2>Todas las ventas: Instrumento</h2>
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
            <th>Instrumento</th>
            <th>Color</th>
            <th>Cantidad</th>
            <th>Precio</th>
            <th>Total</th>
            <th>Fecha</th>
            <th>Empleado</th>
            <th></th>
            
        </tr>
        </thead>
        <tbody>
        @foreach ($consultarReporteInstru as $instrumento)
        <tr>
            <td>{{ $instrumento->idVentaInstrumentos}}</td>
            <td>{{ $instrumento->instrumento }}</td>
            <td>{{ $instrumento->color }}</td>
            <td>{{ $instrumento->cantidad }}</td>
            <td>{{ $instrumento->precio }}</td>
            <td>{{ $instrumento->total }}</td>
            <td>{{ $instrumento->created_at }}</td>
            <td>{{ $instrumento->empleado }}</td>
            <td>
                <button type="button" class="btn btn-default" aria-label="Left Align"
                data-toggle="modal" data-target="#myModal">
                    <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                </button>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>
    @stop 