<?php
/*
$access_token = 'cy8uWvKZ+vrFXXgLPWLDGYJHVb7M2V7t3GihlsWJlDrh7W+y9rK3P/x0Dt4iQcYOEwSi6MT60XgoS7+GffKaZiGiW9Up9ufD2oOL/3XVjBcZqxhI8voNmpzDpmH0KeE0Ern+ByTJz/c5DfQQqDlaZgdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v2/oauth/verify';
$headers = array('Authorization: Bearer ' .$access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
*/
curl -X GET \
-H 'Authorization: Bearer {cy8uWvKZ+vrFXXgLPWLDGYJHVb7M2V7t3GihlsWJlDrh7W+y9rK3P/x0Dt4iQcYOEwSi6MT60XgoS7+GffKaZiGiW9Up9ufD2oOL/3XVjBcZqxhI8voNmpzDpmH0KeE0Ern+ByTJz/c5DfQQqDlaZgdB04t89/1O/w1cDnyilFU=}' \
https://api.line.me/v1/oauth/verify
?>
