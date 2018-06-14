<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CPostulantes extends CI_Controller {

  function __construct() {
      parent::__construct();
      $this->load->library('form_validation'); 
      $this->load->model('mViajes');
      $this->load->model('mPostulantes');
  }   

  public function vista_postulantes($id,$idViaje){
    $postulantes = array('postulantes' => $this->mPostulantes->get_postulantes($idViaje));
    if ($this->session->userdata('logueado')) {
      if ($this->session->userdata('idUsuario') == $id) {
        $this->load->view('loguedIn/vHead');
        $this->load->view('loguedIn/vHeader');
        $this->load->view('loguedIn/vPostulantes', $postulantes);
        $this->load->view('loguedIn/vFooter');
      } else {
        echo "<script language='javascript'>alert('Para ver la lista de postulantes, inicia sesion');</script>";
        redirect(base_url().'#iniciar','refresh');
      }
    } else {
      echo "<script language='javascript'>alert('Para ver la lista de postulantes, inicia sesion');</script>";
      redirect(base_url().'#iniciar','refresh');
    }
  }
public function rechazar_postulado($idPostulado){
   $postulado=$this->mPostulantes->get_postulado($idPostulado);
   /*print_r($postulado);
   die("jijij");*/
   if($postulado[0]['estado']=='Aceptado'){
      $this->mPostulantes->rechazar_postulado_aceptado($idPostulado);
   }  
   else{
      $this->mPostulantes->rechazar_postulado($idPostulado);
   }
   $this->vista_postulantes($this->session->userdata('idUsuario'),$postulado[0]['viajeId']);
  
}
}