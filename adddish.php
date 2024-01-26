<?php
require_once 'connection.php';
$name = $_GET['name'];
$price = $_GET['price'];
$type = $_GET['type'];
$query = "insert into dish(name,price,type) values('$name','$price','$type')";
if(mysqli_query($con, $query)){
 
 
 echo mysqli_insert_id($con);
 
}
else {echo "-1";}
?>