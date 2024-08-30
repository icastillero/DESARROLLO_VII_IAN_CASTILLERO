<?php
// Definición de variables
$nombre_completo = "Ian Yassir Castillero";
$edad = 32;
$correo="ian.castillero@utp.ac.pa";
$telefono = "+507 6897-4897";

// Definición de constante
define("OCUPACION", "Estudiante");

// Métodos de concatenación e impresión
$mensaje1 = "Hola, mi nombre es " . $nombre_completo . ", con" . $edad ." años de edad. Mi numero de contacto es: ".$telefono."";
$mensaje2 = "Nombre Completo: $nombre_completo y soy " . OCUPACION . ", mi correo electronico es: ".$correo." .";

echo $mensaje1 . "<br>";
print($mensaje2 . "<br>");

printf("En resumen: %s, %d años, %s, %s<br>", $nombre_completo, $edad, $correo, OCUPACION);
echo "<br>Información de debugging:<br>";
var_dump($nombre_completo);
echo "<br>";
var_dump($edad);
echo "<br>";
var_dump($correo);
echo "<br>";
var_dump(OCUPACION);
echo "<br>";

?>

