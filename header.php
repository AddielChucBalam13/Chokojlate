<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>PHP CRUD MYSQl</title>
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <!-- BOOTSTRAP 4 -->
  <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
  <!-- FONT AWESOEM -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
    integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<body>


  <nav class="navbar navbar-light" style="background-color: #774c1a">
    <div class="container">

      <li class="nav-item dropdown" >
        <a class="navbar-brand" href="#" id="navbarDropdown"role="button" data-toggle="dropdown" aria-haspopup="true" >
       </i> PRODUCTOS</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item"  style="background-color: #774c1a" href="../productos/index.php"><i class="fas fa-marker"></i>MODIFICAR PRODUCTOS</a>
          <a class="dropdown-item" href="../categoria/index.php">Categorias</a>
          <a class="dropdown-item" href="../ventas_detalle/index.php">Detalle Venta</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <a class="navbar-brand" href="../usuarios/index.php">Usuarios</a>
      <li class="nav-item dropdown">
        <a class="navbar-brand" href="#" role="button" data-toggle="dropdown" aria-haspopup="true">
          PROCEDIMIENTOS</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../procedimientos/procetres.php">Buscar reservas por fecha</a>
          <a class="dropdown-item" href="../procedimientos/index.php">Buscar reservas por nombre</a>
          <a class="dropdown-item" href="../procedimientos/proceuno.php">Buscar productos por categoria</a>
          <a class="dropdown-item" href="../procedimientos/procedos.php">Buscar compras de cliente</a>
          <a class="dropdown-item" href="../procedimientos/ventas_xfecha.php">Buscar ventas por fecha</a>
          <a class="dropdown-item" href="../ventas/index.php">ventas</a>
          <div class="dropdown-divider"></div>

        </div>
      </li>
    
      <li class="nav-item dropdown">
        <a class="navbar-brand" href="#" role="button" data-toggle="dropdown" aria-haspopup="true">
          VISTAS</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="../vistas/productos_nunca.php">Productos nunca vendidos</a>
          <a class="dropdown-item" href="../vistas/reservas_hoy.php">Reservas Hoy</a>
          <a class="dropdown-item" href="../vistas/productos_vendidos.php">Historial productos vendidos</a>
          <a class="dropdown-item" href="../vistas/productos_hoy.php">Productos hoy</a>
          <a class="dropdown-item" href="../vistas/productos_sinstock.php">Productos sin stock  </a>
         
          <div class="dropdown-divider"></div>

        </div>
      </li>

      <i class="fas fa-bars" id="btn_open"></i>
      <div class="menu__side" id="menu_side">


      </div>
  </nav>