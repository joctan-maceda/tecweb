<?php
    include_once __DIR__.'/database.php';

    // SE OBTIENE LA INFORMACIÓN DEL PRODUCTO ENVIADA POR EL CLIENTE
    $producto = file_get_contents('php://input');
    $data = array();
    
    $jsonOBJ = json_decode($producto);

    echo $jsonOBJ->id;

    
    $sql = "UPDATE productos 
        SET 
            nombre = '{$jsonOBJ->nombre}', 
            marca = '{$jsonOBJ->marca}', 
            modelo = '{$jsonOBJ->modelo}', 
            precio = {$jsonOBJ->precio}, 
            detalles = '{$jsonOBJ->detalles}', 
            unidades = {$jsonOBJ->unidades}, 
            imagen = '{$jsonOBJ->imagen}'
        WHERE id = {$jsonOBJ->id}";
    
    $result = mysqli_query($conexion, $sql);
    
    if(!$result){
        die('Query failed');
    }

    echo 'bien echo';

    /*
    if(!empty($producto)) {
        // SE TRANSFORMA EL STRING DEL JASON A OBJETO
        $jsonOBJ = json_decode($producto);
        // SE ASUME QUE LOS DATOS YA FUERON VALIDADOS ANTES DE ENVIARSE
        $sql = "SELECT * FROM productos WHERE nombre = '{$jsonOBJ->nombre}' AND eliminado = 0";
	    $result = $conexion->query($sql);
        
        if ($result->num_rows == 0) {
            $conexion->set_charset("utf8");
            $sql = "INSERT INTO productos VALUES (null, '{$jsonOBJ->nombre}', '{$jsonOBJ->marca}', '{$jsonOBJ->modelo}', {$jsonOBJ->precio}, '{$jsonOBJ->detalles}', {$jsonOBJ->unidades}, '{$jsonOBJ->imagen}', 0)";
            echo $sql;
            if($conexion->query($sql)){
                $data['status'] =  "success";
                $data['message'] =  "Producto agregado";
            } else {
                $data['message'] = "ERROR: No se ejecuto $sql. " . mysqli_error($conexion);
            }
        }

        $result->free();
        // Cierra la conexion
        $conexion->close();
    }

    // SE HACE LA CONVERSIÓN DE ARRAY A JSON
    echo json_encode($data, JSON_PRETTY_PRINT);*/
?>