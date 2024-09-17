<?php
// Incluye las clases y la interfaz necesarias
require_once 'Empleado.php';
require_once 'Gerente.php';
require_once 'Desarrollador.php';
require_once 'Evaluable.php';
require_once 'Empresa.php';

// Crear instancias de Gerente y Desarrollador
$gerente = new Gerente("Ana Pérez", 1, 5000, "Ventas");
$desarrollador = new Desarrollador("Luis Gómez", 2, 4000, "PHP", "Intermedio");

// Crear instancia de Empresa
$empresa = new Empresa();

// Agregar empleados a la empresa
$empresa->agregarEmpleado($gerente);
$empresa->agregarEmpleado($desarrollador);

// Mostrar lista de empleados
echo "<h2>Lista de Empleados:</h2>";
$empresa->listarEmpleados();

// Calcular y mostrar la nómina total
echo "<h2>Nómina Total:</h2>";
echo "$" . $empresa->calcularNominaTotal() . "<br>";

// Realizar evaluaciones de desempeño
echo "<h2>Evaluaciones de Desempeño:</h2>";
$empresa->realizarEvaluaciones();
?>
