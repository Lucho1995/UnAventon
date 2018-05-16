<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CMostrar extends CI_Controller {

   function __construct() {
       parent::__construct();
       $this->load->model('mRegistro');
   }

   public function index(){
   	   $this->load->view('vHeader');
       $this->load->view('vBody');
       $this->load->view('vFooter');
   }

   public function registrarse(){
    $param['nombre']=$this->input->post('nombre');
    $param['apellido'] = $this->input->post('apellido');
    $param['email'] = $this->input->post('email');
    $param['foto'] = $this->input->post('foto');
    $param['fechaNac'] = $this->input->post('fechaNac');
    $param['dni'] = $this->input->post('dni');
    $param['clave'] = $this->input->post('clave');
    $this->mRegistro->registrarse($param);


   }
  
}