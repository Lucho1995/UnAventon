<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MVehiculos extends CI_Model {
   function __construct() {
       parent::__construct();
   }

   public function get_vehiculos($idUsuario){ 
      $this->db->select('*');
      $this->db->from('vehiculo');
      $this->db->where('usuarioId', $idUsuario);
      $query = $this->db->get();
      return($query->result_array());
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

    public function modificar_vehiculo($idVehiculo,$param){
    	$param = array (
    		'marca'=> $param['marca'],
    		'modelo'=> $param['modelo'],
    		'patente'=> $param['patente'],
    		'color'=> $param['color'],
    		'seguro'=> $param['seguro'],
    		'numPoliza'=> $param['numPoliza'],
    		'capacidad'=> $param['capacidad']
    	);
    	$this->db->where('idVehiculo',$idVehiculo);
    	$this->db->update('vehiculo',$param);
    }

    public function patente_existe($patente,$usuario){
      $this->db->select('*');
      $this->db->from('vehiculo');
      $this->db->where('patente',$patente);
      $this->db->where('usuarioId',$usuario);
      $query=$this->db->get();
      $resultado=$query->result();
      return $resultado;
    }
}