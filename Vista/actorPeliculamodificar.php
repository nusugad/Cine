<html>
<head>
	<title>Actor Pelicula.</title>
	<link rel="stylesheet" type="text/css" href="../Formato/formato.css">
	<script type="text/javascript" src="../Validacion/validacionactor.js"></script>
</head>
<body>
	<h1>Actor Pelicula.</h1>
	<form  action="../control/facade.php?opc=47" method="post">
	<?php foreach($aactorpelicula as $lactorpelicula) { ?>
		<table border="0" width="500" height="200" align="center">
			<tr>
				<th colspan="2"><a href="../vista/menu.php"><img src="../imagen/retorno.png"></a></th>
			<tr>
				<th colspan="2" class="PieyEncabezado">Actor Pelicula.</th>
			</tr>
			<tr>
				<td class="tdTitle">Actor</td>
				<td class="tdTitle">Pelicula</td>
			</tr>
			<tr>
				<td><select name="codigoactor" id="codigoactor"> 
					<?php 

					$aux=$lactorpelicula -> codigoactor;

					foreach ($aactor as $lactor){

						if($aux == $lactor -> codigoactor){

					?>
						
						<option value="<?php echo $lactor->codigoactor;?>"selected><?php echo $lactor->nombreactor;?></option>
					<?php }
							else {
						?>
						<option value="<?php echo $lactor -> codigoactor; ?>"><?php echo $lactor -> nombreactor;?></option>
					<?php 
							}
						}
					?>
				</select></td>

				<td><select name="idpelicula" id="idpelicula"> 
					<?php 

					$aux=$lactorpelicula -> idpelicula;

					foreach ($apelicula as $lpelicula){

						if($aux == $lpelicula -> idpelicula){

					?>
						
						<option value="<?php echo $lpelicula -> idpelicula;?>"selected><?php echo $lpelicula -> titulooriginal;?></option>
					<?php }
							else {
						?>
						<option value="<?php echo $lpelicula -> idpelicula; ?>"><?php echo $lpelicula -> titulooriginal;?></option>
					<?php 
							}
						}
					?>
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
	<?php } ?>
	</form>
	<br>
	<!-- Tabla -->
	<br>
	
</body>
</html>