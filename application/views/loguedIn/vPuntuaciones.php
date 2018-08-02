<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<ol id="lista4" class="col-sm-7" style="margin-left: 100px">
	<?php if (sizeof($calificaciones) != 0) { ?>
		<h5 align="center" style="font-style: italic;"><font color="salmon" size="6"><b>Calificaciones Como Copiloto</b></font></h5>
		<br><br>
		<?php foreach ($calificaciones as $calificacion) { ?>
    	<li>
    		<div class="col-sm-6" style="float: left; margin-right: 30px;">
    	     	<font color="salmon" size="2"> Calificado por: <br>&nbsp;&nbsp;&nbsp;&nbsp;• </font>
    	      	<font size="2"><?php echo $calificacion['nombre'].' '.$calificacion['apellido']; ?></font>
    	    </div>
    	    <div>
    	      	<font color="salmon" size="2"> Calificación: <br>&nbsp;&nbsp;&nbsp;&nbsp;• </font>
    	      	<font size="2"><?php echo $calificacion['calificacion']; ?></font>
    	    </div>
    	    <br>
    	    <div>
    	      	<font color="salmon" size="2">
    	        	&nbsp;&nbsp;&nbsp;&nbsp;Comentario: <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-
    	      	</font>
    	      	<font size="2"><?php echo $calificacion['comentarioPiloto']; ?></font>
    	    </div>
    	    <br>
    	    <div>
    	     	&nbsp;&nbsp;
    	      	<font style="font-style: italic; font-size: 11px" color="salmon" size="2"> Calificado el 
    	        <?php echo date("d-m-Y", strtotime($calificacion['fecha'])); ?></font>
    	    </div>
    	<?php } ?>
    <?php } else { ?>
    	<div><h5 style="margin-left: 350px"><font color="salmon">Usuario sin calificaciones</font></h5></div>
    <?php } ?>
    </li>
</ol>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>