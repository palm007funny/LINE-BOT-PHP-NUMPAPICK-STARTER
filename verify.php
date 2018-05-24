<?php
$access_token = '4sXuyfiP4D3M5hRXVZC+yC/Sw/qyFYku2tSzua4JNESbF8Q6ei0Nwy3vkPsj8fqFztOhGWhLTLLEv4HtmHYVYBbPFYxl92CkMb/ni/SARw0/+KUab0FiKO+RC8c3a8joF1SHSsqDcFeeqhWHUyu87gdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
