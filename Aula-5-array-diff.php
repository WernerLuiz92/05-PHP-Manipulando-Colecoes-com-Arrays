<?php

require_once 'autoload.php';

$correntistas = [
  'Giovanni',
  'João',
  'Maria',
  'Luís',
  'Luísa',
  'Rafael'
];

$correntistasNaoPagantes = [
  'Luís',
  'Luísa',
  'Rafael'
];

$correntistasPagantes = array_diff($correntistas, $correntistasNaoPagantes);

echo '<pre>';
var_dump($correntistasPagantes);
echo '</pre>';
