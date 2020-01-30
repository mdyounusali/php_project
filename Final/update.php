<?php

	include('conn.php');
	
	if(!isset($_POST[''])){
		$id=$_POST['id'];
		$firstname=$_POST['fn'];
		$lastname=$_POST['ln'];
		
		mysqli_query($conn,"update `user` set firstname='$firstname', lastname='$lastname' where userid='$id'");
	}
	header("Location: show_table.php");
    die();
?>