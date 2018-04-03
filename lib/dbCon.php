<?php
	$con = mysqli_connect("localhost","root","","khoapham");
	if($con == false){
		die("ket noi that bai".mysqli_connect_error());
		//echo("ket noi that bai");
	}
	else{
		$set = mysqli_query($con,"SET NAMES 'utf8'");
		//echo("connection ok");
	}
?>