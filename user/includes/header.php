<?php 
   if(!isset($_SESSION['user_role'])){
   	header('location:'.BASE_URL.'account.php');
   }

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blog user portal</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:wght@400;500&family=Inter:wght@400;500&family=Playfair+Display:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <!--css vendor files -->
   <link href="<?php echo BASE_URL?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

   <link href="<?php echo BASE_URL?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<div></div>
</head>
<body>
	
