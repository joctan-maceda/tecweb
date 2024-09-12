<?php
$parqueVehicular = array(
    "ABC1234" => array(
        "auto" => array(
            "marca" => "Toyota",
            "modelo" => "Corolla (2020)",
            "tipo" => "sedan"
        ),
        "propietario" => array(
            "nombre" => "Carlos Pérez",
            "ciudad" => "Monterrey",
            "direccion" => "Av. Reforma 123"
        )
    ),
    "DEF5678" => array(
        "auto" => array(
            "marca" => "Honda",
            "modelo" => "Civic (2019)",
            "tipo" => "sedan"
        ),
        "propietario" => array(
            "nombre" => "Ana Martínez",
            "ciudad" => "Guadalajara",
            "direccion" => "Calle 5 de Febrero 456"
        )
    ),
    "GHI9012" => array(
        "auto" => array(
            "marca" => "Ford",
            "modelo" => "Focus (2021)",
            "tipo" => "hatchback"
        ),
        "propietario" => array(
            "nombre" => "Luis Gómez",
            "ciudad" => "Ciudad de México",
            "direccion" => "Blvd. Insurgentes 789"
        )
    ),
    "JKL3456" => array(
        "auto" => array(
            "marca" => "Chevrolet",
            "modelo" => "Tracker (2022)",
            "tipo" => "camioneta"
        ),
        "propietario" => array(
            "nombre" => "Patricia Ruiz",
            "ciudad" => "Querétaro",
            "direccion" => "Calle Libertad 101"
        )
    ),
    "MNO7890" => array(
        "auto" => array(
            "marca" => "Nissan",
            "modelo" => "Versa (2020)",
            "tipo" => "sedan"
        ),
        "propietario" => array(
            "nombre" => "Miguel Torres",
            "ciudad" => "Puebla",
            "direccion" => "Calle 16 de Septiembre 202"
        )
    ),
    "PQR1234" => array(
        "auto" => array(
            "marca" => "Volkswagen",
            "modelo" => "Jetta (2021)",
            "tipo" => "sedan"
        ),
        "propietario" => array(
            "nombre" => "Sofia López",
            "ciudad" => "Tijuana",
            "direccion" => "Av. Revolución 303"
        )
    ),
    "STU5678" => array(
        "auto" => array(
            "marca" => "Mazda",
            "modelo" => "CX-5 (2022)",
            "tipo" => "camioneta"
        ),
        "propietario" => array(
            "nombre" => "Rafael Morales",
            "ciudad" => "San Luis Potosí",
            "direccion" => "Calle 20 de Noviembre 404"
        )
    ),
    "VWX9012" => array(
        "auto" => array(
            "marca" => "Hyundai",
            "modelo" => "Elantra (2019)",
            "tipo" => "sedan"
        ),
        "propietario" => array(
            "nombre" => "Julieta González",
            "ciudad" => "Cancún",
            "direccion" => "Av. Kukulcán 505"
        )
    ),
    "YZA3456" => array(
        "auto" => array(
            "marca" => "Kia",
            "modelo" => "Seltos (2021)",
            "tipo" => "camioneta"
        ),
        "propietario" => array(
            "nombre" => "Diego Vargas",
            "ciudad" => "Mérida",
            "direccion" => "Calle 60 606"
        )
    ),
    "BCD7890" => array(
        "auto" => array(
            "marca" => "Jeep",
            "modelo" => "Cherokee (2020)",
            "tipo" => "camioneta"
        ),
        "propietario" => array(
            "nombre" => "Natalia Martínez",
            "ciudad" => "Saltillo",
            "direccion" => "Calle Miguel Hidalgo 707"
        )
    ),
    "EFG1234" => array(
        "auto" => array(
            "marca" => "Subaru",
            "modelo" => "Impreza (2022)",
            "tipo" => "sedan"
        ),
        "propietario" => array(
            "nombre" => "Héctor Castro",
            "ciudad" => "Chihuahua",
            "direccion" => "Av. Juárez 808"
        )
    ),
    "HIJ5678" => array(
        "auto" => array(
            "marca" => "BMW",
            "modelo" => "X3 (2021)",
            "tipo" => "camioneta"
        ),
        "propietario" => array(
            "nombre" => "Verónica Ortega",
            "ciudad" => "La Paz",
            "direccion" => "Calle Morelos 909"
        )
    ),
    "KLM9012" => array(
        "auto" => array(
            "marca" => "Audi",
            "modelo" => "A3 (2020)",
            "tipo" => "sedan"
        ),
        "propietario" => array(
            "nombre" => "Eduardo Romero",
            "ciudad" => "Hermosillo",
            "direccion" => "Av. 12 de Octubre 1010"
        )
    ),
    "NOP3456" => array(
        "auto" => array(
            "marca" => "Mercedes-Benz",
            "modelo" => "C-Class (2022)",
            "tipo" => "sedan"
        ),
        "propietario" => array(
            "nombre" => "Paola Ríos",
            "ciudad" => "Ciudad Juárez",
            "direccion" => "Calle 5 de Febrero 1111"
        )
    ),
    "QRS7890" => array(
        "auto" => array(
            "marca" => "Porsche",
            "modelo" => "Macan (2021)",
            "tipo" => "camioneta"
        ),
        "propietario" => array(
            "nombre" => "Raúl Sánchez",
            "ciudad" => "Aguascalientes",
            "direccion" => "Calle San Luis 1212"
        )
    ),
    "TUV1234" => array(
        "auto" => array(
            "marca" => "Land Rover",
            "modelo" => "Discovery (2022)",
            "tipo" => "camioneta"
        ),
        "propietario" => array(
            "nombre" => "Claudia Herrera",
            "ciudad" => "Durango",
            "direccion" => "Av. Hidalgo 1313"
        )
    )
);

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




