     <section id=vVerViajes class="content-section text-center">
        <h2>Viajes </h2>
            <div class="col-form-label-sm">
            <table class="table users table-hover">
              <thead>
                <tr>
                  <th scope="col">origen</th>
                  <th scope="col">destino</th>
                  <th scope="col">fecha</th>
                  <th scope="col">hora</th>
                  <th scope="col">asientosDisp</th>
                  <th scope="col">Costo</th>
                  <th scope="col">Periodico</th>
                  <th scope="col">vehiculo</th>
                  <th scope="col">usuario</th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
              </tbody>
                <?php  foreach ($viajes as $row) {  ?>
                <tr>
                  <td> <?php echo $row->origen ?> </td>
                  <td> <?php echo $row->destino ?> </td>
                  <td> <?php echo $row->fecha ?> </td>
                  <td> <?php echo $row->hora ?> </td>
                  <td> <?php echo $row->asientosDisp ?> </td>
                  <td> <?php echo $row->Costo ?> </td>
                  <td> <?php echo $row->Periodico ?> </td>
                  <td> <?php echo $row->vehiculoId ?> </td>
<<<<<<< HEAD
                  <td> <?php echo $row->usuarioId ?> </td>
=======
                  <td>  <?php echo $row->usuarioId ?> </td>
>>>>>>> c6fead1cbb9425f3be76201eeb1c4ade91fa5db0
                </tr>
              <?php }   ?>
              </tbody>
            </table>
          </div>
        </section>
<<<<<<< HEAD
=======
        
>>>>>>> c6fead1cbb9425f3be76201eeb1c4ade91fa5db0


