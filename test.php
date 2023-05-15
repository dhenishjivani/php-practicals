<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
<div>
	<form action="<?php $_SERVER['PHP_SELF']?>" method="GET">
      <input type="text" name="name" id="" placeholder="enter name">
	  <input type="text" name="age" id="" placeholder="enter age">
	  <button type="submit" name="submit">submit</button> 
    </form>
</div>	
</body>
</html>


<?php
if(isset($_GET['submit'])){
    $name = $_GET['name'];
	$age = $_GET['age'];

	echo $name . $age;
    echo "<pre>";
    print_r($_SERVER);
}
?>