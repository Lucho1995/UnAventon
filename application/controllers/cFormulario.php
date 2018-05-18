<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class formulario_controller extends CI_Controller{
    public function __construct() {
        parent::__construct(); 
         
        //Cargamos la librería de validación (todos las librerias, helpers, etc pueden ser cargados en los controladores o auto cargarlos indicándolo en los ficheros de configuración)
        $this->load->library('form_validation'); 
        $this->load->helper("url"); //Cargamos el helper de url imprescindible para usar la función base_url
    }
     
    public function index(){
        $this->load->view("vBody");
        

    }
 
 
    public function recibirFormulario(){ 
            $this->load->library('form_validation');
            $this->form_validation->set_rules('nombre', 'Nombre', 'required|min_length[3]|alpha|trim');
            $this->form_validation->set_rules('apellido', 'Apellido', 'required|min_length[3]|alpha|trim');
            $this->form_validation->set_rules('email', 'Email', 'required|min_length[3]|valid_email|trim|is_unique[usuario.email]');
            $this->form_validation->set_rules('fechaNac', 'Fecha de nacimiento', 'required|min_length[3]|alpha|trim');
            $this->form_validation->set_rules('dni', 'DNI', 'required|min_length[3]|alpha|trim');
            $this->form_validation->set_rules('clave', 'Contraseña', 'required|min_length[3]|matches[clave]');
            $this->form_validation->set_rules('clave', 'Repita su clave', 'required|min_length[3]|alpha|trim');
             
            

            if($this->form_validation->run()==false){
              $this->load->view("vBody");
            }else{
                echo " Datos cargados correctamente";
            }
            $email= $this->input->post('email');
            $fechaNac= $this->input->post('fechaNac');
            $this->mRegistro->verificar($email,$fechaNac);
            
    }
     
}
?>