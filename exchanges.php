<?php
require_once(dirname(__FILE__) . '/vendor/autoload.php');

use Codenixsv\CoinGeckoApi\CoinGeckoClient;

$client = new CoinGeckoClient();


$exchanges = $client->exchanges()->getExchanges();


foreach ($exchanges as $exchange) {
    echo $exchange['name'] . "<br>";
}
