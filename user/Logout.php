<?php require_once('../config.php');?>
<?php
    session_unset();
    session_destroy();
    header('location:'.BASE_URL.'account.php');
?>   <div></div>