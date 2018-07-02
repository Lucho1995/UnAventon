  
  <body>

        <section id="formulario-modificar-veh" class="content-section text-center">
        <h5> Modificar viaje </h5>
            <div class="container">
              <div class="col-lg-5 mx-auto">
                <div class="border">
                   <br>
                   <form action="<?php echo base_url();?>cVerViajes/modificar_viaje/<?php echo $this->session->userdata('idUsuario').'/'.$viaje['idViaje']?>" method="POST" onsubmit="return validar()">
                    <p> Los campos con "x" no se pueden modificar. </p>
                    <br>
                    <label>x - Origen  </label></br>
                    <input value="<?php echo $viaje['origen']; ?>" type="text" name="origen" id="origen" class="form-group" disabled></br>
                    <label>x - Destino </label></br>
                    <input value="<?php echo $viaje['destino']; ?>" type="text" name="destino" id="destino" class="form-group" disabled></br>   
                    <label>Fecha</label></br>
                    <input value="<?php echo $viaje['fecha']; ?>" type="text" name="fecha" id="fecha" value="" class="form-group" required></br>
                    <label>Hora</label></br>
                    <input value="<?php echo $viaje['hora']; ?>" type="text" name="hora" id="hora" value="" class="form-group" required></br>
                    <label>Costo</label></br>
                    <input value="<?php echo $viaje['Costo']; ?>" type="text" name="costo" id="costo" value="" class="form-group" required></br>
                    <label>x - Vehiculo </label></br>
                    <input value="<?php echo $vehiculo['marca'].$vehiculo['modelo'] ?>" type="text" name="vehiculo" id="vehiculo" value="" class="form-group" disabled></br>
                    <br>
                    <br>
                    <label for="inputAsientos">Seleccione un vehiculo</label>
                    <select name="vehiculoId">
                    <?php foreach ($vehiculos as $vehiculo) { ?>
                        <option value="<?php echo $vehiculo['idVehiculo']; ?>">
                          <?php echo $vehiculo['marca'].' '.$vehiculo['modelo']?>
                        </option>
                    <?php } ?>
                    </select>
                    <br>
                    <br>
                    <br>
                    <div class="form-group col-md-7" style="margin-left: 92px">
                        <label>Descripción</label></br>
                        <textarea class="form-control" name="descripcion"><?php echo $viaje['descripcion']; ?></textarea></br>
                    </div>
                    <button type="submit" class="btn btn-default">Confirmar</button>
                    <br>
                    <br>
                </form>
               </div>
             </div>
            </div>
        </section>
  </body>
  <script>
    function validar(){
        nump = document.getElementById('numPoliza').value;
        cap =  document.getElementById('capacidad').value;
        if (isNaN(nump)) {
                alert("El numero de poliza solo admite caracteres numericos");
                return false;
        }
        if (isNaN(cap)) {
                alert("La capacidad del vehiculo solo admite caracteres numericos");
                return false;
        }
        return true;
    }
</script>