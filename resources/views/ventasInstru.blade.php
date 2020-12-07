@extends('plantilla')

@section('contenido')

@if(session()->has('mensaje'))
    {!!"<script>Swal.fire('Exito','Venta realizada!','success')</script>"!!}
@endif

<div class="container">
<h2>Vender instrumento</h2>
<div class="table-responsive">          
<table class="table">
    <thead>
    <tr>
        <th>#</th>
        <th>Instrumento</th>
        <th>Color</th>
        <th>Stock</th>
        <th>Compra</th>
        <th>Venta</th>
        <th>Ingreso</th>
        <th></th>
        
    </tr>
    </thead>
    <tbody>
    @foreach ($consultarInstrumentos as $instrumento)
    <tr>
    <td>{{ $instrumento->id }}</td>
        <td>{{ $instrumento->instrumento }}</td>
        <td>{{ $instrumento->color }}</td>
        <td>{{ $instrumento->cantidad }}</td>
        <td>{{ $instrumento->precioCompra }}</td>
        <td>{{ $instrumento->precioVenta }}</td>
        <td>{{ $instrumento->created_at }}</td>

        <td>
            <button type="button" class="btn btn-default" aria-label="Left Align"
            data-toggle="modal" data-target="#myModal">
                <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
            </button>
        </td>
    
    </tr>
    @endforeach

    </tbody>
</table>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Empleado: #Victor Dimas Elias </h4>
    </div>
    <div class="modal-body">
        <form action="validadorVenderInstru" method="post">

            <div class="form-group">
                <label for="pwd">Instrumento:</label>
                <input type="text" class="form-control" id="instrumento" name="instrumento">
            </div>
            {!!$errors -> first('instrumento','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}

            <div class="form-group">
                <label for="pwd">Color:</label>
                <input type="text" class="form-control" id="color" name="color">
            </div>
            {!!$errors -> first('color','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}

            <div class="form-group">
                <label for="pwd">Cantidad:</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad">
            </div>
            {!!$errors -> first('cantidad','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}

            <div class="form-group">
                <label for="pwd">Precio:</label>
                <input type="number" class="form-control" id="precio" name="precio">
            </div>
            {!!$errors -> first('precio','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}

            <div class="form-group">
                <label for="pwd">Fecha venta:</label>
                <input type="date" class="form-control" id="fechaVenta"  name="fechaVenta">
            </div>
            {!!$errors -> first('fechaVenta','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}

            <button type="submit" class="btn btn-primary"> Realizar Compra
                <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
            </button>
        </form>
    </div>
    <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    </div>
</div>

</div>
</div>

</div>
    @stop 