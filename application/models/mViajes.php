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

	public function get_viajes($usuarioId='Nulo'){
		if ($usuarioId == 'Nulo') {
			$query = $this->db->get('viaje');
			
		} else {
			$this->db->where('usuarioId', $usuarioId);
			$query = $this->db->get('viaje');
		}
		return $query->result_array();
	}
}
