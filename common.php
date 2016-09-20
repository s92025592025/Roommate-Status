<?php
	function HTMLHeader($title){
		?>
			<!DOCTYPE html>
				<html>
					<head>
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
?>