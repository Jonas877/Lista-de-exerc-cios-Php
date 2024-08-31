<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatorial com FOR</title>
</head>
<body>
    
<div class="container">

<h1>Fatorial com FOR</h1>
<?php

$numero = 5;
$fatorial = 1;
$i = 1;

for($i = 1; $i <= $numero; $i++) {
    $fatorial *= $i;
    echo "O Fatorial do $numero é $fatorial<br><br>";
}

?>
</div>
</body>
</html>