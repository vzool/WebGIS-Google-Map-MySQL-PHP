<?php
$con = mysqli_connect("localhost","root","root","tourism") or die(" Connection Error ! ");
$query = mysqli_query($con , "SELECT * FROM hotels;");
$temp = Array();
while($row = mysqli_fetch_assoc($query)){
	$temp[] = $row ;
}
header('Content-Type: text/csv; charset=utf-8; encoding=UTF-8');
header('Content-Disposition: attachment; filename=hotels.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('ID','NAME','DESCRIPTION','PHONE','EMAIL', 'STARS','LONG','LAT'));
if (count($temp) > 0) {
    foreach ($temp as $row) {
        fputcsv($output, $row);
    }
}
?>