<?php

/////////////////////// FUNCIONES DEL EJERCICIO 1 //////////////////
function ObtenerNumero(){
    if(isset($_GET['numero']))
    {
        $num = $_GET['numero'];
        if ($num%5==0 && $num%7==0)
        {
            echo '<h3>R= El número '.$num.' SÍ es múltiplo de 5 y 7.</h3>';
        }
        else
        {
            echo '<h3>R= El número '.$num.' NO es múltiplo de 5 y 7.</h3>';
        }
    }
}

function ImprimirDatos(){
    if(isset($_POST["name"]) && isset($_POST["email"]))
        {
            echo $_POST["name"];
            echo '<br>';
            echo $_POST["email"];
        }
}
    
/////////////////////// FUNCIONES DEL EJERCICIO 2 //////////////////

function NumerosAleatorios(){
    $matriz = [];
    $condicion = [0,0,0];
    $inicial = [1,0,1];
    $bandera = 0;
    for($i = 0; $bandera == 0; $i++){
        for($j = 0; $j < 3; $j++){
            $aleatorio = random_int(1, 500);
            $matriz[$i][$j] = $aleatorio;
            $condicion [$j]= $aleatorio % 2;
            echo $aleatorio." ";
        }
        echo "<br>";

        if($condicion == $inicial){
            $bandera = 1;
        }else{
            $bandera = 0;
        }
        //imprimirMatriz($matriz); 
    }
    
    
}

function imprimirMatriz($matriz){
    foreach ($matriz as $fila) {
        foreach ($fila as $elemento) {
            echo $elemento . " ";
        }
        echo "<br>";
        echo "<br>";  // Salto de línea para separar las filas
    }
}
?>