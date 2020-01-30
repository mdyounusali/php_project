<?php include('conn.php');?>
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
	<div style="position: relative;top: 0%;left:35%;">
		<h1>Data Entry Form</h1>
		 
<!-- Trigger the modal with a button -->
                        <?php include('ADD.php'); ?>
						<button class="btn btn-success"  data-toggle="modal" data-target="#add" >Create_user</button>



	<!-----  Add data madal------>
	</div>
 <div class="container">
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
									<td style="text-align: center;"><button class="btn btn-success" data-toggle="modal" data-target="#edit<?php echo $urow['userid']; ?>"><span class = "glyphicon glyphicon-pencil"></span> Edit</button> | <button class="btn btn-danger delete" id ="del" value="<?php echo $urow['userid']; ?>"><span class = "glyphicon glyphicon-trash"></span> Delete</button>
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
                <th style="text-align: center;">LastName</th>
                <th style="text-align: center;">Action</th>
            </tr>
        </tfoot>
   </table>
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

</html>