<!DOCTYPE html>
<html>
<head>
	<title>Compra de autos</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body>
    <form method="post">
    	<h1>Compra</h1>
    	<input type="text" name="compañia" placeholder="Compañía">
    	<input type="number" name="año" placeholder="Año de auto">
    	<input type="text" name="modelo" placeholder="Modelo">
    	<input type="text" name="color" placeholder="Color">
    	<input type="text" name="estado" placeholder="Estado">
    	<input type="submit" name="register">
    </form>
        <?php 
        include("compra.php");
        ?>
</body>
</html>
