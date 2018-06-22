<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MPostulantes extends CI_Model {
   function __construct() {
       parent::__construct();
       $this->load->model('mLogin');
   }

   public function get_postulantes($idViaje){
   	$query=($this->db->query(
		'SELECT * FROM postulacion
		 INNER JOIN usuario ON postulacion.usuarioId = usuario.idUsuario
       INNER JOIN viaje ON postulacion.viajeId = viaje.idViaje
		 WHERE viajeId='.$idViaje
		));
   	return $query->result_array();
   }

   public function get_postulado($idPostulado){
   	$this->db->where('usuarioId', $idPostulado);
   $query = $this->db->get('postulacion');
   return $query->result_array();
   }

   public function rechazar_postulado_aceptado($idPostulado){
   	$postulado = array('estado' => 'Rechazado' );
   	$this->db->where('usuarioId',$idPostulado);
      $this->db->update('postulacion',$postulado);
      $usuario = $this->mLogin->get_perfil($this->session->userdata('idUsuario'));
      $usuario['reputacionPiloto'] --;
      $this->db->where('idUsuario',$this->session->userdata('idUsuario'));
      $this->db->update('usuario',$usuario);
   }

   public function rechazar_postulado($postulado){
      $this->db->where('usuarioId', $postulado['usuarioId']);
      $this->db->update('postulacion', $postulado);
   }

   public function aceptar_postulado($postulado){
     $this->db->where('usuarioId', $postulado['usuarioId']);
     $this->db->update('postulacion', $postulado);
   }
}