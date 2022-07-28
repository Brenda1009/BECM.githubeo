
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 	<title> Cálculo Pensión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
	
	<nav class="navbar navbar-expand-lg bg-light">
		<div class="container-fluid">
		  <a class="navbar-brand" href="index.html">Cálculo de Pensión</a>
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarText">
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
			  <li class="nav-item">
				<a class="nav-link active" aria-current="page" href="calculoSalario.html">Cálculo salario</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link" href="modalidad40.html">Modalidad 40</a>
			  </li>
			</ul>
		  </div>
		</div>
	  </nav>
</head>
<!--center-->
<div class="container">
<h4><br>Cálculo: </h4>
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
$incrementoAnualCuantia = ($IncrementocuantiaDiaria * 365)* $años;
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
		$pensionAnualVejez60 = ($pensionAnualVejez * .75);
		$pensionAnualVejez61 = ($pensionAnualVejez * .80);
		$pensionAnualVejez62 = ($pensionAnualVejez * .85);
		$pensionAnualVejez63 = ($pensionAnualVejez * .90);
		$pensionAnualVejez64 = ($pensionAnualVejez * .95);
		$pensionAnualVejez65 = ($pensionAnualVejez * 1);

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
		
		$formattedNumCBA = number_format($cuantiaBasicaAnual,2)."<br>";
		$formattedNumIACB = number_format($incrementoAnualCuantia,2)."<br>";
		$formattedNumCAP = number_format($cuantiaAnualPension,2)."<br>";
		$formattedNumCAPyA = number_format($ayudaAnualAsignacion + $cuantiaAnualPension,2)."<br>"; 
		$formattedNum = number_format($pensionAnualVejez,2)."<br>";
		$formattedNumM = number_format($pensionMensual,2)."<br>";

		echo "<br><br>Cuantía BásicaAnual: $" .$formattedNumCBA;
		echo "<br>Incremento Anual a la cuantía básica: $" .$formattedNumIACB;
		echo "<br>Cuantía anual de la pensión: $" .$formattedNumCAP;
		echo "<br>Cuantía anual de la pensión más ayudas: $".$formattedNumCAPyA;
		echo "<br>Pensión Anual: $" . $formattedNum;
		
		echo "<div align='center'><br><br>Total pensión Anual: $" . $formattedNum;
		echo "<br> Total pensión Mensual: $.$formattedNumM</div>";
		

$linkAddress = 'modalidad40.html';
$diferencia5años = ($pensionAnualVejez60 * 5);
$diferencia = ($pensionAnualVejez65 /12) - ($pensionAnualVejez60/12);
$formattedNum60 = number_format($pensionAnualVejez60,2)."<br>";
$formattedNum61 = number_format($pensionAnualVejez61,2)."<br>";
$formattedNum62 = number_format($pensionAnualVejez62,2)."<br>";
$formattedNum63 = number_format($pensionAnualVejez63,2)."<br>";
$formattedNum64 = number_format($pensionAnualVejez64,2)."<br>";
$formattedNum65 = number_format($pensionAnualVejez65,2)."<br>";
$formattedNumDif = number_format($diferencia,2)."<br>";
$formattedNum5 = number_format($diferencia5años,2)."<br>";



	if($edad<=64){
		echo "<br><br><br>Pensión anual que recibirías si te jubilas a los: <br>";
		echo "<br>60 años: $". $formattedNum60;
		echo "<br>61 años: $". $formattedNum61;
		echo "<br>62 años: $". $formattedNum62;
		echo "<br>63 años: $". $formattedNum63;
		echo "<br>64 años: $". $formattedNum64;
		echo "<br>65 años: $". $formattedNum65;

		echo "<br>Diferencia mensual entre jubilación a los 60 y a los 65 años es de $". $formattedNumDif;
		echo "<br>Por 5 años : $". $formattedNum5 ;
		echo"<br><br>Calcula como:";
		echo "<br><a href= '$linkAddress?pensionmensual=$formattedNumM'>Modalidad 40</a><br>";
		
			

	
	}
		
}

 ?>
 
</html>