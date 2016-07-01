<?php
require_once "bd/conecta.php";
//require_once "controller/produto_controller.php";

$controller = 'produto';

if(!isset($_REQUEST['c']))
{
	require_once "controller/$controller"."_controller.php";
	$controller = ucwords($controller).'_controller';
	$controller = new $controller;
	$controller->Index();
}

else
	{
		$controller = strtolower($_REQUEST['c']);
		$accion = isset($_REQUEST['a']) ? $_REQUEST['a']:'index';


		require_once "controller/$controller"."_controller.php";
		$controller = ucwords($controller).'_controller';
		$controller = new $controller;

		call_user_func(array($controller,$accion));
	}
?>
