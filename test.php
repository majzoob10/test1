<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://prodapi.shipox.com/api/v1/customer/orders?page=0&size=200");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, TRUE);

curl_setopt($ch, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/json",
  "Accept: application/json",
  "Authorization: Bearer eyJhbGciOiJIUzUxMiJ9.eyJzdWIiOiJ2b2lkQGdtYWlsLmNvbSIsInVzZXJJZCI6MTYwNzA2NTE4OSwiZXhwIjoxNjg1MzQ4OTcyfQ.mD66q0eUDGR7vDhPg16aFrFkMsfH3Y3UbjRM7de8gjpF2ToHd4M30dU8of65PRT7wumKIS3QG6oQHFCoOXkW0g"
));

$response = curl_exec($ch);
$info = curl_getinfo($ch);
curl_close($ch);

var_dump($info["http_code"]);
var_dump($response);
