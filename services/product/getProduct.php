<?php
require_once("./config/db.php");

if (isset($_GET["id"])) {
   $id = $_GET["id"];
   $sql = "SELECT * FROM producto WHERE id = '$id'";
   $result = $conn->query($sql);

   if ($result->num_rows == 1) {
      $row = $result->fetch_assoc();
      echo "
        <form method='POST' action='./services/product/updateProduct.php' class='form-login text-center'>
            <input class='text-form' type='hidden' name='id' value='" . $row["id"] . "'>
            <input class='text-form' type='text' name='nombre' value='" . $row["nombre"] . "' required>
            <input class='text-form' type='text' name='precio' value='" . $row["precio"] . "' required>
            <input class='text-form' type='text' name='fabricante' value='" . $row["id_fabricante"] . "' required>
            <input class='btn-form' type='submit' name='btn-editar' value='Editar'>
        </form>";
   }
}

$conn->close();
