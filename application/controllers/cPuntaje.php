<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CPuntaje extends CI_Controller {

    function __construct() {
      parent::__construct();
      $this->load->library('form_validation'); 
      $this->load->model('mViajes');
      $this->load->model('mPostulantes');
      $this->load->model('mPuntaje');

    }
    public function vista_puntajes_copiloto($idCopiloto){
    $datos = array('calificaciones' => $this->mPuntaje->get_calificaciones_copiloto($idCopiloto));
    $this->load->view('vHead');
    $this->load->view('loguedIn/vHeader');
    $this->load->view('loguedIn/vPuntuaciones',$datos);
    $this->load->view('loguedIn/vFooter');
  }
    public function vista_puntuar_copilotos($idViaje){
          $parametro=array('postulantes'=>$this->mPostulantes->get_postulantes_aceptados($idViaje));
          $this->load->view('vHead');
          $this->load->view('loguedIn/vHeader');
          $this->load->view('loguedIn/vPuntajeCopilotos', $parametro);
          $this->load->view('loguedIn/vFooter');
    }
  	public function puntuarPiloto($idPiloto,$idViaje){
  	  	$comentario = $this->input->post('respuesta');
  	  	if($this->input->post('puntaje')=='bueno'){
  	  		$this->mPuntaje->sumarPuntaje($idPiloto,$comentario);
  	  		$this->mPuntaje->comentar($idPiloto,$comentario,$idViaje);
  	  		redirect(base_url().'cVerViajes/vista_detalle_viaje/'.$this->session->userdata('idUsuario').'/'.$idViaje, 'refresh');
  	  	}
  	  	elseif ($this->input->post('puntaje')=='malo') {
  	  		$this->mPuntaje->restarPuntaje($idPiloto,$comentario);
  	  		$this->mPuntaje->comentar($idPiloto,$comentario,$idViaje);
  	  		redirect(base_url().'cVerViajes/vista_detalle_viaje/'.$this->session->userdata('idUsuario').'/'.$idViaje, 'refresh');
  	  	}
  	  	else{
  	  		$this->mPuntaje->puntajeNeutro($idPiloto,$comentario);
  	  		$this->mPuntaje->comentar($idPiloto,$comentario,$idViaje);
  	  		redirect(base_url().'cVerViajes/vista_detalle_viaje/'.$this->session->userdata('idUsuario').'/'.$idViaje, 'refresh');
  	  	}
    }  	
  	public function puntuarCopiloto($viajeId){
      $comentario= $this->input->post('respuesta');
      if($this->input->post('respuesta')==NULL){
        $comentario="Sin Comentario";
      }
      $idUsuario= $this->input->post('usuarioId');
      if($this->input->post('puntaje')=='bueno'){
        $this->mPuntaje->sumarPuntajeCopiloto($idUsuario,$comentario);
        $this->mPuntaje->comentarCopiloto($idUsuario,$comentario,$viajeId);
        redirect(base_url().'cPuntaje/vista_puntuar_copilotos/'.$viajeId, 'refresh');
      }
      elseif ($this->input->post('puntaje')=='malo') {
          $this->mPuntaje->restarPuntajeCopiloto($idUsuario,$comentario);
          $this->mPuntaje->comentarCopiloto($idUsuario,$comentario,$viajeId);
          redirect(base_url().'cPuntaje/vista_puntuar_copilotos/'.$viajeId, 'refresh');
      }
      else{
        $this->mPuntaje->puntajeNeutroCopiloto($idUsuario,$comentario);
        $this->mPuntaje->comentarCopiloto($idUsuario,$comentario,$viajeId);
        redirect(base_url().'cPuntaje/vista_puntuar_copilotos/'.$viajeId, 'refresh');
      } 
    }
  } 