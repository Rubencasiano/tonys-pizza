<?php
	//conectamos Con el servidor
	$conectar=@mysql_connect('localhost','root','');
	//verificamos la conexion
	if(!$conectar){
		echo"No Se Pudo Conectar Con El Servidor";
	}else{

		$base=mysql_select_db('prueba');
		if(!$base){
			echo"No Se Encontro La Base De Datos";			
		}
	}
	//recuperar las variables
	$nombre=$_POST['nombre'];
	$correo=$_POST['correo'];
	$mensaje=$_POST['mensaje'];
	//hacemos la sentencia de sql
	$sql="INSERT INTO datos VALUES('$nombre',
								   '$correo',
								   '$mensaje')";
	//ejecutamos la sentencia de sql
	$ejecutar=mysql_query($sql);
	//verificamos la ejecucion
	if(!$ejecutar){
		echo"Hubo Algun Error";
	}else{
		echo"Datos Guardados Correctamente<br><a href='index.html'>Volver</a>";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="utf-8">
 <titte></title>

 <link rel="stylesheet" type="text/css" href="css.css">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimum-scale=1.0">
 <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,900&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
</head> 
<style> 
	body{ background-image: url(pizza2.jpg);
	}
</style>
<body> 
	<div> 
		
			<div class="dos_columnas"> 
				<a href="index.html"> 
			<img src="logo_tonis (1).png" alt="Logotipe Agencia" id="logo">
		</a>
</div> 
<header>
<div class="dos_columnas">
	<nav class="navegacion"> 
		<a href="index.html">Inicio</a> 
		<a href="acercadenosotros.html">acerca de nosotros</a> 
		<a href="presentación..html">promociones</a>
		<a href="producto.html">productos</a> 
		<a href="contacto.php">contacto</a>
</nav>
</div> 
</header>
<section class="site-header inicio">

<div class="form">
			<form action="guardar.php" method="POST">
				<p>Nombre</p>
				<label for="nombre">Su nombre</label>
				<br>
				<input type="text" name="nombre" placeholder="Nombre" required>
				<p>Correo</p>
				<label for="correo">Direccion De Correo</label>
				<br>
				<input type="email" name="correo" placeholder="alguien@algo.com" required>
				<p>Mensaje</p>
				<label for="mensaje">Su Mensaje</label>
				<br>
				<textarea name="mensaje" placeholder="Mensaje" required></textarea>
				<br>
				<br>
				<input type="submit" value="Enviar">
			</form>
		</div>
<footer class="site-footer">

 

</footer>
</div> 
</body> 
</html>