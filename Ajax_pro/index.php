<!DOCTYPE html>
<html>
<head>
	<title><AJAX with PHP and MySQL</title>
	<script type ="text/javascript" src="js/jquery-1.11.3js"></script>
	<script type ="text/javascript">
		$(document).ready(function()){
			$.ajax({
				url: "date.php",
				data : "",
				datatype: "text",
				success: function(strDate){
					$('#show_date').text(strDate)
				}
			})	
		})
	</script>
</head>
<body>
<h1><AJAX with PHP and MySQL =>Introduction</h1>
<div id="show_date"></div>
</body>
</html>	
</html>	
		
			