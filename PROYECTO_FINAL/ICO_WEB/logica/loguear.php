<?php
session_start();
include '../conexion.php';


$no_usuario = $_POST['nombre_usuario'];
$clave = $_POST['password'];


//La función COUNT devuelve el número de filas de la consulta, es decir, el número de registros que cumplen una determinada condición.

//Los valores nulos no serán contabilizados
$q = "SELECT COUNT(*) as contar from registro where nombre_usuario = '$no_usuario' and password = '$clave'";

$consulta = mysqli_query($conexion, $q);

$array = mysqli_fetch_array($consulta);

if ($array['contar'] > 0) {

    // en la variable session se guarda el numero de cuenta esto para poder acarrearla
    $_SESSION['nombre_usuario'] = $no_usuario;

    header("location: ../inicioSesion/Principal.php");
} else {

    header("location: ../inicioSesion/indexError.php");
}
?>