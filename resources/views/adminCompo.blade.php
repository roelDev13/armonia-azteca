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
            @foreach ($componente as $comps)
        <tr>
            <td><a href="{{route('componentes.show',$comps->id_componente)}}">{{$comps -> id_componente}}</a></td>
            <td>{{$comps -> componente}}</td>
            <td>{{$comps -> instrumento}}</td>
            <td>{{$comps -> cantidad}}</td>
            <td>{{$comps -> compra}}</td>
            <td>{{$comps -> venta}}</td>
            <td>{{$comps -> created_at}}</td>
            <td>
                
                <a href="{{route('componentes.show',$comps->id_componente)}}" class="btn btn-default edit" aria-label="Left Align">
                    <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                </a>
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
                        <input type="number" class="form-control" id=""  name="precioVenta" >
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


</div>

    @stop 