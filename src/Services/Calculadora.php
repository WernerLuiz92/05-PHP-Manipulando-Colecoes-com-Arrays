<?php

namespace Werner\Arrays\Services;

class Calculadora
{
  public function calcularMedia(array $notas): ?float
  {
    if (count($notas) === 0) {
      return null;
    }
    $soma = 0;
    for ($i = 0; $i < count($notas); $i++) {
      $soma = $soma + $notas[$i];
    }

    $media = $soma / count($notas);

    return $media;
  }
}
