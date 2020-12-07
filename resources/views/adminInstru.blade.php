@extends('plantilla')

@section('contenido')

@if(session()->has('mensaje'))
            {!!"<script>Swal.fire('Exito','Todo correcto!','success')</script>"!!}
@endif

@if(session()->has('actualizar'))
            {!!"<script>Swal.fire('Exito','Todo correcto!','success')</script>"!!}
@endif

@if(session()->has('eliminar'))
            {!!"<script>Swal.fire('Exito','Todo correcto!','success')</script>"!!}
@endif

<div class="container">
<h2>Administracion de instrumentos</h2>
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#añadir">Añadir</button>

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
        <td><a href="{{route('instrumentos.show',$instrumento->id)}}">{{ $instrumento->id }}</a></td>
        <td>{{ $instrumento->instrumento }}</td>
        <td>{{ $instrumento->color }}</td>
        <td>{{ $instrumento->cantidad }}</td>
        <td>{{ $instrumento->precioCompra }}</td>
        <td>{{ $instrumento->precioVenta }}</td>
        <td>{{ $instrumento->created_at }}</td>
        <td><a href="{{route('instrumentos.show',$instrumento->id)}}" class="btn btn-default edit" aria-label="Left Align">
            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
        </a></td>
    </tr>
    
    @endforeach
    </tbody>
</table>
</div>


<!-- Trigger the modal with a button -->

<!-- Modal -->
<div class="modal fade" id="añadir" role="dialog">
    <div class="modal-dialog">
    
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Añadir nuevo instrumento</h4>
        </div>
        <div class="modal-body">
                <!--action= "validadorAdminInstru"-->
                <form action="{{route('instrumentos.store')}}" method="post">
                {!! csrf_field() !!}
                <div class="form-group">
                        <label for="pwd">Instrumento:</label>
                        <input type="text" class="form-control" name="instrumento">
                    </div>
                    {!!$errors -> first('instrumento','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
                    
                    <div class="form-group">
                        <label for="email">Color:</label>
                        <input type="text" class="form-control"  name="color">
                    </div>
                    {!!$errors -> first('color','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}

                    <div class="form-group">
                        <label for="pwd">Cantidad:</label>
                        <input type="number" class="form-control"  name="cantidad">
                    </div>
                    {!!$errors -> first('cantidad','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
                    
                    <div class="form-group">
                        <label for="pwd">Precio Compra:</label>
                        <input type="number" class="form-control" name="precioCompra">
                    </div>
                    {!!$errors -> first('precioCompra','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
                    
                    <div class="form-group">
                        <label for="pwd">Precio Venta:</label>
                        <input type="number" class="form-control"  name="precioVenta" value="">
                    </div>
                    {!!$errors -> first('precioVenta','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
                    <!--
                    <div class="form-group">
                        <label for="pwd">Fecha ingreso:</label>
                        <input type="date" class="form-control" id="fecha"  name="fecha">
                    </div>
                    {!!$errors -> first('fecha','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
                    -->
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
    </div>
</div>

</div>
<!--Fin Modal Añadir-->

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Actualizar</h4>
    </div>
    <div class="modal-body">
    <form action="{{route('instrumentos.update',$instrumento->id )}}" method="post" id="editar">
    {!!method_field('put')!!}
    {!! csrf_field() !!} 

                <div class="form-group">
                <input type="hidden" class="form-control" id="idinstrumento" name="idinstrumento">
                        <label for="pwd">Instrumento:</label>
                        <input type="text" class="form-control" id="instrumento" name="instrumento" >
                    </div>
                    {!!$errors -> first('instrumento','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
                    
                    <div class="form-group">
                        <label for="email">Color:</label>
                        <input type="text" class="form-control" id="color" name="color">
                    </div>
                    {!!$errors -> first('color','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}

                    <div class="form-group">
                        <label for="pwd">Cantidad:</label>
                        <input type="number" class="form-control" id="cantidad" name="cantidad" >
                    </div>
                    {!!$errors -> first('cantidad','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
                    
                    <div class="form-group">
                        <label for="pwd">Precio Compra:</label>
                        <input type="number" class="form-control" id="precioCompra" name="precioCompra" >
                    </div>
                    {!!$errors -> first('precioCompra','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
                    
                    <div class="form-group">
                        <label for="pwd">Precio Venta:</label>
                        <input type="number" class="form-control" id="precioVenta"  name="precioVenta" >
                    </div>
                    {!!$errors -> first('precioVenta','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
                    
                    <!--
                    <div class="form-group">
                        <label for="pwd">Fecha ingreso:</label>
                        <input type="date" class="form-control" id="fecha"  name="fecha">
                    </div>
                    {!!$errors -> first('fecha','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
                    -->
            
                    
            <button type="submit" class="btn btn-primary">Actualizar</button>

        </form>
    </div>
    <div class="modal-footer">
    <button type="submit" class="btn btn-default" data-dismiss="modal">Cancelar</button>
    </div>
</div>

</div>
</div>


<!-- Modal -->
<div class="modal fade" id="eliminar" role="dialog">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content">
    <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title"></h4>
    </div>
    <div class="modal-body">
        <h2>¿Desea eliminar?</h2>
    </div>
    <div class="modal-footer">
    <form action="{{route('instrumentos.destroy',$instrumento->id )}}" method="POST">
                @csrf
                @method('DELETE')  
    <button type="submit" class="btn btn-danger" >Eliminar</button>
    </form>
    </div>
</div>

</div>
</div>
<!--
{{-- Fin modal editar --}}
-->
<script type="text/javascript">

$(document).ready(function(){
            $('.editar').on('click', function() {

                $('#myModal').modal('show');
                    $tr = $(this).closest('tr');
                    var data = $tr.children("td").map(function() {
                        return $(this).text();
                    }).get();
                    console.log(data);

                    $('#idinstrumento').val(data[0]);
                    $('#instrumento').val(data[1]);
                    $('#color').val(data[2]);
                    $('#cantidad').val(data[3]);
                    $('#precioCompra').val(data[4]);
                    $('#precioVenta').val(data[5]);
            });
        });
    
</script>

</div>
    @stop 