<?php
require_once("../../config/db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $producto = $_POST["label-producto"];
   $precio = $_POST["label-precio"];
   $fabricante = $_POST["label-fabricante"];
   if (!empty($producto) && !empty($precio) && !empty($fabricante)) {
      $sql = "INSERT INTO producto(nombre, precio, id_fabricante) VALUES (?, ?, ?)";
      // Preparar consulta
      $stmt = $conn->prepare($sql);
      // Bind de los parametros
      $stmt->bind_param("sdi", $producto, $precio, $fabricante);
      // consulta
      if ($stmt->execute()) {
         echo "<script>
            alert('Producto Agregado!');
            window.location.href = '../../home.php';
            </script>";
      } else {
         echo "Error al agregar producto: " . $stmt->error;
      }
      // cerrar consulta
      $stmt->close();
   } else {
      echo "<script>alert('Por favor, preencha todos os campos.')</script>";
   }
}
//cerrar conexion
$conn->close();
