<?php
require_once 'classes.php';
$api = new API();
$personajes = $api->obtenerPersonajes();
$presentador = new Personajes($personajes);
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personajes de Rick y Morty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="icon" href="./logo-rickymorty.png">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center text-general">Personajes de Rick y Morty</h1><br>
        <?=
        $presentador->mostrarCuadricula();
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>