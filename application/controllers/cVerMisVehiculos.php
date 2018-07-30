<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CVerMisVehiculos extends CI_Controller {

   function __construct() {
       parent::__construct();
       $this->load->model('mVehiculos');
       $this->load->model('mLogin');
       $this->load->model('mVehiculos');
       $this->load->model('mPostulantes');
   }

   public function vista_registrar($id){
    if ($this->session->userdata('logueado')) {
      if ($this->session->userdata('idUsuario') == $id){
        $title = array('titulo' => 'Un Aventon!');
        $id = array('id' => $this->session->userdata('idUsuario'));
        $perfil = $this->mLogin->get_perfil($this->session->userdata('idUsuario'));
        $this->load->view('vHead', $title);
        $this->load->view('loguedIn/vHeader', $perfil);
        $this->load->view('loguedIn/vRegistrarVehiculo', $id);
        $this->load->view('loguedIn/vFooter');
      } else {
        echo "<script language='javascript'>alert('Accseso denegado');</script>";
        redirect(base_url().'#iniciar','refresh');
      } 
    } else {
      echo "<script language='javascript'>alert('Por favor inicia sesion');</script>";
      redirect(base_url().'#iniciar','refresh');  
    }
   }

   public function registrar_vehiculo($idUsuario){
     $datos = array(
                    'marca' => $this->input->post('marca'),
                    'modelo' => $this->input->post('modelo'),
                    'patente' => $this->input->post('patente'),
                    'color' => $this->input->post('color'),
                    'seguro' => $this->input->post('seguro'),
                    'numPoliza' => $this->input->post('numPoliza'),
                    'capacidad' => $this->input->post('capacidad'),
                    'usuarioId' => $idUsuario
      );
     $this->mVehiculos->registrar_vehiculo($datos);
   }

   public function ver_mis_vehiculos($id){
      if ($this->session->userdata('logueado')){
        if ($this->session->userdata('idUsuario') == $id){
          $data = $this->mVehiculos->get_vehiculos($id);
          $title = array('titulo' => 'Bienvenido!');
          $perfil = $this->mLogin->get_perfil($id);
          $this->load->model('mVehiculos');
          $data['vehiculos']=$this->mVehiculos->get_vehiculos($id);
          $this->load->view('vHead');
          $this->load->view('loguedIn/vheader', $perfil);
          $this->load->view('loguedIn/vVerMisVehiculos', $data);
          $this->load->view('loguedIn/vFooter');
        } else {
          echo "<script language='javascript'>alert('Accseso denegado');</script>";
          redirect(base_url().'#iniciar','refresh');
        }
      } else { 
          echo "<script language='javascript'>alert('Por favor inicia sesion');</script>";
          redirect(base_url().'#iniciar','refresh');   
      }
    }

    public function vista_modificar($id,$idVehiculo){
       //if ($this->session->userdata('logueado')) {
        //if ($this->session->userdata('idUsuario') == $id){
          $this->load->model('mVehiculos');
          $title = array('titulo' => 'Bienvenido!');
          $id=$this->session->userdata('idUsuario');
          $perfil = $this->mLogin->get_perfil($id);
          $vehiculo=$this->mVehiculos->get_vehiculo($idVehiculo);
          $data = array ();
          $data['vehiculo']=$vehiculo;
          $this->load->view('vHead');
          $this->load->view('loguedIn/vheader',$perfil);
          $this->load->view('loguedIn/vModificarVehiculo', $data);
          $this->load->view('loguedIn/vFooter');
       /* } else {
          echo "<script language='javascript'>alert('Accseso denegado');</script>";
          redirect(base_url().'#iniciar','refresh');
        }
      } else {
        echo "<script language='javascript'>alert('Por favor inicia sesion');</script>";
        redirect(base_url().'#iniciar','refresh');        
      }*/
    }

    public function modificar_vehiculo($idVehiculo){
       /*if ($this->session->userdata('logueado')){ */
              $this->load->model('mVehiculos');
              $vehiculo=$this->mVehiculos->get_vehiculo($idVehiculo);
              $data = array (
                'marca' => $this->input->post('marca'),
                'modelo' => $this->input->post('modelo'),
                'patente' => $this->input->post('patente'),
                'color' => $this->input->post('color'),
                'seguro' => $this->input->post('seguro'),
                'numPoliza' => $this->input->post('numPoliza'),
                'capacidad' => $this->input->post('capacidad'),
                'usuarioId' => $this->session->userdata('idUsuario')
              );
              $this->mVehiculos->modificar_vehiculo($idVehiculo,$data);
              redirect('http://localhost/UnAventon/cVerMisVehiculos/ver_mis_vehiculos/'.$this->session->userdata('idUsuario'), 'refresh');
       /*} else {
              echo "<script language='javascript'>alert('Por favor inicia sesion');</script>";
              redirect(base_url().'#iniciar','refresh');             
       }*/
    }

    public function eliminar_vehiculo($idVehiculo,$idUsuario){
    if ($this->session->userdata('logueado')) {
      if ($this->session->userdata('idUsuario') == $idUsuario) {
        if (! $this->mVehiculos->viajes_asociados($idVehiculo)){
            $this->mVehiculos->baja_fisica_vehiculo($idVehiculo);
            redirect('http://localhost/UnAventon/cVerMisVehiculos/ver_mis_vehiculos/'.$this->session->userdata('idUsuario'), 'refresh');
        } else {
          if ($this->mPostulantes->get_viajes_con_pendientes($idVehiculo)){
            echo "<script language='javascript'>alert('No se puede eliminar un vehiculo asociado a un viaje si tiene postulantes pendientes o aceptados.');</script>";
            redirect('http://localhost/UnAventon/cVerMisVehiculos/ver_mis_vehiculos/'.$this->session->userdata('idUsuario'), 'refresh');
          } else {
            $this->mVehiculos->baja_logica_vehiculo($idVehiculo);
            redirect('http://localhost/UnAventon/cVerMisVehiculos/ver_mis_vehiculos/'.$this->session->userdata('idUsuario'), 'refresh');
            }
          }
          } else {
            echo "<script language='javascript'>alert('Para eliminar un vehiculo, inicia sesion');</script>";
            redirect(base_url().'#iniciar','refresh');
          }
      } else {
      echo "<script language='javascript'>alert('Para eliminar un vehiculo, inicia sesion');</script>";
      redirect(base_url().'#iniciar','refresh');
    }
    }
}
