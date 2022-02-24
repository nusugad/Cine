<html>
<head>
	<title>Control de peliculas.</title>
	<link rel="stylesheet" type="text/css" href="../Formato/formato.css">
	<script type="text/javascript" src="../Validacion/validacionactor.js"></script>
</head>
<body>
	<h1>Peliculas.</h1>
	<form onsubmit="return validacionactor()" action="../control/facade.php?opc=32" method="post" enctype="multipart/form-data">
		<table border="0" width="500" height="200" align="center">
			<tr>
				<th colspan="2"><a href="../vista/menu.php"><img src="../imagen/retorno.png"></a></th>
			<tr>
				<th colspan="2" class="PieyEncabezado">Control de peliculas.</th>
			</tr>
			<tr>
				<td class="tdTitle">Título Original</td>
				<td><input type="text" name="titulooriginal" id="titulooriginal" maxlength="50" class="caja" /></td>
			</tr>
			<tr>
				<td class="tdTitle">Título Latino</td>
				<td><input type="text" name="titulolatino" id="titulolatino" maxlength="50" class="caja" /></td>
			</tr>
			<tr>
				<td class="tdTitle">Reseña</td>
				<td><textarea name="resena" id="resena" cols="21" rows="5" maxlength="250" class="caja"></textarea></td>
			</tr>
			<tr>
				<td class="tdTitle">Publicación</td>
				<td><input type="text" name="publicacion" id="publicacion" maxlength="4" class="caja" /></td>
			</tr>
			<tr>
				<td class="tdTitle">Imágen</td>
				<td><input type="file" name="imagen" id="imagen" size="80" maxlength="80" class="caja" /></td>
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