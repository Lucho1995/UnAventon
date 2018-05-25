<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MVehiculos extends CI_Model {
   function __construct() {
       parent::__construct();
   }

   public function get_vehiculos(){ //me va  a llegar un parametro con el id de sesion
    $query = $this->db->query('SELECT * from vehiculo where usuarioId=7');//aca tengo que cambiar por el id de sesion
	  $vehiculos=($query->result_array()); 
	  return $vehiculos;
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

}