<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudentData</title>
    <link rel="icon" href="https://static.vecteezy.com/system/resources/previews/000/505/524/original/vector-male-student-icon-design.jpg">
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<body>
<div class="container">
<a href="insert2.php" class = "btn btn-success">Create New Student Data</a><br><br>
<table class="table table-danger table-hover">
  <thead>
    <tr>
      <th scope="col">Student_id</th>
      <th scope="col">First_Name</th>
      <th scope="col">Last_name</th>
      <th scope="col">City</th>
      <th colspan= "2" align ="center">Action</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
   <?php
   include('index.php');
   $select = "SELECT * FROM customer_data";
   $result4 = mysqli_query($connect  , $select);
   while($row = mysqli_fetch_array($result4))
   {
   ?>
   <tr>
    <td><?php echo $row['student_id'];?></td>
    <td><?php echo $row['First_name'];?></td>
    <td><?php echo $row['Last_name'];?></td>
    <td><?php echo $row['City'];?></td>
    <td><a href="updateform.php?id=<?php echo $row['student_id'];?>" class= "btn btn-danger">Edit</a></td>
    <td><a href="delete.php?id=<?php echo $row['student_id'];?>" class= "btn btn-danger">Delete</a></td>


   </tr>
   <?php } ?>
  </tbody>
</table>
</div>
    
</body>
</html>