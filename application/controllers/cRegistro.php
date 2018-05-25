<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CRegistro extends CI_Controller {
  function __construct() {
    parent::__construct();
    $this->load->library('form_validation'); 
    $this->load->model('mRegistro');
  } 
  public function index(){
    $clave1= $this->input->post('clave');
    $clave2= $this->input->post('clave_2');
    if($clave1 == $clave2){
      $param = array();
      $param['nombre']=$this->input->post('nombre');
      $param['apellido'] = $this->input->post('apellido');
      $param['email'] = $this->input->post('email');
      $param['foto'] = $this->input->post('foto');
      $param['fechaNac'] = $this->input->post('fechaNac');
      $param['dni'] = $this->input->post('dni');
      $param['clave'] = $this->input->post('clave');
      $nombre= $this->input->post('nombre');
      
      $this->mRegistro->registrarse($param);    
    } 
    else {
        echo '<script language="javascript">alert("Las contraseñas no coinciden");</script>';
        redirect('http://localhost/UnAventon/#about' ,'refresh');    
    }
  }
}