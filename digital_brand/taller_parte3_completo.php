<?php
// Taller de Programacion Web - Parte 3: PHP

// Punto 1: datos de un usuario
$nombre = "Laura";
$edad = 20;
$ciudad = "Medellin";

// Punto 2: salario semanal
$horasTrabajadas = 40;
$valorPorHora = 12000;
$salarioSemanal = $horasTrabajadas * $valorPorHora;

// Punto 3: determinar si un numero es par o impar
$numeroParImpar = 10;
$resultadoParImpar = ($numeroParImpar % 2 === 0) ? "par" : "impar";

// Punto 4: aplicar 10% de descuento si la compra supera $100
$valorCompra = 150;
$descuento = ($valorCompra > 100) ? $valorCompra * 0.10 : 0;
$totalPagar = $valorCompra - $descuento;

// Punto 6: estudiantes inscritos
$estudiantes = ["Ana", "Carlos", "Maria", "Juan"];

// Punto 7: leer el numero enviado por el formulario, o usar 5 como ejemplo inicial
$numeroTabla = filter_input(INPUT_GET, "numeroTabla", FILTER_VALIDATE_INT);
if ($numeroTabla === false || $numeroTabla === null) {
    $numeroTabla = 5;
}

// Punto 8: determinar si el numero es positivo, negativo o cero
$numeroSigno = -3;
if ($numeroSigno > 0) {
    $resultadoSigno = "positivo";
} elseif ($numeroSigno < 0) {
    $resultadoSigno = "negativo";
} else {
    $resultadoSigno = "cero";
}

// Punto 9: sumar los numeros del 1 al 100 usando while
$contador = 1;
$suma = 0;
while ($contador <= 100) {
    $suma += $contador;
    $contador++;
}

// Punto 10: validar si el usuario es mayor de edad para alquilar libros
$edadAlquiler = 20;
$puedeAlquilar = ($edadAlquiler >= 18);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller de Programacion Web - Parte 3 PHP</title>
    <style>
        body {
            max-width: 850px;
            margin: 30px auto;
            padding: 0 20px;
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #243044;
            background-color: #f3f6fa;
        }

        h1, h2 {
            text-align: center;
        }

        section {
            margin: 20px 0;
            padding: 18px 22px;
            background-color: #ffffff;
            border: 1px solid #d8e0eb;
            border-left: 5px solid #2864dc;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(20, 40, 80, 0.08);
        }

        section h3 {
            margin-top: 0;
            color: #1749a3;
        }

        section p:last-child,
        section ul:last-child {
            margin-bottom: 0;
        }

        input, button {
            padding: 8px 10px;
            font: inherit;
        }

        button {
            color: #ffffff;
            background-color: #2864dc;
            border: 0;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #1749a3;
        }
    </style>
</head>
<body>
    <h1>Taller de Programacion Web</h1>
    <h2>Parte 3: PHP</h2>

    <section>
        <h3>Punto 1: Datos del usuario</h3>
        <p>Nombre: <?php echo htmlspecialchars($nombre, ENT_QUOTES, "UTF-8"); ?></p>
        <p>Edad: <?php echo $edad; ?> años</p>
        <p>Ciudad: <?php echo htmlspecialchars($ciudad, ENT_QUOTES, "UTF-8"); ?></p>
    </section>

    <section>
        <h3>Punto 2: Salario semanal</h3>
        <p>Horas trabajadas: <?php echo $horasTrabajadas; ?></p>
        <p>Valor por hora: $<?php echo number_format($valorPorHora, 0, ",", "."); ?> COP</p>
        <p>Salario semanal: $<?php echo number_format($salarioSemanal, 0, ",", "."); ?> COP</p>
    </section>

    <section>
        <h3>Punto 3: Numero par o impar</h3>
        <p>El numero <?php echo $numeroParImpar; ?> es <?php echo $resultadoParImpar; ?>.</p>
    </section>

    <section>
        <h3>Punto 4: Descuento de compra</h3>
        <p>Valor de la compra: $<?php echo number_format($valorCompra, 0, ",", "."); ?> COP</p>
        <p>Descuento: $<?php echo number_format($descuento, 0, ",", "."); ?> COP</p>
        <p>Total a pagar: $<?php echo number_format($totalPagar, 0, ",", "."); ?> COP</p>
    </section>

    <section>
        <h3>Punto 5: Numeros del 1 al 20</h3>
        <p>
            <?php
            for ($i = 1; $i <= 20; $i++) {
                echo $i . ($i < 20 ? ", " : "");
            }
            ?>
        </p>
    </section>

    <section>
        <h3>Punto 6: Estudiantes inscritos en el curso</h3>
        <ul>
            <?php foreach ($estudiantes as $estudiante) { ?>
                <li><?php echo htmlspecialchars($estudiante, ENT_QUOTES, "UTF-8"); ?></li>
            <?php } ?>
        </ul>
    </section>

    <section>
        <h3>Punto 7: Tabla de multiplicar</h3>
        <form method="get" action="">
            <label for="numeroTabla">Ingresa un numero:</label>
            <input type="number" id="numeroTabla" name="numeroTabla" required>
            <button type="submit">Mostrar tabla</button>
        </form>
        <p>Tabla del <?php echo $numeroTabla; ?>:</p>
        <ul>
            <?php for ($i = 1; $i <= 10; $i++) { ?>
                <li><?php echo $numeroTabla . " x " . $i . " = " . ($numeroTabla * $i); ?></li>
            <?php } ?>
        </ul>
    </section>

    <section>
        <h3>Punto 8: Numero positivo, negativo o cero</h3>
        <p>El numero <?php echo $numeroSigno; ?> es <?php echo $resultadoSigno; ?>.</p>
    </section>

    <section>
        <h3>Punto 9: Suma de los numeros del 1 al 100</h3>
        <p>La suma total es <?php echo $suma; ?>.</p>
    </section>

    <section>
        <h3>Punto 10: Validacion para alquilar libros</h3>
        <p>Edad del usuario: <?php echo $edadAlquiler; ?> años</p>
        <p><?php echo $puedeAlquilar ? "Puede alquilar libros." : "No puede alquilar libros porque es menor de edad."; ?></p>
    </section>
</body>
</html>
