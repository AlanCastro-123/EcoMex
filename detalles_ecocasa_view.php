<!doctype html>
<html lang="en">
  <head>
    <title>Eco-Mex</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/nuestros_estilos.css">
    <link rel="stylesheet" href="css/ecocasa_estilos.css">
    
  </head>
  <body>
    <?php 
    include 'templates/header.php';
    require_once 'dbConfig.php';
    ?>
    
    <?php 
        $id = $_GET["id"];
    ?>
    <div class="container-fluid" style="padding-left: 2em; padding-top:1em;">
        <div class="row">
            <?php 
                $query = mysqli_query($db, "SELECT titulo,detalle,nombre_autor,apellido_autor,fecha,img from publicaciones WHERE id = $id");
                $titulo; 
                $detalle; 
                $nombre;
                $apellido;
                $fecha;
                $img;    
                    while($fila = mysqli_fetch_array($query)){
                        $titulo = $fila['titulo']; 
                        $detalle = $fila['detalle']; ; 
                        $nombre = $fila['nombre_autor']; ;
                        $apellido = $fila['apellido_autor']; ;
                        $fecha = $fila['fecha']; ;
                        $img = $fila['img']; ; 
                    }
            ?>
            <div class="col-sm-12 col-md-2 col-lg-4">
                <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($img); ?>" alt="Imagen noticia" class="img-cuadrada">
            </div>
            <div class="col-sm-12 col-md-10 col-lg-8">
                <div class="row detalles">
                    <div class="col-md">
                        <div class="titulo-centrado">
                            <h1><?php echo $titulo; ?></h1>
                            <h4>por <?php echo $nombre." ".$apellido. " a " .$fecha ?></h4>
                        </div>
                        <hr>
                        <div class="texto-descripcion">
                            <?php echo $detalle ?>
                        </div>
                    </div>
                </div>
                <br>
                <form class="row g-2">
                    <div class="col-auto">
                        <input type="text" class="form-control" id="inputPassword2" placeholder="Comentario" size="90">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Comentar</button>
                    </div>
                    </form>
            </div>
        </div>
    </div>
    <br>
    <?php include 'templates/footer.php';?>
  </body>
</html>