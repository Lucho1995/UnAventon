<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MPostulantes extends CI_Model {
   	function __construct() {
   	    parent::__construct();
   	}

   	public function get_postulantes($idViaje){
   		$query=($this->db->query(
			'SELECT * FROM postulacion
			INNER JOIN usuario ON postulacion.usuarioId = usuario.idUsuario
			WHERE viajeId='.$idViaje
			));
   		return $query->result_array();
   	}
}