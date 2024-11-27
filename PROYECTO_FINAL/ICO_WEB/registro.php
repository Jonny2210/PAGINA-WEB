<?php

    session_start();

    if (!isset($_SESSION['nombre_usuario'])) {
        header("Location: inicioSesion/index.php");
       
        exit(); 
    }
include "header.php"; 
include "conexion.php";?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet">
        <title>Registro</title>
    </head>
    
    
    <div class="container">
        <div class="row">
            <div class="col s12 m6 offset-m3">
                <h1 class="center-align">Registro</h1>
                <form action="enviarRegistro.php" method="post">
                
                    <div class="input-field">
                        <i class="material-icons prefix">person</i>
                        <input type="text" name="nombre" id="nombre" required autofocus />
                        <label for="nombre_usuario">Nombre</label>
                    </div>
    
                    <div class="input-field">
                        <i class="material-icons prefix">face</i>
                        <input type="text" name="apellido" id="apellido" required />
                        <label for="apellido">Apellido</label>
                    </div>
    
                    <div class="input-field">
                        <i class="material-icons prefix">date_range</i>
                        <input type="text" name="edad" id="edad" required/>
                        <label for="edad">Edad</label>
                    </div>
    
                    <div class="input-field">
                        <i class="material-icons prefix">room</i>
                        <input type="text" name="pais" id="pais" required/>
                        <label for="pais">País</label>
                    </div>
    
                    <div class="input-field">
                        <i class="material-icons prefix">phone</i>
                        <input type="text" name="telefono" id="telefono" required/>
                        <label for="telefono">Telefono</label>
                    </div>
    
                    <div class="input-field">
                        <i class="material-icons prefix">email</i> 
                        <input type="text" name="correo" id="correo" required/>
                        <label for="correo">Correo</label>
                    </div>
    
                    <div class="input-field">
                        <i class="material-icons prefix">account_circle</i>
                        <input type="text" name="nombre_usuario" id="nombre_usuario" required/>
                        <label for="nombre_usuario">Nombre Usuario</label>
                    </div>
    
                    <div class="input-field">
                        <i class="material-icons prefix">lock</i>
                        <input type="password" name="password" id="password" required/>
                        <label for="password">Contraseña</label>
                    </div>
                
    
                    <div class="center-align">
                        <button class="btn blue darken-3 waves-effect waves-light" type="submit">
                        <i class="material-icons prefix">send</i>
                            Enviar Registro
                        </button>
                    </div>
                </form>

                <h1 style='text-align: center; font-size: 28px;'><a href="inicio.php">Inicio</a></h1> 

    
                
            </div>
        </div>
    </div>
    
    <?php  include "footer.php";?>