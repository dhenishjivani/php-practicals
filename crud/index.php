<?php
include_once 'connection.php';
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
 
  <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
</head>

<body>
  <div class="container">
    <form enctype="multipart/form-data" id="form_data" method="post">
      <div class="mb-3 mt-5">
        <label class="form-label">Student Name</label>
        <input type="text" id="name" class="form-control" name="sname">
        <input type="hidden" id = "token" name="token" value="null">
      </div>
      <div class="mb-3">
        <label class="form-label">Mobile Number</label>
        <input type="number" id="number" class="form-control" name="snumber">
      </div>
      <div class="mb-3">
        <label class="form-label">Image</label>
        <input type="file" class="form-control" name="image[]" multiple>
        <div id='image'>  </div>
        
      </div>
      <button type="submit" class="btn btn-primary mb-5" name="submit">Submit</button>
      <!-- <button type="submit" class="btn btn-primary mb-5" name="submit">Update</button> -->
    </form>

    <table class="table table-hover table-dark">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Name</th>
          <th scope="col">Mobile</th>
          <th scope="col">Creat time</th>
          <th scope="col">Update time</th>
          <th scope="col">Image</th>
          <th scope="col" colspan="2">Action</th>
        </tr>
      </thead>
      <tbody id="display">
        
      </tbody>
    </table>
  </div>
  <script src="script.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>


</html>