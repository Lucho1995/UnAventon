<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CMostrar extends CI_Controller {

  function __construct() {
      parent::__construct();
      $this->load->library('form_validation'); 
      $this->load->model('mRegistro');
      $this->load->model('mViajes');
  }   

   public function index(){
       $data = array('viajes' =>  $this->mViajes->get_Viajes() );
       $this->load->view('vHead');
       $this->load->view('vHeader');
       $this->load->view('vBody');
       $this->load->view('vVerViajes',$data);
       $this->load->view('vFooter');
   }
}
  
