
<style >
	.football_league_title{
		background:black; color:white;
		padding: 3px 6px;
		font-size: 13px;
	}
	.football_league_matches_row{
		background:white; color:black;
		padding: 8px 10px;
		font-size: 12px;
		border-bottom: 1px solid #cccccc;
		cursor: pointer;
	}
	.football_league_matches_row:hover{
		background: #F8EFBA;
	}
	.football_league_matches_row_time{
		margin-left:10px;float:left;width:80px;
	}
	.football_league_matches_row_status{
		margin-left:10px;float:left;width:80px;
		text-align: center;
	}
	.football_league_matches_row_home{
		margin-left:10px;float:left;width:250px;
		text-align: right;
	}
	.football_league_matches_row_away{
		margin-left:10px;float:left;width:250px;
		text-align: left;
	}
	.football_league_matches_row_score{
		margin-left:10px;float:left;width:80px;
		text-align: center;
	}
	.football_league_matches_row_ht{
		margin-left:10px;float:left;width:80px;
		color: red;
		font-weight: bold;
		font-size: 90%;
	}
	
	.football_league_matches_row_ht_corner{
		margin-left:10px;float:left;width:80px;
	}
	.football_league_matches_row_live{
		margin-left:10px;float:left;width:80px;text-align:center;
	}
	.football_league_matches_row_live img{
		height: 25px; margin-top: -4px;
	}
	
	.cardRed{
		padding: 1px 2px; font-size: 80%;color: white; background: #eb3b5a;
	}
	.cardYellow{
		padding: 1px 2px; font-size: 80%;color: white; background: #fed330;
	}
</style>


<?php

if($_GET['selectDate']==""){
	$extSql = " AND DATE_FORMAT(match_time, '%Y-%m-%d') = '".date('Y-m-d')."' ";
} else {
	$extSql = " AND DATE_FORMAT(match_time, '%Y-%m-%d') = '".$_GET['selectDate']."' ";
}

$qryString = "SELECT *, COALESCE(pl.league_update_status, match_leagueId) AS league_popular, match_leagueId,	match_leagueEn
						FROM nano_schedule_match sm 
						LEFT JOIN nano_leagues_list ll ON sm.match_leagueId = ll.league_leagueId 
						LEFT JOIN nano_popular_league pl ON pl.league_code = sm.match_leagueId 
						WHERE 
							1=1 
							$extSql 
						
						ORDER BY league_popular ASC, match_time ASC";
		

$qryRow = tep_query($qryString);

$leagueId = "";

