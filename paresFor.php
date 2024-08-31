<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Pares com FOR</title>
</head>
<body>
    
<div class="container">

<h1>Números pares com FOR</h1>
<?php

$numero = 1;

for($numero = 1; $numero <=50; $numero++) {
    if($numero % 2 ==0) {
        echo "$numero É Par<br><br>";
    }
}

?>
</div>
</body>
</html>