<?php
    class Menu{
        private $opciones = NULL;
        private $direccion;

        public function __construct($dir){
            $this->opciones = array();
            $this->direccion = $dir;

        }

        public function insertar_opcion($op){
            $this->opciones[] = $op;
        }

        private function graficar_horizontal(){
            for($i=0; $i<count($this->opciones); $i++){
                //Se invoca al metodo del objeto contenido en la posicion $i
                $this->opciones[$i]->graficar();
                echo ' - ';
            }
        }

        private function graficar_vertical(){
            for($i=0; $i<count($this->opciones); $i++){
                //Se invoca al metodo del objeto contenido en la posicion $i
                $this->opciones[$i]->graficar();
                echo '<br>';
            }
        }

        public function graficar(){
            if ($this->direccion === 'horizontal'){ // Verifica ed manera muy precisa, debe ser exactamente igual
                $this->graficar_horizontal();
            }else if ($this->direccion === 'vertical'){
                $this->graficar_vertical();
            }
        }
    }
?>