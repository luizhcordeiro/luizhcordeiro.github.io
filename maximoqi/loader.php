<?php
	
	$get = (string) trim(addslashes(strip_tags(filter_input(INPUT_GET,"param", FILTER_SANITIZE_STRING))));
	
	$allow = array("blog", "contatos", "curriculo", "cursos", "home", "matricula", "matricula1", "português", "quemSomos", "login", "functions", "inscricao-ok");
	if(empty($get))
	{
		$url = BASE_PATH . DS . "app" . DS . "views" . DS . "home" . ".php";
		$title = ucfirst("home");
		
	}
	elseif(in_array($get, $allow))
	{
		$title = ucfirst($get);
		$url = BASE_PATH . DS . "app" . DS . "views" . DS .  $get . ".php";
	}
	
	else
	{
		$url = BASE_PATH . DS . "app" . DS . "views" . DS . "404.php";
	}	
	
	require_once BASE_PATH . DS . "app" . DS . "views" . DS . "template.php"; 
?>