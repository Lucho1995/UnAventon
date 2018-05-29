<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CVerMisVehiculos extends CI_Controller {

   function __construct() {
       parent::__construct();
       $this->load->model('mLogin');
   }

   public function mostrar_vehiculos($id){
   	  $data = array();
      $this->load->model('mVehiculos');
      $perfil = $this->mLogin->get_perfil($id);
   	  $data['vehiculos']=$this->mVehiculos->get_vehiculos($id);
      $title = array( 'titulo' => "Tus vehiculos" );
      $this->load->view('loguedIn/vHead', $title);
      $this->load->view('loguedIn/vheader', $perfil);
   	  $this->load->view('loguedIn/vVerMisVehiculos',$data);
      $this->load->view('loguedIn/vFooter');
    }

    public function vista_modificar($idVehiculo){
      $this->load->model('mVehiculos');
      $vehiculo=$this->mVehiculos->get_vehiculo($idVehiculo);
      $data = array ();
      $data['vehiculo']=$vehiculo;
      //$existe=$this->mVehiculos->patente_existe($data['patente'],$vehiculo[0]['usuarioId']);
      $this->load->view('vHead');
      $this->load->view('vModificarVehiculo',$data);
      $this->load->view('vFooter');
    }

    public function modificar_vehiculo($idVehiculo){
        $this->load->model('mVehiculos');
        $vehiculo=$this->mVehiculos->get_vehiculo($idVehiculo);
      	$data = array (
  			 'marca' => $this->input->post('marca'),
  			 'modelo' => $this->input->post('modelo'),
  			 'patente' => $this->input->post('patente'),
  			 'color' => $this->input->post('color'),
  			 'seguro' => $this->input->post('seguro'),
  			 'numPoliza' => $this->input->post('numPoliza'),
  			 'capacidad' => $this->input->post('capacidad')
  		  );
		    $this->mVehiculos->modificar_vehiculo($idVehiculo,$data);
		    redirect('http://localhost/UnAventon/cVerMisVehiculos/mostrar_vehiculos');
    }

    public function eliminar_vehiculo($idVehiculo){
      // $this->mLogin->get_perfil($id); //me tiene q llegar el id de usuario pa redireccionar
      $this->load->model('mVehiculos');
   	  //$data['vehiculos']=$this->mVehiculos->get_vehiculos();
      $this->mVehiculos->eliminar_vehiculo($idVehiculo);
      redirect('http://localhost/UnAventon/cVerMisVehiculos/mostrar_vehiculos/'); // no se bien como redireccionar
    }
}
