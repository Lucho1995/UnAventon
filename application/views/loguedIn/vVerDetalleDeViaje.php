<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="row">
  <div class="col-sm-4" >
          <div class="card h-99" align="center" style="margin-left: 75px ">
            <h5 class="card-header"><font color="salmon" size="5">
            <i class="fa fa-car" style="font-size: 25px"></i> Detalles del viaje
            </font></h5>
              <br>
              <a class="card-text" align="left"><font color="rose" size="4"><b>Origen</b> : <?php echo $viaje[0]['origen']; ?></font></a>
              <hr align="right" size="100" color="f1f1f1" size="100">
              <a class="card-text" align="left"><font color="black" size="4"><b>Destino:</b> <?php echo $viaje[0]['destino']; ?></font></a>
              <hr align="right" size="100" color="f1f1f1" size="100">
              <a class="card-text" align="left"><font color="black" size="4"><b>Fecha:</b> <?php echo $viaje[0]['fecha']; ?> </font></a>
              <hr align="right" size="100" color="f1f1f1" size="100">
              <a class="card-text" align="left"><font color="black" size="4"><b>Hora:</b> <?php echo $viaje[0]['hora']; ?> </font></a>
              <div class="card-text" align="left">
              <hr align="right" size="100" color="f1f1f1" size="100">
              <a class="card-text" align="left"><font color="black" size="4"><b>Descripcion:</b> <?php echo $viaje[0]['descripcion']; ?> </font></a><br>
              </div>
              <hr align="right" size="100" color="f1f1f1" size="100">
              <a class="card-text" align="left"><font color="black" size="4"><b>Asientos Disponibles:</b> <?php echo $viaje[0]['asientosDisp']; ?> </font></a>
              <hr align="right" size="100" color="f1f1f1" size="100">
              <a class="card-text" align="left"><font color="black" size="4"><b>Costo:</b><?php echo $viaje[0]['Costo']; ?> </font></a>
              <hr align="right" size="100" color="f1f1f1" size="100">
              <a class="card-text" align="left"><font color="black" size="4"><b>Periodico:</b>
                <?php if ($viaje[0]['Periodico'] == 1) {
                  echo "Sí";
                } else {
                  echo "No";
                }
                 ?>
              </font></a>
              <hr align="right" size="100" color="f1f1f1" size="100">
              <div class="card-header" align="left">
              <a class="card-text" style="margin-left: -20px"><font color="black" size="4"><b>Vehiculo: </b> </font></a><br>
              <a class="card-text" align="left"><font color="black" size="4"><i class="fa fa-chevron-right"></i> Marca y Modelo: <?php echo $viaje[0]['marca']. " ". $viaje[0]['modelo']; ?> </font></a><br>
              <a class="card-text" align="left"><font color="black" size="4"><i class="fa fa-chevron-right"></i> Patente: <?php echo $viaje[0]['patente']; ?> </font></a><br>
              <a class="card-text" align="left"><font color="black" size="4"><i class="fa fa-chevron-right"></i> Color: <?php echo $viaje[0]['color']; ?> </font></a><br>
              <a class="card-text" align="left"><font color="black" size="4"><i class="fa fa-chevron-right"></i> Numero de Poliza: <?php echo $viaje[0]['numPoliza']; ?> </font></a><br>
              <a class="card-text" align="left"><font color="black" size="4"><i class="fa fa-chevron-right"></i> Seguro: <?php echo $viaje[0]['seguro']; ?> </font></a><br>
              <a class="card-text" align="left"><font color="black" size="4"><i class="fa fa-chevron-right"></i> Capacidad: <?php echo $viaje[0]['capacidad']; ?> personas </font></a><br>
              </div>
          </div>
    </div>
    <div class="col-sm-4">
    <div class="card h-99" align="center" style="margin-right: 40px" >
      <h5 class="card-header">
        <font color="salmon" size="5">
          <i class="fa fa-address-card" style="font-size: 25px"></i> Detalles del Piloto
        </font>
      </h5>
      <br>
      <a class="card-text" align="left">
        <font color="rose" size="4"><b>Nombre:</b> <?php echo $piloto['nombre']; ?> </font>
      </a>
      <hr align="right" size="100" color="f1f1f1" size="100">
      <a class="card-text" align="left">
        <font color="black" size="4"> <b>Apellido:</b> <?php echo $piloto['apellido']; ?> </font>
      </a>
      <hr align="right" size="100" color="f1f1f1" size="100">
      <a class="card-text" align="left">
        <font color="black" size="4"><b>Fecha de nacimiento:</b> <?php echo $piloto['fechaNac']; ?></font>
      </a>
      <hr align="right" size="100" color="f1f1f1" size="100">
      <a class="card-text" align="left">
        <font color="black" size="4"><b>DNI:</b> <?php echo $piloto['dni']; ?> </font>
      </a>
      <hr align="right" size="100" color="f1f1f1" size="100">
      <a class="card-text" align="left">
        <font color="black" size="4"><b>E-Mail:</b> <?php echo $piloto['email']; ?> </font>
      </a>
      <hr align="right" size="100" color="f1f1f1" size="100">
      <a class="card-text" align="left">
        <font color="black" size="4"><b>Reputacion:</b> <?php
              if ($piloto['reputacionPiloto'] > 50) {
                echo "Excelente!";
              } elseif ($piloto['reputacionPiloto'] > 25) {
                echo "Muy Buena";
              } elseif ($piloto['reputacionPiloto'] > 10) {
                echo "Buena";
              } elseif ($piloto['reputacionPiloto'] > -10) {
                echo "Regular";
              } elseif ($piloto['reputacionPiloto'] > -25) {
                echo "Mala";
              } elseif ($piloto['reputacionPiloto'] > -50) {
                echo "Muy Mala";
              } else {
                echo "Pésima...";
              }
            ?>
          <br>
          </font>
      </a>
      <br>
    </div>
        <br>
        <?php if ($this->session->userdata('idUsuario')==){ ?>
          <a href="<?php echo base_url().'cPostulantes/postularse'.'/'.$this->session->userdata('idUsuario').'/'.$viaje[0]['idViaje'] ?>" class="button button-flat-caution" style='width:355px; height:65px;'><h3><i class="fa fa-arrow-circle-right" style="font-weight: 20px;"></i>Puntuar Piloto</h3></a>  
        <?php } ?>
    </div>

    <div class="col-sm-4">
    <h5 class="form-signin-heading"><font color="salmon">Usted puede</font></h5>
    <br>
    <?php if ($viaje[0]['usuarioId'] == $this->session->userdata('idUsuario')) { ?>
      <a href="<?php echo base_url().'cPostulantes/vista_postulantes'.'/'.$this->session->userdata('idUsuario').'/'.$viaje[0]['idViaje'] ?>" class="button button-flat-caution" style='width:360px; height:40px;'>
      <h3><i class="fa fa-list" style="font-size:24px"></i><font style="font-size: 26px">Ver postulantes</font></h3>
      </a>
      <br>
      <br>
      <br>
      <br>
      <a href="<?php echo base_url().'cVerViajes/vista_editar_viaje'.'/'.$this->session->userdata('idUsuario').'/'.$viaje[0]['idViaje'] ?>" class="button button-flat-caution" style='width:360px; height:20px;'>
        <h3><i class="fa fa-list" style="font-size:25px"></i><font size="6"></font>Editar viaje</h3>
      </a>
      <br>
      <br>
      <br>
      <br>
      <div>
       <a href="<?php echo base_url().'cVerViajes/baja_de_viaje'.'/'.$this->session->userdata('idUsuario').'/'.$viaje[0]['idViaje'] ?>" class="button button-flat-caution" style='width:360px; height:40px;'>
        <h3><i class="fa fa-list" style="font-size:25px"></i><font size="5">Dar de baja viaje</font></h3>
      </a>
      </div>
    <?php }else{ ?>
      <a href="<?php echo base_url().'cPostulantes/postularse'.'/'.$this->session->userdata('idUsuario').'/'.$viaje[0]['idViaje'] ?>" class="button button-flat-caution" style='width:360px; height:40px;'><h3><i class="fa fa-arrow-circle-right" style="font-weight: 20px;"></i>Postularme</h3></a>
    <?php } ?>
    <br>
    <br>
    <br>
    <br>

 </div>
