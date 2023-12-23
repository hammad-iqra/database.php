<?php
include('index.php');
$id = $_REQUEST['id'];
$delete = "DELETE FROM customer_data WHERE student_id = '$id'";
$result = mysqli_query($connect, $delete);
if($result == true){
    header('location:fetch.php');
    
 
}
else{
    echo "<script>alert('your data not deleted successfully')</script>";
}
?>