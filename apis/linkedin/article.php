<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <script src='./jquery-3.6.4.min.js'></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <form action="" id="articleForm">
        <div class="form-floating container mt-5">
            <div class="form-group">
                <textarea name="textData" id="floatingTextarea" cols="30" rows="3" placeholder="Enter Contant here" class="form-control"></textarea>
            </div>
            <div class="input-group flex-nowrap mt-5">
                <span class="input-group-text" id="addon-wrapping">Title</span>
                <input type="text" class="form-control" name="titledata" placeholder="Enter Title here" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap mt-5">
                <span class="input-group-text" id="addon-wrapping">Url</span>
                <input type="text" class="form-control" name="urldata" placeholder="Enter Url here" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <div class="input-group flex-nowrap mt-5">
                <span class="input-group-text" id="addon-wrapping">Description</span>
                <input type="text" class="form-control" name="description" placeholder="Enter Description here" aria-label="Username" aria-describedby="addon-wrapping">
            </div>
            <button type="submit" name="submit" value="Post" class="btn btn-outline-info mt-5">Post</button>
            <div class="alert alert-success alert-dismissible fade show mt-5 d-none" id="successMessage" role="alert">
                <strong>Post added successfully!</strong>
                <button type="button" class="btn-close" id="close"></button>
            </div>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

<script src="./script.js"></script>

</html>

<?php
error_reporting(0);
$contantData = $_POST['textData'];
$titleData = $_POST['titledata'];
$url = $_POST['urldata'];
$desc = $_POST['description'];
$accessToken = "AQUU1a81A3Its0uXB-sVtesYZQjYNrGdGNGwXQn1_QIlZ_dzG7v82nq0vEr7QVCqE-ysOJZ2mYQ0ViqADVUjP_zkV4nBrL7B5b6aB-q6QjMvDKKOGOdabGlfGaXVxYhxB7okp9l6pFqzdIjEuFDW-TvQbcOZ5Hggz11tnsqcFHJ7cMSH0mwmg3elGn5f5HDywk5OgOeQHH93M1mKwzkxzmLTgqt5vPc8xJLEML-e9CfV5oAYQnsxEG61T56UUFhhpkODAmyM9APVfHDmn8WYiav5RjoDKneqLJvL4YFyt7UjEFvyzfhxPSNFyH1rovN5Ll-LOgntucoGf34BZOjtgp97Cjd1IQ";
$header = [
    "Content-Type: application/json",
    "Authorization: Bearer $accessToken"
];
$data = '{
        "author": "urn:li:person:6kUbqUOMxs",
        "lifecycleState": "PUBLISHED",
        "specificContent": {
            "com.linkedin.ugc.ShareContent": {
                "shareCommentary": {
                    "text": "' . $contantData . '"
                },
                "shareMediaCategory": "ARTICLE",
                "media": [
                    {
                        "status": "READY",
                        "description": {
                            "text": "' . $desc . '"
                        },
                        "originalUrl": "' . $url . '",
                        "title": {
                            "text": "' . $titleData . '"
                        }
                    }
                ]
            }
        },
        "visibility": {
            "com.linkedin.ugc.MemberNetworkVisibility": "PUBLIC"
        }
    }';
$ch = curl_init();
$url = "https://api.linkedin.com/v2/ugcPosts";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$result = json_decode($result);
curl_close($ch);

?>