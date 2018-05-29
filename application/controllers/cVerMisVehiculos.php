<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CVerMisVehiculos extends CI_Controller {

   function __construct() {
       parent::__construct();
   }

   public function index(){
   	  $data = array();
      $this->load->model('mVehiculos');
   	  $data['vehiculos']=$this->mVehiculos->get_vehiculos();
   	  $this->load->view('vHead');
   	  $this->load->view('vVerMisVehiculos',$data);
      $this->load->view('vFooter');
    }

    public function vista_modificar($idVehiculo){
      $this->load->model('mVehiculos');
      $vehiculo=$this->mVehiculos->get_vehiculo($idVehiculo);
      $data = array ();
      $data['vehiculo']=$vehiculo;
      $this->load->view('vHead');
      $this->load->view('vModificarVehiculo',$data);
      $this->load->view('vFooter');
    }

    public function modificar_vehiculo($idVehiculo){
        $this->load->model('mVehiculos');
        $vehiculo=$this->mVehiculos->get_vehiculo($idVehiculo);
    	$data = array (
			'marca' => $this->input->post('marca'),//
			'modelo' => $this->input->post('modelo'),//
			'patente' => $this->input->post('patente'),//
			'color' => $this->input->post('color'),
			'seguro' => $this->input->post('seguro'),
			'numPoliza' => $this->input->post('numPoliza'),
			'capacidad' => $this->input->post('capacidad')
		);
		$this->mVehiculos->modificar_vehiculo($idVehiculo,$data);
		redirect('http://localhost/UnAventon/cVerMisVehiculos');
    }

    public function eliminar_vehiculo($idVehiculo){
      $this->load->model('mVehiculos');
   	  $data['vehiculos']=$this->mVehiculos->get_vehiculos();
      $this->mVehiculos->eliminar_vehiculo($idVehiculo);
      redirect('http://localhost/UnAventon/cVerMisVehiculos');
    }
}
