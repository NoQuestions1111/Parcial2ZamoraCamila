<?php 


$autos =
$Carros = [
    ["Carro" => "lamborginni", "Precio" => 280000],
    ["Carro" => "vocho", "Precio" => 4000],
    ["Carro" => "combi", "Precio" => 500000],
    ["Carro" => "supra", "Precio" => 5000],
    ["Carro" => "combi", "Precio" => 1000],
];


usort($Carros, function($a, $b) {
    return $a['Precio'] <=> $b['Precio'];
});


echo "Carros y sus Precios: <br>";
echo "Carros antes de ordenar: <br>";
foreach ($Carros as $Carro) {
    echo "Carro: {$Carro['Carro']}, Precio: {$Carro['Precio']}<br>";
}


array_push($Carros, ["Carro" => "Convertible", "Precio" => 29000]);
array_push($Carros, ["Carro" => "golft", "Precio" => 3000]);

echo "<br> Dos Carros Mas: <br>";
echo "Carros despues de ordenar: <br>";

foreach ($Carros as $Carro) {
    echo "Carro: {$Carro['Carro']}, Precio: {$Carro['Precio']}<br>";
}
?>

?>
