<?php
include 'inter.php';
$usuario = isset($_POST["usuario"])?$_POST["usuario"]:"";
$clave = isset($_POST["clave"])?$_POST["clave"]:"";
$pasatiempo= isset($_POST["pasatiempo"])?$_POST["pasatiempo"]:[];
$error=array();
if(count($pasatiempo)==0 or $usuario =="" or $clave==""){

    interfaz();
}
if (isset($_POST["usuario"])) {
    
    
  //  $usuario = isset($_POST["usuario"])?$_POST["usuario"]:"";
	//$clave = isset($_POST["clave"])?$_POST["clave"]:"";
    //$pasatiempo= isset($_POST["pasatiempo"])?$_POST["pasatiempo"]:[];
    //$error=array();
    if (count($pasatiempo)==0) {
        array_push($error,"porfavor digite un pasatiempo");}

    if ($usuario=="")
        {

        array_push($error,"por favor digite su usuario");
        }
    if($clave==""){

        array_push($error,"por favor digite su contraseña");
    }
    if(count($error)>0){
        foreach ($error as $value ) {
            echo "<hr>".$value;
            $a=2;
            }
        }
        else{
            include 'nue.php';
            nueva();
            
          

        }
        
        
                    



                
        

        
            
        }
    
    
        ?>

   