while($infoRow = tep_fetch_object($qryRow)){

	if ( $infoRow->match_leagueId != $leagueId) {

		$leagueId = $infoRow->match_leagueId;

		echo "
		<div class=\"football_league_title\">
			
			<div style=\"margin-left:10px;float:left;width:25px;\">
				<img src=\"includes/images/football/country/logo/" . strtolower($infoRow->league_countryEn) . ".svg\" style=\"width: 20px;height: 20px;border-radius: 50%;\" />
			</div>

			<div style=\"margin-left:10px;float:left;\">
				".$infoRow->league_countryEn.": ".$infoRow->league_nameEn."
			</div>

			<div style=\"clear:both\"></div>

		</div>";

	}

	// STATUS// STATUS// STATUS// STATUS// STATUS// STATUS// STATUS// STATUS
	// STATUS// STATUS// STATUS// STATUS// STATUS// STATUS// STATUS// STATUS
	// STATUS// STATUS// STATUS// STATUS// STATUS// STATUS// STATUS// STATUS
	if($infoRow->match_state == 'First half')
	{
	  $todayDate = date_create(date("Y-m-d H:i:s"));
	  $startDate = date_create($infoRow->match_startTime);
	  $diffDate = date_diff($startDate, $todayDate);
	  $remainingDay = $diffDate->format('%R%a');
	  $remainingTime = $diffDate->format("%H");
	  $remainingMins = $diffDate->format("%i");

	  $mins = $remainingTime * 60;
	  $matchProgressTime = $mins + $remainingMins . "'";

	  if($matchProgressTime > 60)
	  {
	      $matchProgressTime = '60+';
	  }
	  else
	  {
	      $matchProgressTime = $matchProgressTime;
	  }
	}
	else if($infoRow->match_state == 'Second half')
	{
	  $todayDate = date_create(date("Y-m-d H:i:s"));
	  $startDate = date_create($infoRow->match_startTime);
	  $diffDate = date_diff($startDate, $todayDate);
	  $remainingDay = $diffDate->format('%R%a');
	  $remainingTime = $diffDate->format("%H");
	  $remainingMins = $diffDate->format("%i");

	  $mins = $remainingTime * 60;
	  $matchProgressTime = $mins + $remainingMins + 45 . "'";

	  if($matchProgressTime > 90)
	  {
	      $matchProgressTime = '90+';
	  }
	  else
	  {
	      $matchProgressTime = $matchProgressTime;
	  }
	}
	else if($infoRow->match_state == 'Half-time break')
	{
	  $matchProgressTime = "HT";
	}

	else if($infoRow->match_state == 'Finished')
	{
	  $matchProgressTime = "FT";
	}
	else
	{
	  $matchProgressTime = $infoRow->match_state;
	}

	// SCORE // SCORE // SCORE // SCORE // SCORE // SCORE // SCORE // SCORE // SCORE
	// SCORE // SCORE // SCORE // SCORE // SCORE // SCORE // SCORE // SCORE // SCORE
	// SCORE // SCORE // SCORE // SCORE // SCORE // SCORE // SCORE // SCORE // SCORE
	if( $infoRow->match_homeScore > $infoRow->match_awayScore){
		$homeScore = "color: #000000;";
		$awayScore = "color: #a5b1c2;";
	} else if( $infoRow->match_awayScore > $infoRow->match_homeScore){
		$homeScore = "color: #a5b1c2;";
		$awayScore = "color: #000000;";
	} else {
		$homeScore = "color: #a5b1c2;";
		$awayScore = "color: #a5b1c2;";
	}
	
	// RANK // RANK// RANK// RANK// RANK// RANK// RANK// RANK// RANK// RANK// RANK// RANK
	// RANK // RANK// RANK// RANK// RANK// RANK// RANK// RANK// RANK// RANK// RANK// RANK
	// RANK // RANK// RANK// RANK// RANK// RANK// RANK// RANK// RANK// RANK// RANK// RANK
	if($infoRow->match_homeRankEn!=""){
		$strHomeRank = "[".$infoRow->match_homeRankEn."]";
	} else {
		$strHomeRank = "";
	}

	if($infoRow->match_awayRankEn!=""){
		$strAwayRank = "[".$infoRow->match_awayRankEn."]";
	} else {
		$strAwayRank = "";
	}

	// RED YELLOW // RED YELLOW // RED YELLOW // RED YELLOW // RED YELLOW // RED YELLOW 
	// RED YELLOW // RED YELLOW // RED YELLOW // RED YELLOW // RED YELLOW // RED YELLOW 
	// RED YELLOW // RED YELLOW // RED YELLOW // RED YELLOW // RED YELLOW // RED YELLOW 
	if($infoRow->match_homeRed > 0){
		$strHomeRed = "<span class=\"cardRed\">".$infoRow->match_homeRed."</span>";
	} else {
		$strHomeRed = "";
	}

	if($infoRow->match_awayRed > 0){
		$strAwayRed = "<span class=\"cardRed\">".$infoRow->match_awayRed."</span>";
	} else {
		$strAwayRed = "";
	}

	if($infoRow->match_homeYellow > 0){
		$strHomeYellow = "<span class=\"cardYellow\">".$infoRow->match_homeYellow."</span>";
	} else {
		$strHomeYellow = "";
	}

	if($infoRow->match_awayYellow > 0){
		$strAwayYellow = "<span class=\"cardYellow\">".$infoRow->match_awayYellow."</span>";
	} else {
		$strAwayYellow = "";
	}

	// GLIVE_ID  // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID 
	// GLIVE_ID  // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID 
	// GLIVE_ID  // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID 
	if($infoRow->glive_id > 0){
		$strLive = "<img src=\"includes/images/icon-live.gif\" />";
	} else {
		$strLive = "";
	}

	echo "
	<div class=\"football_league_matches_row\" match-id=\"".$infoRow->match_id."\" onclick=\"window.location='football-details?id=".createToken($infoRow->match_id)."'\">
		
		<div class=\"football_league_matches_row_time\">
			".date('H:i:s',strtotime($infoRow->match_time))." 
		</div>

		<div class=\"football_league_matches_row_status\">
			".$matchProgressTime."
		</div>

		<div class=\"football_league_matches_row_home\">
			{$strHomeRed} 
			{$strHomeYellow} 
			".$strHomeRank." ".$infoRow->match_homeEn."
		</div>

		<div class=\"football_league_matches_row_score\">
			<span style=\"{$homeScore}\">".$infoRow->match_homeScore."</span>
			 - 
			<span style=\"{$awayScore}\">".$infoRow->match_awayScore."</span>
		</div>

		<div class=\"football_league_matches_row_away\">
			".$infoRow->match_awayEn." ".$strAwayRank."
			{$strAwayYellow} 
			{$strAwayRed} 
		</div>

		<div class=\"football_league_matches_row_ht\">
			HT ".$infoRow->match_homeHalfScore." - ".$infoRow->match_awayHalfScore."
		</div>

		<div class=\"football_league_matches_row_ht_corner\">
			<img src=\"includes/images/icon-corner.svg\" style=\"height:15px;margin-top:-5px;\" />".$infoRow->match_homeCorner." - ".$infoRow->match_awayCorner."
		</div>

		<div class=\"football_league_matches_row_live\">
			{$strLive}
		</div>

		<div style=\"clear:both\"></div>

	</div>";



}


?>