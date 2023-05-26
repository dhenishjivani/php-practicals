<?php
$accessToken = "AQUU1a81A3Its0uXB-sVtesYZQjYNrGdGNGwXQn1_QIlZ_dzG7v82nq0vEr7QVCqE-ysOJZ2mYQ0ViqADVUjP_zkV4nBrL7B5b6aB-q6QjMvDKKOGOdabGlfGaXVxYhxB7okp9l6pFqzdIjEuFDW-TvQbcOZ5Hggz11tnsqcFHJ7cMSH0mwmg3elGn5f5HDywk5OgOeQHH93M1mKwzkxzmLTgqt5vPc8xJLEML-e9CfV5oAYQnsxEG61T56UUFhhpkODAmyM9APVfHDmn8WYiav5RjoDKneqLJvL4YFyt7UjEFvyzfhxPSNFyH1rovN5Ll-LOgntucoGf34BZOjtgp97Cjd1IQ";
$header = [
    "Content-Type: application/json",
    "Authorization: Bearer $accessToken"
];
$data = '{
    "registerUploadRequest": {
        "recipes": [
            "urn:li:digitalmediaRecipe:feedshare-image"
        ],
        "owner": "urn:li:person:6kUbqUOMxs",
        "serviceRelationships": [
            {
                "relationshipType": "OWNER",
                "identifier": "urn:li:userGeneratedContent"
            }
        ]
    }
}';
$ch = curl_init();
$url = "https://api.linkedin.com/v2/assets?action=registerUpload";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$result = json_decode($result);
curl_close($ch);
echo "<pre>";
print_r($result);

$uploadUrl = $result->value->uploadMechanism->{'com.linkedin.digitalmedia.uploading.MediaUploadHttpRequest'}->uploadUrl;
echo $uploadUrl;
echo  "<br>";
$asset = $result->value->asset;
echo $asset;
$header = [
    "Content-Type: multipart/form-data",
    "Authorization: Bearer $accessToken"
];

$cf['file'] = new CURLFile("./Images/profile.jpeg");
print_r($ch);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $uploadUrl);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $cf);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_exec($ch);

$imagePostBody = '{
    "author": "urn:li:person:6kUbqUOMxs",
    "lifecycleState": "PUBLISHED",
    "specificContent": {
        "com.linkedin.ugc.ShareContent": {
            "shareCommentary": {
                "text": "Feeling inspired after meeting so many talented individuals at this year\'s conference. #talentconnect"
            },
            "shareMediaCategory": "IMAGE",
            "media": [
                {
                    "status": "READY",
                    "description": {
                        "text": "Center stage!"
                    },
                    "media": "'.$asset.'",
                    "title": {
                        "text": "LinkedIn Talent Connect 2021"
                    }
                }
            ]
        }
    },
    "visibility": {
        "com.linkedin.ugc.MemberNetworkVisibility": "PUBLIC"
    }
}';

$header = [
    "Content-Type: application/json",
    "Authorization: Bearer $accessToken"
];

$ch = curl_init();
$url = "https://api.linkedin.com/v2/ugcPosts";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $imagePostBody);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$result = json_decode($result);
curl_close($ch);
echo "<pre>";
print_r($result);
?>