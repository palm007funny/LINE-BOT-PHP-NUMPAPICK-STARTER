<?php
$access_token = 'V/G/jNAUK4kYbKnN4egxGrc6bCG/MR9fOaGeEGfX8l6wIHy01m6s601ZKzipOnQjkho2M9FRf8yDtl+ZxdIW1HjTVMGYNcBGallFw9Js1T/rZ0CPOCS4S19curEwz1Bjb9UilfCzFpNi3B45SL6WwQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
