<?php
require_once 'classes.php';

$api = new API();
$api_url = 'https://rickandmortyapi.com/api/character'; // URL de la API
$personajes = $api->obtenerPersonajes($api_url);

if (empty($personajes)) {
    echo "<p>No se pudieron cargar los personajes. Intenta de nuevo más tarde.</p>";
    exit;
}

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
    <h1 id="top" class="text-center text-general">Personajes de Rick y Morty</h1><br>
    <a id="boton" href="../index.php"><button class="btn btn-primary">Volver</button></a>
    <div class="container mt-5">
        <?= $presentador->mostrarCuadricula(); ?>
    </div>
    <div class="box-subir">
        <a href="#top">
            <img class="subir" src="./flecha-blanca-png.webp" alt="subir">
            <br>
        </a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>