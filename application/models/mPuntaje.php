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
  		    		
    public function get_copiloto($copilotoId)    {
        $this->db->select('usuario.*');
        $this->db->from('calificaciones');
        $this->db->join('usuario','calificaciones.usuarioId =usuario.idUsuario');
        $this->db->where('idUsuario',$copilotoId);
        $query = $this->db->get();
        return $query->result_array()[0];
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
    	$this->db->update('usuario');
    	
    }
    public function puntajeNeutro($idPiloto,$comentario){
    	$piloto = $this->get_piloto($idPiloto);
    	$puntaje=$piloto[0]['reputacionPiloto'] +0;
    	$this->db->where('idUsuario',$idPiloto);
    	$this->db->set('reputacionPiloto',$puntaje);
    	$this->db->update('usuario');
    	
    }
    public function comentar($idPiloto,$comentario,$idViaje){
    	$piloto = $this->get_piloto($idPiloto);
    	$FechaActual =date('Y-m-d');
		$campos = array(
			'calificacion'=>$this->input->post('puntaje'),
			'comentarioPiloto'=>'',
			'comentarioCopiloto'=>$comentario,
			'fecha'=>$FechaActual,
			'usuarioId'=>$idPiloto,
			'comentoId'=>$this->session->userdata('idUsuario'),
            'viajeId' => $idViaje
		 );    
    	$this->db->insert('calificaciones',$campos);
    }
    public function comentarCopiloto($idCopiloto,$comentario,$idViaje){
        $copiloto = $this->get_copiloto($idCopiloto);
        $FechaActual =date('Y-m-d');
        $campos = array(
            'calificacion'=>$this->input->post('puntaje'),
            'comentarioPiloto'=>$comentario,
            'comentarioCopiloto'=>'',
            'fecha'=>$FechaActual,
            'usuarioId'=>$idCopiloto,
            'comentoId'=>$this->session->userdata('idUsuario')  ,
            'viajeId' => $idViaje
         );
         $this->db->insert('calificaciones',$campos);    
    }

    public function Copiloto_voto($usuarioId, $viajeId){
        
    	$this->db->select('*');
    	$this->db->from('calificaciones');
    	$this->db->where('comentoId',$this->session->userdata('idUsuario'));
        $this->db->where('viajeId',$viajeId);
    	$query = $this->db->get();
        if($query->num_rows()>=1){
    		return TRUE;
    	}	
    	else{
    		return FALSE;
    	}
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


    public function sumarPuntajeCopiloto($idCopiloto,$comentario){
        $copiloto = $this->get_copiloto($idCopiloto);
        $puntaje=$copiloto['reputacionCopiloto'] +1;
        $this->db->set('reputacionCopiloto',$puntaje);
        $this->db->where('idUsuario',$idCopiloto);
        $this->db->update('usuario');
    }
    public function restarPuntajeCopiloto($idCopiloto,$comentario){
        $copiloto = $this->get_copiloto($idCopiloto);
        $puntaje=$copiloto['reputacionCopiloto'] -1;
        $this->db->set('reputacionCopiloto',$puntaje);
        $this->db->where('idUsuario',$idCopiloto);
        $this->db->update('usuario');  
    }
    public function puntajeNeutroCopiloto($idCopiloto,$comentario){
        $copiloto = $this->get_copiloto($idCopiloto);
        $puntaje=$copiloto['reputacionCopiloto'] +0;
        $this->db->where('idUsuario',$idCopiloto);
        $this->db->set('reputacionCopiloto',$puntaje);
        $this->db->update('usuario');
        
    }
}   

