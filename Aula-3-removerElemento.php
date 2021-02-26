<?php

declare(strict_types=1);

use Werner\Arrays\Services\ArrayUtils;

require_once 'autoload.php';

$correntistas_e_compras = [
  "Giovanni",
  "João",
  12,
  "Maria",
  25,
  "Luis",
  "Luiza",
  "12"
];

echo "<pre>";
var_dump($correntistas_e_compras);

ArrayUtils::removerElemento("12", $correntistas_e_compras);
echo "<br>";

var_dump($correntistas_e_compras);
echo "</pre>";
