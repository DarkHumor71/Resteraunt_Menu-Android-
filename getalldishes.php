<?php
require_once 'connection.php';
$getalldishes = "select * from dish";
$result = mysqli_query($con, $getalldishes);
$return_array = array();
while ($row = mysqli_fetch_assoc($result)) {
 $row_array['id'] = $row['id']; 
 $row_array['name'] = $row['name'];
 $row_array['type'] = $row['type'];
 $row_array['price'] = $row['price'];
 
 array_push($return_array, $row_array);
}
echo json_encode($return_array);
?>