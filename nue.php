<?php 
 
function nueva (){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Hola</title>
    </head>
    <body>
        
        <?php
        $usuario = isset($_POST["usuario"])?$_POST["usuario"]:"";
       
        $pasatiempo= isset($_POST["pasatiempo"])?$_POST["pasatiempo"]:[];
       
        
        echo "<hr>hola bienvenido  puto ". $usuario ." tus pasatiempos son :";
        foreach ( $pasatiempo as $value ) {
            echo " ". $value. "  " ;
             }
             
        ?>
         <form method="post" action="salir.php">
                
                <input type="submit" value="salir">
        <?php
    }
       ?> 
    </body>
    </html>
  