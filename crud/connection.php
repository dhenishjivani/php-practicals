<?php
$servername = "localhost";
$username = "root";
$password = "Simform@123";
$dbname = "test";
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection Failed due to:" . mysqli_connect_error());
} 