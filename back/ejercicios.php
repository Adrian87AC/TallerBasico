<?php
/*
$nombre="Adrián";
$apellido1="Álvarez";
$apellido2="Cotta";
$edad=20;
$altura=1.75;
$soltero=true;

var_dump($nombre);
echo "<br></br>";
echo "<br></br>";

var_dump($nombre, $apellido1, $apellido2);
echo "<br></br>";
echo "<br></br>";

var_dump($edad);
echo "<br></br>";
echo "<br></br>";

var_dump($altura);
echo "<br></br>";
echo "<br></br>";

var_dump($soltero);

$Persona=["nombre"->"Adrián", "apellido1"->"Álvarez","apellido2"->"Cotta","edad"->20, "altura"->1.75, "soltero"=>true];
var_dump($Persona);

define("NOMBRE_CURSO", "taller de PHP");
echo NOMBRE_CURSO;

$tipoNULL=Null;

if(is_null($tipoNull)){
    echo "es nulo";
}


$numero1 = 5;
$numero2 = 6;

$resultado = $numero1 + $numero2;
echo $resultado;



echo "El resultado es $resultado , resultado";

$resultado = 5 + 3 * 2; 
echo $resultado; 


$resultado = (5 + 3) * 2; // Primero se realiza la suma
echo $resultado; // Imprime 16

$a = 10;
$b = 3;
echo $a + $b; // Imprime 13
echo $a - $b; // Imprime 7
echo $a * $b; // Imprime 30
echo $a / $b; // Imprime 3.3333
echo $a % $b; // Imprime 1 (resto de la división)
echo $a ** $b; // Imprime 1000 (10 elevado a la potencia de 3)

$nombre = "Adrián";
$saludo = "Hola, " . $nombre . "!";
echo $saludo; // Imprime "Hola, Juan!"



$a = 3.0;
$b = 3;

echo $a==$b;

if($a!=$b){
    echo "Es igual";
}else
    echo "No es igual";

var_dump($a==$b);

if($a===$b)
*/
//○ Define variables de distintos tipos: un entero, un flotante, una cadena y un
//booleano. Luego imprime el valor y tipo de cada variable utilizando la función
//var_dump().
//○ Crea un array asociativo que contenga información de una persona (nombre,
//edad, ciudad).
//○ Define una constante llamada NOMBRE_CURSO con el valor "Programación
//PHP" y muestra su valor en pantalla.
//○ Crea una función que reciba un array de números y devuelva la suma de
//todos sus elementos. Llámala con un array de ejemplo y muestra el
//resultado.
//○ Declara una variable con el valor null y utiliza la función is_null() para
//verificar si la variable tiene valor null.



/*
Defina dos variables con valores numéricos y realice operaciones aritméticas
básicas (suma, resta, multiplicación, división, módulo).
○ Use operadores de comparación para verificar si una variable es mayor,
menor o igual que la otra.
○ Usa un operador ternario para determinar si una variable es par o impar.
○ Aplica operadores lógicos para verificar si ambas variables son mayores de
10 y muestra un mensaje dependiendo del resultado.
○ Implementa operadores de incremento y decremento y muestra cómo
cambian los valores de las variables.
*/

$num1 = 23;
$num2 = 45;
$suma = $num1 + $num2;
$resta = $num1 - $num2;
$multiplic = $num1 * $num2;
$división = $num1 / $num2;
$modulo = $num1 % $num2; 
echo $suma;
echo "<br></br>";
echo $resta;
echo "<br></br>";
echo $multiplic;
echo "<br></br>";
echo $división;
echo "<br></br>";
echo $modulo;

