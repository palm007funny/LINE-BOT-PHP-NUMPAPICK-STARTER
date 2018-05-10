<?php
$access_token = 'na4wsAj6QmDfw6vAt5AVFh1mwrM5pcQD0K9kCUYKrGrqs62O6rQgu+h7xu664kpls7SMfIxoVTDqx6O9QL6aGMcp+YY/PYpImWqIs08XPcb8BGbudNk83fEx9tGyYPW8TDU5pAHLHvCxbctWE9jmGgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
