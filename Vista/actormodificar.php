<!DOCTYPE html>
<html>
<head>
	<title>Control de actores.</title>
	<link rel="stylesheet" type="text/css" href="../Formato/formato.css">
	<script type="text/javascript" src="../Validacion/validacionactor.js"></script>
</head>
<body>
	<h1>Actores.</h1>
	<form onsubmit="return validacionactor()" action="../control/facade.php?opc=7" method="post">
		<?php foreach ($aactor as $lactor) {?>
		<table border="0" width="500" height="200" align="center">
			<tr>
				<th colspan="2"><a href="../vista/menu.php"><img src="../imagen/retorno.png"></a></th>
			<tr>
				<th colspan="2" class="PieyEncabezado">Control de actores.</th>
			</tr>
			<tr>
				<td class="tdTitle">Código</td>
				<td><input type="text" value="<?php echo $lactor -> codigoactor;?>" name="codigoactor" id="codigoactor" maxlength="5" class="caja" /></td>
			</tr>
			<tr>
				<td class="tdTitle">Nombre</td>
				<td><input type="text" value="<?php echo $lactor -> nombreactor;?>"name="nombreactor" id="nombreactor" maxlength="40" class="caja" /></td>
			</tr>
			<tr>
				<td colspan="2" class="PieyEncabezado"><input type="submit" name="guardar" value="Guardar" class="boton" />
					&nbsp;
					&nbsp;
				<input type="reset" name="limpiar" value="Limpiar" class="boton" />
				</td>
			</tr>
		</table>
	<?php }?>
	</form>
</body>
</html>