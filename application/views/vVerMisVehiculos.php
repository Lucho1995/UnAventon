     <section id=mostrar-vehiculos class="content-section text-center">
        <h1> Mis Vehículos <h2>
            <div class="col-form-label-sm">
            <table class="table users table-hover">
              <thead>
                <tr>
                  <th scope="col">Marca</th>
                  <th scope="col">Modelo</th>
                  <th scope="col">Color</th>
                  <th scope="col">Patente</th>
                  <th scope="col">Seguro</th>
                  <th scope="col">Poliza</th>
                  <th scope="col">Capacidad</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php    
                foreach ($vehiculos as $row) { 
                  $idVehiculo=$row['idVehiculo'];  
                  if ($row['eliminado']<>1) {
                  ?>
                  <tr> 
                          <td> <?php echo $row['marca'] ?> </td>
                          <td> <?php echo $row['modelo'] ?> </td>
                          <td> <?php echo $row['color'] ?> </td>
                          <td> <?php echo $row['patente'] ?> </td>
                          <td> <?php echo $row['seguro'] ?> </td>
                          <td> <?php echo $row['numPoliza'] ?> </td>
                          <td> <?php echo $row['capacidad'] ?> </td> 
                          <td><a href="<?php echo base_url().'cVerMisVehiculos/eliminar_vehiculo/'.$idVehiculo; ?>" onclick="return confirm('¿Estás seguro/a que querés eliminar este elemento?')" title="Eliminar"><i class="fa fa-trash-o"></i></td>
                          <td><a href="<?php echo base_url()."cVerMisVehiculos/vista_modificar/".$idVehiculo; ?>" title="Modificar"><i class="fa fa-wrench"></i></td> 
                 </tr> 
                <?php } }  ?>
              </tbody>
            </table>
        </div>

  </section>

  </body>