<?php 
$con=mysqli_connect("database-2.csmnzp3t9xk5.us-east-1.rds.amazonaws.com","admin","12345678") or die("Couldn't connet to SQL server");
mysqli_select_db($con,"daowat_db") or die("Couldn't select DB");

//time formate
function formatDate($date){
	return date('F j, Y, g:i a', strtotime($date));
}
 ?>
