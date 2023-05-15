<?php 
include_once 'connection.php';
if(isset($_POST['uid'])){
    $id = $_POST['uid'];
    $response = array();
    // echo $id;
    $que = "SELECT * FROM student WHERE id = $id ";
    $resu = mysqli_query($conn , $que);
    $row = mysqli_fetch_assoc($resu);

    $que2 = "SELECT Image FROM Image WHERE id = $id";
    $resu2 = mysqli_query($conn , $que2);
    $row2 = mysqli_fetch_all($resu2);

    array_push($response,$row);
    array_push($response,$row2);
    // echo json_encode($row);
    // echo json_encode($row2);
    echo json_encode($response);
    
}

?>

