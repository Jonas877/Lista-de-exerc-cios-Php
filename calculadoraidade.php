<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Idade</title>
</head>
<body>
    
<div class="container">

<h1>Calculadora Idade</h1>
<?php

$anoNascimento = 1986;
$anoAtual = 2024;
$idade = 0;

$idade = $anoAtual - $anoNascimento;
echo"A idade calculada é:  $idade";

?>
</div>
</body>
</html>