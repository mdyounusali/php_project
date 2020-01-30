<?php
	session_start();
	if(!isset($_SESSION['med_admin']))
	{
		header("Location: index.html");
		exit();
	}
	if(isset($_POST['sqlq']))
	{
		$sqlq = $_POST['sqlq'];

		include 'config.php';
		$connect = new mysqli($localhost, $username, $password, $dbname);
// check connection
if($connect->connect_error) {
  die("Connection Failed : " . $connect->connect_error);
} else {
  // echo "Successfully connected";
}
		$sqlq = mysqli_query($sqlq);
		if(!$sqlq)
		{
			echo "Query Failed.<br />";
			exit;
		}
		$num_rows = mysqli_num_rows($sqlq);
		echo "<pre>Fetched ".$num_rows." rows. Output:<br /><br />";
		echo "<table border=1><tr>";
		for($i = 0; $i < mysqli_num_fields($sqlq); $i++)
		{
    			$field_info = mysqli_fetch_field($sqlq, $i);
			echo "<th>{$field_info->name}</th>";
		}
		echo "</tr>";
		while($row = mysqli_fetch_row($sqlq))
		{
			echo "<tr>";
			foreach($row as $_column)
			{
				echo "<td>{$_column}</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
?>
