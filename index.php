<?php

session_start();

require_once 'config.php';

define('BASE_URL', 'http://localhost/ttmblog/');

spl_autoload_register(function($class){
	if(strpos($class, 'Controller') > 0){
		if (file_exists('controllers/' .$class. '.php')) {
			require_once 'controllers/' .$class. '.php';
		}
	}elseif (file_exists('models/' .$class. '.php')) {
		require_once 'models/' .$class. '.php';
	}else{
		require_once 'core/' .$class. '.php';
	}
});

$core = new core();
$core ->run();
