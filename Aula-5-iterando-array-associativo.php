<?php

use Werner\Arrays\Services\ArrayUtils;

require_once 'autoload.php';

$correntistas = [
  "Giovanni",
  "João",
  "Maria",
  "Luis",
  "Luisa",
  "Rafael"
];

$saldos = [
  2500,
  3000,
  4400,
  1000,
  8700,
  9000
];

$relacionados = array_combine($correntistas, $saldos);

$saldoMaior3000 = ArrayUtils::encontrarPessoasComSaldoMaiorQue(3000, $relacionados);

echo ArrayUtils::exibirSaldo("diego", $relacionados);

echo '<pre>';
var_dump($saldoMaior3000);
echo '</pre>';
