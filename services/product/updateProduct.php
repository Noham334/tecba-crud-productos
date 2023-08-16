<?php
require_once("../../config/db.php");

if (isset($_POST["btn-editar"])) {
   $id = $_POST["id"];
   $nombre = $_POST["nombre"];
   $precio = $_POST["precio"];
   $fabricante = $_POST["fabricante"];

   $sql = "UPDATE producto SET nombre = ?, precio = ?, id_fabricante = ? WHERE id = ?";
   // Preparar consulta
   $stmt = $conn->prepare($sql);
   // Bind de los parametros
   $stmt->bind_param("sdii", $nombre, $precio, $fabricante, $id);
   // consulta
   if ($stmt->execute()) {
      echo "<script>
         alert('Producto actualizado!');
         window.location.href = '../../home.php';
         </script>";
   } else {
      echo "Error al actualizar el producto: " . $stmt->error;
   }
   // cerrar consulta
   $stmt->close();
}
