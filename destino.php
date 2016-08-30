<?php 
	echo"Bienvenido a Destino!!<br>";
	var_dump($_REQUEST);

	if(strlen($_REQUEST<5))
	{
		include "MenorA5.html";
	}else{
		include "MayorA5.html";
	}
 ?>