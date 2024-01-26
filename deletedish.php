<?php
require_once 'connection.php';
$id = $_GET['id'];
$query = "delete from dish where id='$id'";
if(mysqli_query($con, $query)){
 
 
 echo "success";
}
else {echo "fail";}
?>