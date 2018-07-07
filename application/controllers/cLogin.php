<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CLogin extends CI_Controller {

 	function __construct() {
    	parent::__construct();
    	// load model
    	$this->load->model('mLogin');
    	$this->load->model('mViajes');
    	// load form helper library
		$this->load->helper('form');
  	}


  	public function login(){
  		if ($this->session->userdata('logueado')) {
	  		$viajes = array('viajes' => $this->mViajes->get_viajes(),
	  						'titulo' => 'Bienvenida/o');
	  		$this->load->view('vHead');
	  		$this->load->view('loguedIn/vHeader');
	  		$this->load->view('loguedIn/vVerViajes', $viajes);
	  		$this->load->view('loguedIn/vFooter');
  		}
  	}

  	public function logout() {
  		$usuario_data=array (
  			'logueado' => false,
  			'idUsuario' => 'visitante'
  		);
  		$this->session->set_userdata($usuario_data);
  		redirect(base_url());
  	}

	public function index() {
			
		// set variables from the form
		$email = $this->input->post('email');
		$clave = $this->input->post('clave');
	
		if ($this->mLogin->validate($email, $clave)) {
					
			//se crea la sesion con el usuario que la inicio
			$id=$this->mLogin->get_id($email);
			$perfil=$this->mLogin->get_perfil($id);
			$usuario_data=array (
				'idUsuario' => $perfil['idUsuario'],
				'nombre' => $perfil ['nombre'],
				'apellido' => $perfil ['apellido'],
				'error' => $this->session->flashdata('error'),
				'logueado' => true
			);
			$this->session->set_userdata($usuario_data);
			//sesion temporal
			if (!$this->input->post('mantener-sesion')) {
				$this->session->mark_as_temp('logueado', 600);
			}
			// user login ok
			$nombre=$perfil['nombre'];
			$apellido=$perfil['apellido'];
			echo "<script language='javascript'>alert('Bienvenido $nombre $apellido!');</script>";
			$this->login();
		} else {
			
			// login failed
			echo '<script language="javascript">alert("Nombre de usuario y/o contraseña incorrectos");</script>';
			redirect('http://localhost/UnAventon/#iniciar','refresh');
		}
		
	}
}