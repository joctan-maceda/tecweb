<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 4</title>
    <style> 
        table { border-collapse: collapse; width: 33%; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: blue; }
    </style>
</head>
<body>
    <h2>Ejercicio 1</h2>
    <p>Escribir programa para comprobar si un número es un múltiplo de 5 y 7</p>
    <?php

    include 'src/funciones.php';
        ObtenerNumero();
    ?>

    <h2>Ejemplo de POST</h2>
    <form action="http://localhost/tecweb/practicas/p07/index.php" method="post">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit">
    </form>
    <br>
    <?php
        ImprimirDatos();
    ?>
    <h2>Ejercicio 2</h2>
    <?php
        NumerosAleatorios();
    ?>
    <h2>Ejercicio 3</h2>
    <?php
        Multiplo_DoWhile();
    ?>
    <h2>Ejercicio 4</h2>
    <?php
        Ejercicio_4();
    ?>
    <h2>Ejercicio 5</h2>
    <form action="http://localhost/tecweb/practicas/p07/index.php" method="post">
        Edad: <input type="text" name="edad"><br>
        Sexo: <input type="text" name="sexo"><br>
        <input type="submit">
    </form>
    <?php
        Ejercicio_5();
    ?>
</body>
</html>