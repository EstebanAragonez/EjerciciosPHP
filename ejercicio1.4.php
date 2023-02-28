<?php
  for ($i = 1; $i <= 9; $i++) {
    echo "<h3>Tabla del " . $i . ":</h3>";
    for ($j = 1; $j <= 10; $j++) {
      $resultado = $i * $j;
      echo $i . " x " . $j . " = " . $resultado . "<br>";
    }
    echo "<br>";
  }
?>