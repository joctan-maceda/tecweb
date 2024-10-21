<?php
    include_once __DIR__.'/database.php';

    $id = $_POST['id'];
    $query = "SELECT * FROM productos WHERE id = $id";
    $result = mysqli_query($conexion, $query);

    if(!$result){
        die('Query failed');
    }
    
    $json = array();

    while($row = mysqli_fetch_array($result)) {
        $json[] = array(
            'nombre' => $row['nombre'],
            'precio' => $row['precio'],
            'unidades' => $row['unidades'],
            'modelo' => $row['modelo'],
            'marca' => $row['marca'],
            'detalles' => $row['detalles'],
            'imagen' => $row['imagen']
        );
    }
    // SE HACE LA CONVERSIÓN DE ARRAY A JSON
    echo json_encode($json[0], JSON_PRETTY_PRINT);
?> 