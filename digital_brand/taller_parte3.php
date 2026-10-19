<?php
// Taller de Programacion Web - Parte 3: PHP
// Punto 1: almacenar nombre, edad y ciudad de un usuario.

$nombre = "Laura";
$edad = 20;
$ciudad = "Bogota";

// Punto 2: calcular el salario semanal.
$horasTrabajadas = 40;
$valorPorHora = 12000;
$salarioSemanal = $horasTrabajadas * $valorPorHora;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller de Programacion Web - Parte 3</title>
</head>
<body>
    <h1>Taller de Programacion Web - Parte 3</h1>
    <h2>Punto 1: Datos del usuario</h2>

    <p>Nombre: <?php echo htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8'); ?></p>
    <p>Edad: <?php echo htmlspecialchars((string) $edad, ENT_QUOTES, 'UTF-8'); ?></p>
    <p>Ciudad: <?php echo htmlspecialchars($ciudad, ENT_QUOTES, 'UTF-8'); ?></p>

    <h2>Punto 2: Salario semanal</h2>
    <p>Horas trabajadas: <?php echo $horasTrabajadas; ?></p>
    <p>Valor por hora: $<?php echo number_format($valorPorHora, 0, ',', '.'); ?> COP</p>
    <p>Salario semanal: $<?php echo number_format($salarioSemanal, 0, ',', '.'); ?> COP</p>
</body>
</html>
