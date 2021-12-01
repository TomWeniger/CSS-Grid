<?php
require_once(dirname(__FILE__) . '/vendor/autoload.php');

use Codenixsv\CoinGeckoApi\CoinGeckoClient;

$client = new CoinGeckoClient();
$data =  $client->coins()->getMarkets('usd');



foreach ($data as $coin) {
    echo $coin['name'] . "<br>";
}
