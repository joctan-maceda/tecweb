<?php
    header("Content-Type: application/xhtml+xml; charset=utf-8"); 
    echo '<?xml version="1.0" encoding="UTF-8"?>'; // Importante para XHTML
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Productos con stock limitado</title>
</head>
<body>
    <h1>Listado de productos vigentes</h1>
    <?php

     @$link = new mysqli('localhost', 'root', 'Diosesamor577240323', 'marketzone');
     // Comprobar la conexión
     if ($link->connect_errno) {
        die('<p>Falló la conexión: ' . htmlspecialchars($link->connect_error, ENT_QUOTES, 'UTF-8') . '</p>');
    }

    // Ejecutar consulta
    if ($result = $link->query("SELECT * FROM productos WHERE eliminado  = 0")) {
        // Verificar si hay resultados
        if ($result->num_rows > 0) {
            echo '<table border="1">';
            echo '<tr><th>ID</th><th>Nombre</th><th>Marca</th><th>Modelo</th><th>Precio</th><th>Detalles</th><th>Unidades</th><th>Imagen</th></tr>';

            // Recorrer los resultados y mostrarlos en la tabla
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8') . '</td>';
                echo '<td>' . htmlspecialchars($row['nombre'], ENT_QUOTES, 'UTF-8') . '</td>';
                echo '<td>' . htmlspecialchars($row['marca'], ENT_QUOTES, 'UTF-8') . '</td>';
                echo '<td>' . htmlspecialchars($row['modelo'], ENT_QUOTES, 'UTF-8') . '</td>';
                echo '<td>' . htmlspecialchars($row['precio'], ENT_QUOTES, 'UTF-8') . '</td>';
                echo '<td>' . htmlspecialchars($row['detalles'], ENT_QUOTES, 'UTF-8') . '</td>';
                echo '<td>' . htmlspecialchars($row['unidades'], ENT_QUOTES, 'UTF-8') . '</td>';
                echo '<td><img src="' . htmlspecialchars($row['imagen'], ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($row['nombre'], ENT_QUOTES, 'UTF-8') . '" width="100" /></td>';
                echo '</tr>';
            }

            echo '</table>';
        } else {
            echo '<p>No hay productos Eliminados </p>';
        }

        // Liberar memoria
        $result->free();
    
        // Cerrar conexión
        $link->close();
    }
    ?>

</body>
</html>