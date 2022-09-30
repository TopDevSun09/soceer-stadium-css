<?php

//function content_recomend($arrPOST){
	//$http_host = $_SERVER['HTTP_HOST'];
	//$get_org_id = tep_fetch_object(tep_query("SELECT * 
	//										FROM nano_organization 
	//										WHERE organization_url 
	//										LIKE '%" . $_SERVER['SERVER_NAME'] . "%' 
	//										AND organization_type = 'production'
	//										"));
	//$qryRow = tep_query("SELECT *
	//					FROM nano_contents 
	//					WHERE content_type = 'Recommend Article'
	//					AND organization_id = '".$get_org_id->organization_id."'
	//					");

	$qryRow = tep_query("SELECT * FROM nano_contents WHERE content_type = 'Recommend Article' AND organization_id = '10' ORDER BY content_id DESC LIMIT 0, 2"); 

	echo "<div>";
	echo "<h2>Recommended</h2>";
	echo "<ul>";
	//<img src=\'https://'.$http_host.'/functions/chat/admin/image/' . $infoRow->content_banner ."\" />
	while ($infoRow = tep_fetch_object($qryRow)){
		echo "
		<div>
			<img style=\"border:1px solid black; width:15px; height:15px;\" />
			<li>".$infoRow->content_title."</li>
		</div>";
	}
	echo "</ul>";
	echo "</div>";

//	return $result;
//}


//$arrPOST['date'] = '2022-09-18';
//echo content_recomend($arrPOST);




?>