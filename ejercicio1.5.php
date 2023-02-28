<?php
  $empleados = [
    [
      "nombre" => "Esteban",
      "apellido" => "Aragonez",
      "correo" => "aragonezleo@gmail.com",
      "telefono" => "3160506014",
      "direccion" => "calle 25 E #7-W17",
      "ciudad" => "Neiva",
      "empresa" => "Trinity/fs",
      "edad" => "28 años",
    ],
    [
      "nombre" => "Jorman",
      "apellido" => "Parra",
      "correo" => "jormanP@gmail.com",
      "telefono" => "3136851001",
      "direccion" => "carrera 4 # 2 A 06",
      "ciudad" => "Neiva",
      "empresa" => "Inter Rapidisimo",
      "edad" => "30 años",
    ],
    [
      "nombre" => "Santiago",
      "apellido" => "Alarcon",
      "correo" => "alarconsant@gmail.com",
      "telefono" => "3182724274",
      "direccion" => "calle 21 A #7 -07",
      "ciudad" => "Neiva",
      "empresa" => "Veterinaria",
      "edad" => "28 años",
    ],
    [
        "nombre" => "Karen",
        "apellido" => "Ramirez",
        "correo" => "karenrRa@gmail.com",
        "telefono" => "3176616215",
        "direccion" => "calle 03 A #6 -10",
        "ciudad" => "Rio Frio",
        "empresa" => "Administradora",
        "edad" => "22 años",
      ],
      [
        "nombre" => "Javier",
        "apellido" => "Artunduaga",
        "correo" => "Javierartun@gmail.com",
        "telefono" => "3144427319",
        "direccion" => "calle 14 B #30 -14",
        "ciudad" => "Neiva",
        "empresa" => "Mantenimiento en Sistemas",
        "edad" => "26 años",
      ],
  ];

  
  echo "<table style='border-collapse: collapse;'>";
  echo "<tr><th style='border: 1px solid black; padding: 5px;'>Nombre</th><th style='border: 1px solid black; padding: 5px;'>Apellido</th><th style='border: 1px solid black; padding: 5px;'>Correo</th><th style='border: 1px solid black; padding: 5px;'>Teléfono</th><th style='border: 1px solid black; padding: 5px;'>Dirección</th><th style='border: 1px solid black; padding: 5px;'>Ciudad</th><th style='border: 1px solid black; padding: 5px;'> Empresa</th><th style='border: 1px solid black; padding: 5px;'>Edad</th></tr>";
  foreach ($empleados as $empleado) {
    echo "<tr>";
    echo "<td style='border: 1px solid black; padding: 5px;'>" . $empleado["nombre"] . "</td>";
    echo "<td style='border: 1px solid black; padding: 5px;'>" . $empleado["apellido"] . "</td>";
    echo "<td style='border: 1px solid black; padding: 5px;'>" . $empleado["correo"] . "</td>";
    echo "<td style='border: 1px solid black; padding: 5px;'>" . $empleado["telefono"] . "</td>";
    echo "<td style='border: 1px solid black; padding: 5px;'>" . $empleado["direccion"] . "</td>";
    echo "<td style='border: 1px solid black; padding: 5px;'>" . $empleado["ciudad"] . "</td>";
    echo "<td style='border: 1px solid black; padding: 5px;'>" . $empleado["empresa"] . "</td>";
    echo "<td style='border: 1px solid black; padding: 5px;'>" . $empleado["edad"] . "</td>";
    echo "</tr>";
  }
  echo "</table>";
?>