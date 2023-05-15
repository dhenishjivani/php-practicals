<?php 
include_once 'connection.php';
    echo "hgiy";
    $id = $_POST['idrutul'];
    // echo $id;
    // die();
    // $que =  "SELECT Image FROM student WHERE id = $id";
    // $res = mysqli_query($conn , $que);
    // $image_n = mysqli_fetch_assoc($res);
    // // print_r($image_n["Image"]);
    // unlink("./uploaded/{$image_n["Image"]}");

    $sql = "DELETE FROM student WHERE id = '$id' ";
    $result = mysqli_query($conn , $sql);
     
    if(!$result){
        die ("Something is wrong:" . mysqli_connect_error());
    } else {
        header('location:index.php');
    }
?>