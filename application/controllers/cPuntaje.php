<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CPuntaje extends CI_Controller {

  function __construct() {
      parent::__construct();
      $this->load->library('form_validation'); 
      $this->load->model('mViajes');
      $this->load->model('mPostulantes');
      $this->load->model('mPuntaje');

  	}
  	public function puntuarPiloto($idPiloto,$idViaje){
  	  	$comentario = $this->input->post('respuesta');
  	  	if($this->input->post('puntaje')=='bueno'){
  	  		$this->mPuntaje->sumarPuntaje($idPiloto,$comentario);
  	  		$this->mPuntaje->comentar($idPiloto,$comentario);
  	  		redirect(base_url().'cVerViajes/vista_detalle_viaje/'.$this->session->userdata('idUsuario').'/'.$idViaje, 'refresh');
  	  	}
  	  	elseif ($this->input->post('puntaje')=='malo') {
  	  		$this->mPuntaje->restarPuntaje($idPiloto,$comentario);
  	  		$this->mPuntaje->comentar($idPiloto,$comentario);
  	  		redirect(base_url().'cVerViajes/vista_detalle_viaje/'.$this->session->userdata('idUsuario').'/'.$idViaje, 'refresh');
  	  	}
  	  	else{
  	  		$this->mPuntaje->puntajeNeutro($idPiloto,$comentario);
  	  		$this->mPuntaje->comentar($idPiloto,$comentario);
  	  		redirect(base_url().'cVerViajes/vista_detalle_viaje/'.$this->session->userdata('idUsuario').'/'.$idViaje, 'refresh');
  	  	}

  	}  	
  	  
}