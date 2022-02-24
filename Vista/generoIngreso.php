<html>
<head>
	<title>Control de generos.</title>
	<link rel="stylesheet" type="text/css" href="../Formato/formato.css">
	<script type="text/javascript" src="../Validacion/validaciongenero.js"></script>
</head>
<body>
	<h1>Generos.</h1>
	<form onsubmit="return validaciongenero()" action="../control/facade.php?opc=22" method="post">
		<table border="0" width="500" height="200" align="center">
			<tr>
				<th colspan="2"><a href="../vista/menu.php"><img src="../imagen/retorno.png"></a></th>
			<tr>
				<th colspan="2" class="PieyEncabezado">Control de generos.</th>
			</tr>
			<tr>
				<td class="tdTitle">Código</td>
				<td><input type="text" name="codigogenero" id="codigogenero" maxlength="5" class="caja" /></td>
			</tr>
			<tr>
				<td class="tdTitle">Nombre</td>
				<td><input type="text" name="nombregenero" id="nombregenero" maxlength="40" class="caja" /></td>
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