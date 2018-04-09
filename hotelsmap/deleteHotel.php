<?php
$ID = $_POST['ID'];
$con = mysqli_connect("localhost","root","root","tourism") or die("Connection Error ! ");
$query = mysqli_query($con , "DELETE FROM hotels WHERE ID='$ID';");
if($query){echo "Deleted ! ";}else{echo " Not Deleted ! ";}
?>