<?php 
$accessToken = "12102dd2b24aba5e7c8b9e4496a77197a9e8ee145849385dd6b1fa3df946119c";
$header = [
    "Content-Type: application/json",
    "Authorization: Bearer $accessToken"
];
$ch = curl_init();
$url = "https://simple-books-api.glitch.me";
curl_setopt($ch , CURLOPT_URL , "$url/orders");
curl_setopt($ch , CURLOPT_POST , false);
curl_setopt($ch , CURLOPT_HTTPHEADER , $header);
curl_setopt($ch , CURLOPT_RETURNTRANSFER , true);
$result = curl_exec($ch);
$result = json_decode($result);
curl_close($ch);
echo "<pre>";
print_r($result);
?>