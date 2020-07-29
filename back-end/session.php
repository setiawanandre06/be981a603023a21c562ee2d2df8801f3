<?php

	if(session_id() == '' || !isset($_SESSION)) {
		session_start();
		if (!isset($_SESSION['username']))
		{
			// Check if cookie exists
			if(isset($_COOKIE['username'])){
				$_SESSION['username'] = $_COOKIE['username'];
			}
		}
	}

?>