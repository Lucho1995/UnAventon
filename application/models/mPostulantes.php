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
    private function usuario_postulado($idViaje,$idUsuario){
      $this->db->select('*');
      $this->db->from('postulacion');
      $this->db->where('usuarioId',$idUsuario);
      $this->db->where('viajeId',$idViaje);
      if ($this->db->count_all_results()>=1){
        return true;
      } else {
        return false;
      }
    }
   public function postularse($datos){
      if (!$this->usuario_postulado($datos['viajeId'], $datos['usuarioId'])){
        $campos = array (
          'estado' => $datos['estado'],
          'viajeId' => $datos['viajeId'],
          'usuarioId' => $datos['usuarioId']
        );
        $this->db->insert('postulacion',$campos);
        echo '<script language="javascript">alert("¡Tu postulación fue procesada con exito! Ahora debes esperar que el piloto responda a tu solicitud.");</script>';
      } else {
        echo '<script language="javascript">alert("Ya estas postulado en este viaje.");</script>';
      }
    } 
}