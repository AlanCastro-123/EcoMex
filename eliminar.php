<?php

$conn = mysqli_connect("localhost", "root", "", "ecoproyectos");

delete($_GET['id']);

function delete($id)
{
    $conn = mysqli_connect("localhost", "root", "", "ecoproyectos");
    $sql = "DELETE FROM `proyectos` WHERE `id` = '" . $id . "'";
    mysqli_query($conn, $sql);
}
?>

<script type="text/javascript">
    alert("Proyecto eliminado exitosamente");
    window.location.href = 'proyectos.php';
</script>