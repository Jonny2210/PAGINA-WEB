<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet">
    <title>Inicio</title>
</head>

<?php  

    
    session_start();

    if (!isset($_SESSION['nombre_usuario'])) {
        header("location: inicioSesion/index.php");
        exit(); 
    }

    include "header.php";
    include "conexion.php";

    $consulta_sql = " SELECT * FROM registro";

    $resultado = $conexion->query($consulta_sql);

    $count = mysqli_num_rows($resultado);

    echo "<table class='striped' style='width: 100%; font-size: 18px; text-align: center;'>";
        echo "<tr>";
            echo "<th>Nombre</th>";
            echo "<th>Apellido</th>";
            echo "<th>Edad</th>";
            echo "<th>País</th>";
            echo "<th>Telefono</th>";
            echo "<th>Correo</th>";
            echo "<th>Usuario</th>";
            echo "<th>Contraseña</th>";
            echo "<th>Fecha de Registro</th>";
            echo "<th>Permisos</th>";
        echo"</tr>";

        if($count>0){
            while($row=mysqli_fetch_assoc($resultado) ){
                echo "<tr>";
                    echo"<td>".$row['nombre']. "</td>";
                    echo"<td>".$row['apellido']. "</td>";
                    echo"<td>".$row['edad']. "</td>";
                    echo"<td>".$row['pais']. "</td>";
                    echo"<td>".$row['telefono']. "</td>";
                    echo"<td>".$row['correo']. "</td>";
                    echo"<td>".$row['nombre_usuario']. "</td>";
                    echo"<td>".$row['password']. "</td>";
                    echo"<td>".$row['fecha_registro']. "</td>";
                    echo"<td>".$row['permisos']. "</td>";
                echo "</tr>";
                }
                echo "</table>";

                }else{
                    
                    ?>
                    
                    <h1 style='color:black' >No hay ningun registro</h1>
                    <?php } 

                    echo"<h1 style='width: 100%; font-size: 28px; text-align: center'><a href='eliminarUsuario.php'>Eliminar Usuario</a></h1>";

include "footer.php";
                
?>  
                    
                    
                    
                    
            
      
             