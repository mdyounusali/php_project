<div class="footer-bottom">
			<div class="container">
				<div class="row"> <?php
                            //include('../connect.php');
				$result =  $connect->query("SELECT * FROM settings");
				for($i=0; $row = mysqli_fetch_row($result); $i++){
              ?> 
                                    
					<p class="pull-left">Copyright © 2017 <?php echo $row['site_name']; ?>. All rights reserved.</p>
					<p class="pull-right">Designed by <span>Hillsofts</span></p>
                                <?php }?></div>
			</div>
		</div>
						
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/script.js"></script>
</body>
</html>