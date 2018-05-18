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
	public function verificar($email,$fechaNac){
		if ($this->emailUnico($email) && $this->esMayor($fechaNac)){
			return TRUE;
		}
		else{
			if(!$this->emailUnico($email) && $this->esMayor($fechaNac)){
				echo '<script language="javascript">alert("El usuario con ese email ya esta registrado");</script>';
			}
		
			else{
				if($this->emailUnico($email) && !$this->esMayor($fechaNac)){
					echo '<script language="javascript">alert("Usuario menor de 16 años");</script>';
				}
				else{
					echo '<script language="javascript">alert("El usuario con ese email ya esta registrado y es menor a 16 años");</script>';
				}
			}
		}
	}


	public function emailUnico($email){
		$this->db->select('email');
		$this->db->from('usuario');
		$this->db->like('email', $email);
		if($this->db->count_all_results()>=1){
			return FALSE;
		}
		else{
			return TRUE;
		}
	}
	public function esMayor($fechaNac){
		$this->db->select('fechaNac');
		$this->db->from('usuario');
		$años = $fechaNac->diff(date('Y-m-d'));
		if($años->y>=16){
			return TRUE;
		}
		else{
			return FALSE;
		}
	}
}
