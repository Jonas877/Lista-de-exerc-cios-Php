<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Paridade</title>
</head>
<body>
    
<div class="container">

<h1>Verificação de Paridade<h1>
<?php

$numero = 30;

if($numero % 2 == 0) {
    echo "O número é par";
}else {
    echo "O número é ímpar";
}
?>
</body>
</html>