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
			$query=($this->db->query('SELECT * FROM viaje INNER JOIN usuario ON viaje.usuarioId=usuario.idUsuario	 INNER JOIN vehiculo ON viaje.vehiculoId=vehiculo.idVehiculo LIMIT 10'));
		} else {
			$query=($this->db->query('SELECT * FROM viaje INNER JOIN vehiculo ON viaje.vehiculoId=vehiculo.idVehiculo INNER JOIN usuario ON viaje.usuarioId = usuario.idUsuario WHERE idUsuario='.$usuarioId));
		}
		return $query->result_array();
	}
}
