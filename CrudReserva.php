<?php

include_once '../../Usuario/DB.php';

/* Codigo para Insertar Datos */
if (isset($_POST['guardar'])) {

  echo "Guardandoooooooooooooooooooo";
  $nombre_cliente = $MySQLiconn->real_escape_string($_POST['nombre_cliente']);
  $telefono = $MySQLiconn->real_escape_string($_POST['telefono']);
  $fecha = $MySQLiconn->real_escape_string($_POST['fecha']);
  $evento = $MySQLiconn->real_escape_string($_POST['evento']);
 
  
  $SQL = $MySQLiconn->query("INSERT INTO reserva(id_reserva, nombre_cliente, telefono, fecha, evento) VALUES ('0', '$nombre_cliente','$telefono', '$fecha','$evento')");
  
  if (!$SQL) {
    echo $MySQLiconn->error;
  }
header("location:reserva.php");
}
  ?>