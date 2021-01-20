<?php 
    require_once 'dbConfig.php'; 
    $id = $_GET['id'];
    $sql = "DELETE FROM publicaciones WHERE id=".$id;
    if (mysqli_query($db, $sql)) {
        mysqli_close($db);
        header("Location: general_ecocasa_view.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($db);
    }
?>