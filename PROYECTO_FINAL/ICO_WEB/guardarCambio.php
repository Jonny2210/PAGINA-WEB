<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Datos</title>
<?php


session_start();

if (!isset($_SESSION['nombre_usuario'])) {
    header("location: index.php");
    exit(); 
}

include "header.php";

include "conexion.php";


$nombre_usuario = $_SESSION['nombre_usuario'];

$query = "SELECT * FROM registro WHERE nombre_usuario = '$nombre_usuario'";
$result = mysqli_query($conexion, $query);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result); 
} else {
    echo "<h1>Error: no se encontraron los datos del usuario</h1>";
    echo "<div style='text-align: center;'>
            <img src='media/noEncontro.gif' alt='Bienvenido' style='width: 400px; height: auto;'>
            </div>";
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $pais = $_POST['pais'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    

    $updateQuery = "UPDATE registro SET nombre = '$nombre', apellido = '$apellido', edad = '$edad', pais = '$pais', telefono = '$telefono', correo = '$correo' WHERE nombre_usuario = '$nombre_usuario'";

    if (mysqli_query($conexion, $updateQuery)) {
        echo "<h1 style='text-align: center;'>Datos actualizados con éxito</h1>";
        echo "<div style='text-align: center;'>
            <img src='media/actualizado.gif' alt='Bienvenido' style='width: 400px; height: auto;'>
            </div>";
        echo "<p style='text-align: center;font-size: 28px;'><a href='inicio.php'>Inicio</a></p>";
    } else {
        echo "<h1>Error al actualizar los datos. Intenta nuevamente.</h1>";
    }
}


include "footer.php";

?>

