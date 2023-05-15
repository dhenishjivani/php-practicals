<?php 
// $db_name = "mysql:hostkjhk=localhostkjhg;dbname=test;";

// $conn = new pdo($db_name,"root","Simform@123");
// $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
// if(!$conn){
//     die ("fail" . mysqli_connect_error());
// }else{
//     echo "connect successfully";
// }

$servername = "localhost";
$username = "root";
$password = "Simform@123";

try {
  $conn = new PDO("mysql:host=$servername", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$query = $conn->query("SELECT * FROM `test`.`tests`");
echo "<pre>";
print_r($query->fetchAll());
$conn = null;   

?>