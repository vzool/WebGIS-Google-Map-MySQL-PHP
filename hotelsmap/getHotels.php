<?php
$con = mysqli_connect("localhost","root","root","tourism") 
	or die(" Connection Error ! ");
	
$query = mysqli_query($con , "SELECT * FROM hotels;");
$temp = Array();
while($row = mysqli_fetch_assoc($query)){
	$temp[] = $row ;
}
echo json_encode($temp);
?>