<?php

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

//verifica se a chave existe no array
//array_key_exists("joao", $relacionados);
$chave = "Maria";

if (array_key_exists($chave, $relacionados)) {
  echo "O saldo da sua conta é: R$ {$relacionados[$chave]} <br>";
} else {
  echo "Correntista não encontrado!";
}

echo '<pre>';
var_dump($relacionados);
echo '</pre>';
