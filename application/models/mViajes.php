	<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class MViajes extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->model('mLogin');
	}


	/*public function get_viajes($usuarioId='Nulo'){
		if ($usuarioId == 'Nulo') {
			$query = $this->db->get('viaje');
		}
	}*/

	/*public function get_mis_viajes($usuarioId){
		$this->db->where('usuarioId', $usuarioId);
		$query = $this->db->get('viaje');
		return $query->result_array();
	}*/

	public function get_viajes($usuarioId='Nulo'){
		if ($usuarioId == 'Nulo') {
			$query=(
				$this->db->query(
					'SELECT * FROM viaje
					INNER JOIN usuario ON viaje.usuarioId=usuario.idUsuario
					INNER JOIN vehiculo ON viaje.vehiculoId=vehiculo.idVehiculo
					LIMIT 10'
					)
				);
		} else {
			$query=(
				$this->db->query(
					'SELECT * FROM viaje
					INNER JOIN vehiculo ON viaje.vehiculoId=vehiculo.idVehiculo
					INNER JOIN usuario ON viaje.usuarioId = usuario.idUsuario
					WHERE idUsuario='.$usuarioId
					)
				);
		}
		return $query->result_array();
	}		
	public function get_viaje($idViaje){
		$query=(
			$this->db->query(
				'SELECT * FROM viaje
				INNER JOIN usuario ON viaje.usuarioId=usuario.idUsuario
				INNER JOIN vehiculo ON viaje.vehiculoId=vehiculo.idVehiculo
				WHERE idViaje='.$idViaje
				)
			);
		return $query->result_array();
	}
	public function publicar_viaje($param){
		$campos=array(
			'origen' => $param['origen'],
			'destino' => $param['destino'],
			'fecha' => $param['fecha'],
			'hora' => $param['hora'],
			'descripcion' => $param['descripcion'],
			'costo' => $param['costo'],
			'vehiculoId' => $param['vehiculoId'],
			'asientosDisp' => $param['asientosDisp'],
			'usuarioId' => $param['usuarioId'],
			//'periodico' => $param['periodico']
		);
		$this->db->insert('viaje', $campos);
	}
	
	public function modificar_viaje($datos, $idViaje){
		$this->db->where('idViaje',$idViaje);
      	$this->db->update('viaje',$datos);
	}
	public function hay_postulantes($viaje){
		$query =(
			$this->db->query(
				'select * from viaje
				inner join postulacion
				on postulacion.viajeId=viaje.idViaje
				WHERE viaje.idViaje='.$viaje
			)
		);
		if ($this->db->count_all_results()>=1){
			return true;
		} else {
			return false;
		}
	}

	public function baja_de_viaje_sin_postulantes($viaje){
			$this->db->set('eliminado', 1);
			$this->db->where('idViaje',$viaje);
			$this->db->update('viaje');
	}

	public function obtener_usuario($idUsuario){
		    $this->db->select('*');
		    $this->db->from('usuario');
		    $this->db->where('idUsuario',$idUsuario);
		    $query=$this->db->get();
		    return ($query->result_array());
	}

	public function baja_de_viaje_con_postulantes($viaje,$idUsuario){
		    $usuario=$this->obtener_usuario($idUsuario);
		    //die(print_r($usuario));
		    $rep=$usuario[0]['reputacionPiloto'] -1;
			$this->db->set('eliminado', 1);
			$this->db->where('idViaje', $viaje);
			$this->db->update('viaje');
			$this->db->set('reputacionPiloto', $rep);
			$this->db->where('idUsuario', $idUsuario);
			$this->db->update('usuario');		
	}
	
	public function buscar($consulta){
		$this->db->select('*');
		$this->db->from('viaje');
		$this->db->join('vehiculo', 'viaje.vehiculoId = vehiculo.idVehiculo');
		$this->db->join('usuario', 'viaje.usuarioId = usuario.idUsuario');
		$this->db->like('origen', $consulta['origen']);
		$this->db->like('destino', $consulta['destino']);
		$this->db->like('fecha',$consulta['fecha']);
		$query=$this->db->get();
		if ($query->num_rows()>0){
			return ($query->result_array());
		} else {
			return FALSE;
		}
	}
}
