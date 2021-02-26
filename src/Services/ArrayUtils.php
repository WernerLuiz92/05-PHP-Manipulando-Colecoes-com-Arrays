<?php

declare(strict_types=1);

namespace Werner\Arrays\Services;

class ArrayUtils
{

  public static function removerElemento(string $elemento, array &$array)
  {
    $posicao = array_search($elemento, $array, true);

    if (!is_int($posicao)) {
      echo "Elemento não encontrado no Array";
      return;
    }

    unset($array[$posicao]);
  }

  public static function encontrarPessoasComSaldoMaiorQue(int $valor, array $array): array
  {
    foreach ($array as $titular => $saldo) {
      if ($saldo > $valor) {
        $result[$titular] = $saldo;
      }
    }
    return $result;
  }

  public static function exibirSaldo(string $titular, array $correntistas): string
  {
    if (array_key_exists($titular, $correntistas)) {
      return "O saldo da sua conta é: R$ {$correntistas[$titular]} <br>";
    }

    return "Correntista não encontrado!";
  }
}
