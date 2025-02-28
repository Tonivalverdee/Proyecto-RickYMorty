<?php
declare(strict_types=1);

require_once 'classes.php';

class Personajes {
    private array $personajes;

    public function __construct(array $personajes) {
        $this->personajes = $personajes;
    }

    public function mostrarCuadricula() {
        echo '<div class="row">';
        foreach ($this->personajes as $personaje) {
            echo '<div class="col-md-4 mb-4">';
            echo '<div class="card">';
            echo '<img src="' . $personaje['image'] . '" class="card-img-top" alt="' . $personaje['name'] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $personaje['name'] . '</h5>';
            echo '<p class="card-text">Estado: ' . $personaje['status'] . '</p>';
            echo '<p class="card-text">Especie: ' . $personaje['species'] . '</p>';
            echo '</div>';
            echo '</div></div>';
        }
        echo '</div>';
    }
}
?>