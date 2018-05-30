<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MLogin extends CI_Model {

    function __construct() {
       parent::__construct();
    }
    public function validate($email, $clave){

        // Prep the query
        $this->db->where('email', $email);
        $this->db->where('clave', $clave);
        // Run the query
        $query = $this->db->get('Usuario');
        
        // Let's check if there are any results
        if($query->num_rows() == 1){
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }

    public function get_id($email){
        $this->db->where('email', $email);
        $query = $this->db->get('Usuario');
        return $query->row()->idUsuario;
    }

    public function get_perfil($id){
        $this->db->where('idUsuario', $id);
        $query = $this->db->get('Usuario');
        $perfil = array(
            'idUsuario' => $id,
            'nombre' => $query->row()->nombre,
            'apellido' => $query->row()->apellido,
            'foto' => $query->row()->foto,
            'email' => $query->row()->email,
            'reputacionPiloto' => $query->row()->reputacionPiloto,
            'reputacionCopiloto' => $query->row()->reputacionCopiloto,
            'clave' => $query->row()->clave,
            'fechaNac' => $query->row()->fechaNac,
            'dni' => $query->row()->dni,
        );
        return $perfil;
    }
}