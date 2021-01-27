<?php

spl_autoload_register(function ($className){
	$filename = "class".DIRECTORY_SEPARATOR.$className.".class.php";
	if (file_exists($filename)) {
		require_once($filename);
	}
});
