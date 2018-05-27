<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class MViajes extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}
	/*public function get_Viajes(){
		$this->db->select('*');
		$this->db->from('viaje');
		$this->db->join('usuario','usuario.idUsuario=viaje.usuarioId', 'inner');
		$this->db->join('vehiculo','vehiculo.idVehiculo=viaje.vehiculoId', 'inner');
		$this->db->limit(10);
		$query =$this->db->get();
		$resultado= $query->result();
		return $resultado;
	}*/
	public function get_mis_viajes($usuarioId){
		$this->db->where('usuarioId', $usuarioId);
		$query = $this->db->get('viaje');
		return $query->result_array();
	}
	public function get_viajes($usuarioId){
		$query = $this->db->get('viaje');
		return $query->result_array();
	}
}
