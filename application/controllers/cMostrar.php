<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CMostrar extends CI_Controller {

   function __construct() {
       parent::__construct();
       $this->load->library('form_validation'); 
       $this->load->model('mRegistro');

   }

   public function index(){
       $this->load->view('vHead');
       $this->load->view('vHeader');
       $this->load->view('vBody');
       $this->load->view('vFooter');
   }

   public function registrarse(){
    $this->load->library('form_validation');
    $this->form_validation->set_rules('nombre', 'Nombre', 'required|min_length[3]');
    $this->form_validation->set_rules('apellido', 'Apellido', 'required|min_length[3]');
    $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[usuario.email]');
    $this->form_validation->set_rules('fechaNac', 'Fecha de nacimiento', 'required|min_length[3]');
    $this->form_validation->set_rules('dni', 'DNI', 'required|min_length[3]');
    $this->form_validation->set_rules('clave', 'Contraseña', 'required|min_length[3]');
    $this->form_validation->set_rules('clave_2', 'Repita su clave', 'required|matches[clave]');
    if ($this->form_validation->run() == FALSE) {
       $this->index();
    } else {
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

  
}