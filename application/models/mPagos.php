<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MPagos extends CI_Model {

    function __construct() {
       parent::__construct();
    }

    public function registrar_pago($datos) {
    	$this->db->insert('pagos',$datos);
    }

}