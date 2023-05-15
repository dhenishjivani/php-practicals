<?php

include 'connection.php';
$id = $_POST['token'];
$name = $_POST['sname'];
$mobile = $_POST['snumber'];
// $mulImg =$_FILES['image']['name'];
// $que =  "SELECT Image FROM student WHERE id = $id";
// $res = mysqli_query($conn , $que);
// $image_n = mysqli_fetch_all($res);
// unlink("./uploaded/{$image_n["Image"]}");

// $new_image = time() . $_FILES['image']['name'];
// move_uploaded_file($_FILES['image']['tmp_name'] , "./uploaded/" . $new_image);

$sql = "UPDATE student SET name = '$name' , mobile = $mobile WHERE id = '$id'";
$result = mysqli_query($conn, $sql);


$arr = $_FILES['image']['name'];
$sql2 = "SELECT * FROM student WHERE mobile = $mobile";
$result2 = mysqli_query($conn, $sql2);
$row = mysqli_fetch_assoc($result2);
$id = $row['id'];
for ($i = 0; $i < count($arr); $i++) {

    $image_name = time() . $_FILES['image']['name'][$i];
    $image_tmp_name = $_FILES['image']['tmp_name'][$i];

    move_uploaded_file($image_tmp_name, "uploaded/" . $image_name);

    $sql3 = "INSERT INTO `Image` (`id` , `Image`) VALUES ($id , '$image_name')";
    $result3 = mysqli_query($conn, $sql3);
}


if (!$result) {
    die("Something is wrong:" . mysqli_connect_error());
} else {
    header('location:index.php');
}

