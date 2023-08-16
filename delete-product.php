<?php
require_once("./config/db.php");

if (isset($_GET["id"])) {
   $id = $_GET["id"];

   $sql = "DELETE FROM producto WHERE id = $id";

   if ($conn->query($sql) === TRUE) {
      echo "<script>
      alert('Borrado con exito!');
      window.location.href = './home.php';
      </script>";
   }
}
