<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MVehiculos extends CI_Model {
   function __construct() {
       parent::__construct();
   }

   public function get_vehiculos($id){
      $query = $this->db->select('*');
      $query = $this->db->from('vehiculo');
      $query = $this->db->where('usuarioId',$id);
      $query = $this->db->get();
      return ($query->result_array());
	 }

   public function get_vehiculo($idVehiculo){
     	$query= ($this->db->query('SELECT * from vehiculo WHERE idVehiculo='.$idVehiculo));
     	return ($query->result_array());
   }

    public function eliminar_vehiculo($idVehiculo){
      $query = ($this->db->query('SELECT vehiculoId FROM viaje where vehiculoId='.$idVehiculo));
	    $viajesAsociados=($query->result_array());
      if (! $viajesAsociados) {
        $this->db->where('idVehiculo', $idVehiculo);
        $this->db->delete('vehiculo');
      }else{
    	 $this->db->set('eliminado', 1);
    	 $this->db->where('idVehiculo',$idVehiculo);
    	 $this->db->update('vehiculo');
   	  }
    }

    public function patente_existe($patente, $idVehiculo){
        $this->db->select('patente');
        $this->db->from('vehiculo');
        $this->db->where('patente',$patente);
        $this->db->where('idVehiculo<>', $idVehiculo);
        if($this->db->count_all_results()>=1){
            return true;
        }
        else{
            return false;
        }
    }

    public function modificar_vehiculo($idVehiculo,$param){
      	$campos = array (
      		'marca'=> $param['marca'],
      		'modelo'=> $param['modelo'],
      		'patente'=> $param['patente'],
      		'color'=> $param['color'],
      		'seguro'=> $param['seguro'],
      		'numPoliza'=> $param['numPoliza'],
      		'capacidad'=> $param['capacidad']
      	);
        $id=$param['usuarioId'];
        if ($this->patente_existe($campos['patente'], $idVehiculo)){
          echo "<script language='javascript'>alert('La patente ya existe');</script>";
          redirect(base_url().'cVerMisVehiculos/vista_modificar/'.$id.'/'.$idVehiculo, 'refresh');
        	/*$this->db->where('idVehiculo',$idVehiculo);
        	$this->db->update('vehiculo',$campos);*/
        } else { 
          $this->db->where('idVehiculo',$idVehiculo);
          $this->db->update('vehiculo',$campos);
        }
    }


    public function registrar_vehiculo($datos){
    $campos = array(
    'marca'=>$datos['marca'],
    'modelo'=> $datos['modelo'],
    'patente'=> $datos['patente'],
    'color'=> $datos['color'],
    'seguro'=> $datos['seguro'],
    'numPoliza'=> $datos['numPoliza'],
    'capacidad'=> $datos['capacidad'],
    'usuarioId'=> $datos['usuarioId']
    );
    if($this->verificarPatente($campos['patente'])){
      $this->db->insert('vehiculo', $campos);
      echo '<script language="javascript">alert("Vehiculo registrado exitosamente");</script>';
      redirect(base_url().'cVerMisVehiculos/ver_mis_vehiculos/'.$this->session->userdata['idUsuario'],'refresh');
    }  
    else{
      echo '<script language="javascript">alert("Ya existe un vehiculo con esa patente");</script>';
      redirect(base_url().'cVerMisVehiculos/vista_registrar','refresh');
    }
  }
  private function verificarPatente($patente){
    $this->db->select('patente');
    $this->db->from('vehiculo');
    $this->db->like('patente', $patente);
    if($this->db->count_all_results()>=1){
      return FALSE;
    }
    else{
      return TRUE;
    }
  
  }
   public function buscar_id($idVehiculo){
      $this->db->select('capacidad');
      $this->db->from('vehiculo');
      $this->db->where('idVehiculo', $idVehiculo);
      $query = $this->db->get();
      return ($query->result_array());
    }


}