<?php 
$con=mysqli_connect("localhost","root","") or die("Couldn't connet to SQL server");
mysqli_select_db($con,"daowat_db") or die("Couldn't select DB");

//time formate
function formatDate($date){
	return date('F j, Y, g:i a', strtotime($date));
}
 ?>
