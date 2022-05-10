<?php 
function autoload($clases)
{
	require_once($clases.".php");  //este proceso evita llamar todas las clasess de una
}

spl_autoload_register('autoload');

 ?>