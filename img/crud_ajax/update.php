<?php

	include('conn.php');
	$p=1;
	$id=$_POST['id'];
	$firstname=$_POST['fn'];
	$lastname=$_POST['ln'];
	if(!isset($_POST[''])){
		$p=5;
		$id=$_POST['id'];
		echo $p;
		$firstname=$_POST['fn'];
		$lastname=$_POST['ln'];
		
		mysqli_query($conn,"update `user` set firstname='$firstname', lastname='$lastname' where userid='$id'");
	}
	echo $id;
	echo $p;
	echo $firstname;
	echo $lastname;
	
?>