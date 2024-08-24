<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>

<div class="container">

<h1> Calculadora<h1>
<?php

 $numero1 = 15;
 $numero2 = 10;
 $operacao = "soma";
  


    if($operacao = $numero1 + $numero2)
    {
     echo"O resultado dessa soma é:" $operacao;
    }

    else if($operacao = $numero1 - $numero2)
    {
       echo"O resultado da subtração é:" $operacao;
    }

    else if($operacao = $numero1 * $numero2)
    {
        echo"O resultado dessa multiplicação é:" $operacao;
    }
    else if($operacao = $numero1 / $numero2)
    {
        echo"O resultado da divisão é:" $operacao;
    }
    
    ?>
    
</body>
</html>