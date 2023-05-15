<?php
include 'connection.php';
if(isset($_POST['import'])) {
    $fname = $_FILES['file']['tmp_name'];
    if($_FILES['file']['size'] > 0) {
        $file = fopen($fname , "r");
        echo "<pre>";
       
        while (($getData = fgetcsv($file)) !== false) {
            $sql = "Insert into first (id , name , mobileno) values (".$getData[0]." , '".$getData[1]."', '".$getData[2]."')";
            $result = mysqli_query($conn , $sql);
            if(!isset($result)) {
                echo "Please add valid file";
            } else {
                echo "File import successfully";
            }
        }
        fclose($file);
    }
    
}
function get_all_records() {
    $sql2 = "Select distinct * from first";
    global $conn;
    $result2 = mysqli_query($conn , $sql2);
    if(mysqli_num_rows($result2) > 0) {
        echo "<div class='container mt-5'><table class='table'>
        <thead>
          <tr>
            <th scope='col'>id</th>
            <th scope='col'>Name</th>
            <th scope='col'>Mobilo Number</th>
          </tr>
        </thead></div>
        <tbody>" ;
        while($row = mysqli_fetch_assoc($result2)) {
            echo "<tr><td>" . $row['id'] . " </td>
            <td>" . $row['name'] . " </td>
            <td>" . $row['mobileno'] . " </td>
            </tr>";
        }
        echo "</tbody> </table>";
    } else {
        echo "No data Found";
    }
}
if(isset($_POST['export'])) {
    header('Content-Type: text/csv; charset= UTF-8');
    header('Content-Disposition: attachment; filename = "data.csv"');

    $output = fopen("php://output" , "w");

    fputcsv($output , array('ID' , 'Name' , 'Phone Number'));

    $sql3 = "Select * from first";
    $result3 = mysqli_query($conn , $sql3);
    while($row = mysqli_fetch_assoc($result3)) {
        fputcsv($output , $row);
    }
    fclose($output);
}
?>