@extends('plantilla')

@section('contenido')

@if(session()->has('mensaje'))
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
      <tr>
          <td>1</td>
          <td>Taylor GS mini</td>
          <td>Natural</td>
          <td>35</td>
          <td>$6000 USD</td>
          <td>$5800 USD</td>
          <td>2020-10-01</td>
          <td>
              <button type="button" class="btn btn-default" aria-label="Left Align"
              data-toggle="modal" data-target="#myModal">
                  <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
              </button></td>
          <td>
              <button type="button" class="btn btn-default" aria-label="Left Align"
              data-toggle="modal" data-target="#eliminar">
                  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
              </button></td>
          </td>
      </tr>

      <tr>
          <td>2</td>
          <td>Fender Stratocaster</td>
          <td>Amarilla</td>
          <td>10</td>
          <td>$6000 USD</td>
          <td>$5800 USD</td>
          <td>2020-10-01</td>
          <td>
              <button type="button" class="btn btn-default" aria-label="Left Align">
                  <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
              </button></td>
          <td>
              <button type="button" class="btn btn-default" aria-label="Left Align">
                  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
              </button></td>
          </td>
      </tr>

      <tr>
          <td>3</td>
          <td>Gibson Les Paul</td>
          <td>Negra</td>
          <td>20</td>
          <td>$200 USD</td>
          <td>$180 USD</td>
          <td>2020-10-01</td>
          <td>
              <button type="button" class="btn btn-default" aria-label="Left Align">
                  <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
              </button></td>
          <td>
              <button type="button" class="btn btn-default" aria-label="Left Align">
                  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
              </button></td>
          </td>
      </tr>

      <tr>
          <td>4</td>
          <td>Bombo DW</td>
          <td>Negro</td>
          <td>35</td>
          <td>$600 USD</td>
          <td>$580 USD</td>
          <td>2020-10-01</td>
          <td>
              <button type="button" class="btn btn-default" aria-label="Left Align" 
              >
                  <span class="glyphicon glyphicon-refresh" aria-hidden="true"></span>
              </button></td>
          <td>
              <button type="button" class="btn btn-default" aria-label="Left Align">
                  <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
              </button></td>
          </td>
      </tr>
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
                  <form action="validadorAdminInstru" method="post">
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
                          <input type="text" class="form-control" id="cantidad" name="cantidad">
                      </div>
                      {!!$errors -> first('cantidad','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
                      <div class="form-group">
                          <label for="pwd">Precio Compra:</label>
                          <input type="text" class="form-control" id="precioCompra" name="precioCompra">
                      </div>
                      {!!$errors -> first('precioCompra','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
                      <div class="form-group">
                          <label for="pwd">Precio Venta:</label>
                          <input type="text" class="form-control" id="precioVenta"  name="precioVenta">
                      </div>
                      {!!$errors -> first('precioVenta','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
                      <div class="form-group">
                          <label for="pwd">Fecha ingreso:</label>
                          <input type="text" class="form-control" id="fecha"  name="fecha">
                      </div>
                      {!!$errors -> first('fecha','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
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
      <form action="validadorAdminInstru" method="post">
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
                          <input type="text" class="form-control" id="cantidad" name="cantidad">
                      </div>
                      {!!$errors -> first('cantidad','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
                      <div class="form-group">
                          <label for="pwd">Precio Compra:</label>
                          <input type="text" class="form-control" id="precioCompra" name="precioCompra">
                      </div>
                      {!!$errors -> first('precioCompra','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
                      <div class="form-group">
                          <label for="pwd">Precio Venta:</label>
                          <input type="text" class="form-control" id="precioVenta"  name="precioVenta">
                      </div>
                      {!!$errors -> first('precioVenta','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
                      <div class="form-group">
                          <label for="pwd">Fecha ingreso:</label>
                          <input type="text" class="form-control" id="fecha"  name="fecha">
                      </div>
                      {!!$errors -> first('fecha','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}
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
      <button type="button" class="btn btn-danger" data-dismiss="modal">Eliminar</button>
      </div>
  </div>
  
  </div>
</div>


</div>
    @stop 