<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Números com Loop While</title>
</head>
<body>

<div class="container">

<h1>Soma de Números com Loop while</h1>
<?
   $soma = 0;
   $numero = 1;

while($numero <= 100){
   $soma += $numero;
   $numero++;
   echo "A soma dos números de 1 a 100 é: $soma";
}


?>
</div>
</body>
</html>