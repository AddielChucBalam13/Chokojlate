<!DOCTYPE html>

<html>

<head>
  <meta charset="UTF-8">
  <title>REGISTRO</title>
  <link rel="stylesheet" href="css/login.css">
  <link rel="stylesheet" href="css/font-awesome.css">

    <style>
      input::-webkit-input-placeholder {
          color:rgb(255, 254, 254);
      
      }
  </style>
</head>
</div>
<!---->
<!-- librerias ----------------------------------------------------------->
<!--imagenes -->
<link rel="shortcut icon" href="assets/img/L.jpg" type="image/x-icon">


<link href="assets/css/font-awesome.css" rel="stylesheet">

<link href="assets/css/bootstrap.css" rel="stylesheet">   

<link rel="stylesheet" type="text/css" href="assets/css/slick.css">    

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css">   

<link href="assets/css/magnific-popup.css" rel="stylesheet"> 

<link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">     


<link href="style.css" rel="stylesheet">    



<link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>

<link href='https://fonts.googleapis.com/css?family=Tangerine' rel='stylesheet' type='text/css'>   

<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>


<!-- finlib ------------------------------------------------------------------------>

</head>
<body>


<a class="scrollToTop" href="#">
  <i class="fa fa-angle-up"></i>
</a>


<header id="mu-header">  
<nav class="navbar navbar-default mu-main-navbar" role="navigation">  
  <div class="container">
    <div class="navbar-header">

  
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
   
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <!-- LOGO -->       

       <!--  TextO logo  -->
      <a class="navbar-brand" href="index.php">Chokojlate<span></span></span></a> 

       
     <!--BARRA DE OPCIONES -->

    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
        <li><a href="index.php">INICIO</a></li>
        
     <!--REGISTRO INDEX-->
       <LI>  <a href="RegistroUsuario.php">REGISTRO </a></LI>
        <P></P>
      </ul>                            
    </div>      
  </div>          
</nav> 
</header>
<!-- FIN -->
<!--FINAL-->
<body>
    <form action="validar.php" method="post">
        <div id="login-box">
            <h1>INICIO DE SESION</h1>
            <div class="form">
                <div class="item">
                    <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <input type="text" placeholder="NOMBRE" name="nombre">
                </div>

                <div class="item">
                    <i class="fa fa-key" aria-hidden="true"></i>
                    <input type="text" placeholder="CONTRASEÑA" name="password">
                </div>
            </div>
            <button type="submit" >INICIO</button>
        </div>
    </form>
</body>

<footer>
    <div id="message-box">BIENVENIDO</div>
</footer>

</html>