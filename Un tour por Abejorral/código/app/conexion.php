<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "tourporabejorral";
$msg=null;

try {
  $conexion = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
  // set the PDO error mode to exception
  $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 //$msg="<i class='bi bi-check-circle'></i> Connected OK";
} catch (PDOException $e) {
  $msg="<i class='bi bi-check-circle'></i> Connection failed: " . $e->getMessage();
}
?>