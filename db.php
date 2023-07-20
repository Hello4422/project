<?php 


try {

	$pdo = new PDO ('mysql:host=localhost;dbname=fcp_batch_march','root','');
	
} catch (PDOException $e) {

	echo "<strong style=color:red;> Connection Error! </strong>".'<mark>'.$e->getMessage().'</mark>';
	
}


