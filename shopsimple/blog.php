<?php include('include/home/header.php'); ?>

    	<section>
		<div class="container">
			<div class="row">
				

                    
    <div class="col-sm-9 padding-right">
        
        
        <!-- FlexSlider -->
				 
            
<!-- FlexSlider -->
        
					<div class="features_items"><!--features_items-->
                                            <div>
                                                
                                                 <section class="slider">
				 
	      </section>
                                                <div class="clearfix"></div>                                        
                                                
                                                
                                            </div>
                                            
						<h2 class="title text-center">All News</h2>

	
<!--php starts here-->
<?php				
				//$filter = isset($_POST['filter']) ? $_POST['filter'] : '';
				
				{   
					$result = mysqli_query("SELECT * FROM news limit 6");
                }
					
				if($result){				
				while($row=mysqli_fetch_array($result)){
					
				$newsID = $row["id"];	
					echo '<ul class="col-sm-4">';
					echo '<div class="product-image-wrapper">
						  <div class="single-products">
						  <div class="productinfo text-center">
					<a href="news-details.php?id='.$newsID.'" rel="bookmark" title="'.$row['title'].'"><img src="uploads/'.$row['file'].'" alt="'.$row['title'].'" title="'.$row['title'].'" width="150" height="150" /></a>
<h2><a href="news-details.php?id='.$newsID.'" rel="bookmark" title="'.$row['title'].'">'.$row['title'].'</a></h2>
					                  
					</div>';		
					echo '</ul>';			
				}
				}
				?>

<!--php ends here-->
		</div>
        </div>
</div>
</div>
</div>
</section>

<?php include('include/home/footer.php'); ?>