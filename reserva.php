<?php
include_once 'CrudReserva.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" type="text/css" href="style.css" >
  <title>Reserva</title>
</head>
<body>
<div class="form-body">
  <img src="caferes.jpg" alt="user-login">
  <p class="text">Realiza Tu Reserva</p>
  <form action="CrudReserva.php" method="post" class="login-form">
  	 <input type="text" name="nombre_cliente" placeholder="Ingrese su nombre">
  	  <input type="text" name="telefono" placeholder="Ingrese su telefono">
    <input type="date" name="fecha" placeholder="Ingresa La fecha de rerserva">
    <input type="text" name="evento" placeholder="Ingresa el tipo de evento">
    <?php
        if (isset($_GET['editar'])) {
        ?>
        <div class="col-12">
           <td> <button type="submit" class="btn btn-primary" name="actualizar">Actualizar</button></td>
          </div>
         <?php
        }else {
        ?>
    <button type="submit" name="guardar">Reservar</button>
            <?php
        }
        ?>
  </form>



</div>
</body>
</html>