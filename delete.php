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

$id=$_POST["delete_id"];


$sql = "DELETE FROM publicadores WHERE id_publicador=$id";

if ($conn->query($sql) === TRUE) {
  header("location:publicadoresadmin.php");
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>