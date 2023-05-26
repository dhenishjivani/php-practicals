<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Order</title>
</head>

<body>
    <form action="" method="POST">
        <label for="">Enter Order id </label>
        <input type="text" name="orderId">
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
    $data = [
        $orderId = $_POST['orderId']
    ];
    $data = json_encode($data);
    $ch = curl_init();
    $url = "https://simple-books-api.glitch.me";
    curl_setopt($ch, CURLOPT_URL, "$url/orders/$orderId");
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
    // curl_setopt($ch , CURLOPT_POST , true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch);
    $data = json_decode($data);
    curl_close($ch);
    if ($data) {
        echo "Deleted successfully";
    }
}
?>