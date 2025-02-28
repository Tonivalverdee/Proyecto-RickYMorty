<?php
declare(strict_types=1);

require_once 'api.php';


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
?>