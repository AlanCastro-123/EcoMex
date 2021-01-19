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
    <?php include 'templates/header.php';?>
    <?php 
      if (!isset($_SESSION['rol']))
      {
        $_SESSION['rol'] = 0;
      }
    ?>
    <?php
      if ($_SESSION['rol'] == 1)
      {
        header("Location: index.php");
        exit();
      }
    ?>
    <div class="container-fluid" style="padding-left: 2em; padding-top:1em;">
      <form action="upload.php" method="post" enctype="multipart/form-data">
        <label>Select Image File:</label>
        <input type="file" name="image">
        <input type="submit" name="submit" value="Upload">
      </form>
    </div>
    <?php include 'templates/footer.php';?>
    <script src="js/ecocasa_codigo.js" type="application/javascript"></script>
  </body>
</html>