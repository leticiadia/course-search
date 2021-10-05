<?php

    require 'vendor/autoload.php';

    use GuzzleHttp\Client;
    use Symfony\Component\DomCrawler\Crawler;

    $client = new Client(['verify' => false]);
    $response = $client->request('GET', 'https://www.alura.com.br/cursos-online-programacao/php');

    $html = $response->getBody();

    $crawler = new Crawler();
    $crawler->addHTMLContent($html);

    $cursos = $crawler->filter('span.card-curso__nome');

    foreach($cursos as $curso){
        echo $curso->textContent . PHP_EOL;
    }
?>