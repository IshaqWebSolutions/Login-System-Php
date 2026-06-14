<?php
$host = "localhost";
$name = "root";
$password = "";
$db = "login_system";

$conn = mysqli_connect($host, $name, $password, $db);

if(!$conn){
  echo "Connection fail!";
}
?>