<?php
session_start();
$correos = $_SESSION['error'];
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

echo $correos;
echo date("F");
echo "<br>";
echo date("m"); //mes
echo "<br>";
echo date("Y");//año
?>
    
</body>
</html>