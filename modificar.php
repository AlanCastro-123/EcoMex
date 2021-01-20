<?php

$conn = mysqli_connect("localhost", "root", "", "ecoproyectos");
$sql = "SELECT * from `proyectos` WHERE id = '".$_GET['id']."'";
$result = mysqli_query($conn, $sql);
$modi = mysqli_fetch_array($result);

?>
<!doctype html>
<html lang="es">

<head>
    <title>Modificar</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/nuestros_estilos.css">
    <link rel="stylesheet" href="css/proyectos_estilos.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <?php include 'templates/header.php'; ?>
    <div class="container">
        <div style="padding-top: 50px;">
            <div>
                <form action="modi.php" method="POST" enctype="multipart/form-data">
                    <input type="button" class="float-right btn btn-info" value="Regresar" onclick="location.href='proyectos.php'" style="margin-left: 10px;"></input>
                    <input type="submit" class="float-right btn btn-success" value="Guardar Proyecto" ></input>
                    <br><br>
                    <input type="hidden" name="id" value="<?php echo $_GET['id']?>">
                    Título del Proyecto<br><br>
                    <input type="text" required name="titulo" name="txttit" style="width: 75%;" value="<?php echo $modi['titulo'];?>"><br><br>
                    Descripción del Proyecto<br><br>
                    <textarea name="descripcion" style="resize: none; width: 75%; height: 290px;"><?php echo $modi['descripcion'];?></textarea>
                    <br><br>
                    Imagen <br><br>
                    <img src='data:image/jpg;charset=utf8;base64,<?php echo base64_encode($modi['imagen']) ?>' alt='Imagen noticia' class='img-modificar'><br><br>
                    <input type="file" name="imagen" name="Imgimg" style="width: 200px;"><br><br>
                </form>
            </div>
        </div>
    </div>
    <?php include 'templates/footer.php'; ?>
</body>

</html>