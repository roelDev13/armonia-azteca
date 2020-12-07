@extends('plantilla')

@section('contenido')

@if(session()->has('mensaje'))
    {!!"<script>Swal.fire('Exito','Venta realizada!','success')</script>"!!}
@endif
<div class="container">
<h2>Vender Componentes</h2>
<div class="table-responsive">          
    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Componente</th>
            <th>Instrumento</th>
            <th>Stock</th>
            <th>Compra</th>
            <th>Venta</th>
            <th>Ingreso</th>
            <th></th>
            
        </tr>
        </thead>
        <tbody>
        @foreach ($consultarComponentes as $componente)
    <tr>
    <td>{{ $componente->id_componente }}</td>
        <td>{{ $componente->componente }}</td>
        <td>{{ $componente->instrumento }}</td>
        <td>{{ $componente->cantidad }}</td>
        <td>{{ $componente->compra }}</td>
        <td>{{ $componente->venta }}</td>
        <td>{{ $componente->created_at }}</td>

            <td>
                <button type="button" class="btn btn-default venderCompo"   aria-label="Left Align"
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
        <form action="{{route('componentesVenta.store')}}" method="post">
        {!! csrf_field() !!}
            <div class="form-group">
                <label for="email">Componente:</label>
                <input type="text" class="form-control" id="componente" name="componente">
            </div>
            {!!$errors -> first('componente','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}

            <div class="form-group">
                <label for="pwd">Instrumento:</label>
                <input type="text" class="form-control" id="instrumento" name="instrumento">
            </div>
            {!!$errors -> first('instrumento','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}

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
                <label for="pwd">Empleado:</label>
                <input type="text" class="form-control" id="empleado" name="empleado">
            </div>
            {!!$errors -> first('empleado','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}

            <div class="form-group">
            
                <label for="pwd">Total:</label>
                <input type="text" class="form-control" id="total" name="total" >
                <input type="submit" id="boton1" name="boton1" value="calcular">
                
                
               
            </div>
            {!!$errors -> first('total','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}


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
<script type="text/javascript">

$(document).ready(function(){

            $('.venderCompo').on('click', function() {

                $('#myModal').modal('show');
                    $tr = $(this).closest('tr');
                    var data = $tr.children("td").map(function() {
                        return $(this).text();
                    }).get();
                    console.log(data);

                    $('#idVenta').val(data[0]);
                    $('#componente').val(data[1]);
                    $('#instrumento').val(data[2]);
                    $('#cantidad').val(data[3]);
                    $('#precio').val(data[4]);
                    
            });
        });
    
</script>
    @stop 