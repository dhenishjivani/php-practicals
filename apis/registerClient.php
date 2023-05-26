<?php 
$header[] = "Content-Type: application/json";
$data = [
    "clientName"=>"Sakshi",
    "clientEmail"=>"sakshi@gmail.com"
];
$ch = curl_init();
$url = "https://simple-books-api.glitch.me";
curl_setopt($ch , CURLOPT_URL , "$url/api-clients");
$data = json_encode($data);
curl_setopt($ch , CURLOPT_POST , true);
curl_setopt($ch , CURLOPT_POSTFIELDS , $data);
curl_setopt($ch , CURLOPT_HTTPHEADER , $header);
curl_setopt($ch , CURLOPT_RETURNTRANSFER , true);
$result = curl_exec($ch);
curl_close($ch);
echo $result;
?>

<!-- {"accessToken":"12102dd2b24aba5e7c8b9e4496a77197a9e8ee145849385dd6b1fa3df946119c"} -->
<!-- 12102dd2b24aba5e7c8b9e4496a77197a9e8ee145849385dd6b1fa3df946119c -->