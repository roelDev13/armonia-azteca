@extends('plantilla')
@section('contenido')

    @if(session()->has('mensaje'))
        {!!"<script>Swal.fire('Exito','Todo correcto!','success')</script>"!!}
@endif

<div class="container">
<h2>Administracion de Componentes</h2>
<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#añadir">Añadir</button>

<div class="table-responsive">          
    <table id="datatable" class="table">
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
            @foreach ($getComponentes as $componentes)
        <tr>
            <td>{{$componentes -> id_componente}}</td>
            <td>{{$componentes -> componente}}</td>
            <td>{{$componentes -> instrumento}}</td>
            <td>{{$componentes -> cantidad}}</td>
            <td>{{$componentes -> compra}}</td>
            <td>{{$componentes -> venta}}</td>
            <td>{{$componentes -> created_at}}</td>
            <td>
                
                <button  class="btn btn-default edit" aria-label="Left Align"
                data-toggle="modal" data-target="#editarcomponente">
                    <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
                </button>
            </td>
            <td>
                <button type="submit" class="btn btn-default " aria-label="Left Align"
                data-toggle="modal" data-target="#eliminarcomponente">
                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                </button>
            </td>
            
        </tr>
        @endforeach
        </tbody>
    </table>
</div>


<!-- Trigger the modal with a button -->

<!-- Modal Añadir -->
<div class="modal fade" id="añadir" role="dialog">
    <div class="modal-dialog">
    
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Añadir nuevo componente</h4>
        </div>

        <div class="modal-body">
                <form action="{{ route('componentes.añadir') }}" method="post">
                    {!! csrf_field() !!}
                    
                    <div class="form-group">
                        <label for="pwd">Componente:</label>
                        <input type="text" class="form-control" id="" name="componente">
                    </div>
                    {!!$errors -> first('componente','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
                    <div class="form-group">
                        <label for="email">Instrumento:</label>
                        <input type="text" class="form-control" id="" name="instrumento">
                    </div>
                    {!!$errors -> first('instrumento','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
                    <div class="form-group">
                        <label for="pwd">Cantidad:</label>
                        <input type="number" class="form-control" id="" name="cantidad">
                    </div>
                    {!!$errors -> first('cantidad','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
                    <div class="form-group">
                        <label for="pwd">Precio Compra:</label>
                        <input type="number" class="form-control" id="" name="precioCompra">
                    </div>
                    {!!$errors -> first('precioCompra','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
                    <div class="form-group">
                        <label for="pwd">Precio Venta:</label>
                        <input type="number" class="form-control" id=""  name="precioVenta">
                    </div>
                    {!!$errors -> first('precioVenta','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
                    
                    <button type="submit" class="btn btn-success">Guardar</button>
                </form>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
    </div>
</div>
</div>
<!-- Modal Añadir -->




<!-- Modal EDITAR -->
<div class="modal fade" id="editarcomponente" role="dialog">
    <div class="modal-dialog">
    
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Actualizar</h4>
        </div>
    
        <div class="modal-body">
            <form action="/componentes" method="post" id="edit">
                {!! csrf_field() !!}
                {!!method_field('put')!!}
            <div class="form-group">
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="idcomponente" name="componente">
                            <label for="pwd">Componente:</label>
                            <input type="text" class="form-control" id="componente" name="componente">
                        </div>
                        {!!$errors -> first('componente','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
                        <div class="form-group">
                            <label for="email">Instrumento:</label>
                            <input type="text" class="form-control" id="instrumento" name="instrumento">
                        </div>
                        {!!$errors -> first('instrumento','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
    
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
                        <button type="submit" class="btn btn-success">Modificar</button>
            </form>
        </div>
        <div class="modal-footer">
        <button type="submit" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </div>
    </div>
    </div>
</div>

{{-- Fin modal editar --}}
<script type="text/javascript">

$(document).ready(function(){
            $('.edit').on('click', function() {

                $('#editarcomponente').modal('show');
                    $tr = $(this).closest('tr');
                    var data = $tr.children("td").map(function() {
                        return $(this).text();
                    }).get();
                    console.log(data);

                    $('#idcomponentes').val(data[0]);
                    $('#componente').val(data[1]);
                    $('#instrumento').val(data[2]);
                    $('#cantidad').val(data[3]);
                    $('#precioCompra').val(data[4]);
                    $('#precioVenta').val(data[5]);
            });
        });
    
</script>


</div>

    @stop 