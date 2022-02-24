<html>
<head>
	<title>Director Pelicula.</title>
	<link rel="stylesheet" type="text/css" href="../Formato/formato.css">
	<script type="text/javascript" src="../Validacion/validacionactor.js"></script>
</head>
<body>
	<h1>Director Pelicula.</h1>
	<form  action="../control/facade.php?opc=52" method="post">
		<table border="0" width="500" height="200" align="center">
			<tr>
				<th colspan="2"><a href="../vista/menu.php"><img src="../imagen/retorno.png"></a></th>
			<tr>
				<th colspan="2" class="PieyEncabezado">Director Pelicula.</th>
			</tr>
			<tr>
				<td class="tdTitle">Director</td>
				<td class="tdTitle">Pelicula</td>
			</tr>
			<tr>
				<td><select name="codigodirector" id="codigodirector"> 
					<?php foreach ($adirector as $ldirector){?>
						<option value="<?php echo $ldirector->codigodirector;?>"><?php echo $ldirector->nombredirector;?></option>
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
				<th colspan="6" class="PieyEncabezado">Listado de Película Director</th>
			</tr>
			<tr>
				<td class="tdTitle" width="150">Codigo Director</td>
				<td class="tdTitle">Director</td>
				<td class="tdTitle">Id Película</td>
				<td class="tdTitle">Película</td>
				<td>&nbsp; &nbsp; &nbsp; &nbsp;</td>
				<td>&nbsp; &nbsp; &nbsp; &nbsp;</td>
			</tr>
			<?php foreach ($adirectorpelicula as $ldirectorpelicula){ ?>
			<tr>
				<td class="tdBody"><?php echo $ldirectorpelicula -> codigodirector;?>&nbsp;</td>
				<td class="tdBody"><?php echo $ldirectorpelicula -> nombredirector;?>&nbsp;</td>
				<td class="tdBody"><?php echo $ldirectorpelicula -> idpelicula;?>&nbsp;</td>
				<td class="tdBody"><?php echo $ldirectorpelicula -> titulooriginal;?>&nbsp;</td>
				<td>&nbsp; &nbsp; <a href="../control/facade.php?opc=55&idpelicula=<?php echo $ldirectorpelicula-> idpelicula;?>&codigodirector=<?php echo $ldirectorpelicula ->codigodirector;?>"><img src="../imagen/eliminar.png" width="16"></a></td>
				<td>&nbsp; &nbsp; <a href="../control/facade.php?opc=56&idpelicula=<?php echo $ldirectorpelicula-> idpelicula;?>&codigodirector=<?php echo $ldirectorpelicula ->codigodirector;?>"><img src="../imagen/editar.png" width="16"></a></td>
			</tr>
		<?php } ?>
		</table>
</body>
</html>