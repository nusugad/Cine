<?php
	include $_SERVER['DOCUMENT_ROOT'].'/cine/control/DAO.php';
	switch($_REQUEST["opc"])
	{
		case 2:
		$codigoactor=$_POST["codigoactor"];
		$nombreactor=$_POST["nombreactor"];
		Actor :: insertar($codigoactor, $nombreactor);
		exit();
		break;
		case 3:
		$opc=$_REQUEST["opc"];
		$campo=empty($_POST["campo"])?0:$_POST["campo"];
		$valor=empty($_POST["valor"])?0:$_POST["valor"];
		$aactor=Actor::listar($opc, $campo, $valor);
		include("../vista/actorlistar.php");
		exit();
		break;
		case 5:
		$codigoactor=$_REQUEST["codigoactor"];
		Actor :: eliminar($codigoactor);
		exit();
		break;
		case 6:
		$opc=$_REQUEST["opc"];
		$campo=empty($_POST["campo"])?0:$_POST["campo"];
		$valor=empty($_REQUEST["codigoactor"])?0:$_REQUEST["codigoactor"];
		$aactor=Actor::listar($opc, $campo, $valor);
		include("../vista/actormodificar.php");
		exit();
		break;
		case 7:
		$codigoactor=$_POST["codigoactor"];
		$nombreactor=$_POST["nombreactor"];
		Actor::modificar($codigoactor, $nombreactor);
		exit();
		break;
	
///////////////////////////////////////////
	case 12:
		$codigodirector=$_POST["codigodirector"];
		$nombredirector=$_POST["nombredirector"];
		Director :: insertar($codigodirector, $nombredirector);
		exit();
		break;
		case 13:
		$opc=$_REQUEST["opc"];
		$campo=empty($_POST["campo"])?0:$_POST["campo"];
		$valor=empty($_POST["valor"])?0:$_POST["valor"];
		$adirector=Director::listar($opc, $campo, $valor);
		include("../vista/directorlistar.php");
		exit();
		break;
		case 15:
		$codigodirector=$_REQUEST["codigodirector"];
		Director :: eliminar($codigodirector);
		exit();
		break;
		case 16:
		$opc=$_REQUEST["opc"];
		$campo=empty($_POST["campo"])?0:$_POST["campo"];
		$valor=empty($_REQUEST["codigodirector"])?0:$_REQUEST["codigodirector"];
		$adirector=Director::listar($opc, $campo, $valor);
		include("../vista/directormodificar.php");
		exit();
		break;
		case 17:
		$codigodirector=$_POST["codigodirector"];
		$nombredirector=$_POST["nombredirector"];
		Director::modificar($codigodirector, $nombredirector);
		exit();
		break;

////////////////////////////////////////////////
		case 22:
		$codigogenero=$_POST["codigogenero"];
		$nombregenero=$_POST["nombregenero"];
		Genero :: insertar($codigogenero, $nombregenero);
		exit();
		break;
		case 23:
		$opc=$_REQUEST["opc"];
		$campo=empty($_POST["campo"])?0:$_POST["campo"];
		$valor=empty($_POST["valor"])?0:$_POST["valor"];
		$agenero=Genero::listar($opc, $campo, $valor);
		include("../vista/generolistar.php");
		exit();
		break;
		case 25:
		$codigogenero=$_REQUEST["codigogenero"];
		Genero :: eliminar($codigogenero);
		exit();
		break;
		case 26:
		$opc=$_REQUEST["opc"];
		$campo=empty($_POST["campo"])?0:$_POST["campo"];
		$valor=empty($_REQUEST["codigogenero"])?0:$_REQUEST["codigogenero"];
		$agenero=Genero::listar($opc, $campo, $valor);
		include("../vista/generomodificar.php");
		exit();
		break;
		case 27:
		$codigogenero=$_POST["codigogenero"];
		$nombregenero=$_POST["nombregenero"];
		Genero::modificar($codigogenero, $nombregenero);
		exit();
		break;
		//////////////////////////
		case 32:
			$idpelicula=$_POST["idpelicula"];
			$titulooriginal=$_POST["titulooriginal"];
			$titulolatino=$_POST["titulolatino"];
			$resena=$_POST["resena"];
			$publicacion=$_POST["publicacion"];
			$imagen=$_FILES["imagen"]["name"];
			$tamano=$_FILES["imagen"]["size"];
			$tipo=$_FILES["imagen"]["type"];

		Pelicula :: insertar($titulooriginal, $titulolatino, $resena, $publicacion, $imagen, $tamano, $tipo);
		exit();
		break;
		case 33:
		$opc=$_REQUEST["opc"];
		$campo=empty($_POST["campo"])?0:$_POST["campo"];
		$valor=empty($_POST["valor"])?0:$_POST["valor"];
		$apelicula=Pelicula::listar($opc, $campo, $valor);
		include("../vista/peliculalistar.php");
		exit();
		break;
		case 35:
			$idpelicula=$_REQUEST["idpelicula"];
			Pelicula :: eliminar($idpelicula);
			exit();
		break;

		case 36:
			$opc=$_REQUEST["opc"];
			$campo=empty($_POST["campo"])?0:$_POST["campo"];
			$valor=empty($_REQUEST["idpelicula"])?0:$_REQUEST["idpelicula"];
			$apelicula=Pelicula::listar($opc, $campo, $valor);

			include("../vista/peliculamodificar.php");
			exit();
			break;

		case 37:
			$idpelicula=$_POST["idpelicula"];
			$titulooriginal=$_POST["titulooriginal"];
			$titulolatino=$_POST["titulolatino"];
			$resena=$_POST["resena"];
			$publicacion=$_POST["publicacion"];
			$imagen=$_FILES["imagen"]["name"];
			$tamano=$_FILES["imagen"]["size"];
			$tipo=$_FILES["imagen"]["type"];
			$imag = $_POST["imag"];

			Pelicula::modificar($idpelicula, $titulooriginal, $titulolatino, $resena, $publicacion, $imagen, $tamano, $tipo, $imag);
			exit();
			break;
		///////////////////////////
		case 42;
		$codigoactor = $_POST["codigoactor"];
		$idpelicula = $_POST["idpelicula"];
		Actorpelicula::insertar ($codigoactor, $idpelicula);
		exit();
		break;
		case 43:
			$opc=3;
			$campo=empty($_POST["campo"])?0:$_POST["campo"];
			$valor=empty($_POST["valor"])?0:$_POST["valor"];
			$aactor=Actor::listar($opc, $campo, $valor);
			$opc=33;
			$campo=empty($_POST["campo"])?0:$_POST["campo"];
			$valor=empty($_POST["valor"])?0:$_POST["valor"];
			$apelicula=Pelicula::listar($opc, $campo, $valor);
			$opc=$_REQUEST["opc"];
			$campo=empty($_POST["campo"])?0:$_POST["campo"];
			$valor=empty($_POST["valor"])?0:$_POST["valor"];
			$aactorpelicula=Actorpelicula::listar($opc, $campo, $valor);
			include("../vista/actorPeliculaingreso.php");
			exit();
			break;
		case 45:
			$idpelicula=$_REQUEST["idpelicula"];
			$codigoactor=$_REQUEST["codigoactor"];
			Actorpelicula :: eliminar($idpelicula, $codigoactor);
			exit();
			break;
		case 46:
			$opc=3;
			$campo=empty($_POST["campo"])?0:$_POST["campo"];
			$valor=empty($_POST["valor"])?0:$_POST["valor"];
			$aactor=Actor::listar($opc, $campo, $valor);
			$opc=33;
			$campo=empty($_POST["campo"])?0:$_POST["campo"];
			$valor=empty($_POST["valor"])?0:$_POST["valor"];
			$apelicula=Pelicula::listar($opc, $campo, $valor);
			$opc=$_REQUEST["opc"];
			$campo=empty($_REQUEST["idpelicula"])?0:$_REQUEST["idpelicula"];
			$valor=empty($_REQUEST["codigoactor"])?0:$_REQUEST["codigoactor"];
			$aactorpelicula=ActorPelicula::listar($opc, $campo, $valor);
			include("../vista/actorPeliculamodificar.php");
		exit();
		break;
		case 47:
			$codigoactor=$_POST["codigoactor"];
			$idpelicula=$_POST["idpelicula"]; 
			Actorpelicula :: modificar($codigoactor, $idpelicula);
			exit();
			break;

		//////////////////////////
		case 52;
		$codigodirector = $_POST["codigodirector"];
		$idpelicula = $_POST["idpelicula"];
		Directorpelicula::insertar ($codigodirector, $idpelicula);
		exit();
		break;
		case 53:
		$opc=13;
		$campo=empty($_POST["campo"])?0:$_POST["campo"];
		$valor=empty($_POST["valor"])?0:$_POST["valor"];
		$adirector=Director::listar($opc, $campo, $valor);
		$opc=33;
		$campo=empty($_POST["campo"])?0:$_POST["campo"];
		$valor=empty($_POST["valor"])?0:$_POST["valor"];
		$apelicula=Pelicula::listar($opc, $campo, $valor);
		$opc=$_REQUEST["opc"];
		$campo=empty($_POST["campo"])?0:$_POST["campo"];
		$valor=empty($_POST["valor"])?0:$_POST["valor"];
		$adirectorpelicula=Directorpelicula::listar($opc, $campo, $valor);
		include("../vista/directorPeliculaingreso.php");
		exit();
		break;
		case 55:
		$idpelicula=$_REQUEST["idpelicula"];
		$codigodirector=$_REQUEST["codigodirector"];
		Directorpelicula :: eliminar($idpelicula, $codigodirector);
		exit();
		break;
		/////////////////////////////////
		case 62;
		$codigogenero = $_POST["codigogenero"];
		$idpelicula = $_POST["idpelicula"];
		Generopelicula::insertar ($codigogenero, $idpelicula);
		exit();
		break;
		case 63:
		$opc=23;
		$campo=empty($_POST["campo"])?0:$_POST["campo"];
		$valor=empty($_POST["valor"])?0:$_POST["valor"];
		$agenero=Genero::listar($opc, $campo, $valor);
		$opc=33;
		$campo=empty($_POST["campo"])?0:$_POST["campo"];
		$valor=empty($_POST["valor"])?0:$_POST["valor"];
		$apelicula=Pelicula::listar($opc, $campo, $valor);
		$opc=$_REQUEST["opc"];
		$campo=empty($_POST["campo"])?0:$_POST["campo"];
		$valor=empty($_POST["valor"])?0:$_POST["valor"];
		$ageneropelicula=Generopelicula::listar($opc, $campo, $valor);
		include("../vista/generoPeliculaingreso.php");
		exit();
		break;
		case 65:
		$idpelicula=$_REQUEST["idpelicula"];
		$codigogenero=$_REQUEST["codigogenero"];
		Generopelicula :: eliminar($idpelicula, $codigogenero);
		exit();
		break;
	}