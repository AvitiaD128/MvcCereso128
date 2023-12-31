<?php
/*
	CRUD creado por Oscar Amado
	Contacto: oscarfamado@gmail.com
*/
class Administrator extends db{
	
	private function view_users(){
		try {
			$SQL = "SELECT * FROM tbl_prisioneros";
			$result = $this->connect()->prepare($SQL);
			$result->execute();
			return $result->fetchAll(PDO::FETCH_OBJ);	
		} catch (Exception $e) {
			die('Error Administrator(view_users) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function get_view_users(){
		return $this->view_users();
	}

	private function register_users($data){
		try {
			$SQL = 'INSERT INTO tbl_prisioneros (nombre,apellido,estado,fechaN,direccion,motivoEnc,sexo) VALUES (?,?,?,?,?,?,?)';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array(
									$data['nombre'],
									$data['apellido'],
									$data['estado'],
									$data['fechaN'],
									$data['direccion'],
									$data['motivoEnc'],
									$data['sexo'],
									)
							);			
		} catch (Exception $e) {
			die('Error Administrator(register_users) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_register_user($data){
		$this->register_users($data);
	}

	private function update_user($data){
		try {
			$SQL = 'UPDATE tbl_prisioneros SET nombre = ?, apellido = ?, estado = ?, fechaN = ?, direccion = ?, motivoEnc = ?, sexo = ? WHERE id = ?';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array(
								$data['nombre'],
								$data['apellido'],
								$data['estado'],
								$data['fechaN'],
								$data['direccion'],
								$data['motivoEnc'],
								$data['sexo'],
								$data['id']
								)
							);			
		} catch (Exception $e) {
			die('Error Administrator(update_user) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_update_user($data){
		$this->update_user($data);
	}

	private function delete_user($id){
		try {
			$SQL = 'DELETE FROM tbl_prisioneros WHERE id = ?';
			$result = $this->connect()->prepare($SQL);
			$result->execute(array($id));			
		} catch (Exception $e) {
			die('Error Administrator(delete_user) '.$e->getMessage());
		} finally{
			$result = null;
		}
	}

	function set_delete_user($id){
		$this->delete_user($id);
	}	
}
?>