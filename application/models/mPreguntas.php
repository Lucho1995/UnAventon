<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MPreguntas extends CI_Model {

    function __construct() {
       parent::__construct();
    }

   public function cargar_comentario($datos){
   	
   	$campos = array(
    'nombre'=>$datos['nombre'],
    'fecha'=> $datos['fecha'],
    'cuerpo'=> $datos['cuerpo'],
    'viajeId'=> $datos['viajeId'],
    );
    $this->db->insert('preguntas',$campos);
    echo '<script language="javascript">alert("Su comentario ha sido publicado exitosamente");</script>';
   }
   public function get_pregunta($idViaje){
   	$this->db->where('viajeId', $idViaje);
   	$query = $this->db->get('preguntas');
   /*	print_r($query->result_array()[0]);
   	die();*/
   	return $query->result_array();
   }	
 } 