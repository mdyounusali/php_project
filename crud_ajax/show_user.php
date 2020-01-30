<?php
	include('conn.php');
	include('edit_modal.php');
	
	if(isset($_POST['show'])){
		?>
		<table class = "table table-bordered alert-warning table-hover">
			<thead>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Options</th>
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
									
									</td> 
								<!--	<td>
										<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Action
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <!-- Button trigger modal -->

    <!---------Here is the modal in this section for user Up data
   <div class="modal fade" id="edit<?php echo $urow['userid']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<?php
		$n=mysqli_query($conn,"select * from `user` where userid='".$urow['userid']."'");
		$nrow=mysqli_fetch_array($n);
	?>
  <div class="modal-dialog" role="document">
    <div class="modal-content">
		<div class = "modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<center><h3 class = "text-success modal-title">Update Member</h3></center>
		</div>
		<form class="form-inline">
		<div class="modal-body">
			Firstname: <input type="text" value="<?php echo $nrow['firstname']; ?>" id="ufirstname<?php echo $urow['userid']; ?>" class="form-control">
			Lastname: <input type="text" value="<?php echo $nrow['lastname']; ?>" id="ulastname<?php echo $urow['userid']; ?>" class="form-control">
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal"><span class = "glyphicon glyphicon-remove"></span> Cancel</button> | <button type="button" class="updateuser btn btn-success" value="<?php echo $urow['userid']; ?>"><span class = "glyphicon glyphicon-floppy-disk"></span> Save</button>
		</div>
		</form>
    </div>
  </div>
</div>
  -Here is the modal in this section for user data--->


								</tr>
							<?php
						}
					
					?>
				</tbody>
			</table>
		<?php
	}

?>