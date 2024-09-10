<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Completo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #4CAF50;
            font-size: 24px;
            text-align: center;
        }
        p, ul {
            font-size: 18px;
            line-height: 1.6;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        ul li {
            padding: 5px 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .features {
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recibiendo los datos del formulario
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $telefono = htmlspecialchars($_POST['telefono']);
    $tenisFeos = htmlspecialchars($_POST['razon']);
    $color = htmlspecialchars($_POST['color']);
    $features = isset($_POST['features']) ? $_POST['features'] : [];
    $talla = htmlspecialchars($_POST['tallas']);

    // Mostrando los datos
    echo "<h1>Registro Completo</h1>";
    echo "<p><strong>Nombre:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Teléfono:</strong> $telefono</p>";
    echo "<p><strong>Razón por la que tus tenis son feos:</strong><br> $tenisFeos</p>";
    echo "<p><strong>Color seleccionado:</strong> $color</p>";
    
    echo "<div class='features'>";
    echo "<p><strong>Características seleccionadas:</strong></p>";
    if (!empty($features)) {
        echo "<ul>";
        foreach ($features as $feature) {
            echo "<li>" . htmlspecialchars($feature) . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No seleccionaste características adicionales.</p>";
    }
    echo "</div>";

    echo "<p><strong>Talla seleccionada:</strong> $talla</p>";
}
?>
</div>

</body>
</html>
