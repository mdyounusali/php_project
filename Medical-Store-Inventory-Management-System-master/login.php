<?php
	session_start();
	if( isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password']) )
	{
		include 'config.php';
		
		$username = stripslashes($_POST['username']);
		$password = stripslashes($_POST['password']);
		
		if(!($connect = new mysqli($localhost, $username, $password, $dbname);)) exit('Error connecting to database.');
		

		$getCreds = mysqli_query("SELECT role FROM ".$dbtable." WHERE username='".$username."' AND password='".$password."'");
		$gotCreds = mysqli_fetch_array($getCreds);

		if(strcmp($gotCreds['role'],'med_admin')==0){
			$_SESSION['med_admin']='adminadmin';
			header("Location: med_admin_screen.php");
		}
		else if($gotCreds['role']=='receptionist'){
			$_SESSION['receptionist']='receptionistic';
			header("Location: med_store_reception.php");
		}
		else if($gotCreds['role']=='doctor'){
			$_SESSION['doctor']='doctordoctor';
			header("Location: med_store_doctor.php");
		}
		else
		{
			header("Location: index.html");
		}
	}
	else
	{
		header("Location: index.html");
	}
?>