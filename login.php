<?php
	session_start();

	if(isset($_SESSION["login"]) && $_SESSION["login"] == "TRUE"){
		header("Location: editStatus.php");
		die();
	}

	HTMLHeader("Login", "", "");

	HTMLFooter();
?>