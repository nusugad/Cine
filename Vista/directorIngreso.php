<html>
<head>
	<title>Control de directores.</title>
	<link rel="stylesheet" type="text/css" href="../Formato/formato.css">
	<script type="text/javascript" src="../Validacion/validaciondirector.js"></script>
</head>
<body>
	<h1>Directores.</h1>
	<form onsubmit="return validaciondirector()" action="../control/facade.php?opc=12" method="post">
		<table border="0" width="500" height="200" align="center">
			<tr>
				<th colspan="2"><a href="../vista/menu.php"><img src="../imagen/retorno.png"></a></th>
			<tr>
				<th colspan="2" class="PieyEncabezado">Control de directores.</th>
			</tr>
			<tr>
				<td class="tdTitle">Código</td>
				<td><input type="text" name="codigodirector" id="codigodirector" maxlength="5" class="caja" /></td>
			</tr>
			<tr>
				<td class="tdTitle">Nombre</td>
				<td><input type="text" name="nombredirector" id="nombredirector" maxlength="40" class="caja" /></td>
			</tr>
			<tr>
				<td colspan="2" class="PieyEncabezado"><input type="submit" name="guardar" value="Guardar" class="boton" />
					&nbsp;
					&nbsp;
				<input type="reset" name="limpiar" value="Limpiar" class="boton" />
				</td>
			</tr>
		</table>
	</form>
</body>
</html>