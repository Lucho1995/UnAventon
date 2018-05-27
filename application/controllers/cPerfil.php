<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CPerfil extends CI_Controller {

   function __construct() {
       parent::__construct();
       $this->load->model('mLogin');
   }

   public function miPerfil($id){
      $title = array('titulo' => 'Bienvenido!');
      $perfil = $this->mLogin->get_perfil($id);
      $this->load->view('loguedIn/vHead', $title);
      $this->load->view('loguedIn/vheader', $perfil);
      $this->load->view('loguedIn/vPerfil', $perfil);
      $this->load->view('loguedIn/vFooter');
    }

   public function formulario_editar_perfil($id){
      $perfil=$this->mLogin->get_perfil($id);
    	$this->load->view('loguedIn/vHead');
      $this->load->view('loguedIn/vHeader', $perfil);
   	  $this->load->view('loguedIn/vEditarMiPerfil',$perfil);
   	  $this->load->view('loguedIn/vFooter');
   }

   public function modificar_usuario($idUsuario){
        $this->load->model('mPerfil');
        $usuario=$this->mPerfil->obtener_usuario($idUsuario);
        $data = array (
          'nombre' => $this->input->post('nombre'),
          'apellido' => $this->input->post('apellido'),
          'email' => $this->input->post('email'),
          'clave' => $this->input->post('clave'),
          'fechaNac' => $this->input->post('fechaNac'),
          'dni' => $this->input->post('dni'),
         );
    $this->mPerfil->modificar_usuario($idUsuario,$data);
   // redirect('http://localhost/UnAventon/cPerfil');
    }
}
