<?php
	function HTMLHeader($title, $css, $js){
		?>
			<!DOCTYPE html>
				<html>
					<head>
					<meta name="viewport" content="width=device-width, initial-scale=1.0">
					<!--JQuery-->
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
					<!--Bootstrap-->
						<!-- Latest compiled and minified CSS -->
						<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

						<!-- Optional theme -->
						<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

						<!-- Latest compiled and minified JavaScript -->
						<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
						<!--common css-->
						<link rel="stylesheet" href="common.css">
						<!--self define css-->
						<link rel="stylesheet" href="<?=$css?>">
						<!--self define js-->
						<script src="<?=$js?>"></script>
						<title><?=$title?></title>
					</head>
					<body>
		<?php
	}

	function HTMLFooter(){
		?>
				</body>
			</html>
		<?php
	}

	function checkLoggedIn(){
		session_start();

		if(!isset($_SESSION["login"]) || $_SESSION["login"] != "TRUE"){
			session_unset();
			session_destroy();
			returnToLogin();
		}
	}

	function returnToLogin(){
		header("Location: login.php");
		die();
	}

?>