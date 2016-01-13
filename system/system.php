<?php
require 'config/database.php';

spl_autoload_register(function($className){
	require 'classes/'.$className.'.php';
});


?>