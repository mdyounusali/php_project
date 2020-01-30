<?php include 'header.php'; ?>
<?php
    
    if(isset($_POST['addcategory'])){
        $category = $_POST['category']; 
        $jim->addcategory($category);
    }
   
?>
		 <div id="page-wrapper" class="gray-bg dashbard-1">
       <div class="content-main">
 
 	<!--banner-->	
		     <div class="banner">
		    	<h2>
				<a href="index.php">Home</a>
				<i class="fa fa-angle-right"></i>
				<span>News</span>
				</h2>
		    </div>
		<!--//banner-->
 	<!--grid-->
 	<div class="grid-form">

<div class="clearfix"> </div>

<div class="col-md-12 tab-content tab-content-in">
<div class="tab-pane active text-style" id="tab1">
  <div class="inbox-right">
      <div class="mailbox-content">
          <label for="filter">Search</label> <input type="text" name="filter" value="" id="filter" />
          <script>
              $('#filter').on('keyup', function(e) {
    if ('' != this.value) {
        var reg = new RegExp(this.value, 'i'); // case-insesitive

        $('.table tbody').find('tr').each(function() {
            var $me = $(this);
            if (!$me.children('td').text().match(reg)) {
                $me.hide();
            } else {
                $me.show();
            }
        });
    } else {
        $('.table tbody').find('tr').show();
    }
});
          </script>
          <div class="pull-right"><span style="background-color: #ccc; color: #FFF; padding: 5px;"> <a href="addnews.php">Add News</a></span></div>
  
           <table class="table" id="resultTable">
                <thead>
							<tr>
								<th  style="border-left: 1px solid #C1DAD7"> ID </th>
								<th> Title </th>
								<th> Date </th>
								
                                <th> Action </th>
							</tr>
						</thead>
               
                   <tbody>
                        <?php
							include('db.php');
							$result = mysql_query("SELECT * FROM news");
							while($row = mysql_fetch_array($result))
                                                                	
								{
								$newsID = $row["id"];
                                                                echo '<tr class="record">';
									echo '<td style="border-left: 1px solid #C1DAD7;">'.$row['id'].'</td>';
									echo '<td><div align="right">'.$row['title'].'</div></td>';
									echo '<td><div align="right">'.$row['date'].'</div></td>';
									echo '<td><div align="center"><a href="deletenews.php?id='.$newsID.'" title="Click To Delete"><i class="fa fa-times-circle fa-lg text-danger"></i></a></div></td>';
									echo '</tr>';
								}
?> 
                     
                    </tbody>
                </table>
               </div>
            </div>
</div>
</div>
        </div>
 	


<div class="clearfix"> </div>
   </div>
    
</div>
                 </div>


<?php include 'footer.php'; ?>