<?php
    abstract class Persona {
        protected $nombre;
        protected $edad;

        public function cargarDatos($nombre, $edad) {
            $this->nombre = $nombre;
            $this->edad = $edad;
        }

        public function imprimirDatos() {
            echo "Nombre: " . $this->nombre . "\n";
            echo "Edad: " . $this->edad . "\n";
        }
    }

    class Empleado extends Persona {
        protected $sueldo;

        public function cargarSueldo($sueldo) {
            $this->sueldo = $sueldo;
        }

        public function imprimirSueldo() {
            echo "Sueldo: " . $this->sueldo . "\n";
        }
    }

    /*$persona = new Persona(); // Esto genera un error, ya que la clase Persona es abstracta y no se pueden crear objetos de ella directamente.
    $persona->cargarDatos("Juan", 30);
    $persona->imprimirDatos(); */

    $empleado = new Empleado();
    $empleado->cargarDatos("Génesis", 26);
    $empleado->cargarSueldo(900);
    $empleado->imprimirDatos();
    $empleado->imprimirSueldo();

?>