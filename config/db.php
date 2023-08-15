<?php
$servername = "localhost";
$username = "root";
$password = "";
$bdatos  = "tienda";

// Create connection
$conn = new mysqli($servername, $username, $password, $bdatos);
// Check connection
if ($conn->connect_error) {
  die("Fallo la conexion: " . $conn->connect_error);
}
