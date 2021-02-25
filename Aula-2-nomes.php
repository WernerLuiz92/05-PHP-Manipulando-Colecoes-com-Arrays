<?php

$nomes = "Giovani, João, Maria, Pedro";

$arrNomes = explode(", ", $nomes);

foreach ($arrNomes as $nome) {
  echo "<p>$nome</p>";
}

$strNomes = implode(", ", $arrNomes);

echo $strNomes;
