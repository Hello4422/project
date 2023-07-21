<?php
	require_once('functions.php');


$dbc = mysqli_connect('localhost', 'root', '', 'fcp_batch_march');
if (!$dbc) {
	die('Database Connection Error '. mysqli_connect_error());
}

/* Most usable paths */
if (!defined('ROOT_PATH')) {
	define('ROOT_PATH', __DIR__);
}
if (!defined('BASE_URL')) {
	define('BASE_URL', 'http://localhost/fcp-blog/');
}
 

ini_set('error_reporting', true);
error_reporting(E_ALL);
?>    <div></div>