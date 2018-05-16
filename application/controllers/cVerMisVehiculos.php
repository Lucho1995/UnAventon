<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CVerMisVehiculos extends CI_Controller {

   function __construct() {
       parent::__construct();
   }

   public function index(){
   	  $this->load->model('mVerMisVehiculos');
      $this->mVerMisVehiculos->get_vehiculos();
   }


}