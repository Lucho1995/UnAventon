<body>
	<section id="editar-mi-perfil" class="content-section text-center">
	<h4>Editar mi perfil</h4>
        <h6> <?php echo $nombre." ".$apellido; ?> </h6>
	<div class="container">
	<div class="col-lg-5 mx-auto">
	<div class="border">
	<form method="POST" action="<?php echo base_url(); ?>/cPerfil/modificar_usuario/<?php echo $idUsuario; ?>" onsubmit="return validar()">     
                <br> 
                <p><font color="salmon">Los campos con * son obligatorios.</font></p>
        	<label><font color="salmon">Nombre *</font></label></br> 
                <input type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>" class="form-group" ></br>
            <label><font color="salmon">Apellido *</font></label></br>
                <input type="text" name="apellido" id="apellido" value="<?php echo $apellido;  ?>" class="form-group" required></br>
            <label><font color="salmon">E-mail *</font></label></br>
                <input type="e-mail" name="email" id="email" value="<?php echo $email;  ?>" class="form-group" required></br>
            <label><font color="salmon">Clave *</font></label></br>
                <input type="password" name="clave" id="clave1" value="<?php echo $clave;  ?>" class="form-group" required></br>
            <label color="salmon"><font color="salmon">Repita su clave *</font></label></br>
                <input type="password" name="clave" id="clave2" value="<?php echo $clave;  ?>" class="form-group" required></br>
            <label color="salmon"><font color="salmon">Fecha de nacimiento* </font> </label></br>
                <input type="date" name="fechaNac" id="fechaNac" value="<?php echo $fechaNac;  ?>" class="form-group" required></br>
            <label color="salmon"><font color="salmon">DNI * </font></label></br>
                <input type="text" name="dni" id="dni" value="<?php echo $dni;  ?>" class="form-group" required></br>
            <label for="inputFoto" color="salmon"><font color="salmon">Foto de perfil</font> </label></br>
                <input type="file" name="foto" >
                <br>
                <br>
                <button type=submit class="btn btn-default">Confirmar</button>
                <br>
                <br>
	</form>
	</div>
	</div>
        <br>
        <br>
        <br>
        <a href="">Dar de baja la cuenta</a>
	</div>
</body>
<script>
    function validar(){
        clave1 = document.getElementById('clave1').value;
        clave2 = document.getElementById('clave2').value;
        doc = document.getElementById('dni').value;
        nacim=document.getElementById('fechaNac').value;
        if (document.getElementById('nombre').value.length==0) {
                alert("Tiene que escribir su nombre");
                return false;
        }
        if (document.getElementById('apellido').value.length==0) {
                alert("Tiene que escribir su apellido");
                return false;
        }
        if (document.getElementById('email').value.length==0) {
                alert("Tiene que escribir su email");
                return false
        }
        if (clave1!=clave2) {
                alert("Las contraseñas no coinciden");
                return false;
        }
        if (isNaN(doc)) {
                alert("El campo DNI solo admite caracteres numericos");
                return false;
        }
        return true;
    }
</script>