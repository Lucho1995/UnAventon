<section id=vPuntajeCopilotos class="content-section text-center">
  <div class="col-form-label-sm">
    <div class="card h-99" style="background-color: #E8E6E6">
      <h5 class="card-header"><font color="salmon"><u><?php echo 'Copilotos'?></u></font></h5>
      <div class="datagrid">
        <table>
          <thead>
            <tr align="center" style="height: 40px;">
              <th align="center"><font color="black" size="3">Nombre</font></th>
              <th align="center"><font color="black" size="3">Apeliido</font></th>
              <th align="center"><font color="black" size="3">Reputacion Piloto</font></th>
              <th align="center"><font color="black" size="3">Reputacion Copiloto</font></th>
              <th align="center"><font color="black" size="3"></font>Puntuar</th>
            </tr>
          </thead>
         
          <tbody style="text-align: center;">
            <?php  $columna1=false; ?>
            <?php  foreach ($postulantes as $row) {  ?>
              <?php  if ($row['idViaje'] > 0) { ?>
               <?php  if ($columna1 == true) { ?>
                <tr class="alt" style="height: 55px;">
                  <td><font size="3"><?php echo $row['nombre'] ?></td>
                  <td><font size="3"><?php echo $row['apellido'] ?></td>
                  <td><font size="3"><?php echo $row['reputacionPiloto'] ?></td>
                  <td><font size="3"><?php echo $row['reputacionCopiloto'] ?></td>
                  <td><font size="3"><div class="card-footer" align="center">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal3" style="font-size: 15px; padding: 3px; border-color: black;" onclick="javascript:usuarioId(<?php echo $row['idUsuario']; ?>)">
                     <font color="black"> Puntuar piloto</font>
                    </button> </td> </div> 
                  <td align="center"> 
                </tr>
                <?php $columna1 = false; }else{ ?>
                <tr style="height: 55px;">
                   <td><font color="White" size="3"><?php echo $row['nombre'] ?></td>
                  <td><font color="White" color="White" size="3"><?php echo $row['apellido'] ?></td>
                  <td><font color="White" size="3"><?php echo $row['reputacionPiloto'] ?></td>
                  <td><font color="White" size="3"><?php echo $row['reputacionCopiloto'] ?></td>
                  <td><font color="White" size="3"><div class="card-footer" align="center">
                  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal3" style="font-size: 15px; padding: 3px; border-color: black;" onclick="javascript:usuarioId(<?php echo $row['idUsuario']; ?>)">
                     <font color="White"> Puntuar piloto</font>
                    </button> </td> </div> </td>
                  <td align="center">
                </tr>
                <?php $columna1 = true; } ?>
                <?php }  ?>
                <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div id="myModal3" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content" style="background-color: black; border-color: salmon;">
      <div class="modal-body">
        <font color="salmon" style="font-size: 22px">Puntuación de Copiloto:</font><br>
        <p style="font-size: 15px; margin-bottom: 10px; font-style: italic;">
          &nbsp;&nbsp;&nbsp;La puntuación del piloto puede basarse en su desempeño a la hora de llevar a cabo el viaje.<br>
          <font color="salmon"> - </font>
          Seleccione una opción para puntuar al Copiloto <br>
        </p>
      <!-- Falta acción del form -->
        <form action ="<?php echo base_url().'cPuntaje/PuntuarCopiloto/'.$postulantes[0]['viajeId']; ?>" class="form-signin" method="POST">
          <div align="center">
            <input id="usuarioId" type="hidden" name="usuarioId">
            <input type="radio" name="puntaje" value="bueno">
            Buena <font color="salmon"> (+1 punto) </font>
            &nbsp;<input type="radio" name="puntaje" value="malo">
            Mala <font color="salmon"> (-1 punto) </font>
            &nbsp;<input type="radio" name="puntaje" value="neutro">
            Regular <font color="salmon"> (0 puntos) </font>
          </div>

            <p style="font-size: 15px; margin-bottom: 10px; margin-top: 10px; font-style: italic;">
              <font color="salmon"> - </font>Además puede agregar un comentario adicional (opcional)
            </p>
            <textarea style="margin-top: 10px" class="form-control" id="respuesta" name="respuesta" ></textarea>
      <!--------------------------->
          </div>
          <div align="right" style="margin-right: 5px; margin-bottom: 5px">
          <button class="btn btn-default" type="submit" style="font-size: 15px; padding: 3px;">Puntuar</button>
        </form>
        <button type="button" class="btn btn-default" data-dismiss="modal" style="font-size:15px; padding:3px;">
          Cancelar
        </button>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  function usuarioId(usuarioId) {
    document.getElementById("usuarioId").value = usuarioId;
  }
</script>