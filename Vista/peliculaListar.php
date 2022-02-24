<html>
<head>
	<title>Listado de Peliculas</title>
	<link rel="stylesheet" type="text/css" href="../Formato/formato.css">
</head>
<body>
	<h1>Listado.</h1>
	<form>
		<table border="1" width="800" height="200" align="center" cellspacing="0">
			<tr>
				<th colspan="7"><a href="../vista/menu.php"><img src="../imagen/retorno.png"></a></th>
			<tr>
			<tr>
				<th colspan="7" class="PieyEncabezado">Listado de Peliculas</th>
			</tr>
			<tr>
				<td class="tdTitle" width="150">Id Pelicula</td>
				<td class="tdTitle">Titulo</td>
				<td class="tdTitle">Latino</td>
				<td class="tdTitle">Publicación</td>
				<td class="tdTitle">Imagen</td>
				<td>&nbsp; &nbsp; &nbsp; &nbsp;</td>
				<td>&nbsp; &nbsp; &nbsp; &nbsp;</td>
			</tr>
			<?php foreach ($apelicula as $lpelicula){ ?>
			<tr>
				<td class="tdTitle"><?php echo $lpelicula -> idpelicula;?></td>
				<td class="tdTitle"><?php echo $lpelicula -> titulooriginal;?></td>
				<td class="tdTitle"><?php echo $lpelicula -> titulolatino;?></td>
				<td class="tdTitle"><?php echo $lpelicula -> publicacion;?></td>
				<td class="tdTitle"><img src="<?php echo $lpelicula -> imagen;?>" width=80></td>
				<td>&nbsp; &nbsp; <a href="../control/facade.php?opc=35&idpelicula=<?php echo $lpelicula-> idpelicula;?>"><img src="../imagen/eliminar.png" width="40"></a></td>
				<td>&nbsp; &nbsp; <a href="../control/facade.php?opc=36&idpelicula=<?php echo $lpelicula-> idpelicula;?>"><img src="../imagen/editar.png" width="40"></a></td>
			</tr>
			<?php } ?>
		</table>
	</form>
</body>
</html>