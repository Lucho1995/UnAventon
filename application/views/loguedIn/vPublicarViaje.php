  <section id="formulario-publicar-viaje" class="content-section text-center">
  <h5>Publica un viaje</h5><br>
  <div class=border>
  <br>
  <font face="sans-serif" style="color: salmon; font-style: italic;">
    Todos los campos son obligatorios.
  </font>
  <br><br>
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
                <div>
                  <input type="checkbox" id="check" class="css-checkbox" name="periodico" onchange="javascript:mostrar()"/>
                  <label for="check" class="css-label"></label> ¿Es un viaje periodico?
                  </br>
                </div>
              </div><br>
            <div  id="content" style="display: none;">
                <div class="form-row">
                  <div class="form-group col-md-5 border" style="margin-left: 90px">
                    <br>
              	    <label style="font-style: italic;">Indique los dias de la semana que realizara el viaje</label><br>
                    <br>
                  	<input type="checkbox" name="dias[]" value="Monday" class="css-checkbox" id="box"/>
                    <label for="box" class="css-label"></label> Lunes
                  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  	<input type="checkbox" name="dias[]" value="Tuesday" class="css-checkbox" id="box2"/><label for="box2" class="css-label"></label> Martes
                  	<br><br>
                  	<input type="checkbox" name="dias[]" value="wednesday" class="css-checkbox" id="box3"/><label for="box3" class="css-label"></label> Miercoles
                  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  	<input type="checkbox" name="dias[]" value="Thursday" class="css-checkbox" id="box4"/><label for="box4" class="css-label"></label> Jueves
                  	<br><br>
                  	<input type="checkbox" name="dias[]" value="Friday" class="css-checkbox" id="box5"/><label for="box5" class="css-label"></label> Viernes
                  	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                  	<input type="checkbox" name="dias[]" value="Saturday" class="css-checkbox" id="box6"/><label for="box6" class="css-label"></label> Sabado
                  	<br><br>
                  	<input style="margin-right: 50px" type="checkbox" name="dias[]" value="Sunday" class="css-checkbox" id="box7"/><label for="box7" class="css-label"></label> Domingo
                    <br><br>
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