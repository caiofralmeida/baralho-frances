<?php

require __DIR__ . '/../../vendor/autoload.php';

use BaralhoFrances\Baralho;

$baralho = new Baralho();
$baralho->offsetSet('id', 10);

var_dump($baralho['id']);
