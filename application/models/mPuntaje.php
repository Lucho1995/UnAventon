<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MPuntaje extends CI_Model {

    function __construct() {
       parent::__construct();
    }

    public function get_piloto($pilotoId){
    	$this->db->select('usuario.*');
    	$this->db->from('calificaciones');
    	$this->db->join('usuario','calificaciones.usuarioId =usuario.idUsuario');
    	$this->db->where('idUsuario',$pilotoId);
    	$query = $this->db->get();
		return $query->result_array();		    	
    }
  		    		
    

    public function sumarPuntaje($idPiloto,$comentario){
    	$piloto = $this->get_piloto($idPiloto);
    	$puntaje=$piloto[0]['reputacionPiloto'] +1;
    	$this->db->set('reputacionPiloto',$puntaje);
    	$this->db->where('idUsuario',$idPiloto);
    	$this->db->update('usuario');
    	
    }
    public function restarPuntaje($idPiloto,$comentario){
    	$piloto = $this->get_piloto($idPiloto);
    	$puntaje=$piloto[0]['reputacionPiloto'] -1;
    	$this->db->set('reputacionPiloto',$puntaje);
    	$this->db->where('idUsuario',$idPiloto);
    	$this->db->update('usuario',$idPiloto);
    	
    }
    public function puntajeNeutro($idPiloto,$comentario){
    	$piloto = $this->get_piloto($idPiloto);
    	$puntaje=$piloto[0]['reputacionPiloto'] +0;
    	$this->db->where('idUsuario',$idPiloto);
    	$this->db->set('reputacionPiloto',$puntaje);
    	$this->db->update('usuario');
    	
    }
    public function comentar($idPiloto,$comentario){
    	$piloto = $this->get_piloto($idPiloto);
    	$FechaActual =date('Y-m-d');
		$campos = array(
			'calificacion'=>$this->input->post('puntaje'),
			'comentarioPiloto'=>'',
			'comentarioCopiloto'=>$comentario,
			'fecha'=>$FechaActual,
			'usuarioId'=>$idPiloto,
			'comentoId'=>$this->session->userdata('idUsuario')	
		 );    
    	$this->db->insert('calificaciones',$campos);
    	

    }
    public function Copiloto_voto($usuarioId, $viajeId){
    	$this->db->select('*');
    	$this->db->from('calificaciones');
    	$this->db->where('usuarioId',$usuarioId);
    	$query = $this->db->get();
    	if($query->num_rows()>0){
    		return TRUE;
    	}	
    	else{
    		return FALSE;
    	}
    }
}   