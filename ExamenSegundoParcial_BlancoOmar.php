<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Examen 2da Unidad</title>
</head>
<body>


<?php 
$telefonos = [
    "iPhone 16" => 23000,
    "Samsung S23" => 15000,
    "Google Pixel 7" => 10000,
    "Motorola " => 5000,
    "Xiaomi" => 5000,
];


echo "<br>Teléfonos y precios:<br>";
foreach ($telefonos as $modelo => $precio) {
    echo "$modelo: $precio <br>";
}

array_push($telefonos, ["iPhone 11" => 6000, "Alcatel Pro Max" => 8999]);

asort($telefonos);

echo "<br>Teléfonos y precios (ordenados):<br>";
foreach ($telefonos as $modelo => $precio) {
    echo "$modelo: $precio<br>";
}
 ?>
</body>
</html>