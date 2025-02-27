<?php
class API {
    const API_URL = "https://rickandmortyapi.com/api/character";

    public function obtenerPersonajes() {
        $data = file_get_contents(self::API_URL);
        return json_decode($data, true)['results'];
    }
}
class Personajes {
    private $personajes;

    public function __construct($personajes) {
        $this->personajes = $personajes;
    }

    public function mostrarCuadricula() {
        echo '<div class="row">';
        foreach ($this->personajes as $personaje) {
            echo '<div class="col-md-4 mb-4">';
            echo '<div class="card">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $personaje['name'] . '</h5>';
            echo '<p class="card-text">Estado: ' . $personaje['status'] . '</p>';
            echo '<p class="card-text">Especie: ' . $personaje['species'] . '</p>';
            echo '</div>';
            echo '<img src="' . $personaje['image'] . '" class="card-img-top" alt="' . $personaje['name'] . '">';
            echo '</div></div>';
        }
        echo '</div>';
    }
}
?>