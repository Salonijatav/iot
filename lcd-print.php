<?php
	require 'include/conn.php';
	require 'include/session.php';
	if(isset($_GET['submit'])){
		$print_me=$_GET['print_me'];
		$sql = "UPDATE `members` SET `lcdprint`='$print_me' WHERE id=$id";
		$result=$conn->query($sql);
	}
	$sql= "SELECT lcdprint FROM members WHERE id='$id'";
	$result = $conn->query($sql);
	$rowdata = $result->fetch_assoc();
	$printed_data = $rowdata['lcdprint'];
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
		<?php include 'include/header.php';?>
		<div class="container">
			<div class="row">
				<div class="col-md-12 display-4">
					LCD Printer
				</div>
				<div class="col-md-4">
					<span>
						Now Printing : <?php echo $printed_data ?>
					</span>
					<form>
						<input type="text" name="print_me">
						<button type="submit" name="submit">Print On LCD</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>