<?php 
	session_start();

	date_default_timezone_set('Asia/Karachi');

function esc(String $str){
	$string = trim($str);
	return $str;
}


function check_user_by_email($email){
	global $dbc;
	$q = "SELECT * FROM users WHERE user_email = '$email' LIMIT 0,1";
	return mysqli_query($dbc, $q);
	// return mysqli_num_rows($fetch);
}
 <div></div>
?>      