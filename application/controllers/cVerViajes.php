<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CVerViajes extends CI_Controller {

  function __construct() {
      parent::__construct();
      $this->load->library('form_validation'); 
      $this->load->model('mLogin');
      $this->load->model('mViajes');
      $this->load->model('mVehiculos');
      $this->load->model('mPostulantes');
      $this->load->model('mPreguntas');
  }   

   public function viajes($id='visitante'){
      $viajes = array('viajes' => $this->mViajes->get_viajes(),
                      'titulo' => 'Todos los viajes');
      if ($this->session->userdata('logueado')) {
        if ($this->session->userdata('idUsuario') == $id){
          $this->load->view('vHead');
          $this->load->view('loguedIn/vheader');
          $this->load->view('loguedIn/vVerViajes', $viajes);
          $this->load->view('loguedIn/vFooter');
        } else {
          echo "<script language='javascript'>alert('Accseso denegado');</script>";
          redirect(base_url().'#iniciar','refresh');
        }
      } else {
          $this->load->view('vHead');
          $this->load->view('vheader2');
          $this->load->view('loguedIn/vVerViajes', $viajes);
          $this->load->view('loguedIn/vFooter');       
      }     
   }
  public function misViajes($id){
    if ($this->session->userdata('logueado')){
      if ($this->session->userdata('idUsuario') == $id){
        $viajes = array('viajes' => $this->mViajes->get_viajes($id),
                        'titulo' => 'Lista de mis viajes');
        $this->load->view('vHead');
        $this->load->view('loguedIn/vHeader');
        $this->load->view('loguedIn/vVerViajes', $viajes,$id);
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

  public function vista_detalle_viaje($id,$idViaje){
    $viaje = $this->mViajes->get_viaje($idViaje);
    $parametros = array(
                        'idViaje' => $idViaje,
                        'viaje' => $viaje,
                        'piloto' => $this->mLogin->get_perfil($viaje[0]['usuarioId']),
                        'preguntas' => $this->mPreguntas->get_pregunta($idViaje),
                        );
    $vehiculo =$this->mVehiculos->get_vehiculo($viaje[0]['vehiculoId']);
    if ($this->session->userdata('logueado')){
      if ($this->session->userdata('idUsuario') == $id){
        $this->load->view('vHead');
        $this->load->view('loguedIn/vHeader');
        $this->load->view('loguedIn/vVerDetalleDeViaje', $parametros);
        $this->load->view('loguedIn/vFooter');
      } else {
        echo "<script language='javascript'>alert('Accseso denegado');</script>";
        redirect(base_url().'#iniciar','refresh');
      }
    } else {
      $this->load->view('vHead');
      $this->load->view('vHeader2');
      $this->load->view('loguedIn/vVerDetalleDeViaje', $parametros);
      $this->load->view('loguedIn/vFooter');
    }
  }

  public function vista_editar_viaje($id, $idViaje){
    if ($this->session->userdata('logueado')){
      if ($this->session->userdata('idUsuario') == $id){
        $viaje = $this->mViajes->get_viaje($idViaje)[0];
        $data = array('vehiculos' => $this->mVehiculos->get_vehiculos($id),
                      'viaje' => $viaje,
                      'vehiculo' => $this->mVehiculos->get_vehiculo($viaje['idVehiculo'])[0]);       
        $this->load->view('vHead');
        $this->load->view('loguedIn/vHeader');
        $this->load->view('loguedIn/vModificarViaje',$data);
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
   public function formulario_publicar(){
    //if ($this->session->userdata('logueado')) {
      //if ($this->session->userdata('idUsuario') == $id){
        $title = array('titulo' => 'Un Aventon!');
        $id = array('id' => $this->session->userdata('idUsuario'));
        $perfil = $this->mLogin->get_perfil($this->session->userdata('idUsuario'));
        $data = array ();
        $data['vehiculos'] = $this->mVehiculos->get_vehiculos($perfil['idUsuario']);
        $this->load->view('vHead', $title);
        $this->load->view('loguedIn/vHeader', $perfil);
        $this->load->view('loguedIn/vPublicarViaje', $data, $id);
        $this->load->view('loguedIn/vFooter');
    }

    public function publicar_viaje($idUsuario) {
      $asientos = $this->mVehiculos->buscar_id($this->input->post('vehiculoId'));
      if ($this->input->post('periodico') == "on") { //si el checkbox "periodico" esta seleccionado
        $dias=$this->input->post('dias[]');
        $fecha1=$this->input->post('fecha');
        $fecha2=$this->input->post('fechaFin');
        $fechaIni = date('Y-m-d', strtotime($fecha1));
        $fechaFin = date('Y-m-d', strtotime($fecha2));
        $diff = abs(strtotime($fechaIni) - strtotime($fechaFin));
        $days = floor($diff / (60 * 60 * 24)); //esta cosa calcula los dias nidea xq
        for ($i=0; $i<=$days; $i++){
          $fecha=strtotime("+".$i." day", strtotime($fechaIni));
          $d=date('l',$fecha);
          if (in_array($d,$dias)){
            $fecha=date('Y-m-d', $fecha);
            $datos=array(
                'origen' => $this->input->post('origen'),
                'destino' => $this->input->post('destino'),
                'fecha' => $fecha,
                'hora' => $this->input->post('hora'),
                'descripcion' => $this->input->post('descripcion'),
                'costo' => $this->input->post('costo'),
                'origen' => $this->input->post('origen'),
                'vehiculoId'=> $this->input->post('vehiculoId'),
                'asientosDisp'=> $asientos[0]['capacidad'],
                'usuarioId' => $this->session->userdata('idUsuario')
                );
                $this->mViajes->publicar_viaje($datos);
          }
        }
      } else {
          $datos=array(
            'origen' => $this->input->post('origen'),
            'destino' => $this->input->post('destino'),
            'fecha' => $this->input->post('fecha'),
            'hora' => $this->input->post('hora'),
            'descripcion' => $this->input->post('descripcion'),
            'costo' => $this->input->post('costo'),
            'origen' => $this->input->post('origen'),
            'vehiculoId'=> $this->input->post('vehiculoId'),
            'asientosDisp'=> $asientos[0]['capacidad'],
            'usuarioId' => $this->session->userdata('idUsuario')
          );
      $this->mViajes->publicar_viaje($datos);
      //redirect (base_url().'cVerViajes/misViajes/'.$idUsuario, 'refresh');
      }
      redirect (base_url().'cVerViajes/misViajes/'.$idUsuario, 'refresh');
    }

   public function modificar_viaje($id,$idViaje){
      $viaje=array(
        'fecha' => $this->input->post('fecha'),
        'hora' => $this->input->post('hora'),
        'costo' => $this->input->post('costo'),
        'vehiculoId'=> $this->input->post('vehiculoId'),
        'descripcion'=> $this->input->post('descripcion'),
      );
      $this->mViajes->modificar_viaje($viaje, $idViaje);
      echo "<script language='javascript'>alert('Viaje actualizado correctamente');</script>";
      redirect (base_url().'cVerViajes/misViajes/'.$id, 'refresh');
    }

    public function vista_viajes_postule($idUsuario){
      if ($this->session->userdata('logueado')){
        if ($this->session->userdata('idUsuario') == $idUsuario){
          $prueba = $this->mPostulantes->get_viajes_postule($idUsuario);
          $viajes = array('viajes' => $this->mPostulantes->get_viajes_postule($idUsuario));
          $this->load->view('vHead');
          $this->load->view('loguedIn/vHeader');
          $this->load->view('loguedIn/vViajesPostule', $viajes);
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
    public function baja_de_viaje($id,$idViaje){
      $postulantes =$this->mPostulantes->get_postulantes($idViaje);
      $cantAceptados=0;
      foreach ($postulantes as $row ) {
        if($row['estado']== 'Aceptado'){
          $cantAceptados++;
        }
      }
      if($cantAceptados>0){
        $this->mViajes->baja_de_viaje_con_postulantes($idViaje,$id);
      }else{
        $this->mViajes->baja_de_viaje_sin_postulantes($idViaje);
      }
      redirect(base_url().'cVerViajes/misViajes/'.$id, 'refresh');


  }
}
