    <br><br><br>

    <script language="JavaScript" type="text/javascript">

    function editar(id) {
      location.href="<?php echo base_url(); ?>"+"cPerfil/formulario_editar_perfil/"+id;
    }

  </script>

    <!-- Page Content -->
    <div class="container">

      <!-- Heading Row -->
      <div class="row my-4">
        <div class="col-lg-8">
          <img src="" alt="">
          <h1>(Foto de perfil)</h1>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-4">
          <div class="card h-99" align="center" >
            <h6 class="card-header"><font color="salmon">Mis datos personales</font></h6>
              <a class="card-text" align="left"><font color="rose" size="4">Nombre: <?php echo $nombre; ?> </font></a>
              <hr align="right" size="100" color="f1f1f1" size="100">
              <a class="card-text" align="left"><font color="black" size="4"> Apellido: <?php echo $apellido; ?> </font></a>
              <hr align="right" size="100" color="f1f1f1" size="100">
              <a class="card-text" align="left"><font color="black" size="4">Fecha de nacimiento: <?php echo $fechaNac; ?> </font></a>
              <hr align="right" size="100" color="f1f1f1" size="100">
              <a class="card-text" align="left"><font color="black" size="4">DNI: <?php echo $dni; ?> </font></a>
              <hr align="right" size="100" color="f1f1f1" size="100">
              <a class="card-text" align="left"><font color="black" size="4">E-Mail: <?php echo $email; ?> </font></a>
            <div class="card-footer" align="center">
              <a class="btn btn-default" href="javascript:editar(<?php echo $idUsuario ?>)"><font color="salmon">Editar perfil</font></a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <hr color="salmon">
      </div>
      <!-- /.row -->
      <div class="row" align="center">
        <br><br><br>
        <div class="col-md-3 mb-4">
          <div class="card h-99" align="center" >
            <h6 class="card-header"><font color="salmon">Reputaciones</font></h6>
              <a class="card-text" align="left"><font color="rose" size="5"><br>Como Piloto: <?php if($reputacionPiloto>0){echo"Buena";}else{if($reputacionPiloto<0){echo"Mala";}else{echo"Regular";}}?></font></a>
              <hr align="right" size="100" color="f1f1f1" size="100">
              <a class="card-text" align="left"><font color="black" size="5">Como Copiloto: <?php if($reputacionCopiloto>0){echo"Buena";}else{if($reputacionCopiloto<0){echo"Mala";}else{echo"Regular";}}?></font></a><br>
          </div>
        </div>
        <a href="<?php echo base_url()."cVerMisVehiculos/mostrar_vehiculos/".$idUsuario; ?>" class=".btn-link">  <h3><i class="fa fa-bars" style="font-size:24px"></i> Ver mis vehiculos  </h3></a>

    </div>
    <!-- /.container -->
    