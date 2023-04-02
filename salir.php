<?php

function salir(){
    include("jago.php");

    unset($usuario, $clave, $pasatiempo);
    
};
?>
 <form method="post" action="jago.php">
    <input type="submit" value="Iniciar Sesion">