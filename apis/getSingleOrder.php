<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singal Order Details</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Enter Order id</label>
        <input type="text" name="inputVal">
        <input type="submit" name="submit">
        <a href="./index.php">Back to home Page</a>
    </form>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
    $accessToken = "12102dd2b24aba5e7c8b9e4496a77197a9e8ee145849385dd6b1fa3df946119c";
    $header = [
        "Content-Type: application/json",
        "Authorization: Bearer $accessToken"
    ];
    $orderId = $_POST['inputVal'];
    $ch = curl_init();
    $url = "https://simple-books-api.glitch.me";
    curl_setopt($ch, CURLOPT_URL, "$url/orders/$orderId");
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    $result = json_decode($result);
    curl_close($ch);
    echo "<pre>";
    print_r($result);
}
?>