<?php 
mysqli_connect("database-2.csmnzp3t9xk5.us-east-1.rds.amazonaws.com","admin","12345678") or die("Couldn't connet to SQL server");
mysqli_select_db("daowatco_td") or die("Couldn't select DB");

//time formate
function formatDate($date){
	return date('g:i a', strtotime($date));
}

?>