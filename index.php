<?php
	$titulo = "Panel de control - Proyecto integrador";
	require "conexion.php";
	$sql="SELECT prd_nombre, prd_descripcion, prd_precio, prd_foto1 FROM productos";
	$resultado=mysqli_query($link,$sql) or die(mysqli_error($link));
	$cantidad=mysqli_num_rows($resultado); //cuenta la cantidad de registros
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
		<table id="panel">
			<tr>
				<th> Nombre </th>
				<th> Descripción </th>
				<th> Precio </th>
				<th> Imagen </th>
			</tr>
			<?php while($fila=mysqli_fetch_assoc($resultado)) { ?>
			<tr>
				<td class="lista"> <?php echo $fila['prd_nombre'] ?> </td>
				<td class="lista"> <?php echo $fila['prd_descripcion'] ?> </td>
				<td class="lista"> <?php echo $fila['prd_precio'] ?> </td>
				<td class="lista"> <img src='<?php echo "imagenes/",$fila['prd_foto1'] ?>' </td>
			</tr>
			<?php } ?>
			<tr>
				<td colspan="4" class="pie">
					Se han encontrado <?php echo " ", $cantidad, " " ?> registros
				</td>
			</tr>
		</table>
		
		
		
		
	</div>
	<div id="pie">
		<?php  include "pie.php"  ?>
	</div>
	
</body>
</html>