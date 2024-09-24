<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibiendo los datos del formulario
    $name = htmlspecialchars($_POST['name']);
    $marca = htmlspecialchars($_POST['marca']);
    $modelo = htmlspecialchars($_POST['modelo']);
    $precio = htmlspecialchars($_POST['precio']);
    $detalles = htmlspecialchars($_POST['detalles']);
    $unidades = htmlspecialchars($_POST['unidades']);
    $imagen = htmlspecialchars($_POST['imagen']);
    $eliminado = htmlspecialchars($_POST['eliminado']);
    
    // Consulta para verificar si ya existe
    /** SE CREA EL OBJETO DE CONEXION */
    @$link = new mysqli('localhost', 'root', 'Diosesamor577240323', 'marketzone');	

    /** comprobar la conexión */
    if ($link->connect_errno) 
    {
        die('Falló la conexión: '.$link->connect_error.'<br/>');
        /** NOTA: con @ se suprime el Warning para gestionar el error por medio de código */
    }
    
    $sql = "SELECT * FROM productos WHERE nombre = ? AND marca = ? AND modelo = ?";
    $stmt = $link->prepare($sql);
    $stmt->bind_param("sss", $name, $marca, $modelo);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "<div class= 'error'>El producto ya existe. Por favor, introduce un producto diferente</div>";
    } else {
                /** Crear una tabla que no devuelve un conjunto de resultados */
        $sql = /*"INSERT INTO productos ( nombre, marca, modelo, precio, detalles, unidades, imagen)
        VALUES ( 'AppleWatch', 'Apple', 'Watch', 1050.99, 'Reloj inteligente de alto rendimiento', 15, 'img/applewacth.png')";
        */
        
        "INSERT INTO productos (id, nombre, marca, modelo, precio, detalles, unidades, imagen, eliminado)
        VALUES (null, '{$name}', '{$marca}', '{$modelo}', {$precio}, '{$detalles}', {$unidades}, '{$imagen}', '0')";
        if ( $link->query($sql) ) 
        {
            echo "<div class='success'>Producto insertado con ID: ".$link->insert_id."</div>";
        }
        else
        {
            echo "<div class = 'error'>El Producto no pudo ser insertado =(</div>";
        }

        echo "<h1>Registro Completo</h1>";
        echo "<p><strong>Nombre:</strong> $name</p>";
        echo "<p><strong>Marca:</strong> $marca</p>";
        echo "<p><strong>Modelo:</strong> $modelo</p>";
        echo "<p><strong>Precio:</strong><br> $precio</p>";
        echo "<p><strong>Detalles:</strong> $detalles</p>";
        echo "<p><strong>Unidades:</strong> $unidades</p>";
        echo "<p><strong>Imagen:</strong> $imagen</p>";
        echo "<p><strong>Eliminado:";
        if ($eliminado == 0){
            echo "</strong> NO ELIMINADO </p>";
        }else {
            echo "</strong> ELIMINADO </p>";
        }
        
    }

    $stmt->close();
    $link->close();
    // Mostrando los datos
    
    
    
}/*
$nombre = 'nombre_producto';
$marca  = 'marca_producto';
$modelo = 'modelo_producto';
$precio = 1.0;
$detalles = 'detalles_producto';
$unidades = 1;
$imagen   = 'img/imagen.png';

/** SE CREA EL OBJETO DE CONEXION 
@$link = new mysqli('localhost', 'root', 'Diosesamor577240323', 'marketzone');	

/** comprobar la conexión 
if ($link->connect_errno) 
{
    die('Falló la conexión: '.$link->connect_error.'<br/>');
    /** NOTA: con @ se suprime el Warning para gestionar el error por medio de código 
}

/** Crear una tabla que no devuelve un conjunto de resultados 
$sql = "INSERT INTO productos VALUES (null, '{$nombre}', '{$marca}', '{$modelo}', {$precio}, '{$detalles}', {$unidades}, '{$imagen}')";
if ( $link->query($sql) ) 
{
    echo 'Producto insertado con ID: '.$link->insert_id;
}
else
{
	echo 'El Producto no pudo ser insertado =(';
}

$link->close();*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #218838;
        }

        .error {
            color: red;
            font-size: 30px;
            margin-top: 50px;
        }

        .success {
            color: green;
            font-size: 20px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    
</body>
</html>