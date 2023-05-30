<?php
$ch = curl_init();

// This code is used to generate the access token
$code = $_GET['code'];
$clientId = "86whyw68yu6sc4";

// In this url file you can see the access token 
$redirectUrl = "http://dhenish/php_practice/apis/linkedin/accessToken.php";
$secretKey = "bfV1hL09y8gqCGUq";
$url = "https://www.linkedin.com/oauth/v2/accessToken?grant_type=authorization_code&client_id=$clientId&client_secret=$secretKey&code=$code&redirect_uri=$redirectUrl";

// curl setup and execution
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$result = json_decode($result);
curl_close($ch);
echo "<pre>";
print_r($result);

// Results access_token property 
$Token = $result->access_token;
echo $Token;
?>


<?php
// $Token = "AQWJAGAGwa1SSXiOIqS63GtBWcdGRIgjO6q5XO1FKENGFuFFHU2gvPqEBFeSvRpsxbi-H1RFdAS-mYUNsRWsL5IjRKNl7eKSdpLJBKeJBUuWdLKdyp4g8kIMd_eWL3tcBowaW5cpM9Hf7k6RCag6kWUHpxXj3UXKktDT_SUv04HrX2DCdm8EV1imyxpXr9lTJU2oJ7BUZXGKPnFY9Idh-vECArqcXU5UiOAkftg5D0Ay4bGKXTi2G6VZqiY8J07WM-s016x9q7ihMN-Cjwm28Iy4II0oI7ZM9btEJjEOwmK7GEiCaWbJTDAh5zY58UxHCeb_YRROHNraxyDLfpbVXEcLD31Hfg";

// stdClass Object
// (
//     [access_token] => AQWJAGAGwa1SSXiOIqS63GtBWcdGRIgjO6q5XO1FKENGFuFFHU2gvPqEBFeSvRpsxbi-H1RFdAS-mYUNsRWsL5IjRKNl7eKSdpLJBKeJBUuWdLKdyp4g8kIMd_eWL3tcBowaW5cpM9Hf7k6RCag6kWUHpxXj3UXKktDT_SUv04HrX2DCdm8EV1imyxpXr9lTJU2oJ7BUZXGKPnFY9Idh-vECArqcXU5UiOAkftg5D0Ay4bGKXTi2G6VZqiY8J07WM-s016x9q7ihMN-Cjwm28Iy4II0oI7ZM9btEJjEOwmK7GEiCaWbJTDAh5zY58UxHCeb_YRROHNraxyDLfpbVXEcLD31Hfg
//     [expires_in] => 5183999
//     [scope] => r_emailaddress,r_liteprofile,w_member_social
// )
?>