</div>


<div style="margin-left: 60px; margin-right: 60px">
  <hr color="salmon">
</div>

<div class="wrapper row" style="margin-left: 75px">
  <br><br><br>

  <!-- Sección comentar -->
  <div class="col-sm-6">
    <form action ="<?php echo base_url().'cPreguntas/cargar_comentarios/'.$idViaje; ?>" class="form-signin" method="POST">
    <h5 class="form-signin-heading"><font color="salmon">Ingresar un comentario</font></h5>
    <br>
    <div class="col-sm-4" id="content1" style="display: block; margin-top: 6px">
      <br>
      <br>
      <br>
    </div>
    <div class="col-sm-4" id="content2" style="display: none;">
      <font color="salmon" face="sans-serif">Su Nombre</font>
      <input type="text" class="form-control" name="nombre" autofocus="" />
      <br>
    </div>
    <div class="col-sm-5">
      <font color="salmon" face="sans-serif">Comentario</font><br>
      <textarea id="myTextarea" name="adr" class="form-control" required></textarea>
    </div>
    <br>
    <div style="margin-left: 14px">
      <input type="checkbox" id="check" class="css-checkbox" name="periodico" onchange="javascript:mostrar()" checked/>
      <label for="check" class="css-label"></label> Comentar como anónimo
    </div>
    <br>
    <div style="margin-left: 15px">
      <button class="btn btn-default" type="submit">Comentar</button>
    </div>
  </form>
