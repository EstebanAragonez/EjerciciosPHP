<?php
  $estudiantes = [
    [
      "nombre" => "Leonardo",
      "notas" => [95, 90, 85],
    ],
    [
      "nombre" => "Jorman",
      "notas" => [90, 95, 88],
    ],
    [
      "nombre" => "Santiago",
      "notas" => [60, 50, 45],
    ],
  ];

  foreach ($estudiantes as $estudiante) {
    $notas = $estudiante["notas"];
    $promedio = array_sum($notas) / count($notas);
    echo "Estudiante: " . $estudiante["nombre"] . "<br>";
    echo "Notas: " . implode(", ", $notas) . "<br>";
    echo "Promedio: " . round($promedio, 2) . "<br>";
    if ($promedio >= 70) {
      echo "Resultado: Aprobado<br><br>";
    } else {
      echo "Resultado: No aprobado<br><br>";
    }
  }
?>