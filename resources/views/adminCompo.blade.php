@extends('plantilla')

@section('contenido')

<div class="container">
  <h2>Administracion de Componentes</h2>
  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#añadir">Añadir</button>

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
          <td>Amplificador</td>
          <td>Fender Stratocaster</td>
          <td>10</td>
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
          <td>3</td>
          <td>Afinador</td>
          <td>Gibson Les Paul</td>
          <td>20</td>
          <td>$40 USD</td>
          <td>$30 USD</td>
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
          <td>Afinador</td>
          <td>Bombo DW</td>
          <td>35</td>
          <td>$40 USD</td>
          <td>$30 USD</td>
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
          <h4 class="modal-title">Añadir nuevo componente</h4>
          </div>
          <div class="modal-body">
                  <form action="">
                      <div class="form-group">
                          <label for="pwd">Componente:</label>
                          <input type="text" class="form-control" id="pwd" name="pwd">
                      </div>
                      <div class="form-group">
                          <label for="email">Instrumento:</label>
                          <input type="text" class="form-control" id="email" name="email">
                      </div>
                      <div class="form-group">
                          <label for="pwd">Cantidad:</label>
                          <input type="text" class="form-control" id="pwd" name="pwd">
                      </div>
                      <div class="form-group">
                          <label for="pwd">Precio Compra:</label>
                          <input type="text" class="form-control" id="pwd" name="pwd">
                      </div>
                      <div class="form-group">
                          <label for="pwd">Precio Venta:</label>
                          <input type="text" class="form-control" id="pwd"  name="pwd">
                      </div>
                      <div class="form-group">
                          <label for="pwd">Fecha ingreso:</label>
                          <input type="text" class="form-control" id="pwd"  name="pwd">
                      </div>
                      <button type="submit" class="btn btn-success">Guardar</button>
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
          <form action="">
              <div class="form-group">
                  <label for="pwd">Componente:</label>
                  <input type="text" class="form-control" id="pwd" name="pwd">
              </div>
              <div class="form-group">
                  <label for="email">Instrumento:</label>
                  <input type="text" class="form-control" id="email" name="email">
              </div>
              <div class="form-group">
                  <label for="pwd">Cantidad:</label>
                  <input type="text" class="form-control" id="pwd" name="pwd">
              </div>
              <div class="form-group">
                  <label for="pwd">Precio Compra:</label>
                  <input type="text" class="form-control" id="pwd" name="pwd">
              </div>
              <div class="form-group">
                  <label for="pwd">Precio Venta:</label>
                  <input type="text" class="form-control" id="pwd"  name="pwd">
              </div>
              <div class="form-group">
                  <label for="pwd">Fecha ingreso:</label>
                  <input type="text" class="form-control" id="pwd"  name="pwd">
              </div>
              <button type="submit" class="btn btn-primary">Actualizar</button>
          </form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
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
          <h3>¿Desea eliminar?</h3>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Eliminar</button>
      </div>
  </div>
  
  </div>
</div>


</div>
    </div>
    @stop 