<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumo de API BICEVIDA</title>
</head>
<body>
    
</body>
</html>

<?php

 

//url donde se encuentra archivo json para test de API BICEVIDA
$url="https://api-bicevida-test.firebaseio.com/insurance.json";
// traigo desde bd firebaseio y lo guardo en arreglo datos 
$json= file_get_contents($url);
$datos= json_decode ($json,true);
$descrip = $datos ["description"];
$imagen = $datos ["image"];
$nomseguro = $datos ["name"];
$precio = $datos ["price"];


echo "Seguros BICEVIDA";
echo "<br>";
echo "<br>";
echo "<br>";

echo "Nombre del Producto: " .$nomseguro;
echo "<br>";
echo "<br>";

echo "Descripción del Producto: " .$descrip;
echo "<br>";
echo "<br>";

echo "Valor $ " .$precio;
echo "<br>";

//var_dump($descrip);
//var_dump($datos);


?>