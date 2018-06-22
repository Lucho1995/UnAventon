  
  <body>

        <section id="formulario-modificar-veh" class="content-section text-center">
        <h5> Modificar viaje </h5>
            <div class="container">
              <div class="col-lg-5 mx-auto">
                <div class="border">
                   <br>
                   <form action="" method="POST" onsubmit="return validar()">
                    <p> Todos los campos son obligatorios. </p>
                    <label>Marca</label></br>
                    <input type="text" name="marca" id="marca" value="" class="form-group" required></br>
                    <label>Modelo</label></br>
                    <input type="text" name="modelo" id="modelo" value="" class="form-group" required></br>
                    <label>Patente</label></br>
                    <input type="text" name="patente" id="patente" value="" class="form-group" required></br>
                    <label>Color </label></br>
                    <input type="text" name="color" id="color" value="" class="form-group" required></br>
                    <label>Seguro </label></br>
                    <input type="text" name="seguro" id="seguro" value="" class="form-group" required></br>
                    <label>Poliza </label></br>
                    <input type="text" name="numPoliza" id="numPoliza" value="" class="form-group" required></br>
                    <label>Capacidad </label></br>
                    <input type="text" name="capacidad" id="capacidad" value="" class="form-group" required></br>
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