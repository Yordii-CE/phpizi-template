<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $PUBLIC ?>/css/auth.css">
    <link rel="icon" href="<?= $PUBLIC ?>/img/icon.png" type="image/x-icon">
    <title>Login</title>

</head>

<body>
    <div class="center">
        <h1>Login: <?= $title ?></h1>
        <form action="<?= TO($THIS, 'login') ?>" method="POST" class="login-email">
            <div class="txt_field">
                <input type="text" id="usuario" name="user" class="form-control" required />
                <label>Usuario</label>
            </div>

            <div class="txt_field">
                <input type="password" id="password" name="password" class="form-control" required />
                <label>Contraseña</label>
            </div>

            <input type="submit" value="Iniciar sesión">
            <br>
            <br>
            <div class="pass">
                <a href="<?= TO($THIS, 'reset') ?>">¿Olvidaste tu contraseña?</a>
            </div>

            ¿Eres nuevo en el sistema?
            <a href="<?= TO($THIS, 'register') ?>"> Crear cuenta</a>

            Probar api
            <a href="<?= TO('myapi', '') ?>"> Api</a>
        </form>


    </div>

</body>

</html>