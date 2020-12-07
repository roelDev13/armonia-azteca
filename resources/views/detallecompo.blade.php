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
            <form action="{{ route('routeName', ['id'=>1]) }}" method="POST" id="edit">
                {!! csrf_field() !!}
                {!!method_field('PUT')!!}
            <div class="form-group">
                        <div class="form-group">
                            <label for="pwd">Componente:</label>
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