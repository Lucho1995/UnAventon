<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CPagos extends CI_Controller {

  function __construct() {
      parent::__construct();
      $this->load->library('form_validation'); 
      $this->load->model('mLogin');
      $this->load->model('mViajes');
      $this->load->model('mPagos');
  }

  public function pagar($idViaje,$monto) {
  	$elementos=array(
  			"Pago realizado correctamente.", 
  			"Por el momento no podemos efectuar su pago. Intentelo nuevamente en unos instantes");
  	$result=array_rand($elementos);
  	$datos= array(	
  				'fecha' => date('Y-m-d'),
  				'monto' => $monto,
  				'usuarioId' => $this->session->userdata('idUsuario'),
  				'numTarjeta' => $this->input->post('numTarjeta'),
  				'formaPago' => $this->input->post('formaPago'),
  				'tarjeta' => $this->input->post('tarjeta'),
  				'viajeId' => $idViaje
  				);
  	if ($result=='1'){
  		$this->mPagos->registrar_pago($datos);
  		echo "<script language='javascript'>alert('Pago realizado correctamente');</script>";
  	} else {
  		echo "<script language='javascript'>alert('Por el momento no podemos efectuar su pago. Intentelo nuevamente en unos instantes.');</script>";
  	}
  	redirect(base_url().'cVerViajes/vista_detalle_viaje/'.$this->session->userdata('idUsuario').'/'.$idViaje, 'refresh');
  }


  }   