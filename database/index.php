<?php
$db_user = "root";
$db_host = "localhost";

$connect = mysqli_connect($db_host , $db_user);
if($connect == true){
    print "<script>alert('your database connection successfully')</script>";
} 
else{
     print "<script>alert('Failed to connect to the database')</script>"; 
}

$db = mysqli_select_db($connect , "organization");
?>
