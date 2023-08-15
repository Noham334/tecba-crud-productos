<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="./assets/resources/css/app.css" />
	<title>Productos</title>
</head>

<body class="bg-home">
	<div class="overlay">
		<header class="header">
			<nav class="contenedor d-flex nav">
				<a href="#"><i class="fa-solid fa-users"></i> Usuarios</a>
				<a href="home.php"><i class="fa-solid fa-cubes"></i> Productos</a>
				<a href="#"><i class="fa-solid fa-clipboard-list"></i> Categorias</a>
				<a href="#">
					<i class="fa-solid fa-right-from-bracket"></i> Cerrar Sesión</a>
			</nav>
		</header>
		<main class="contenedor home-main">
			<br />
			<div>
				<a href="add-product.php" class="btn-home">Nuevo producto</a>
				<hr />
			</div>

			<div class="lista-usuario">
				<h2 class="text-blanco">Lista de productos</h2>
			</div>
			<div class="text-blanco tabla">
				<table border="1">
					<tr>
						<th>Producto</th>
						<th>Precio</th>
						<th>Fabricante</th>
						<th>Acciones</th>
					</tr>
					<?php
					include_once("./services/product/listProducts.php");
					?>
				</table>
			</div>
		</main>
		<footer class="footer">
			<p>Desarrollo de aplicaciones con BD - 2023</p>
		</footer>
	</div>
</body>

</html>