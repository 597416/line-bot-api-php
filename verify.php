<?php
$access_token = 'uP7nSheZ1KDTsozIOf1imjt16+Rfd3VIte/wUBh/w1Ya+TwmcVAByCM7VFZjczTyaSNchBnc1waLz/xY1WA/gHqOYrBsHyj+x/qa9UdGWt8Dmk4iFur26ppHlTqNJELbxoBMR7ccmut0G/zYBZafmAdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
