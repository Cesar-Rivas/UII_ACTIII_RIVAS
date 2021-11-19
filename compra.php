<?php 

include("con_db.php");

if (isset($_POST['register'])) {
    if (strlen($_POST['compañia']) >= 1 && strlen($_POST['año']) >= 1) {
	    $compañia = trim($_POST['compañia']);
	    $año = trim($_POST['año']);
	    $modelo = trim($_POST['modelo']);
	    $color = trim($_POST['color']);
	    $estado = trim($_POST['estado']);
	    $consulta = "INSERT INTO compra(compañia, año, modelo, color, estado) VALUES ('$compañia','$año','$modelo','$color','$estado')";
	    $resultado = mysqli_query($conex,$consulta);
	    if ($resultado) {
	    	?> 
	    	<h3 class="ok">¡Compra exitosa!</h3>
           <?php
	    } else {
	    	?> 
	    	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
           <?php
	    }
    }   else {
	    	?> 
	    	<h3 class="bad">¡Por favor complete los campos!</h3>
           <?php
    }
}

?>