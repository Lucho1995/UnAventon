<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MVerVehiculo extends CI_Model {
   function __construct() {
       parent::__construct();
   }

   public function get_vehiculo($idVehiculo){
   		$query= ($this->db->query('SELECT * from vehiculo WHERE idVehiculo='.$idVehiculo));
   		return ($query->result_array());
   }

}