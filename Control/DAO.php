<?php
	
	class Actor
	{
		var $codigoactor;
		var $nombreactor;

		function Actor($_codigoactor, $_nombreactor)
		{
			$this -> codigoactor = $_codigoactor;
			$this -> nombreactor = $_nombreactor;
		}

		public static function insertar ($_codigoactor, $_nombreactor)
		{
			include("../Conexion/conexion.php");
			$sql = mysqli_query($cnn, "select codigoactor from actor where codigoactor='$_codigoactor' and estado='Activo'");
			$registros=mysqli_num_rows($sql);

			if($registros == 0)
			{
				include("../Conexion/conexion.php");


				$sql=mysqli_query($cnn, "INSERT INTO actor(codigoactor, nombreactor, estado)VALUES('$_codigoactor', '$_nombreactor', 'Activo')");
				echo "<script type='text/javascript'>alert('Registro almacenado con éxito.');history.back();</script>'";
				
			}
			else
			{
				echo"<script type='text/javascript'>alert('El registro ya existe.'); history.back(); </script>";
			}
		}
		public static function listar ($opc, $campo, $valor)
		{
			include ("../conexion/conexion.php");
			$matriz=array();
			if ($opc==3)
			{
				$consulta="select codigoactor, nombreactor from actor where estado='Activo'";
			} 
			else if($opc==6)
			{
				$consulta="select codigoactor, nombreactor from actor where codigoactor='$valor' and estado='Activo'";
			}
			$sql=mysqli_query($cnn, $consulta);
			$registros = mysqli_num_rows($sql);
			if($registros==0)
			{
				echo "<script type='text/javascript'> alert('No Existe Registros'); history.back();</script>";
			}
			else
			{
				for($i=0; $i<$registros; $i++)
				{
					$dato=mysqli_fetch_array($sql);
					array_push($matriz, Actor :: mostrar($dato));
				}
				return $matriz;
			}
		}
		public static function mostrar($dato)
		{
			$_codigoactor=$dato["codigoactor"];
			$_nombreactor=$dato["nombreactor"];
			$actor=new Actor($_codigoactor, $_nombreactor);
			return $actor;
		}
		public static function eliminar($_codigoactor)
		{
			include ("../conexion/conexion.php");
			$sql= mysqli_query($cnn, "update actor set estado='inactivo' where codigoactor ='$_codigoactor'");
			$registros = mysqli_affected_rows($cnn);
			if ($registros ==0)
			{
				echo "<script type='text/javascript'> alert ('No se elimino el registro'); history.go(-2); </script>";
			}
			else
			{
				echo "<script type='text/javascript'> window.location.href='../control/facade.php?opc=3'; </script>";
			}
		}
		public static function modificar ($_codigoactor, $_nombreactor)
		{
			include ("../conexion/conexion.php");
			$sql=mysqli_query($cnn, "update actor set nombreactor='$_nombreactor' where codigoactor='$_codigoactor'");
			$registros=mysqli_affected_rows($cnn);
			if ($registros==0)
			{
				echo"<script type='text/javascript'> alert ('No se actualizó el registro'); history.back();</script>";
			}
			else
			{
				echo "<script type='text/javascript'> alert ('Registro actualizado'); window.location.href='../control/facade.php?opc=3';</script>";
			}
		}
	}
	class Director
		{
		var $codigodirector;
		var $nombredirector;

		function Director($_codigodirector, $_nombredirector)
		{
			$this -> codigodirector = $_codigodirector;
			$this -> nombredirector = $_nombredirector;
		}

		public static function insertar ($_codigodirector, $_nombredirector)
		{
			include("../Conexion/conexion.php");
			$sql = mysqli_query($cnn, "select codigodirector from director where codigodirector='$_codigodirector' and estado='Activo'");
			$registros=mysqli_num_rows($sql);

			if($registros == 0)
			{
				include("../Conexion/conexion.php");


				$sql=mysqli_query($cnn, "INSERT INTO director(codigodirector, nombredirector, estado)VALUES('$_codigodirector', '$_nombredirector', 'Activo')");
				echo "<script type='text/javascript'>alert('Registro almacenado con éxito.');history.back();</script>'";
				
			}
			else
			{
				echo"<script type='text/javascript'>alert('El registro ya existe.'); history.back(); </script>";
			}
		}
		public static function listar ($opc, $campo, $valor)
		{
			include ("../conexion/conexion.php");
			$matriz=array();
			if ($opc==13)
			{
				$consulta="select codigodirector, nombredirector from director where estado='Activo'";
			} 
			else if($opc==16)
			{
				$consulta="select codigodirector, nombredirector from director where codigodirector='$valor' and estado='Activo'";
			}
			$sql=mysqli_query($cnn, $consulta);
			$registros = mysqli_num_rows($sql);
			if($registros==0)
			{
				echo "<script type='text/javascript'> alert('No Existe Registros'); history.back();</script>";
			}
			else
			{
				for($i=0; $i<$registros; $i++)
				{
					$dato=mysqli_fetch_array($sql);
					array_push($matriz, Director :: mostrar($dato));
				}
				return $matriz;
			}
		}
		public static function mostrar($dato)
		{
			$_codigodirector=$dato["codigodirector"];
			$_nombredirector=$dato["nombredirector"];
			$director=new Director($_codigodirector, $_nombredirector);
			return $director;
		}
		public static function eliminar($_codigodirector)
		{
			include ("../conexion/conexion.php");
			$sql= mysqli_query($cnn, "update director set estado='inactivo' where codigodirector ='$_codigodirector'");
			$registros = mysqli_affected_rows($cnn);
			if ($registros ==0)
			{
				echo "<script type='text/javascript'> alert ('No se elimino el registro'); history.go(-2); </script>";
			}
			else
			{
				echo "<script type='text/javascript'> window.location.href='../control/facade.php?opc=13'; </script>";
			}
		}
		public static function modificar ($_codigodirector, $_nombredirector)
		{
			include ("../conexion/conexion.php");
			$sql=mysqli_query($cnn, "update director set nombredirector='$_nombredirector' where codigodirector='$_codigodirector'");
			$registros=mysqli_affected_rows($cnn);
			if ($registros==0)
			{
				echo"<script type='text/javascript'> alert ('No se actualizó el registro'); history.back();</script>";
			}
			else
			{
				echo "<script type='text/javascript'> alert ('Registro actualizado'); window.location.href='../control/facade.php?opc=13';</script>";
			}
		}
	}
	class Genero
	{
		var $codigogenero;
		var $nombregenero;

		function Genero($_codigogenero, $_nombregenero)
		{
			$this -> codigogenero = $_codigogenero;
			$this -> nombregenero = $_nombregenero;
		}

		public static function insertar ($_codigogenero, $_nombregenero)
		{
			include("../Conexion/conexion.php");
			$sql = mysqli_query($cnn, "select codigogenero from genero where codigogenero='$_codigogenero' and estado='Activo'");
			$registros=mysqli_num_rows($sql);

			if($registros == 0)
			{
				include("../Conexion/conexion.php");


				$sql=mysqli_query($cnn, "INSERT INTO genero(codigogenero, nombregenero, estado)VALUES('$_codigogenero', '$_nombregenero', 'Activo')");
				echo "<script type='text/javascript'>alert('Registro almacenado con éxito.');history.back();</script>'";
				
			}
			else
			{
				echo"<script type='text/javascript'>alert('El registro ya existe.'); history.back(); </script>";
			}
		}
		public static function listar ($opc, $campo, $valor)
		{
			include ("../conexion/conexion.php");
			$matriz=array();
			if ($opc==23)
			{
				$consulta="select codigogenero, nombregenero from genero where estado='Activo'";
			} 
			else if($opc==26)
			{
				$consulta="select codigogenero, nombregenero from genero where codigogenero='$valor' and estado='Activo'";
			}
			$sql=mysqli_query($cnn, $consulta);
			$registros = mysqli_num_rows($sql);
			if($registros==0)
			{
				echo "<script type='text/javascript'> alert('No Existe Registros'); history.back();</script>";
			}
			else
			{
				for($i=0; $i<$registros; $i++)
				{
					$dato=mysqli_fetch_array($sql);
					array_push($matriz, Genero :: mostrar($dato));
				}
				return $matriz;
			}
		}
		public static function mostrar($dato)
		{
			$_codigogenero=$dato["codigogenero"];
			$_nombregenero=$dato["nombregenero"];
			$genero=new Genero($_codigogenero, $_nombregenero);
			return $genero;
		}
		public static function eliminar($_codigogenero)
		{
			include ("../conexion/conexion.php");
			$sql= mysqli_query($cnn, "update genero set estado='inactivo' where codigogenero ='$_codigogenero'");
			$registros = mysqli_affected_rows($cnn);
			if ($registros ==0)
			{
				echo "<script type='text/javascript'> alert ('No se elimino el registro'); history.go(-2); </script>";
			}
			else
			{
				echo "<script type='text/javascript'> window.location.href='../control/facade.php?opc=23'; </script>";
			}
		}
		public static function modificar ($_codigogenero, $_nombregenero)
		{
			include ("../conexion/conexion.php");
			$sql=mysqli_query($cnn, "update genero set nombregenero='$_nombregenero' where codigogenero='$_codigogenero'");
			$registros=mysqli_affected_rows($cnn);
			if ($registros==0)
			{
				echo"<script type='text/javascript'> alert ('No se actualizó el registro'); history.back();</script>";
			}
			else
			{
				echo "<script type='text/javascript'> alert ('Registro actualizado'); window.location.href='../control/facade.php?opc=23';</script>";
			}
		}
	}
	class Pelicula
	{
		var $idpelicula;
		var $titulooriginal;
		var $titulolatino;
		var $resena;
		var $publicacion;
		var $imagen;
		var $tamano;
		var $tipo;

	    function Pelicula($_idpelicula, $_titulooriginal, $_titulolatino, $_resena, $_publicacion, $_imagen, $_tamano, $_tipo)
	    {
	    	$this-> idpelicula=$_idpelicula;
	    	$this-> titulooriginal=$_titulooriginal;
	    	$this-> titulolatino=$_titulolatino;
	    	$this-> resena=$_resena;
	    	$this-> publicacion=$_publicacion;
	    	$this-> imagen=$_imagen;
	    	$this-> tamano=$_tamano;
	    	$this-> tipo=$_tipo;
	    }
	    public static function insertar ($_titulooriginal, $_titulolatino, $_resena, $_publicacion, $_imagen, $_tamano, $_tipo)
	    {
	    	include("../conexion/conexion.php");
	    	$sql=mysqli_query($cnn, "select titulooriginal from pelicula where titulooriginal='$_titulooriginal' and estado='Activo'");
	    	$registros=mysqli_num_rows($sql);
	    	if($registros==0)
	    	{
	    		include("../conexion/conexion.php");
	    		$_ruta="../pelicula/".$_imagen;
	    		copy($_FILES["imagen"]["tmp_name"], $_ruta);
	    		$sql=mysqli_query($cnn, "insert into pelicula (titulooriginal, titulolatino, resena, publicacion, imagen, tamano, tipo, estado) values ('$_titulooriginal', '$_titulolatino', '$_resena', '$_publicacion', '$_ruta', '$_tamano', '$_tipo', 'Activo')");
	    		

	    		echo "<script type='text/javascript'> alert ('Registro almacenado'); history.back();</script>";
	    	}
	    	else
	    	{
	    		echo "<script type='text/javascript'> alert ('El registro ya existe'); history.back();</script>";
	    	}
	    }
	    public static function listar ($opc, $campo, $valor)
		{
			include ("../conexion/conexion.php");
			$matriz=array();
			if ($opc==33)
			{
				$consulta="select idpelicula, titulooriginal, titulolatino, resena, publicacion, imagen, tamano, tipo from pelicula where estado='Activo'";
			} 
			else if ($opc==36)
			{
				$consulta="select idpelicula, titulooriginal, titulolatino, resena, publicacion, imagen, tamano, tipo from pelicula where estado='Activo' and idpelicula = '$valor'";
			} 
			$sql=mysqli_query($cnn, $consulta);
			$registros = mysqli_num_rows($sql);
			if($registros==0)
			{
				echo "<script- type='text/javascript'> alert('No Existe Registros'); history.back();</script>";
			}
			else
			{
				for($i=0; $i<$registros; $i++)
				{
					$dato=mysqli_fetch_array($sql);
					array_push($matriz, Pelicula :: mostrar($dato));
				}
				return $matriz;
			}
		}
		public static function mostrar($dato)
		{
			$_idpelicula=$dato["idpelicula"];
			$_titulooriginal=$dato["titulooriginal"];
			$_titulolatino=$dato["titulolatino"];
			$_resena=$dato["resena"];
			$_publicacion=$dato["publicacion"];
			$_imagen=$dato["imagen"];
			$_tamano = $dato["tamano"];
			$_tipo = $dato["tipo"];
			$pelicula=new Pelicula($_idpelicula, $_titulooriginal, $_titulolatino, $_resena, $_publicacion, $_imagen, $_tamano, $_tipo);
			return $pelicula;
		}

		public static function modificar ($_idpelicula, $_titulooriginal, $_titulolatino, $_resena, $_publicacion, $_imagen, $_tamano, $_tipo, $_imag)
		{
			include ("../conexion/conexion.php");

			if (!empty($_FILES["imagen"]["tmp_name"])) {
			
				$_ruta="../pelicula/".$_imagen;
	    		copy($_FILES["imagen"]["tmp_name"], $_ruta);

				$sql=mysqli_query($cnn, "update pelicula set titulooriginal = '$_titulooriginal', titulolatino = '$_titulolatino', resena = '$_resena', publicacion = '$_publicacion', imagen = '$_ruta', tamano = '$_tamano', tipo = '$_tipo' where idpelicula = '$_idpelicula'");
			}
			else {

				$sql=mysqli_query($cnn, "update pelicula set titulooriginal = '$_titulooriginal', titulolatino = '$_titulolatino', resena = '$_resena', publicacion = '$_publicacion', imagen = '$_imag' where idpelicula = '$_idpelicula'");
				echo "update pelicula set titulooriginal = '$_titulooriginal', titulolatino = '$_titulolatino', resena = '$_resena', publicacion = '$_publicacion', imagen = '$_imag' where idpelicula = '$_idpelicula'";
			}

			$registros=mysqli_affected_rows($cnn);
			if ($registros==0)
			{
				echo"<script type='text/javascript'> alert ('No se actualizó el registro'); history.back();</script>";
			}
			else
			{
				echo "<script type='text/javascript'> alert ('Registro actualizado'); window.location.href='../control/facade.php?opc=33';</script>";
			}
		}
	}
	class Actorpelicula
	{
		var $codigoactor;
		var $nombreactor;
		var $idpelicula;
		var $titulooriginal;

		function Actorpelicula ($_codigoactor, $_nombreactor, $_idpelicula, $_titulooriginal)
		{
			$this -> codigoactor = $_codigoactor;
			$this -> nombreactor = $_nombreactor;
			$this -> idpelicula = $_idpelicula;
			$this -> titulooriginal = $_titulooriginal;
		}
		public static function insertar ($_codigoactor, $_idpelicula)
		{
			include("../Conexion/conexion.php");
			$sql = mysqli_query($cnn, "select codigoactor, idpelicula from actorpelicula where codigoactor='$_codigoactor' and idpelicula='$_idpelicula'");
			$registros=mysqli_num_rows($sql);

			if($registros == 0)
			{
				include("../Conexion/conexion.php");


				$sql=mysqli_query($cnn, "INSERT INTO actorpelicula(codigoactor, idpelicula)VALUES('$_codigoactor', '$_idpelicula')");

				echo "<script type='text/javascript'>window.location.href='../control/facade.php?opc=43';</script>'";
				
			}
			else
			{
				echo"<script type='text/javascript'>alert('El registro ya existe.'); history.back(); </script>";
			}
		}
		public static function listar ($opc, $campo, $valor)
		{
			include ("../conexion/conexion.php");
			$matriz=array();
			if ($opc==43)
			{
				$consulta="SELECT actor.codigoactor, actor.nombreactor, pelicula.idpelicula, pelicula.titulooriginal from pelicula inner join actorpelicula on pelicula.idpelicula=actorpelicula.idpelicula inner join actor on actor.codigoactor=actorpelicula.codigoactor ";
			} 
			else if($opc == 46)
			{
				$consulta="SELECT actor.codigoactor, actor.nombreactor, pelicula.idpelicula, pelicula.titulooriginal from pelicula inner join actorpelicula on pelicula.idpelicula=actorpelicula.idpelicula inner join actor on actor.codigoactor=actorpelicula.codigoactor WHERE actorpelicula.codigoactor='$valor' AND actorpelicula.idpelicula='$campo'";
			}
			
			$sql=mysqli_query($cnn, $consulta);
			$registros = mysqli_num_rows($sql);
				for($i=0; $i<$registros; $i++)
				{
					$dato=mysqli_fetch_array($sql);
					array_push($matriz, Actorpelicula :: mostrar($dato));
				}
				return $matriz;
		}
		public static function mostrar($dato)
		{
			$_codigoactor=$dato["codigoactor"];
			$_nombreactor=$dato["nombreactor"];
			$_idpelicula=$dato["idpelicula"];
			$_titulooriginal=$dato["titulooriginal"];
			$actorpelicula=new Actorpelicula($_codigoactor, $_nombreactor, $_idpelicula, $_titulooriginal);
			return $actorpelicula;
		}
		public static function eliminar($_idpelicula, $_codigoactor)
		{
			include ("../conexion/conexion.php");
			$sql= mysqli_query($cnn, "DELETE from actorpelicula where idpelicula='$_idpelicula' and codigoactor ='$_codigoactor'");
			$registros = mysqli_affected_rows($cnn);
			if ($registros ==0)
			{
				echo "<script type='text/javascript'> alert ('No se elimino el registro'); history.go(-2); </script>";
			}
			else
			{
				echo "<script type='text/javascript'> window.location.href='../control/facade.php?opc=43'; </script>";
			}
		}

		public static function modificar ($_codigoactor, $_idpelicula)
		{
			include ("../conexion/conexion.php");
			$sql=mysqli_query($cnn, "UPDATE Actorpelicula set codigoactor='$_codigoactor', idpelicula='$_idpelicula' where codigoactor='$_codigoactor' AND idpelicula='$_idpelicula'");
			$registros=mysqli_affected_rows($cnn);
			if ($registros==0)
			{
				echo"<script type='text/javascript'> alert ('No se actualizó el registro'); history.back();</script>";
			}
			else
			{
				echo "<script type='text/javascript'> alert ('Registro actualizado'); window.location.href='../control/facade.php?opc=23';</script>";
			}
		}
	}
	class Directorpelicula
	{
		var $codigodirector;
		var $nombredirector;
		var $idpelicula;
		var $titulooriginal;

		function Directorpelicula ($_codigodirector, $_nombredirector, $_idpelicula, $_titulooriginal)
		{
			$this -> codigodirector = $_codigodirector;
			$this -> nombredirector = $_nombredirector;
			$this -> idpelicula = $_idpelicula;
			$this -> titulooriginal = $_titulooriginal;
		}
		public static function insertar ($_codigodirector, $_idpelicula)
		{
			include("../Conexion/conexion.php");
			$sql = mysqli_query($cnn, "SELECT codigodirector, idpelicula from directorpelicula where codigodirector='$_codigodirector' and idpelicula='$_idpelicula'");
			$registros=mysqli_num_rows($sql);

			if($registros == 0)
			{
				include("../Conexion/conexion.php");


				$sql=mysqli_query($cnn, "INSERT INTO directorpelicula(codigodirector, idpelicula)VALUES('$_codigodirector', '$_idpelicula')");

				echo "<script type='text/javascript'>window.location.href='../control/facade.php?opc=53';</script>'";
				
			}
			else
			{
				echo"<script type='text/javascript'>alert('El registro ya existe.'); history.back(); </script>";
			}
		}
		public static function listar ($opc, $campo, $valor)
		{
			include ("../conexion/conexion.php");
			$matriz=array();
			if ($opc==53)
			{
				$consulta="SELECT director.codigodirector, director.nombredirector, pelicula.idpelicula, pelicula.titulooriginal from pelicula inner join directorpelicula on pelicula.idpelicula=directorpelicula.idpelicula inner join director on director.codigodirector=directorpelicula.codigodirector ";
			} 
			
			$sql=mysqli_query($cnn, $consulta);
			$registros = mysqli_num_rows($sql);
				for($i=0; $i<$registros; $i++)
				{
					$dato=mysqli_fetch_array($sql);
					array_push($matriz, Directorpelicula :: mostrar($dato));
				}
				return $matriz;
		}
		public static function mostrar($dato)
		{
			$_codigodirector=$dato["codigodirector"];
			$_nombredirector=$dato["nombredirector"];
			$_idpelicula=$dato["idpelicula"];
			$_titulooriginal=$dato["titulooriginal"];
			$directorpelicula=new Directorpelicula($_codigodirector, $_nombredirector, $_idpelicula, $_titulooriginal);
			return $directorpelicula;
		}
		public static function eliminar($_idpelicula, $_codigodirector)
		{
			include ("../conexion/conexion.php");
			$sql= mysqli_query($cnn, "DELETE from directorpelicula where idpelicula='$_idpelicula' and codigodirector ='$_codigodirector'");
			$registros = mysqli_affected_rows($cnn);
			if ($registros ==0)
			{
				echo "<script type='text/javascript'> alert ('No se elimino el registro'); history.go(-2); </script>";
			}
			else
			{
				echo "<script type='text/javascript'> window.location.href='../control/facade.php?opc=53'; </script>";
			}
		}
	}
		class Generopelicula
	{
		var $codigogenero;
		var $nombregenero;
		var $idpelicula;
		var $titulooriginal;

		function Generopelicula ($_codigogenero, $_nombregenero, $_idpelicula, $_titulooriginal)
		{
			$this -> codigogenero = $_codigogenero;
			$this -> nombregenero = $_nombregenero;
			$this -> idpelicula = $_idpelicula;
			$this -> titulooriginal = $_titulooriginal;
		}
		public static function insertar ($_codigogenero, $_idpelicula)
		{
			include("../Conexion/conexion.php");
			$sql = mysqli_query($cnn, "SELECT codigogenero, idpelicula from generopelicula where codigogenero='$_codigogenero' and idpelicula='$_idpelicula'");
			$registros=mysqli_num_rows($sql);

			if($registros == 0)
			{
				include("../Conexion/conexion.php");


				$sql=mysqli_query($cnn, "INSERT INTO generopelicula(codigogenero, idpelicula)VALUES('$_codigogenero', '$_idpelicula')");

				echo "<script type='text/javascript'>window.location.href='../control/facade.php?opc=63';</script>'";
				
			}
			else
			{
				echo"<script type='text/javascript'>alert('El registro ya existe.'); history.back(); </script>";
			}
		}
		public static function listar ($opc, $campo, $valor)
		{
			include ("../conexion/conexion.php");
			$matriz=array();
			if ($opc==63)
			{
				$consulta="SELECT genero.codigogenero, genero.nombregenero, pelicula.idpelicula, pelicula.titulooriginal from pelicula inner join generopelicula on pelicula.idpelicula=generopelicula.idpelicula inner join genero on genero.codigogenero=generopelicula.codigogenero ";
			} 
			
			$sql=mysqli_query($cnn, $consulta);
			$registros = mysqli_num_rows($sql);
				for($i=0; $i<$registros; $i++)
				{
					$dato=mysqli_fetch_array($sql);
					array_push($matriz, Generopelicula :: mostrar($dato));
				}
				return $matriz;
		}
		public static function mostrar($dato)
		{
			$_codigogenero=$dato["codigogenero"];
			$_nombregenero=$dato["nombregenero"];
			$_idpelicula=$dato["idpelicula"];
			$_titulooriginal=$dato["titulooriginal"];
			$generopelicula=new Generopelicula($_codigogenero, $_nombregenero, $_idpelicula, $_titulooriginal);
			return $generopelicula;
		}
		public static function eliminar($_idpelicula, $_codigogenero)
		{
			include ("../conexion/conexion.php");
			$sql= mysqli_query($cnn, "DELETE from generopelicula where idpelicula='$_idpelicula' and codigogenero ='$_codigogenero'");
			$registros = mysqli_affected_rows($cnn);
			if ($registros ==0)
			{
				echo "<script type='text/javascript'> alert ('No se elimino el registro'); history.go(-2); </script>";
			}
			else
			{
				echo "<script type='text/javascript'> window.location.href='../control/facade.php?opc=63'; </script>";
			}
		}
	}
?>
	