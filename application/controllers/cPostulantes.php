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
        $this->load->view('vHead');
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
     if($postulado[0]['estado']=='Aceptado'){
        $this->mPostulantes->rechazar_postulado_aceptado($idPostulado);
     }  
     else{
        $datos = array('estado' => 'Rechazado', 'usuarioId' => $idPostulado);
        $this->mPostulantes->rechazar_postulado($datos);
        $aux=$this->mPostulantes->get_postulado($idPostulado);
     }
     $this->vista_postulantes($this->session->userdata('idUsuario'),$postulado[0]['viajeId']);
  }

  public function aceptar_postulado($idPostulado){
    $postulado = array('estado' => 'Aceptado', 'usuarioId' => $idPostulado);
    $this->mPostulantes->aceptar_postulado($postulado);
    $aux=$this->mPostulantes->get_postulado($idPostulado);
    $this->vista_postulantes($this->session->userdata('idUsuario'),$aux[0]['viajeId']);
  }
  public function postularse ($idUsuario, $idViaje) {
    if ($this->session->userdata('logueado')) {
          $data = array (
              'estado' => 'pendiente',
              'viajeId' => $idViaje,
            'usuarioId' => $this->session->userdata('idUsuario')
          );
          
          $this->mPostulantes->postularse($data);
          redirect (base_url().'cVerViajes/vista_detalle_viaje'.'/'.$idUsuario.'/'.$idViaje, 'refresh');
        }
  }

}
