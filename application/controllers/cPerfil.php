<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CPerfil extends CI_Controller {

   function __construct() {
       parent::__construct();
   }

   public function index(){
     $this->load->model('mPerfil');
   	 $this->load->view('vHead');
     $this->load->view('vMiPerfil');
     $this->load->view('vFooter');
   }

   public function formulario_editar_perfil(){
      $data = array ();
      $this->load->model('mPerfil');
      $usuario=$this->mPerfil->obtener_usuario(7);//aca va el id de sesion
      $data['perfil']=$usuario;
    	$this->load->view('vHead');
   	  $this->load->view('vEditarMiPerfil',$data);
   	  $this->load->view('vFooter');
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
