<?php

include_once '../Usuario/DB.php';

/* Codigo para Insertar Datos */
if (isset($_POST['registro'])) {

  echo "Guardandoooooooooooooooooooo";
  $nombre = $MySQLiconn->real_escape_string($_POST['nombre']);
  $apellido = $MySQLiconn->real_escape_string($_POST['apellido']);
  $telefono = $MySQLiconn->real_escape_string($_POST['telefono']);
  $correo = $MySQLiconn->real_escape_string($_POST['correo']);
  $domicilio = $MySQLiconn->real_escape_string($_POST['domicilio']);
  $password = $MySQLiconn->real_escape_string($_POST['password']);
 
  $SQL = $MySQLiconn->query("INSERT INTO usuario(id_usuario, nombre, apellido, telefono, correo, domicilio, password, id_rol) VALUES ('0','$nombre','$apellido', '$telefono', '$correo', '$domicilio', '$password', '2')");
  if (!$SQL) {
    echo $MySQLiconn->error;
  }
}
 ?>