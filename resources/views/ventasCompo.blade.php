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
          <tr>
              <td>1</td>
              <td>Cuerdas</td>
              <td>Taylor GS mini</td>
              <td>35</td>
              <td>$50 USD</td>
              <td>$40 USD</td>
              <td>2020-10-01</td>
              <td>
                  <button type="button" class="btn btn-default" aria-label="Left Align"
                  data-toggle="modal" data-target="#myModal">
                      <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
                  </button>
              </td>
          </tr>

          <tr>
              <td>2</td>
              <td>Amplificador</td>
              <td>Fender Stratocaster</td>
              <td>10</td>
              <td>$200 USD</td>
              <td>$180 USD</td>
              <td>2020-10-01</td>
              <td>
                  <button type="button" class="btn btn-default" aria-label="Left Align"
                  data-toggle="modal" data-target="#myModal">
                      <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
                  </button>
              </td>
          </tr>

          <tr>
              <td>3</td>
              <td>Afinador</td>
              <td>Gibson Les Paul</td>
              <td>20</td>
              <td>$40 USD</td>
              <td>$30 USD</td>
              <td>2020-10-01</td>
              <td>
                  <button type="button" class="btn btn-default" aria-label="Left Align"
                  data-toggle="modal" data-target="#myModal">
                      <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
                  </button>
              </td>
          </tr>

          <tr>
              <td>4</td>
              <td>Afinador</td>
              <td>Bombo DW</td>
              <td>35</td>
              <td>$40 USD</td>
              <td>$30 USD</td>
              <td>2020-10-01</td>
              <td>
                  <button type="button" class="btn btn-default" aria-label="Left Align"
                  data-toggle="modal" data-target="#myModal">
                      <span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
                  </button>
              </td>
          </tr>
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
          <form action="validadorVenderCompo" method="post">
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
                  <input type="text" class="form-control" id="cantidad" name="cantidad">
              </div>
              {!!$errors -> first('cantidad','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}

              <div class="form-group">
                  <label for="pwd">Precio:</label>
                  <input type="text" class="form-control" id="precio" name="precio">
              </div>
              {!!$errors -> first('precio','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}

              <div class="form-group">
                  <label for="pwd">Total:</label>
                  <input type="text" class="form-control" id="total"  name="total">
              </div>
              {!!$errors -> first('total','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}

              <div class="form-group">
                  <label for="pwd">Fecha venta:</label>
                  <input type="text" class="form-control" id="fechaVenta"  name="fechaVenta">
              </div>
              {!!$errors -> first('fechaVenta','<div class="alert alert-danger"><strong><span class="text-danger">:message</span></strong> </div>')!!}

              <button type="submit" class="btn btn-primary"> Imprimir Ticket
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