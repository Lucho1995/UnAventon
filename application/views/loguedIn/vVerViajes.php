

     <section id=vVerViajes class="content-section text-center">
        <div class="col-form-label-sm">
          <div class="card h-99">
            <h5 class="card-header"><font color="salmon"><u><?php echo $titulo ?></u></font></h5>
            <table class="table table-striped table-dark" style="background-color:black; border: 1px solid salmon; ">
              <thead>
                <tr>
                  <th scope="col" valign="center" align="center"><font color="salmon">Origen</font></th>
                  <th scope="col" valign="center" align="center"><font color="salmon">Destino</font></th>
                  <th scope="col" valign="center" align="center"><font color="salmon">Fecha</font></th>
                  <th scope="col" valign="center" align="center"><font color="salmon">Hora</font></th>
                  <th scope="col" valign="center" align="center"><font color="salmon">Asientos</font></th>
                  <th scope="col" valign="center" align="center"><font color="salmon">Costo</font></th>
                  <th scope="col" valign="center" align="center"><font color="salmon">Vehiculo</font></th>
                  <th scope="col" valign="center" align="center"><font color="salmon">Usuario</font></th>
                </tr>
              </thead>
              <tbody>
                <?php  foreach ($viajes as $row) {  ?>
                <tr>
                  <td valign="center" align="center"><font color="salmon"><?php echo $row['origen'] ?></font></td>
                  <td valign="center" align="center"><font color="salmon"><?php echo $row['destino'] ?></font></td>
                  <td valign="center" align="center"><font color="salmon"><?php echo $row['fecha'] ?></font></td>
                  <td valign="center" align="center"><font color="salmon"><?php echo $row['hora'] ?> hs.</font></td>
                  <td valign="center" align="center"><font color="salmon"><?php echo $row['asientosDisp'] ?> </td>
                  <td valign="center" align="center"><font color="salmon"><?php echo $row['Costo'] ?></font></td>
                  <td valign="center" align="center"valign="center" align="center"><font color="salmon"><?php echo $row['marca'].' '.$row['modelo'] ?></font></td>
                  <td valign="center" align="center"valign="center" align="center"><font color="salmon"><?php echo $row['nombre'].' '.$row['apellido'] ?></font></td>
                </tr>
              <?php }   ?>
              </tbody>
            </table>
          </div>
        </div>
        </section>

        <!-- Tablita -->
          <div class="datagrid">
            <table>
              <thead>
                <tr align="center">
                  <th scope="col" valign="center" align="center"><font color="black">Origen</font></th>
                  <th scope="col" valign="center" align="center"><font color="black">Destino</font></th>
                  <th scope="col" valign="center" align="center"><font color="black">Fecha</font></th>
                  <th scope="col" valign="center" align="center"><font color="black">Hora</font></th>
                  <th scope="col" valign="center" align="center"><font color="black">Asientos</font></th>
                  <th scope="col" valign="center" align="center"><font color="black">Costo</font></th>
                  <th scope="col" valign="center" align="center"><font color="black">Vehiculo</font></th>
                  <th scope="col" valign="center" align="center"><font color="black">Usuario</font></th>
                  <th scope="col" valign="center" align="center"><font color="black">Detalles</font></th>
                </tr>
              </thead>
              <tbody>
                <?php  $columna1=false; ?>
                <?php  foreach ($viajes as $row) {  ?>
                  <?php  if ($columna1 == true) { ?>
                    <tr>
                      <tr class="alt" style="color: blue;">
                        <td><?php echo $row['origen'] ?></td>
                        <td><?php echo $row['destino'] ?></td>
                        <td><?php echo $row['fecha'] ?></td>
                        <td><?php echo $row['hora'] ?></td>
                        <td><?php echo $row['asientosDisp'] ?></td>
                        <td><?php echo $row['Costo'] ?></td>
                        <td><?php echo $row['marca'].' '.$row['modelo'] ?></td>
                        <td><?php echo $row['nombre'].' '.$row['apellido'] ?></td>
                        <td><a href="#" class="button button-pill button-flat-caution" style="background-color: black"><i class="fa fa-car" style="color: salmon"></i><font color="salmon">Ver mis vehiculos</font></a></td>
                      </tr>
                    </tr>
                  <?php $columna1 = false; }else{ ?>
                    <tr>
                      <td><font color="white"><?php echo $row['origen'] ?></td>
                      <td><font color="white"><?php echo $row['destino'] ?></td>
                      <td><font color="white"><?php echo $row['fecha'] ?></td>
                      <td><font color="white"><?php echo $row['hora'] ?></td>
                      <td><font color="white"><?php echo $row['asientosDisp'] ?></td>
                      <td><font color="white"><?php echo $row['Costo'] ?></td>
                      <td><font color="white"><?php echo $row['marca'].' '.$row['modelo'] ?></td>
                      <td><font color="white"><?php echo $row['nombre'].' '.$row['apellido'] ?></td>
                      <td><a href="#" class="button button-pill button-flat-caution"><i class="fa fa-car"s></i>Ver mis vehiculos</a></td>
                    </tr>
                  <?php $columna1 = true; } ?>
                <?php }  ?>
              </tbody>
            </table>
          </div>
    
        </section>