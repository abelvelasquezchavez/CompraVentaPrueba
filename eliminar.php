<?php
include 'conexion.php';
$idpersona = $_GET['idpersona'];
$sql = "delete from persona where idpersona='".$idpersona."'"; 
mysqli_query($con,$sql);
header('location:contacto.php');

?>