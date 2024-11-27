
<?php
session_start();

if (!isset($_SESSION['nombre_usuario'])) {
    header("Location: inicioSesion/index.php");
   
    exit(); 
}

include "header.php";
   
include "conexion.php";

?>  

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuario</title>
</head>

    <form style=" text-align: center;" method="POST" action="borrarUsuario.php">

    <div class="container">
    <div class="row">
        <div class="col s12 m6 offset-m3">
            <h1 class="center-align">Eliminar Usuario</h1>
            <form method="POST" action="../logica/loguear.php">

                <div class="input-field">
                    <i class="material-icons prefix">cancel</i>
                    <input type="text" name="nombre_usuario" id="nombre_usuario" required />
                    <label for="nombre_usuario">Nombre de Usuario</label>
                </div>

                <div class="center-align">
                    <button class="btn blue darken-3 waves-effect waves-light" type="submit">
                    <i class="material-icons prefix">delete</i>
                        Eliminar
                    </button>
                </div>
            </form>

            <div class="center-align">
                <h1 style='text-align: center; font-size: 25px;'type="submit" name="submit"><a href="inicio.php">Inicio</a></h1>
            </div>
        </div>
    </div>
</div>


<?php  include "footer.php";?>