<?php 
// $header[] = "Accept: application/json";
// $header[] = "Content-Type: application/json";
$url = "https://simple-books-api.glitch.me";
$ch = curl_init();
curl_setopt($ch , CURLOPT_URL , "$url/books");
// curl_setopt($ch , CURLOPT_URL , "https://jsonplaceholder.typicode.com/posts");

// curl_setopt($ch , CURLOPT_POST , true);
curl_setopt($ch , CURLOPT_POST , false);
// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");   put , petch , delete mate aa use karvu padse km ke CURLOPT_POST ato khali get post ma j rame che 

// curl_setopt($ch , CURLOPT_POSTFIELDS , "userId=11&title=my sample title&body=my sample body data.");

// curl_setopt($ch , CURLOPT_RETURNTRANSFER , $header);
curl_setopt($ch , CURLOPT_RETURNTRANSFER , true);
$result = curl_exec($ch);
curl_close($ch);
$result = json_decode($result);
echo "<pre>";
print_r($result);
?>