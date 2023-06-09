<?php
define('PI', 3.141592); // Definindo a constante PI

$raio = 5; // Definindo o valor do raio da esfera

$area = 4 * PI * pow($raio, 2); // Calculando a área da esfera
$volume = (4/3) * PI * pow($raio, 3); // Calculando o volume da esfera

echo "Raio: " . $raio . "\n";
echo "Área: " . $area . "\n";
echo "Volume: " . $volume . "\n";
?>