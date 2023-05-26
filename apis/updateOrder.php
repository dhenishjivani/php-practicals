<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Order Details</title>
</head>

<body>
    <form action="" method="POST">
        <label for="">Enter Order id </label>
        <input type="text" name="orderId">
        <!-- <label for="">Book Id</label>
        <input type="number" name="bookId"> -->
        <label for="">Customer Name</label>
        <input type="text" name="cName" id="">
        <!-- <label for="">Quantity</label>
        <input type="number" name="quantity" id=""> -->
        <input type="submit" name="submit">
        <a href="./index.php">Back to home Page</a>
    </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $orderId = $_POST['orderId'];
    $accessToken = "12102dd2b24aba5e7c8b9e4496a77197a9e8ee145849385dd6b1fa3df946119c";
    $header = [
        "Content-Type: application/json",
        "Authorization: Bearer $accessToken"
    ];
    $data = [
        // $bookId = $_POST['bookId'],
        "customerName" => $_POST['cName'],
        // $quantity = $_POST['quantity']
    ];
    $data = json_encode($data);
    $ch = curl_init();
    $url = "https://simple-books-api.glitch.me";
    curl_setopt($ch, CURLOPT_URL, "$url/orders/$orderId");
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PATCH");
    // curl_setopt($ch , CURLOPT_POST , true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch);
    $data = json_decode($data);
    curl_close($ch);
    if ($data) {
        echo "Update successfully";
    }
}
?>