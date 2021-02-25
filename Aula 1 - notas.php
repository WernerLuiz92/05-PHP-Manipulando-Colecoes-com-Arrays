<?php

$notas = [9, 3, 10, 5, 10];

$media = ($notas[0] + $notas[1] + $notas[2] + $notas[3] + $notas[4]) / count($notas);

echo "A nota de português é: {$notas[0]} <br>";
echo "A nota de matemática é: {$notas[1]} <br>";
echo "A nota de geografia é: {$notas[2]} <br>";
echo "A nota de história é: {$notas[3]} <br>";
echo "A nota de quimica é: {$notas[4]} <br>";
echo "A média é: $media <br>";
