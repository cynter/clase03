<?php 
	echo"Bienvenido a Destino!!<br>";
	var_dump($_REQUEST);

	if(strlen($_REQUEST['mensaje']<5))
	{
		include "MenorA5.php";
	}else{
		include "MayorA5.php";
	}
 ?>