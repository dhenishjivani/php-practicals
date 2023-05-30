<?php
$accessToken = "AQWJAGAGwa1SSXiOIqS63GtBWcdGRIgjO6q5XO1FKENGFuFFHU2gvPqEBFeSvRpsxbi-H1RFdAS-mYUNsRWsL5IjRKNl7eKSdpLJBKeJBUuWdLKdyp4g8kIMd_eWL3tcBowaW5cpM9Hf7k6RCag6kWUHpxXj3UXKktDT_SUv04HrX2DCdm8EV1imyxpXr9lTJU2oJ7BUZXGKPnFY9Idh-vECArqcXU5UiOAkftg5D0Ay4bGKXTi2G6VZqiY8J07WM-s016x9q7ihMN-Cjwm28Iy4II0oI7ZM9btEJjEOwmK7GEiCaWbJTDAh5zY58UxHCeb_YRROHNraxyDLfpbVXEcLD31Hfg";
$header = [
    "Content-Type: application/json",
    "Authorization: Bearer $accessToken"
];
$ch = curl_init();

// $url = "https://api.linkedin.com/v2/me?projection=(id,firstName,lastName,profilePicture(displayImage~:playableStreams))";
$url = "https://api.linkedin.com/v2/me";

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$result = json_decode($result, 1);
curl_close($ch);
echo "<pre>";
print_r($result);

