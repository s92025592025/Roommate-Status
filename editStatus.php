<?php
	include "common.php";

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		if(isset($_POST["source"])){
			editXML();
		}else{
			editStatus();
		}
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

				<div class="col-sm-offset-4">
					<p>Print the QR below to let your friend scan</p>
					<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http%3A%2F%2Fdaniel-websit.azurewebsites.net%2Froommate-status%2Findex.php"/>
				</div>
			</div>
		<?php
		HTMLFooter();
	}

	function editStatus(){
		checkLoggedIn();

		if(!isset($_POST["general"]) || $_POST["general"] == ""){
			header("location:javascript://history.go(-1)");
			die();
		}

		editXML();

		header("Location: editStatus.php");
		die();
	}

	function editXML(){
		$xml = new DOMDocument();
		$xml->load("status.xml");
		$xml->getElementsByTagName("general")->item(0)->setAttribute("avaliable", $_POST["general"]);

		if(!isset($_POST["memo"]) || trim($_POST["memo"]) == ""){
			$xml->getElementsByTagName("text")->item(0)->nodeValue = $_POST["general"];
		}else{
			$xml->getElementsByTagName("text")->item(0)->nodeValue = $_POST["memo"];
		}

		$xml->save("status.xml");
	}
?>