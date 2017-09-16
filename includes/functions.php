<?php
function isLoginSessionExpired() {
	$login_session_duration = 1800; 
	$current_time = time(); 
	if(isset($_SESSION['LoggedInTime']) and isset($_SESSION["Username"])){  
		if(((time() - $_SESSION['LoggedInTime']) > $login_session_duration)){ 
			return true; 
		} 
	}
	return false;
}
?>