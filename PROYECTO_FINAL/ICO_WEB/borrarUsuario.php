<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Usuario</title>
<?php
session_start();

if (!isset($_SESSION['nombre_usuario'])) {
    header("Location: inicioSesion/index.php");
   
    exit(); 
}

include "header.php";
require "conexion.php";
mysqli_set_charset($conexion,'utf8');
$registroEliminado =$_POST['nombre_usuario'];
$consulta="SELECT * FROM registro WHERE nombre_usuario = '$registroEliminado'";

$resultado= mysqli_query($conexion, $consulta );


if ($resultado && mysqli_num_rows($resultado) > 0) {

    $consultaEliminar = "DELETE FROM registro WHERE nombre_usuario = '$registroEliminado'";
    if (mysqli_query($conexion, $consultaEliminar)) {
        echo "<h1 style='text-align:center;'>Usuario eliminado con éxito</h1>";
        echo "<div style='text-align: center;'>
        <img src='media/eliminado.gif' alt='Bienvenido' style='width: 400px; height: auto;'>
        </div>";

    } else {
        echo "<h1>Error al eliminar el usuario: " . mysqli_error($conexion) . "</h1>";
    }
} else {
    echo "<h1 style='text-align:center;'>El usuario no existe o ya fue eliminado</h1>";
    echo "<div style='text-align: center;'>
    <img src='media/noExiste.gif' alt='Bienvenido' style='width: 400px; height: auto;'>
    </div>";
}

mysqli_close($conexion);

echo "<h1 style='text-align:center; font-size: 28px;'><a href='inicio.php'>Inicio</a></h1>";


include "footer.php";

?> 
