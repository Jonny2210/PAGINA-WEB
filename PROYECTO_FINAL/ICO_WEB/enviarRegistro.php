<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
<?php


include "header.php";
include "conexion.php";

mysqli_set_charset($conexion, 'utf8');

if (isset($_POST['nombre_usuario']) && !empty($_POST['nombre_usuario'])) {
    $nombre_usuario = $_POST['nombre_usuario']; 

    $query = "SELECT * FROM registro WHERE nombre_usuario = '$nombre_usuario'";
    $result = mysqli_query($conexion, $query);

    if (mysqli_num_rows($result) > 0) {

        echo "<h1 style='text-align:center;'>No puedes registrarte porque ya cuentas con un nombre de usuario:</h1>";
        echo "<h1 style='color:blue; text-align:center; text-decoration: underline;'>$nombre_usuario</h1>";
        echo "<div style='text-align: center;'>
            <img src='media/no.gif' alt='Bienvenido' style='width: 200px; height: auto;'>
            </div>";
        echo "<p style='text-align:center; margin-top:40px; font-size: 28px;'><a href='inicio.php'>Volver al inicio</a></p>";
    } else {
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

            echo "<h1 style='text-align: center;'>Tu registro ha sido exitoso</h1>";
            echo "<h2 style='text-align: center;'>Bienvenido:</h2>";
            echo "<h2 style='color:blue; text-align:center; text-decoration: underline;'>$nombre_usuario</h2>";
            echo "<div style='text-align: center;'>
            <img src='media/exitoso.gif' alt='Bienvenido' style='width: 200px; height: auto;'>
            </div>";
            echo "<p style='text-align: center;'>¿Quieres registrar un nuevo usuario?</p>";
            echo "<h1 style='text-align: center; font-size: 28px;'>
            <a href='registro.php' style='margin-right: 20px; text-decoration: underline; '>Si</a>
            <a href='inicio.php' style='text-decoration: underline;'>No</a>
            </h1>";            
            echo "<p style='text-align: center;font-size: 28px;'><a href='inicioSesion/index.php'>Iniciar sesión</a></p>";
        } else {
            echo "<h1 style='text-align: center;'>Error al registrar el usuario. Por favor, intenta de nuevo.</h1>";
        }
    }
} else {
    echo "<h1>Error: El nombre de usuario no ha sido enviado correctamente.</h1>";
}

include "footer.php";
?>
