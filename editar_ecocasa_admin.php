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
    include_once 'dbConfig.php';
    $id = $_GET['id'];
    $query = mysqli_query($db, "SELECT titulo,detalle,fecha,img from publicaciones WHERE id = $id");
    $titulo; 
    $detalle;
    $img;    
        while($fila = mysqli_fetch_array($query)){
            $titulo = $fila['titulo']; 
            $detalle = $fila['detalle']; ; 
            $img = $fila['img']; ; 
        }
    ?>
    <div class="container-fluid" style="padding-left: 2em; padding-top:1em;">
      <form action="update.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="titulo">Título</label>
          <input type="text" class="form-control" id="titulo" placeholder="Título" name="titulo" value="<?php echo $titulo; ?>">
        </div>
        <div class="">
          <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($img); ?>" alt="Imagen noticia" class="img-edit">
          <textarea id="detalle" rows="10" cols="120" name="detalle" style="resize: none;"><?php echo $detalle; ?></textarea>
        </div>
        <input type="file" name="image">
        <input type="text" name="id" value="<?php echo $id; ?>" style="display:none;">
        <input type="submit" class="btn btn-success boton-der" name="submit" value="Guardar">
      </form>
    </div>
    <br><br>
    <?php include 'templates/footer.php';?>
  </body>
</html>