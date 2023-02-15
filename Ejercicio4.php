<?php
    class CabeceraPagina{
        private $titulo;
        private $color;
        private $fuente;
        private $alineacion;

        public function cargarPropiedades($tit, $col, $fnt){
            $this->titulo = $tit;
            $this->color = $col;
            $this->fuente = $fnt;
        }

        public function alineacionTitulo($aln){
            $this->alineacion = $aln;
        }

        public function imprimirPropiedades(){
            echo "Titulo: ".$this->titulo."\n";
            echo "Color: ".$this->color."\n";
            echo "Fuente: ".$this->fuente."\n";
            echo "Alineacion del titulo: ".$this->alineacion."\n";
        }
    }

    $cabecera = new CabeceraPagina();
    $cabecera->cargarPropiedades("Hello World", "Rojo", "Times New Roman", "centrado");
    $cabecera->alineacionTitulo("derecha");
    $cabecera->imprimirPropiedades();

?>