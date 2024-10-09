<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es">

<head>
    <title>Productos con stock limitado</title>
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
            font-size: 12px;
            margin-top: 10px;
        }

        .success {
            color: green;
            font-size: 12px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

    <h1>Listado de productos con stock menor o igual a <?php echo htmlspecialchars($_GET['tope'], ENT_QUOTES, 'UTF-8'); ?></h1>

    <?php
    if (isset($_GET['tope'])) {
        $tope = $_GET['tope'];
    } else {
        die('<p>Parámetro "tope" no detectado...</p>');
    }

    if (!empty($tope)) {
        // Crear conexión
        @$link = new mysqli('localhost', 'root', 'Diosesamor577240323', 'marketzone');
        
        // Comprobar la conexión
        if ($link->connect_errno) {
            die('<p>Falló la conexión: ' . htmlspecialchars($link->connect_error, ENT_QUOTES, 'UTF-8') . '</p>');
        }

        // Ejecutar consulta
        if ($result = $link->query("SELECT * FROM productos WHERE unidades <= " . (int)$tope)) {
            // Verificar si hay resultados
            if ($result->num_rows > 0) {
                echo '<table border="1">';
                echo '<tr><th>ID</th><th>Nombre</th><th>Marca</th><th>Modelo</th><th>Precio</th><th>Detalles</th><th>Unidades</th><th>Imagen</th></tr>';

                // Recorrer los resultados y mostrarlos en la tabla
                while ($row = $result->fetch_assoc()) {
                    echo '<tr id = " '. $row['id']  .' " >';
                    echo '<td class="row-data">' . htmlspecialchars($row['id'], ENT_QUOTES, 'UTF-8') . '</td>';
                    echo '<td class="row-data">' . htmlspecialchars($row['nombre'], ENT_QUOTES, 'UTF-8') . '</td>';
                    echo '<td class="row-data">' . htmlspecialchars($row['marca'], ENT_QUOTES, 'UTF-8') . '</td>';
                    echo '<td class="row-data">' . htmlspecialchars($row['modelo'], ENT_QUOTES, 'UTF-8') . '</td>';
                    echo '<td class="row-data">' . htmlspecialchars($row['precio'], ENT_QUOTES, 'UTF-8') . '</td>';
                    echo '<td class="row-data">' . htmlspecialchars($row['detalles'], ENT_QUOTES, 'UTF-8') . '</td>';
                    echo '<td class="row-data">' . htmlspecialchars($row['unidades'], ENT_QUOTES, 'UTF-8') . '</td>';
                    echo '<td class="row-data"><img src="' . htmlspecialchars($row['imagen'], ENT_QUOTES, 'UTF-8') . '" alt="' . htmlspecialchars($row['nombre'], ENT_QUOTES, 'UTF-8') . '" width="100" /></td>';
                    echo '<td class="row-data"><input type="button" value="submit" onclick="show();" /></td>';
                    echo '</tr>';
                }

                echo '</table>';
            } else {
                echo '<p>No hay productos con stock menor o igual a ' . htmlspecialchars($tope, ENT_QUOTES, 'UTF-8') . '.</p>';
            }

            // Liberar memoria
            $result->free();
        }

        // Cerrar conexión
        $link->close();
    }
    ?>
    
    <script type="text/javascript">
        function show() {
            // se obtiene el id de la fila donde está el botón presinado
            var rowId = event.target.parentNode.parentNode.id;

            // se obtienen los datos de la fila en forma de arreglo
            var data = document.getElementById(rowId).querySelectorAll(".row-data");

            //var id = rowId.split("-")[1];
            //console.log(id);
            var id = data[0].innerHTML;
            var name = data[1].innerHTML;
            var marca = data[2].innerHTML;
            var modelo = data[3].innerHTML;
            var precio  = data[4].innerHTML;
            var detalles = data[5].innerHTML;
            var unidades =  data[6].innerHTML;
            var imagen = data[7].innerHTML;

            alert("id:"+id+"\nName: " + name + "\nMarca: " + marca +"\nModelo: " +modelo +"\nPrecio: " +precio +"\nUnidades: "+unidades +"\nImgen: "+imagen);

            send2form(id, name, marca, modelo, precio, detalles, unidades,imagen);
        }
        function send2form(id, name, marca, modelo, precio, detalles, unidades,imagen) {     //form) { 
            
            var urlForm = "formulario_productos_v2.php";
            var id = "id="+id;
            var propName = "nombre="+name;
           
            var propAge = "marca="+marca;
            var porpMod = "modelo="+modelo;
            var propPrecio = "precio="+precio;
            var propUnidades = "unidades="+unidades;
            var propDetalles = "detalles="+detalles;
            var propImg = "imagen="+imagen;
            window.open(urlForm+"?"+id + "&"+propName+"&"+propAge+"&"+porpMod+"&"+propPrecio+"&"+propUnidades+"&"+propDetalles+"&"+propImg);

        }
    </script>
    


</body>
</html>