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
    
    // Mostrando los datos
    echo "<h1>Registro Completo</h1>";
    echo "<p><strong>Nombre:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $marca</p>";
    echo "<p><strong>Teléfono:</strong> $modelo</p>";
    echo "<p><strong>Razón por la que tus tenis son feos:</strong><br> $precio</p>";
    echo "<p><strong>Color seleccionado:</strong> $detalles</p>";
    echo "<p><strong>Nombre:</strong> $unidades</p>";
    echo "<p><strong>Email:</strong> $imagen</p>";
    echo "<p><strong>Teléfono:</strong> $eliminado</p>";
    
    
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