    <br><br><br>

    <script language="JavaScript" type="text/javascript">

    function editar(id) {
      location.href="<?php echo base_url(); ?>"+"cPerfil/formulario_editar_perfil/"+id;
    }

  </script>

    <!-- Page Content -->
    <div class="container">

      <!-- Heading Row -->
      <div class="row my-5">
        <div class="col-md-4 mb-4 border" style="margin-left: 30px;">
          <h2 style="margin-top: 200px"><font size="10">(SIN FOTO DE PERFIL)</font></h2>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-6" style="margin-left: 275px">
          <div class="card h-99" align="center">
            <h5 class="card-header">
              <font color="salmon">
                <i class="fa fa-user" style="font-size: 25px;"></i> Mis datos personales
              </font>
            </h5>
            <div style="text-align: left;">
              <br>
              <font face="sans-serif" color="rose" style="font-size: 21px">Nombre: <?php echo $nombre; ?> </font>
              <hr align="right" size="100" color="f1f1f1" size="100">
              <font face="sans-serif" color="black" style="font-size: 21px"> Apellido: <?php echo $apellido; ?> </font>
              <hr align="right" size="100" color="f1f1f1" size="100">
              <font face="sans-serif" color="black" style="font-size: 21px">Fecha de nacimiento: <?php echo $fechaNac; ?> </font>
              <hr align="right" size="100" color="f1f1f1" size="100">
              <font face="sans-serif" color="black" style="font-size: 21px">DNI: <?php echo $dni; ?> </font>
              <hr align="right" size="100" color="f1f1f1" size="100">
              <font face="sans-serif" color="black" style="font-size: 21px">E-Mail: <?php echo $email; ?> </font>
            </div>
            <div class="card-footer" align="center">
              <a style="border-color: black; color: black" class="btn btn-default" href="javascript:editar(<?php echo $idUsuario ?>)">Editar perfil</a>
            </div>
          </div>
          <br>
          <div>
            <a href="<?php echo base_url().'cVerMisVehiculos/ver_mis_vehiculos/'.$idUsuario ?>" class="button button-pill button-flat-caution" style="border-radius: 50px;"><font size="4"><i class="fa fa-car"></i>  Ver mis vehiculos</font>
            </a>
           <br><br>
            <a href="<?php echo base_url().'cVerViajes/misViajesHechos/'.$this->session->userdata('idUsuario') ?>" class="button button-pill button-flat-caution" style="border-radius: 50px;"><font size="4"><i class="fa fa-list"></i></font><font size="4">  Mis viajes hechos</font>
            </a>
            <br><br>
            <a href="<?php echo base_url().'cVerViajes/vista_viajes_postule/'.$this->session->userdata('idUsuario') ?>" class="button button-pill button-flat-caution" style="border-radius: 50px;"><font size="4"><i class="fa fa-list"></i></font><font size="4">  Viajes a los que me postule</font>
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
    <br><br><br>
    <!-- /.container -->