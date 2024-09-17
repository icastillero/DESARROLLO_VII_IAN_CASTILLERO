<?php
// Incluye la clase base Empleado
require_once 'Empleado.php';
// Incluye la interfaz Evaluable
require_once 'Evaluable.php';

class Gerente extends Empleado implements Evaluable {
    // Propiedad adicional
    private $departamento;

    // Constructor
    public function __construct($nombre, $idEmpleado, $salarioBase, $departamento) {
        parent::__construct($nombre, $idEmpleado, $salarioBase);
        $this->departamento = $departamento;
    }

    // Método getter y setter para el departamento
    public function getDepartamento() {
        return $this->departamento;
    }

    public function setDepartamento($departamento) {
        $this->departamento = $departamento;
    }

    // Método para asignar bonos
    public function asignarBonos($monto) {
        $this->salarioBase += $monto;
    }

    // Implementación del método de la interfaz Evaluable
    public function evaluarDesempenio() {
        return $this->nombre . " ha sido evaluado como Gerente. Desempeño: Excelente.";
    }
}
?>
