<?php

//Database config

require_once 'config.php';
//AUTOLOAD CLASSES


function __autoload($class_name){
	require_once 'lib/' .$class_name. '.php';
}
//echo 'test';
