<?php
include('index.php'); 

if (isset($_POST['save']) !=""){ 

    $student_id = $_POST['student_id'];
    $First_name = $_POST['First_name'];
    $Last_name = $_POST['Last_name'];
    $City= $_POST['City'];

    $sql = "INSERT INTO customer_data VALUES ('$student_id','$First_name', '$Last_name', '$City')"; 
   $result = mysqli_query($connect, $sql);
   if($result==true){
        header('location:fetch.php');
    } else {
        echo "<script>alert('Failed to insert data')</script>";
    }
}

?>
