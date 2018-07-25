<section id=vVerViajes class="content-section text-center">
  <div class="col-form-label-sm">
    <div class="card h-99" style="background-color: #E8E6E6">
      <h5 class="card-header"><font color="salmon"><u>Viajes a los que me postule</u></font></h5>
      <div class="datagrid">
        <table>
          <thead>
            <tr align="center" style="height: 40px">
              <th align="center"><font color="black" size="3">Origen</font></th>
              <th align="center"><font color="black" size="3">Destino</font></th>
              <th align="center"><font color="black" size="3">Fecha</font></th>
              <th align="center"><font color="black" size="3">Hora</font></th>
              <th align="center"><font color="black" size="3">Costo</font></th>
              <th align="center"><font color="black" size="3">Vehiculo</font></th>
              <th align="center"><font color="black" size="3">Usuario</font></th>
              <th align="center"><font color="black">Mi estado como copiloto</font></th>
              <th align="center"><font color="black">Cancelar postulacion</font></th>
              <th align="center"><font color="black">Detalles</font></th>
            </tr>
          </thead>
          <tbody style="text-align: center;">
            <?php  $columna1=false; ?>
            <?php  foreach ($viajes as $row) {  ?>
              <?php  if ($columna1 == true) { ?>
                <tr class="alt" style="height: 55px;" align="center">
                  <td><font size="3"><?php echo $row['origen'] ?></td>
                  <td><font size="3"><?php echo $row['destino'] ?></td>
                  <td><font size="3"><?php echo $row['fecha'] ?></td>
                  <td><font size="3"><?php echo $row['hora'] ?></td>
                  <td><font size="3"><?php echo $row['Costo'] ?></td>
                  <td><font size="3"><?php echo $row['marca'].' '.$row['modelo'] ?></td>
                  <td><font size="3"><?php echo $row['nombre'].' '.$row['apellido'] ?></td>
                  <td align="center"><font size="3"><?php echo $row['estado'] ?></td>
                  <td>
                    <?php  if ($row['estado'] != 'Aceptado') { ?>
                      <a href="<?php echo base_url().'cPostulantes/darse_de_baja/'.$this->session->userdata('idUsuario').'/'.$row['idViaje']  ;?>" class="button button-pill button-flat-caution" style="font-size: 15px; background-color: black; padding: 3px;">
                        <i class="fa fa-times-circle" style="color: salmon; font-size:15px"></i>
                        <font color="salmon" style="font-size:15px">  Darme de baja</font>
                      </a>
                    <?php } else { ?>
                      <button type="button" class="button button-pill button-flat-caution" data-toggle="modal" data-target="#myModal" style="font-size: 15px; padding: 3px;">
                        <i class="fa fa-times-circle" style="font-size:15px"></i>
                        Darme de baja
                      </button>
                    <?php } ?>
                  </td>
                  <td align="center">
                    <a href="<?php echo base_url().'cVerViajes/vista_detalle_viaje/'.$this->session->userdata('idUsuario').'/'.$row['idViaje'];?>" class="button button-pill button-flat-caution" style="font-size: 15px; background-color: black; padding: 1px 3px;">
                      <i class="fa fa-info-circle" style="color: salmon; font-size:15px" ></i>
                      <font color="salmon" style="font-size:15px">  Más detalles</font>
                    </a>
                  </td>
                </tr>
                <?php $columna1 = false; }else{ ?>
                <tr style="height: 55px;" align="center">
                  <td><font color="white" size="3"><?php echo $row['origen'] ?></td>
                  <td><font color="white" size="3"><?php echo $row['destino'] ?></td>
                  <td><font color="white" size="3"><?php echo $row['fecha'] ?></td>
                  <td><font color="white" size="3"><?php echo $row['hora'] ?></td>
                  <td><font color="white" size="3"><?php echo $row['Costo'] ?></td>
                  <td><font color="white" size="3"><?php echo $row['marca'].' '.$row['modelo'] ?></td>
                  <td><font color="white" size="3"><?php echo $row['nombre'].' '.$row['apellido'] ?></td>
                  <td><font color="white" size="3"><?php echo $row['estado'] ?></td>
                  <td>
                    <?php  if ($row['estado'] != 'Aceptado') { ?>
                      <a href="<?php echo base_url().'cPostulantes/darse_de_baja/'.$row['viajeId'] ?>" class="button button-pill button-flat-caution" style="font-size: 15px; padding: 3px;">
                        <i class="fa fa-times-circle" style="font-size:15px"></i>  Darme de baja
                      </a>
                    <?php } else { ?>
                      <button type="button" class="button button-pill button-flat-caution" data-toggle="modal" data-target="#myModal" style="font-size: 15px; padding: 3px;">
                        <i class="fa fa-times-circle" style="font-size:15px"></i>  Darme de baja
                      </button>
                    <?php } ?>
                  </td>
                  <td align="center">
                    <a href="<?php echo base_url().'cVerViajes/vista_detalle_viaje/'.$this->session->userdata('idUsuario').'/'.$row['idViaje']  ;?>" class="button button-pill button-flat-caution" style="font-size: 15px; padding: 3px;">
                      <i class="fa fa-info-circle" style="font-size:15px"></i>  Más detalles
                    </a>
                  </td>
                    </tr>
                <?php $columna1 = true; } ?>
                <?php }  ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" style="background-color: black; border-color: salmon;">
      <div class="modal-header">
        Cuidado!
      </div>
      <div class="modal-body">
        <p>Estas seguro/a de darte de baja de este viaje? Se te penalizará restándote un punto como copiloto</p>
      </div>
      <div class="modal-footer">
        <a href="<?php echo base_url().'cPostulantes/darse_de_baja/'.$row['viajeId'] ?>" class="btn btn-default" style="font-size: 15px; padding: 3px;">  Aceptar </a>
        <button type="button" class="btn btn-default" data-dismiss="modal" style="font-size: 15px; padding: 3px;">Cancelar</button>
      </div>
    </div>
  </div>
</div>