<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MPuntaje extends CI_Model {

    function __construct() {
       parent::__construct();
    }

    public function get_calificaciones(){
        $this->db->select('*');
        $this->db->from('calificaciones');
        $query=$this->db->get();
        return ($query->result_array());
    }

    public function get_calificaciones_piloto($usuarioId){
    	$this->db->where('usuarioId', $usuarioId);
    	$this->db->where('comentarioCopiloto', "");
    	$this->db->join('usuario', 'calificaciones.comentoId = usuario.idUsuario');
    	$query = $this->db->get('calificaciones');
    	return $query->result_array();
    }

    public function get_calificaciones_copiloto($usuarioId){
        $this->db->where('usuarioId', $usuarioId);
        $this->db->where('comentarioPiloto', "");
        $this->db->join('usuario', 'calificaciones.comentoId = usuario.idUsuario');
        $query = $this->db->get('calificaciones');
        return $query->result_array();
    }
}