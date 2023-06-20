<?php 

header('Content-Type: text/html; charset=utf-8');

$servername = "localhost";
$username = "root";
$password = "";

 
try {
    $conn = new PDO("mysql:host=$servername;dbname=formulario2", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  }
  

?>