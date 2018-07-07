  
   <!-- Registrarse Section -->
    <section id="about" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Registrarse</h2><br>
            <p style="font-style: italic;">Los campos con * son obligatorios.</p><br>
            <div class="error">
              <?php echo validation_errors(); ?>
            </div>
            <form action="cRegistro" method="POST">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputNombre">Nombre *</label>
                  <input type="text" class="form-control" name="nombre" value="<?php echo set_value('nombre'); ?>" placeholder="Nombre" required></br>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputApellido">Apellido *</label>
                  <input type="text" class="form-control" name="apellido" value="<?php echo set_value('apellido'); ?>" placeholder="Apellido" required></br>
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Email *</label>
                  <input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>" placeholder="E-mail" required></br>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputFoto">Foto de perfil
                    <input style="margin-top: 6px" type="file" class="form-control-file" name="foto" >
                  </label>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputFecha">Fecha de nacimiento *</label>
                  <input type="date" class="form-control" name="fechaNac" placeholder="fecha" required></br>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputDNI">DNI *</label>
                  <input type="text" class="form-control" name="dni" value="<?php echo set_value('dni'); ?>" placeholder="DNI" required></br>
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputClave">Contraseña *</label>
                  <input type="password" class="form-control" name="clave" placeholder="Contraseña" required></br>
                </div>
                <div class="form-group col-md-6">
                  <label for="inputClave">Repita su contraseña *</label>
                  <input type="password" class="form-control" name="clave_2" placeholder="Repita su contraseña" required ></br>
                </div>
              </div>
              <button type="submit" class="btn btn-default">Confirmar</button>
            </form>
            <br>
            <div>
              <p>¿Ya estás registrado?  <a href="#iniciar"> Iniciá sesión.</a> </p>
            </div>

          </div>
        </div>
      </div>
    </section>


    <!-- una foto pa cortar 1 poco -->
   <section id="download" class="download-section content-section text-center">
      <div class="container">
        <div class="col-lg-8 mx-auto">

        </div>
      </div>
    </section> 

   <!--Iniciar sesion Section -->
    <section id="iniciar" class="content-section text-center">
      <div class="container">
      <div class="row">
        <div class="col-lg-4 mx-auto">
          <h2>Iniciar sesión</h2><br>
          <form action="<?php echo base_url(); ?>cLogin" method="POST">
            <div>
              <label for="inputEmail">Ingresá tu E-mail</label></br>
              <input type="email" id="email" placeholder="E-mail" class="form-control" name="email" required></br>
            </div>
            <div>
              <label style="margin-left: 35px" for="inputClave">Ingresá tu contraseña
                <a style="margin-left: 25px" href="javascript:jodete()">¿La olvidaste?</a>
              </label></br>
              <input type="password" id="clave" placeholder="Contraseña" class="form-control" name="clave" required></br>
            </div>
            <div>
              <label>
                <input type="checkbox" name="mantener-sesion" > Mantener la sesion iniciada
                <br>(De lo contrario, la sesión se cerrará después de 10 minutos)
              </label>
            </div>
            <br>
            <div>
              <label class="checkbox">
                <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Recordarme
              </label>
            </div>
            <br>
            <div>
              <button type="submit" class="btn btn-default">Confirmar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    </section>

    <div class="col-lg-8 mx-auto">
      <hr color="salmon">
    </div>

    <!-- Contact Section -->
    <section id="contact" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2 style="font-style: italic;">¡Sientase bien al dar o recibir un aventón!</h2><br>
            <p>Con el sistema de viajes
            <a href="#iniciar" style="font-style: italic;">Un Aventón</a>, usted puede sentir el placer de dar un aventón, o incluso que le hagan uno. Este sistema cuenta con una mecánica fiable y fácil de entender de calificaciones, además de comentarios adicionales para que usted se sienta seguro/a de formar parte de nuestra comunidad que crece a pasos agigantados. El registro es gratis. ¡No te lo pierdas!</p>
            <br>
            <br>
            <img style="margin-top: 100px" src="<?php base_url(); ?>img/logo2.png" alt="Logo" height="150" width="150" align="center">
          </div>
        </div>
      </div>
    </section>