<!DOCTYPE html>

<html>
<head>
</head>
<body>
<?php
include ("conexion.php");
$id = $_GET['id'];
$sql = "DELETE FROM informacion WHERE id='$id'";
$consulta = mysqli_query($conexion, $sql);
if($consulta!=null){
print "<script>alert(\"Eliminado exitosamente.\");window.location="'ver.php';</script>";
}
else{
print “"<script>alert(\"No se pudo eliminar.\");window.location="ver.php';</script>";
}
>