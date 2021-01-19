<?php

$conn = mysqli_connect("localhost", "root", "", "ecoproyectos");

add($_POST['titulo'],$_POST['descripcion'],$_POST['imagen']);

function add($tit, $des, $img)
{
    $conn = mysqli_connect("localhost", "root", "", "ecoproyectos");
    $sql = "INSERT INTO `proyectos` (`titulo`, `descripcion`, `imagen`) VALUES ('".$tit."', '".$des."', '".$img."')";
    mysqli_query($conn, $sql);
}
?>

<script type="text/javascript">
    alert("Proyecto Añadido exitosamente");
    window.location.href='proyectos.php';
</script>
