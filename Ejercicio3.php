<?php
    class Persona{
        private $nombre;
        private $edad;
        
        public function cargarDatos($nom, $edad){
            $this->nombre = $nom;
            $this->edad = $edad;
        }
        
        public function imprimirDatos(){
            echo "Nombre: ".$this->nombre . "\n";
            echo "Edad: ".$this->edad . "\n";
        }
    }

    class Empleado extends Persona{
        private $sueldo;
        
        public function cargarSueldo($sueldo){
            $this->sueldo = $sueldo;
        }
        
        public function imprimirDatos(){
            parent::imprimirDatos();
            echo "Sueldo: ".$this->sueldo . "\n";
        }
    }

    $persona = new Persona();
    $persona->cargarDatos("Luis", 45);
    $persona->imprimirDatos();

    $empleado = new Empleado();
    $empleado->cargarDatos("Guadalupe", 25);
    $empleado->cargarSueldo(1000);
    $empleado->imprimirDatos();

?>