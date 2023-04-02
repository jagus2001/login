<?php
function interfaz(){
   
?>

    <!DOCTYPE html>
        <html>
        <head>
            <meta charset='utf-8'>
            <meta http-equiv='X-UA-Compatible' content='IE=edge'>
            <title>Page Title</title>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
            <script src='main.js'></script>
        </head>
        <body>
            <h2>Inicio de Sesion<h2>
                <form method="post" action="jago.php">
                    <label for="usuario">usuario</label>
                    <input type="text" name="usuario" id="nombre">
                    <br>
                    <br>
                    <label for="clave">contraseña</label>
                    <input type="password" name="clave" id="clave">
                    <label for="pasatiempo" >pasatiempo</label>
                    <label><input type="checkbox" name="pasatiempo[]" value="leer" id="leer">leer</label>
                    <br>
                    <label ><input type="checkbox" name="pasatiempo[]" value="correr" id="correr">correr</label>
                    <br>
                    <label><input type="checkbox" name="pasatiempo[]" value="caminar" id="caminar">caminar</label>
                    <br>
                    <hr>
                    <input type="submit" value="enviar">
            
        </body>

        </html>
        <?php
    };