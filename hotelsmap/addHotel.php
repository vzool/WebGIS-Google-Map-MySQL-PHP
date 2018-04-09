<?php
$NAME = $_POST['NAME'];
$EMAIL = $_POST['EMAIL'];
$PHONE = $_POST['PHONE'];
$STARS = $_POST['STARS'];
$DESC = $_POST['DESC'];
$LONGITUDE = $_POST['LONGITUDE'];
$LATITUDE = $_POST['LATITUDE'];
$con = mysqli_connect("localhost","root","root","tourism") or die("Connection Error ! ");
$query = mysqli_query($con , "INSERT INTO hotels VALUES ('','$NAME','$DESC','$PHONE','$EMAIL','$STARS','$LONGITUDE','$LATITUDE')");
if($query){echo "Saved ! ";}else{echo " Not Saved ! ";}
?>