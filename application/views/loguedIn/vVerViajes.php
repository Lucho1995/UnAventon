

     <section id=vVerViajes class="content-section text-center">
        <div class="col-md-8 mb-4">
          <div class="card h-99">
            <h6 class="stroke"><font color="salmon"><u>Lista de viajes</u></font></h6>
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col" valign="center" align="center"><font color="black">Origen</font></th>
                  <th scope="col" valign="center" align="center"><font color="black">Destino</font></th>
                  <th scope="col" valign="center" align="center"><font color="black">Fecha</font></th>
                  <th scope="col" valign="center" align="center"><font color="black">Hora</font></th>
                  <th scope="col" valign="center" align="center"><font color="black">Asientos</font></th>
                  <th scope="col" valign="center" align="center"><font color="black">Costo</font></th>
                  <th scope="col" valign="center" align="center"><font color="black">Periodico</font></th>
                  <th scope="col" valign="center" align="center"><font color="black">Vehiculo</font></th>
                  <th scope="col" valign="center" align="center"><font color="black">Usuario</font></th>
                </tr>
              </thead>
                <?php  foreach ($viajes as $row) {  ?>
                <tr>
                  <td valign="center" align="center"><font color="black"><?php echo $row['origen'] ?></font></td>
                  <td valign="center" align="center"><font color="black"><?php echo $row['destino'] ?></font></td>
                  <td valign="center" align="center"><font color="black"><?php echo $row['fecha'] ?></font></td>
                  <td valign="center" align="center"><font color="black"><?php echo $row['hora'] ?> hs.</font></td>
                  <td valign="center" align="center"><font color="black"><?php echo $row['asientosDisp'] ?> </td>
                  <td valign="center" align="center"><font color="black"><?php echo $row['Costo'] ?></font></td>
                  <td valign="center" align="center"><font color="black"><?php if($row['Periodico']==1){echo "Sí";} else {echo "No";}?></font></td>
                  <td valign="center" align="center"valign="center" align="center"><font color="black"><?php echo $row['vehiculoId'] ?></font></td>
                  <td valign="center" align="center"valign="center" align="center"><font color="black"><?php echo $row['usuarioId'] ?></font></td>
                </tr>
              <?php }   ?>
              </tbody>
            </table>
          </div>
        </section>