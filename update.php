<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecomex";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id=$_POST["id_publicador"];
$nombre=$_POST["nombre"];
$apepat=$_POST["apepat"];
$apemat=$_POST["apemat"];
$sexo=$_POST["sexo"];
$correo=$_POST["correo"];
$psw=$_POST["psw"];
$rol=$_POST["rol"];

$sql = "UPDATE publicadores SET nombre='$nombre', apepat='$apepat', apemat='$apemat', sexo='$sexo', correo='$correo',
                                pass='$psw',rol='$rol' WHERE id_publicador='$id'";

if ($conn->query($sql) === TRUE) {
  header("location:publicadoresadmin.php");
  echo "Actualización Exitosa";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
?>