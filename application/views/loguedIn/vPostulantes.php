<br><br><br>
<br><br><br>
<br>

<body>
  <h5 align="center"><font color="salmon" size="6"><b>Lista de copilotos postulados</b></font></h5>
  <br>
  <table id="keywords" style="background-color: black">
    <thead>
      <tr style="background-color: salmon; color: black;">
        <th><span>Nombre</span></th>
        <th><span>Edad</span></th>
        <th><span>Reputación(copiloto)</span></th>
        <th><span>Estado</span></th>
        <th><span>Sus Calificaciones</span></th>
        <th><span></span></th>
        <th><span></span></th>
      </tr>
    </thead>
    <tbody> 
      <?php foreach ($postulantes as $row) { ?>
      <?php   if ($row['estado'] != 'Rechazado' ) { ?>
        <tr style="color: salmon;">
          <td class="lalign">
            <?php echo $row['nombre']." ".$row['apellido']; ?>
          </td>
          <td>
            <?php
              $fecha1 = date('Y',strtotime($row['fechaNac']));
              $fecha2 = date('Y',strtotime(date('Y-m-d')));
              echo ($fecha2-$fecha1)." Años";
            ?>
          </td>
          <td>
            <?php
              if ($row['reputacionCopiloto'] > 50) {
                echo "Excelente!";
              } elseif ($row['reputacionCopiloto'] > 25) {
                echo "Muy Buena";
              } elseif ($row['reputacionCopiloto'] > 10) {
                echo "Buena";
              } elseif ($row['reputacionCopiloto'] > -10) {
                echo "Regular";
              } elseif ($row['reputacionCopiloto'] > -25) {
                echo "Mala";
              } elseif ($row['reputacionCopiloto'] > -50) {
                echo "Muy Mala";
              } else {
                echo "Pésima...";
              }
            ?>
          </td>
          <td>
            <?php echo $row['estado'] ?>
          </td>
          <td>
            <button onclick="window.location.href='<?php echo base_url().'cPuntaje/vista_puntajes_copiloto/'.$row['idUsuario'] ?>'" class="button button-pill button-flat-caution" style="font-size: 15px; padding: 1px 3px;">
              <i class="fa fa-star" style="font-size: 15px"></i>
              <font style="font-size:15px"> Calificaciones</font>
            </button>
            </td>
          <?php  if ($row['estado'] == 'Pendiente' ) { ?>
            <td>
              <a href="<?php echo base_url().'cPostulantes/aceptar_postulado'.'/'.$row['idUsuario'] ?>" class="button button-pill button-flat-caution" style="font-size: 15px; padding: 1px 3px;">
                <i class="fa fa-check-circle" style="font-size:15px" ></i>
              <font style="font-size:15px"> Aceptar</font>
              </a>
            </td>
          <td>
              <a href="<?php echo base_url().'cPostulantes/rechazar_postulado'.'/'.$row['idUsuario'] ?>" class="button button-pill button-flat-caution" style="font-size: 15px; padding: 1px 3px;">
                <i class="fa fa-times-circle" style="font-size:15px" ></i>
               <font style="font-size:15px"> Rechazar</font>
              </a>
            </td>
          <?php } elseif ($row['estado'] == 'Aceptado' ) { ?>
            <td>
              <a href="javascript:penalizacion('<?php echo $row['idUsuario'] ?>')" class="button button-pill button-flat-caution" style="font-size: 15px; padding: 1px 3px;">
                <i class="fa fa-times-circle" style="font-size:15px" ></i>
                <font style="font-size:15px"> Rechazar</font>
              </a>
            </td>
          <?php } ?>
        </tr>
      <?php   } ?>
      <?php } ?>
    </tbody>
  </table>
 <br><br><br><br><br><br><br><br><br><br>