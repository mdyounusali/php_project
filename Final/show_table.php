<?php include('conn.php');?>
<?php include('addnew.php');?>
<!DOCTYPE html>
<html>
<head>
	<title>Data_table</title>
	 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">
	   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>    
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.2/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.2/js/bootstrap.min.js"></script>
</head>
<body>
	
 <!--<div class="container"> 
 	<div class="col-md-8 col-md-offset-2">
 		 <table id="example"  class="table table-striped table-bordered table-hover">
    <thead>
        <tr> 
                <th style="text-align: center;">FirstName</th>
                <th style="text-align: center;">LastName</th>            
                <th style="text-align: center;">Action</th>
               
        </tr>
    </thead>
    <tbody>
	   
	<?php             include('conn.php');
						$quser=mysqli_query($conn,"select * from `user`");
						while($urow=mysqli_fetch_array($quser)){
							?>
								<tr>
									<td style="text-align: center;"><?php echo $urow['firstname']; ?></td>
									<td style="text-align: center;"><?php echo $urow['lastname']; ?></td>
									<td style="text-align: center;"><button class="btn btn-success" data-toggle="modal" data-target="#edit<?php echo $urow['userid']; ?>"><span class = "glyphicon glyphicon-pencil"></span> Edit</button> | <button class="btn btn-danger delete" value="<?php echo $urow['userid']; ?>"><span class = "glyphicon glyphicon-trash"></span> Delete</button>
									<?php include('edit_modal.php'); ?>
									</td>
								</tr>
							<?php
						}
					
					?>    
        </tbody>
        <tfoot>
            <tr>
                <th style="text-align: center;">FirstName</th>
                <th style="text-align: center;"LastName</th>
                <th style="text-align: center;">Action</th>
            </tr>
        </tfoot>
   </table>
 	</div>
 </div> -->
 <div id="userTable"></div>
			</div>

<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
</body>
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
		$(document).on('click', '#del', function(){
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
		
	
	});
	
	//Showing our Table
	function showUser(){
		$.ajax({
			url: "table.php",
			type: "POST",
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