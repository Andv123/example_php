<?php
	include 'function.php';
?>
<?php
	if (isset($_POST['number'])) {
		$num = $_POST['number'];
		if ($num == null) {
			$messageError = "Vui lòng nhập số !";
		}elseif (!is_numeric($_POST['number'])) {
			$messageError = "Nhập sai !<br>Vui lòng nhập số !";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Read Number</title>
	<link rel="stylesheet" type="text/css" href="css/text.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<form action="readNumber.php" method="post" class="form">
				<h1>READ NUMBER</h1>
				<div class="group">
					Nhập số: <input type="text" name="number" 
					value="<?php if(isset($_POST['number'])) { 
							echo ($_POST['number']); 
						}/*else{ 
							echo number_format($_POST['number'], 2, '.', ',',);
						}*/
						?>">
					<button type="submit">Đọc số</button><br><br>
					<?php
						if(!empty($messageError)) {
							echo "<p style='text-align: left;color:#FF0000; font-weight: bold'>{$messageError}</p>";
						}else {	
							if (isset($_POST['number'])) {
								$num = $_POST['number'];
								readNumber($num);
								echo " .";
							}
							
						}
					?>
				</div><br>
			</form>
		</div>
	</div>
</body>
</html>