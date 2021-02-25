<?php

namespace Werner\Arrays\Services;

class ArrayUtils
{

  public static function removerElemento(string $elemento, array &$array)
  {
    $posicao = array_search($elemento, $array);

    if (!$posicao) {
      echo "Elemento não encontrado no Array";
      return;
    }

    unset($array[$posicao]);
  }
}
