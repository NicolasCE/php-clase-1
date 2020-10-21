<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Clase#01 PHP</h1>
    <a href="form.php">Formularios</a>

    <h2>Variables</h2>

    <?php
    //declaraciones de variables
    $nombre = "Variable de texto";
    $numero = 100;
    $frutas = ["Pera", "Manzana", "Limon"];
    $persona = ["nombre" => "Juan", "edad" => 18];
    $numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9];

    echo "la variable nombre es  $nombre <br>";
    echo "El numero es $numero <br>";
    print_r($frutas);
    echo "<br>";
    print_r($persona);
    echo "<hr>";
    echo $frutas[0] . "<br>";
    echo $persona["nombre"] . "<br>";
    ?>
    <hr>
    <p>
        La variable nombre tiene el valor: <?= $nombre ?>
    </p>
    <p>
        El valor de la variable numero es <?= $numero ?>
    </p>
    <h2>Recorrido</h2>
    <ol>
        <?php foreach ($frutas as $item) { ?>
            <li> <?= $item ?> </li>
        <?php } ?>
    </ol>
    <hr>
    <ul>
        <?php for ($i = 0; $i < count($frutas); $i++) { ?>
            <li><?= $frutas[$i] ?></li>
        <?php } ?>
    </ul>
    <hr>
    <?php foreach ($numeros as $item) { ?>
        <?php if ($item % 2 == 1) { ?>
            <?= $item ?>
        <?php } ?>
    <?php } ?>



</body>

</html>