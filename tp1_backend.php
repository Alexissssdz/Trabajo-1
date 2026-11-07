<?php

echo "<h2>Ejercicio 1: Impresión Directa</h2>";
echo "Hola mundo";
echo "<hr>";



echo "<h2>Ejercicio 2: Variable con cadena</h2>";
$saludo = "Hola mundo";
echo $saludo;
echo "<hr>";



echo "<h2>Ejercicio 3: Operaciones Aritméticas</h2>";
$num1 = 20;
$num2 = 6;


$suma          = $num1 + $num2;
$resta         = $num1 - $num2;
$multiplicacion = $num1 * $num2;
$division      = (int)($num1 / $num2); 
$resto         = $num1 % $num2;        


echo "Número 1: " . $num1 . "<br>";
echo "Número 2: " . $num2 . "<br><br>";

echo "Suma ($num1 + $num2): " . $suma . "<br>";
echo "Resta ($num1 - $num2): " . $resta . "<br>";
echo "Multiplicación ($num1 * $num2): " . $multiplicacion . "<br>";
echo "División entera ($num1 / $num2): " . $division . "<br>";
echo "Resto de la división ($num1 % $num2): " . $resto . "<br>";
echo "<hr>";



echo "<h2>Ejercicio 4: Cálculo de Rectángulo</h2>";
$baseRectangulo   = 18;
$alturaRectangulo = 12;

// Fórmulas
$perimetroRectangulo = 2 * ($baseRectangulo + $alturaRectangulo);
$areaRectangulo      = $baseRectangulo * $alturaRectangulo;

// Impresión
echo "Base: " . $baseRectangulo . " cm<br>";
echo "Altura: " . $alturaRectangulo . " cm<br><br>";
echo "Perímetro del rectángulo: " . $perimetroRectangulo . " cm<br>";
echo "Área del rectángulo: " . $areaRectangulo . " cm²<br>";
echo "<hr>";



echo "<h2>Ejercicio 5: Cálculo de Círculo</h2>";
$radioCirculo = 30;
$pi           = 3.1416; 


$perimetroCirculo = 2 * $pi * $radioCirculo;
$areaCirculo      = $pi * ($radioCirculo ** 2);


echo "Radio: " . $radioCirculo . " cm<br>";
echo "Valor de Pi: " . $pi . "<br><br>";
echo "Perímetro (Circunferencia) del círculo: " . $perimetroCirculo . " cm<br>";
echo "Área del círculo: " . $areaCirculo . " cm²<br>";
?>