<?php
	include('conn.php');
?>
<!DOCTYPE html>
<html lang = "en">
	<head>
		<meta charset = "UTF-8" name = "viewport" content = "width-device=width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
		<title>PHP CRUD Operation using AJAX/JQuery</title>
	</head>
<body>
	<div style="height:30px;"></div>
	<div class = "row">	
		<div class = "col-md-3">
		</div>
		<div class = "col-md-6 well">
			<div class="row">
                <div class="col-lg-12">
                    <center><h2 class = "text-primary">PHP - CRUD Operation using AJAX/JQuery</h2></center>
					<hr>
				      <?php include('ADD.php'); ?>
						<button class="btn btn-success"  data-toggle="modal" data-target="#add" >Create_user</button>
                </div>
            </div><br>
			<div class="row">
			<div id="userTable"></div>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>
</body>
<script src = "js/jquery-3.1.1.js"></script>	
<script src = "js/bootstrap.js"></script>
<script type = "text/javascript">
	$(document).ready(function(){
		showUser();
		//Add New
		$(document).on('click', '#addnew', function(){
			if ($('#firstname').val()=="" || $('#lastname').val()==""){
				alert('Please input data first');
			}
			else{
			$firstname=$('#firstname').val();
			$lastname=$('#lastname').val();				
				$.ajax({
					type: "POST",
					url: "addnew.php",
					data: {
						firstname: $firstname,
						lastname: $lastname,
						add: 1,
					},
					success: function(){
						showUser();
					}
				});
			}
		});
		//Delete
		$(document).on('click', '.delete', function(){
			$id=$(this).val();
				$.ajax({
					type: "POST",
					url: "delete.php",
					data: {
						id: $id,
						del: 1,
					},
					success: function(){
						showUser();
					}
				});
		});
		//Update
		$(document).on('click', '.updateuser', function(){
			$uid=$(this).val();
			$('#edit'+$uid).modal('hide');
			$('body').removeClass('modal-open');
			$('.modal-backdrop').remove();
			$ufirstname=$('#ufirstname'+$uid).val();
			$ulastname=$('#ulastname'+$uid).val();
				$.ajax({
					type: "POST",
					url: "update.php",
					data: {
						id: $uid,
						firstname: $ufirstname,
						lastname: $ulastname,
						edit: 1,
					},
					success: function(){
						showUser();
					}
				});
		});
	
	});
	
	//Showing our Table
	function showUser(){
		$.ajax({
			url: 'show_user.php',
			type: 'POST',
			async: false,
			data:{
				show: 1
			},
			success: function(response){
				$('#userTable').html(response);
			}
		});
	}
	
</script>
</html>