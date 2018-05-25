<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MPerfil extends CI_Model {

    function __construct() {
       parent::__construct();
    }

    public function obtener_usuario($idUsuario){
       $this->db->select('*');
       $this->db->from('usuario');
	   $this->db->where('idUsuario',$idUsuario);
	   $query = $this->db->get();
	   return ($query->result_array());
	}

	public function modificar_usuario($idUsuario,$param){
    	$param = array (
    		'nombre'=> $param['nombre'],
    		'apellido'=> $param['apellido'],
    		'email'=> $param['email'],
    		'clave'=> $param['clave'],
    		'fechaNac'=> $param['fechaNac'],
    		'dni'=> $param['dni'],
    	);
    	$this->db->where('idUsuario',$idUsuario);
    	$this->db->update('usuario',$param);
    }
}


