<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="./assets/resources/css/app.css" />
	<title>Registrar - producto</title>
</head>

<body class="bg-home">
	<header class="header">
		<nav class="contenedor d-flex">
			<h2 class="margin-y">Formulario de registro - producto</h2>
			<div><a href="#">Cerrar Sesión</a></div>
		</nav>
	</header>
	<main class="contenedor">
		<div class="content-form">
			<form method="post" class="form-login text-center" action="./services/product/addProduct.php">
				<input type="text" name="label-producto" required placeholder="producto" class="text-form" />
				<input type="text" name="label-precio" required placeholder="precio" class="text-form" />
				<input type="text" name="label-fabricante" required placeholder="fabricante" class="text-form" />
				<input type="submit" name="btn-registrar" class="btn-form" value="Registrar" />
			</form>
		</div>
	</main>
	<footer class="footer">
		<p>Desarrollo de aplicaciones con BD - 2023</p>
	</footer>
</body>

</html>