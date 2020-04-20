<?php 
class Metodos{

	function __construct() {
       
   	}

	public function calcularPregunta1($n, $m){
		if($n%$m == 0){
			return true;
		}else{
			return false;
		}
	}

	public function calcularPregunta2($filas, $columnas){
		$res = ''; $auxi = false; $auxi2 = true;
		for($i = 1; $i <= $filas; $i++){

			$res = $res . "<tr>";

			for($k = 1; $k<=$columnas; $k++){
				if($k%2 != 0){
					if($i%3 == 0){
						$res = $res . "<td style='background: green'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
					}else if(!$auxi){
							if($i%2 != 0){
								if($auxi2){
									$res = $res . "<td style='background: red'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
									$auxi2 = !$auxi2;
								}else{
									$res = $res . "<td style='background: yellow'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
									$auxi2 = !$auxi2;
								}
								
							}else{

								$res = $res . "<td style='background: yellow'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
								$auxi = !$auxi; // p se imprime cuando $i MOD 2 == 0
							}
					}else{
							if($i%2 == 0){
								if(!$auxi2){
									$res = $res . "<td style='background: red'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
									$auxi2 = !$auxi2;
								}else{
									$res = $res . "<td style='background: yellow'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
									$auxi2 = !$auxi2;
								}
								
							}else{
								$res = $res . "<td style='background: yellow'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
								$auxi = !$auxi;
							}
					}
					
				}else{
					//$auxi = !$auxi;
					if($i%2 != 0){
						$res = $res . "<td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
					}else{
						$res = $res . "<td style='background: red'>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
					}
				}
				//echo $color1."-".$color2."<br>";				
			}
			$res = $res . "</tr>";
		}
		return $res;
	}
		
	}

?>