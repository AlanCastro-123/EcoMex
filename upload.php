<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
if(isset($_POST["submit"])){ 
    $status = 'success'; 
    if(!empty($_FILES["image"]["name"])) { 
        // Get file info 
        $fileName = basename($_FILES["image"]["name"]); 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('jpg','png','jpeg'); 
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image)); 
            $titulo = $_POST['titulo'];
            $detalle = $_POST['detalle'];
            // Insert image content into database 
            $insert = $db->query("INSERT into publicaciones (titulo, detalle, nombre_autor, apellido_autor, fecha, img) VALUES ('$titulo','$detalle','Alan','Castro','19/01/2021','$imgContent')"); 
             
            if($insert){ 
                mysqli_close($db);
                header("Location: general_ecocasa_admin.php");
                exit();
            }else{ 
                $status = 'error'; 
                $statusMsg = "File upload failed, please try again."; 
            }  
        }else{ 
            $status = 'error'; 
            $statusMsg = 'Sorry, only JPG, JPEG, PNG, & GIF files are allowed to upload.'; 
        } 
    }else{ 
        $status = 'error'; 
        $statusMsg = 'No se seleccionó imagen.'; 
    } 
}
?>