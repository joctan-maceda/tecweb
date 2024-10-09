<?php
// Verificar si se ha enviado el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Recibir los datos del formulario
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $nombre = isset($_POST['nombre']) ? $_POST['nombre'] : null;
    $marca = isset($_POST['marca']) ? $_POST['marca'] : null;
    $modelo = isset($_POST['modelo']) ? $_POST['modelo'] : null;
    $precio = isset($_POST['precio']) ? $_POST['precio'] : null;
    $unidades = isset($_POST['unidades']) ? $_POST['unidades'] : null;
    $detalles = isset($_POST['detalles']) ? $_POST['detalles'] : null;
    $imagen = isset($_POST['imagen']) ? $_POST['imagen'] : null;

    // Validar que el ID no sea nulo (es necesario para identificar el registro a actualizar)
    if ($id) {
        // Conectar a la base de datos
        @$link = new mysqli('localhost', 'root', 'Diosesamor577240323', 'marketzone');

        /** comprobar la conexión */
        if ($link->connect_errno) {
            die('Falló la conexión: '.$link->connect_error.'<br/>');
        }

        // Preparar la consulta SQL para actualizar los datos del producto
        $sql = "UPDATE productos SET 
                    nombre = ?, 
                    marca = ?, 
                    modelo = ?, 
                    precio = ?, 
                    unidades = ?, 
                    detalles = ?, 
                    imagen = ?
                WHERE id = ?";

        // Preparar la consulta utilizando prepared statements para evitar inyección de SQL
        if ($stmt = $link->prepare($sql)) {
            // Bindear los parámetros
            $stmt->bind_param('sssdissi', $nombre, $marca, $modelo, $precio, $unidades, $detalles, $imagen, $id);

            // Ejecutar la consulta
            if ($stmt->execute()) {
                echo "Producto actualizado correctamente.";
            } else {
                echo "Error al actualizar el producto: " . $stmt->error;
            }

            // Cerrar el statement
            $stmt->close();
        } else {
            echo "Error en la preparación de la consulta: " . $link->error;
        }

        // Cerrar la conexión
        $link->close();
    } else {
        echo "El ID del producto es obligatorio para la actualización.";
    }
} else {
    echo "No se han enviado datos.";
}
?>
