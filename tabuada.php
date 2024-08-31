<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada com FOR</title>
</head>
<body>
    
<div class="container">

<h1>Tabuada com FOR</h1>
<?php

  $numero = 5;
  $i = 0;
  $resultado = 0;

  for($i = 1; $i <=10; $i++) {
    $resultado = $numero * $i;
    echo "$numero * $i = $resultado<br><br>";
  }

?> 
</div>
</body>
</html>