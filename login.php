<?php
	include "common.php";

	if($_SERVER["REQUEST_METHOD"] != "POST"){
		session_start();

		if(isset($_SESSION["login"]) && $_SESSION["login"] == "TRUE"){
			header("Location: editStatus.php");
			die();
		}

		HTMLHeader("Login", "login.css", "");
		?>
			<div class="row">
				<div class="col-sm-offset-4 col-sm-4">
					<form class="form-horizontal" action="login.php" method="POST">
						<div class="form-group">
							<label class="control-label">Passcode: </label>
							<div>
								<input type="password" class="form-control" id="passcode">
							</div>
						</div>
						<div class="form-group">
							<button class="btn btn-default" type="submit">Login</button>
						</div>
					</form>
				</div>
			</div>
		<?php
		HTMLFooter();
	}else{}
?>