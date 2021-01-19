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

$nombre=$_POST["nombre"];
$apepat=$_POST["apepat"];
$apemat=$_POST["apemat"];
$sexo=$_POST["sexo"];
$correo=$_POST["correo"];
$psw=$_POST["psw"];
$rol=$_POST["rol"];

$sql = "INSERT INTO publicadores (nombre,apepat,apemat,sexo,correo,pass,rol)
VALUES ('$nombre', '$apepat', '$apemat','$sexo','$correo','$psw','$rol')";

if ($conn->query($sql) === TRUE) {
  header("location:publicadoresadmin.php");
  echo "Registro exitoso";

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>