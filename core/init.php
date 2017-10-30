<?php 
/*
 * https://github.com/shuv1824
 * https://linkedin.com/in/shuv1824
 * Shah Nawaz Shuvo
 * Email: shahnawaz.shuvo1824@gmail.com
 * Skype: shuvo1824@hotmail.com
 */

// Include Config
require_once('config/config.php');

// Helper Files
require_once('helpers/system_helper.php');

// Autoload
function __autoload($class_name){
	require_once('libraries/'.$class_name.'.php');
}