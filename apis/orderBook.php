<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Book</title>
</head>

<body>
    <form action="" method="POST">
        <label for="">Enter book id which you want to Buy</label>
        <input type="number" name="inputVal">
        <label for="">Who is buying??</label>
        <input type="text" name="cname" id="">
        <input type="submit" name="submit">
        <a href="./index.php">Back to home Page</a>
    </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $bookId = $_POST['inputVal'];
    $cName = $_POST['cname'];
    $accessToken = "12102dd2b24aba5e7c8b9e4496a77197a9e8ee145849385dd6b1fa3df946119c";
    $header = [
        "Content-Type: application/json",
        "Authorization: Bearer $accessToken"
    ];
    $data = [
        "bookId" => $bookId,
        "customerName" => $cName
    ];
    $data = json_encode($data);
    $ch = curl_init();
    $url = "https://simple-books-api.glitch.me";
    curl_setopt($ch, CURLOPT_URL, "$url/orders");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    $result = curl_exec($ch);
    $result = json_decode($result);
    curl_close($ch);
    echo "<pre>";
    print_r($result);
}
?>



<!-- order 1 id = WV1x9YWELKOdlJcaQ3jDU -->