<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Senha</title>
</head>
<body>

<div class="container">

<h1>Verficação de Senha</h1>
<?php
    
$senha = "Jonasssss";
$comprimentMinimo = 8;

if(strlen ($senha) >= $comprimentMinimo) {
    echo "A senha está com a quantidade Mínima Atingida";
}else{
    echo "A senha precisa obter a quantidade Minima de: $comprimentMinimo";
}
?>
</div>
</body>
</html>