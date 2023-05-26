<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singal Book Select</title>
</head>
<body>
    <form action="" method="POST">
        <label for="">Enter book id which you want to see details</label>
        <input type="number" name="inputVal">
        <input type="submit" name="submit">
        <a href="./index.php">Back to home Page</a>
    </form>
</body>
</html>

<?php 
if(isset($_POST['submit'])) {
    $id = $_POST['inputVal'];
    $ch = curl_init();
    
    $url = "https://simple-books-api.glitch.me";
    curl_setopt($ch , CURLOPT_URL , "$url/books/$id");
    
    curl_setopt($ch , CURLOPT_POST , false);
    curl_setopt($ch , CURLOPT_RETURNTRANSFER , TRUE);
    $result = curl_exec($ch);
    $result = json_decode($result);
    curl_close($ch);
    echo "<pre>";
    print_r($result);
    
}
?>

