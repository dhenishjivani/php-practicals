<?php
session_start();
print_r($_SESSION); 
echo $_SESSION["name"];
// include 'first.php';
// echo $test;


// if(!isset($_COOKIE["$cookie_name"])){
//     echo "Cookie is not set";

// }else {
//     echo $_COOKIE["user_name"];
    
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="logout.php">Logout</a>
</body>
</html>