<!DOCTYPE html>
<html lang="en">
  
  <script language="JavaScript" type="text/javascript">
    function confirmar(){
      var confirmacion = confirm("¿Estás seguro de cerrar sesión?");
      if(confirmacion == true){
        location.href="<?php echo base_url(); ?>cLogin/logout";
      }
    }

    function perfil(id) {
      location.href="<?php echo base_url(); ?>"+"cPerfil/miPerfil/"+id;
    }
  </script>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <img src="<?php echo base_url() ?>img/logo2.png" height="50" width="50">
      <div class="container">
        <a href="javascript:perfil('<?php echo $idUsuario; ?>')"><?php echo $nombre; echo " "; echo $apellido ?></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url().'cVerViajes/misViajes/'.$idUsuario;?>" align="center">Mis Viajes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" style="color:salmon;">|</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="<?php echo base_url().'cVerViajes/viajes/'.$idUsuario;?>" align="center">Todos los Viajes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" style="color: salmon;">|</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="javascript:confirmar()" align="center">Cerrar Sesión</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <br><br><br><br>