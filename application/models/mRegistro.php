<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class MRegistro extends CI_Model{

	function __construct()
	{
		parent::__construct();
	}

	public function registrarse($param){

		$campos = array(
			'nombre'=>$param['nombre'],
			'apellido'=> $param['apellido'],
			'email'=> $param['email'],
			'foto'=> $param['foto'],
			'fechaNac'=> $param['fechaNac'],
			'dni'=> $param['dni'],
			'clave'=> $param['clave']
		);
		$this->db->insert('usuario',$campos);
		return $this->db->insert_id();
	}

}