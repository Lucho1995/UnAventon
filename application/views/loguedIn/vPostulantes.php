<br><br><br>
<body>
 <div id="wrapper" style="background-color: black; margin-left: 135px">
  <h1><font color="salmon" size="6">Lista de copilotos postulados</font></h1>
  
  <table id="keywords" style="background-color: black">
    <thead>
      <tr style="background-color: salmon; color: black;">
        <th><span>Nombre</span></th>
        <th><span>Edad</span></th>
        <th><span>Reputación(copiloto)</span></th>
        <th><span>Estado</span></th>
        <th><span><font color="salmon">Aceptar</font></span></th>
        <th><span><font color="salmon">Rechazar</font></span></th>
      </tr>
    </thead>
    <tbody> 
      <?php foreach ($postulantes as $row) { ?>
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
          <?php if ($row['usuarioId'] == $this->session->Userdata('idUsuario') )  { ?>

          <?php   if ($row['estado'] == 'Pendiente' ) { ?>
            <td>
              <a href="#" class="button button-pill button-flat-caution" style="font-size: 15px; padding: 1px 3px;">
                <i class="fa fa-check-circle" style="font-size:15px" ></i>
                <font style="font-size:15px"> Aceptar</font>
              </a>
            </td>
            <td>
              <a href="<?php echo base_url().'cPostulantes/rechazar_postulado'.'/'.$row['usuarioId'] ?>" class="button button-pill button-flat-caution" style="font-size: 15px; padding: 1px 3px;">
                <i class="fa fa-times-circle" style="font-size:15px" ></i>
               <font style="font-size:15px"> Rechazar</font>
              </a>
            </td>
          <?php } elseif ($row['estado'] == 'Aceptado' ) { ?>
            <td>
              <a href="<?php echo base_url().'cPostulantes/rechazar_postulado'.'/'.$row['usuarioId']?>" class="button button-pill button-flat-caution" style="font-size: 15px; padding: 1px 3px;">
                <i class="fa fa-times-circle" style="font-size:15px" ></i>
                <font style="font-size:15px"> Rechazar</font>
              </a>
            </td>
          <?php   } ?>
          <?php } ?>
        </tr>
      <?php } ?>
    </tbody>
  </table>
 </div>
 <br><br><br><br><br><br><br><br><br><br>