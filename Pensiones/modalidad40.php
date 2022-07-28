<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 	<title> Modalidad 40</title>
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
<div class="container">
<?php

if (isset($_POST['submit'])) {
    $veces = $_POST['veces'];
	$edad = $_POST['edad'];

	//$pension =$_GET['pensionmensual'];


    $salarioDiario = ($veces * 96.22);
    $costoMensual = ($salarioDiario * 0.10075 * 30.4); 
    $años = ( 65 - $edad);
    $inversion = ($costoMensual * $años * 12);
	//$recuperacionI = ($inversion/$);

    $formattedNumSD = number_format($salarioDiario,2)."<br>";
    $formattedNumCM = number_format($costoMensual,2)."<br>";
    $formattedNumI = number_format($inversion,2);"<br>";

	echo "<br><br><br>Para alcanzar el 100% de tu pensión deberías:";
    echo "<br><br>Salario diario a depositar: $" . $formattedNumSD; 
    echo "<br>Costo mensual depositado: $" . $formattedNumCM;
    echo "<br>Inversión: $" .$formattedNumI;
	//echo "<br><br><br>Meses de pensión para recuperar la inversión:";
	//echo "<br> " .$recuperacionI;
	
	
}
?>
</div>
</html>