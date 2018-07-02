<section id="formulario-publicar-viaje" class="content-section text-center">
<h3>Publica un viaje</h3>
<div class=border>
<p style="color:salmon;"><i>Todos los campos son obligatorios.</i></p>
		<div class="container">
            <form method="POST" action="<?php echo base_url();?>cVerViajes/publicar_viaje/<?php echo $this->session->userdata('idUsuario')?>" >
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputNombre">Origen</label>
                  <input type="text" class="form-control" name="origen" required></br>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputApellido">Destino</label>
                  <input type="text" class="form-control" name="destino" required></br>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputFecha">Fecha</label>
                  <input type="date" class="form-control" name="fecha" required></br>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputHora">Hora</label>
                    <input type="time" class="form-control-file" name="hora" required>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputDesc">Descripción (opcional)</label>
                  <textarea class="form-control" name="descripcion" placeholder="Ingrese una breve descripcion o aclaracion."></textarea></br>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputCosto">Costo</label>
                  <input type="number" class="form-control" name="costo" required></br>
                </div>
				<div class="form-group col-md-6">
                  <label for="inputAsientos">Seleccione un vehiculo</label>
                  <select name="vehiculoId" required>
                  	<?php foreach ($vehiculos as $vehiculo) {
                  		?><option value="<?php echo $vehiculo['idVehiculo']; ?>"><?php echo $vehiculo['marca'].' '.$vehiculo['modelo']?></option>
                  <?php	} ?>
                  </select>
                </div></br>
                <br>
                <div class="form-row">
                  <label for="inputPeriodico">¿Es un viaje periodico?</label>
                  <input type="checkbox" id="check" class="form-control" name="periodico" onchange="javascript:mostrar()"></br>
                </div>
              </div><br>
             <div  id="content" style="display: none;">
                <div class="form-row">
                  <div class="form-group col-md-6">
              	    <label>Indique los dias de la semana que realizara el viaje</label><br>
                    <br>
                  		<input type="checkbox" name="dias[]" value="Monday">Lunes</input></br>
                  		<br>
                  		<input type="checkbox" name="dias[]" value="Tuesday">Martes</input></br>
                  		<br>
                  		<input type="checkbox" name="dias[]" value="wednesday">Miercoles</input></br>
                  		<br>
                  		<input type="checkbox" name="dias[]" value="Thursday">Jueves</input></br>
                  		<br>
                  		<input type="checkbox" name="dias[]" value="Friday">Viernes</input></br>
                  		<br>
                  		<input type="checkbox" name="dias[]" value="Saturday">Sabado</input></br>
                  		<br>
                  		<input type="checkbox" name="dias[]" value="Sunday">Domingo</input></br>
                </div>
                <div class="form-group col-md-4">
                  <br>
                  </br>
                <div class="form-group col-md-12">
                <label>Indique hasta qué fecha se realizara el viaje (la fecha que indicó anteriormente es considerada la fecha de inicio)</label><br>
                <br>
                <br>
                <input type="date" name="fechaFin"></input><br>

                </div>
              </div>
            </div>
           </div>
              <br> 
               <br>
               <br>
        <button type="submit" class="btn btn-default">Confirmar</button>
        <br>
        <br>
        </form>
     </div>
 </div>
</section>
<script>
function mostrar(){
        element = document.getElementById("content");
        check = document.getElementById("check");
        if (check.checked) {
            element.style.display='block';
        }
        else {
            element.style.display='none';
        }
}
</script>