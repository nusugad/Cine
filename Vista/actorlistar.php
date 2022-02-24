<html>
<head>
	<title>Listado de Actores</title>
	<link rel="stylesheet" type="text/css" href="../Formato/formato.css">
</head>
<body>
	<h1>Listado.</h1>
	<form>
		<table border="1" width="500" height="200" align="center" cellspacing="0">
			<tr>
				<th colspan="4"><a href="../vista/menu.php"><img src="../imagen/retorno.png"></a></th>
			<tr>
			<tr>
				<th colspan="4" class="PieyEncabezado">Listado de Actores</th>
			</tr>
			<tr>
				<td class="tdTitle" width="150">Codigo</td>
				<td class="tdTitle">nombre</td>
				<td>&nbsp; &nbsp;</td>
				<td>&nbsp; &nbsp;</td>
			</tr>
				<?php foreach ($aactor as $lactor){ ?>
			<tr>
				<td class="tdTitle"><?php echo $lactor -> codigoactor;?></td>
				<td class="tdTitle"><?php echo $lactor -> nombreactor;?></td>
				<td>&nbsp; &nbsp; <a href="../control/facade.php?opc=5&codigoactor=<?php echo $lactor-> codigoactor;?>"><img src="../imagen/eliminar.png" width="16"></a></td>
				<td>&nbsp; &nbsp; <a href="../control/facade.php?opc=6&codigoactor=<?php echo $lactor-> codigoactor;?>"><img src="../imagen/editar.png" width="16"></a></td>
			</tr>
			<?php } ?>
		</table>
	</form>
</body>
</html>