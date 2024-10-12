#!/usr/bin/env php
<?php

require 'vendor/autoload.php';
require 'functions.php';

use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;
use Venerfruet\BuscadorCursos\Buscador;

$client = new Client(['base_uri' => 'https://www.alura.com.br/']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/cursos-online-programacao/php');

echo PHP_EOL;
decoraInicio();
separadorItemLista();

foreach ($cursos as $curso) {
    exibeMensagem($curso);
    separadorItemLista();
}

decoraFim();
echo PHP_EOL;
