  <script>
    function clickAlert($mensaje){
      alert($mensaje);
    }
  </script>
   <!-- Registrarse Section -->
    <section id="about" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Registrarse</h2>
            <p>Los campos con * son obligatorios.</p>
            <div class="error">
              <?php echo validation_errors(); ?>
            </div>
            <?php echo form_open('cMostrar/registrarse'); ?>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputNombre">Nombre *</label>
                  <input type="text" class="form-control" name="nombre" value="<?php echo set_value('nombre'); ?>" placeholder="Nombre" >
                </div>
                <div class="form-group col-md-6">
                  <label for="inputApellido">Apellido *</label>
                  <input type="text" class="form-control" name="apellido" value="<?php echo set_value('apellido'); ?>" placeholder="Apellido" >
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputEmail4">Email *</label>
                  <input type="email" class="form-control" name="email" value="<?php echo set_value('email'); ?>" placeholder="E-mail" >
                </div>
                <div class="form-group col-md-6">
                  <label for="inputFoto">Foto de perfil</label>
                    <input type="file" class="form-control-file" name="foto" >
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputFecha">Fecha de nacimiento *</label>
                  <input type="date" class="form-control" name="fechaNac" placeholder="fecha" >
                </div>
                <div class="form-group col-md-6">
                  <label for="inputDNI">DNI *</label>
                  <input type="text" class="form-control" name="dni" value="<?php echo set_value('dni'); ?>" placeholder="DNI" >
                </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="inputClave">Contraseña *</label>
                  <input type="password" class="form-control" name="clave" placeholder="Contraseña">
                </div>
                <div class="form-group col-md-6">
                  <label for="inputClave">Repita su contraseña *</label>
                  <input type="password" class="form-control" name="clave_2" placeholder="Repita su contraseña">
                </div>
              </div>
              
              <button type="submit" class="btn btn-default" >Confirmar</button>

            </form>
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
        <div class="col-lg-8 mx-auto">
          <h2>Iniciar sesión</h2>
          <form>
            <div>
              <label for="inputEmail">Ingresá tu E-mail</label></br>
              <input type="email" id="email" placeholder="E-mail" class="form-group"></br>
            </div>
            <div>
              <label for="inputClave">Ingresá tu contraseña</label></br>
              <input type="password" id="clave" placeholder="Contraseña" class="form-group"></br>
            </div>
            <div>
              <button type="submit" class="btn btn-default">Confirmar</button>
            </div>
          </form>
          <a href="">¿Olvidaste tu contraseña?</a>
        </div>
      </div>
    </div>
    </section>


    <!-- Contact Section -->
    <section id="contact" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Contactanos</h2>
            <p>Feel free to leave us a comment on the
              <a href="http://startbootstrap.com/template-overviews/grayscale/">Grayscale template overview page</a>
              on Start Bootstrap to give some feedback about this theme!</p>
            <ul class="list-inline banner-social-buttons">
              <li class="list-inline-item">
                <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg">
                  <i class="fa fa-twitter fa-fw"></i>
                  <span class="network-name">Twitter</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/BlackrockDigital/startbootstrap" class="btn btn-default btn-lg">
                  <i class="fa fa-github fa-fw"></i>
                  <span class="network-name">Github</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg">
                  <i class="fa fa-google-plus fa-fw"></i>
                  <span class="network-name">Google+</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>