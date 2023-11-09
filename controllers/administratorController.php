<?php
/*
	CRUD creado por Oscar Amado
	Contacto: oscarfamado@gmail.com
*/
class administratorController extends Administrator{

	function index(){
		require_once('views/all/header.php');
		require_once('views/all/nav.php');
		require_once('views/index/index.php');
		require_once('views/index/modals.php');
		require_once('views/all/footer.php');
	}

	function tbl_prisioneros(){
		?>
		<table class="table table-bordered">
			<thead>
				<tr>
				<th>#</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Estado</th>
				<th>FechaNacimiento</th>
				<th>Direccion</th>
				<th>Motivo Encierro</th>
				<th>Sexo</th>
				</tr>
			</thead>
			<tbody >		
		<?php
		foreach (parent::get_view_users()	as $data) {
		?>
		<tr>
			<td><?php echo $data->id; ?> </td>
			<td><?php echo $data->nombre; ?> </td>
			<td><?php echo $data->apellido; ?> </td>
			<td><?php echo $data->estado; ?> </td>
			<td><?php echo $data->fechaN; ?> </td>
			<td><?php echo $data->direccion; ?> </td>
			<td><?php echo $data->motivoEnc; ?> </td>
			<td><?php echo $data->sexo; ?> </td>

			<td>
			  <div class="btn-group">
			    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
			    Seleccionar <span class="caret"></span></button>
			    <ul class="dropdown-menu" role="menu">
			      <li><a href="#" onclick="ModalUpdate('<?php echo $data->id; ?>','<?php echo $data->nombre; ?>','<?php echo $data->apellido; ?>','<?php echo $data->estado; ?>','<?php echo $data->fechaN; ?>','<?php echo $data->direccion; ?>','<?php echo $data->motivoEnc; ?>','<?php echo $data->sexo; ?>');">Actualizar</a></li>
			      <li><a href="#" onclick="deleteUser('<?php echo $data->id; ?>');">Borrar</a></li>
			    </ul>
			  </div>
			</td>
		</tr>
		<?php
		}
		?>
			</tbody>
		</table>	
	<?php	
    }
    
	function deleteuser(){		
			parent::set_delete_user($_REQUEST['id']);		
    }

	function registeruser(){
		$data = array(
					'id'		=> $_REQUEST['id'],
					'nombre' 		=> $_REQUEST['nombre'],
					'apellido' => $_REQUEST['apellido'],
					'estado'		=> $_REQUEST['estado'],
					'fechaN'		=> $_REQUEST['fechaN'],
					'direccion'		=> $_REQUEST['direccion'],
					'motivoEnc'		=> $_REQUEST['motivoEnc'],
					'sexo'		=> $_REQUEST['sexo']
					);		
					parent::set_register_user($data);		
    }    
    
	function updateuser(){
		$data = array(
					'id'		=> $_REQUEST['id'],
					'nombre' 		=> $_REQUEST['nombre'],
					'apellido' => $_REQUEST['apellido'],
					'estado'		=> $_REQUEST['estado'],
					'fechaN'		=> $_REQUEST['fechaN'],
					'direccion'		=> $_REQUEST['direccion'],
					'motivoEnc'		=> $_REQUEST['motivoEnc'],
					'sexo'		=> $_REQUEST['sexo']
					);		
			parent::set_update_user($data);		
	}    
    
}

