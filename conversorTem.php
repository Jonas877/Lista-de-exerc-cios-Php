<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Temperatura</title>
</head>
<body>
    
<div class="container">

<h1>Conversor de Temperatura</h1>
<?php

$temperaturaCelsius = 30;
$temperaturaFahrenheit = 0;

$temperaturaFahrenheit = ($temperaturaCelsius * 9 / 5) +32;
echo "A temperatura em Fahrenheit é de:  $temperaturaFahrenheit";

?>
</div>
</body>
</html>