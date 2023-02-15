<?php
    class Persona{
        protected $nombre;
        protected $edad;

        public function cargarDatos($nom, $ed){
            $this->nombre = $nom;
            $this->edad = $ed;
        }

        public function imprimirDatos(){
            echo "Nombre: ".$this->nombre."\n";
            echo "Edad: ".$this->edad."\n";
        }
    }

    class Empleado extends Persona{
        private $sueldo;
    
        public function cargarSueldo($sl){
            $this->sueldo = $sl;
        }
    
        public function imprimirSueldo(){
            echo "Sueldo: ".$this->sueldo."\n";
        }
    }

    $empleado = new Empleado();
    $empleado->cargarDatos("Karla Hernández", 25);
    $empleado->cargarSueldo(1500);
    $empleado->imprimirDatos();
    $empleado->imprimirSueldo();

    // Tratar de modificar el atributo edad
    // $empleado->edad = 35; // esto generará un error, ya que el atributo edad es protegido y no se puede acceder desde fuera de la clase

?>