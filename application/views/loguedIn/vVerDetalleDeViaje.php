<br>
<br>
<br>
<br>
<div class="row">
  <div class="col-sm-4" >
          <div class="card h-99" align="center" style="margin-left: 75px ">
            <h6 class="card-header"><font color="salmon" size="5">
            <i class="fa fa-car" style="font-size: 25px"></i> <b>Detalles del viaje</b>
            </font></h6>
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
  </div>
  <div class="col-sm-4" >
    <div class="card h-99" align="center" style="margin-right: 75px" >
            <h6 class="card-header"><font color="salmon" size="5">
              <i class="fa fa-address-card" style="font-size: 25px"></i> Detalles del Piloto
            </font></h6>
              <a class="card-text" align="left"><font color="rose" size="4"><b>Nombre:</b> <?php echo $piloto['nombre']; ?> </font></a>
              <hr align="right" size="100" color="f1f1f1" size="100">
              <a class="card-text" align="left"><font color="black" size="4"> <b>Apellido:</b> <?php echo $piloto['apellido']; ?> </font></a>
              <hr align="right" size="100" color="f1f1f1" size="100">
              <a class="card-text" align="left"><font color="black" size="4"><b>Fecha de nacimiento:</b> <?php echo $piloto['fechaNac']; ?> </font></a>
              <hr align="right" size="100" color="f1f1f1" size="100">
              <a class="card-text" align="left"><font color="black" size="4"><b>DNI:</b> <?php echo $piloto['dni']; ?> </font></a>
              <hr align="right" size="100" color="f1f1f1" size="100">
              <a class="card-text" align="left"><font color="black" size="4"><b>E-Mail:</b> <?php echo $piloto['email']; ?> </font></a>
          </div>
  </div>
</div>

<div style="margin-left: 60px; margin-right: 60px">
  <hr color="salmon">
</div>

<div class="wrapper row" style="margin-left: 75px">
  <br><br><br>
  <div class="col-sm-8">
    <form action ="<?php echo base_url().'cPreguntas/cargar_comentarios/'.$idViaje; ?>" class="form-signin" method="POST">
    <h4 class="form-signin-heading"><font color="salmon">Ingrese un comentario</font></h4>
    <div class="col-sm-3">
      <font color="salmon">Usuario (Opcional)</font>
      <input type="text" class="form-control" name="nombre" autofocus="" />
      <br>
    </div>
    <div class="col-sm-4">
      <font color="salmon">Comentario</font>
      <input class="form-control" name="cuerpo" required="Comentario obligatorio"/>
    </div>
    <br>
    <div style="margin-left: 15px">
      <button class="btn btn-default" type="submit" style="background-color: salmon; border-color: salmon"><font color="black">Comentar</font></button>
    </div>
  </form>
  </div>
  <div class="col-sm-4">
    <h4 class="form-signin-heading"><font color="salmon">Comentarios</font></h4>
    <div class="col-sm-15" >
      <div class="card h-99" align="center" style="margin-right: 75px" >
        <h6 class="card-header">
          <font color="salmon" size="5">
            <i class="fa fa-address-card" style="font-size: 25px"></i> Detalles del Piloto
          </font>
        </h6>
        <?php foreach ($preguntas as $row) { ?>
          <a class="card-text" align="left">
            <font color="salmon" size=" 4">
            <?php
              if ( is_null($row['nombre']) ) {
                echo "Anonimo dijo:";
              } else {
                echo $row['nombre']." dijo:";
              }
            ?>
            </font>
          </a>
          <br>
          <p align="center"><font color="black"><?php echo $row['cuerpo']; ?></font></p>
          
          <hr align="right" size="100" color="#D5D5D5" size="100">
        <?php } ?>
      </div>
    </div>
  </div>
<div>
    

  </div>
</div>
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
DETALLES DEL PILOTO
A PHP ERROR WAS ENCOUNTERED
Severity: Notice

Message: Undefined variable: aux

Filename: loguedIn/vVerDetalleDeViaje.php

Line Number: 101

Backtrace:

File: C:\xampp\htdocs\UnAventon\application\views\loguedIn\vVerDetalleDeViaje.php
Line: 101
Function: _error_handler

File: C:\xampp\htdocs\UnAventon\application\controllers\cVerViajes.php
Line: 70
Function: view

File: C:\xampp\htdocs\UnAventon\index.php
Line: 315
Function: require_once

A PHP ERROR WAS ENCOUNTERED
Severity: Warning

Message: Invalid argument supplied for foreach()

Filename: loguedIn/vVerDetalleDeViaje.php

Line Number: 101

Backtrace:

File: C:\xampp\htdocs\UnAventon\application\views\loguedIn\vVerDetalleDeViaje.php
Line: 101
Function: _error_handler

File: C:\xampp\htdocs\UnAventon\application\controllers\cVerViajes.php
Line: 70
Function: view

File: C:\xampp\htdocs\UnAventon\index.php
Line: 315
Function: require_once

