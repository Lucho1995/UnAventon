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
                  $idUsuario=$row['usuarioId'];
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
                          <td><a href="<?php echo base_url();?>cVerMisVehiculos/eliminar_vehiculo/<?php echo $idVehiculo;?>/<?php echo $idUsuario; ?>" onclick="return confirm('¿Estás seguro/a que querés eliminar este elemento?')" title="Eliminar"><i class="fa fa-trash-o" style="font-size:20px;"></i></td>
                          <td><a href="javascript:editar(<?php echo $idVehiculo ?>)"><i class="fa fa-wrench" style="font-size:20px;"></i></td> 
                 </tr> 
                <?php } }  ?>
              </tbody>
            </table>
            <a href="<?php echo base_url(); ?>cVerMisVehiculos/vista_registrar"><font color="salmon">Registrar vehiculo</font></a>
        </div>

  </section>

  </body>

    <script language="JavaScript" type="text/javascript">
      function editar(id) {
          location.href="<?php echo base_url(); ?>"+"cVerMisVehiculos/vista_modificar/"+id;
      }
    </script>

