<!doctype html>
<html lang="en">
  <head>
    <title>Eco-Mex</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/nuestros_estilos.css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
   
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

.editbtn{
    width: auto;
    padding: 8px 13px;
    background-color: #4CAF50;
    color: white;
    
  }

  .elimtbtn{
    width: auto;
    padding: 8px 13px;
    background-color: red;
    color: white;
    
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

   .container {
    padding: 35px;
  }

  span.psw {
    float: right;
    padding-top: 16px;
  }

  /* The Modal (background) */
  .modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
 
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  
  }

/* Modal Content/Box */
  .modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
  }
  
/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
  @media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
 
  }


  .error{
    color: red;
  }

  .modal-backdrop{
 position: relative; 
}

  body {font-family: Arial, Helvetica, sans-serif;}
  form {border: 3px solid #f1f1f1;}
  
  h2{
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
  }
  
  input[type=text], input[type=password],  input[type=float]{
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
  
  .container {
    padding: 35px;
  }

  span.psw {
    float: right;
    padding-top: 16px;
  }

 
  </style>
 <script>

  $(document).ready(function(){
  $(login).click(function(){
    $(cont).toggle();
    });
  });

  </script>

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


<!--########################################################################################################################-->
<!--Edit modal -->
<div id="id02" class="modal">

  


  
  <form class="modal-content animate" action="update.php" method="post">
  <div class="imgcontainer">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  </div>

  <div class="container">
  <label ><b>Id:</b></label>
  <input type="text" id="id_publicador"  name="id_publicador" >
    <label for="uname"><b>Nombre</b></label>
    <input type="text" placeholder="Nombre" id="nombre" name="nombre" required>
    <label for="uname"><b>Apellido Paterno</b></label>
    <input type="text" placeholder="Apellido Paterno" id="apepat" name="apepat" required>
    <label for="uname"><b>Apellido Materno</b></label>
    <input type="text" placeholder="Apellido Materno" id="apemat" name="apemat" required>
    <label for="uname"><b>Sexo (Femenino/Masculino) </b></label>
    <input type="text" placeholder="Sexo" id="sexo" name="sexo" required>
    <label for="correo"><b>Correo electrónico</b></label>
    <input type="text" placeholder="Correo electrónico" id="correo" name="correo" required>
    <label for="psw"><b>Contraseña</b></label>
    <input type="text" placeholder="Contraseña" id="psw" name="psw" required>
    <label for="uname"><b>Rol (Ecología en casa/Proyectos) </b></label>
    <input type="text" placeholder="rol" id="rol" name="rol" required>
  <button type="submit" name="updatedata" class="aceptbtn">Aceptar</button>
  <button type="button" class="cancelbtn" onclick="window.location.href='publicadoresadmin.php'">Cancelar</button>

    </label>

  </div>
 </form>
  </div>

   <script>

   var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
     if (event.target == modal) {
    modal.style.display = "none";
  }
  }
  </script>


<!--########################################################################################################################-->

<!--########################################################################################################################-->
<!--Delete modal -->
<div id="id03" class="modal">
  
  <form class="modal-content animate" action="delete.php" method="post">
  <div class="imgcontainer">
  <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
  </div>

  <div class="container" style="position:relative;z-index:1000">
  <label ><b>Eliminar publicador</b></label> <br/>

  

  <input type="hidden" id="delete_id"  name="delete_id" >
  <h4>¿Desea eliminar el publicador seleccionado?</h4>
  <br>
  <button type="submit" class="aceptbtn">Aceptar</button>
    <button type="button" class="cancelbtn" onclick="window.location.href='publicadoresadmin.php'">Cancelar</button>

  </div>
 </form>
  </div>

   <script>

   var modal = document.getElementById('id03');

// When the user clicks anywhere outside of the modal, close it
    window.onclick = function(event) {
     if (event.target == modal) {
    modal.style.display = "none";
  }
  }
  </script>


<!--########################################################################################################################-->


<div style="padding:0 16px">
<br> <br> 
  <h3 align="center">Publicadores</h3>
  <br><br>

          <?php 
        $servidor="localhost";  
        $usuarioBD="root";
        $pwdBD="";
        $nomBD="ecomex";

        $db= mysqli_connect($servidor,$usuarioBD,$pwdBD,$nomBD);
        if(!$db){
            die("La conexión falló".mysqli_connect_error());
        }else{
            mysqli_query($db,"SET NAMES 'UTF8'");
        }
        ?>

<table class="table"  id="tabla">
    <thead>
      <tr>
          
        <th>Nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Correo</th>
        <th>Rol</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody> 
      <?php 
      $sql="SELECT * FROM publicadores";
      $result = mysqli_query($db, $sql);

      while($mostrar=mysqli_fetch_array($result)){
 
      ?>
      
        <tr class="table-success">
        <td style="display:none;"><?php echo $mostrar['id_publicador']?></td>
        <td><?php echo $mostrar['nombre']?>  </td>
        <td ><?php echo $mostrar['apepat']?></td>
        <td ><?php echo $mostrar['apemat']?></td>
        <td style="display:none;"><?php echo $mostrar['sexo']?></td>
        <td><?php echo $mostrar['correo']?></td>
        <td style="display:none;"><?php echo $mostrar['pass']?></td>
        <td><?php echo $mostrar['rol']?></td>
        <td><button type="button" class="editbtn">  Editar</button></td>
        <td> <button type="button" class="elimtbtn" >Eliminar</button> </td>

      </tr>

      <?php  } ?>
      
    </tbody>



    
    <?php $db->close(); ?>
  </table>

        <script>
          $(document).ready(function(){
            $('.elimtbtn').on('click',function(){
              $('#id03').modal('show');

              $tr = $(this).closest('tr');
              var data = $tr.children("td").map(function(){
                return $(this).text();
              }).get();
              console.log(data);
              $('#delete_id').val(data[0]);


            });
          });
        </script>
        

        <script>
          $(document).ready(function(){
            $('.editbtn').on('click',function(){
              $('#id02').modal('show');

              $tr = $(this).closest('tr');
              var data = $tr.children("td").map(function(){
                return $(this).text();
              }).get();
              console.log(data);
              $('#id_publicador').val(data[0]);
              $('#nombre').val(data[1]);
              $('#apepat').val(data[2]);
              $('#apemat').val(data[3]);
              $('#sexo').val(data[4]);
              $('#correo').val(data[5]);
              $('#psw').val(data[6]);
              $('#rol').val(data[7]);


            });
          });
        </script>
 
  
</div>

    <br>
    <br>
    <?php include 'templates/footer.php';?>
  </body>
</html>