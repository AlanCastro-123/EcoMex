<?php 
// Include the database configuration file  
require_once 'dbConfig.php'; 
 
// If file upload form is submitted 
$status = $statusMsg = ''; 
$id = $_POST["id"];
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
            $insert = $db->query("UPDATE publicaciones SET titulo='".$titulo."', detalle=".$detalle.", img=".$imgContent." WHERE id=".$id); 
             
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
        $titulo = $_POST['titulo'];
        $detalle = $_POST['detalle'];
        // Insert image content into database 
        $sql = "UPDATE publicaciones SET titulo='".$titulo."', detalle='".$detalle."' WHERE id=".$id;
        if(mysqli_query($db, $sql)){ 
            mysqli_close($db);
            header("Location: general_ecocasa_admin.php");
            exit();
        }else{ 
            $status = 'error'; 
            $statusMsg = "File upload failed, please try again xD.".$sql; 
        }  
    } 
}
echo $statusMsg;
?>