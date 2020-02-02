<?php
require 'include/conn.php';
require 'include/session.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
		
	</head>
	<body>
		
		
		
		<div class="header">
			<?php include 'include/header.php';?>
			<div class="container" id="moniter">
				
			</div>
		</div>
		<div class="main_area">
			<?php
           
           
              ?>
			</div>
			
		</div>
		<div class="footer">
			
		</div>
	</body>
</html>
<script type="text/javascript">
	
	moniter();
	function moniter() {
		$("#moniter").load('include/moniter.php');
	}
	setInterval(moniter, 3000);
	function update(sw,sw_val) {
		var link = 'include/update.php?sw='+sw+'&sw_val='+sw_val;
		$.get(link,moniter);
	}
</script>