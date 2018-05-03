<?php
$access_token = 'cO5iTudvp9OHhin2Wy29TX7c5HizycP2gEXboKAxszN59PsCGP2573rLYc9MGjtgs7SMfIxoVTDqx6O9QL6aGMcp+YY/PYpImWqIs08XPcYWXbz6XumM/BWSKBRyH9snpK0zS2RXQuMKX4G78zjv6wdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
