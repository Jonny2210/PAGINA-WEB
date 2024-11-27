<?php require "../conexion.php"; include "headerLogin.php";?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet">
    <title>Inicio Sesión</title>
</head>

<div class="container">
    <div class="row">
        <div class="col s12 m6 offset-m3">
            <h1 class="center-align">Inicio de sesión</h1>
            <form method="POST" action="../logica/loguear.php">
                
                <div class="input-field">
                    <i class="material-icons prefix">account_circle</i>
                    <input type="text" name="nombre_usuario" id="nombre_usuario" required />
                    <label for="nombre_usuario">Nombre de Usuario</label>
                </div>

                <div class="input-field">
                    <i class="material-icons prefix">lock</i>
                    <input type="password" name="password" id="password" required />
                    <label for="password">Contraseña</label>
                </div>

                <div class="center-align">
                    <button class="btn blue darken-3 waves-effect waves-light" type="submit">
                        Iniciar Sesión
                    </button>
                </div>
            </form>

            <div class="center-align">
                <p>¿Aún no tienes una cuenta? <a href="registroLogin.php">Regístrate</a></p>
            </div>
        </div>
    </div>
</div>

<?php include "../footer.php";?>




