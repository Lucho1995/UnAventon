<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CVerViajes extends CI_Controller {

  function __construct() {
      parent::__construct();
      $this->load->library('form_validation'); 
      $this->load->model('mRegistro');
      $this->load->model('mViajes');
  }   

   public function index(){
       $viajes = $this->mViajes->get_Viajes() );
       $this->load->view('vHead');
       $this->load->view('loguedIn/vHeader');
       $this->load->view('loguedIn/vVerViajes',$viajes);
       $this->load->view('loguedIn/vFooter');
   }
}
  
