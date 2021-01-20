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
      if (!isset($_SESSION['rol']))
      {
        $_SESSION['rol'] = 0;
      }
    ?>
    <div class="container-fluid" style="padding-left: 2em; padding-top:1em;">
    <?php
      if ($_SESSION['rol'] == 0)
      {
        echo '<button type="button" class="btn btn-success" id="btnNuevo">Nuevo</button><br>';
      }
    ?>
      <br>
        <?php 
          $query = mysqli_query($db,"SELECT id, titulo, img FROM publicaciones"); 
          while($fila = $query->fetch_assoc()){
            echo '<div class="publicacion">';
            echo '<img src="data:image/jpg;charset=utf8;base64,'.base64_encode($fila['img']).'" alt="Imagen noticia" class="img-circular" data-id="'.($fila['id']).'"/>';
            echo '<div class="texto-titulo">';
            echo '<h1 class="titulo">'.($fila['titulo']).'</h1>';
            if ($_SESSION['rol'] == 0){
              echo '<div class="botones">';
              echo '<button type="button" class="btn btn-warning editar" data-id="'.($fila['id']).'">Editar</button>';
              echo '<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#confirm-delete" data-href="delete.php?id='.($fila['id']).'">Borrar</button>';
              echo '</div>';
            }
            echo '</div>';
            echo '<hr>';
            echo '</div>';
          }
        ?>
    </div>
    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
          <div class="modal-content">
              <div class="modal-header">
                  Eliminar registro
              </div>
              <div class="modal-body">
                  ¿Estás seguro que deseas eliminar el registro?
              </div>
              <div class="modal-footer">
                  <a type="button" class="btn btn-success btn-ok">Aceptar</a>
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
              </div>
          </div>
      </div>
    </div>
    <?php include 'templates/footer.php';?>
    <script src="js/ecocasa_codigo.js" type="application/javascript"></script>
  </body>
</html>