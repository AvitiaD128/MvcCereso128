<div id="addUser" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Agregar nuevo preso</h4>
      </div>
      <div class="modal-body">
		<form name="formUser" onsubmit="register(); return false">
		
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="nombre" type="text" class="form-control" name="nombre" placeholder="Nombre del Juego" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="apellido" type="text" class="form-control" name="apellido" placeholder="apellido" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="estado" type="text" class="form-control" name="estado" placeholder="estado del juego" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="fechaN" type="text" class="form-control" name="fechaN" placeholder="Fecha" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="direccion" type="text" class="form-control" name="direccion" placeholder="direccion" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="motivoEnc" type="text" class="form-control" name="motivoEnc" placeholder="motivoEnc" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="sexo" type="text" class="form-control" name="sexo" placeholder="sexo" required autocomplete="off">
		  </div>
		  <br>				  
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Registrar</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
		</form>
      </div>
    </div>
  </div>
</div>


<div id="updateUser" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Actualizar informacion del preso </h4>        
      </div>
      <div class="modal-body">
		<form name="formUserUpdate" onsubmit="update(); return false">
		<input type="text" name="id" id="id" style="display: none;">
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="nombre" type="text" class="form-control" name="nombre" placeholder="Nombres" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="apellido" type="text" class="form-control" name="apellido" placeholder="apellido" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="estado" type="text" class="form-control" name="estado" placeholder="estado" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="fechaN" type="text" class="form-control" name="fechaN" placeholder="FechaN" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="direccion" type="text" class="form-control" name="direccion" placeholder="direccion" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="motivoEnc" type="text" class="form-control" name="motivoEnc" placeholder="motivoEnc" required autocomplete="off">
		  </div>
		  <br>
		  <div class="input-group">
		  	<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
		    <input id="sexo" type="text" class="form-control" name="sexo" placeholder="sexo" required autocomplete="off">
		  </div>		 	  
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Actualizar</button>
		<button type="button" class="btn btn-danger" data-dismiss="modal">Salir</button>
		</form>
      </div>
    </div>
  </div>
</div>