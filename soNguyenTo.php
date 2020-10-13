<?php
	include "function.php";

?>
<?php
	$result = [];
	if(!isset($_POST['so']) || !is_numeric($_POST['so']))  {
		$messageError = "Vui lòng nhập số !";
	} else {
		$n = $_POST['so'];				
		$k = 0;	
		$s = 0;
		if(($n) < 2){
			$messageError = "Số bạn nhập không là số nguyên tố !";
		} else if($n == 2) {
			$messageError = "Không có số nguyên tố nào nhỏ hơn 2 !";
			} else {
					$messageError = "Các số nguyên tố nhỏ hơn ".$n." là :"."<br>";
					for ($i=2; $i <$n ; $i++) { 
						if(soNguyenTo($i)) {
							$result[] = $i;
						}
				}
			}							
	}			
	
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP Example</title>
	<link rel="stylesheet" type="text/css" href="css/text.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body >	
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<form action="soNguyenTo.php" method="post" class="form">
				<h1>EXAMPLE</h1>
				<div class="group">
					Nhập số: <input type="text" name="so" value="<?php if(isset($_POST['so'])) { echo $_POST['so']; }?>">
					<button type="submit">Kiểm tra</button><br><br>	
					<?php 
						if (!empty($messageError)) {
							echo "<p>{$messageError}</p>";
						}
					?>											
					<?php 
						if (!empty($result)) {
							foreach ($result as $key => $value) {
								echo "[".$key."] =>";
								echo $value."<br>";
								$s = $s +$value;
							}
							echo "<br> Tổng các số nguyên tố nhỏ hơn ".$n." là : ";
							echo $s;

						}
					?>
				</div><br>
			</form>
		</div>
	</div>	
</body>
</body>
</html>