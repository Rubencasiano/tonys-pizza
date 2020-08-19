<?php
//CONEXION A LA BASE DE DATOS

$hostname_db = "localhost";
$database_db = "mensajes";
$username_db = "root";
$password_db = "root";

//Conectar a la base de datos
$conexion = mysqli_connect($hostname_db, $username_db, $password_db)
or die ("No pudo realizar conexién");

//Seleccionar la base de datos donde guardara la informacién

mysqli_select_db($conexion, $database_db)
or die ("Ninguna DB seleccionada");

?>