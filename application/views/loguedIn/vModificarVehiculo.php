  
  <body>
        <section id="formulario-modificar-veh" class="content-section text-center">
        <h5> Modificar vehiculo </h5>
          <h6><?php echo $vehiculo[0]['marca']." ".$vehiculo[0]['modelo'];  ?></h6>
            <?php $id=$vehiculo[0]['idVehiculo']; ?>
            <div class="container">
              <div class="col-lg-5 mx-auto">
                <div class="border">
                   <br>
                   <form action="<?php echo base_url(); ?>cVerMisVehiculos/modificar_vehiculo/<?php echo $id; ?>" method="POST">
                    <p> Los campos con * son obligatorios </p>
                    <label>Marca</label></br>
                    <input type="text" name="marca" value="<?php echo $vehiculo[0]['marca']; ?>" class="form-group" required></br>
                    <label>Modelo</label></br>
                    <input type="text" name="modelo" value="<?php echo $vehiculo[0]['modelo']; ?>" class="form-group" required></br>
                    <label>Patente</label></br>
                    <input type="text" name="patente" value="<?php echo $vehiculo[0]['patente']; ?>"class="form-group" required></br>
                    <label>Color *</label></br>
                    <input type="text" name="color" value="<?php echo $vehiculo[0]['color']; ?>" class="form-group" required></br>
                    <label>Seguro *</label></br>
                    <input type="text" name="seguro" value="<?php echo $vehiculo[0]['seguro']; ?>" class="form-group" required></br>
                    <label>Poliza *</label></br>
                    <input type="text" name="numPoliza" value="<?php echo $vehiculo[0]['numPoliza']; ?>" class="form-group" required></br>
                    <label>Capacidad *</label></br>
                    <input type="text" name="capacidad" value="<?php echo $vehiculo[0]['capacidad']; ?>" class="form-group" required></br>
                    <br>
                    <button type="submit" onclick="validar" class="btn btn-default">Confirmar</button>
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
        cap =  document.getElementById('capacidad').value
        if (document.getElementById('marca').value.length==0) {
                alert("Tiene que escribir la marca del vehiculo");
                return false;
        }
        if (document.getElementById('modelo').value.length==0) {
                alert("Tiene que escribir el modelo del vehiculo");
                return false;
        }
        if (document.getElementById('color').value.length==0) {
                alert("Tiene que escribir el color del vehiculo");
                return false;
        }
        if (document.getElementById('patente').value.length==0) {
                alert("Tiene que escribir el color del vehiculo");
                return false;
        }
        if (isNaN(nump)) {
                alert("El numero de poliza solo admite caracteres numericos");
                return false;
        }
        if (isNaN(cap)) {
                alert("La capacidad del vehiculo solo admite caracteres numericos");
                return false;
        }
    }
</script>