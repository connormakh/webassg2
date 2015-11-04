<?php
session_start();
ob_start();

require('config.php');
if(isset($_POST["formSubmit"])){
	
	$fn=$_POST["firstname"];
	$ln=$_POST["lastname"];
	$em=$_POST["E-mail"];
	$cm=$_POST["comment"];
	
	$check=$mysqli->prepare("SELECT * FROM guests WHERE email = ?");
	$check->bind_param('s',$em);
	$check->execute();
	$check->store_result();
	$check->bind_result($fn,$ln,$em,$cm);
	$size=$check->num_rows;
	$check->fetch();
	
	if($size==0){

		$stmt =$mysqli->prepare("INSERT into guests (fname, lname, email, comment) values(?,?,?,?)");
		$stmt->bind_param('ssss', $fn, $ln, $em, $cm);
		$stmt->execute();	
	}
	else die("Record already exists!");
$stmt->close();
$mysqli->close();


}
				header('Location: Assg12.php');
?>