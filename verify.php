<?php
$access_token = 'LG03eF7ZQAq1J1vTACiQP2h/1W98nGw65OTkKwS13RzzlfDh5YGcUvTib6/pc7kFIQKQArO5MYvxjJSUwxNQwk+ToGcABsDYuFvsGuEUusIyvlMG8UZF5Xr4knytfILv8G7WMFutDUPu2WbOq0ueTgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
