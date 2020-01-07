<?php

//chdir(__DIR__ . '../');

require '../vendor/autoload.php';


//echo '<h1> hello </h1>' . PHP_EOL;
$hel = new Curl\Curl();
$hel->get('https://sbis.ru/tariffs?tab=ereport');
echo $hel->getResponse();