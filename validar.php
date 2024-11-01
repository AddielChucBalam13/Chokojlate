<?php

$nombre=$_POST['nombre'];
$password=$_POST['password'];
session_start();
$_SESSION['nombre']= $nombre;

 include('../Usuario/DB.php');

 $consulta = "SELECT*FROM usuario where nombre='$nombre' and password='$password'";
 $resultado=mysqli_query($MySQLiconn,$consulta);


 $filas=mysqli_fetch_array($resultado);
 if($filas['id_rol']== 1){ 
header("location:../Administrador/index.php");
 }else
 	if ($filas['id_rol']== 2){

 		header("location:index.php");
 	}
 
 else{
 	?>
 	<?php
 	include("RegistroUsuario.php");
 	?>
 	<h1>Error:(</h1>
 		<?php
 }
 mysqli_free_result($resultado);
 mysqli_close($MySQLiconn);
 ?>