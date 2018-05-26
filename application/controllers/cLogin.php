<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CLogin extends CI_Controller {

 	function __construct() {
    	parent::__construct();
    	// load model
    	$this->load->model('mLogin');
    	// load form helper library
		$this->load->helper('form');
  	}

  	public function iniciar_sesion($id){
  		$title = array('titulo' => 'Bienvenido!');
  		$perfil = $this->mLogin->get_perfil($id);
  		$this->load->view('vHead', $title);
  		$this->load->view('loguedIn/vheader', $perfil);
  		$this->load->view('loguedIn/vPerfil', $perfil);
  		$this->load->view('loguedIn/vFooter');
  	}

	public function index() {
			
		// set variables from the form
		$email = $this->input->post('email');
		$clave = $this->input->post('clave');
	
		if ($this->mLogin->validate($email, $clave)) {
					
			/*$user_id = $this->user_model->get_user_id_from_username($username);
			$user    = $this->user_model->get_user($user_id);
			
			// set session user datas
			$_SESSION['user_id']      = (int)$user->id;
			$_SESSION['username']     = (string)$user->username;
			$_SESSION['logged_in']    = (bool)true;
			$_SESSION['is_confirmed'] = (bool)$user->is_confirmed;
			$_SESSION['is_admin']     = (bool)$user->is_admin;
			*/
			// user login ok

			$this->mLogin->saludo($email);
			$this->iniciar_sesion($this->mLogin->get_id($email));
		} else {
			
			// login failed
			echo '<script language="javascript">alert("No has iniciado sesion");</script>';
			redirect('http://localhost/UnAventon/#iniciar','refresh');
		}
		
	}
}