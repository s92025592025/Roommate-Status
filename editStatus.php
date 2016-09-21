<?php
	include "common.php";

	if($_SERVER["REQUEST_METHOD"] == "POST"){

	}else{
		showForm();
	}
?>

<?php
	function showForm(){
		HTMLHeader("Edit Status", "", "");
		checkLoggedIn();
		?>
			<div class="col-sm-offset-4 col-sm-4">
				<form action="editStatus.php" method="POST">
					<div class="form-group">
						<label>Status: </label>
						<select class="form-control" name="general">
							<option><span class="glyphicon glyphicon-record" style="color: green;"></span> Avaliable</option>
							<option><span class="glyphicon glyphicon-record" style="color: yellow;"></span> Busy</option>
							<option><span class="glyphicon glyphicon-record" style="color: red;"></span> Do Not Disturb</option>
							<option><span class="glyphicon glyphicon-record" style="color: white;"></span> Out</option>
						</select>
					</div>
					<div class="form-group">
						<label>Memo: </label>
						<textarea class="form-control" rows="5" name="memo"></textarea>
					</div>
					<div class="form-group">
						<button class="btn btn-primary" type="submit">Update</button>
					</div>
				</form>
			</div>
		<?php
		HTMLFooter();
	}
?>