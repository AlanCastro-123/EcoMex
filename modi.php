<?php

$conn = mysqli_connect("localhost", "root", "", "ecoproyectos");
$Bimg = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

modificar($_POST['id'],$_POST['titulo'],$_POST['descripcion'],$Bimg);

function modificar($id,$tit, $des, $img)
{
    $conn = mysqli_connect("localhost", "root", "", "ecoproyectos");

    if ($tit != null) {
        $sql = "UPDATE proyectos SET titulo = '" . $tit . "' WHERE id = '".$id."'";
        mysqli_query($conn, $sql);
    }

    if ($des != null) {
        $sql = "UPDATE proyectos SET descripcion = '" . $des . "' WHERE id = '".$id."'";
        mysqli_query($conn, $sql);
    }

    if ($img != null) {
        $sql = "UPDATE proyectos SET imagen = '" . $img . "' WHERE id = '".$id."'";
        mysqli_query($conn, $sql);
    }
}
?>

<script type="text/javascript">
    alert("Proyecto Modificado exitosamente");
    window.location.href='proyectos.php';
</script>
