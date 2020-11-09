@extends('plantilla')

@section('contenido')
<div class="container">
  <h2>Todas las ventas: Instrumento</h2>
      <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"> Filtrar
          <span class="caret"></span></button>
          <ul class="dropdown-menu">
          <input class="form-control" id="myInput" type="text" placeholder="Search..">
          <li><a href="#">Fecha</a></li>
          <li><a href="#">Empleado</a></li>
          </ul>
      </div>
  <div class="table-responsive">          
      <table class="table">
          <thead>
          <tr>
              <th>#</th>
              <th>Instrumento</th>
              <th>Color</th>
              <th>Cantidad</th>
              <th>Precio</th>
              <th>Total</th>
              <th>Fecha</th>
              <th>Empleado</th>
              <th></th>
              
          </tr>
          </thead>
          <tbody>
          <tr>
              <td>1</td>
              <td>Taylor GS mini</td>
              <td>Natural</td>
              <td>1</td>
              <td>$50 USD</td>
              <td>$50 USD</td>
              <td>2020-10-01</td>
              <td>Victor Dimas Elias</td>
              <td>
                  <button type="button" class="btn btn-default" aria-label="Left Align"
                  data-toggle="modal" data-target="#myModal">
                      <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                  </button>
              </td>
          </tr>

          <tr>
              <td>2</td>
              <td>Fender Stratocaster</td>
              <td>Amarilla</td>
              <td>1</td>
              <td>$200 USD</td>
              <td>$200 USD</td>
              <td>2020-10-01</td>
              <td>Victor Dimas Elias</td>
              <td>
                  <button type="button" class="btn btn-default" aria-label="Left Align"
                  data-toggle="modal" data-target="#myModal">
                      <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                  </button>
              </td>
          </tr>

          <tr>
              <td>3</td>
              <td>Gibson Les Paul</td>
              <td>Negra</td>
              <td>2</td>
              <td>$40 USD</td>
              <td>$80 USD</td>
              <td>2020-10-01</td>
              <td>Victor Dimas Elias</td>
              <td>
                  <button type="button" class="btn btn-default" aria-label="Left Align"
                  data-toggle="modal" data-target="#myModal">
                      <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
                  </button>
              </td>
          </tr>

          <tr>
              <td>4</td>
              <td>Bombo DW</td>
              <td>Negro</td>
              <td>3</td>
              <td>$40 USD</td>
              <td>$120 USD</td>
              <td>2020-10-01</td>
              <td>Victor Dimas Elias</td>
              <td>
                  <button type="button" class="btn btn-default" aria-label="Left Align"
                  data-toggle="modal" data-target="#myModal">
                      <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
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
          <form action="">
              <div class="form-group">
                  <label for="email">Componente:</label>
                  <input type="text" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                  <label for="pwd">Instrumento:</label>
                  <input type="text" class="form-control" id="pwd" name="pwd">
              </div>
              <div class="form-group">
                  <label for="pwd">Cantidad:</label>
                  <input type="text" class="form-control" id="pwd" name="pwd">
              </div>
              <div class="form-group">
                  <label for="pwd">Precio:</label>
                  <input type="text" class="form-control" id="pwd" name="pwd">
              </div>
              <div class="form-group">
                  <label for="pwd">Total:</label>
                  <input type="text" class="form-control" id="pwd"  name="pwd">
              </div>
              <div class="form-group">
                  <label for="pwd">Fecha venta:</label>
                  <input type="text" class="form-control" id="pwd"  name="pwd">
              </div>
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