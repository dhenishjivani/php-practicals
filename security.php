<?php     
// $str = "Dheno";
// echo md5($str , true) . "<br>";
// $str2 = "Hello";
// echo md5($str). "<br>";
// echo sha1($str , true) . "<br>";
// echo sha1($str2). "<br>";

// $user_input = "Your site rocks";

$user_input = "<script>alert('Your site sucks!');</script>";

// echo "<h4>My Commenting System</h4>";
// echo strip_tags($user_input); 
// echo $user_input;
echo filter_var($user_input, FILTER_SANITIZE_STRIPPED);
?>