</div>

  <div class="col-sm-6">
    <div class="col-sm-15" >

      <!-- Cuadro Comentarios -->
      <div class="card h-99" align="center" style="margin-right: 75px" >
        <h5 class="card-header">
          <font color="salmon" size="5">
            <i class="fa fa-comments" style="font-size: 25px"></i> Comentarios
          </font>
        </h5>
        <?php foreach ($preguntas as $row) { ?>
          <a class="card-text" align="left">
            <div>
              <font color="salmon" size="4" face="sans-serif" style="margin-left: 5px">
                <i class="fa fa-comment" style="font-size: 20px"></i>
                
                <?php
                  if ( $row['nombre'] == "" ) {
                    echo "Anonimo dijo:";
                  } else {
                    echo $row['nombre']." dijo:";
                  }
                ?>
              </font>
            </div>
          </a>
          <font color="black" size="5" style="text-align: left; margin-left: 30px">
            <?php echo $row['cuerpo']; ?>
          </font>
          <div style="text-align: right;">
            <font color="gray" size="1">
              Comentado el: <?php echo $row['fecha'] ?>
            </font>
          </div>
          <?php if ( $row['respuesta'] != "" ) { ?>
            <div style="font-style: italic; font-weight: bold; text-align: left; margin-left: 1px">
              <font color="salmon" size="3" face="sans-serif" style="text-align: left;">
                <i class="fa fa-reply fa-rotate-180" style="font-size: 25px;"></i>
                El piloto respondió:
              </font>
              <div style="margin-left: 20px">
                <font color="black" face="sans-serif" style="margin-left: 50px">
                  <?php echo $row['respuesta']; ?>
                </font>
              </div>
            </div>
          <?php } elseif($viaje[0]['usuarioId'] == $this->session->userdata('idUsuario')) { ?>
            <div class="card-header">
              <button type="button" class="btn btn-default" onclick="javascript:respuesta(<?php echo$row['idPregunta'] ?>)" data-toggle="modal" data-target="#myModal" style="font-size: 15px; padding: 3px; border-color: black;">
                <font color="black"> Responder</font>
              </button>
            </div>
          <?php } ?>
          <hr align="right" size="100" color="#D5D5D5" size="100">
        <?php } ?>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function respuesta(idPregunta) {
    document.getElementById("idPregunta").value = idPregunta;
  }

  function mostrar(){
        element1 = document.getElementById("content1");
        element2 = document.getElementById("content2");
        check = document.getElementById("check");
        if (check.checked) {
            element1.style.display='block';
            element2.style.display='none';
        }
        else {
            element1.style.display='none';
            element2.style.display='block';
        }
}
</script>
<!------------------------------------------------------------------------------------------------------>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="background-color: black; border-color: salmon;">
      <div class="modal-body">
        <font color="salmon" face="sans-serif" size="4">Escriba su respuesta</font><br><br>
        <form action ="<?php echo base_url().'cPreguntas/cargar_respuesta/'.$idViaje; ?>" class="form-signin" method="POST">
        <input type="hidden" name="idPregunta" id="idPregunta"/>
        <textarea class="form-control" id="respuesta" name="respuesta" required></textarea>
      </div>
      <div align="right" style="margin-right: 5px; margin-bottom: 5px">
        <button class="btn btn-default" type="submit" style="font-size: 15px; padding: 3px;">Comentar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal" style="font-size:15px; padding:3px;">
          Cancelar
        </button>
      </div>
    </div>
  </div>
</div>
<!------------------------------------------------------------------------------------------------------>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
