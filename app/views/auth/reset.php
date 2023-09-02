<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= $PUBLIC ?>/css/auth.css">
	<title>Reestablecer cuenta</title>

	<link rel="icon" href="<?= $PUBLIC ?>/img/icon.png" type="image/x-icon">
</head>

<body>
	<div class="center">
		<form name="log" action="php/enviarCorreoPassword.php" method="post">
			<p class="login-text" style="font-size: 1px; font-weight: 500;">
			<h1>Reestablecer Contraseña</h1>
			</p>


			<div>

				<div class="txt_field">
					<input type="email" id="email" name="email" required="" />
					<span></span>
					<label>Correo electrónico</label>
				</div>

				<input type="submit" value="Reestablecer"></a>

				<br>
				<br>

				<a href="<?= TO($THIS) ?>"> Inciar sesión </a></p>

		</form>
		<br>
		<br>
</body>

</html>