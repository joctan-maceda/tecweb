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

    $contador = 0;
    do {
        
        $aleatorio1 = random_int(1, 500);
        $aleatorio2 = random_int(1, 500);
        $aleatorio3 = random_int(1, 500);
        echo "$aleatorio1, $aleatorio2, $aleatorio3 <br>";
        $contador++;

    } while (!(($aleatorio1 % 2 != 0) && ($aleatorio2 % 2 == 0) && ($aleatorio3 % 2 != 0))); // Repite mientras no cumpla con la condición

    // Muestra el número de iteraciones realizadas
    echo ($contador*3)." numero obtenidos en $contador iteraciones.";

}

function Multiplo_While(){

    $aleatorio1 = random_int(1, 100);
    echo "Numeros anteriores: <br>";
    while((($num = $_GET['numero']) % $aleatorio1) != 0){
        $aleatorio1 = random_int(1, 100);
        echo "$aleatorio1<br>";
    }
    echo "Los numeros fueron: Aleatorio = $aleatorio1 , Obtenido por GET = $num";
}

function Multiplo_DoWhile(){
    echo "Numeros anteriores: <br>";
    do{
        $aleatorio1 = random_int(1, 100);
        echo "$aleatorio1<br>";
    }while((($num = $_GET['numero']) % $aleatorio1) != 0);
    echo "Los numeros fueron: Aleatorio = $aleatorio1 , Obtenido por GET = $num";
}

function Ejercicio_4(){
    
    for($i = 97; $i<123 ; $i++){
        $arreglo[$i] = chr($i);
        
    }

    echo "<table>";
    foreach ($arreglo as $key => $value){
        echo "<tr>";
        echo "<td>". htmlspecialchars($key)."</td>";  
        echo "<td>". htmlspecialchars($value)."</td>";         
        echo "</tr>";
    }
    echo "</table>";
}

function Ejercicio_5(){
    if(isset($_POST["edad"]) && isset($_POST["sexo"]))
        {
            $edad = $_POST["edad"];
            $sexo = $_POST["sexo"];
            
            if( $edad >= 18 && $edad <=35 && $sexo == 'femenino'){
                echo "Bienvenida, usted esta en el rango permitido";
            }else{
                echo "ERRORRRRR!";
            }
        }
}
?>