     <section id=mostrar-vehiculos class="content-section text-center">
        <h1 style="text-align: center"> Mis Vehículos </h1>
            <div class="col-form-label-sm">
            <table class="table users table-hover">
              <thead>
                <tr>
                  <th>Marca</th>
                  <th>Modelo</th>
                  <th>Color</th>
                  <th>Patente</th>
                  <th>Seguro</th>
                  <th>Poliza</th>
                  <th>Capacidad</th>
                  <th>Eliminar</th>
                  <th>Modificar</th>
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
                          <td><a href="javascript:editar(<?php echo $idVehiculo.','.$this->session->userdata('idUsuario') ?>)"><i class="fa fa-wrench" style="font-size:20px;"></i></td> 
                 </tr> 
                <?php } }  ?>
              </tbody>
            </table>
            <a href="<?php echo base_url().'cVerMisVehiculos/vista_registrar/'.$this->session->userdata('idUsuario'); ?>" class="button button-pill button-flat-caution" style="border-radius: 30px;"><font size="3"><i class="fa fa-plus" style="font-size:12px"></i><i class="fa fa-car"></i>  Registrar vehiculo</font></a>
        </div>

  </section>

  </body>

    <script language="JavaScript" type="text/javascript">
      function editar(idVehiculo,id) {
          location.href="<?php echo base_url(); ?>"+"cVerMisVehiculos/vista_modificar/"+id+"/"+idVehiculo;
      }
    </script>

