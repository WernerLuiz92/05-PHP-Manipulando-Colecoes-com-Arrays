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
}
