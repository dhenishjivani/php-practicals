<?php
    $servername = "localhost";
    $username = "root";
    $password = "Simform@123";
    $dbname = "test";

    $conn = new mysqli($servername,$username,$password,$dbname);
    $response = $conn->query("SELECT * from products");

    // $conn = mysqli_connect($servername,$username,$password,$dbname) ;
    // $conn2 = mysqli_connect($servername,$username,$password) ;

    // $dbname = mysqli_select_db($conn2,'practicle');
    // $conn = mysqli_connect('localhost','root','Simform@123','test');
    if(!$conn){
        die ("Connection failed" . mysqli_connect_error());
    }else{
        // echo "Connect ";
        echo "<pre>";
        print_r(mysqli_fetch_all($response));
    }
    // echo "Hello";
    // $que = "show databases";
 
    // $sql = mysqli_query($conn,"Show databases");  
    // print_r($sql);
    // $result = $sql->fetch_all();
    // echo "<pre>";
    // print_r($result);
    // echo(mysqli_num_rows($sql));
    // while($row = mysqli_fetch_assoc($sql)){
    //     echo "<pre>";
    //     print_r($row);
    // }
    // $row = mysqli_fetch_assoc($sql);    // first row
    // $row = mysqli_fetch_assoc($sql);    // second row
    // $row = mysqli_fetch_row($sql);      // 3rd row
    // echo "<pre>";
    // print_r($row);


    // $result = mysqli_fetch_all($sql);
    //     echo "<pre>";
    // print_r($result);

    // $result = mysqli_fetch_array($sql);
    // $result = mysqli_fetch_array($sql,MYSQLI_ASSOC);
    // $result = mysqli_fetch_array($sql,MYSQLI_NUM);
    // $result = mysqli_fetch_array($sql,MYSQLI_BOTH);  default che aa
    //     echo "<pre>";
    // print_r($result);
    // echo $result[3] . " " . $result["customer_email"];

    // $result = mysqli_fetch_field($sql)
    // while($result = mysqli_fetch_field($sql)){
    //     echo "<pre>";
    //     print_r($result);
    // }

    // mysqli_close($conn2);
    // $tab = "select * from customer";
    // // $sql = mysqli_query($conn,$que);
    // $sql = mysqli_query($conn2,$tab);
    // $result = mysqli_fetch_all($sql);
    //     echo "<pre>";
    // print_r($result);

    
?>