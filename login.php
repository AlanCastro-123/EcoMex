<?php 
    $correo = $_POST["email"];
    $pass = $_POST["password"];
    if(isset($correo) && isset($pass)){
        if($correo=="admin@ecocasa.com" && $pass=="ecocasa1!"){
            header("Location: general_ecocasa_admin.php");
            exit;
        }
    }
    
?>