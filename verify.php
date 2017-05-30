<?php
$access_token = '+GTbOquIyxx7BHCHXVsN3DhNpe49Gmbnxio+vFD+7Tw/IQ3bbbNZl5o1a9g4tlcCisv0hYLQ9BTU0S9tNZQeAcvgyT1mo4fPTDSotzmIUcf/6DphHrukyQvGeefITIT1N42jgLIM0SHFzA9MMXeYFgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;