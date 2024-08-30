<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificação notas Escolares</title>
</head>
<body>
    
<div class="container">

<h1>Classificação notas Escolares</h1>
<?php

$nota = 40;

if($nota >=90 && $nota <=100){
echo"A nota é A: ";

}else if($nota >=80 && $nota <=89) {
 echo"A nota está classificada como B: ";

}else if($nota >= 70 && $nota <=79) {
 echo"A nota está classificada como C: ";

}else if($nota >= 60 && $nota <=69) {
    echo"A nota está classificada como D: ";

}else if($nota <= 60){
    echo"A nota está classificada como F: ";
}
?>
</div>
</body>
</html>