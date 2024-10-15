<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>Formulario</title>
</head>
<body>
    <h1>UPDATE</h1>

    <div class="container">
        <h2>Actualizar Articulo</h2>
        <form id="formulario" action="update_producto.php" method="POST" enctype="multipart/form-data">
            
            <div class="form-group">
                <label for="nombre">Nombre del Producto:</label>
                
                <input type="text" id="nombre" name="nombre"  value="<?= !empty($_POST['nombre'])?$_POST['nombre']:$_GET['nombre'] ?>" required>
            </div>

            <div class="form-group">
                <label for="marca">Marca:</label>
                <select id="marca" name="marca" required>
                    <option value="">Selecciona una marca</option>
                    <option value="Sony">Sony</option>
                    <option value="Bose">Bose</option>
                    <option value="Samsung">Samsung</option>
                    <option value="Apple">Apple</option>
                    <option value="Microsoft">Microsoft</option>
                    <option value="Xiaomi">Xiaomi</option>
                </select>
            </div>

            <div class="form-group">
                <label for="modelo">Modelo:</label>
                <input type="hidden" id="id" name="id" value="<?= !empty($_POST['id'])?$_POST['id']:$_GET['id'] ?>" >
                <input type="text" id="modelo" name="modelo"  value="<?= !empty($_POST['modelo'])?$_POST['modelo']:$_GET['modelo'] ?>" required>
            </div>

            <div class="form-group">
                <label for="precio">Precio:</label>
                <input type="number" id="precio" name="precio" step="0.01" value="<?= !empty($_POST['precio'])?$_POST['precio']:$_GET['precio'] ?>" required>
            </div>

            <div class="form-group">
                <label for="detalles">Detalles:</label>
                <textarea id="detalles" name="detalles" rows="4" >"<?= !empty($_POST['detalles'])?$_POST['detalles']:$_GET['detalles'] ?>" </textarea>
            </div>

            <div class="form-group">
                <label for="unidades">Unidades disponibles:</label>
                <input type="number" id="unidades" name="unidades" step="0.01" value="<?= !empty($_POST['unidades'])?$_POST['unidades']:$_GET['unidades'] ?>" required>
            </div>

            <div class="form-group">
                <label for="imagen">Ruta de la Imagen:</label>
                <input type="text" id="imagen" name="imagen" placeholder="ej: /img/producto.jpg">
            </div>

            <div class="form-group">
                <button type="submit">Registrar Producto</button>
            </div>

        </form>
    </div>

    <script>
        document.getElementById('formulario').addEventListener('submit', function(event) {
            //let id = document.getElementById('id').value.trim();
            let nombre = document.getElementById('nombre').value.trim();
            let modelo = document.getElementById('modelo').value.trim();
            let precio = parseFloat(document.getElementById('precio').value);
            let detalles = document.getElementById('detalles').value.trim();
            let unidades = parseInt(document.getElementById('unidades').value);
            let imagen = document.getElementById('imagen').value.trim();

            // Validación del nombre (requerido y máximo 100 caracteres)
            if (nombre === "" || nombre.length > 100) {
                alert("El nombre del producto es requerido y debe tener 100 caracteres o menos.");
                event.preventDefault();
                return;x
            }

            // Validación del modelo (alfanumérico y máximo 25 caracteres)
            if (!/^[a-zA-Z0-9]+$/.test(modelo) || modelo.length > 25) {
                alert("El modelo es requerido, debe ser alfanumérico y tener 25 caracteres o menos.");
                event.preventDefault();
                return;
            }

            // Validación del precio (mayor a 99.99)
            if (isNaN(precio) || precio <= 99.99) {
                alert("El precio es requerido y debe ser mayor a 99.99.");
                event.preventDefault();
                return;
            }

            // Validación de los detalles (opcional, pero máximo 250 caracteres)
            if (detalles.length > 250) {
                alert("Los detalles no deben exceder los 250 caracteres.");
                event.preventDefault();
                return;
            }

            // Validación de unidades (requerido y mayor o igual a 0)
            if (isNaN(unidades) || unidades < 0) {
                alert("Las unidades deben ser mayores o iguales a 0.");
                event.preventDefault();
                return;
            }

            // Validación de la imagen (opcional, usar imagen por defecto si no se proporciona)
            if (imagen === "") {
                document.getElementById('imagen').value = "/img/default.jpg"; // Imagen por defecto
            }
        });
    </script>

</body>
</html>