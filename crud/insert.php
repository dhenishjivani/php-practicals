<?php
include 'connection.php';
if (isset($_POST['token'])) {
    $name = $_POST['sname'];
    $mobile = $_POST['snumber'];

    $arr = $_FILES['image']['name'];
    echo count($arr);
    print_r($_FILES);

    // die();

    $sql = "INSERT INTO student (name, mobile, creat_at,update_at) VALUES ('$name', $mobile,current_timestamp(),current_timestamp())";
    $result = mysqli_query($conn, $sql);

    $sql2 = "SELECT * FROM student WHERE mobile = $mobile";
    $result2 = mysqli_query($conn, $sql2);
    $row = mysqli_fetch_assoc($result2);
    $id = $row['id'];
    // echo $id ;//
    // // print_r($row);
    // die();
    for ($i = 0; $i < count($arr); $i++) {

        $image_name = time() . $_FILES['image']['name'][$i];
        $image_tmp_name = $_FILES['image']['tmp_name'][$i];

        move_uploaded_file($image_tmp_name, "uploaded/" . $image_name);

        $sql3 = "INSERT INTO `Image` (`id` , `Image`) VALUES ($id , '$image_name')";
        $result3 = mysqli_query($conn, $sql3);
    }
    header('location:index.php');
}
