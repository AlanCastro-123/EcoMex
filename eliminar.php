<?php

$conn = mysqli_connect("localhost", "root", "", "exu3u4");

delete($_GET['id_nadador']);

function delete($id)
{
    $conn = mysqli_connect("localhost", "root", "", "exu3u4");
    $sql = "DELETE FROM `nadadores` WHERE `id_nadador` = '" . $id . "'";
    mysqli_query($conn, $sql);
}
?>

<script type="text/javascript">
    alert("Nadador eliminado exitosamente");
    window.location.href = 'administrador.php';
</script>