<?php
    class Persona{
        private $nombre; // todo atributo debe tener su accesibilidad
        
        public function inicializar($name){
            $this->nombre = $name;
        }

        public function mostrar(){
            echo '<p>'.$this->nombre.'</p>';
        }
    }
?>