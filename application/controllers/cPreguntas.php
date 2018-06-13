<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CPreguntas extends CI_Controller {

 	function __construct() {
    	parent::__construct();
    	// load model
    	$this->load->model('mLogin');
    	$this->load->model('mViajes');
    	$this->load->model('mPreguntas');
  	}

  	public function cargar_comentarios($idViaje){
  		$preguntas = array(
  			'nombre' => $this->input->post('nombre'),
  			'fecha' => date('Y-m-d'),
  			'cuerpo' => $this->input->post('cuerpo'), 
  			'viajeId'=> $idViaje,
  		);
  		$this->mPreguntas->cargar_comentario($preguntas);
  		redirect(base_url().'cVerViajes/vista_detalle_viaje/'.$this->session->userdata('idUsuario').'/'.$idViaje, 'refresh');
	 }
	 
 }