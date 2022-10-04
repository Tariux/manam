<?php
    session_start();
    require("./Manam.php");
    $Manam = new Manam;

?>

<!DOCTYPE html>
<html lang="fa">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="//fdn.fontcdn.ir"><link rel="preconnect" href="//v1.fontapi.ir"><link href="https://v1.fontapi.ir/css/Vazir" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/main.scss">

    <title>Manam Debug</title>
</head>

<body>
    <?php

    include_once("./template/simpleAuthButton.php");
    ?>
    
</body>

</html>