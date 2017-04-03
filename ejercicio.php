<?php
   $user;
    $directorio=array('Ana','Luis','Adrian','Dulce');
   // var_dump($_POST);//
    if($_POST){
       $user=$_POST['usuario'];
   


    for($i=0;$i<count($directorio);$i++){
        
        if($directorio[$i]==$user){
           
           echo 'Bienvenido'.$user;
        
        }
        
        else{
             
             echo  'no es un usuario existente';

        }
    }
    }
?>

<!--Para no escribir en la url -->
<form method="POST">
    Usuario
    <input type="text" name="usuario">
    
    <!--
    <br>
    Escribe el numero 2
    <input type="text" name="num2">
    <br>
     Para enviar los datos ala url
    -->
    
    <input type="submit" value="Enviar...">

</form>