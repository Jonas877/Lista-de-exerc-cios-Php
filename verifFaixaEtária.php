<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Faixa Etária</title>
</head>
<body>
    
<div class="container">

<h1>Verificação de Faixa Etária<h1>
<?php

$idade = 66;

if($idade >= 0 $idade <=12) {
    echo"A pessoa é uma criança";
}else if($idade >= 13 $idade <=17) {
    echo"A pessoa é Adolescente";
}else if($idade >= 18 $idade <=64) {
    echo"A pessoa é Adulto";
}else if($idade >=65){
    echo"A pessoa é idoso(a)";
}
?>
</body>
</html>