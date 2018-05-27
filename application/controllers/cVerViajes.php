<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CVerViajes extends CI_Controller {

  function __construct() {
      parent::__construct();
      $this->load->library('form_validation'); 
      $this->load->model('mLogin');
      $this->load->model('mViajes');
  }   

   public function viajes($usuarioId){
      $viajes = array('viajes' => $this->mViajes->get_viajes($usuarioId));
      $perfil = $this->mLogin->get_perfil($usuarioId);
      $this->load->view('vHead');
      $this->load->view('loguedIn/vheader', $perfil);
      $this->load->view('loguedIn/vVerViajes', $viajes);
      $this->load->view('loguedIn/vFooter');
   }
}