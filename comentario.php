<?php

$conn = mysqli_connect("localhost", "root", "", "ecoproyectos");

$id = $_POST['id'];

add($_POST['comentario']);

function add($comen)
{
    $conn = mysqli_connect("localhost", "root", "", "ecoproyectos");
    $sql = "INSERT INTO `comentarios`(`comentario`) VALUES ('".$comen."')";
    mysqli_query($conn, $sql);
}
?>

<script type="text/javascript">
    alert("Comentario Añadido exitosamente");
    window.location.href='ver.php?id=<?php echo $id; ?>';
</script>