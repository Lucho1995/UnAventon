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

<<<<<<< HEAD
	public function get_viajes($usuarioId='Nulo'){
		if ($usuarioId == 'Nulo') {
			$query = $this->db->get('viaje');
			
=======
	public function get_mis_viajes($usuarioId){
		$this->db->where('usuarioId', $usuarioId);
		$query = $this->db->get('viaje');
		return $query->result_array();
	}
	public function get_viajes($usuarioId='Nulo'){
		if ($usuarioId == 'Nulo') {
			$query=($this->db->query('SELECT * FROM viaje INNER JOIN usuario ON viaje.usuarioId=usuario.idUsuario	 INNER JOIN vehiculo ON viaje.vehiculoId=vehiculo.idVehiculo'));
>>>>>>> 6fd94d8a807719464f99d34c9b32aede1268d702
		} else {
			$this->db->where('usuarioId', $usuarioId);
			$query = $this->db->get('viaje');
		}
		return $query->result_array();
	}
}
