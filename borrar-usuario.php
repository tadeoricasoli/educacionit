<?php
	require "autenticar.php";
	$titulo = "Panel de control - Baja de usuario";
	$usuid=$_POST["usu_id"];
	require "conexion.php";
	$sql="DELETE FROM USUARIOS WHERE usu_id=".$usuid;
	mysqli_query($link,$sql) or die(mysqli_error($link));
	$chequeo=mysqli_affected_rows($link);//devuelve cantidad de registros afectados
	mysqli_close($link);
?>
<?php include "encabezado.php"; ?>
</head>
<body>
	<div id="top"><img src="imagenes/top.png" alt="encabezado" width="980" height="80"></div>
	<div id="nav">
		<?php  include "menu.php"; ?>
	</div>
	<div id="main">
		<h1><?php echo $titulo ; ?></h1>
		<!-- inicio del desarrollo -->
		<?php if ($chequeo>0){
			echo "<h3> Se ha eliminado usuario correctamente <h3>";
			}  else {
				echo "<h3>No se ha podido eliminar el usuario <h3>";
				} 
		// Volver al panel de usuarios
				?>
				<br>
				<br>
				
			<a href="panel-usuarios.php"> Volver al panel </a>
		
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>