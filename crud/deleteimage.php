<?php 
include_once 'connection.php';
$id = $_POST['imgId'];
$sql = "delete from Image where image_id = $id";
$result = mysqli_query($conn,$sql);

if($result){
    echo json_encode(array(
        "status"=>"success",
        "message"=>"image deleeted"
    ));
}
?>