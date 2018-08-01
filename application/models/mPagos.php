 <?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MPagos extends CI_Model {

    function __construct() {
       parent::__construct();
    }

    public function registrar_pago($datos) {
    	$this->db->insert('pagos',$datos);
    }

    public function viaje_pagado($idUsuario,$idViaje){
    	$this->db->select('*');
    	$this->db->from('pagos');
    	$this->db->where('usuarioId', $idUsuario);
    	$this->db->where('viajeId', $idViaje);
    	$query=$this->db->get();
    	if ($query->num_rows()>0){
    		return TRUE;
    	} else { 
    		return FALSE;
    	}
    }

}