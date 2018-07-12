<section id=vVerViajes class="content-section text-center">
  <div class="col-form-label-sm">
    <div class="card h-99">
      <h5 class="card-header"><font color="salmon"><u>Viajes a los que me postule</u></font></h5>
      <div class="datagrid">
        <table>
          <thead>
            <tr align="center" style="height: 40px">
              <th scope="col" valign="center" align="center"><font color="black">Origen</font></th>
              <th scope="col" valign="center" align="center"><font color="black">Destino</font></th>
              <th scope="col" valign="center" align="center"><font color="black">Fecha</font></th>
              <th scope="col" valign="center" align="center"><font color="black">Hora</font></th>
              <th scope="col" valign="center" align="center"><font color="black">Costo</font></th>
              <th scope="col" valign="center" align="center"><font color="black">Vehiculo</font></th>
              <th scope="col" valign="center" align="center"><font color="black">Usuario</font></th>
              <th scope="col" valign="center" align="center"><font color="black">Mi estado como copiloto</font></th>
              <th scope="col" valign="center" align="center"><font color="black">Cancelar postulacion</font></th>
              <th scope="col" valign="center" align="center"><font color="black">Detalles</font></th>
            </tr>
          </thead>
          <tbody>
            <?php  $columna1=false; ?>
            <?php  foreach ($viajes as $row) {  ?>
              <?php  if ($columna1 == true) { ?>
                <tr class="alt" style="height: 55px;" align="center">
                  <td><?php echo $row['origen'] ?></td>
                  <td><?php echo $row['destino'] ?></td>
                  <td><?php echo $row['fecha'] ?></td>
                  <td><?php echo $row['hora'] ?></td>
                  <td><?php echo $row['Costo'] ?></td>
                  <td><?php echo $row['marca'].' '.$row['modelo'] ?></td>
                  <td><?php echo $row['nombre'].' '.$row['apellido'] ?></td>
                  <td align="center"><?php echo $row['estado'] ?></td>
                  <td>
                    <a href="<?php echo base_url().'cPostulantes/darse_de_baja/'.$this->session->userdata('idUsuario').'/'.$row['idViaje']  ;?>" class="button button-pill button-flat-caution" style="font-size: 15px; background-color: black; padding: 3px;">
                      <i class="fa fa-times-circle" style="color: salmon; font-size:15px"></i>
                      <font color="salmon" style="font-size:15px">  Darme de baja</font>
                    </a>
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
                  <td><font color="white"><?php echo $row['origen'] ?></td>
                  <td><font color="white"><?php echo $row['destino'] ?></td>
                  <td><font color="white"><?php echo $row['fecha'] ?></td>
                  <td><font color="white"><?php echo $row['hora'] ?></td>
                  <td><font color="white"><?php echo $row['Costo'] ?></td>
                  <td><font color="white"><?php echo $row['marca'].' '.$row['modelo'] ?></td>
                  <td><font color="white"><?php echo $row['nombre'].' '.$row['apellido'] ?></td>
                  <td><font color="white"><?php echo $row['estado'] ?></td>
                  <td>
                    <a href="<?php echo base_url().'cPostulantes/darse_de_baja/'.$row['viajeId'] ?>" class="button button-pill button-flat-caution" style="font-size: 15px; padding: 3px;">
                      <i class="fa fa-times-circle" style="font-size:15px"></i>  Darme de baja
                    </a>
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
  <a href="<?php echo base_url() ?>cVerViajes/formulario_publicar" class="btn btn-default">Publicar viaje</a>
</section>