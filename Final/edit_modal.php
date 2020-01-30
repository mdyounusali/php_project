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
		<form class="form-inline" method="POST" action="update.php">
		<div class="modal-body">
			Firstname: <input type="text" name="fn" value="<?php echo $nrow['firstname']; ?>" id="ufirstname<?php echo $urow['userid']; ?>" class="form-control">
			Lastname: <input type="text" name="ln" value="<?php echo $nrow['lastname']; ?>" id="ulastname<?php echo $urow['userid']; ?>" class="form-control">
		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal"><span class = "glyphicon glyphicon-remove"></span> Cancel</button> | <button  type="submit" name ="id" class="updateuser btn btn-success" value="<?php echo $urow['userid']; ?>"><span class = "glyphicon glyphicon-floppy-disk"></span> Save</button>
		</div>
		</form>
    </div>
  </div>
</div>