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
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
.aceptbtn{
  width: auto;
  padding: 10px 18px;
  background-color: #4CAF50;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}



span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
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
  <a href="biadmin.php">Bienvenido</a>
  <div class="subnav">
    <button class="subnavbtn" onclick="window.location.href='agregar.php'">Agregar Publicador <i class="fa fa-caret-down"></i></button>
  </div> 
  <div class="subnav">
    <button class="subnavbtn"  onclick="window.location.href='publicadoresadmin.php'">Publicadores <i class="fa fa-caret-down"></i></button>
  </div> 
  <div class="subnav">
    <button class="subnavbtn" >Publicaciónes<i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="ecoadmin.php">Ecologia en Casa</a>
      <a href="proyectadmin.php">Proyectos</a>
      
    </div>
  </div>
  <a href="equipo.php">Equipo</a>
</div>


<div style="padding:0 16px">
  
  <h3 align="center">Agregar Publicador</h3>

  <form action="insert.php" method="post">

  <div class="container">
    <label for="uname"><b>Nombre</b></label>
    <input type="text" placeholder="Nombre" id="nombre" name="nombre" required>
    <label for="uname"><b>Apellido Paterno</b></label>
    <input type="text" placeholder="Apellido Paterno" id="apepat" name="apepat" required>
    <label for="uname"><b>Apellido Materno</b></label>
    <input type="text" placeholder="Apellido Materno" id="apemat" name="apemat" required>
    <label for="uname"><b>Sexo</b></label>
    <p>
    <label>
    <input type="radio" id="Femenino" onclick="uncheck()"  name="sexo" value="Femenino">Femenino &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" id="Masculino" onclick="uncheck()"  name="sexo" value="Masculino"> Masculino<br>

    </label>
	  <p>
    <label for="correo"><b>Correo electrónico</b></label>
    <input type="text" placeholder="Correo electrónico" name="correo" required>
    <label for="psw"><b>Contraseña</b></label>
    <input type="text" placeholder="Contraseña" name="psw" required>
    <label for="rol"><b>Rol</b></label>
    <p>
    <label>
    <input type="radio" id="Eco" onclick="uncheck()" name="rol" value="Ecología en casa">Ecología en casa &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" id="Pro" onclick="uncheck()" name="rol" value="Proyectos" > Proyectos<br>
    </label>

  </div>

  <div class="container" style="background-color:#f1f1f1">
     <button type="submit" class="aceptbtn">Agregar</button>
    <button type="button" class="cancelbtn" onclick="window.location.href='inadmin.php'">Cancelar</button>
  
  </div>
</form>

  
</div>

    
    <?php include 'templates/footer.php';?>
  </body>
</html>