<?
require "keys.php";

$api = new Binance\API($api_key, $secret_key);

$count = 0;
while(1){
  // Get latest price of a symbol
  $price = $api->price('ADAUSDT');
  file_put_contents("pricelog,txt", "Price of ADA: {$price} USDT.\n", FILE_APPEND);
  if ($count++ == 1800) exit;
  sleep(1);
}
