<?php
	function soNguyenTo($n) 
		{
			for ($i=2; $i <= sqrt($n); $i++) { 
				if ($n % $i == 0) {
					return false;
				}
			}
			return true;
		}

	function tinhTong($m)
		{
			$sum = 0;
			foreach ($m as $key => $value) {
				$sum = $sum + $value;
			}
			echo "<br>Tổng các phần tử trong mảng là : $sum";	
		}

	function readNumber($x) 
		{				
			$am = substr($x , 0, 1);			
			if ($am == "-") {
				echo "âm";
				$x = substr($x, 1,strlen($x));				
			}	
			$a = strlen($x);					
			for ($i=0; $i <= $a ; $i++) { 
				$m = substr($x, 0, 1);
				if ($m == 0) {					
					$x = substr($x, 1,strlen($x));
				}			
			}			
			if((strpos($x, ".") == true)) {
				$mang = explode(".", $x);	
				$lenght1 = strlen($mang[0]);
				docSo($mang[0], $lenght1);
				if ($mang[1] == 00) {
					echo "";
					}else{
						echo " phẩy";
						$b = strlen($mang[1]);					
						for ($j = $b; $j >= 0 ; $j--) { 
							$l = substr($mang[1], -1, strlen($mang[1]));
							if ($l == 0) {					
								$mang[1] = substr($mang[1], 0, -1);	
							}		
						}
						$thapPhan = strlen($mang[1]);
						for ($i1=0; $i1 <= $thapPhan; $i1++) { 
							$so = substr($mang[1], 0, 1);
							docSo($so , 1);
							$mang[1] = substr($mang[1], 1, $thapPhan);
						}											
				}				
			}else{
				$lenght = $a;
				docSo($x, $lenght);				
				}			
		}
		function docSo($n, $k)
			{						
				if ($k > 9) {
					$x = substr($n, -3, $k);
					$y = substr($n, -6, -3);
					$z = substr($n, -9, -6);
					$t = substr($n, 0, -9);
					read($t, strlen($t));
					echo " tỷ";
					read($z, 3);
					if ($z == 000) {
						echo "";
					}else { 
						echo " triệu";
					}
					read($y,3);
					if ($y == 000) {
						echo "";
					}else {
						echo " nghìn";
					}
					read($x, 3);
				} elseif ($k > 6) {
					$x = substr($n, -3, $k);
					$y = substr($n, -6, -3);
					$z = substr($n, 0, -6);
					read($z, strlen($z));
					echo " triệu";
					read($y, 3);
					if ($y == 000) {
						echo "";
					}else {
						echo " nghìn";
					}
					read($x, 3);
				} elseif ($k > 3) {
					$x = substr($n, -3, $k);
					$y = substr($n, 0, -3);
					read($y,strlen($y));
					echo " nghìn";
					read($x, 3);
				} else {
					read($n, strlen($n));
				}
			}	
		function read($a, $lenght)		
			{
			if($lenght == 1) {
				$donVi = substr($a,strlen($a)-1,1);
				$chuc = 0;
				$tram = 0;
				$nghin = 0;
				} elseif ($lenght == 2) {
					$donVi = substr($a,strlen($a)-1,1);
					$chuc = substr($a,strlen($a)-2,1);
					$tram = 0;
					$nghin = 0;
					} elseif ($lenght == 3) {
						$donVi = substr($a,strlen($a)-1,1);
						$chuc = substr($a,strlen($a)-2,1);
						$tram = substr($a,strlen($a)-3,1);
						$nghin = 0;
					} else {
						$donVi = substr($a,strlen($a)-1,1);
						$chuc = substr($a,strlen($a)-2,1);
						$tram = substr($a,strlen($a)-3,1);
						$nghin = substr($a,strlen($a)-4,1);
					}
			
				switch ($nghin) {
					case '1':
						echo " một nghìn";
						break;
						case '2':
						echo " hai nghìn";
						break;
						case '3':
						echo " ba nghìn";
						break;
						case '4':
						echo " bốn nghìn";
						break;
						case '5':
						echo " năm nghìn";
						break;
						case '6':
						echo " sáu nghìn";
						break;
						case '7':
						echo " bảy nghìn";
						break;
						case '8':
						echo " tám nghìn";
						break;
						case '9':
						echo " chín nghìn";
						break;							
					
					default:
						echo "";
						break;
				}
				switch ($tram) {
					case '1':
						echo " một trăm";
						break;
						case '2':
						echo " hai trăm";
						break;
						case '3':
						echo " ba trăm";
						break;
						case '4':
						echo " bốn trăm";
						break;
						case '5':
						echo " năm trăm";
						break;
						case '6':
						echo " sáu trăm";
						break;
						case '7':
						echo " bảy trăm";
						break;
						case '8':
						echo " tám trăm";
						break;
						case '9':
						echo " chín trăm";
						break;			
					
					default:
						{
							if ($chuc == 0 && $donVi == 0) {
									echo "";
							}elseif ($lenght > 2 && $nghin <> 0) {
								echo " không trăm";
							} else{
								echo "";
							}
						}
						break;			
				}
				switch ($chuc) {
					case '1':
						echo " mười";
						break;
						case '2':
						echo " hai mươi";
						break;
						case '3':
						echo " ba mươi";
						break;
						case '4':
						echo " bốn mươi";
						break;
						case '5':
						echo " năm mươi";
						break;
						case '6':
						echo " sáu mươi";
						break;
						case '7':
						echo " bảy mươi";
						break;
						case '8':
						echo " tám mươi";
						break;
						case '9':
						echo " chín mươi";
						break;			
					
					default:
						{
							if ($donVi == 0) {
									echo "";
								}elseif ($lenght > 2 ) {
									echo " lẻ";
									} else{
										echo "";
									}
						}
						
						break;
				}
				switch ($donVi) {
					case '1':
						{
							if (strlen($a) > 1 && $chuc <> 0 && $chuc <> 1) {
								echo " mốt";
								}else {
									echo " một";
								}
						}
						break;
						case '2':
						echo " hai";
						break;
						case '3':
						echo " ba";
						break;
						case '4':
						echo " bốn";
						break;
						case '5':
						{
							if (strlen($a)>1 && $chuc <> 0) {
								echo " lăm";
								}else {
									echo " năm";
								}
						}
						break;
						case '6':
						echo " sáu";
						break;
						case '7':
						echo " bảy";
						break;
						case '8':
						echo " tám";
						break;
						case '9':
						echo " chín";
						break;								
					
					default:
						{
							if (strlen($a) == 1){
								echo " không";
								}
								echo "";
						}						
						break;
				}
			}
		
?>