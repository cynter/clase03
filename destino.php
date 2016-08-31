<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link rel="stylesheet" type="text/css" href="animacion.css">
</head>
<body>
	<div class="CajaInicio animated bounceInRight">
			<h1>Ingresaste</h1>
	</div>
	
	<div class="CajaInicio animated bounceInRight">
	<?php 
	//echo"Bienvenido a Destino!!<br>";
	//var_dump($_REQUEST);

	if(strlen($_REQUEST['mensaje']<5))
	{
		include "MenorA5.php";
	}else{
		include "MayorA5.php";
	}
 	?>
	</div>
	
	
</body>
</html>


