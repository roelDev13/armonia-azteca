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
                <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
            </button></td>
        <td>
            <button type="submit" class="btn btn-default" aria-label="Left Align"
            data-toggle="modal" data-target="#eliminar">
                <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
            </button></td>
        </td>
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
                        <input type="text" class="form-control" id="instrumento" name="instrumento">
                    </div>
                    {!!$errors -> first('instrumento','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
                    
                    <div class="form-group">
                        <label for="email">Color:</label>
                        <input type="text" class="form-control" id="color" name="color">
                    </div>
                    {!!$errors -> first('color','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}

                    <div class="form-group">
                        <label for="pwd">Cantidad:</label>
                        <input type="number" class="form-control" id="cantidad" name="cantidad">
                    </div>
                    {!!$errors -> first('cantidad','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
                    
                    <div class="form-group">
                        <label for="pwd">Precio Compra:</label>
                        <input type="number" class="form-control" id="precioCompra" name="precioCompra">
                    </div>
                    {!!$errors -> first('precioCompra','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
                    
                    <div class="form-group">
                        <label for="pwd">Precio Venta:</label>
                        <input type="number" class="form-control" id="precioVenta"  name="precioVenta">
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
    <form action="{{route('instrumentos.update',$instrumento->id )}}" method="post">
    {!!method_field('put')!!}
    {!! csrf_field() !!} 
                <div class="form-group">
                        <label for="pwd">Instrumento:</label>
                        <input type="text" class="form-control" id="instrumento" name="instrumento" placeholder=" {{ $instrumento->instrumento }} ">
                    </div>
                    {!!$errors -> first('instrumento','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
                    
                    <div class="form-group">
                        <label for="email">Color:</label>
                        <input type="text" class="form-control" id="color" name="color" placeholder=" {{ $instrumento->color }} ">
                    </div>
                    {!!$errors -> first('color','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}

                    <div class="form-group">
                        <label for="pwd">Cantidad:</label>
                        <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder=" {{ $instrumento->cantidad }} ">
                    </div>
                    {!!$errors -> first('cantidad','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
                    
                    <div class="form-group">
                        <label for="pwd">Precio Compra:</label>
                        <input type="number" class="form-control" id="precioCompra" name="precioCompra" placeholder=" {{ $instrumento->precioCompra }} ">
                    </div>
                    {!!$errors -> first('precioCompra','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
                    
                    <div class="form-group">
                        <label for="pwd">Precio Venta:</label>
                        <input type="number" class="form-control" id="precioVenta"  name="precioVenta" placeholder=" {{ $instrumento->precioVenta }} ">
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
    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
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


</div>
    @stop 