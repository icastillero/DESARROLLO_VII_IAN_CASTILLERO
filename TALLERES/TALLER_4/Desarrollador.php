<?php
// Incluye la clase base Empleado
require_once 'Empleado.php';
// Incluye la interfaz Evaluable
require_once 'Evaluable.php';

class Desarrollador extends Empleado implements Evaluable {
    // Propiedades adicionales
    private $lenguajePrincipal;
    private $nivelExperiencia;

    // Constructor
    public function __construct($nombre, $idEmpleado, $salarioBase, $lenguajePrincipal, $nivelExperiencia) {
        parent::__construct($nombre, $idEmpleado, $salarioBase);
        $this->lenguajePrincipal = $lenguajePrincipal;
        $this->nivelExperiencia = $nivelExperiencia;
    }

    // Métodos getter y setter para el lenguaje principal
    public function getLenguajePrincipal() {
        return $this->lenguajePrincipal;
    }

    public function setLenguajePrincipal($lenguajePrincipal) {
        $this->lenguajePrincipal = $lenguajePrincipal;
    }

    // Métodos getter y setter para el nivel de experiencia
    public function getNivelExperiencia() {
        return $this->nivelExperiencia;
    }

    public function setNivelExperiencia($nivelExperiencia) {
        $this->nivelExperiencia = $nivelExperiencia;
    }

    // Implementación del método de la interfaz Evaluable
    public function evaluarDesempenio() {
        return $this->nombre . " ha sido evaluado como Desarrollador. Desempeño: Muy Bueno.";
    }
}
?>
