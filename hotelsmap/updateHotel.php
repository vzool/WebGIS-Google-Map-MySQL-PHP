<?php
$ID = $_POST['ID'];
$NAME = $_POST['NAME'];
$EMAIL = $_POST['EMAIL'];
$PHONE = $_POST['PHONE'];
$STARS = $_POST['STARS'];
$DESC = $_POST['DESC'];
$LONGITUDE = $_POST['LONGITUDE'];
$LATITUDE = $_POST['LATITUDE'];
$con = mysqli_connect("localhost","root","root","tourism") or die("Connection Error ! ");
$query = mysqli_query($con , "UPDATE hotels SET NAME='$NAME', DESCRIPTION='$DESC', PHONE='$PHONE', EMAIL='$EMAIL', STARS='$STARS', LONGITUDE='$LONGITUDE', LATITUDE='$LATITUDE' WHERE ID='$ID';");
if($query){echo "Updated ! ";}else{echo " Not Updated ! ";}
?>