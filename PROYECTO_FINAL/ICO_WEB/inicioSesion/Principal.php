<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet">
    <title>Bienvenida</title>
</head>

<?php

include "../header.php";

session_start();
$no_usuario= $_SESSION['nombre_usuario'];//413112576


if(!isset($_SESSION['nombre_usuario'])){

        header("location: index.php");
        
        exit();
        
        
}else{
    

    echo "<h1 style='text-align: center;'> Bienvenido $no_usuario </h1> ";


    echo "<div style='text-align: center;'>
            <img src='../media/saludo.gif' alt='Bienvenido' style='width: 400px; height: auto;'>
          </div>";

    echo "<p style='text-align: center; font-size:28px;'> <a href='../inicio.php'> Ver registro </a> </p>";




}

include "../footer.php";

?>