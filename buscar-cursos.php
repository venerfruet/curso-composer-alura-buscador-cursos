<?php

require 'vendor/autoload.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Venerfruet\BuscadorCursos\Buscador;

$client = new Client(['base_uri' => 'https://www.alura.com.br/'], ['verify' => false]);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

echo PHP_EOL;
echo '##################################################################################################################################' . PHP_EOL;
echo '----------------------------------------------------------------------------------------------------------------------------------' . PHP_EOL;
foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;
    echo '----------------------------------------------------------------------------------------------------------------------------------' . PHP_EOL;
}
echo '##################################################################################################################################' . PHP_EOL;
echo PHP_EOL;
