<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consumo de API BICEVIDA</title>
</head>
<body>
    <form class="" action="" method="get">
        <label for="insurance"></label>
        <input type="text" name="insurance" value="">
        <button type="submit" name="button">Enviar</button>
    </form>
</body>
</html>

<?php

 

//echo "Prueba API BICEVIDA"
$url="https://my-primera-api.firebaseio.com/insurance.json";
// traigo desde bd firebaseio y lo guardo en arreglo datos 
$json= file_get_contents($url);
$datos= json_decode ($json,true);
$descrip = $datos ["description"];
$imagen = $datos ["image"];
$nomseguro = $datos ["name"];
$precio = $datos ["price"];

//$imagen = imagecreatefrompng ('https://ventaenlinea.bicevida.cl/pub/media/catalog/product/cache/69eb2560c3d44c78f7327201dc5a282b/i/m/img-01.jpg');
//header ('Content-Type:image/png');
//imagepng ($imagen);
//imagedestroy ($imagen);

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