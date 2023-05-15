<?php
include 'connection.php';
$sql = "select * from student";
$result = mysqli_query($conn, $sql);

while ($data = mysqli_fetch_assoc($result)) { ?>
  <tr>
    <td>
      <?php echo $data['id'] ?>
    </td>
    <td>
      <?php echo $data['name'] ?>
    </td>
    <td>
      <?php echo $data['mobile'] ?>
    </td>
    <td>
      <?php echo $data['creat_at'] ?>
    </td>
    <td>
      <?php echo $data['update_at'] ?>
    </td>
    <td>
      <?php 
        $sql2 = "select Image from Image where id = {$data['id']}";
        $result2 = mysqli_query($conn , $sql2);
        $row = mysqli_fetch_all($result2);
        // $id = $row['id'];
        for($i=0 ; $i < count($row) ; $i++){ ?>
          <img src="<?php echo "./uploaded/" . $row[$i][0] ?>" alt="Random Image" width="100px" height="100px">
       <?php }
      ?> 
    </td>
    <td>
      <a href="#" onclick="updaterow(<?php echo $data['id'] ?>)" class="text-white">
        <i class="fa-regular fa-pen-to-square"></i>
      </a>
    </td>
    <td>
      <a href="#" onclick="deleterow(<?php echo $data['id'] ?>)" class="delte text-white" name="delete">
        <i class="fa-solid fa-user-slash"></i>
      </a>
    </td>
  </tr>
<?php } ?>