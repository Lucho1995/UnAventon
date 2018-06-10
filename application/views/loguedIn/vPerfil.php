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
            <h6 class="card-header"><font color="salmon" size="5">
              <i class="fa fa-user" style="font-size: 25px"></i> Mis datos personales
            </font></h6>
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
          <br>
          <div>
            <a href="<?php echo base_url().'/cVerMisVehiculos/ver_mis_vehiculos/'.$idUsuario ?>" class="button button-pill button-flat-caution" style="border-radius: 30px;">
              <i class="fa fa-car" style="font-size:33px">Ver mis vehiculos</i>
            </a>
          </div>
        </div>
      </div>
      <!-- /.row -->
      <hr color="salmon">
      <!-- /.row -->
      <div>
        <div class="col-md-4 mb-4" align="left">
          <div class="card h-99" align="center" >
            <h6 class="card-header"><font color="salmon" size="5">
              <i class="fa fa-star" style="font-size: 25px"></i>
                Reputaciones
            </font></h6>
              <a class="card-text" align="left">
                <font color="rose" size="5"><br>
                  Como Piloto:<br>
                  <i class="fa fa-chevron-right" style="font-size: 15px"></i>
                  <?php
                    if ($reputacionPiloto > 50) {
                      echo "Excelente!";
                    } elseif ($reputacionPiloto > 25) {
                      echo "Muy Buena";
                    } elseif ($reputacionPiloto > 10) {
                      echo "Buena";
                    } elseif ($reputacionPiloto > -10) {
                      echo "Regular";
                    } elseif ($reputacionPiloto > -25) {
                      echo "Mala";
                    } elseif ($reputacionPiloto > -50) {
                      echo "Muy Mala";
                    } else {
                      echo "Pésima...";
                    }
                  ?>
                  <i class="fa fa-arrow-right" style="font-size: 20px"></i>
                  <?php echo $reputacionPiloto; ?> Puntos
                </font>
              </a>
              <hr align="right" size="100" color="f1f1f1" size="100">
              <a class="card-text" align="left">
                <font color="black" size="5">
                  Como Copiloto:<br>
                  <i class="fa fa-chevron-right" style="font-size: 15px"></i>
                  <?php
                    if ($reputacionCopiloto > 50) {
                      echo "Excelente!";
                    } elseif ($reputacionCopiloto > 25) {
                      echo "Muy Buena";
                    } elseif ($reputacionCopiloto > 10) {
                      echo "Buena";
                    } elseif ($reputacionCopiloto > -10) {
                      echo "Regular";
                    } elseif ($reputacionCopiloto > -25) {
                      echo "Mala";
                    } elseif ($reputacionCopiloto > -50) {
                      echo "Muy Mala";
                    } else {
                      echo "Pésima...";
                    }
                  ?>
                  <i class="fa fa-arrow-right" style="font-size: 20px"></i>
                  <?php echo $reputacionCopiloto; ?> Puntos
                </font>
              </a><br>
              <hr align="right" size="100" color="f1f1f1" size="100">
          </div>
        </div>
    </div>
    <!-- /.container -->