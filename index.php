<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>
    <?php 
    #variables:Todas las variables se declaran con $
    $num1=10;
    $num2=20;
    $suma=$num1+$num2;
    //echo "La suma es $suma";//Imprime el valor de la variable
    //echo 'La suma es $suma';//Imprime el nombre de la variable

    echo 'La suma es ' .$suma; // La concatenacion se hace con el .
    #ciclos,condicionales,switch,etc son lo mismo que JS
    ?>
    </h1>
</body>
</html>