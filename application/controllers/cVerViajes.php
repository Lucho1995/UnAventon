<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CVerViajes extends CI_Controller {

  function __construct() {
      parent::__construct();
      $this->load->library('form_validation'); 
      $this->load->model('mLogin');
      $this->load->model('mViajes');
  }   

   public function viajes($id){
      $viajes = array('viajes' => $this->mViajes->get_viajes(),
                      'titulo' => 'Viajes publicados');
      if ($this->session->userdata('logueado')) {
        if ($this->session->userdata('idUsuario') == $id){
          $perfil = $this->mLogin->get_perfil($this->session->userdata('idUsuario'));
          $this->load->view('vHead');
          $this->load->view('loguedIn/vheader', $perfil);
          $this->load->view('loguedIn/vVerViajes', $viajes);
          $this->load->view('loguedIn/vFooter');
        } else {
          echo "<script language='javascript'>alert('Accseso denegado');</script>";
          redirect(base_url().'#iniciar','refresh');
        }
      } else {
          $this->load->view('vHead');
          $this->load->view('vheader2');
          $this->load->view('loguedIn/vVerViajes', $viajes);
          $this->load->view('loguedIn/vFooter');       
      }     
   }
   public function misViajes($id){
      if ($this->session->userdata('logueado')){
        if ($this->session->userdata('idUsuario') == $id){
          $viajes = array('viajes' => $this->mViajes->get_viajes($id),
                          'titulo' => 'Mis Viajes');
          $perfil = $this->mLogin->get_perfil($id);
          $this->load->view('vHead');
          $this->load->view('loguedIn/vHeader', $perfil);
          $this->load->view('loguedIn/vVerViajes', $viajes);
          $this->load->view('loguedIn/vFooter');
        } else {
          echo "<script language='javascript'>alert('Accseso denegado');</script>";
          redirect(base_url().'#iniciar','refresh');
        }
    } else {
          echo "<script language='javascript'>alert('Por favor inicia sesion');</script>";
          redirect(base_url().'#iniciar','refresh');       
    }
   }
}