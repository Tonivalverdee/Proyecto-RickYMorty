<?php
declare(strict_types=1);

class ApiClient {
    private string $api_url;

    public function __construct(string $api_url) {
        $this->api_url = $api_url;
    }

    public function fetch_data() {
        $ch = curl_init($this->api_url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);
        $response = curl_exec($ch);
        curl_close($ch);
        return json_decode($response, true);
    }
}

class API {
    public function obtenerPersonajes(string $api_url) {
        $apiClient = new ApiClient($api_url);
        $data = $apiClient->fetch_data();
        return $data['results'] ?? []; // Devuelve un array vacío si no hay resultados
    }
}

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