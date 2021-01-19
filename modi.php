<?php

$conn = mysqli_connect("localhost", "root", "", "exu3u4");

modificar($_POST['id'],$_POST['nombre'],$_POST['edad'],$_POST['peso']);

function modificar($id,$nom, $edad, $peso)
{
    $conn = mysqli_connect("localhost", "root", "", "exu3u4");
    $sql = "UPDATE nadadores SET nombre = '" . $nom . "', edad = '" . $edad . "', peso = '" . $peso . "' WHERE id_nadador = '".$id."'";
    mysqli_query($conn, $sql);
}
?>

<script type="text/javascript">
    alert("Nadador Modificado exitosamente");
    window.location.href='administrador.php';
</script>
