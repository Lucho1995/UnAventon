<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CPostulantes extends CI_Controller {

  function __construct() {
      parent::__construct();
      $this->load->library('form_validation'); 
      $this->load->model('mViajes');
      $this->load->model('mPostulantes');
      $this->load->model('mPuntaje');
  }   

  public function vista_postulantes($id,$idViaje){
    $datos =
      array(
        'postulantes' => $this->mPostulantes->get_postulantes($idViaje),
        'calificaciones' => $this->mPuntaje->get_calificaciones()
      );
    if ($this->session->userdata('logueado')) {
      if ($this->session->userdata('idUsuario') == $id) {
        $this->load->view('vHead');
        $this->load->view('loguedIn/vHeader');
        $this->load->view('loguedIn/vPostulantes', $datos);
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
        $postulado[0]['estado'] = 'Rechazado';
        $this->mPostulantes->rechazar_postulado($postulado);
        $aux=$this->mPostulantes->get_postulado($idPostulado);
     }
     $this->vista_postulantes($this->session->userdata('idUsuario'),$postulado[0]['viajeId']);
  }

  public function aceptar_postulado($idPostulado){
    $postulado = $this->mPostulantes->get_postulado($idPostulado);
    $postulado[0]['estado'] = 'Aceptado';
    $this->mPostulantes->aceptar_postulado($postulado);
    $this->vista_postulantes($this->session->userdata('idUsuario'),$postulado[0]['viajeId']);
  }
  public function postularse ($idUsuario, $idViaje) {
    if ($this->session->userdata('logueado')) {
          $data = array (
              'estado' => 'Pendiente',
              'viajeId' => $idViaje,
            'usuarioId' => $this->session->userdata('idUsuario')
          );
          
          $this->mPostulantes->postularse($data);
          redirect (base_url().'cVerViajes/vista_detalle_viaje'.'/'.$idUsuario.'/'.$idViaje, 'refresh');
        } else {
          echo "<script language='javascript'>alert('Por favor, inicie sesión para postularse');</script>";
          redirect (base_url()."#iniciar", 'refresh');
          //hola
        }
  }

  public function darse_de_baja($idViaje){
   // if ($this->session->userdata('logueado')){
    $postulantes=$this->mPostulantes->get_postulantes($idViaje);
    $idUsuario=$this->session->userdata('idUsuario');
    foreach ($postulantes as $postulado) {
      if ($postulado['idUsuario'] == $idUsuario) {
        $viajeId = $postulado['viajeId'];
        if ($postulado['estado'] == 'Aceptado') {
          $this->mPostulantes->darse_de_baja_aceptado($idUsuario, $viajeId);
          echo "<script language='javascript'>alert('Su postulacion fue dada de baja.');</script>";
          redirect (base_url().'cVerViajes/vista_viajes_postule/'.$this->session->userdata('idUsuario'), 'refresh');
        } else {
          $this->mPostulantes->darse_de_baja($idUsuario, $viajeId);
          echo "<script language='javascript'>alert('Su postulacion fue dada de baja.');</script>";
          redirect (base_url().'cVerViajes/vista_viajes_postule/'.$this->session->userdata('idUsuario'), 'refresh');
        }
      }
    }
  }
}
