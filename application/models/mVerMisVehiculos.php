<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MVerMisVehiculos extends CI_Model {
   function __construct() {
       parent::__construct();
   }

   public function get_vehiculos(){ 
    $query = $this->db->query('SELECT * from vehiculo where usuarioId=7');
   	$vehiculos = array();
	//foreach ($query->result_array() as $row)
	//for ($i=0; $i<count($query->result_array()); $i++) { 
	//	$vehiculos[$i]= $query->result_array();
	//}
	//print_r($vehiculos);
	print_r($query->result_array());
}
}