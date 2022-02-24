<html>
<head>
	<title>Genero Pelicula.</title>
	<link rel="stylesheet" type="text/css" href="../Formato/formato.css">
	<script type="text/javascript" src="../Validacion/validacionactor.js"></script>
</head>
<body>
	<h1>Genero Pelicula.</h1>
	<form  action="../control/facade.php?opc=62" method="post">
		<table border="0" width="500" height="200" align="center">
			<tr>
				<th colspan="2"><a href="../vista/menu.php"><img src="../imagen/retorno.png"></a></th>
			<tr>
				<th colspan="2" class="PieyEncabezado">Genero Pelicula.</th>
			</tr>
			<tr>
				<td class="tdTitle">Genero</td>
				<td class="tdTitle">Pelicula</td>
			</tr>
			<tr>
				<td><select name="codigogenero" id="codigogenero"> 
					<?php foreach ($agenero as $lgenero){?>
						<option value="<?php echo $lgenero->codigogenero;?>"><?php echo $lgenero->nombregenero;?></option>
						<?php } ?>
				</select></td>
				<td><select name="idpelicula" id="idpelicula"> 
					<?php foreach ($apelicula as $lpelicula){?>
						<option value="<?php echo $lpelicula->idpelicula;?>"><?php echo $lpelicula->titulooriginal;?></option>
						<?php } ?>
				</select></td>
			</tr>
			<tr>
				<td colspan="2" class="PieyEncabezado"><input type="submit" name="guardar" value="Guardar" class="boton" />
					&nbsp;
					&nbsp;
				<input type="reset" name="limpiar" value="Limpiar" class="boton"/>
				</td>
			</tr>
		</table>
	</form>
	<br>
	<br>
	<table border="1" width="800" height="200" align="center" cellspacing="0">
				<th colspan="6"></th>
			<tr>
				<th colspan="6" class="PieyEncabezado">Listado de Película Genero</th>
			</tr>
			<tr>
				<td class="tdTitle" width="150">Codigo Genero</td>
				<td class="tdTitle">Genero</td>
				<td class="tdTitle">Id Película</td>
				<td class="tdTitle">Película</td>
				<td>&nbsp; &nbsp; &nbsp; &nbsp;</td>
				<td>&nbsp; &nbsp; &nbsp; &nbsp;</td>
			</tr>
			<?php foreach ($ageneropelicula as $lgeneropelicula){ ?>
			<tr>
				<td class="tdBody"><?php echo $lgeneropelicula -> codigogenero;?>&nbsp;</td>
				<td class="tdBody"><?php echo $lgeneropelicula -> nombregenero;?>&nbsp;</td>
				<td class="tdBody"><?php echo $lgeneropelicula -> idpelicula;?>&nbsp;</td>
				<td class="tdBody"><?php echo $lgeneropelicula -> titulooriginal;?>&nbsp;</td>
				<td>&nbsp; &nbsp; <a href="../control/facade.php?opc=65&idpelicula=<?php echo $lgeneropelicula-> idpelicula;?>&codigogenero=<?php echo $lgeneropelicula ->codigogenero;?>"><img src="../imagen/eliminar.png" width="16"></a></td>
				<td>&nbsp; &nbsp; <a href="../control/facade.php?opc=66&idpelicula=<?php echo $lgeneropelicula-> idpelicula;?>&codigogenero=<?php echo $lgeneropelicula ->codigogenero;?>"><img src="../imagen/editar.png" width="16"></a></td>
			</tr>
		<?php } ?>
		</table>
</body>
</html>