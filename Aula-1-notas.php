<?php

require_once 'autoload.php';

use Werner\Arrays\Services\Calculadora;


$notas = [1, 2, 3, 4];

$calculadora = new Calculadora;

$media = $calculadora->calcularMedia($notas);

echo "A nota de português é: {$notas[0]} <br>";
echo "A nota de matemática é: {$notas[1]} <br>";
echo "A nota de geografia é: {$notas[2]} <br>";
echo "A nota de história é: {$notas[3]} <br>";
echo "A nota de quimica é: {$notas[4]} <br>";
echo "A nota de artes é: {$notas[5]} <br>";

if (!$media) {
  echo "As notas não foram preenchidas, verifique";
} else {
  echo "A média é: $media";
}
