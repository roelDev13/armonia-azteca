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
    <h2>Administracion de Componentes</h2>
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
        <tr>
            <td>{{$componenteid -> id_componente}}</td>
            <td>{{$componenteid -> componente}}</td>
            <td>{{$componenteid -> instrumento}}</td>
            <td>{{$componenteid -> cantidad}}</td>
            <td>{{$componenteid -> compra}}</td>
            <td>{{$componenteid -> venta}}</td>
            <td>{{$componenteid  -> created_at}}</td>
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
        </tbody>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="eliminarcomponente" role="dialog">
    <div class="modal-dialog">
    
    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">¿Desea eliminar?</h4>
        </div>
        <div class="modal-body">
            <h3>Este componente será eliminado</h3>
        </div>
        <div class="modal-footer">
        <form action="{{route('componentes.destroy', $componenteid->id_componente )}}" method="POST">
                    @csrf
                    @method('DELETE')  
        <button type="submit" class="btn btn-danger" >Eliminar</button>
        </form>
        </div>
    </div>
    
    </div>
    </div>


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
            <form action="{{route('componentes.update',$componenteid->id_componente )}}" method="POST" id="edit">
                {!! csrf_field() !!}
                {!!method_field('PUT')!!}
            <div class="form-group">
                        <div class="form-group">
                            <label for="pwd">id:</label>
                            <input type="text" class="form-control" id="idcomponentes" name="idcomponente" readonly>
                        </div>        
                        <div class="form-group">
                            <label>Componente:</label>
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
                            <input type="number" class="form-control" id="precioVenta"  name="precioVenta" >
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