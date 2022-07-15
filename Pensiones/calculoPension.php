
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 	<title> Cálculo Pensión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
	
	<nav class="navbar navbar-dark bg-dark">
		<div class="container-md">
		  <a class="navbar-brand" href="#">Cálculo de pensiones</a>
		</div>
	  </nav>
</head>
<center>
<?php 
//BECM
$UMA = 96.22;
	if (isset($_POST['submit'])) {
		$salario = $_POST['salario'];
		$semanas = $_POST['semanas'];
		$edad = $_POST['edad']; 
		$ayuda = $_POST['ayuda'];
		$salarioPromedio = ($salario/$UMA);
		$IncrementocuantiaDiaria = ("");
		$cuantiaDiaria = ("");
		$incrementoDecreto = (1.11);
if($salarioPromedio > 6.1){
	$cuantiaDiaria = $salario * .13;
	$IncrementocuantiaDiaria = $salario * 0.0245;

}elseif ($salarioPromedio == 1){
	$cuantiaDiaria = $salario * .08;
	$IncrementocuantiaDiaria= $salario * 0.81;

}elseif (($salarioPromedio >= 1.01) || ($salarioPromedio<=1.25)){
	$cuantiaDiaria = $salario * .08;
	$IncrementocuantiaDiaria = $salario * 0.81;

}elseif (($salarioPromedio >= 1.26) || ($salarioPromedio<=1.50)){
	$cuantiaDiaria = $salario * .5518;
	$IncrementocuantiaDiaria = $salario * .0118;

}elseif(($salarioPromedio >=1.51) || ($salarioPromedio<=1.75)){
	$cuantiaDiaria = $salario * .4923;
	$IncrementocuantiaDiaria = $salario * .0143;

}elseif (($salarioPromedio >=1.76) || ($salarioPromedio<=2.00)){
	$cuantiaDiaria = $salario * .4267;
	$IncrementocuantiaDiaria= $salario * .0143;
	
}elseif (($salarioPromedio >=2.1) || ($salarioPromedio<=2.25)){
	$cuantiaDiaria = $salario *.3765;
	$IncrementocuantiaDiaria = $salario * .0176;

}elseif (($salarioPromedio >=2.26) || ($salarioPromedio<=2.50)){
	$cuantiaDiaria = $salario * .3368;
	$IncrementocuantiaDiaria = $salario * .0187;

}elseif (($salarioPromedio >=2.51) || ($salarioPromedio<=2.75)){
	$cuantiaDiaria = $salario* .3048;
	$IncrementocuantiaDiaria = $salario * .0196;

}elseif (($salarioPromedio >=2.76) || ($salarioPromedio<=3.00)){
	$cuantiaDiaria = $salario * .2783;
	$IncrementocuantiaDiaria = $salario * .0203;

}elseif (($salarioPromedio >=3.1) || ($salarioPromedio<=3.25)){
	$cuantiaDiaria = $salario * .256;
	$IncrementocuantiaDiaria = $salario * .021;

}elseif (($salarioPromedio >=3.26) || ($salarioPromedio<=3.50)){
	$cuantiaDiaria = $salario * .237;
	$IncrementocuantiaDiaria = $salario * .0215;

}elseif (($salarioPromedio >=3.51) || ($salarioPromedio <=3.75)){
	$cuantiaDiaria = $salario * .2207;
	$IncrementocuantiaDiaria = $salario * .022;

}elseif(($salarioPromedio >=3.76) || ($salarioPromedio <=4.0)){
	$cuantiaDiaria = $salario * .2065;
	$IncrementocuantiaDiaria = $salario * .0224;

}elseif (($salarioPromedio >=4.1) || ($salarioPromedio <=4.25)){
	$cuantiaDiaria = $salario * .1939;
	$IncrementocuantiaDiaria = $salario * .0227;
	
}elseif (($salarioPromedio >=4.26) || ($salarioPromedio <=4.50)){
	$cuantiaDiaria = $salario * .1829;
	$IncrementocuantiaDiaria = $salario * .023;

}elseif (($salarioPromedio >=4.51) || ($salarioPromedio <=4.75)){
	$cuantiaDiaria = $salario * .173;
	$IncrementocuantiaDiaria = $salario * .0233;

}elseif (($salarioPromedio >= 4.76) || ($salarioPromedio<=5.0)){
	$cuantiaDiaria = $salario *.1641;
	$IncrementocuantiaDiaria = $salario * .0236;

}elseif (($salarioPromedio >=5.1) || ($salarioPromedio<= 5.25)){
	$cuantiaDiaria = $salario *.1561;
	$IncrementocuantiaDiaria = $salario * .0238; 

}elseif (($salarioPromedio >=5.26) || ($salarioPromedio <= 5.50)){
	$cuantiaDiaria = $salario * .1488;
	$IncrementocuantiaDiaria = $salario * .024; 

}elseif (($salarioPromedio >=5.51) || ($salarioPromedio <= 5.75)){
	$cuantiaDiaria = $salario * .1422;
	$IncrementocuantiaDiaria = $salario * 0242; 

}elseif (($salarioPromedio >= 5.76) || ($salarioPromedio <= 6.00)){
	$cuantiaDiaria = $salario * .1362;
	$IncrementocuantiaDiaria = $salario * .0245; 
}

$cuantiaBasicaAnual = ($cuantiaDiaria * 365);// incremento anual previo 
$años = ($semanas - 500)/52; 
$incrementoAnualCuantia = ($cuantiaBasicaAnual * $años);
$cuantiaAnualPension = ($cuantiaBasicaAnual + $incrementoAnualCuantia);
$ayudaAnualAsignacion = ("");

if(($ayuda == 'esposa')||($ayuda == 'ninguno')) {
$ayudaAnualAsignacion = $cuantiaAnualPension * .15;
}elseif ($ayuda == 'hijos'){
	$ayudaAnualAsignacion = $cuantiaAnualPension * .10;	
}elseif($ayuda == 'padres'){
	$ayudaAnualAsignacion = $cuantiaAnualPension * .20;
}

		$pension = ($ayudaAnualAsignacion + $cuantiaAnualPension);
		$pensionAnualVejez = ($pension * $incrementoDecreto); 

if($edad >= 65){
	$pensionAnualVejez = $pensionAnualVejez * 1;
}elseif( $edad == 64){
	$pensionAnualVejez = $pensionAnualVejez * .95;
}elseif( $edad == 63){
	$pensionAnualVejez = $pensionAnualVejez * .90;
}elseif( $edad == 62){
		$pensionAnualVejez = $pensionAnualVejez * .85;
}elseif( $edad == 61){
			$pensionAnualVejez = $pensionAnualVejez * .80;
}elseif( $edad == 60){
				$pensionAnualVejez = $pensionAnualVejez * .75;
}
$pensionMensual = ($pensionAnualVejez / 12);
		
		$formattedNum = number_format($pensionAnualVejez,2)."<br>";
		$formattedNumM = number_format($pensionMensual,2)."<br>";

		echo "<br><br><br>Total pensión Anual: " . $formattedNum;
	
		echo "<br> Total pensión Mensual: " . $formattedNumM;
}

 ?>
 
</html>