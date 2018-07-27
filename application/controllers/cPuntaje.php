<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CPuntaje extends CI_Controller {

  function __construct() {
      parent::__construct();
      $this->load->library('form_validation'); 
      $this->load->model('mViajes');
      $this->load->model('mPostulantes');

  	}


	public function vista_puntuar_copiloto(){
		$this->load->view('vHead');
        $this->load->view('loguedIn/vHeader');
		$this->load->view('loguedIn/vPuntajeCopiloto');
		$this->load->view('loguedIn/vFooter');	
  		$x='hola';
  		print_r('hola');
  	}  	

}