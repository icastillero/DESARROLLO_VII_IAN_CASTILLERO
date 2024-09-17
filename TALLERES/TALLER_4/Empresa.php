<?php
// Incluye las clases necesarias
require_once 'Empleado.php';
require_once 'Gerente.php';
require_once 'Desarrollador.php';
require_once 'Evaluable.php';

class Empresa {
    private $empleados = [];

    // Agregar empleados
    public function agregarEmpleado(Empleado $empleado) {
        $this->empleados[] = $empleado;
    }

    // Listar todos los empleados
    public function listarEmpleados() {
        foreach ($this->empleados as $empleado) {
            echo "Nombre: " . $empleado->getNombre() . ", ID: " . $empleado->getIdEmpleado() . ", Salario Base: $" . $empleado->getSalarioBase() . "<br>";
        }
    }

    // Calcular la nómina total
    public function calcularNominaTotal() {
        $total = 0;
        foreach ($this->empleados as $empleado) {
            $total += $empleado->getSalarioBase();
        }
        return $total;
    }

    // Evaluar desempeño de todos los empleados evaluables
    public function realizarEvaluaciones() {
        foreach ($this->empleados as $empleado) {
            if ($empleado instanceof Evaluable) {
                echo $empleado->evaluarDesempenio() . "<br>";
            }
        }
    }
}
?>
