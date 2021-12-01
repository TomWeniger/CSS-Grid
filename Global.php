<?php
require_once(dirname(__FILE__) . '/vendor/autoload.php');

use Codenixsv\CoinGeckoApi\CoinGeckoClient;

$client = new CoinGeckoClient();

$result = $client->coins()->getCoin('bitcoin', ['tickers' => 'false', 'market_data' => 'false']);

var_dump($result);


/*
foreach ($data as $coin) {
    echo $coin['usd'];
}
*/