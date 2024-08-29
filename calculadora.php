<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>

<div class="container">

<h1>Calculadora<h1>
<?php

 $numero1 = 15;
 $numero2 = 10;
 $operacao = "soma";
 $resultado = 0;


    if($operacao == "soma") {
    $resultado = $numero1 + $numero2;
     echo"O resultado dessa soma é:" $resultado;
    }

    else if($operacao == "subtração") {
    $resultado = $numero1 - $numero2;
       echo"O resultado da subtração é:" $resultado;
    }

    else if($operacao == "Multiplicação") {
     $resultado = $numero1 * $numero2;
        echo"O resultado dessa multiplicação é:" $resultado;
    }
    else if($operacao == "Divisão") {
    $resultado = $numero1 / $numero2;
        echo"O resultado da divisão é:" $resultado;
    }
    
    ?>
    
</body>
</html>