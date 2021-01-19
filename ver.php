<?php

$conn = mysqli_connect("localhost", "root", "", "exu3u4");
$sql = "SELECT * from `nadadores` WHERE id_nadador = '".$_GET['id_nadador']."'";
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

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <div class="container">

        <head>
            <h1>Examen Unidades 3 y 4</h1>
        </head>
        <nav><h6>Bienvenido Otro<input type="button" class="float-right" value="Regreasar" onclick="location.href='usuario.php'"></input></h6></nav>
        <div class="ora" style="padding-top: 50px;">
            <div class="p_login" style="height: 750px;">
                <h2>Nadador</h2>
                <form class="login">
                        Número del Nadador<br>
                        <input type="text" disabled="false" name="id" style="width: 200px;" value="<?php echo $_GET['id_nadador']?>"><br>
                        Nombre<br>
                        <input type="text" disabled="false" name="nombre" name="txtnom" style="width: 200px;" value="<?php echo $modi['nombre'];?>"><br>
                        Edad <br>
                        <input type="text" disabled="false" name="edad" name="txtedad" style="width: 200px;" value="<?php echo $modi['edad'];?>"><br>
                        Peso <br>
                        <input type="text" disabled="false" name="peso" name="txtpeso" style="width: 200px;" value="<?php echo $modi['peso'];?>"><br><br>
                        <input type="image" src="img/nadador.jpg" width="100%">
                    </form>
            </div>
        </div>
    </div>
</body>

</html>