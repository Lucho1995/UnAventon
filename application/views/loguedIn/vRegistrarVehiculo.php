    <body>
        <section id="formulario-registrar-veh" class="content-section text-center">
        <h5> Registrar vehiculo </h5>
            <div class="container">
              <div class="col-lg-5 border" style="margin-left: 325px">
                <div class="col-lg-6" style="margin-left: 100px">
                   <br>
                   <form action="<?php echo base_url(); ?>cVerMisVehiculos/registrar_vehiculo/<?php echo $id; ?>" method="POST" onsubmit="return validar()">
                    <p style="font-size: 15px; font-style: italic; color: salmon;"> Todos los campos son obligatorios </p><br>
                    <label>Marca</label></br>
                    <input type="text" name="marca" id="marca"  class="form-control" required></br>
                    <label>Modelo</label></br>
                    <input type="text" name="modelo" id="modelo" class="form-control" required></br>
                    <label>Patente</label></br>
                    <input type="text" name="patente" id="patente" class="form-control" required></br>
                    <label>Color</label></br>
                    <input type="text" name="color" id="color"  class="form-control" required></br>
                    <label>Seguro</label></br>
                    <input type="text" name="seguro" id="seguro" class="form-control" required></br>
                    <label>Poliza</label></br>
                    <input type="text" name="numPoliza" id="numPoliza" class="form-control" required></br>
                    <label>Capacidad</label></br>
                    <input type="text" name="capacidad"  id="capacidad" class="form-control" required></br>
                    <br>
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
