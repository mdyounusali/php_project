<?php
	include("db.php");
	
	$newsID = $_GET['id'];

	if(!empty($newsID)){
		$sqlSelectSpecProd = mysql_query("select * from news where id = '$newsID'") or die(mysql_error());
		$getProdInfo = mysql_fetch_array($sqlSelectSpecProd);
		$prodname= $getProdInfo["title"];
		$prodprice = $getProdInfo["body"];
		$proddesc = $getProdInfo["date"];
		$prodimage = $getProdInfo["file"];
				}
?>
<?php include('include/home/header.php'); ?>
	
	<section>
		<div class="container">
			<div class="row">
				
				<div class="col-sm-9 padding-right">
					<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
                            
						
							<img src="uploads/<?php echo $prodimage; ?>" />	
                                
							</div>
						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
							<h2 class="product"><?php echo $prodname; ?></h2>
								<p>Posted on: <?php echo $proddesc; ?></p>
				
								
                                <br>
                                
                                				<p> <?php echo $prodprice; ?></p>
								
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
				</div>
			</div>
		</div>
		</div>
	</section>
	
	<?php include('include/home/footer.php'); ?>