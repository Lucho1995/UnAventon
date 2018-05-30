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

	public function modificar_usuario($idUsuario,$param) {
        if ( $this->es_mayor($param['fechaNac']) ){
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
            } else {
               // redirect('http://localhost/UnAventon/cPerfil/miPerfil/'.$idUsuario);
                echo "<script language='javascript'>alert('Debes ser mayor de 16 años');</script>";
            }
    }

    public function es_mayor($fechaNac) {
        $FechaActual = date('Y-m-d');
        $fecha1 = date('Y',strtotime($fechaNac));
        $fecha2 = date('Y',strtotime($FechaActual));     
        if($fecha2-$fecha1 >= 16){
            return true;
        }
        else{
            return false;
        }
    }

}


