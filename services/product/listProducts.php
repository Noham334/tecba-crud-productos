<?php
require_once("./config/db.php");
//CONSULTA SQL
$sql = "SELECT p.id, p.nombre, p.precio, f.nombre AS fabricante FROM producto p
        INNER JOIN fabricante f ON p.id_fabricante = f.id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Loop atraves de `produictpos
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["precio"] . "</td>";
        echo "<td>" . $row["fabricante"] . "</td>";
        echo "<td>";
        echo "<a href='edit-product.php?id=" . $row["id"] . "'><i class='fa-solid fa-pen-to-square fa-2x text-blanco'></i></a> -";
        echo "<a href='delete-product.php?id=" . $row["id"] . "'><i class='fa-solid fa-trash-can fa-2x text-blanco'></i></a>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='4'>Sin productos.</td></tr>";
}


// cerrar conexion
$conn->close();
