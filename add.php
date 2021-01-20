<?php

$conn = mysqli_connect("localhost", "root", "", "ecoproyectos");

$Bimg = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

add($_POST['titulo'],$_POST['descripcion'], $Bimg);

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
