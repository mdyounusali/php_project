 <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap.min.css">

<?php
	include('conn.php');
	if(isset($_POST['show'])){
		?>
		<div class="container">
 	    <div class="col-md-8 col-md-offset-2">
		<table id="example" class = "table table-bordered alert-warning table-hover">
			<thead>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Action</th>
			</thead>
				<tbody>
					<?php
						$quser=mysqli_query($conn,"select * from `user`");
						while($urow=mysqli_fetch_array($quser)){
							?>
								<tr>
									<td><?php echo $urow['firstname']; ?></td>
									<td><?php echo $urow['lastname']; ?></td>
									<td><button class="btn btn-success" data-toggle="modal" data-target="#edit<?php echo $urow['userid']; ?>"><span class = "glyphicon glyphicon-pencil"></span> Edit</button> | <button class="btn btn-danger delete" value="<?php echo $urow['userid']; ?>"><span class = "glyphicon glyphicon-trash"></span> Delete</button>
									<?php include('edit_modal.php'); ?>
									</td>
								</tr>
							<?php
						}
					
					?>
				</tbody>
			</table>
			</div>
			</div>
		<?php
	}

?>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
    $('#example').DataTable();
} );
</script>