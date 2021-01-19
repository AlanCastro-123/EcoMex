<!doctype html>
<html lang="en">
  <head>
    <title>Eco-Mex</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/nuestros_estilos.css">
    
  </head>
  <style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.navbaro {
  overflow: hidden;
  background-color: #333; 
}

.navbaro a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: lightgreen;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: lightgreen;
  width: 100%;
  z-index: 1;
}

.subnav-content a {
  float: left;
  color: white;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: #eee;
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}
</style>
  <body>
  <nav class="navbar sticky-top navbar-expand-md navbar-light fondo-verde">
    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
      <span class="navbar-text">
        <img src="img/logo.png" alt="LOGO" height="50px" width="50px">
      </span>
    </div>
    <div class="mx-auto order-0">
        <div class="jumbotron-fluid navbar-brand mx-auto">
          <h1 class="text-center">ECO-MEX</h1>
          
        </div>
    </div>
   
    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#colapsa">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="colapsa">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a href="biadmin.php" class="nav-link text-white">Inicio</a>
                </li>
                <li class="nav-item">
                  <a href="proyectadmin.php" class="nav-link text-white">Proyectos</a>
                </li>
                <li class="nav-item">
                  <a href="ecoadmin.php" class="nav-link text-white">Eco-casa</a>
                </li>
                <li class="nav-item">
                  <a href="index.php" class="nav-link text-white">Cerrar sesión</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="navbaro">
  <a href="#home">Bienvenido</a>
  <div class="subnav">
    <button class="subnavbtn" onclick="window.location.href='agregar.php'">Agregar Publicador <i class="fa fa-caret-down"></i></button>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">Publicadores <i class="fa fa-caret-down"></i></button>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">Publicaciónes<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#link1">Ecologia en Casa</a>
      <a href="#link2">Proyectos</a>
      
    </div>
  </div>
  <a href="#contact">Equipo</a>
</div>

<div style="padding:0 16px">
  
  <h3 align="center">Bienvenido Administrador</h3>
  <center>
  <img src="img/logo.png" align="center" alt="LOGO" height="250px" width="250px">
</center>
  
</div>

    <br>
    <br>
    <?php include 'templates/footer.php';?>
  </body>
</html>