function Ejercicio_6($parqueVehicular) {
    // Mostrar información de un vehículo específico
    if (isset($_POST["matricula"]) && !isset($_POST["mostrar_todos"])) {
        $matricula = $_POST["matricula"];

        // Verifica si la matrícula existe en el parque vehicular
        if (array_key_exists($matricula, $parqueVehicular)) {
            $vehiculo = $parqueVehicular[$matricula];

            // Imprime la información del auto
            echo "<h3>Información del vehículo con matrícula $matricula:</h3>";
            echo "<table>";
            echo "<tr><th>Campo</th><th>Valor</th></tr>";
            echo "<tr><td>Marca</td><td>" . htmlspecialchars($vehiculo["auto"]["marca"]) . "</td></tr>";
            echo "<tr><td>Modelo</td><td>" . htmlspecialchars($vehiculo["auto"]["modelo"]) . "</td></tr>";
            echo "<tr><td>Tipo</td><td>" . htmlspecialchars($vehiculo["auto"]["tipo"]) . "</td></tr>";
            echo "<tr><td>Propietario</td><td>" . htmlspecialchars($vehiculo["propietario"]["nombre"]) . "</td></tr>";
            echo "<tr><td>Ciudad</td><td>" . htmlspecialchars($vehiculo["propietario"]["ciudad"]) . "</td></tr>";
            echo "<tr><td>Dirección</td><td>" . htmlspecialchars($vehiculo["propietario"]["direccion"]) . "</td></tr>";
            echo "</table>";
        } else {
            // Si la matrícula no existe, muestra un mensaje de error
            echo "<h3>Error: La matrícula $matricula no está registrada en el sistema.</h3>";
        }
    }
    
    // Mostrar todos los vehículos registrados
    if (isset($_POST["mostrar_todos"]) && $_POST["mostrar_todos"] == "true") {
        echo "<h3>Todos los vehículos registrados:</h3>";
        echo "<table>";
        echo "<tr><th>Matricula</th><th>Marca</th><th>Modelo</th><th>Tipo</th><th>Propietario</th><th>Ciudad</th><th>Dirección</th></tr>";
        foreach ($parqueVehicular as $matricula => $vehiculo) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($matricula) . "</td>";
            echo "<td>" . htmlspecialchars($vehiculo["auto"]["marca"]) . "</td>";
            echo "<td>" . htmlspecialchars($vehiculo["auto"]["modelo"]) . "</td>";
            echo "<td>" . htmlspecialchars($vehiculo["auto"]["tipo"]) . "</td>";
            echo "<td>" . htmlspecialchars($vehiculo["propietario"]["nombre"]) . "</td>";
            echo "<td>" . htmlspecialchars($vehiculo["propietario"]["ciudad"]) . "</td>";
            echo "<td>" . htmlspecialchars($vehiculo["propietario"]["direccion"]) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
}




?>