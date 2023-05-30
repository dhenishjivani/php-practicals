<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Linkedin Image </title>
    <link rel="stylesheet" href="./style.css">
    <script src='./jquery-3.6.4.min.js'></script>
    <script src="./dist/bootstrap-tagsinput.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="./dist/bootstrap-tagsinput.css">
    <style>
        .label-info {
            background-color: lightskyblue;
            padding: 0.2rem;
            border-radius: 3rem;
        }
    </style>
</head>

<body>
    <!-- Image Form Data -->
    <form action="" id="imageData" enctype="multipart/form-data">
        <div class="form-floating container mt-5">
            <div class="form-group">
                <textarea name="textData" id="" cols="30" rows="3" placeholder="Enter Contant here" class="form-control"></textarea>
            </div>
            <div id="textData_validate"></div>
            <div class="input-group flex-nowrap mt-5">
                <span class="input-group-text" id="addon-wrapping">Tages</span>
                <input type="text" class="form-control w-100" name="tages" placeholder="Enter Tages here" data-role="tagsinput">
            </div>
            <input type="file" name="image[]" id="" accept="image/*" multiple class="mt-5">
            <div id="image[]_validate"></div>
            <button type="submit" name="submit" value="Post" class="btn btn-outline-info mt-5">Post</button>
            <div class="alert alert-success alert-dismissible fade show mt-5 d-none" id="successMessage" role="alert">
                <strong>Post added successfully!</strong>
                <button type="button" class="btn-close" id="close"></button>
            </div>
        </div>
    </form>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="./jQuery Validate Library For Validation/js/jquery.validate.min.js"></script>
    <script src="./jQuery Validate Library For Validation/js/additional-methods.js"></script>
</body>

<script src="./script.js"></script>

</html>

<?php
error_reporting(0);

// Access token
$accessToken = "AQUU1a81A3Its0uXB-sVtesYZQjYNrGdGNGwXQn1_QIlZ_dzG7v82nq0vEr7QVCqE-ysOJZ2mYQ0ViqADVUjP_zkV4nBrL7B5b6aB-q6QjMvDKKOGOdabGlfGaXVxYhxB7okp9l6pFqzdIjEuFDW-TvQbcOZ5Hggz11tnsqcFHJ7cMSH0mwmg3elGn5f5HDywk5OgOeQHH93M1mKwzkxzmLTgqt5vPc8xJLEML-e9CfV5oAYQnsxEG61T56UUFhhpkODAmyM9APVfHDmn8WYiav5RjoDKneqLJvL4YFyt7UjEFvyzfhxPSNFyH1rovN5Ll-LOgntucoGf34BZOjtgp97Cjd1IQ";

// Header Content
$header = [
    "Content-Type: application/json",
    "Authorization: Bearer $accessToken"
];

// Request body for api url
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

$media_asset = [];
for ($i = 0; $i < count($_FILES['image']['tmp_name']); $i++) {

    // curl execution
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

    // Upload Url 
    $uploadUrl = $result->value->uploadMechanism->{'com.linkedin.digitalmedia.uploading.MediaUploadHttpRequest'}->uploadUrl;

    // Assets for Image
    $asset = $result->value->asset;

    // Header Content for Image
    $header = [
        "Content-Type: multipart/form-data",
        "Authorization: Bearer $accessToken"
    ];
    $image = $_FILES['image']['tmp_name'][$i];

    $cf['file'] = new CURLFile($image);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $uploadUrl);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $cf);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch);

    // Push all the selected Image asset content  
    array_push($media_asset, [
        "status" => "READY",
        "description" => [
            "text" => "Center stage!"
        ],
        "media" => $asset,
        "title" => [
            "text" => "LinkedIn Talent Connect 2021"
        ]
    ]);
}
// Hendle User Inset data
$textData = $_POST['textData'];
$tages = $_POST['tages'];
$textData = $textData . " #" . $tages;
$textData = str_replace("," , " #" , $textData);

// Request body for Image Upload
$imagePostBody = '{
    "author": "urn:li:person:6kUbqUOMxs",
    "lifecycleState": "PUBLISHED",
    "specificContent": {
        "com.linkedin.ugc.ShareContent": {
            "shareCommentary": {
                "text": "' . $textData . '"
            },
            "shareMediaCategory": "IMAGE",
            "media": ' . json_encode($media_asset) . '
        }
    },
    "visibility": {
        "com.linkedin.ugc.MemberNetworkVisibility": "PUBLIC"
    }
}';

echo $imagePostBody;
$header = [
    "Content-Type: application/json",
    "Authorization: Bearer $accessToken"
];

// Final Crul Execution
$ch = curl_init();
$url = "https://api.linkedin.com/v2/ugcPosts";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $imagePostBody);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);

$result = json_decode($result);
print_r($result);
curl_close($ch);
?>