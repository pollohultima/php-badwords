<?php

$bad_txt= "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores ipsum aliquid minima ipsam ratione tenetur ipsum velit dicta deleniti reiciendis." ;

$censor= $_GET["censor"];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Testo</h1>
<p><?= $bad_txt ?></p>

<h2>Lunghezza testo uncensored</h2>
<p><?= strlen($bad_txt) ?></p>

<h1>Testo censurato</h1>
<p><?= str_replace($censor,'***',$bad_txt) ?></p>

<h2>Lunghezza testo censurato</h2>
<p><?= strlen(str_replace($censor,'***',$bad_txt)) ?></p>




    
</body>
</html>