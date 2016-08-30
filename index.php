<html>
<head>
	<title></title>
</head>
<body>

	<form method="GET" action="destino.php">

		<input type="text" name="mensaje"> 
		<input type="submit">



	</form>	

</body>
</html>

<?php 
	
	echo "Hola php !!<br><br>";
	echo"Variable REQUEST<br>";
	var_dump($_REQUEST);
	echo"<br>";

	echo"Variable GET<br>";
	var_dump($_GET);
	echo"<br>";

	echo"Variable POST<br>";
	var_dump($_POST);


	if(isset($_POST['mensaje']))
	{
		echo $_POST['mensaje'];
	}else{
		echo "<br>Primer ingreso!!";
	}

 ?>

