<?php

    use GuzzleHttp\Client;

    $client = new Client(['verify' => false]);
    $response = $client->request('GET', 'https://www.alura.com.br/cursos-online-programacao/php');

    $html = $response->getBody();

?>