   <!-- Registrarse Section -->
    <section id="about" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Registrarse</h2>
            <p>Los campos con * son obligatorios.</p>
            <form action="<?php echo base_url();?>cMostrar/registrarse" method="POST">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputNombre">Nombre *</label>
                  <input type="text" class="form-control" name="nombre" placeholder="Nombre">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputApellido">Apellido *</label>
                  <input type="text" class="form-control" name="apellido" placeholder="Apellido">
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Email *</label>
                  <input type="email" class="form-control" name="email" placeholder="E-mail">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputFoto">Foto de perfil</label>
                    <input type="file" class="form-control-file" name="foto">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputFecha">Fecha de nacimiento *</label>
                  <input type="date" class="form-control" name="fechaNac" placeholder="fecha">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputDNI">DNI *</label>
                  <input type="text" class="form-control" name="dni" placeholder="DNI">
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputClave">Contraseña *</label>
                  <input type="password" class="form-control" name="clave" placeholder="Contraseña">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputClave">Repita su contraseña *</label>
                  <input type="password" class="form-control" name="clave" placeholder="Repita su contraseña">
                </div>
              </div>
              
              <button type="submit" class="btn btn-default">Confirmar</button>

            </form>
            <div>
              <p>¿Ya estás registrado?  <a href="#iniciar"> Iniciá sesión.</a> </p>
            </div>

          </div>
        </div>
      </div>
    </section>
