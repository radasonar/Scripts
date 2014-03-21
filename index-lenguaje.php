<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Detectando el Lenguaje del Navegador</title>
</head>
<body>
	<?php
    session_start();
    @$e = $_GET['l'];
	if($e != ""){
		switch($e){
			case "es":{ $_SESSION['idioma'] = $e; break; }
			case "en":{ $_SESSION['idioma'] = $e; break; }
			default:{ break; }
		}
	}
	if($_SESSION['idioma'] == ""){
	    $idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2);
	    $_SESSION['idioma'] = $idioma;
	}
	echo ("<h1>".$_SESSION['idioma']."</h1>");
	?>
	<a href="?l=es">Es</a><br>
	<a href="?l=en">En</a>
</body>
</html>