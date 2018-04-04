<?php
$access_token = '+dZHuTg3X1P2pM6RIHorB71XFf5EihyLsEfV6r0jL/MgNhyjs3+DxlsfpcEfaImsbthw3Vbrlq+L/mKEcjcRoxGQkLpqjlrPN9/y9nAdmgykmTc+93I1QVw+tN2FPMJVmB7pYbOlNj+DDSdqfeQ1jgdB04t89/1O/w1cDnyilFU=';
$url = 'https://api.line.me/v1/oauth/verify';
$headers = array('Authorization: Bearer ' . $access_token);
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);
echo $result;