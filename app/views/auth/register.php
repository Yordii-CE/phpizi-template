<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $PUBLIC ?>/css/auth.css">

    <title>Crear cuenta</title>
    <link rel="icon" href="<?= $PUBLIC ?>/img/icon.png" type="image/x-icon">
</head>

<body>
    <div class="center">
        <form name="log" action="php/reg_usr.php" method="post">
            <p class="login-text" style="font-size: 1px; font-weight: 500;">
            <h1>Crear Cuenta</h1>
            </p>

            <br>
            <div>
                <div class="txt_field">

                    <input type="text" id="usuario" name="usuario" required="" />
                    <span></span>
                    <label>Usuario</label>
                </div>


                <div class="txt_field">
                    <input type="password" class="form-control" name="password" required="" />
                    <span></span>
                    <label>Contraseña</label>
                </div>

                <div class="txt_field">
                    <input type="password" class="form-control" name="con_password" required="" />
                    <span></span>
                    <label>Confirmar Contraseña</label>
                </div>

                <div class="txt_field">
                    <input type="email" class="form-control" name="email" required />
                    <span></span>
                    <label>Email</label>
                </div>

                <div class="g-recaptcha col-md-9" data-sitekey="6LcWM7UUAAAAAEuk1KMfIKSv81tBDFQ8a7Ff_SCd"></div>
            </div>
            <br>
            <input type="submit" value="Crear cuenta">
            <div class="input-group">
                <br>

            </div>
            <p class="login-register-text">¿Ya tienes cuenta? <a href="<?= TO($THIS) ?>"> Inciar sesión </a>.</p>
        </form>
        <br>
    </div>
</body>

</html>