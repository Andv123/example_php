<?php
	include 'function.php';
?>
<!DOCTYPE html>
<?php	
	$result = [];
	if(isset($_POST['mang'])){
		$m = $_POST['mang'];
		$str = str_replace(",", "", $m);
		$newStr =str_replace(" ","",$str);
		if (empty($_POST['mang'])) {
			$messageError = "Vui lòng nhập dãy số, cách nhau bằng dấu \",\"";
		}elseif (is_numeric($str) == false) {		
			$messageError = "Nhập sai ! Vui lòng nhập lại.<br>
			Vui lòng nhập dãy số, cách nhau bằng dấu \",\"
			<br>Không dùng kí tự space";		
			}
		else{	 	
			$result = explode(",", $m);
			sort($result);					
		}
	}	
?>

<html>
<head>
	<title>EXAMPLE PHP</title>
	<link rel="stylesheet" type="text/css" href="css/text.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<form action="array.php" method="post" class="form">
				<h1>EXAMPLE</h1>
				<div class="group">
					Nhập dãy số: <input type="text" name="mang" value="<?php if(isset($_POST['mang'])) { echo $_POST['mang']; }?>">
					<button type="submit">Cắt chuỗi</button><br><br>
					<?php
						if(!empty($messageError)) {
							echo "<p style='text-align: left;color:#FF0000; font-weight: bold'>{$messageError}</p>";
						}elseif(!empty($_POST['mang'])){
							echo "Mảng sau khi được tách và sắp xếp là :<br>";
							print_r($result);
							tinhTong($result);
						}					
					?>	
				</div><br>				
			</form>
		</div>
	</div>
</body>
</html>