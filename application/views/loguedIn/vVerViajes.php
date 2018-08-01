


<section id=vVerViajes class="content-section text-center">

  <div id="oculto2" align="left" style="display: block;">
    <button class="btn btn-default" onclick="mostrar()">
      <font size="4">Filtrar viajes </font><i class="fa fa-search"></i>
    </button>
  </div>
  <div id="oculto" style="display: none;">
  <br> 
      <form method="POST" action="<?php echo base_url(); ?>cVerViajes/filtrar/<?php echo ($this->session->userdata('idUsuario')); ?>">
          <div class="form-group col-sm-3" style="float: left; height: 58px;">
            <br>
            <label for="origen" class="css-label"></label> <b> Ciudad origen </b>
            <input type="text" name="origen" id="origen"  class="form-control" required></br>
          </div>
          <div class="form-group col-sm-3" style="float: left; height: 58px;">
            <br>
            <label for="destino" class="css-label"></label> <b> Ciudad destino </b>
            <input type="text" name="destino" id="destino"  class="form-control"></br>
          </div>
          <br>
          <div class="form-group col-sm-3" style="float: left; height: 58px;">
            <label for="fecha" class="css-label"></label><b> Fecha </b>
            <input type="date" name="fecha" id="fecha" class="form-control" required>
          </div>
          <br>
          <div class="form-group col-sm-3" style="float: left; height: 58px;">
            <button type="submit" class="btn btn-default">Enviar</button>
          </div>
      </form>
  </div>

  <br>
  <br>

  <div class="col-form-label-sm">
    <div class="card h-99" style="background-color: #E8E6E6">
      <h5 class="card-header"><font color="salmon"><u><?php echo $titulo ?></u></font></h5>
      <div class="datagrid">
        <table>
          <thead>
            <tr align="center" style="height: 40px;">
              <th align="center"><font color="black" size="3">Origen</font></th>
              <th align="center"><font color="black" size="3">Destino</font></th>
              <th align="center"><font color="black" size="3">Fecha</font></th>
              <th align="center"><font color="black" size="3">Hora</font></th>
              <th align="center"><font color="black" size="3">Asientos</font></th>
              <th align="center"><font color="black" size="3">Costo</font></th>
              <th align="center"><font color="black" size="3">Vehiculo</font></th>
              <th align="center"><font color="black" size="3">Usuario</font></th>
              <th align="center"><font color="black" size="3">Detalles</font></th>
            </tr>
          </thead>
          <tbody style="text-align: center;">
            <?php  $columna1=false; ?>
            <?php  foreach ($viajes as $row) {  ?>
              <?php  if ($row['viajeEliminado'] == 0) { ?>
              
               <?php  if ($columna1 == true) { ?>
                <tr class="alt" style="height: 55px;">
                  <td><font size="3"><?php echo $row['origen'] ?></td>
                  <td><font size="3"><?php echo $row['destino'] ?></td>
                  <td><font size="3"><?php echo $row['fecha'] ?></td>
                  <td><font size="3"><?php echo $row['hora'] ?></td>
                  <td><font size="3"><?php echo $row['asientosDisp'] ?></td>
                  <td><font size="3"><?php echo $row['Costo'] ?></td>
                  <td><font size="3"><?php echo $row['marca'].' '.$row['modelo'] ?></td>
                  <td><font size="3"><?php echo $row['nombre'].' '.$row['apellido'] ?></td>
                  <td align="center">
                    <a href="<?php echo base_url().'cVerViajes/vista_detalle_viaje/'.$this->session->userdata('idUsuario').'/'.$row['idViaje'];?>" class="button button-pill button-flat-caution" style="font-size: 15px; padding: 1px 3px; margin-top: 10px">
                      <i class="fa fa-info-circle" style="color: black; font-size:15px;"></i>
                      <font color="black" style="font-size:15px">  Más detalles</font>
                    </a>
                  </td>
                </tr>
                <?php $columna1 = false; }else{ ?>
                <tr style="height: 55px;">
                  <td><font color="white" size="3"><?php echo $row['origen'] ?></td>
                  <td><font color="white" size="3"><?php echo $row['destino'] ?></td>
                  <td><font color="white" size="3"><?php echo $row['fecha'] ?></td>
                  <td><font color="white" size="3"><?php echo $row['hora'] ?></td>
                  <td><font color="white" size="3"><?php echo $row['asientosDisp'] ?></td>
                  <td><font color="white" size="3"><?php echo $row['Costo'] ?></td>
                  <td><font color="white" size="3"><?php echo $row['marca'].' '.$row['modelo'] ?></td>
                  <td><font color="white" size="3"><?php echo $row['nombre'].' '.$row['apellido'] ?></td>
                  <td align="center">
                    <a href="<?php echo base_url().'cVerViajes/vista_detalle_viaje/'.$this->session->userdata('idUsuario').'/'.$row['idViaje']  ;?>" class="button button-pill button-flat-caution" style="font-size: 15px; padding: 3px; margin-top: 10px">
                    <i class="fa fa-info-circle" style="font-size:15px"></i>  Más detalles</a></td>
                    </tr>
                <?php $columna1 = true; } ?>
                <?php }  ?>
                <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <br>
  <a href="<?php echo base_url() ?>cVerViajes/formulario_publicar" class="btn btn-default">Publicar viaje</a>
</br>
</br>
</br> 
</section>
<?PHP 
//HOLAAAA 
?>
<script>
  function validar(){
    if (document.getElementById('origen').value.length==0){
      alert("Debe llenar el campo origen");
      return false;
    }
    if (document.getElementById('destino').value.length==0){
      alert("Debe llenar el campo destino");
      return false;
    }
    return true;
  }

  function mostrar(){
    if (document.getElementById('oculto').style.display == 'none') {
      document.getElementById('oculto').style.display = 'block';
      document.getElementById('oculto2').style.display = 'none';
    } else {
      document.getElementById('oculto').style.display = 'none';
      document.getElementById('oculto2').style.display = 'block';
    }
  }
</script>


        