<?php
	include "common.php";

	HTMLHeader("Daniel's Status", "", "");
	?>
		<h1>Daniel's Status</h1>
		<?php
			$xml = new DOMDocument();
			$xml->load("status.xml");
			$status = $xml->getElementsByTagName("general")->item(0)->getAttribute("avaliable");
			$memo = $xml->getElementsByTagName("text")->item(0)->nodeValue;

			$status_sign = "green";
			switch($status){
				case "Busy":
					$status_sign = "yellow";
					break;
				case "Do Not Disturb":
					$status_sign = "red";
					break;
				case "Out":
					$status_sign = "white";
					break;
			}
		?>
		<h2><a href="#" data-toggle="tooltip" data-placement="bottom" title="<?=$status?>"><span class="glyphicon glyphicon-record" style="color: <?=$status_sign?>;"></span></a> <?=$memo?></h2>

		<script>
			$(document).ready(function(){
			    $('[data-toggle="tooltip"]').tooltip(); 
			});
		</script>
	<?php
	HTMLFooter();
?>