<?php
ini_set( 'session.cookie_httponly', 1 );
session_start();

include("functions.php");

if(isset($_SESSION["Username"])) {
	if(isLoginSessionExpired()){
		$_SESSION = array();
		 session_destroy();

       echo '<meta http-equiv="refresh" content="0;index.php">';
	
	
	}
}

 
?>