<?php
include('index.php');
$id = $_POST['student_id'];
$First_name = $_POST['First_name'];
$Last_name = $_POST['Last_name'];
$City= $_POST['City'];


// echo $id;
$update = "UPDATE customer_data SET First_name = '$First_name' , Last_name = '$Last_name', City = '$City' where student_id = '$id'" ;
$result3 = mysqli_query($connect,$update);
if($result3 == true){
    header('location: fetch.php');

}
else{
    print "your data has not been successfully updated";
}
?>
