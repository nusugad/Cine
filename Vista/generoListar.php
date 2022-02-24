<html>
<head>
	<title>Listado de Generos</title>
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
				<th colspan="4" class="PieyEncabezado">Listado de Generos</th>
			</tr>
			<tr>
				<td class="tdTitle" width="150">Codigo</td>
				<td class="tdTitle">nombre</td>
				<td>&nbsp; &nbsp;</td>
				<td>&nbsp; &nbsp;</td>
			</tr>
				<?php foreach ($agenero as $lgenero){ ?>
			<tr>
				<td class="tdTitle"><?php echo $lgenero -> codigogenero;?></td>
				<td class="tdTitle"><?php echo $lgenero -> nombregenero;?></td>
				<td>&nbsp; &nbsp; <a href="../control/facade.php?opc=25&codigogenero=<?php echo $lgenero-> codigogenero;?>"><img src="../imagen/eliminar.png" width="16"></a></td>
				<td>&nbsp; &nbsp; <a href="../control/facade.php?opc=26&codigogenero=<?php echo $lgenero-> codigogenero;?>"><img src="../imagen/editar.png" width="16"></a></td>
			</tr>
			<?php } ?>
		</table>
	</form>
</body>
</html>