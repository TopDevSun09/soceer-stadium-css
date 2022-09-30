<?php

function football_other_league($arrPOST){
	
	$qryRow = tep_query("SELECT * FROM TABLE WHERE 1=1");

	while($infoRow = tep_fetch_object($qryRow)){

		$result .= "<div style=\"border:1px solid green;\">
			<div style=\"float:left;width:20%;border:1px solid red;\">
			xxx
			</div>
			<div style=\"float:right;width:75%;border:1px solid blue;\">
			xxx
			</div>
		</div>";

	}

	return $result;

}

echo football_other_league();

?>