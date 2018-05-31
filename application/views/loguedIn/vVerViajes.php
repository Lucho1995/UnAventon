

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