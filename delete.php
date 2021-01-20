<?php 
    require_once 'dbConfig.php'; 
    $id = $_GET['id'];
    $sql = "DELETE FROM publicaciones WHERE id=".$id;
    if (mysqli_query($db, $sql)) {
        mysqli_close($db);
        header("Location: general_ecocasa_admin.php");
        exit();
    } else {
        header("Location: error_ecocasa_admin.php");
        exit();
    }
?>