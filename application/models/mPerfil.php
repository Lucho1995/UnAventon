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
     if ( $this->verificar($param['email'],$param['fechaNac'],$idUsuario) ){
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

    private function verificar ($email,$fechaNac,$idUsuario){
    if ($this->emailUnico($email,$idUsuario) && $this->esMayor($fechaNac)) {
        return true;
    } else {
        if (!$this->emailUnico($email,$idUsuario) && $this->esMayor($fechaNac)) {
            echo '<script language="javascript">alert("El usuario con ese email ya esta registrado.");</script>';
            redirect(base_url().'cPerfil/formulario_editar_perfil/'.$idUsuario, 'refresh');
        } else {
            if ($this->emailUnico($email,$idUsuario) && !$this->esMayor($fechaNac)) {
                echo '<script language="javascript">alert("Debes ser mayor de 16 años para estar registrado/a");</script>';
                redirect(base_url().'cPerfil/formulario_editar_perfil/'.$idUsuario, 'refresh');
            } else {
                echo '<script language="javascript">alert("Debes ser mayor de 16 años para estar registrado. El usuario con ese email ya esta registrado.");</script>';
                redirect(base_url().'cPerfil/formulario_editar_perfil/'.$idUsuario, 'refresh');
            }
        }
    }
   }

    private function emailUnico($email, $idUsuario){
        $this->db->select('email');
        $this->db->from('usuario');
        $this->db->where('email',$email);
        $this->db->where('idUsuario', $idUsuario);
        if($this->db->count_all_results()>=1){
            return FALSE;
        }
        else{
            return TRUE;
        }
    }

    public function esMayor($fechaNac) {
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


