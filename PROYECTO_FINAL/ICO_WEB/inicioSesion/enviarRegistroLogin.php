<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet">
    <title>Registro</title>
</head>
<?php


include "headerLogin.php";
include "../conexion.php";

mysqli_set_charset($conexion, 'utf8');

// Verificar si los datos del formulario están disponibles
if (isset($_POST['nombre_usuario']) && !empty($_POST['nombre_usuario'])) {
    $nombre_usuario = $_POST['nombre_usuario']; // Obtener el nombre de usuario desde el formulario

    // Verificar si el nombre de usuario ya existe en la base de datos
    $query = "SELECT * FROM registro WHERE nombre_usuario = '$nombre_usuario'";
    $result = mysqli_query($conexion, $query);

    if (mysqli_num_rows($result) > 0) {
        // Si el usuario ya existe, mostrar el mensaje de error
        echo "<h1 style='text-align:center;'>No puedes registrarte porque ya cuentas con un nombre de usuario:</h1>";
        echo "<h1 style='color:blue; text-align:center; text-decoration: underline;'>$nombre_usuario</h1>";
        echo "<div style='text-align: center;'>
            <img src='../media/no.gif' alt='Bienvenido' style='width: 200px; height: auto;'>
            </div>";
        echo "<p style='text-align:center;'><a href='index.php' style='font-size: 28px;'>Volver al inicio</a></p>";
    } else {
        // Si el usuario no existe, insertar los nuevos datos en la base de datos
        $insertQuery = "INSERT INTO registro (nombre, apellido, edad, pais, telefono, correo, nombre_usuario, password)
                        VALUES (
                        '$_POST[nombre]', 
                        '$_POST[apellido]', 
                        '$_POST[edad]', 
                        '$_POST[pais]', 
                        '$_POST[telefono]', 
                        '$_POST[correo]', 
                        '$_POST[nombre_usuario]', 
                        '$_POST[password]')";

        if (mysqli_query($conexion, $insertQuery)) {
            // Si la inserción fue exitosa, mostrar mensaje de éxito
            echo "<h1 style='text-align: center;'>Tu registro ha sido exitoso</h1>";
            echo "<h2 style='text-align: center;'>Bienvenido:</h2>";
            echo "<h2 style='color:blue; text-align:center; text-decoration: underline;'>$nombre_usuario</h2>";
            echo "<div style='text-align: center;'>
            <img src='../media/exitoso.gif' alt='Bienvenido' style='width: 200px; height: auto;'>
            </div>";
            echo "<p style='text-align: center;'>¿Quieres registrar un nuevo usuario?</p>";
            echo "<h1 style='text-align: center; font-size: 28px;'>
            <a href='registroLogin.php' style='margin-right: 20px; text-decoration: underline;'>Si</a>
            <a href='index.php' style='text-decoration: underline;'>No</a>
            </h1>";
            echo "<p style='text-align: center; font-size: 28px;'><a href='index.php'>Iniciar sesión</a></p>";
        } else {
            // Si hubo un error al insertar los datos, mostrar mensaje de error
            echo "<h1 style='text-align: center;'>Error al registrar el usuario. Por favor, intenta de nuevo.</h1>";
        }
    }
} else {
    // Si el campo nombre_usuario no ha sido enviado correctamente
    echo "<h1>Error: El nombre de usuario no ha sido enviado correctamente.</h1>";
}

include "../footer.php";
?>
