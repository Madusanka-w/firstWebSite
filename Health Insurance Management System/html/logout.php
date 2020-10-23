<?php
	
    session_destroy();
    unset($_SESSION['acno']);
    $_SESSION['message'] = "you are now logged out";
    header("location: index.html");
   
?>