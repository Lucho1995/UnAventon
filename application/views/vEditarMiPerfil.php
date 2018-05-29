<body>
	<section id="editar-mi-perfil" class="content-section text-center">
	<h4>Editar mi perfil</h4>
        <h6> <?php echo $perfil[0]['nombre']." ".$perfil[0]['apellido']; ?> </h6>
	<div class="container">
	<div class="col-lg-5 mx-auto">
	<div class="border">
        <?php $idUsuario=$perfil[0]['idUsuario']; ?>
	<form method="POST" action="<?php echo base_url(); ?>cPerfil/modificar_usuario/<?php echo $idUsuario; ?>">     
                <br> 
                <p>Los campos con * son obligatorios.</p>
        	    <label>Nombre *</label></br> 
                <input type="text" name="nombre" id="nombre" value="<?php echo $perfil[0]['nombre'];  ?>" class="form-group" ></br>
                <label>Apellido * </label></br>
                <input type="text" name="apellido" id="apellido" value="<?php echo $perfil[0]['apellido'];  ?>" class="form-group" required></br>
                <label>E-mail *</label></br>
                <input type="e-mail" name="email" id="email" value="<?php echo $perfil[0]['email'];  ?>" class="form-group" required></br>
                <label>Clave *</label></br>
                <input type="password" name="clave" id="clave1" value="<?php echo $perfil[0]['clave'];  ?>" class="form-group" required></br>
                <label>Repita su clave *</label></br>
                <input type="password" name="clave" id="clave2" value="<?php echo $perfil[0]['clave'];  ?>" class="form-group" required></br>
                <label>Fecha de nacimiento </label></br>
                <input type="date" name="fechaNac" id="fechaNac" value="<?php echo $perfil[0]['fechaNac'];  ?>" class="form-group" required></br>
                <label>DNI </label></br>
                <input type="text" name="dni" id="dni" value="<?php echo $perfil[0]['dni'];  ?>" class="form-group" required></br>
                <label for="inputFoto">Foto de perfil </label></br>
                <input type="file" name="foto" >
                <br>
                <br>
                <button type=submit class="btn btn-default" onclick="validar()">Confirmar</button>
                <br>
                <br>
	</form>
	</div>
	</div>
        <br>
        <br>
        <br>
        <a href="">Dar de baja la cuenta</a> 
        <?php 
            $fecha = time() - strtotime($perfil[0]['fechaNac']);
            $edad = floor($fecha / 31556926); 
            echo "hola"; 
            echo '<h1>'.$edad.'</h1>';
        ?>
	</div>
</body>
<script type="text/javascript">
    function validar(){
        alert("sdjasdjl");
    }
</script>