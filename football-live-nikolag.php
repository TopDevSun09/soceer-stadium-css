<?php
	include "includes/mvc-controller/football-live.php";

	// FOR RETRIEVE LIVE STREAM - FETCH FROM API
	// FOR RETRIEVE LIVE STREAM - FETCH FROM API
	// FOR RETRIEVE LIVE STREAM - FETCH FROM API

	include('includes/api/football-api.php');

	// CHECK TEAM LOGO IS IT HAVE BLANK
	if ($infoTeamHome->team_logo2 == "") {
		$homeTeamLogo = "includes/mvc-theme/$layout/$infoOrganization->organization_domain/images/team-no-logo.svg";
	} else {
		$homeTeamLogo = "includes/images/football/team/logo/" . $infoTeamHome->team_logo2;
	}

	if ($infoTeamAway->team_logo2 == "") {
		$awayTeamLogo = "includes/mvc-theme/$layout/$infoOrganization->organization_domain/images/team-no-logo.svg";
	} else {
		$awayTeamLogo = "includes/images/football/team/logo/" . $infoTeamAway->team_logo2;
	}

	$infoRow->match_leagueId = 13014; // FOR JY TESTING ONLY
?>

<style>
	.football_detail_header .league_time {
		text-align: center;
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		-ms-flex-line-pack: center;
		align-content: center;
		-webkit-box-pack: center;
		-ms-flex-pack: center;
		justify-content: center;
		height: 13px;
		font-size: 13px;
		font-weight: 500;
		color: #666666;
		-webkit-box-align: center;
		-ms-flex-align: center;
		align-items: center;
		margin: 0 0 38px 0;
		letter-spacing: 0.79px;
	}

	.football_detail_header .league_time i svg {
		width: 17px;
		height: 17px;
		position: absolute;
		left: 0%;
		top: 0%;
		display: block;
	}

	.football_detail_header .league_time i svg.collect1 {
		margin-top: 0px !important;
	}

	.football_detail_header .collect1 .st0 {
		fill: #999999;
	}

	.football_detail_header .collect1 .st1 {
		fill: #bbbbbb;
	}

	.football_detail_header .collect1 .st2 {
		fill: #ffffff;
	}

	.football_detail_header .league_time i {
		width: 17px;
		height: 17px;
		position: relative;
		background-size: 100% 100%;
		cursor: pointer;
		margin-left: 11px;
	}

	.football_detail_header .league_time i {
		width: 17px;
		height: 17px;
		position: relative;
		background-size: 100% 100%;
		cursor: pointer;
		margin-left: 12px;
	}

	.football_detail_header {
		background: #fff;
		min-height: 207px;
		padding: 31px 0 0 0;
	}

	/* new */
	.football_detail_header .comp {
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		-webkit-box-align: center;
		-ms-flex-align: center;
		align-items: center;
		-webkit-box-pack: center;
		-ms-flex-pack: center;
		justify-content: center;
	}

	.football_detail_header .comp .comp-flex {
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		-webkit-box-align: center;
		-ms-flex-align: center;
		align-items: center;
	}

	.football_detail_header .comp .comp-flex1 {
		-webkit-animation: Aleft 0.6s;
		animation: Aleft 0.6s;
	}

	.football_detail_header .comp .comp1 {
		font-size: 24px;
		font-weight: 500;
		color: #333333;
		width: 319px;
		cursor: pointer;
		text-align: right;
		cursor: auto !important;
	}

	.football_detail_header .comp1new {
		width: max-content !important;
		float: right !important;
		padding: 5px 20px !important;
		cursor: pointer !important;
	}

	.football_detail_header .comp .comp2 {
		width: 58px;
		height: 58px;
		margin: 0 20px;
	}

	.football_detail_header .comp .comp2 img {
		max-width: 100%;
		display: block;
	}

	.football_detail_header .comp .comp3 {
		font-size: 40px;
		font-weight: bold;
		color: #333333;
		width: 74px;
		text-align: center;
	}

	.football_detail_header .comp .comp4 {
		font-size: 12px;
		font-weight: 500;
		color: #666666;
		text-align: center;
		width: 232px;
	}

	.football_detail_header p {
		margin: 0 0 10px;
	}

	.football_detail_header .comp .comp4 p {
		line-height: 1;
		margin-bottom: 8px;
	}

	.football_detail_header .comp .comp4 b {
		line-height: 1;
	}

	.football_detail_header .comp .comp-flex {
		display: -webkit-box;
		display: -ms-flexbox;
		display: flex;
		-webkit-box-align: center;
		-ms-flex-align: center;
		align-items: center;
	}

	.football_detail_header .comp .comp-flex2 {
		-webkit-animation: Aright 0.6s;
		animation: Aright 0.6s;
	}

	.football_detail_header .comp .comp5 {
		font-size: 40px;
		font-weight: bold;
		color: #333333;
		width: 74px;
		text-align: center;
	}

	.football_detail_header .comp .comp6 {
		width: 58px;
		height: 58px;
		margin: 0 20px;
	}

	.football_detail_header .comp .comp6 img {
		max-width: 100%;
		display: block;
	}

	.football_detail_header .comp .comp7 {
		font-size: 24px;
		font-weight: 500;
		color: #333333;
		cursor: pointer;
		width: 319px;
		white-space: nowrap;
	}

	.football_detail_header .comp7 .comp1new {
		float: none !important;
		width: max-content !important;
		padding: 5px 20px !important;
		cursor: pointer !important;
	}


	.teamlogo {
		width: 58px;
		height: 58px;
	}

	.live-streaming {
		background: #2b2b2b;
		height: auto;
		min-height: 500px;
	}

	.live-streaming .live-title {
		font-weight: 500;
		color: #ffffff;
		display: flex;
		-webkit-box-align: center;
		align-items: center;
		background: #262626;
		height: 36px;
	}

	.live-streaming .live-title i {
		width: 5px;
		height: 15px;
		background: #E5BA5C;
		border-radius: 3px;
		margin: 10px;
	}

	.live-streaming .video-wrap {
		height: 3.380208rem;
		width: 100%;
		height: 470px;
		overflow: hidden;
		position: relative;
	}

	.live-streaming .video-wrap .component-mask {
		display: flex;
		justify-content: space-around;
		position: absolute;
		width: 75%;
		height: 50%;
		left: 50%;
		top: 50%;
		transform: translate(-50%, -50%);
		color: #fff;
		background-color: rgba(5, 25, 7, 0.6);
	}

	.live-streaming .video-wrap .component-mask .component-item {
		-webkit-box-pack: center;
		justify-content: center;
		display: flex;
		-webkit-box-orient: vertical;
		-webkit-box-direction: normal;
		flex-direction: column;
		-webkit-box-align: center;
		align-items: center;
		width: 160px;
	}

	.live-streaming .video-wrap .component-mask .component-item .itemlogo {
		display: flex;
		height: 50%;
		-webkit-box-pack: center;
		justify-content: center;
		-webkit-box-orient: vertical;
		-webkit-box-direction: normal;
		flex-direction: column;
	}

	.live-streaming .video-wrap .component-mask .component-score {
		display: flex;
		-webkit-box-flex: 1;
		flex: 1;
		-webkit-box-pack: center;
		justify-content: center;
		-webkit-box-orient: vertical;
		-webkit-box-direction: normal;
		flex-direction: column;
		-webkit-box-align: center;
		align-items: center;
	}

	.live-streaming .video-wrap .component-mask .component-score .match-score {
		display: flex;
		-webkit-box-pack: center;
		justify-content: center;
		-webkit-box-orient: vertical;
		-webkit-box-direction: normal;
		flex-direction: column;
		width: 70%;
		height: 50%;
		font-size: 34px;
		font-weight: bolder;
	}

	.live-streaming .video-wrap .component-mask .component-score .match-status {
		display: flex;
		-webkit-box-pack: center;
		justify-content: center;
		-webkit-box-orient: vertical;
		-webkit-box-direction: normal;
		flex-direction: column;
		width: 80%;
		height: 60px;
	}

	.live-streaming .video-wrap .component-mask .component-score .status-text {
		position: relative;
		-webkit-box-align: center;
		align-items: center;
		-webkit-box-pack: center;
		justify-content: center;
		width: 100%;
		background-color: rgba(5, 25, 7, 0.6);
		text-align: center;
		padding: 10px;
		height: 40px;
	}

	.live-streaming .video-wrap .component-mask .component-score .status-text:before {
		position: absolute;
		top: 0;
		left: 0;
		content: "";
		width: 100%;
		height: 2.5px;
		background-color: #E5BA5C;
	}

	.teamlogo {
		display: flex;
		width: 58px;
		height: 58px;
	}

	.live-streaming .video-wrap .component-mask .component-item .teamname {
		display: flex;
		text-align: center;
		-webkit-box-pack: center;
		justify-content: center;
		-webkit-box-orient: vertical;
		-webkit-box-direction: normal;
		flex-direction: column;
		height: 60px;
		width: 100px;
	}

	.overview-timeline-div {
		margin-bottom: :100px;
	}

	.overview-timeline-span {
		border-radius: 50%;
		border: 1px solid;
		background-color: green;
		color: white;
		padding: 10px;
		/*margin-bottom: 100px;*/
	}

	.overview-item-left {
		float: left;
		transform: translateX(0px);
		opacity: 1;
	}

	.overview-info-right {
		/*float: right;*/
		transform: translateX(0px);
		opacity: 1;
	}

	.overview-item {
		width: 100%;
		height: 0.4375rem;
		margin: 0 auto;
		position: relative;
	}

	.overviews .timelist .overview-item .overview-item-left {
		position: absolute;
		top: 0.052083rem;
		right: 50%;
		min-width: 0.895833rem;
		max-width: 50%;
		margin-right: 0.21875rem;
		background: #fcfcfc;
		border: 0.010417rem solid #999999;
		padding: 0.026042rem 0.041667rem;
		font-size: 0.072917rem;
		font-weight: 500;
		color: #333333;
		-webkit-transform: rotateX(-0.520833rem);
		transform: rotateX(-0.520833rem);
		opacity: 0;
		-webkit-transition: all 1s;
		transition: all 1s;
		margin-top: 4px;
	}

	.overviews .timelist .overview-item .overview-item-right {
		position: absolute;
		top: 0.052083rem;
		left: 50%;
		padding: 0.067708rem 0.041667rem;
		margin-left: 0.21875rem;
		min-width: 0.895833rem;
		max-width: 50%;
		background: #fcfcfc;
		border: 0.010417rem solid #999999;
		padding: 0.026042rem 0.041667rem;
		font-size: 0.072917rem;
		font-weight: 500;
		color: #333333;
		-webkit-transform: rotateX(0.520833rem);
		transform: rotateX(0.520833rem);
		opacity: 0;
		-webkit-transition: all 1s;
		transition: all 1s;
		margin-top: 3px;
	}

	.section-team-match-stat {
		background-color: #f7f3e7;
		width: 100%;
		margin: 5px 0px;
		padding: 10px 0px 10px 0px;
		text-align: center;
		font-size: 14px;
		font-weight: normal;
		margin-top: 10px;
	}

	.show-row-match-stat {
		font-size: 14px;
		margin: 5px 0px;
		padding: 10px 15px 10px 15px;
	}

	.show-row-match-stat .row:first-child {
		margin-bottom: 10px;
	}

	.horizontal-bar-match-stat-home {
		border-bottom: 10px solid green;
		border-radius: 10px;
		text-align: right;
	}

	.horizontal-bar-match-stat-away {
		border-bottom: 10px solid blue;
		border-radius: 10px;
		text-align: left;
	}

	.showData {
		text-align: center;
		background-color: black;
		padding: 10px;
		margin-top: 10px;
		border-radius: 12px;
		margin: 12px auto;
		box-shadow: 0 1px 0 0 #eee, 0 2px 4px 0 rgb(0 0 0 / 10%);
		background-color: #fff;
		padding-bottom: 24px;
		/*box-sizing: border-box;*/
	}

	.titleShowData {
		width: 100%;
		height: 40px;
		line-height: 40px;
		padding-left: 16px;
		text-align: left;
		font-weight: bold;
		background-image: linear-gradient(to right, #AB790D 20%, #E5BA5C 75%);
		color: white;
	}

	.btnFrame {
		/*padding: 0 16px 13px;*/
		margin-left: 8px;
		float: left;
	}

	.btnDiv {
		width: 100%;
		margin-left: 8px;
		float: left;
		margin-bottom: 16px;
	}

	.btnGroup {
		padding-top: 5px;
		/*margin-left: 16px;*/
		border-top: 1px solid #eee;
		font-size: 12px;
		border: none;
		float: left;
	}

	.btnGroup:active {
		background: yellow;
	}

	.btnStanding {
		display: inline-block;
		line-height: 1;
		white-space: nowrap;
		cursor: pointer;
		background: #fff;
		border: 1px solid #dcdfe6;
		color: #606266;
		-webkit-appearance: none;
		text-align: center;
		box-sizing: border-box;
		outline: 0;
		margin: 0;
		transition: .1s;
		font-weight: 500;
		padding: 5px 15px;
		font-size: 14px;
		border-radius: 4px;
	}

	.tableShowData {
		width: 100%;
		padding: 10px;
		/*border: none;*/
		margin: 0;
		font-size: 13px;
	}

	.thShowData {
		background-color: #f1f2f5;
	}

	.colShowData {
		border: none;
		padding: 5px;
	}

	.col-show-standing {
		padding: 15px;
		border: 1px solid #eee;
	}

	.rowShowData {
		border-bottom: 1px solid #eee;
	}

	.rowShowData:nth-child(even) {
		background-color: #f7f3e7;
	}

	.standing-recent-lose {
		background: url("includes/images/football/general/standing-icon-lose.svg") no-repeat;
		display: inline;
		background-size: 100% 100%;
		color: transparent;
	}

	.standing-recent-win {
		background: url("includes/images/football/general/standing-icon-win.svg") no-repeat;
		display: inline;
		background-size: 100% 100%;
		color: transparent;
	}

	.standing-recent-draw {
		background: url("includes/images/football/general/standing-icon-draw.svg") no-repeat;
		display: inline;
		background-size: 100% 100%;
		color: transparent;
	}

	.div-show-standing-result {
		color: transparent;
	}

	.h2h-recent-win {
		background: url("includes/images/football/general/standing-icon-win.svg") no-repeat;
		display: inline;
		background-size: 100% 100%;
		color: transparent;
	}

	.h2h-recent-lose {
		background: url("includes/images/football/general/standing-icon-lose.svg") no-repeat;
		display: inline;
		background-size: 100% 100%;
		color: transparent;
	}

	.h2h-recent-draw {
		background: url("includes/images/football/general/standing-icon-draw.svg") no-repeat;
		display: inline;
		background-size: 100% 100%;
		color: transparent;
	}

	.table-show-h2h {
		width: 100%;
		border: 1px solid #eee;
		padding: 10px;
		margin-top: 10px !important;
	}

	.col-show-h2h {
		padding: 10px;
		border: 1px solid #eee;
	}

	.colShowH2HTeamNameHome {
		color: blue;
	}

	.colShowH2HTeamNameAway {
		color: blue;
	}

	.colShowH2HScoreRed {
		color: #c72a1d;
	}

	.colShowH2HScoreGreen {
		color: #49a52a;
	}

	.colShowH2HScoreYellow {
		color: #feb82d;
	}

	.col-show-standing-w {
		color: green;
	}

	.col-show-standing-d {
		color: orange;
	}

	.col-show-standing-l {
		color: red;
	}
</style>

<div class="panel_details">
	<div class="football_detail_header">
		<div class="league_time"> <?= $infoRow->match_leagueEn ?> <?= $infoRow->match_time ?>
			<i>
				<svg viewBox="0 0 150 150" class="collect1">
					<path d="M120.99,139.5H29.01c-9.05,0-16.38-7.34-16.38-16.38V22.05c0-9.05,7.34-16.38,16.38-16.38h91.99
						c9.05,0,16.38,7.34,16.38,16.38v101.06C137.38,132.16,130.04,139.5,120.99,139.5z" class="st1"></path>
					<path d="M124.3,60.98c-0.65-2.01-2.43-3.43-4.53-3.62l-28.61-2.6L79.84,28.29c-0.83-1.94-2.73-3.2-4.84-3.2
						s-4.01,1.26-4.84,3.2L58.84,54.76l-28.61,2.6c-2.1,0.19-3.88,1.62-4.53,3.62c-0.65,2.01-0.05,4.21,1.54,5.6l21.62,18.96l-6.38,28.09
						c-0.47,2.06,0.33,4.2,2.05,5.44c0.92,0.67,2,1,3.08,1c0.94,0,1.87-0.25,2.7-0.75L75,104.57l24.67,14.74
						c1.8,1.08,4.08,0.99,5.79-0.25c1.71-1.24,2.52-3.37,2.05-5.44l-6.38-28.09l21.62-18.96C124.35,65.19,124.95,62.99,124.3,60.98z" class="st2"></path>
				</svg>
			</i>
		</div>
		<div class="comp">
			<div class="comp-flex comp-flex1 kk">
				<a href="football-team?teamid=<?php echo createToken($infoRow->match_homeId); ?>" target="_blank">
					<div class="comp1">
						<div class="comp1new"> <?= $infoRow->match_homeEn ?> </div>
					</div>
				</a>
				<div class="comp2">
					<img src="<?php echo $homeTeamLogo; ?>" alt="">
				</div>
				<div class="comp3"><?= $infoRow->match_homeScore ?></div>
			</div>
			<div class="comp4">
				<p class="m_d_matchProgressTime blinktime_livetab"></p>
				<p class="m_d_status"><?= $infoRow->match_status ?></p>
				<b class="m_d_allstatus">( HT <?= $infoRow->match_homeHalfScore ?> : <?= $infoRow->match_awayHalfScore ?> )</b>
			</div>
			<div class="comp-flex comp-flex2">
				<div class="comp5"><?= $infoRow->match_awayScore ?></div>
				<div class="comp6">
					<img src="<?php echo $awayTeamLogo; ?>" alt="">
				</div>
				<a href="football-team?teamid=<?php echo createToken($infoRow->match_awayId); ?>" target="_blank">
					<div class="comp7">
						<div class="comp1new"> <?= $infoRow->match_awayEn ?> </div>
					</div>
				</a>
			</div>
		</div>
	</div>

	<div class="first_bar">
		<?php
			//Don't change built in system arrays like $_GET
			/*
				if($_GET['tab']==""){
					$_GET['tab'] = "LIVE";
				}
				*/

			// check is there have lineups
			// if yes only show the lineups tab

			$qryLineups = tep_query("SELECT * FROM nano_football_lineups WHERE matchId = '" . $infoRow->match_code . "' ORDER BY lineups_insert_datetime DESC LIMIT 0,1 ");

			if (tep_num_rows($qryLineups) >= 1) {
				$tab = '<span ><a href="football-live?tab=LINEUPS&id=' . createToken($infoRow->match_id) . '">Lineups</a></span>';
			} else {
				$tab = "";
			}

			$currentTab = (isset($_GET['tab']) && $_GET['tab'] != '') ? $_GET['tab'] : 'LIVE';

			$strTab = '' . $tab . '
				<span ><a href="football-live?tab=H2H&id=' . createToken($infoRow->match_id) . '">H2H</a></span>
				<span ><a href="football-live?tab=STANDING&id=' . createToken($infoRow->match_id) . '">Standing</a></span>
				<span ><a href="football-live?tab=LIVE&id=' . createToken($infoRow->match_id) . '">Live</a></span>
				';

			echo str_replace("?tab=" . $currentTab . "\">", "?tab=" . $currentTab . "\" class=\"tabSelected\">", $strTab);
		?>
	</div>

	<div class="details_container">

		<!-- START LIVE TAB -->
		<!-- START LIVE TAB -->
		<!-- START LIVE TAB -->

		<?php
			if ($currentTab == 'LIVE') {
		?>
			<div class="row">
				<div class="details_left">
					<?php

						// CHECK IS IT HAVE LIVESTREAM
						// YES - SHOW IFRAME
						// NO - SHOW RESULT

						if ($infoRow->NowPlaying == 1) //HAVE LIVE STREAM
						{
							$live = LSGLiveLink($infoRow->Channel);
					?>

						<iframe src="<?php echo $live->H5LINKROW; ?>" height="500" width="800"></iframe>

					<?php
						} else { // NO LIVESTREAM
					?>
						<div class="live-streaming">
							<center>
								<!-- Title -->
								<div class="live-title">
									<i></i>
									<span><?= $infoRow->league_nameEn ?></span>
									<span><?= date("Y-m-d H:i:s", strtotime($infoRow->match_time)) ?></span>
								</div>

								<div class="video-wrap">
									<div style="position: relative; background: url('includes/images/football/general/football-background.png') no-repeat center center;width: 100%;height: 100%;">
										<div class="component-mask">

											<!-- Home Team -->
											<div class="component-item">
												<div class="itemlogo">
													<img class="teamlogo" src="<?php echo $homeTeamLogo; ?>" alt="">
												</div>
												<div class="teamname"><?php echo $infoRow->match_homeEn; ?></div>
											</div>

											<!-- Score -->
											<div class="component-score">
												<div class="match-score"><?php echo $infoRow->match_homeScore . " - " . $infoRow->match_awayScore; ?></div>
												<div class="match-status">
													<div class="status-text"><?php echo $infoRow->match_state; ?></div>
												</div>
											</div>

											<!-- Away Team -->
											<div class="component-item">
												<div class="itemlogo">
													<img class="teamlogo" src="<?php echo $awayTeamLogo; ?>" alt="">
												</div>
												<div class="teamname"><?php echo $infoRow->match_awayEn; ?></div>
											</div>

										</div>
									</div>
								</div>

							</center>
							
			
						</div>

					<?php
					} // END NO LIVESTREAM
					?>

					<!-- OVERVIEW -->
					<!-- OVERVIEW -->
					<!-- OVERVIEW -->

					<div class="panel">
						<div class="panelheader">
							<h3>Overview</h3>
						</div>
						<div class="panelsubheader">
							<div class="row">
								<div class="col-md-6">
									<img src="<?php echo $homeTeamLogo; ?>" alt="">
									<?php echo $infoTeamHome->team_nameEn; ?>
								</div>
								<div class="col-md-6 text-right">
									<?php echo $infoTeamAway->team_nameEn; ?>
									<img src="<?php echo $awayTeamLogo; ?>" alt="">
								</div>
							</div>
						</div>
						<div class="panelbody">
							<div class="overviews">
								<div>
									<ul class="timelist">
										<?php
										// SHOW OVERVIEW

										// GET TECHNICAL STATISTIC
										$qryTechnicalStatistic = tep_query("SELECT * FROM nano_football_technical_statistic WHERE statistic_matchId = '" . tep_input($infoRow->match_code) . "' ORDER BY statistic_time DESC");

										while ($infoTechnicalStatistic = tep_fetch_object($qryTechnicalStatistic)) {

											if ($infoTechnicalStatistic->statistic_isHome == 1) {
												$isHome = "Home";
												$side = "Left";
											} else {
												$isHome = "Away";
												$side = "Right";
											}
										?>
											<li class='overview-item' style='margin-bottom:100px;'>

												<!-- SHOULD HAVE CIRCLE WRAP THE TIME HERE -->
												<b><?php echo $infoTechnicalStatistic->statistic_time; ?></b>

												<br>

												<!-- RIGHT - CSS POSITION IN RIGHT -->
												<!-- LEFT - CSS POSITION IN LEFT -->

												<span><?php echo $side . " - " . $infoTechnicalStatistic->statistic_nameEn; ?></span>
											</li>
										<?php
										}
										?>

										<li class="start">
											<div> <?php echo $infoRow->match_homeScore; ?> - <?php echo $infoRow->match_awayScore; ?></div>
										</li>
									</ul>
								</div>
							</div>



							<div class="assists">
								<p>Figure Legends:</p>
								<ul>
									<li><img src="https://www.a8livetv.com/themes/a8livetv/image/goals.png" alt="">Goal</li>
									<li><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyNC4xLjMsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCAxNTAgMTUwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAxNTAgMTUwOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPg0KCS5zdDB7ZmlsbDojODZCRTU3O30NCgkuc3Qxe2ZpbGw6IzFFQkJFODt9DQoJLnN0MntmaWxsOiNGMkFGMUM7fQ0KCS5zdDN7ZmlsbDojRUQzMzI3O30NCgkuc3Q0e2ZpbGw6I0VDMzYyNzt9DQoJLnN0NXtmaWxsOiM2OUQxNzM7fQ0KCS5zdDZ7ZmlsbDojRkZGRkZGO30NCgkuc3Q3e2ZpbGw6I0VCRUFFQzt9DQoJLnN0OHtmaWxsOiNEQUQ5REQ7fQ0KCS5zdDl7ZmlsbDojRkY1MjUyO30NCgkuc3QxMHtmaWxsOiNGNDQwNDA7fQ0KCS5zdDExe2ZpbGw6bm9uZTtzdHJva2U6IzNFQjg2MjtzdHJva2Utd2lkdGg6NjtzdHJva2UtbWl0ZXJsaW1pdDoxMDt9DQoJLnN0MTJ7ZmlsbDojM0NCNzZFO30NCgkuc3QxM3tmaWxsOm5vbmU7c3Ryb2tlOiNGRjNFMzE7c3Ryb2tlLXdpZHRoOjY7c3Ryb2tlLW1pdGVybGltaXQ6MTA7fQ0KCS5zdDE0e2ZpbGw6I0ZGM0UzMTt9DQoJLnN0MTV7ZmlsbDojRjQzNjE2O30NCjwvc3R5bGU+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggY2xhc3M9InN0MTUiIGQ9Ik03NSwyLjc3QzM1LjE2LDIuNzcsMi43NywzNS4xNiwyLjc3LDc1UzM1LjE2LDE0Ny4yMyw3NSwxNDcuMjNzNzIuMjMtMzIuMzksNzIuMjMtNzIuMjMNCgkJCVMxMTQuODQsMi43Nyw3NSwyLjc3eiBNNzkuNiwyNi4yNWwxOC41Ni05Ljk5YzEwLjI3LDQuMDYsMTkuMjcsMTAuNzUsMjYuMDcsMTkuMjRsLTQuNDMsMjAuNDNsLTE0LjE2LDYuOTRMNzkuNTcsNDMuODhWMjYuMjUNCgkJCUg3OS42eiBNNTIuMDEsMTYuMmwxOC41NiwxMC4wMnYxNy42M0w0NC41Myw2Mi44NEwzMC4yOCw1NS45bC00LjQzLTIwLjU0QzMyLjcxLDI2Ljg3LDQxLjcxLDIwLjI0LDUyLjAxLDE2LjJ6IE0yMi45MiwxMTAuNjkNCgkJCWMtNS45LTguNTgtOS43My0xOC42NS0xMC43OC0yOS41N2wxNS4yOS0xNi41OWwxMy45NCw2LjgzbDEwLjUsMjkuODJsLTguODksMTAuNjRMMjIuOTIsMTEwLjY5eiBNOTEuMTEsMTM2LjA1DQoJCQljLTUuMTYsMS4zNS0xMC41MiwyLjE0LTE2LjExLDIuMTRjLTYuNzQsMC0xMy4yLTEuMDctMTkuMy0zLjA1bC01LjY3LTE3LjY5bDkuMDYtMTAuODlIOTFsOC44OSwxMC41Mkw5MS4xMSwxMzYuMDV6DQoJCQkgTTEwNi45MSwxMTEuNTFsLTguNzItMTAuMzNsMTAuNjQtMjkuODJsMTMuODgtNi44bDE1LjIxLDE2LjU5Yy0wLjksOS40LTMuOTUsMTguMTctOC41MiwyNS45M0wxMDYuOTEsMTExLjUxeiIvPg0KCTwvZz4NCjwvZz4NCjwvc3ZnPg0K" alt="">OwnGoal</li>
									<li><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyNC4xLjMsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCAxNTAgMTUwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAxNTAgMTUwOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPg0KCS5zdDB7ZmlsbDojMTliYmU4O30NCjwvc3R5bGU+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggY2xhc3M9InN0MCIgZD0iTTc1LDIuNzdDMzUuMTYsMi43NywyLjc3LDM1LjE2LDIuNzcsNzVTMzUuMTYsMTQ3LjIzLDc1LDE0Ny4yM3M3Mi4yMy0zMi4zOSw3Mi4yMy03Mi4yM1MxMTQuODQsMi43Nyw3NSwyLjc3DQoJCQl6IE03OS42LDI2LjI1bDE4LjU2LTkuOTljMTAuMjcsNC4wNiwxOS4yNywxMC43NSwyNi4wNywxOS4yNGwtNC40MywyMC40M2wtMTQuMTYsNi45NEw3OS41Nyw0My44OFYyNi4yNUg3OS42eiBNNTIuMDEsMTYuMg0KCQkJbDE4LjU2LDEwLjAydjE3LjYzTDQ0LjUzLDYyLjg0TDMwLjI4LDU1LjlsLTQuNDMtMjAuNTRDMzIuNzEsMjYuODcsNDEuNzEsMjAuMjQsNTIuMDEsMTYuMnogTTIyLjkyLDExMC42OQ0KCQkJYy01LjktOC41OC05LjczLTE4LjY1LTEwLjc4LTI5LjU3bDE1LjI5LTE2LjU5bDEzLjk0LDYuODNsMTAuNSwyOS44MmwtOC44OSwxMC42NEwyMi45MiwxMTAuNjl6IE05MS4xMSwxMzYuMDUNCgkJCWMtNS4xNiwxLjM1LTEwLjUyLDIuMTQtMTYuMTEsMi4xNGMtNi43NCwwLTEzLjItMS4wNy0xOS4zLTMuMDVsLTUuNjctMTcuNjlsOS4wNi0xMC44OUg5MWw4Ljg5LDEwLjUyTDkxLjExLDEzNi4wNXoNCgkJCSBNMTA2LjkxLDExMS41MWwtOC43Mi0xMC4zM2wxMC42NC0yOS44MmwxMy44OC02LjhsMTUuMjEsMTYuNTljLTAuOSw5LjQtMy45NSwxOC4xNy04LjUyLDI1LjkzTDEwNi45MSwxMTEuNTF6Ii8+DQoJPC9nPg0KPC9nPg0KPC9zdmc+DQo=" alt="">Penalty</li>
									<li><img src="data:image/svg+xml;base64,PHN2ZyBpZD0iU3ZnanNTdmcxMDMxIiB3aWR0aD0iMjg4IiBoZWlnaHQ9IjI4OCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4bWxuczpzdmdqcz0iaHR0cDovL3N2Z2pzLmNvbS9zdmdqcyI+PGRlZnMgaWQ9IlN2Z2pzRGVmczEwMzIiPjwvZGVmcz48ZyBpZD0iU3ZnanNHMTAzMyI+PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDE1MCAxNTAiIHZpZXdCb3g9IjAgMCAxNTAgMTUwIiB3aWR0aD0iMjg4IiBoZWlnaHQ9IjI4OCI+PHBhdGggZmlsbD0iIzE5YmJlOCIgZD0iTTc1LDIuNzdDMzUuMTYsMi43NywyLjc3LDM1LjE2LDIuNzcsNzVTMzUuMTYsMTQ3LjIzLDc1LDE0Ny4yM3M3Mi4yMy0zMi4zOSw3Mi4yMy03Mi4yM1MxMTQuODQsMi43Nyw3NSwyLjc3CgkJCXogTTc5LjYsMjYuMjVsMTguNTYtOS45OWMxMC4yNyw0LjA2LDE5LjI3LDEwLjc1LDI2LjA3LDE5LjI0bC00LjQzLDIwLjQzbC0xNC4xNiw2Ljk0TDc5LjU3LDQzLjg4VjI2LjI1SDc5LjZ6IE01Mi4wMSwxNi4yCgkJCWwxOC41NiwxMC4wMnYxNy42M0w0NC41Myw2Mi44NEwzMC4yOCw1NS45bC00LjQzLTIwLjU0QzMyLjcxLDI2Ljg3LDQxLjcxLDIwLjI0LDUyLjAxLDE2LjJ6IE0yMi45MiwxMTAuNjkKCQkJYy01LjktOC41OC05LjczLTE4LjY1LTEwLjc4LTI5LjU3bDE1LjI5LTE2LjU5bDEzLjk0LDYuODNsMTAuNSwyOS44MmwtOC44OSwxMC42NEwyMi45MiwxMTAuNjl6IE05MS4xMSwxMzYuMDUKCQkJYy01LjE2LDEuMzUtMTAuNTIsMi4xNC0xNi4xMSwyLjE0Yy02Ljc0LDAtMTMuMi0xLjA3LTE5LjMtMy4wNWwtNS42Ny0xNy42OWw5LjA2LTEwLjg5SDkxbDguODksMTAuNTJMOTEuMTEsMTM2LjA1egoJCQkgTTEwNi45MSwxMTEuNTFsLTguNzItMTAuMzNsMTAuNjQtMjkuODJsMTMuODgtNi44bDE1LjIxLDE2LjU5Yy0wLjksOS40LTMuOTUsMTguMTctOC41MiwyNS45M0wxMDYuOTEsMTExLjUxeiIgY2xhc3M9ImNvbG9yNGNiNzQ4IHN2Z1NoYXBlIj48L3BhdGg+PHBhdGggZmlsbD0iI2RmMjcyNiIgZD0iTTM3LjA0LDExNS41OUwzNy4wNCwxMTUuNTljLTMuODQtMy44NC0zLjg0LTEwLjA1LDAtMTMuODZMOTkuMSwzOS42N2MzLjg0LTMuODQsMTAuMDUtMy44NCwxMy44NiwwbDAsMAoJYzMuODQsMy44NCwzLjg0LDEwLjA1LDAsMTMuODZMNTAuOSwxMTUuNTlDNDcuMDgsMTE5LjQ0LDQwLjg4LDExOS40NCwzNy4wNCwxMTUuNTl6IiBjbGFzcz0iY29sb3JkZjI3MjYgc3ZnU2hhcGUiPjwvcGF0aD48cGF0aCBmaWxsPSIjZGYyNzI2IiBkPSJNMTEyLjk2LDExNS41OUwxMTIuOTYsMTE1LjU5Yy0zLjg0LDMuODQtMTAuMDUsMy44NC0xMy44NiwwTDM3LjA0LDUzLjUzYy0zLjg0LTMuODQtMy44NC0xMC4wNSwwLTEzLjg2bDAsMAoJYzMuODQtMy44NCwxMC4wNS0zLjg0LDEzLjg2LDBsNjIuMDYsNjIuMDZDMTE2LjgxLDEwNS41NCwxMTYuODEsMTExLjc4LDExMi45NiwxMTUuNTl6IiBjbGFzcz0iY29sb3JkZjI3MjYgc3ZnU2hhcGUiPjwvcGF0aD48L3N2Zz48L2c+PC9zdmc+" alt="">Penalty Missed</li>
									<li><img src="https://www.a8livetv.com/themes/a8livetv/image/assist.png" alt="">Assists</li>
									<li><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyMS4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCAxMDAgMTQ2IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAxMDAgMTQ2OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPg0KCS5zdDB7ZmlsbDojRjRCMTFFO30NCjwvc3R5bGU+DQo8cGF0aCBjbGFzcz0ic3QwIiBkPSJNODAuNSwxNDQuOEgxOS42Yy04LjcsMC0xNS43LTcuMS0xNS43LTE1LjdWMTdjMC04LjcsNy4xLTE1LjcsMTUuNy0xNS43aDYwLjljOC43LDAsMTUuNyw3LjEsMTUuNywxNS43djExMg0KCUM5Ni4yLDEzNy43LDg5LjEsMTQ0LjgsODAuNSwxNDQuOHoiLz4NCjwvc3ZnPg0K" alt="">Yellow card</li>
									<li><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyMS4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCAxMDAgMTQ2IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAxMDAgMTQ2OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPg0KCS5zdDB7ZmlsbDojRUQzMzI3O30NCjwvc3R5bGU+DQo8cGF0aCBjbGFzcz0ic3QwIiBkPSJNODAuNSwxNDQuOEgxOS42Yy04LjcsMC0xNS43LTcuMS0xNS43LTE1LjdWMTdjMC04LjcsNy4xLTE1LjcsMTUuNy0xNS43aDYwLjljOC43LDAsMTUuNyw3LjEsMTUuNywxNS43djExMg0KCUM5Ni4yLDEzNy43LDg5LjEsMTQ0LjgsODAuNSwxNDQuOHoiLz4NCjwvc3ZnPg0K" alt="">Red card</li>
									<li><img src="https://www.a8livetv.com/assets/589c34ad1e1c68c1bebaba09b921d815.svg" alt="">Second Yellow</li>
									<li><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyNC4xLjMsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCAxNTAgMTUwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAxNTAgMTUwOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPg0KCS5zdDB7ZmlsbDojRUY0NDM3O30NCgkuc3Qxe2ZpbGw6IzNFQjc2RTt9DQo8L3N0eWxlPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik04NC4wMyw4Mi4xYy0wLjMtMS4wMi0xLTEuNjgtMS43OC0xLjY4SDYxLjFWMTIuNDVjMC0xLjUtMC44Ni0yLjcyLTEuOTMtMi43MkgyOC4zDQoJCQljLTEuMDcsMC0xLjkzLDEuMjItMS45MywyLjcydjY3Ljk2SDUuMTVjLTAuNzgsMC0xLjQ4LDAuNjYtMS43OCwxLjY3Yy0wLjMsMS4wMi0wLjE0LDIuMTksMC40MiwyLjk2bDM4LjQ5LDU0LjQxDQoJCQljMC4zNiwwLjUxLDAuODUsMC44LDEuMzcsMC44YzAuNTEsMCwxLTAuMjksMS4zNy0wLjc5bDM4LjYxLTU0LjQxQzg0LjE2LDg0LjI4LDg0LjMzLDgzLjExLDg0LjAzLDgyLjF6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGNsYXNzPSJzdDEiIGQ9Ik02NS45Nyw2Ny45YzAuMywxLjAyLDEsMS42OCwxLjc4LDEuNjhIODguOXY2Ny45NmMwLDEuNSwwLjg2LDIuNzIsMS45MywyLjcyaDMwLjg3DQoJCQljMS4wNywwLDEuOTMtMS4yMiwxLjkzLTIuNzJWNjkuNThoMjEuMjJjMC43OCwwLDEuNDgtMC42NiwxLjc4LTEuNjdjMC4zLTEuMDIsMC4xNC0yLjE5LTAuNDItMi45NmwtMzguNDktNTQuNDENCgkJCWMtMC4zNi0wLjUxLTAuODUtMC44LTEuMzctMC44cy0xLDAuMjktMS4zNywwLjc5TDY2LjM5LDY0Ljk0QzY1Ljg0LDY1LjcyLDY1LjY3LDY2Ljg5LDY1Ljk3LDY3Ljl6Ii8+DQoJPC9nPg0KPC9nPg0KPC9zdmc+DQo=" alt="">Substitution</li>
									<li><img src="https://www.a8livetv.com/assets/GoalCancelled.svg" alt="">Goal Cancelled</li>
								</ul>
							</div>
						</div>
					</div>
					<style>
						.panel {
							border-radius: 6px;
							width: 100%;
							background: #F3F4F6;
							margin: 10px 0px;
						}

						.details_right .panel {
							width: 90%;
							margin: 10px auto;
						}

						.panelheader {
							background-image: linear-gradient(to right, #AB790D 20%, #E5BA5C 75%);
							color: white;
							text-align: left;
							font-size: 15px;
							font-weight: bold;
							padding-top: 12px;
							padding-left: 12px;
							padding-bottom: 5px;
						}

						.panelheader h3 {
							font-size: 14px;
						}

						.panelsubheader {
							color: #333333;
							background: #f7f3e7;
							border-bottom: 2px solid #e2e2e2;
							height: 50px;
							padding: 10px 10px;
						}

						.panelsubheader img {
							width: 30px;
						}

						.panelbody {
							width: 100%;
							padding: 10px;
							background-color: #F3F4F6;
							overflow-y: auto;
						}

						.panelbody .overviews {}

						.panelbody .overviews ul {
							padding: 50px 10px;
							display: flex;
							flex-wrap: wrap;
							flex-direction: column-reverse;
						}

						.panelbody .overviews ul li {
							width: 100%;
							display: flex;
							-webkit-box-align: center;
							align-items: center;
							-webkit-box-pack: center;
							justify-content: center;
							margin-bottom: 0.09375rem;
						}

						.panelbody .overviews ul li div {
							width: 105px;
							height: 37px;
							background: #999999;
							border-radius: 5px;
							text-align: center;
							line-height: 37px;
							font-size: 17px;
							font-weight: 500;
							color: #ffffff;
						}

						.panelbody .assists p {
							font-size: 14px;
							font-weight: 500;
							color: #666666;
							line-height: 23px;
							margin: 0 auto 13px auto;
							height: 58px;
							padding-top: 32px;
						}

						.panelbody .assists ul {
							display: flex;
							flex-wrap: wrap;
							height: 85px;
							background: #e0e0e2;
							border-radius: 10px;
							margin: 0 auto;
							padding: 20px 20px 0 20px;
							align-content: flex-start;
						}

						.panelbody .assists ul li {
							font-weight: normal !important;
							font-size: 15px !important;
							display: flex;
							-webkit-box-align: center;
							align-items: center;
							margin-right: 20px;
							height: 20px;
							white-space: nowrap;
							margin-bottom: 10px;
							color: #666666;
						}

						.panelbody .assists ul li img {
							height: 20px;
							margin-right: 10px;
							vertical-align: middle
						}

						.panelbody .version h6 {
							height: 13px;
							font-size: 16px;
							font-weight: bold;
							color: #555555;
							margin-top: 15px;
							margin-bottom: 9px;
						}

						.panelbody .version p .link-to-team {
							cursor: pointer;
							color: #f8bc3d;
						}
					</style>

					<!-- SHOW TECHNICAL STATISTIC -->
					<div class="football_inner_column_bottom">
						<div class="row">
							<?php
							// GET TECHNICAL STATISTIC INFO


							$infoTechnicalDetails = tep_fetch_object(tep_query("SELECT * FROM nano_football_technical_statistic_details WHERE matchId = '" . $infoRow->match_code . "' "));

							$arrTechnicCount = explode(";", $infoTechnicalDetails->statistic_technicCount);

							$technicCountList = array('Kick-off', 'First Corner Kick', 'First Yellow Card', 'Shots', 'Shots on goal', 'Fouls', 'Corner kicks', 'Corner kicks (OT)', 'Free kicks', 'Offsides', 'Own goals', 'Yellow cards', 'Yellow cards (OT)', 'Red cards', 'Possession', 'Heads', 'Saves', 'Goalkeeper Off His Line', 'Conceded', 'Tackle Success', 'Intercept', 'Long Passes', 'Short Passes', 'Assist', 'Cross Success', 'First Substitution', 'Last Substitution', 'First offside', 'Last offside', 'Substitutions', 'Last Corner Kick', 'Last Yellow Card', 'Substitutions (OT)', 'Offsides (OT)', 'Off Target', 'Hit The Post', 'Head Success', 'Blocked', 'Tackles', 'Dribbles', 'Throw ins', 'Passes', 'Pass Success', 'Attack', 'Dangerous Attack', 'Corner Kicks (HT)', 'Possession (HT)');

							for ($i = 0; $i < sizeof($arrTechnicCount); $i++) {
								$arrTechnicCountDetail = explode(",", $arrTechnicCount[$i]);
								$technicCountKey = (int) $arrTechnicCountDetail[0];
								$technicCount = isset($technicCountList[$technicCountKey]) ? $technicCountList[$technicCountKey] : '';

								$technicCountHome = str_replace('%', '', $arrTechnicCountDetail[1]);
								$technicCountAway = str_replace('%', '', $arrTechnicCountDetail[2]);

								if ($technicCount) {
									$technicArr[] = [
										"technicType" => $technicCount,
										"technicHome" => $technicCountHome,
										"technicAway" => $technicCountAway
									];

									if ($technicCount == 'Possession') {
										$homePossession = $technicCountHome;
										$awayPossession = $technicCountAway;
									}

									if ($technicCount == 'Corner kicks') {
										$homeCornerKick = $technicCountHome;
										$awayCornerKick = $technicCountAway;
									}

									if ($technicCount == 'Red cards') {
										$homeRedCard = $technicCountHome;
										$awayRedCard = $technicCountAway;
									}

									if ($technicCount == 'Yellow cards') {
										$homeYellowCard = $technicCountHome;
										$awayYellowCard = $technicCountAway;
									}
								}
								$technicCountStr .= $technicCount . ";";
							}
							// echo "<pre>".print_r($technicArr,true)."</pre>";
							?>

							<!-- <div class="col-sm-2">
													<?php echo "Corner Kick " . $homeCornerKick; ?>
											</div>

											<div class="col-sm-2">
													<?php echo "Red Card " . $homeRedCard; ?>
											</div>

											<div class="col-sm-2">
													<?php echo "Yellow Card " . $homeYellowCard; ?>
											</div>

											<div class="col-sm-2">
													<?php echo $homePossession . "%" . " Possession " . $awayPossession . "%"; ?>
											</div>

											<div class="col-sm-2">
													<?php echo "Yellow Card " . $awayYellowCard; ?>
											</div>

											<div class="col-sm-2">
													<?php echo "Red Card " . $awayRedCard; ?>
											</div>

											<div class="col-sm-2">
													<?php echo "Corner Kick " . $awayCornerKick; ?>
											</div> -->
						</div>
					</div>
				</div>

				<div class="details_right">
					<?php


						$match_id = $infoRow->match_list_id;

						$message_category = "FOOTBALL";

						include_once('includes/mvc-controller/module-livechat.php');



						echo '<div class="row"><div class="col-md-12">';



						echo '</div></div>';

					?>

					<!-- STATS -->
					<!-- STATS -->
					<!-- STATS -->

					<div class="div-match-stat">
						<div class="first_bar title-section mb-0">Stats</div>

						<div class="section-team-match-stat">
							<div class="row">
								<div class="col-sm-6">
									<?php echo $infoRow->match_homeEn; ?>
								</div>

								<div class="col-sm-6">
									<?php echo $infoRow->match_awayEn; ?>
								</div>
							</div>
						</div>

						<div class="body-stats">
							<div class="show-row-match-stat">

								<?php

									// SHOWING MATCH STATS
									// SHOWING MATCH STATS
									// SHOWING MATCH STATS

									$qryTechnicalStatistic = tep_query("SELECT * FROM nano_football_technical_statistic WHERE statistic_matchId = '" . tep_input($infoRow->match_code) . "' ORDER BY statistic_time DESC LIMIT 0,1");

									while ($infoTechnicalStatistic = tep_fetch_object($qryTechnicalStatistic)) {

										if ($infoTechnicalStatistic->statistic_isHome == 1) {
											$isHome = "Home";
										} else {
											$isHome = "Away";
										}

										$infoTechnicalDetails = tep_fetch_object(tep_query("SELECT * FROM nano_football_technical_statistic_details WHERE matchId = '" . $infoTechnicalStatistic->statistic_matchId . "' "));

										if ($infoTechnicalDetails == null) {
											$arrTechnicCount = explode(";", $infoTechnicalStatistic->statistic_technicCount);
										} else {
											$arrTechnicCount = explode(";", $infoTechnicalDetails->statistic_technicCount);
										}

										$technicCountStr = "";

										for ($i = 0; $i < sizeof($arrTechnicCount); $i++) {

											$arrTechnicCountDetail = explode(",", $arrTechnicCount[$i]);

											switch ($arrTechnicCountDetail[0]) {
												case '0':
													$technicCount = 'Kick-off';
													break;
												case '1':
													$technicCount = 'First Corner Kick';
													break;
												case '2':
													$technicCount = 'First Yellow Card';
													break;
												case '3':
													$technicCount = 'Shots';
													break;
												case '4':
													$technicCount = 'Shots on goal';
													break;
												case '5':
													$technicCount = 'Fouls';
													break;
												case '6':
													$technicCount = 'Corner kicks';
													break;
												case '7':
													$technicCount = 'Corner kicks (OT)';
													break;
												case '8':
													$technicCount = 'Free kicks';
													break;
												case '9':
													$technicCount = 'Offsides';
													break;
												case '10':
													$technicCount = 'Own goals';
													break;
												case '11':
													$technicCount = 'Yellow cards';
													break;
												case '12':
													$technicCount = 'Yellow cards (OT)';
													break;
												case '13':
													$technicCount = 'Red cards';
													break;
												case '14':
													$technicCount = 'Possession';
													break;
												case '15':
													$technicCount = 'Heads';
													break;
												case '16':
													$technicCount = 'Saves';
													break;
												case '17':
													$technicCount = 'Goalkeeper Off His Line';
													break;
												case '18':
													$technicCount = 'Conceded';
													break;
												case '19':
													$technicCount = 'Tackle Success';
													break;
												case '20':
													$technicCount = 'Intercept';
													break;
												case '21':
													$technicCount = 'Long Passes';
													break;
												case '22':
													$technicCount = 'Short Passes';
													break;
												case '23':
													$technicCount = 'Assist';
													break;
												case '24':
													$technicCount = 'Cross Success';
													break;
												case '25':
													$technicCount = 'First Substitution';
													break;
												case '26':
													$technicCount = 'Last Substitution';
													break;
												case '27':
													$technicCount = 'First offside';
													break;
												case '28':
													$technicCount = 'Last offside';
													break;
												case '29':
													$technicCount = 'Substitutions';
													break;
												case '30':
													$technicCount = 'Last Corner Kick';
													break;
												case '31':
													$technicCount = 'Last Yellow Card';
													break;
												case '32':
													$technicCount = 'Substitutions (OT)';
													break;
												case '33':
													$technicCount = 'Offsides (OT)';
													break;
												case '34':
													$technicCount = 'Off Target';
													break;
												case '35':
													$technicCount = 'Hit The Post';
													break;
												case '36':
													$technicCount = 'Head Success';
													break;
												case '37':
													$technicCount = 'Blocked';
													break;
												case '38':
													$technicCount = 'Tackles';
													break;
												case '39':
													$technicCount = 'Dribbles';
													break;
												case '40':
													$technicCount = 'Throw ins';
													break;
												case '41':
													$technicCount = 'Passes';
													break;
												case '42':
													$technicCount = 'Pass Success';
													break;
												case '43':
													$technicCount = 'Attack';
													break;
												case '44':
													$technicCount = 'Dangerous Attack';
													break;
												case '45':
													$technicCount = 'Corner Kicks (HT)';
													break;
												case '46':
													$technicCount = 'Possession (HT)';
													break;
												default:
													$technicCount = '';
											}

											$technicCountHome = str_replace('%', '', $arrTechnicCountDetail[1]);
											$technicCountAway = str_replace('%', '', $arrTechnicCountDetail[2]);

											if ($technicCount != "") {


								?>

								<!-- FIRST ROW -->
								<div class="row">
									<div class="col-sm-4" style="text-align: left;">
										<?php echo $technicCountHome; ?>
									</div>

									<div class="col-sm-4" style="text-align: center;">
										<?php echo $technicCount; ?>
									</div>

									<div class="col-sm-4" style="text-align: right;">
										<?php echo $technicCountAway; ?>
									</div>
								</div>

								<!-- SECOND ROW -->
								<div class="row">
									<div class="col-sm-6">
										<div class="horizontal-bar-match-stat-home"></div>
									</div>

									<div class="col-sm-6">
										<div class="horizontal-bar-match-stat-away"></div>
									</div>
								</div>

								<hr>

								<?php
											}
											// echo $technicCount . "<br>";
										}
									}
								?>

							</div>
						</div>

						<div class="row">
							<div class="col-md-12">
								<div class="panel">
									<div class="panelheader">
										<h3>Match Info</h3>
									</div>
									<div class="panelbody">
										<div class="version">
											<h6>About The Match</h6>
											<p>
												<span class="link-to-team"><?php echo $infoTeamHome->team_nameEn; ?> (w) </span> vs
												<span class="link-to-team"><?php echo $infoTeamAway->team_nameEn; ?> (w) </span>
												live score (and video online live stream) starts on
												<?php echo $infoRow->match_time; ?>
												UTC time in Chinese League Two. Here on
												<span class="link-to-team"><?php echo $infoTeamHome->team_nameEn; ?> (w)</span> vs
												<span class="link-to-team"><?php echo $infoTeamAway->team_nameEn; ?> (w)</span>
												LiveScore you can find all
												<span class="link-to-team"><?php echo $infoTeamHome->team_nameEn; ?> (w)</span> vs
												<span class="link-to-team"><?php echo $infoTeamAway->team_nameEn; ?> (w)</span>
												previous results sorted by their H2H matches.
											</p>

											<h6>Match Details </h6>
											<p><span>Event:</span> <?php echo $infoRow->match_leagueEn; ?></p>
											<p>
												<span>Name:</span> <span class="link-to-team"> <?php echo $infoTeamHome->team_nameEn; ?> (w)</span> vs
												<span class="link-to-team"> <?php echo $infoTeamAway->team_nameEn; ?> (w)</span>
											</p>
											<?php
											$mathTimeParts = explode(' ', $infoRow->match_time);
											?>
											<p><span>Date:</span> <?php echo $mathTimeParts[0]; ?></p>
											<p><span>Time:</span> <?php echo $mathTimeParts[1]; ?></p>
											<p><span>Stadium:</span> - </p>

											<h6>More Details</h6>
											<p><span class="link-to-team"><?php echo $infoTeamHome->team_nameEn; ?> (w) fixtures</span></p>
											<p><span class="link-to-team"><?php echo $infoTeamAway->team_nameEn; ?> (w) fixtures</span></p>
											<p class="tip">
												A8LiveTV football LiveScore is available as iPhone and iPad app, Android app on Google Play and Windows phone app. You can find us in all stores on different languages as "A8LiveTV". Install A8LiveTV app on and follow<span class="link-to-team"> <?php echo $infoTeamHome->team_nameEn; ?> (w)</span> vs <span class="link-to-team"><?php echo $infoTeamAway->team_nameEn; ?> (w)</span> live on your mobile!
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
									
			  
					<style>
						.football-board {
							background-color: white;
							margin-top: 30px;
							margin-bottom: 30px;
							padding: 0;
							width: 1170px;
							height: 810px;
							display: block;
							justify-content: center;
							align-items: center;
						}

						.football-board-top {
							background-image: linear-gradient(100deg, #9F6C0A, #E0B04F);
							margin: 0;
							color: white;
							font-size: 16px;
							padding-left: 10px;
							width: 100%;
							height: 35px;
							display: flex;
							align-items: center;
						}

						.football-board-center {
							/* background-color: #309B50; */
							margin-left: 10px;
							margin-top: 10px;
							margin-bottom: 10px;
							width: 98.4%;
							height: 720px;
							border-radius: 5px;
							display: block;
							justify-content: center;
							align-items: center;
						}

						.football-board-bottom {
							background-image: linear-gradient(100deg, #9F6C0A, #E0B04F);
							margin-left: 10px;
							margin-right: 10px;
							width: 98.4%;
							height: 35px;
							border-radius: 5px 5px 0px 0px;
						}
					</style>

					<div class="details_container football-board">
						<div class="row">
							<div class="col-md-12 ">
								<div class="football-board-top">Lineups</div>
								<div class="football-board-center">
									<svg width="1150" height="720" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="border-radius: 10px;">
										<title>PitchB</title>
										
										<g>
											<title>Layer 1</title>
											<rect id="svg_1" fill="green" height="720" width="1150"/>
											<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="576.5" cy="437" rx="9" ry="9" id="svg_20"/>
											<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="663.5" cy="360" rx="9" ry="9" id="svg_36"/>
											<path id="svg_2" fill="green" stroke-width="2" stroke="white" d="m575.91102,19.91777l-525,0l0,680l1050,0l0,-680l-525,0l0,680l0,-680z"/>
											<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="576.5" cy="355" rx="9" ry="9" id="svg_8"/>
											<circle id="svg_3" fill-opacity="0" stroke-width="2" stroke="white" r="91.5" cy="353.3557" cx="576.3557" fill="black"/>
											<circle id="svg_5" fill="white" stroke="white" r="2" cy="360" cx="160"/>
											<circle id="svg_6" fill="white" stroke="white" r="2" cy="360" cx="990"/>
											<path id="svg_9" fill-opacity="0" stroke-width="2" stroke="white" d="m50,269.39999l55,0l0,182.20002l-55,0l0,-182.20002z"/>
											<path id="svg_10" fill-opacity="0" stroke-width="2" stroke="white" d="m1100,269.39999l-55,0l0,182.20002l55,0l0,-182.20002z"/>
											<path fill="black" id="svg_11" fill-opacity="0" stroke-width="2" stroke="white" d="m50.66931,182.39977l166,0l0,340.20045l-166,0l0,-340.20045z"/>
											<path fill="black" id="svg_12" fill-opacity="0" stroke-width="2" stroke="white" d="m1102,188.39977l-165,0l0,343.20045l165,0l0,-343.20045z"/>
											<path id="svg_13" fill="green" stroke-width="2" stroke="white" d="m218,286.875a91.5,91.5 0 0 1 0,146.25l0,-146.25z"/>
											<path id="svg_14" fill="green" stroke-width="2" stroke="white" d="m935,286.875a91.5,91.5 0 0 0 0,146.25l0,-146.25z"/>
											<path id="svg_15" fill-opacity="0" stroke-width="2" stroke="white" d="m50,30a10,10 0 0 0 10,-10l-10,0l0,10z"/>
											<path id="svg_16" fill-opacity="0" stroke-width="2" stroke="white" d="m60,700a10,10 0 0 0 -10,-10l0,10l10,0z"/>
											<path id="svg_17" fill-opacity="0" stroke-width="2" stroke="white" d="m1100,690a10,10 0 0 0 -10,10l10,0l0,-10z"/>
											<path id="svg_18" fill-opacity="0" stroke-width="2" stroke="white" d="m1090,20a10,10 0 0 0 10,10l0,-10l-10,0z"/>
											<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="574.5" cy="99" rx="9" ry="9" id="svg_19"/>
											<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="444.5" cy="541" rx="9" ry="9" id="svg_21"/>
											<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="443.5" cy="177" rx="9" ry="9" id="svg_22"/>
											<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="362.5" cy="358" rx="9" ry="9" id="svg_23"/>
											<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="215.5" cy="475" rx="9" ry="9" id="svg_24"/>
											<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="220.5" cy="600" rx="9" ry="9" id="svg_25"/>
											<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="216.5" cy="106" rx="9" ry="9" id="svg_26"/>
											<ellipse fill="#ffff00" stroke="#ffff00" stroke-width="5" cx="53.5" cy="364" rx="9" ry="9" id="svg_27"/>
											<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="216" cy="237" id="svg_7" rx="9" ry="9"/>
											<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="575.5" cy="441" rx="9" ry="9" id="svg_35"/>
											<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="672.5" cy="98" rx="9" ry="9" id="svg_37"/>
											<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="663.5" cy="355" rx="9" ry="9" id="svg_38"/>
											<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="660.5" cy="595" rx="9" ry="9" id="svg_39"/>
											<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="716.5" cy="175" rx="9" ry="9" id="svg_40"/>
											<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="787.5" cy="357" rx="9" ry="9" id="svg_41"/>
											<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="731.5" cy="525" rx="9" ry="9" id="svg_42"/>
											<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="940.5" cy="601" rx="9" ry="9" id="svg_43"/>
											<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="937.5" cy="238" rx="9" ry="9" id="svg_44"/>
											<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="936.5" cy="488" rx="9" ry="9" id="svg_45"/>
											<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="935.5" cy="101" rx="9" ry="9" id="svg_46"/>
											<ellipse fill="#7f00ff" stroke="#7f00ff" stroke-width="5" cx="1100.5" cy="354" rx="9" ry="9" id="svg_47"/>
											<text fill="#ff00ff" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="572" y="520" id="svg_48" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">At Kickoff</text>
											<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="217" y="91" id="svg_49" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">Left D</text>
											<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="215" y="214" id="svg_50" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">Left Center D</text>
											<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="213" y="451" id="svg_51" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">Right Center D</text>
											<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="219" y="575" id="svg_52" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">Right D</text>
											<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="434.92307" y="345.77805" id="svg_53" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" transform="matrix(0.611765,0,0,0.82233,95.9294,49.164) ">Central Defensive Mid</text>
											<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="442" y="151" id="svg_54" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">Left Mid</text>
											<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="444" y="517" id="svg_55" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">Right Mid</text>
											<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="572" y="73" id="svg_56" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">Left Forward</text>
											<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="643.19192" y="349.83333" id="svg_57" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" transform="matrix(0.596386,0,0,0.705882,190.91,89.7059) ">Center Forward</text>
											<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="529" y="413" id="svg_58" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">Right Forward</text>
											<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="686" y="131" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" id="svg_59">Right Forward</text>
											<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="659" y="575" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" id="svg_60">Left Forward</text>
											<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="643.19192" y="349.83333" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" transform="matrix(0.596386,0,0,0.705882,282.91,142.706) " id="svg_61">Center Forward</text>
											<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="737" y="501" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" id="svg_62">Left Mid</text>
											<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="1129.63425" y="351.85833" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" transform="matrix(0.611765,0,0,0.82233,95.9294,49.164) " id="svg_63">Central Defensive Mid</text>
											<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="716" y="221" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" id="svg_64">Right Mid</text>
											<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="947" y="636" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" id="svg_65">Left D</text>
											<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="939" y="535" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" id="svg_66">Left Center D</text>
											<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="938" y="218" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" id="svg_67">Right Center D</text>
											<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="943" y="80" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" id="svg_69">Right D</text>
											<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="54" y="401" id="svg_70" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">Goalie</text>
											<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="1101" y="389" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" id="svg_71">Goalie</text>
											<image stroke="null" xlink:href="data:image/png;base64,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" id="svg_76" height="41" width="41" y="152" x="419"/>
											<image id="svg_77" stroke="null" xlink:href="data:image/png;base64,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" height="41" width="41" y="336.5" x="553.5"/>
											<image id="svg_78" stroke="null" xlink:href="data:image/png;base64,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" height="41" width="41" y="420.5" x="553.5"/>
											<image id="svg_79" stroke="null" xlink:href="data:image/png;base64,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" height="41" width="41" y="528.5" x="423.5"/>
											<image id="svg_80" stroke="null" xlink:href="data:image/png;base64,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" height="41" width="41" y="579.5" x="199.5"/>
											<image id="svg_81" stroke="null" xlink:href="data:image/png;base64,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" height="41" width="41" y="339.5" x="343.5"/>
											<image id="svg_82" stroke="null" xlink:href="data:image/png;base64,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" height="41" width="41" y="456.5" x="197.5"/>
											<image id="svg_83" stroke="null" xlink:href="data:image/png;base64,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" height="41" width="41" y="339.5" x="37.5"/>
											<image stroke="null" id="svg_84" xlink:href="data:image/png;base64,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" height="41" width="41" y="215.83069" x="197.16931"/>
											<image id="svg_85" stroke="null" xlink:href="data:image/png;base64,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" height="41" width="41" y="89.5" x="191.5"/>
											<image id="svg_86" stroke="null" xlink:href="data:image/png;base64,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" height="41" width="41" y="79.5" x="551.5"/>
											<image stroke="null" xlink:href="data:image/png;base64,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" id="svg_87" height="47" width="37" y="336" x="771"/>
											<image id="svg_88" stroke="null" xlink:href="data:image/png;base64,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" height="47" width="37" y="328.5" x="1083.5"/>
											<image id="svg_89" stroke="null" xlink:href="data:image/png;base64,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" height="47" width="37" y="212.5" x="921.5"/>
											<image id="svg_90" stroke="null" xlink:href="data:image/png;base64,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" height="47" width="37" y="462.5" x="917.5"/>
											<image id="svg_91" stroke="null" xlink:href="data:image/png;base64,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" height="47" width="37" y="572.5" x="921.5"/>
											<image id="svg_92" stroke="null" xlink:href="data:image/png;base64,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" height="47" width="37" y="504.5" x="717.5"/>
											<image stroke="null" id="svg_93" xlink:href="data:image/png;base64,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" height="47" width="37" y="572.5" x="649.5"/>
											<image id="svg_94" stroke="null" xlink:href="data:image/png;base64,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" height="47" width="37" y="330.5" x="647.5"/>
											<image id="svg_95" stroke="null" xlink:href="data:image/png;base64,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" height="47" width="37" y="74.5" x="915.5"/>
											<image id="svg_96" stroke="null" xlink:href="data:image/png;base64,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" height="47" width="37" y="70.5" x="653.5"/>
											<image id="svg_97" stroke="null" xlink:href="data:image/png;base64,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" height="47" width="37" y="150.5" x="699.5"/>
											<g id="svg_115" transform="translate(3505.199951171875,2194.56005859375) ">
											<rect id="svg_116" height="0" width="0" y="-652.45981" x="-1342.17869" display="none" stroke-width="0.5" stroke="#22C" fill-opacity="0.15" fill="#22C"/>
											<g id="svg_117" display="inline">
												<path id="svg_118" d="m-1218.48675,-782.84842l3208.496,0l0,2080.736l-3208.496,0z" stroke-dasharray="5,5" stroke="#22C" fill="none"/>
												<g id="svg_119" display="inline">
												<circle id="svg_120" cy="-782.84842" cx="-1218.48675" pointer-events="all" stroke-width="2" style="cursor:nw-resize" r="4" fill="#22C"/>
												<circle id="svg_121" cy="-782.84842" cx="385.76125" pointer-events="all" stroke-width="2" style="cursor:n-resize" r="4" fill="#22C"/>
												<circle id="svg_122" cy="-782.84842" cx="1990.00925" pointer-events="all" stroke-width="2" style="cursor:ne-resize" r="4" fill="#22C"/>
												<circle id="svg_123" cy="257.51958" cx="1990.00925" pointer-events="all" stroke-width="2" style="cursor:e-resize" r="4" fill="#22C"/>
												<circle id="svg_124" cy="1297.88758" cx="1990.00925" pointer-events="all" stroke-width="2" style="cursor:se-resize" r="4" fill="#22C"/>
												<circle id="svg_125" cy="1297.88758" cx="385.76125" pointer-events="all" stroke-width="2" style="cursor:s-resize" r="4" fill="#22C"/>
												<circle id="svg_126" cy="1297.88758" cx="-1218.48675" pointer-events="all" stroke-width="2" style="cursor:sw-resize" r="4" fill="#22C"/>
												<circle id="svg_127" cy="257.51958" cx="-1218.48675" pointer-events="all" stroke-width="2" style="cursor:w-resize" r="4" fill="#22C"/>
												<line id="svg_128" y2="-802.84842" x2="385.76125" y1="-782.84842" x1="385.76125" stroke="#22C"/>
												<circle id="svg_129" cy="-802.84842" cx="385.76125" style="cursor:url(images/rotate.png) 12 12, auto;" stroke-width="2" stroke="#22C" r="4" fill="lime"/>
												</g>
											</g>
											<g id="svg_130">
												<circle id="svg_131" cy="-18.57737" cx="-736.95954" xlink:title="Drag node to move it. Double-click node to change segment type" cursor="move" stroke-width="2" stroke="#00F" fill="#0FF" r="0" display="none"/>
												<path id="svg_132" d="m-742.63403,-23.77352c2.51213,1.01324 4.13221,3.11628 5.67449,5.19615" stroke-width="2" stroke="#0FF" fill="none" display="none"/>
												<circle id="svg_133" cy="-11.92252" cx="-732.44767" xlink:title="Drag node to move it. Double-click node to change segment type" cursor="move" stroke-width="2" stroke="#00F" fill="#0FF" r="0" display="none"/>
												<path id="svg_134" d="m-736.95954,-18.57737c1.61874,2.18294 3.58904,4.23249 4.51187,6.65485" stroke-width="2" stroke="#0FF" fill="none" display="none"/>
												<circle id="svg_135" cy="-4.40465" cx="-729.54762" xlink:title="Drag node to move it. Double-click node to change segment type" cursor="move" stroke-width="2" stroke="#00F" fill="#0FF" r="0" display="none"/>
												<path id="svg_136" d="m-732.44767,-11.92252c0.97989,2.57221 2.17512,4.75422 2.90005,7.51787" stroke-width="2" stroke="#0FF" fill="none" display="none"/>
												<circle id="svg_137" cy="3.07889" cx="-727.45565" xlink:title="Drag node to move it. Double-click node to change segment type" cursor="move" stroke-width="2" stroke="#00F" fill="#0FF" r="0" display="none"/>
												<path id="svg_138" d="m-729.54762,-4.40465c0.67973,2.59137 1.25965,4.94639 2.09197,7.48354" stroke-width="2" stroke="#0FF" fill="none" display="none"/>
												<circle id="svg_139" cy="10.67861" cx="-725.40796" xlink:title="Drag node to move it. Double-click node to change segment type" cursor="move" stroke-width="2" stroke="#00F" fill="#0FF" r="0" display="none"/>
												<path id="svg_140" d="m-727.45565,3.07889c0.78967,2.40711 0.33923,5.34553 2.04769,7.59972" stroke-width="2" stroke="#0FF" fill="none" display="none"/>
												<circle id="svg_141" cy="17.12724" cx="-720.96028" xlink:title="Drag node to move it. Double-click node to change segment type" cursor="move" stroke-width="2" stroke="#00F" fill="#0FF" r="0" display="none"/>
												<path id="svg_142" d="m-725.40796,10.67861c1.52148,2.0076 3.12501,3.93837 4.44768,6.44863" stroke-width="2" stroke="#0FF" fill="none" display="none"/>
												<circle id="svg_143" cy="19.14693" cx="-719.3861" xlink:title="Drag node to move it. Double-click node to change segment type" cursor="move" stroke-width="2" stroke="#00F" fill="#0FF" r="0" display="none"/>
												<path id="svg_144" d="m-720.96028,17.12724l1.57418,2.01969" stroke-width="2" stroke="#0FF" fill="none" display="none"/>
												<circle id="svg_145" cy="-23.77352" cx="-742.63403" xlink:title="Drag node to move it. Double-click node to change segment type" cursor="move" stroke-width="2" stroke="#0FF" fill="#0FF" r="0" display="none"/>
												<circle id="svg_146" cy="-22.76028" cx="-740.1219" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#EEE" r="0" display="none"/>
												<circle id="svg_147" cy="-537.27711" cx="-1151.93224" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#0FF" r="0" display="none"/>
												<line id="svg_148" display="none" y2="-537.27711" x2="-1151.93224" y1="-535.27711" x1="-1151.93224" stroke="#555"/>
												<line id="svg_149" display="none" y2="-23.77352" x2="-742.63403" y1="-22.76028" x1="-740.1219" stroke="#555"/>
												<line id="svg_150" display="none" y2="-18.57737" x2="-736.95954" y1="-20.65724" x1="-738.50182" stroke="#555"/>
												<circle id="svg_151" cy="-20.65724" cx="-738.50182" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#0FF" r="0" display="none"/>
												<line id="svg_152" display="none" y2="-18.57737" x2="-736.95954" y1="-16.39443" x1="-735.3408" stroke="#555"/>
												<circle id="svg_153" cy="-16.39443" cx="-735.3408" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#EEE" r="0" display="none"/>
												<line id="svg_154" display="none" y2="-11.92252" x2="-732.44767" y1="-14.34488" x1="-733.3705" stroke="#555"/>
												<circle id="svg_155" cy="-14.34488" cx="-733.3705" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#0FF" r="0" display="none"/>
												<line id="svg_156" display="none" y2="-11.92252" x2="-732.44767" y1="-9.35031" x1="-731.46778" stroke="#555"/>
												<circle id="svg_157" cy="-9.35031" cx="-731.46778" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#EEE" r="0" display="none"/>
												<line id="svg_158" display="none" y2="-4.40465" x2="-729.54762" y1="-7.1683" x1="-730.27255" stroke="#555"/>
												<circle id="svg_159" cy="-7.1683" cx="-730.27255" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#0FF" r="0" display="none"/>
												<line id="svg_160" display="none" y2="-4.40465" x2="-729.54762" y1="-1.81328" x1="-728.86789" stroke="#555"/>
												<circle id="svg_161" cy="-1.81328" cx="-728.86789" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#EEE" r="0" display="none"/>
												<line id="svg_162" display="none" y2="3.07889" x2="-727.45565" y1="0.54174" x1="-728.28797" stroke="#555"/>
												<circle id="svg_163" cy="0.54174" cx="-728.28797" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#0FF" r="0" display="none"/>
												<line id="svg_164" display="none" y2="3.07889" x2="-727.45565" y1="5.486" x1="-726.66598" stroke="#555"/>
												<circle id="svg_165" cy="5.486" cx="-726.66598" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#EEE" r="0" display="none"/>
												<line id="svg_166" display="none" y2="10.67861" x2="-725.40796" y1="8.42442" x1="-727.11642" stroke="#555"/>
												<circle id="svg_167" cy="8.42442" cx="-727.11642" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#0FF" r="0" display="none"/>
												<line id="svg_168" display="none" y2="10.67861" x2="-725.40796" y1="12.68621" x1="-723.88648" stroke="#555"/>
												<circle id="svg_169" cy="12.68621" cx="-723.88648" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#EEE" r="0" display="none"/>
												<line id="svg_170" display="none" y2="17.12724" x2="-720.96028" y1="14.61698" x1="-722.28295" stroke="#555"/>
												<circle id="svg_171" cy="14.61698" cx="-722.28295" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#0FF" r="0" display="none"/>
												<path id="svg_172" d="m-1371.7323,-820.51709l0,0" stroke-width="2" stroke="#0FF" fill="none" display="none"/>
												<circle id="svg_173" cy="21.52083" cx="-718.67224" xlink:title="Drag node to move it. Double-click node to change segment type" cursor="move" stroke-width="2" stroke="#00F" fill="#0FF" r="0" display="none"/>
												<path id="svg_174" d="m-719.3861,19.14693l0.71386,2.3739" stroke-width="2" stroke="#0FF" fill="none" display="none"/>
											</g>
											</g>
										</g>
									</svg>
								</div>
								<div class="football-board-bottom"></div>
							</div>
						</div>
					</div> 
				

		<?php
			}
		?>
			<!-- END LIVE TAB -->
			<!-- END LIVE TAB -->
			<!-- END LIVE TAB -->

			<!-- START STANDINGS TAB -->
			<!-- START STANDINGS TAB -->
			<!-- START STANDINGS TAB -->

			<?php
				if ($currentTab == 'STANDING') {
			?>
				<div class="showData">
					<div class="titleShowData">
						STANDING
					</div>

					<hr>

					<div class="btnFrame">
						<div class="btnDiv">
							<div class="btnGroup">
								<button type="button" class="btnStanding" id="btn-standing-all">
									<!---->
									<!----><span>All</span>
								</button>
								<button type="button" class="btnStanding" id="btn-standing-home">
									<!---->
									<!----><span>Home</span>
								</button>
								<button type="button" class="btnStanding" id="btn-standing-away">
									<!---->
									<!----><span>Away</span>
								</button>
							</div>
						</div>
					</div>

					<!-- SHOW STANDING -->
					<!-- SHOW STANDING -->
					<!-- SHOW STANDING -->

					<?php
					$infoLeagues = tep_fetch_object(tep_query("SELECT * FROM nano_football_leagues_list WHERE league_leagueId = '" . $infoRow->match_leagueId . "' "));

					// SHOW LEAGUE STANDING

					if ($infoLeagues->league_type == 'League') {

						$standing = getLeagueStandings($infoRow->match_leagueId);
						$list = $standing->data;

						// echo "<pre>".print_r($standing, true)."</pre>";

						$leagueInfo = $list->leagueInfo;

						if ($leagueInfo) {
							echo '<table class="tableShowData">
		                          <thead class="thShowData">
		                            <td class="col-show-standing" style="text-align: left; border-right: none;">#</td>
		                            <td class="col-show-standing" style="text-align: left; border-left: none;">Team</td>
		                            <td class="col-show-standing col-show-standing-p">P</td>
		                            <td class="col-show-standing col-show-standing-w">W</td>
		                            <td class="col-show-standing col-show-standing-d">D</td>
		                            <td class="col-show-standing col-show-standing-l">L</td>
		                            <td class="col-show-standing">Goals</td>
		                            <td class="col-show-standing">Last 5</td>
		                            <td class="col-show-standing">Points</td>
		                          </thead>';

							$teamInfo = $list->teamInfos;


							// SHOW TOTAL STANDING

							$totalStanding = $list->totalStandings;

							// unset($arrTotalStanding);

							foreach ($totalStanding as $arrTotalStanding) {
								// recentFirstResult

								if ($arrTotalStanding->recentFirstResult == 0) {
									$arrTotalStanding->recentFirstResult = 'Win';
									$recentResultClass1 = "standing-recent-win";
								}
								if ($arrTotalStanding->recentFirstResult == 1) {
									$arrTotalStanding->recentFirstResult = 'Draw';
									$recentResultClass1 = "standing-recent-draw";
								}
								if ($arrTotalStanding->recentFirstResult == 2) {
									$arrTotalStanding->recentFirstResult = 'Lose';
									$recentResultClass1 = "standing-recent-lose";
								}
								if ($arrTotalStanding->recentFirstResult == 3) {
									$arrTotalStanding->recentFirstResult = '';
									$recentResultClass1 = "";
								}

								// recentSecondResult
								if ($arrTotalStanding->recentSecondResult == 0) {
									$arrTotalStanding->recentSecondResult = 'Win';
									$recentResultClass2 = "standing-recent-win";
								}
								if ($arrTotalStanding->recentSecondResult == 1) {
									$arrTotalStanding->recentSecondResult = 'Draw';
									$recentResultClass2 = "standing-recent-draw";
								}
								if ($arrTotalStanding->recentSecondResult == 2) {
									$arrTotalStanding->recentSecondResult = 'Lose';
									$recentResultClass2 = "standing-recent-lose";
								}
								if ($arrTotalStanding->recentSecondResult == 3) {
									$arrTotalStanding->recentSecondResult = '';
									$recentResultClass2 = "";
								}

								// recentThirdResult
								if ($arrTotalStanding->recentThirdResult == 0) {
									$arrTotalStanding->recentThirdResult = 'Win';
									$recentResultClass3 = "standing-recent-win";
								}
								if ($arrTotalStanding->recentThirdResult == 1) {
									$arrTotalStanding->recentThirdResult = 'Draw';
									$recentResultClass3 = "standing-recent-draw";
								}
								if ($arrTotalStanding->recentThirdResult == 2) {
									$arrTotalStanding->recentThirdResult = 'Lose';
									$recentResultClass3 = "standing-recent-lose";
								}
								if ($arrTotalStanding->recentThirdResult == 3) {
									$arrTotalStanding->recentThirdResult = '';
									$recentResultClass3 = "";
								}

								// recentFourthResult
								if ($arrTotalStanding->recentFourthResult == 0) {
									$arrTotalStanding->recentFourthResult = 'Win';
									$recentResultClass4 = "standing-recent-win";
								}
								if ($arrTotalStanding->recentFourthResult == 1) {
									$arrTotalStanding->recentFourthResult = 'Draw';
									$recentResultClass4 = "standing-recent-draw";
								}
								if ($arrTotalStanding->recentFourthResult == 2) {
									$arrTotalStanding->recentFourthResult = 'Lose';
									$recentResultClass4 = "standing-recent-lose";
								}
								if ($arrTotalStanding->recentFourthResult == 3) {
									$arrTotalStanding->recentFourthResult = '';
									$recentResultClass4 = "";
								}

								// recentFifthResult
								if ($arrTotalStanding->recentFifthResult == 0) {
									$arrTotalStanding->recentFifthResult = 'Win';
									$recentResultClass5 = "standing-recent-win";
								}
								if ($arrTotalStanding->recentFifthResult == 1) {
									$arrTotalStanding->recentFifthResult = 'Draw';
									$recentResultClass5 = "standing-recent-draw";
								}
								if ($arrTotalStanding->recentFifthResult == 2) {
									$arrTotalStanding->recentFifthResult = 'Lose';
									$recentResultClass5 = "standing-recent-lose";
								}
								if ($arrTotalStanding->recentFifthResult == 3) {
									$arrTotalStanding->recentFifthResult = '';
									$recentResultClass5 = "";
								}

								// recentSixthResult
								if ($arrTotalStanding->recentSixthResult == 0) {
									$arrTotalStanding->recentSixthResult = 'Win';
									$recentResultClass6 = "standing-recent-win";
								}
								if ($arrTotalStanding->recentSixthResult == 1) {
									$arrTotalStanding->recentSixthResult = 'Draw';
									$recentResultClass6 = "standing-recent-draw";
								}
								if ($arrTotalStanding->recentSixthResult == 2) {
									$arrTotalStanding->recentSixthResult = 'Lose';
									$recentResultClass6 = "standing-recent-lose";
								}
								if ($arrTotalStanding->recentSixthResult == 3) {
									$arrTotalStanding->recentSixthResult = '';
									$recentResultClass6 = "";
								}

								// unset($arrTotalStanding);

								$infoTeam = tep_fetch_object(tep_query("SELECT * FROM nano_football_team_profile WHERE team_code = '" . $arrTotalStanding->teamId . "'"));

								echo '<tr class="row-show-standing-all">
		                            <td class="col-show-standing" style="text-align: left; border-right: none;">' . $arrTotalStanding->rank . '</td>
		                            <td class="col-show-standing" style="text-align: left; border-left: none;">' . $infoTeam->team_nameEn . '</td>
		                            <td class="col-show-standing">' . $arrTotalStanding->totalCount . '</td>
		                            <td class="col-show-standing col-show-standing-w">' . $arrTotalStanding->winCount . '</td>
		                            <td class="col-show-standing col-show-standing-d">' . $arrTotalStanding->drawCount . '</td>
		                            <td class="col-show-standing col-show-standing-l">' . $arrTotalStanding->loseCount . '</td>
		                            <td class="col-show-standing">' . $arrTotalStanding->getScore . '</td>
		                            <td class="col-show-standing">
		                            	<div class="' . $recentResultClass1 . ' div-show-standing-result">A</div>
		                            	<div class="' . $recentResultClass2 . ' div-show-standing-result">B</div>
		                            	<div class="' . $recentResultClass3 . ' div-show-standing-result">C</div>
		                            	<div class="' . $recentResultClass4 . ' div-show-standing-result">D</div>
		                            	<div class="' . $recentResultClass5 . ' div-show-standing-result">E</div>
		                            </td>
		                            <td class="col-show-standing">' . $arrTotalStanding->integral . '</td>
		                          </tr>';
							} // END TOTAL STANDING

							// SHOW HOME STANDING

							$homeStanding = $list->homeStandings;
							foreach ($homeStanding as $arrHomeStanding) {

								$qryRecentResults = tep_query("SELECT * FROM nano_schedule_match WHERE match_leagueId = '" . $infoRow->match_leagueId . "' AND match_state = 'Finished' AND (match_homeId = '" . $arrHomeStanding->teamId . "' OR match_awayId = '" . $arrHomeStanding->teamId . "') ORDER BY match_time DESC LIMIT 0,5 ");

								$n = 0;

								$recentResult = "";

								while ($infoRecentResults = tep_fetch_object($qryRecentResults)) {
									if ($infoRecentResults->match_homeId == $arrHomeStanding->teamId) {
										if ($infoRecentResults->match_homeScore > $infoRecentResults->match_awayScore) {
											$recentResult .= "Win;";
										} else if ($infoRecentResults->match_homeScore < $infoRecentResults->match_awayScore) {
											$recentResult .= "Lose;";
										} else if ($infoRecentResults->match_homeScore == $infoRecentResults->match_awayScore) {
											$recentResult .= "Draw;";
										}
									}

									if ($infoRecentResults->match_awayId == $arrHomeStanding->teamId) {
										if ($infoRecentResults->match_homeScore > $infoRecentResults->match_awayScore) {
											$recentResult .= "Lose;";
										} else if ($infoRecentResults->match_homeScore < $infoRecentResults->match_awayScore) {
											$recentResult .= "Win;";
										} else if ($infoRecentResults->match_homeScore == $infoRecentResults->match_awayScore) {
											$recentResult .= "Draw;";
										}
									}
								}

								$arrRecentResult = explode(";", $recentResult);

								if ($arrRecentResult[0] == 'Win') {
									$recentResultClass1 = "standing-recent-win";
								} else if ($arrRecentResult[0] == 'Lose') {
									$recentResultClass1 = "standing-recent-lose";
								} else if ($arrRecentResult[0] == 'Draw') {
									$recentResultClass1 = "standing-recent-draw";
								}

								if ($arrRecentResult[1] == 'Win') {
									$recentResultClass2 = "standing-recent-win";
								} else if ($arrRecentResult[1] == 'Lose') {
									$recentResultClass2 = "standing-recent-lose";
								} else if ($arrRecentResult[1] == 'Draw') {
									$recentResultClass2 = "standing-recent-draw";
								}

								if ($arrRecentResult[2] == 'Win') {
									$recentResultClass3 = "standing-recent-win";
								} else if ($arrRecentResult[2] == 'Lose') {
									$recentResultClass3 = "standing-recent-lose";
								} else if ($arrRecentResult[2] == 'Draw') {
									$recentResultClass3 = "standing-recent-draw";
								}

								if ($arrRecentResult[3] == 'Win') {
									$recentResultClass4 = "standing-recent-win";
								} else if ($arrRecentResult[3] == 'Lose') {
									$recentResultClass4 = "standing-recent-lose";
								} else if ($arrRecentResult[3] == 'Draw') {
									$recentResultClass4 = "standing-recent-draw";
								}

								if ($arrRecentResult[4] == 'Win') {
									$recentResultClass5 = "standing-recent-win";
								} else if ($arrRecentResult[4] == 'Lose') {
									$recentResultClass5 = "standing-recent-lose";
								} else if ($arrRecentResult[4] == 'Draw') {
									$recentResultClass5 = "standing-recent-draw";
								}

								$infoTeam = tep_fetch_object(tep_query("SELECT * FROM nano_football_team_profile WHERE team_code = '" . $arrHomeStanding->teamId . "'"));

								echo '<tr class="row-show-standing-home" style="display:none;">
		                            <td class="col-show-standing" style="text-align: left; border-right: none;">' . $arrHomeStanding->rank . '</td>
		                            <td class="col-show-standing" style="text-align: left; border-left: none;">' . $infoTeam->team_nameEn . '</td>
		                            <td class="col-show-standing ">' . $arrHomeStanding->totalCount . '</td>
		                            <td class="col-show-standing col-show-standing-w">' . $arrHomeStanding->winCount . '</td>
		                            <td class="col-show-standing col-show-standing-d">' . $arrHomeStanding->drawCount . '</td>
		                            <td class="col-show-standing col-show-standing-l">' . $arrHomeStanding->loseCount . '</td>
		                            <td class="col-show-standing">' . $arrHomeStanding->getScore . '</td>
		                            <td class="col-show-standing">
		                            	<div class="' . $recentResultClass1 . ' div-show-standing-result">A</div>
		                            	<div class="' . $recentResultClass2 . ' div-show-standing-result">B</div>
		                            	<div class="' . $recentResultClass3 . ' div-show-standing-result">C</div>
		                            	<div class="' . $recentResultClass4 . ' div-show-standing-result">D</div>
		                            	<div class="' . $recentResultClass5 . ' div-show-standing-result">E</div>
		                            </td>
		                            <td class="col-show-standing">' . $arrHomeStanding->integral . '</td>
		                          </tr>';
							} // END HOME STANDING

							// SHOW AWAY STANDING

							$awayStanding = $list->awayStandings;
							foreach ($awayStanding as $arrAwayStanding) {

								$qryRecentResults = tep_query("SELECT * FROM nano_schedule_match WHERE match_leagueId = '" . $infoRow->match_leagueId . "' AND match_state = 'Finished' AND (match_homeId = '" . $arrAwayStanding->teamId . "' OR match_awayId = '" . $arrAwayStanding->teamId . "') ORDER BY match_time DESC LIMIT 0,5 ");

								$n = 0;

								$recentResult = "";

								while ($infoRecentResults = tep_fetch_object($qryRecentResults)) {
									if ($infoRecentResults->match_homeId == $arrAwayStanding->teamId) {
										if ($infoRecentResults->match_homeScore > $infoRecentResults->match_awayScore) {
											$recentResult .= "Win;";
										} else if ($infoRecentResults->match_homeScore < $infoRecentResults->match_awayScore) {
											$recentResult .= "Lose;";
										} else if ($infoRecentResults->match_homeScore == $infoRecentResults->match_awayScore) {
											$recentResult .= "Draw;";
										}
									}

									if ($infoRecentResults->match_awayId == $arrAwayStanding->teamId) {
										if ($infoRecentResults->match_homeScore > $infoRecentResults->match_awayScore) {
											$recentResult .= "Lose;";
										} else if ($infoRecentResults->match_homeScore < $infoRecentResults->match_awayScore) {
											$recentResult .= "Win;";
										} else if ($infoRecentResults->match_homeScore == $infoRecentResults->match_awayScore) {
											$recentResult .= "Draw;";
										}
									}
								}

								$arrRecentResult = explode(";", $recentResult);

								if ($arrRecentResult[0] == 'Win') {
									$recentResultClass1 = "standing-recent-win";
								} else if ($arrRecentResult[0] == 'Lose') {
									$recentResultClass1 = "standing-recent-lose";
								} else if ($arrRecentResult[0] == 'Draw') {
									$recentResultClass1 = "standing-recent-draw";
								}

								if ($arrRecentResult[1] == 'Win') {
									$recentResultClass2 = "standing-recent-win";
								} else if ($arrRecentResult[1] == 'Lose') {
									$recentResultClass2 = "standing-recent-lose";
								} else if ($arrRecentResult[1] == 'Draw') {
									$recentResultClass2 = "standing-recent-draw";
								}

								if ($arrRecentResult[2] == 'Win') {
									$recentResultClass3 = "standing-recent-win";
								} else if ($arrRecentResult[2] == 'Lose') {
									$recentResultClass3 = "standing-recent-lose";
								} else if ($arrRecentResult[2] == 'Draw') {
									$recentResultClass3 = "standing-recent-draw";
								}

								if ($arrRecentResult[3] == 'Win') {
									$recentResultClass4 = "standing-recent-win";
								} else if ($arrRecentResult[3] == 'Lose') {
									$recentResultClass4 = "standing-recent-lose";
								} else if ($arrRecentResult[3] == 'Draw') {
									$recentResultClass4 = "standing-recent-draw";
								}

								if ($arrRecentResult[4] == 'Win') {
									$recentResultClass5 = "standing-recent-win";
								} else if ($arrRecentResult[4] == 'Lose') {
									$recentResultClass5 = "standing-recent-lose";
								} else if ($arrRecentResult[4] == 'Draw') {
									$recentResultClass5 = "standing-recent-draw";
								}

								$infoTeam = tep_fetch_object(tep_query("SELECT * FROM nano_football_team_profile WHERE team_code = '" . $arrAwayStanding->teamId . "'"));

								echo '<tr class="row-show-standing-away" style="display:none;">
		                            <td class="col-show-standing" style="text-align: left; border-right: none;">' . $arrAwayStanding->rank . '</td>
		                            <td class="col-show-standing" style="text-align: left; border-left: none;">' . $infoTeam->team_nameEn . '</td>
		                            <td class="col-show-standing">' . $arrAwayStanding->totalCount . '</td>
		                            <td class="col-show-standing col-show-standing-w">' . $arrAwayStanding->winCount . '</td>
		                            <td class="col-show-standing col-show-standing-d">' . $arrAwayStanding->drawCount . '</td>
		                            <td class="col-show-standing col-show-standing-l">' . $arrAwayStanding->loseCount . '</td>
		                            <td class="col-show-standing">' . $arrAwayStanding->getScore . '</td>
		                            <td class="col-show-standing">
		                            	<div class="' . $recentResultClass1 . ' div-show-standing-result">A</div>
		                            	<div class="' . $recentResultClass2 . ' div-show-standing-result">B</div>
		                            	<div class="' . $recentResultClass3 . ' div-show-standing-result">C</div>
		                            	<div class="' . $recentResultClass4 . ' div-show-standing-result">D</div>
		                            	<div class="' . $recentResultClass5 . ' div-show-standing-result">E</div>
		                            </td>
		                            <td class="col-show-standing">' . $arrAwayStanding->integral . '</td>
		                          </tr>';
							} // END AWAY STANDING

							echo "</table>";
						} else // NO DATA
						{
							echo '<div class="noData">No data.</div>';
						}
					} // END LEAGUE STANDING

					// SHOW CUP STANDING

					else if ($infoLeagues->league_type == 'Cup') {
						$standing = getCupStandings($infoRow->match_leagueId);
						$list = $standing->data;

						// echo "<pre>".print_r($standing,true)."</pre>";

						if ($list) {
							foreach ($list as $arrList) {
								$score = $arrList->roundScoreItems;
								$subId = $arrList->subId;

								if ($score) {
									foreach ($score as $arrScore) {
										$groupScore = $arrScore->groupScoreItems;

										if ($groupScore) {
											foreach ($groupScore as $arrGroupScore) {

												echo "<div>
													<span>" . $arrGroupScore->groupName . "</span>
												  </div>";

												echo '<table class="tableShowData">
							                          <thead class="thShowData">
							                            <td class="col-show-standing" style="text-align: left; border-right: none;">#</td>
							                            <td class="col-show-standing" style="text-align: left; border-left: none;">Team</td>
							                            <td class="col-show-standing">P</td>
							                            <td class="col-show-standing col-show-standing-w">W</td>
							                            <td class="col-show-standing col-show-standing-d">D</td>
							                            <td class="col-show-standing col-show-standing-l">L</td>
							                            <td class="col-show-standing">Goals</td>
							                            <td class="col-show-standing">Last 5</td>
							                            <td class="col-show-standing">Points</td>
							                          </thead>';

												$scoreItems = $arrGroupScore->scoreItems;

												if ($scoreItems) {

													foreach ($scoreItems as $arrScoreItems) {
														$infoLeague = tep_fetch_object(tep_query("SELECT * FROM nano_football_leagues_list WHERE league_leagueId = '" . $arrList->leagueId . "' "));

														$qryRecentResults = tep_query("SELECT * FROM nano_schedule_match WHERE match_leagueId = '" . $infoRow->match_leagueId . "' AND match_state = 'Finished' AND (match_homeId = '" . $arrScoreItems->teamId . "' OR match_awayId = '" . $arrScoreItems->teamId . "') ORDER BY match_time DESC LIMIT 0,5 ");

														$recentResult = "";

														while ($infoRecentResults = tep_fetch_object($qryRecentResults)) {
															if ($infoRecentResults->match_homeId == $arrScoreItems->teamId) {
																if ($infoRecentResults->match_homeScore > $infoRecentResults->match_awayScore) {
																	$recentResult .= "Win;";
																} else if ($infoRecentResults->match_homeScore < $infoRecentResults->match_awayScore) {
																	$recentResult .= "Lose;";
																} else if ($infoRecentResults->match_homeScore == $infoRecentResults->match_awayScore) {
																	$recentResult .= "Draw;";
																}
															}

															if ($infoRecentResults->match_awayId == $arrScoreItems->teamId) {
																if ($infoRecentResults->match_homeScore > $infoRecentResults->match_awayScore) {
																	$recentResult .= "Lose;";
																} else if ($infoRecentResults->match_homeScore < $infoRecentResults->match_awayScore) {
																	$recentResult .= "Win;";
																} else if ($infoRecentResults->match_homeScore == $infoRecentResults->match_awayScore) {
																	$recentResult .= "Draw;";
																}
															}
														}

														$arrRecentResult = explode(";", $recentResult);

														if ($arrRecentResult[0] == 'Win') {
															$recentResultClass1 = "standing-recent-win";
														} else if ($arrRecentResult[0] == 'Lose') {
															$recentResultClass1 = "standing-recent-lose";
														} else if ($arrRecentResult[0] == 'Draw') {
															$recentResultClass1 = "standing-recent-draw";
														}

														if ($arrRecentResult[1] == 'Win') {
															$recentResultClass2 = "standing-recent-win";
														} else if ($arrRecentResult[1] == 'Lose') {
															$recentResultClass2 = "standing-recent-lose";
														} else if ($arrRecentResult[1] == 'Draw') {
															$recentResultClass2 = "standing-recent-draw";
														}

														if ($arrRecentResult[2] == 'Win') {
															$recentResultClass3 = "standing-recent-win";
														} else if ($arrRecentResult[2] == 'Lose') {
															$recentResultClass3 = "standing-recent-lose";
														} else if ($arrRecentResult[2] == 'Draw') {
															$recentResultClass3 = "standing-recent-draw";
														}

														if ($arrRecentResult[3] == 'Win') {
															$recentResultClass4 = "standing-recent-win";
														} else if ($arrRecentResult[3] == 'Lose') {
															$recentResultClass4 = "standing-recent-lose";
														} else if ($arrRecentResult[3] == 'Draw') {
															$recentResultClass4 = "standing-recent-draw";
														}

														if ($arrRecentResult[4] == 'Win') {
															$recentResultClass5 = "standing-recent-win";
														} else if ($arrRecentResult[4] == 'Lose') {
															$recentResultClass5 = "standing-recent-lose";
														} else if ($arrRecentResult[4] == 'Draw') {
															$recentResultClass5 = "standing-recent-draw";
														}

														$infoTeam = tep_fetch_object(tep_query("SELECT * FROM nano_football_team_profile WHERE team_code = '" . $arrScoreItems->teamId . "' "));

														echo '<tr class="">
								                            <td class="col-show-standing" style="text-align: left; border-right: none;">' . $arrScoreItems->rank . '</td>
								                            <td class="col-show-standing" style="text-align: left; border-left: none;">' . $infoTeam->team_nameEn . '</td>
								                            <td class="col-show-standing">' . $arrScoreItems->totalCount . '</td>
								                            <td class="col-show-standing col-show-standing-w">' . $arrScoreItems->winCount . '</td>
								                            <td class="col-show-standing col-show-standing-d">' . $arrScoreItems->drawCount . '</td>
								                            <td class="col-show-standing col-show-standing-l">' . $arrScoreItems->loseCount . '</td>
								                            <td class="col-show-standing">' . $arrScoreItems->getScore . '</td>
								                            <td class="col-show-standing">
								                            	<div class="' . $recentResultClass1 . ' div-show-standing-result">A</div>
								                            	<div class="' . $recentResultClass2 . ' div-show-standing-result">B</div>
								                            	<div class="' . $recentResultClass3 . ' div-show-standing-result">C</div>
								                            	<div class="' . $recentResultClass4 . ' div-show-standing-result">D</div>
								                            	<div class="' . $recentResultClass5 . ' div-show-standing-result">E</div>
								                            </td>
								                            <td class="col-show-standing">' . $arrScoreItems->integral . '</td>
								                          </tr>';
													}
												}

												echo "</table>";
											}
										}
									}
								} else {
									echo '<div class="noData">No data.</div>';
								}
							}
						} else {
							echo '<div class="noData">No data.</div>';
						}
					} else {
						echo '<div class="noData">No data.</div>';
					}

					?>

				</div>
				
				
				<style>
					.football-board {
						background-color: white;
						margin-top: 30px;
						margin-bottom: 30px;
						padding: 0;
						width: 1170px;
						height: 810px;
						display: block;
						justify-content: center;
						align-items: center;
					}

					.football-board-top {
						background-image: linear-gradient(100deg, #9F6C0A, #E0B04F);
						margin: 0;
						color: white;
						font-size: 16px;
						padding-left: 10px;
						width: 100%;
						height: 35px;
						display: flex;
						align-items: center;
					}

					.football-board-center {
						/* background-color: #309B50; */
						margin-left: 10px;
						margin-top: 10px;
						margin-bottom: 10px;
						width: 98.4%;
						height: 720px;
						border-radius: 5px;
						display: block;
						justify-content: center;
						align-items: center;
					}

					.football-board-bottom {
						background-image: linear-gradient(100deg, #9F6C0A, #E0B04F);
						margin-left: 10px;
						margin-right: 10px;
						width: 98.4%;
						height: 35px;
						border-radius: 5px 5px 0px 0px;
					}
				</style>

				<div class="showData football-board">
					
							<div class="football-board-top">Lineups</div>
							<div class="football-board-center">
								<svg width="1150" height="720" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="border-radius: 10px;">
									<title>PitchB</title>
									
									<g>
										<title>Layer 1</title>
										<rect id="svg_1" fill="green" height="720" width="1150"/>
										<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="576.5" cy="437" rx="9" ry="9" id="svg_20"/>
										<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="663.5" cy="360" rx="9" ry="9" id="svg_36"/>
										<path id="svg_2" fill="green" stroke-width="2" stroke="white" d="m575.91102,19.91777l-525,0l0,680l1050,0l0,-680l-525,0l0,680l0,-680z"/>
										<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="576.5" cy="355" rx="9" ry="9" id="svg_8"/>
										<circle id="svg_3" fill-opacity="0" stroke-width="2" stroke="white" r="91.5" cy="353.3557" cx="576.3557" fill="black"/>
										<circle id="svg_5" fill="white" stroke="white" r="2" cy="360" cx="160"/>
										<circle id="svg_6" fill="white" stroke="white" r="2" cy="360" cx="990"/>
										<path id="svg_9" fill-opacity="0" stroke-width="2" stroke="white" d="m50,269.39999l55,0l0,182.20002l-55,0l0,-182.20002z"/>
										<path id="svg_10" fill-opacity="0" stroke-width="2" stroke="white" d="m1100,269.39999l-55,0l0,182.20002l55,0l0,-182.20002z"/>
										<path fill="black" id="svg_11" fill-opacity="0" stroke-width="2" stroke="white" d="m50.66931,182.39977l166,0l0,340.20045l-166,0l0,-340.20045z"/>
										<path fill="black" id="svg_12" fill-opacity="0" stroke-width="2" stroke="white" d="m1102,188.39977l-165,0l0,343.20045l165,0l0,-343.20045z"/>
										<path id="svg_13" fill="green" stroke-width="2" stroke="white" d="m218,286.875a91.5,91.5 0 0 1 0,146.25l0,-146.25z"/>
										<path id="svg_14" fill="green" stroke-width="2" stroke="white" d="m935,286.875a91.5,91.5 0 0 0 0,146.25l0,-146.25z"/>
										<path id="svg_15" fill-opacity="0" stroke-width="2" stroke="white" d="m50,30a10,10 0 0 0 10,-10l-10,0l0,10z"/>
										<path id="svg_16" fill-opacity="0" stroke-width="2" stroke="white" d="m60,700a10,10 0 0 0 -10,-10l0,10l10,0z"/>
										<path id="svg_17" fill-opacity="0" stroke-width="2" stroke="white" d="m1100,690a10,10 0 0 0 -10,10l10,0l0,-10z"/>
										<path id="svg_18" fill-opacity="0" stroke-width="2" stroke="white" d="m1090,20a10,10 0 0 0 10,10l0,-10l-10,0z"/>
										<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="574.5" cy="99" rx="9" ry="9" id="svg_19"/>
										<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="444.5" cy="541" rx="9" ry="9" id="svg_21"/>
										<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="443.5" cy="177" rx="9" ry="9" id="svg_22"/>
										<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="362.5" cy="358" rx="9" ry="9" id="svg_23"/>
										<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="215.5" cy="475" rx="9" ry="9" id="svg_24"/>
										<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="220.5" cy="600" rx="9" ry="9" id="svg_25"/>
										<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="216.5" cy="106" rx="9" ry="9" id="svg_26"/>
										<ellipse fill="#ffff00" stroke="#ffff00" stroke-width="5" cx="53.5" cy="364" rx="9" ry="9" id="svg_27"/>
										<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="216" cy="237" id="svg_7" rx="9" ry="9"/>
										<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="575.5" cy="441" rx="9" ry="9" id="svg_35"/>
										<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="672.5" cy="98" rx="9" ry="9" id="svg_37"/>
										<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="663.5" cy="355" rx="9" ry="9" id="svg_38"/>
										<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="660.5" cy="595" rx="9" ry="9" id="svg_39"/>
										<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="716.5" cy="175" rx="9" ry="9" id="svg_40"/>
										<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="787.5" cy="357" rx="9" ry="9" id="svg_41"/>
										<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="731.5" cy="525" rx="9" ry="9" id="svg_42"/>
										<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="940.5" cy="601" rx="9" ry="9" id="svg_43"/>
										<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="937.5" cy="238" rx="9" ry="9" id="svg_44"/>
										<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="936.5" cy="488" rx="9" ry="9" id="svg_45"/>
										<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="935.5" cy="101" rx="9" ry="9" id="svg_46"/>
										<ellipse fill="#7f00ff" stroke="#7f00ff" stroke-width="5" cx="1100.5" cy="354" rx="9" ry="9" id="svg_47"/>
										<text fill="#ff00ff" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="572" y="520" id="svg_48" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">At Kickoff</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="217" y="91" id="svg_49" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">Left D</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="215" y="214" id="svg_50" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">Left Center D</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="213" y="451" id="svg_51" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">Right Center D</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="219" y="575" id="svg_52" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">Right D</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="434.92307" y="345.77805" id="svg_53" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" transform="matrix(0.611765,0,0,0.82233,95.9294,49.164) ">Central Defensive Mid</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="442" y="151" id="svg_54" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">Left Mid</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="444" y="517" id="svg_55" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">Right Mid</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="572" y="73" id="svg_56" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">Left Forward</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="643.19192" y="349.83333" id="svg_57" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" transform="matrix(0.596386,0,0,0.705882,190.91,89.7059) ">Center Forward</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="529" y="413" id="svg_58" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">Right Forward</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="686" y="131" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" id="svg_59">Right Forward</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="659" y="575" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" id="svg_60">Left Forward</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="643.19192" y="349.83333" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" transform="matrix(0.596386,0,0,0.705882,282.91,142.706) " id="svg_61">Center Forward</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="737" y="501" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" id="svg_62">Left Mid</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="1129.63425" y="351.85833" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" transform="matrix(0.611765,0,0,0.82233,95.9294,49.164) " id="svg_63">Central Defensive Mid</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="716" y="221" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" id="svg_64">Right Mid</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="947" y="636" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" id="svg_65">Left D</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="939" y="535" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" id="svg_66">Left Center D</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="938" y="218" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" id="svg_67">Right Center D</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="943" y="80" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" id="svg_69">Right D</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="54" y="401" id="svg_70" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">Goalie</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="1101" y="389" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" id="svg_71">Goalie</text>
										<image stroke="null" xlink:href="data:image/png;base64,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" id="svg_76" height="41" width="41" y="152" x="419"/>
										<image id="svg_77" stroke="null" xlink:href="data:image/png;base64,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" height="41" width="41" y="336.5" x="553.5"/>
										<image id="svg_78" stroke="null" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEMAAABDCAYAAADHyrhzAAAABmJLR0QA/wD/AP+gvaeTAAAJOUlEQVR4nO2be1BU1x3Hv797775gWVYE5BWDPFTwAT7jM0qr0YA2tQZTTCRqecyYmHYykxlTmymZ6aRt2qbTSW0GMOZhQgl2JkkjYpM0NElrdXx2tERIq2KsgA9E5LHL3r2nf1jW3WVf9wWZjp+/9p57zu/3vb895+y5v3MWuIsHGgunDcUNfC9ssZxBtLsZb5UkEgy82OPkDX2ua+6bTzUVOsdCl+7BqK44ZsCtq/dxxAogsXwQTQGQBcAUpIkbQDtAbYB0mhj/KUU5P/venodu6a1Vl2A0FDcYewVrIQNKATwAIFqlSRHAIcbwlsHs3Lfl9XU96lWORNNg7Ck+kODm8QMQKgGM19K2Fw4ADZCkn5W/s+YLLQ1rEozdxQfjmCA9B0IFGKK0sBkBEgHvShL7YcU7RW1aGFQVDAZGuzc2bQLDLwAkaiFIAS4Qe2XIFbXziX0FfWoMKQ5Gbcn7EwDDXgAr1QjQCgK+BMMjZfWFJ5Xa4JQ0enXj/gLAcBJfk0AAAAOyGeFQTUnTNqU2ZPeM2pKmxwC2B4BBqVPdIdr1n8lHnqqqqpJkNZNTuaak8WkC/VJuu7GAgHqb2Pf4hn0bhmS0iYyakqZtBLZLmbSxgQHv2cW+hzfs2+COpH5Ec0ZtSVMJgb2sTtroQ8C3b/LWiHWH7RnV3228jyP6DIBRlbKxhLEny+uLwvbqkMF4bfO7dtFhPAGiSdopGxOcIGlxed2a46EqhRwmotNU+38QCAAwQeLqq9d+EHJ1HDQYu0saVwN4WHNZYwUhi4vmd4auEoCXihssMYL1DIAMXYSNHUOQpPxgL3gBe4ZNsG7HKAWCN3AQTPxouAIAI+O4F4LdHNEzXtvcbBadg+cAJOulyJ5qxdRvpuGeWQmwjrcABAz0ONHR0o3WT75CV6su6YphmMSxvMq3i0773xD8C1xOx1bSKRBEhPx1GZj5rQxwvO/3EGU3IXNRMjIXJeNff72Mw2+chcsh6iKDk/AsgI3+N0YMEwKr1EUBEZaUT0P+uswRgfAna0kKHtw5F6ZovV5/aH11yQfx/qU+wajZ2JgPYKYe7meunYSspSkR1x+fbsOSiml6SAEAI8e4R/wLfYJBjB7Tw7M9JRr56+TPxxNnJ2LSgiQdFAHAyGf1Hyar9XA7vTAdnKAodYK8hzL0eUcmzH+j9GOfPK1H4Sub/pQIIFdrn4KRR8Yi5fPxuDQrEjJiNVTkgXMOue73KRj+wIvicujwHSRmx4I3KOsVw6RM0yfRTpy03Pvao5IYTdfDYdy9Ng1sxGigJAB+z3znKyNM1cOfOUb9z6MlVrfsgc8ze/ffbD28Ead+5GlhIwjJu4qbrcMX3sEYsQjRAuctl2objt6I05hyIZNhwDMheQdDl4HZfUn9fnFPR78GSoLgZp7n9g6G2s3hgHS19kByM1U2Ov7ZrZGakUgEzwzvHQx1ioPgGhTRfqxLcfv+bgc6z97QUJEvDOTJnHsHQ9U+ZSjOHLgAxpTFuuXgRUiirL0gWRh48oxj759W3Q6DXDvXi9ZPLslu191+Cy0ftuugyAs3HyAYjHXq6fPo79tkJW36ux1ofvkfquebMEhkNl4dvvAeJpqccQiG6HTjo1+dwMUTV8LWvXGxDwdfOIbergE9JQGMtW95vcAxfCncKUcr6byD6hoU8edfn8KkBUnIWTkREybbfe73XO5H218u4YsPL+rdI25DXKv35Z20H49T0G+e8uH84U6cP9wJk9UAa7wZgolH31UH+rsd4RtrinTK+8oTDN4kfioNGkQEyIvqhbPPBWef+hWqUjiJmr2vfQZGbUnjEYDm6ynAEmtCTKIF1ngzDGYBhigBHBGGBkWIQ270X3eg/7oDvVcGdFr5eBgyCXxc6d5VnuWtby8g2g8GbYNBQOqMeGQuTEJSbhyi48yRKR1w4UrbTZw/0okLR7sgOiM6VSCHZu9AAH7BILA3Geh5aJTkscZbsGzbDCRm28NX9sMYZUBafjzS8uMxa30mPq8+o+lKlBH2+pf5pKDK6oraAXyuhbPY5Gis+fF8RYHwxxpvwaodczFxtmYHCvtcLsv7/oUj8nFMg9M50ePNWPnMbFjswU5Ey4fjCQXbZyItT32mgYBXAx2THBGMy1OO/gFAq395pAgmHg88MwcxCRalJoLCCRwKtufBnqrqBdvlFt0vBbTvX1BVVSUR6KdKPS3cnKNWbEgEE49vfD8fBouyFQAD21O5b+3FQPcCpq0vTTmyFwyH5TqaUpCGrCWR75opJTY5GgtL5adsGdDLeP75YPcDBqOqqkoCJz2J2393iIiYBAvmbZwsW6BSMpekIH3eBJmt6NnKt1Z3BLsbdEOjvG7NcQL9JjIfwKKtuTCYR23xCuD2kLTYIsycM/zNLt6qDlUl5O6OOyZhB4C/h/OTvTQVKdP1+kdFcMw2I+ZsiCipf4M49mi486Ahg1FZM9cFgX8UQNAkpMEiYHZxViSCdCHr/hQkZIbcfpSIcZv+t4YKSdh9v/K9q85LjBUCCJiinrU+E1EarifkQkRYuDkHFCT/wIg9XVa/ujESWxFtglbWFx2h2+cZfF4x7alW5KyYGIkJXRmfbkP2stQR5UTsJxV1RZHNe5DxF4uy+tWNjGPfAcGTflpQOjXsKZzRYk5xFoxRdyZwYvh5WV3Rc3JsyNoer3i7aD+TpJUAutPy4pGcGyenua6YbUZML0oHADeIKsvqC3fItSH7rEBF/ZpDkuielbU0RflmiE6kz5sgGoxCYXndgzVK2ivu4we2HzBNLMo5OLkgbfnXYah0tHR3Xjh5fdnSx3MUJ7ZVP8WpP57blDoz7nfj0qzW8LW1p7/b4f7q5JXq6asynlBrS5OvtLmqWUhYmL4rLS9+izXeMip/1xoaENnl09ebu/59rWRxaV74/YcI0LR/H6s+ZjDeM+7FpClxW+PujVF/ZCcAfdcGXZ0tN5rcg+7KaUWTNN340m2wn3ivbYUt0fqjuIkx821JFlXJjcEep3j9Qu/Znsv9v807kVlLVaTLpsaozHxfftyRy0xSpdkmLI5JiMqw2I2xgpEP+EvG3IwN9Dj6+645vnL0uo47+x1v5q7I+Gg0dI7ZzwBjLEUUxWyO42a4nG4SjNwFnudbALQTkS6Hxu9yF2X8FygRuFW7xsvhAAAAAElFTkSuQmCC" height="41" width="41" y="420.5" x="553.5"/>
										<image id="svg_79" stroke="null" xlink:href="data:image/png;base64,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" height="41" width="41" y="528.5" x="423.5"/>
										<image id="svg_80" stroke="null" xlink:href="data:image/png;base64,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" height="41" width="41" y="579.5" x="199.5"/>
										<image id="svg_81" stroke="null" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEMAAABDCAYAAADHyrhzAAAABmJLR0QA/wD/AP+gvaeTAAAJOUlEQVR4nO2be1BU1x3Hv797775gWVYE5BWDPFTwAT7jM0qr0YA2tQZTTCRqecyYmHYykxlTmymZ6aRt2qbTSW0GMOZhQgl2JkkjYpM0NElrdXx2tERIq2KsgA9E5LHL3r2nf1jW3WVf9wWZjp+/9p57zu/3vb895+y5v3MWuIsHGgunDcUNfC9ssZxBtLsZb5UkEgy82OPkDX2ua+6bTzUVOsdCl+7BqK44ZsCtq/dxxAogsXwQTQGQBcAUpIkbQDtAbYB0mhj/KUU5P/venodu6a1Vl2A0FDcYewVrIQNKATwAIFqlSRHAIcbwlsHs3Lfl9XU96lWORNNg7Ck+kODm8QMQKgGM19K2Fw4ADZCkn5W/s+YLLQ1rEozdxQfjmCA9B0IFGKK0sBkBEgHvShL7YcU7RW1aGFQVDAZGuzc2bQLDLwAkaiFIAS4Qe2XIFbXziX0FfWoMKQ5Gbcn7EwDDXgAr1QjQCgK+BMMjZfWFJ5Xa4JQ0enXj/gLAcBJfk0AAAAOyGeFQTUnTNqU2ZPeM2pKmxwC2B4BBqVPdIdr1n8lHnqqqqpJkNZNTuaak8WkC/VJuu7GAgHqb2Pf4hn0bhmS0iYyakqZtBLZLmbSxgQHv2cW+hzfs2+COpH5Ec0ZtSVMJgb2sTtroQ8C3b/LWiHWH7RnV3228jyP6DIBRlbKxhLEny+uLwvbqkMF4bfO7dtFhPAGiSdopGxOcIGlxed2a46EqhRwmotNU+38QCAAwQeLqq9d+EHJ1HDQYu0saVwN4WHNZYwUhi4vmd4auEoCXihssMYL1DIAMXYSNHUOQpPxgL3gBe4ZNsG7HKAWCN3AQTPxouAIAI+O4F4LdHNEzXtvcbBadg+cAJOulyJ5qxdRvpuGeWQmwjrcABAz0ONHR0o3WT75CV6su6YphmMSxvMq3i0773xD8C1xOx1bSKRBEhPx1GZj5rQxwvO/3EGU3IXNRMjIXJeNff72Mw2+chcsh6iKDk/AsgI3+N0YMEwKr1EUBEZaUT0P+uswRgfAna0kKHtw5F6ZovV5/aH11yQfx/qU+wajZ2JgPYKYe7meunYSspSkR1x+fbsOSiml6SAEAI8e4R/wLfYJBjB7Tw7M9JRr56+TPxxNnJ2LSgiQdFAHAyGf1Hyar9XA7vTAdnKAodYK8hzL0eUcmzH+j9GOfPK1H4Sub/pQIIFdrn4KRR8Yi5fPxuDQrEjJiNVTkgXMOue73KRj+wIvicujwHSRmx4I3KOsVw6RM0yfRTpy03Pvao5IYTdfDYdy9Ng1sxGigJAB+z3znKyNM1cOfOUb9z6MlVrfsgc8ze/ffbD28Ead+5GlhIwjJu4qbrcMX3sEYsQjRAuctl2objt6I05hyIZNhwDMheQdDl4HZfUn9fnFPR78GSoLgZp7n9g6G2s3hgHS19kByM1U2Ov7ZrZGakUgEzwzvHQx1ioPgGhTRfqxLcfv+bgc6z97QUJEvDOTJnHsHQ9U+ZSjOHLgAxpTFuuXgRUiirL0gWRh48oxj759W3Q6DXDvXi9ZPLslu191+Cy0ftuugyAs3HyAYjHXq6fPo79tkJW36ux1ofvkfquebMEhkNl4dvvAeJpqccQiG6HTjo1+dwMUTV8LWvXGxDwdfOIbergE9JQGMtW95vcAxfCncKUcr6byD6hoU8edfn8KkBUnIWTkREybbfe73XO5H218u4YsPL+rdI25DXKv35Z20H49T0G+e8uH84U6cP9wJk9UAa7wZgolH31UH+rsd4RtrinTK+8oTDN4kfioNGkQEyIvqhbPPBWef+hWqUjiJmr2vfQZGbUnjEYDm6ynAEmtCTKIF1ngzDGYBhigBHBGGBkWIQ270X3eg/7oDvVcGdFr5eBgyCXxc6d5VnuWtby8g2g8GbYNBQOqMeGQuTEJSbhyi48yRKR1w4UrbTZw/0okLR7sgOiM6VSCHZu9AAH7BILA3Geh5aJTkscZbsGzbDCRm28NX9sMYZUBafjzS8uMxa30mPq8+o+lKlBH2+pf5pKDK6oraAXyuhbPY5Gis+fF8RYHwxxpvwaodczFxtmYHCvtcLsv7/oUj8nFMg9M50ePNWPnMbFjswU5Ey4fjCQXbZyItT32mgYBXAx2THBGMy1OO/gFAq395pAgmHg88MwcxCRalJoLCCRwKtufBnqrqBdvlFt0vBbTvX1BVVSUR6KdKPS3cnKNWbEgEE49vfD8fBouyFQAD21O5b+3FQPcCpq0vTTmyFwyH5TqaUpCGrCWR75opJTY5GgtL5adsGdDLeP75YPcDBqOqqkoCJz2J2393iIiYBAvmbZwsW6BSMpekIH3eBJmt6NnKt1Z3BLsbdEOjvG7NcQL9JjIfwKKtuTCYR23xCuD2kLTYIsycM/zNLt6qDlUl5O6OOyZhB4C/h/OTvTQVKdP1+kdFcMw2I+ZsiCipf4M49mi486Ahg1FZM9cFgX8UQNAkpMEiYHZxViSCdCHr/hQkZIbcfpSIcZv+t4YKSdh9v/K9q85LjBUCCJiinrU+E1EarifkQkRYuDkHFCT/wIg9XVa/ujESWxFtglbWFx2h2+cZfF4x7alW5KyYGIkJXRmfbkP2stQR5UTsJxV1RZHNe5DxF4uy+tWNjGPfAcGTflpQOjXsKZzRYk5xFoxRdyZwYvh5WV3Rc3JsyNoer3i7aD+TpJUAutPy4pGcGyenua6YbUZML0oHADeIKsvqC3fItSH7rEBF/ZpDkuielbU0RflmiE6kz5sgGoxCYXndgzVK2ivu4we2HzBNLMo5OLkgbfnXYah0tHR3Xjh5fdnSx3MUJ7ZVP8WpP57blDoz7nfj0qzW8LW1p7/b4f7q5JXq6asynlBrS5OvtLmqWUhYmL4rLS9+izXeMip/1xoaENnl09ebu/59rWRxaV74/YcI0LR/H6s+ZjDeM+7FpClxW+PujVF/ZCcAfdcGXZ0tN5rcg+7KaUWTNN340m2wn3ivbYUt0fqjuIkx821JFlXJjcEep3j9Qu/Znsv9v807kVlLVaTLpsaozHxfftyRy0xSpdkmLI5JiMqw2I2xgpEP+EvG3IwN9Dj6+645vnL0uo47+x1v5q7I+Gg0dI7ZzwBjLEUUxWyO42a4nG4SjNwFnudbALQTkS6Hxu9yF2X8FygRuFW7xsvhAAAAAElFTkSuQmCC" height="41" width="41" y="339.5" x="343.5"/>
										<image id="svg_82" stroke="null" xlink:href="data:image/png;base64,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" height="41" width="41" y="456.5" x="197.5"/>
										<image id="svg_83" stroke="null" xlink:href="data:image/png;base64,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" height="41" width="41" y="339.5" x="37.5"/>
										<image stroke="null" id="svg_84" xlink:href="data:image/png;base64,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" height="41" width="41" y="215.83069" x="197.16931"/>
										<image id="svg_85" stroke="null" xlink:href="data:image/png;base64,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" height="41" width="41" y="89.5" x="191.5"/>
										<image id="svg_86" stroke="null" xlink:href="data:image/png;base64,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" height="41" width="41" y="79.5" x="551.5"/>
										<image stroke="null" xlink:href="data:image/png;base64,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" id="svg_87" height="47" width="37" y="336" x="771"/>
										<image id="svg_88" stroke="null" xlink:href="data:image/png;base64,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" height="47" width="37" y="328.5" x="1083.5"/>
										<image id="svg_89" stroke="null" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEMAAABDCAYAAADHyrhzAAAABmJLR0QA/wD/AP+gvaeTAAAI8klEQVR4nO2beWwU1x3Hv29m9rC9vvC5axufYCDgmCNEqUNkGxsTItGUUtMmQAoxWE1J06L8AUVIbkVLm1aJ2gqlDsbkcCvqILWQQJNgYghXSXFDMThAbMf3+gDbrM89Zl7/iZdd7+HZnZldKvH5a2fmvd/vO9998+bNmzfAQ+yQoGStrWWTI0yRVo6JUoHXCYTleIph8ObRcN56r3nNT8zBkKW4GUuvVKqMQ9zjhAgFICSXUmQDyAKg8VCFJ0A7BW4DtJFQctYcQj678+SLI0prVcSMR2pr1UOzTGsAuhkgqwCESQxpA3CRUlKj4Zj32wq2DMsg0wVZzUg8WR3HqvmfUpByADFyxnZgkoLWguI3xuJtX8oZWBYzkj+qmkVZupcSsh1AqBwxRSAQ4O+A8PPuou235QgozQxKSVJd9SZK8DuAxsshyA+sAHnTyk7uGSj48aiUQH6bEV93MIEDeQ9AsRQBMvIVKDb0FJd94W8Axp9KSXWHCjiQL/DgGAEAc0Bw0VBX9ZK/AVhfK+jrDm4EcBRApL9JFYQD8Ez45m/HjWQs+QhnzlBfKvt0mSTVHdpJQX/va70gcSR6MOKFG6WlFrEVRJ/UN83vgF+ygsc/egYj1qO0lBdTWFSfYTh98AcA/iRJVnB41hBjEq17xpaR/Gn144IgfAZALUlWUKE7eoq2zdiqvZqRVn84ysLz/wGQLpuu4GCmDM0zFm5r8FbI62Vi5oWD+P83AgA0hCdHDB9Ueh0dezRDX1e1moCul19XkCDIIiHMHu9F3JB8sTaEjpuuUyBDGWVBw0IpzfX0gOe2ZQjjppcDZYSGYRHCcoFIBQBqQsivPR10aRlp9Ye1Fp5vBaBXStHcsChsTp6PVbGzYdDqQAD0m8dxfsiImu6buDzcq1RqAKAMZR/tKt7SOP2Ay19i4fmtUMgIhhDsTF+Ml9MeBUecG2W8JhTrEjOxLjETR43N2HPrIkZ5qxIyiABhN4DnXPS5KVyuhAKGELw+fwV+lr7YxYjprNdn4f2laxDJeZoZlAih3zXUV8a6aHTcSPrkrVwAOUrk35Gag+/p54gunxMeizcWrFBCCgCowTMbpu90MoMy7EYlMmeFRWFn+hKf65XEpWJtglL9OHE512ntla5WIu2PZi+CivFr6gSvpOUq9Yi8PKnuHad5WrvChI/fjAewQO6MWobFdxIz/a4/TxeN3Ig4GRXZYQRie8ppx9QPjlHnQ4F5iseiEqBhfJ5DcmLFLINMapwhFPmO23YzKMFCJRIu0El/Y/BIuFJvHZzP2eFCpvOUyBar1soQI0QGJe5wPmfHXk38fc8HWCL9yuNkiOEBfVz9Ad3UhqMZLoMQObhrmZQc444MMTxAOEFjvwYdzQhXItvNsSHJMVrG78mgxD2C7f55O5oh9eWwWz4f7oWNCpJinB/skUmNKywnREz9djTDp3cMYhmxWfHP/na/6/eax3Fp2CijImcYwtlnzh3NkPSe0ht/7miEQP3zurKjEVZBWsvyhk2Afd2HoxmKLQa5ahpATfdNn+tdH7mL6s4mBRTdh+HdmEEBRWdUftn8uU+TNr3mcZQ3fiq5v5kBQa0mA1MbjMMPWdY4eGKCt+GF/36Cjwdm7j+aRgexruEE2iZMSkoCgPa2gi32+/b9mS6KW0q/QR2xWbH1Wh3WJmRgS/ICLI9KcDrePDaMmp5bONzZpHSLmOKW48Z9M4hw1c8VCj5zvK8Vx/taEaXSIEWrQyirQvuECb3m8YDkt0PIVcdNuxlmLXtWPUltcDMvqhTDVjOGrUFZ5ThFveOG04Whr6u6TIDlSmaPU4cgLSQCSVoddJwKOlYFlhCYbBZMCjx6JsfQNTmKjgmTMgOf+1h4Xj2rr2Tz2NQOp1bAgH5IQWQ1gwDIj0nGs4mZyIvWQ68RN9A12Sz493Afjve34kR/GyZ4m5yyAJB6RyOmtNrRn65KJRRfT9/vL8laHQ4szMeyyISZC3uhe3IUrzSdxaUh+e7+FGSjsejFvzjuc+oxjSvL2gGckyNZRmgkPnhsrWQjACBJq8ORxU+jJC5VBmUAgFEbO3ls+k6X2wehRPLqHIM2DH9dvBrxMk7KcIRB5cJCFMakSI5FgEPulkm6mNF9ofMopt1/fSGU5VCTW4IUrW7mwj6iYhhULipEdli0lDBWSvnX3R1wHVhUVAgE2O9vpv3ZeVLFeiWU5VCVsxLhnMqv+hSo7iku73B3zO0oq/t813sA/uVroo1J87Ben+VrNZ/JCI3Evuxv+VPVpLbxv/B00P2Qs6JCoAzdAUDUKjkASNHqsHeOokMUJ9YnZuGZ+DRfq+1uX13ucXLE4/jbWLitgQJ/EJOBAHht/pPQsf41XX/Zn50nfuac4kLPYESltyJeH0YMUfwuAJdmylOqn4unZiWJEyUjMWotdmcuE1N0iDJ4fqb1oF7NaFhWbuV5+jyAQU9lwjkVdmUuFSNIEUr1c7Ak0usHDQKh2PTNGMorMz6m9pVs+5phmDUAxtwdfzVjKeI1gfrExBWGEPwq+wkwHt6tUGBnd3HZCVGxxBTqKtx6mVBsAOC0lGZuWBR+mDxfTAhFyQmPxff1c132U4J9xqIyUf0e4MMERndx2QkCYR0A+6TDvuwnZlyFEyh2ZS5DOOe0iPm3xpVle32J4dOZdBdt/xBEKAYwWBiTjLxoZd6O+0OMWouXUnMAgKeg5T1FZbsCkthwqnL2sd6WXvqA0Tx2z5p+9u1VATHBkadPntQc7myqtwp8sD2glFJ67m6PseLLc64dRyCpam/a1DRydyRYJhgnx2zvdDQ9ON/B5NfXc2933ajsnBixBMoEk9UsHO9tOf1q84VgfTXpne1XrqgOdVx/o9F0555SJnROjFj+1n372Gv9NxKDfb6i+WPLtaLjva1nWsaGx6Ua0G8et56609FY1X6tvIJSxe7lAfnwrtb41QKOsOWxak1eilaXkagJjdQynNuTslFKBywTY53jps4B60SDyWZ797mkuacCoTNoXyFSSg0A5gjAIqtgJRpG1QagCUA7IUTuqfCHPEQC/wMswVOMo1HDRgAAAABJRU5ErkJggg==" height="47" width="37" y="212.5" x="921.5"/>
										<image id="svg_90" stroke="null" xlink:href="data:image/png;base64,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" height="47" width="37" y="462.5" x="917.5"/>
										<image id="svg_91" stroke="null" xlink:href="data:image/png;base64,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" height="47" width="37" y="572.5" x="921.5"/>
										<image id="svg_92" stroke="null" xlink:href="data:image/png;base64,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" height="47" width="37" y="504.5" x="717.5"/>
										<image stroke="null" id="svg_93" xlink:href="data:image/png;base64,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" height="47" width="37" y="572.5" x="649.5"/>
										<image id="svg_94" stroke="null" xlink:href="data:image/png;base64,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" height="47" width="37" y="330.5" x="647.5"/>
										<image id="svg_95" stroke="null" xlink:href="data:image/png;base64,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" height="47" width="37" y="74.5" x="915.5"/>
										<image id="svg_96" stroke="null" xlink:href="data:image/png;base64,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" height="47" width="37" y="70.5" x="653.5"/>
										<image id="svg_97" stroke="null" xlink:href="data:image/png;base64,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" height="47" width="37" y="150.5" x="699.5"/>
										<g id="svg_115" transform="translate(3505.199951171875,2194.56005859375) ">
										<rect id="svg_116" height="0" width="0" y="-652.45981" x="-1342.17869" display="none" stroke-width="0.5" stroke="#22C" fill-opacity="0.15" fill="#22C"/>
										<g id="svg_117" display="inline">
											<path id="svg_118" d="m-1218.48675,-782.84842l3208.496,0l0,2080.736l-3208.496,0z" stroke-dasharray="5,5" stroke="#22C" fill="none"/>
											<g id="svg_119" display="inline">
											<circle id="svg_120" cy="-782.84842" cx="-1218.48675" pointer-events="all" stroke-width="2" style="cursor:nw-resize" r="4" fill="#22C"/>
											<circle id="svg_121" cy="-782.84842" cx="385.76125" pointer-events="all" stroke-width="2" style="cursor:n-resize" r="4" fill="#22C"/>
											<circle id="svg_122" cy="-782.84842" cx="1990.00925" pointer-events="all" stroke-width="2" style="cursor:ne-resize" r="4" fill="#22C"/>
											<circle id="svg_123" cy="257.51958" cx="1990.00925" pointer-events="all" stroke-width="2" style="cursor:e-resize" r="4" fill="#22C"/>
											<circle id="svg_124" cy="1297.88758" cx="1990.00925" pointer-events="all" stroke-width="2" style="cursor:se-resize" r="4" fill="#22C"/>
											<circle id="svg_125" cy="1297.88758" cx="385.76125" pointer-events="all" stroke-width="2" style="cursor:s-resize" r="4" fill="#22C"/>
											<circle id="svg_126" cy="1297.88758" cx="-1218.48675" pointer-events="all" stroke-width="2" style="cursor:sw-resize" r="4" fill="#22C"/>
											<circle id="svg_127" cy="257.51958" cx="-1218.48675" pointer-events="all" stroke-width="2" style="cursor:w-resize" r="4" fill="#22C"/>
											<line id="svg_128" y2="-802.84842" x2="385.76125" y1="-782.84842" x1="385.76125" stroke="#22C"/>
											<circle id="svg_129" cy="-802.84842" cx="385.76125" style="cursor:url(images/rotate.png) 12 12, auto;" stroke-width="2" stroke="#22C" r="4" fill="lime"/>
											</g>
										</g>
										<g id="svg_130">
											<circle id="svg_131" cy="-18.57737" cx="-736.95954" xlink:title="Drag node to move it. Double-click node to change segment type" cursor="move" stroke-width="2" stroke="#00F" fill="#0FF" r="0" display="none"/>
											<path id="svg_132" d="m-742.63403,-23.77352c2.51213,1.01324 4.13221,3.11628 5.67449,5.19615" stroke-width="2" stroke="#0FF" fill="none" display="none"/>
											<circle id="svg_133" cy="-11.92252" cx="-732.44767" xlink:title="Drag node to move it. Double-click node to change segment type" cursor="move" stroke-width="2" stroke="#00F" fill="#0FF" r="0" display="none"/>
											<path id="svg_134" d="m-736.95954,-18.57737c1.61874,2.18294 3.58904,4.23249 4.51187,6.65485" stroke-width="2" stroke="#0FF" fill="none" display="none"/>
											<circle id="svg_135" cy="-4.40465" cx="-729.54762" xlink:title="Drag node to move it. Double-click node to change segment type" cursor="move" stroke-width="2" stroke="#00F" fill="#0FF" r="0" display="none"/>
											<path id="svg_136" d="m-732.44767,-11.92252c0.97989,2.57221 2.17512,4.75422 2.90005,7.51787" stroke-width="2" stroke="#0FF" fill="none" display="none"/>
											<circle id="svg_137" cy="3.07889" cx="-727.45565" xlink:title="Drag node to move it. Double-click node to change segment type" cursor="move" stroke-width="2" stroke="#00F" fill="#0FF" r="0" display="none"/>
											<path id="svg_138" d="m-729.54762,-4.40465c0.67973,2.59137 1.25965,4.94639 2.09197,7.48354" stroke-width="2" stroke="#0FF" fill="none" display="none"/>
											<circle id="svg_139" cy="10.67861" cx="-725.40796" xlink:title="Drag node to move it. Double-click node to change segment type" cursor="move" stroke-width="2" stroke="#00F" fill="#0FF" r="0" display="none"/>
											<path id="svg_140" d="m-727.45565,3.07889c0.78967,2.40711 0.33923,5.34553 2.04769,7.59972" stroke-width="2" stroke="#0FF" fill="none" display="none"/>
											<circle id="svg_141" cy="17.12724" cx="-720.96028" xlink:title="Drag node to move it. Double-click node to change segment type" cursor="move" stroke-width="2" stroke="#00F" fill="#0FF" r="0" display="none"/>
											<path id="svg_142" d="m-725.40796,10.67861c1.52148,2.0076 3.12501,3.93837 4.44768,6.44863" stroke-width="2" stroke="#0FF" fill="none" display="none"/>
											<circle id="svg_143" cy="19.14693" cx="-719.3861" xlink:title="Drag node to move it. Double-click node to change segment type" cursor="move" stroke-width="2" stroke="#00F" fill="#0FF" r="0" display="none"/>
											<path id="svg_144" d="m-720.96028,17.12724l1.57418,2.01969" stroke-width="2" stroke="#0FF" fill="none" display="none"/>
											<circle id="svg_145" cy="-23.77352" cx="-742.63403" xlink:title="Drag node to move it. Double-click node to change segment type" cursor="move" stroke-width="2" stroke="#0FF" fill="#0FF" r="0" display="none"/>
											<circle id="svg_146" cy="-22.76028" cx="-740.1219" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#EEE" r="0" display="none"/>
											<circle id="svg_147" cy="-537.27711" cx="-1151.93224" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#0FF" r="0" display="none"/>
											<line id="svg_148" display="none" y2="-537.27711" x2="-1151.93224" y1="-535.27711" x1="-1151.93224" stroke="#555"/>
											<line id="svg_149" display="none" y2="-23.77352" x2="-742.63403" y1="-22.76028" x1="-740.1219" stroke="#555"/>
											<line id="svg_150" display="none" y2="-18.57737" x2="-736.95954" y1="-20.65724" x1="-738.50182" stroke="#555"/>
											<circle id="svg_151" cy="-20.65724" cx="-738.50182" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#0FF" r="0" display="none"/>
											<line id="svg_152" display="none" y2="-18.57737" x2="-736.95954" y1="-16.39443" x1="-735.3408" stroke="#555"/>
											<circle id="svg_153" cy="-16.39443" cx="-735.3408" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#EEE" r="0" display="none"/>
											<line id="svg_154" display="none" y2="-11.92252" x2="-732.44767" y1="-14.34488" x1="-733.3705" stroke="#555"/>
											<circle id="svg_155" cy="-14.34488" cx="-733.3705" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#0FF" r="0" display="none"/>
											<line id="svg_156" display="none" y2="-11.92252" x2="-732.44767" y1="-9.35031" x1="-731.46778" stroke="#555"/>
											<circle id="svg_157" cy="-9.35031" cx="-731.46778" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#EEE" r="0" display="none"/>
											<line id="svg_158" display="none" y2="-4.40465" x2="-729.54762" y1="-7.1683" x1="-730.27255" stroke="#555"/>
											<circle id="svg_159" cy="-7.1683" cx="-730.27255" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#0FF" r="0" display="none"/>
											<line id="svg_160" display="none" y2="-4.40465" x2="-729.54762" y1="-1.81328" x1="-728.86789" stroke="#555"/>
											<circle id="svg_161" cy="-1.81328" cx="-728.86789" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#EEE" r="0" display="none"/>
											<line id="svg_162" display="none" y2="3.07889" x2="-727.45565" y1="0.54174" x1="-728.28797" stroke="#555"/>
											<circle id="svg_163" cy="0.54174" cx="-728.28797" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#0FF" r="0" display="none"/>
											<line id="svg_164" display="none" y2="3.07889" x2="-727.45565" y1="5.486" x1="-726.66598" stroke="#555"/>
											<circle id="svg_165" cy="5.486" cx="-726.66598" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#EEE" r="0" display="none"/>
											<line id="svg_166" display="none" y2="10.67861" x2="-725.40796" y1="8.42442" x1="-727.11642" stroke="#555"/>
											<circle id="svg_167" cy="8.42442" cx="-727.11642" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#0FF" r="0" display="none"/>
											<line id="svg_168" display="none" y2="10.67861" x2="-725.40796" y1="12.68621" x1="-723.88648" stroke="#555"/>
											<circle id="svg_169" cy="12.68621" cx="-723.88648" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#EEE" r="0" display="none"/>
											<line id="svg_170" display="none" y2="17.12724" x2="-720.96028" y1="14.61698" x1="-722.28295" stroke="#555"/>
											<circle id="svg_171" cy="14.61698" cx="-722.28295" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#0FF" r="0" display="none"/>
											<path id="svg_172" d="m-1371.7323,-820.51709l0,0" stroke-width="2" stroke="#0FF" fill="none" display="none"/>
											<circle id="svg_173" cy="21.52083" cx="-718.67224" xlink:title="Drag node to move it. Double-click node to change segment type" cursor="move" stroke-width="2" stroke="#00F" fill="#0FF" r="0" display="none"/>
											<path id="svg_174" d="m-719.3861,19.14693l0.71386,2.3739" stroke-width="2" stroke="#0FF" fill="none" display="none"/>
										</g>
										</g>
									</g>
								</svg>
							</div>
							<div class="football-board-bottom"></div>
						
				</div> 
				

				<!-- FOR CHECK CLICK ON HOME STANDING / AWAY STANDING -->

				<script type="text/javascript">
					$("#btn-standing-all").click(function() {
						$(".row-show-standing-all").css("display", "");
						$(".row-show-standing-home").css("display", "none");
						$(".row-show-standing-away").css("display", "none");
					});

					$("#btn-standing-home").click(function() {
						$(".row-show-standing-all").css("display", "none");
						$(".row-show-standing-home").css("display", "");
						$(".row-show-standing-away").css("display", "none");
					});

					$("#btn-standing-away").click(function() {
						$(".row-show-standing-all").css("display", "none");
						$(".row-show-standing-home").css("display", "none");
						$(".row-show-standing-away").css("display", "");
					});
				</script>

			<?php
				}
			?>

			<!-- END STANDINGS TAB -->
			<!-- END STANDINGS TAB -->
			<!-- END STANDINGS TAB -->

			<!-- START H2H -->
			<!-- START H2H -->
			<!-- START H2H -->

			<?php
				if ($currentTab == 'H2H') {
			?>

				<!-- HOME LAST MATCHES -->
				<!-- HOME LAST MATCHES -->
				<!-- HOME LAST MATCHES -->

				<div class="showData">
					<div class="titleShowData">
						<span>Latest Matches</span>
						<span style="margin-left: 15px;"><?php echo $infoRow->match_homeEn; ?></span>
					</div>

					<hr>

					<?php

					// H2H - HOME LAST MATCHES
					$qryMatch = tep_query("SELECT * FROM nano_schedule_match WHERE (match_homeId = '" . $infoRow->match_homeId . "' OR match_awayId = '" . $infoRow->match_homeId . "') AND match_state = 'Finished' AND match_time < '" . date("Y-m-d H:i:s") . "' ORDER BY match_time DESC LIMIT 0,20");

					if (tep_num_rows($qryMatch) == 0) {
						echo '<div class="noData">No data.</div>';
					} else {
						echo '
	                    <table class="tableShowData table-show-h2h">
		                    <thead class="thShowData">
		                      <td class="col-show-h2h-title">Leagues</td>
		                      <td class="col-show-h2h-title">Date</td>
		                      <td class="col-show-h2h-title">Home</td>
		                      <td class="col-show-h2h-title">Score</td>
		                      <td class="col-show-h2h-title">Away</td>
		                      <td class="col-show-h2h-title">Score Half</td>
		                      <td class="col-show-h2h-title">Result</td>
	                    	</thead>
                    ';

						while ($infoMatch = tep_fetch_object($qryMatch)) {

							// FOR CHECKING THE SAME TEAM
							if ($infoMatch->match_homeId == $infoRow->match_homeId) {
								$colShowH2HTeamNameHome = "colShowH2HTeamNameHome";
							} else {
								$colShowH2HTeamNameHome = "";
							}

							if ($infoMatch->match_awayId == $infoRow->match_homeId) {
								$colShowH2HTeamNameAway = "colShowH2HTeamNameAway";
							} else {
								$colShowH2HTeamNameAway = "";
							}

							$infoRecentResult = tep_fetch_object(tep_query("SELECT * FROM nano_schedule_match WHERE match_code = '" . $infoMatch->match_code . "'"));

							if ($infoRecentResult->match_homeId == $infoRow->match_homeId) {
								if ($infoRecentResult->match_homeScore > $infoRecentResult->match_awayScore) {
									$recentResult = "Win";
									$h2h_recent_result = "h2h-recent-win";
									$colShowH2HScore = "colShowH2HScoreGreen";
								} else if ($infoRecentResult->match_homeScore < $infoRecentResult->match_awayScore) {
									$recentResult = "Lose";
									$h2h_recent_result = "h2h-recent-lose";
									$colShowH2HScore = "colShowH2HScoreRed";
								} else if ($infoRecentResult->match_homeScore == $infoRecentResult->match_awayScore) {
									$recentResult = "Draw";
									$h2h_recent_result = "h2h-recent-draw";
									$colShowH2HScore = "colShowH2HScoreYellow";
								}
							} else if ($infoRecentResult->match_awayId == $infoRow->match_homeId) {
								if ($infoRecentResult->match_homeScore < $infoRecentResult->match_awayScore) {
									$recentResult = "Win";
									$h2h_recent_result = "h2h-recent-win";
									$colShowH2HScore = "colShowH2HScoreGreen";
								} else if ($infoRecentResult->match_homeScore > $infoRecentResult->match_awayScore) {
									$recentResult = "Lose";
									$h2h_recent_result = "h2h-recent-lose";
									$colShowH2HScore = "colShowH2HScoreRed";
								} else if ($infoRecentResult->match_homeScore == $infoRecentResult->match_awayScore) {
									$recentResult = "Draw";
									$h2h_recent_result = "h2h-recent-draw";
									$colShowH2HScore = "colShowH2HScoreYellow";
								}
							}

							echo "
	                        <tr class='row-show-h2h'>
	                          <td class='col-show-h2h-title'>" . $infoMatch->match_leagueEn . "</td>
	                          <td class='col-show-h2h'>" . $infoMatch->match_time . "</td>
	                          <td class='col-show-h2h " . $colShowH2HTeamNameHome . "'>" . $infoMatch->match_homeEn . "</td>
	                          <td class='col-show-h2h-score " . $colShowH2HScore . "'>" . $infoMatch->match_homeScore . " - " . $infoMatch->match_awayScore . "</td>
	                          <td class='col-show-h2h " . $colShowH2HTeamNameAway . "'>" . $infoMatch->match_awayEn . "</td>
	                          <td class='col-show-h2h'>" . $infoMatch->match_homeHalfScore . " - " . $infoMatch->match_awayHalfScore . "</td>
	                          <td class='col-show-h2h'>
	                          	<div class='" . $h2h_recent_result . "'>A</div>
	                          </td>
	                        </tr>
                     	 ";
						}

						echo "</table>";
					}

					?>
				</div>

				<!-- AWAY LAST MATCHES -->
				<!-- AWAY LAST MATCHES -->
				<!-- AWAY LAST MATCHES -->

				<div class="showData">
					<div class="titleShowData">
						<span>Latest Matches</span>
						<span style="margin-left: 15px;"><?php echo $infoRow->match_awayEn; ?></span>
					</div>

					<hr>

					<?php

					// H2H - AWAY LAST MATCHES
					$qryMatch = tep_query("SELECT * FROM nano_schedule_match WHERE (match_homeId = '" . $infoRow->match_awayId . "' OR match_awayId = '" . $infoRow->match_awayId . "') AND match_state = 'Finished' AND match_time < '" . date("Y-m-d H:i:s") . "' ORDER BY match_time DESC LIMIT 0,20");

					if (tep_num_rows($qryMatch) == 0) {
						echo '<div class="noData">No data.</div>';
					} else {
						echo '
	                    <table class="tableShowData table-show-h2h">
		                    <thead class="thShowData">
		                      <td class="col-show-h2h-title">Leagues</td>
		                      <td class="col-show-h2h-title">Date</td>
		                      <td class="col-show-h2h-title">Home</td>
		                      <td class="col-show-h2h-title">Score</td>
		                      <td class="col-show-h2h-title">Away</td>
		                      <td class="col-show-h2h-title">Score Half</td>
		                      <td class="col-show-h2h-title">Result</td>
	                    	</thead>
                    ';

						while ($infoMatch = tep_fetch_object($qryMatch)) {

							// FOR CHECKING THE SAME TEAM
							if ($infoMatch->match_homeId == $infoRow->match_awayId) {
								$colShowH2HTeamNameHome = "colShowH2HTeamNameHome";
							} else {
								$colShowH2HTeamNameHome = "";
							}

							if ($infoMatch->match_awayId == $infoRow->match_awayId) {
								$colShowH2HTeamNameAway = "colShowH2HTeamNameAway";
							} else {
								$colShowH2HTeamNameAway = "";
							}

							$infoRecentResult = tep_fetch_object(tep_query("SELECT * FROM nano_schedule_match WHERE match_code = '" . $infoMatch->match_code . "'"));

							if ($infoRecentResult->match_homeId == $infoRow->match_awayId) {
								if ($infoRecentResult->match_homeScore > $infoRecentResult->match_awayScore) {
									$recentResult = "Win";
									$h2h_recent_result = "h2h-recent-win";
									$colShowH2HScore = "colShowH2HScoreGreen";
								} else if ($infoRecentResult->match_homeScore < $infoRecentResult->match_awayScore) {
									$recentResult = "Lose";
									$h2h_recent_result = "h2h-recent-lose";
									$colShowH2HScore = "colShowH2HScoreRed";
								} else if ($infoRecentResult->match_homeScore == $infoRecentResult->match_awayScore) {
									$recentResult = "Draw";
									$h2h_recent_result = "h2h-recent-draw";
									$colShowH2HScore = "colShowH2HScoreYellow";
								}
							} else if ($infoRecentResult->match_awayId == $infoRow->match_awayId) {
								if ($infoRecentResult->match_homeScore < $infoRecentResult->match_awayScore) {
									$recentResult = "Win";
									$h2h_recent_result = "h2h-recent-win";
									$colShowH2HScore = "colShowH2HScoreGreen";
								} else if ($infoRecentResult->match_homeScore > $infoRecentResult->match_awayScore) {
									$recentResult = "Lose";
									$h2h_recent_result = "h2h-recent-lose";
									$colShowH2HScore = "colShowH2HScoreRed";
								} else if ($infoRecentResult->match_homeScore == $infoRecentResult->match_awayScore) {
									$recentResult = "Draw";
									$h2h_recent_result = "h2h-recent-draw";
									$colShowH2HScore = "colShowH2HScoreYellow";
								}
							}

							echo "
	                        <tr class='row-show-h2h'>
	                          <td class='col-show-h2h-title'>" . $infoMatch->match_leagueEn . "</td>
	                          <td class='col-show-h2h'>" . $infoMatch->match_time . "</td>
	                          <td class='col-show-h2h " . $colShowH2HTeamNameHome . "'>" . $infoMatch->match_homeEn . "</td>
	                          <td class='col-show-h2h-score " . $colShowH2HScore . "'>" . $infoMatch->match_homeScore . " - " . $infoMatch->match_awayScore . "</td>
	                          <td class='col-show-h2h " . $colShowH2HTeamNameAway . "'>" . $infoMatch->match_awayEn . "</td>
	                          <td class='col-show-h2h'>" . $infoMatch->match_homeHalfScore . " - " . $infoMatch->match_awayHalfScore . "</td>
	                          <td class='col-show-h2h'>
	                          	<div class='" . $h2h_recent_result . "'>A</div>
	                          </td>
	                        </tr>
                     	 ";
						}

						echo "</table>";
					}

					?>
				</div>

				<!-- HEAD TO HEAD -->
				<!-- HEAD TO HEAD -->
				<!-- HEAD TO HEAD -->

				<div class="showData">
					<div class="titleShowData">
						<span>H2H</span>
						<!-- <span style="margin-left: 15px;"><?php echo $infoRow->match_awayEn; ?></span> -->
					</div>

					<hr>

					<?php

					// H2H - HEAD TO HEAD
					$qryMatch = tep_query("SELECT * FROM nano_schedule_match WHERE (match_homeId = '" . $infoRow->match_homeId . "' OR match_homeId = '" . $infoRow->match_awayId . "') AND (match_awayId = '" . $infoRow->match_homeId . "' OR match_awayId = '" . $infoRow->match_awayId . "') AND match_state = 'Finished' AND match_time < '" . date("Y-m-d H:i:s") . "' ORDER BY match_time DESC LIMIT 0,20");

					if (tep_num_rows($qryMatch) == 0) {
						echo '<div class="noData">No data.</div>';
					} else {
						echo '
	                    <table class="tableShowData table-show-h2h">
		                    <thead class="thShowData">
		                      <td class="col-show-h2h-title">Leagues</td>
		                      <td class="col-show-h2h-title">Date</td>
		                      <td class="col-show-h2h-title">Home</td>
		                      <td class="col-show-h2h-title">Score</td>
		                      <td class="col-show-h2h-title">Away</td>
		                      <td class="col-show-h2h-title">Score Half</td>
		                      <td class="col-show-h2h-title">Result</td>
	                    	</thead>
                    ';

						while ($infoMatch = tep_fetch_object($qryMatch)) {
							$infoRecentResult = tep_fetch_object(tep_query("SELECT * FROM nano_schedule_match WHERE match_code = '" . $infoMatch->match_code . "'"));

							if ($infoRecentResult->match_awayId == $infoRow->match_awayId) {
								if ($infoRecentResult->match_homeScore > $infoRecentResult->match_awayScore) {
									$recentResult = "Win";
									$h2h_recent_result = "h2h-recent-win";
									$colShowH2HScore = "colShowH2HScoreGreen";
								} else if ($infoRecentResult->match_homeScore < $infoRecentResult->match_awayScore) {
									$recentResult = "Lose";
									$h2h_recent_result = "h2h-recent-lose";
									$colShowH2HScore = "colShowH2HScoreRed";
								} else if ($infoRecentResult->match_homeScore == $infoRecentResult->match_awayScore) {
									$recentResult = "Draw";
									$h2h_recent_result = "h2h-recent-draw";
									$colShowH2HScore = "colShowH2HScoreYellow";
								}
							} else if ($infoRecentResult->match_awayId == $infoRow->match_awayId) {
								if ($infoRecentResult->match_homeScore < $infoRecentResult->match_awayScore) {
									$recentResult = "Win";
									$h2h_recent_result = "h2h-recent-win";
									$colShowH2HScore = "colShowH2HScoreGreen";
								} else if ($infoRecentResult->match_homeScore > $infoRecentResult->match_awayScore) {
									$recentResult = "Lose";
									$h2h_recent_result = "h2h-recent-lose";
									$colShowH2HScore = "colShowH2HScoreRed";
								} else if ($infoRecentResult->match_homeScore == $infoRecentResult->match_awayScore) {
									$recentResult = "Draw";
									$h2h_recent_result = "h2h-recent-draw";
									$colShowH2HScore = "colShowH2HScoreYellow";
								}
							}

							echo "
	                        <tr class='row-show-h2h'>
	                          <td class='col-show-h2h-title'>" . $infoMatch->match_leagueEn . "</td>
	                          <td class='col-show-h2h'>" . $infoMatch->match_time . "</td>
	                          <td class='col-show-h2h'>" . $infoMatch->match_homeEn . "</td>
	                          <td class='col-show-h2h-score " . $colShowH2HScore . "'>" . $infoMatch->match_homeScore . " - " . $infoMatch->match_awayScore . "</td>
	                          <td class='col-show-h2h'>" . $infoMatch->match_awayEn . "</td>
	                          <td class='col-show-h2h'>" . $infoMatch->match_homeHalfScore . " - " . $infoMatch->match_awayHalfScore . "</td>
	                          <td class='col-show-h2h'>
	                          	<div class='" . $h2h_recent_result . "'>A</div>
	                          </td>
	                        </tr>
                     	 ";
						}

						echo "</table>";
					}

					?>
				</div>

				<!-- HOME SCHEDULED MATCHES -->
				<!-- HOME SCHEDULED MATCHES -->
				<!-- HOME SCHEDULED MATCHES -->

				<div class="showData">
					<div class="titleShowData">
						<span>Scheduled Matches</span>
						<span style="margin-left: 15px;"><?php echo $infoRow->match_homeEn; ?></span>
					</div>

					<hr>

					<?php

					// H2H - HOME SCHEDULED MATCHES
					$qryMatch = tep_query("SELECT * FROM nano_schedule_match WHERE (match_homeId = '" . $infoRow->match_homeId . "' OR match_awayId = '" . $infoRow->match_homeId . "') AND match_state = 'Not started' AND match_time > '" . date("Y-m-d H:i:s") . "' ");

					if (tep_num_rows($qryMatch) == 0) {
						echo '<div class="noData">No data.</div>';
					} else {
						echo '
	                    <table class="tableShowData table-show-h2h">
		                    <thead class="thShowData">
		                      <td class="col-show-h2h-title">Leagues</td>
		                      <td class="col-show-h2h-title">Date</td>
		                      <td class="col-show-h2h-title">Home</td>
		                      <td class="col-show-h2h-title">Away</td>
	                    	</thead>
                    ';

						while ($infoMatch = tep_fetch_object($qryMatch)) {

							echo "
	                        <tr class='row-show-h2h'>
	                          <td class='col-show-h2h-title'>" . $infoMatch->match_leagueEn . "</td>
	                          <td class='col-show-h2h'>" . $infoMatch->match_time . "</td>
	                          <td class='col-show-h2h'>" . $infoMatch->match_homeEn . "</td>
	                          <td class='col-show-h2h'>" . $infoMatch->match_awayEn . "</td>
	                        </tr>
                     	 ";
						}

						echo "</table>";
					}

					?>
				</div>

				<!-- AWAY SCHEDULED MATCHES -->
				<!-- AWAY SCHEDULED MATCHES -->
				<!-- AWAY SCHEDULED MATCHES -->

				<div class="showData">
					<div class="titleShowData">
						<span>Scheduled Matches</span>
						<span style="margin-left: 15px;"><?php echo $infoRow->match_awayEn; ?></span>
					</div>

					<hr>

					<?php

					// H2H - AWAY SCHEDULED MATCHES
					$qryMatch = tep_query("SELECT * FROM nano_schedule_match WHERE (match_homeId = '" . $infoRow->match_awayId . "' OR match_awayId = '" . $infoRow->match_awayId . "') AND match_state = 'Not started' AND match_time > '" . date("Y-m-d H:i:s") . "' ");

					if (tep_num_rows($qryMatch) == 0) {
						echo '<div class="noData">No data.</div>';
					} else {
						echo '
	                    <table class="tableShowData table-show-h2h">
		                    <thead class="thShowData">
		                      <td class="col-show-h2h-title">Leagues</td>
		                      <td class="col-show-h2h-title">Date</td>
		                      <td class="col-show-h2h-title">Home</td>
		                      <td class="col-show-h2h-title">Away</td>
	                    	</thead>
                    ';

						while ($infoMatch = tep_fetch_object($qryMatch)) {

							echo "
	                        <tr class='row-show-h2h'>
	                          <td class='col-show-h2h-title'>" . $infoMatch->match_leagueEn . "</td>
	                          <td class='col-show-h2h'>" . $infoMatch->match_time . "</td>
	                          <td class='col-show-h2h'>" . $infoMatch->match_homeEn . "</td>
	                          <td class='col-show-h2h'>" . $infoMatch->match_awayEn . "</td>
	                        </tr>
                     	 ";
						}

						echo "</table>";
					}

					?>
				</div>

				<style>
					.football-board {
						background-color: white;
						margin-top: 30px;
						margin-bottom: 30px;
						padding: 0;
						width: 1170px;
						height: 810px;
						display: block;
						justify-content: center;
						align-items: center;
					}

					.football-board-top {
						background-image: linear-gradient(100deg, #9F6C0A, #E0B04F);
						margin: 0;
						color: white;
						font-size: 16px;
						padding-left: 10px;
						width: 100%;
						height: 35px;
						display: flex;
						align-items: center;
					}

					.football-board-center {
						/* background-color: #309B50; */
						margin-left: 10px;
						margin-top: 10px;
						margin-bottom: 10px;
						width: 98.4%;
						height: 720px;
						border-radius: 5px;
						display: block;
						justify-content: center;
						align-items: center;
					}

					.football-board-bottom {
						background-image: linear-gradient(100deg, #9F6C0A, #E0B04F);
						margin-left: 10px;
						margin-right: 10px;
						width: 98.4%;
						height: 35px;
						border-radius: 5px 5px 0px 0px;
					}
				</style>

				<div class="showData football-board">
							<div class="football-board-top">Lineups</div>
							<div class="football-board-center">
								<svg width="1150" height="720" xmlns="http://www.w3.org/2000/svg" xmlns:svg="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="border-radius: 10px;">
									<title>PitchB</title>
									
									<g>
										<title>Layer 1</title>
										<rect id="svg_1" fill="green" height="720" width="1150"/>
										<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="576.5" cy="437" rx="9" ry="9" id="svg_20"/>
										<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="663.5" cy="360" rx="9" ry="9" id="svg_36"/>
										<path id="svg_2" fill="green" stroke-width="2" stroke="white" d="m575.91102,19.91777l-525,0l0,680l1050,0l0,-680l-525,0l0,680l0,-680z"/>
										<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="576.5" cy="355" rx="9" ry="9" id="svg_8"/>
										<circle id="svg_3" fill-opacity="0" stroke-width="2" stroke="white" r="91.5" cy="353.3557" cx="576.3557" fill="black"/>
										<circle id="svg_5" fill="white" stroke="white" r="2" cy="360" cx="160"/>
										<circle id="svg_6" fill="white" stroke="white" r="2" cy="360" cx="990"/>
										<path id="svg_9" fill-opacity="0" stroke-width="2" stroke="white" d="m50,269.39999l55,0l0,182.20002l-55,0l0,-182.20002z"/>
										<path id="svg_10" fill-opacity="0" stroke-width="2" stroke="white" d="m1100,269.39999l-55,0l0,182.20002l55,0l0,-182.20002z"/>
										<path fill="black" id="svg_11" fill-opacity="0" stroke-width="2" stroke="white" d="m50.66931,182.39977l166,0l0,340.20045l-166,0l0,-340.20045z"/>
										<path fill="black" id="svg_12" fill-opacity="0" stroke-width="2" stroke="white" d="m1102,188.39977l-165,0l0,343.20045l165,0l0,-343.20045z"/>
										<path id="svg_13" fill="green" stroke-width="2" stroke="white" d="m218,286.875a91.5,91.5 0 0 1 0,146.25l0,-146.25z"/>
										<path id="svg_14" fill="green" stroke-width="2" stroke="white" d="m935,286.875a91.5,91.5 0 0 0 0,146.25l0,-146.25z"/>
										<path id="svg_15" fill-opacity="0" stroke-width="2" stroke="white" d="m50,30a10,10 0 0 0 10,-10l-10,0l0,10z"/>
										<path id="svg_16" fill-opacity="0" stroke-width="2" stroke="white" d="m60,700a10,10 0 0 0 -10,-10l0,10l10,0z"/>
										<path id="svg_17" fill-opacity="0" stroke-width="2" stroke="white" d="m1100,690a10,10 0 0 0 -10,10l10,0l0,-10z"/>
										<path id="svg_18" fill-opacity="0" stroke-width="2" stroke="white" d="m1090,20a10,10 0 0 0 10,10l0,-10l-10,0z"/>
										<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="574.5" cy="99" rx="9" ry="9" id="svg_19"/>
										<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="444.5" cy="541" rx="9" ry="9" id="svg_21"/>
										<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="443.5" cy="177" rx="9" ry="9" id="svg_22"/>
										<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="362.5" cy="358" rx="9" ry="9" id="svg_23"/>
										<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="215.5" cy="475" rx="9" ry="9" id="svg_24"/>
										<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="220.5" cy="600" rx="9" ry="9" id="svg_25"/>
										<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="216.5" cy="106" rx="9" ry="9" id="svg_26"/>
										<ellipse fill="#ffff00" stroke="#ffff00" stroke-width="5" cx="53.5" cy="364" rx="9" ry="9" id="svg_27"/>
										<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="216" cy="237" id="svg_7" rx="9" ry="9"/>
										<ellipse fill="#FF0000" stroke="#ff0000" stroke-width="5" cx="575.5" cy="441" rx="9" ry="9" id="svg_35"/>
										<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="672.5" cy="98" rx="9" ry="9" id="svg_37"/>
										<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="663.5" cy="355" rx="9" ry="9" id="svg_38"/>
										<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="660.5" cy="595" rx="9" ry="9" id="svg_39"/>
										<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="716.5" cy="175" rx="9" ry="9" id="svg_40"/>
										<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="787.5" cy="357" rx="9" ry="9" id="svg_41"/>
										<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="731.5" cy="525" rx="9" ry="9" id="svg_42"/>
										<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="940.5" cy="601" rx="9" ry="9" id="svg_43"/>
										<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="937.5" cy="238" rx="9" ry="9" id="svg_44"/>
										<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="936.5" cy="488" rx="9" ry="9" id="svg_45"/>
										<ellipse fill="#007fff" stroke="#007fff" stroke-width="5" cx="935.5" cy="101" rx="9" ry="9" id="svg_46"/>
										<ellipse fill="#7f00ff" stroke="#7f00ff" stroke-width="5" cx="1100.5" cy="354" rx="9" ry="9" id="svg_47"/>
										<text fill="#ff00ff" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="572" y="520" id="svg_48" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">At Kickoff</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="217" y="91" id="svg_49" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">Left D</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="215" y="214" id="svg_50" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">Left Center D</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="213" y="451" id="svg_51" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">Right Center D</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="219" y="575" id="svg_52" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">Right D</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="434.92307" y="345.77805" id="svg_53" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" transform="matrix(0.611765,0,0,0.82233,95.9294,49.164) ">Central Defensive Mid</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="442" y="151" id="svg_54" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">Left Mid</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="444" y="517" id="svg_55" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">Right Mid</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="572" y="73" id="svg_56" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">Left Forward</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="643.19192" y="349.83333" id="svg_57" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" transform="matrix(0.596386,0,0,0.705882,190.91,89.7059) ">Center Forward</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="529" y="413" id="svg_58" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">Right Forward</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="686" y="131" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" id="svg_59">Right Forward</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="659" y="575" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" id="svg_60">Left Forward</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="643.19192" y="349.83333" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" transform="matrix(0.596386,0,0,0.705882,282.91,142.706) " id="svg_61">Center Forward</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="737" y="501" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" id="svg_62">Left Mid</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="1129.63425" y="351.85833" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" transform="matrix(0.611765,0,0,0.82233,95.9294,49.164) " id="svg_63">Central Defensive Mid</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="716" y="221" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" id="svg_64">Right Mid</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="947" y="636" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" id="svg_65">Left D</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="939" y="535" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" id="svg_66">Left Center D</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="938" y="218" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" id="svg_67">Right Center D</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="943" y="80" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" id="svg_69">Right D</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="54" y="401" id="svg_70" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve">Goalie</text>
										<text fill="#000000" stroke="white" stroke-width="0" stroke-dasharray="null" stroke-linejoin="null" stroke-linecap="null" x="1101" y="389" font-size="24" font-family="Arial" text-anchor="middle" xml:space="preserve" id="svg_71">Goalie</text>
										<image stroke="null" xlink:href="data:image/png;base64,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" id="svg_76" height="41" width="41" y="152" x="419"/>
										<image id="svg_77" stroke="null" xlink:href="data:image/png;base64,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" height="41" width="41" y="336.5" x="553.5"/>
										<image id="svg_78" stroke="null" xlink:href="data:image/png;base64,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" height="41" width="41" y="420.5" x="553.5"/>
										<image id="svg_79" stroke="null" xlink:href="data:image/png;base64,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" height="41" width="41" y="528.5" x="423.5"/>
										<image id="svg_80" stroke="null" xlink:href="data:image/png;base64,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" height="41" width="41" y="579.5" x="199.5"/>
										<image id="svg_81" stroke="null" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEMAAABDCAYAAADHyrhzAAAABmJLR0QA/wD/AP+gvaeTAAAJOUlEQVR4nO2be1BU1x3Hv797775gWVYE5BWDPFTwAT7jM0qr0YA2tQZTTCRqecyYmHYykxlTmymZ6aRt2qbTSW0GMOZhQgl2JkkjYpM0NElrdXx2tERIq2KsgA9E5LHL3r2nf1jW3WVf9wWZjp+/9p57zu/3vb895+y5v3MWuIsHGgunDcUNfC9ssZxBtLsZb5UkEgy82OPkDX2ua+6bTzUVOsdCl+7BqK44ZsCtq/dxxAogsXwQTQGQBcAUpIkbQDtAbYB0mhj/KUU5P/venodu6a1Vl2A0FDcYewVrIQNKATwAIFqlSRHAIcbwlsHs3Lfl9XU96lWORNNg7Ck+kODm8QMQKgGM19K2Fw4ADZCkn5W/s+YLLQ1rEozdxQfjmCA9B0IFGKK0sBkBEgHvShL7YcU7RW1aGFQVDAZGuzc2bQLDLwAkaiFIAS4Qe2XIFbXziX0FfWoMKQ5Gbcn7EwDDXgAr1QjQCgK+BMMjZfWFJ5Xa4JQ0enXj/gLAcBJfk0AAAAOyGeFQTUnTNqU2ZPeM2pKmxwC2B4BBqVPdIdr1n8lHnqqqqpJkNZNTuaak8WkC/VJuu7GAgHqb2Pf4hn0bhmS0iYyakqZtBLZLmbSxgQHv2cW+hzfs2+COpH5Ec0ZtSVMJgb2sTtroQ8C3b/LWiHWH7RnV3228jyP6DIBRlbKxhLEny+uLwvbqkMF4bfO7dtFhPAGiSdopGxOcIGlxed2a46EqhRwmotNU+38QCAAwQeLqq9d+EHJ1HDQYu0saVwN4WHNZYwUhi4vmd4auEoCXihssMYL1DIAMXYSNHUOQpPxgL3gBe4ZNsG7HKAWCN3AQTPxouAIAI+O4F4LdHNEzXtvcbBadg+cAJOulyJ5qxdRvpuGeWQmwjrcABAz0ONHR0o3WT75CV6su6YphmMSxvMq3i0773xD8C1xOx1bSKRBEhPx1GZj5rQxwvO/3EGU3IXNRMjIXJeNff72Mw2+chcsh6iKDk/AsgI3+N0YMEwKr1EUBEZaUT0P+uswRgfAna0kKHtw5F6ZovV5/aH11yQfx/qU+wajZ2JgPYKYe7meunYSspSkR1x+fbsOSiml6SAEAI8e4R/wLfYJBjB7Tw7M9JRr56+TPxxNnJ2LSgiQdFAHAyGf1Hyar9XA7vTAdnKAodYK8hzL0eUcmzH+j9GOfPK1H4Sub/pQIIFdrn4KRR8Yi5fPxuDQrEjJiNVTkgXMOue73KRj+wIvicujwHSRmx4I3KOsVw6RM0yfRTpy03Pvao5IYTdfDYdy9Ng1sxGigJAB+z3znKyNM1cOfOUb9z6MlVrfsgc8ze/ffbD28Ead+5GlhIwjJu4qbrcMX3sEYsQjRAuctl2objt6I05hyIZNhwDMheQdDl4HZfUn9fnFPR78GSoLgZp7n9g6G2s3hgHS19kByM1U2Ov7ZrZGakUgEzwzvHQx1ioPgGhTRfqxLcfv+bgc6z97QUJEvDOTJnHsHQ9U+ZSjOHLgAxpTFuuXgRUiirL0gWRh48oxj759W3Q6DXDvXi9ZPLslu191+Cy0ftuugyAs3HyAYjHXq6fPo79tkJW36ux1ofvkfquebMEhkNl4dvvAeJpqccQiG6HTjo1+dwMUTV8LWvXGxDwdfOIbergE9JQGMtW95vcAxfCncKUcr6byD6hoU8edfn8KkBUnIWTkREybbfe73XO5H218u4YsPL+rdI25DXKv35Z20H49T0G+e8uH84U6cP9wJk9UAa7wZgolH31UH+rsd4RtrinTK+8oTDN4kfioNGkQEyIvqhbPPBWef+hWqUjiJmr2vfQZGbUnjEYDm6ynAEmtCTKIF1ngzDGYBhigBHBGGBkWIQ270X3eg/7oDvVcGdFr5eBgyCXxc6d5VnuWtby8g2g8GbYNBQOqMeGQuTEJSbhyi48yRKR1w4UrbTZw/0okLR7sgOiM6VSCHZu9AAH7BILA3Geh5aJTkscZbsGzbDCRm28NX9sMYZUBafjzS8uMxa30mPq8+o+lKlBH2+pf5pKDK6oraAXyuhbPY5Gis+fF8RYHwxxpvwaodczFxtmYHCvtcLsv7/oUj8nFMg9M50ePNWPnMbFjswU5Ey4fjCQXbZyItT32mgYBXAx2THBGMy1OO/gFAq395pAgmHg88MwcxCRalJoLCCRwKtufBnqrqBdvlFt0vBbTvX1BVVSUR6KdKPS3cnKNWbEgEE49vfD8fBouyFQAD21O5b+3FQPcCpq0vTTmyFwyH5TqaUpCGrCWR75opJTY5GgtL5adsGdDLeP75YPcDBqOqqkoCJz2J2393iIiYBAvmbZwsW6BSMpekIH3eBJmt6NnKt1Z3BLsbdEOjvG7NcQL9JjIfwKKtuTCYR23xCuD2kLTYIsycM/zNLt6qDlUl5O6OOyZhB4C/h/OTvTQVKdP1+kdFcMw2I+ZsiCipf4M49mi486Ahg1FZM9cFgX8UQNAkpMEiYHZxViSCdCHr/hQkZIbcfpSIcZv+t4YKSdh9v/K9q85LjBUCCJiinrU+E1EarifkQkRYuDkHFCT/wIg9XVa/ujESWxFtglbWFx2h2+cZfF4x7alW5KyYGIkJXRmfbkP2stQR5UTsJxV1RZHNe5DxF4uy+tWNjGPfAcGTflpQOjXsKZzRYk5xFoxRdyZwYvh5WV3Rc3JsyNoer3i7aD+TpJUAutPy4pGcGyenua6YbUZML0oHADeIKsvqC3fItSH7rEBF/ZpDkuielbU0RflmiE6kz5sgGoxCYXndgzVK2ivu4we2HzBNLMo5OLkgbfnXYah0tHR3Xjh5fdnSx3MUJ7ZVP8WpP57blDoz7nfj0qzW8LW1p7/b4f7q5JXq6asynlBrS5OvtLmqWUhYmL4rLS9+izXeMip/1xoaENnl09ebu/59rWRxaV74/YcI0LR/H6s+ZjDeM+7FpClxW+PujVF/ZCcAfdcGXZ0tN5rcg+7KaUWTNN340m2wn3ivbYUt0fqjuIkx821JFlXJjcEep3j9Qu/Znsv9v807kVlLVaTLpsaozHxfftyRy0xSpdkmLI5JiMqw2I2xgpEP+EvG3IwN9Dj6+645vnL0uo47+x1v5q7I+Gg0dI7ZzwBjLEUUxWyO42a4nG4SjNwFnudbALQTkS6Hxu9yF2X8FygRuFW7xsvhAAAAAElFTkSuQmCC" height="41" width="41" y="339.5" x="343.5"/>
										<image id="svg_82" stroke="null" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEMAAABDCAYAAADHyrhzAAAABmJLR0QA/wD/AP+gvaeTAAAJOUlEQVR4nO2be1BU1x3Hv797775gWVYE5BWDPFTwAT7jM0qr0YA2tQZTTCRqecyYmHYykxlTmymZ6aRt2qbTSW0GMOZhQgl2JkkjYpM0NElrdXx2tERIq2KsgA9E5LHL3r2nf1jW3WVf9wWZjp+/9p57zu/3vb895+y5v3MWuIsHGgunDcUNfC9ssZxBtLsZb5UkEgy82OPkDX2ua+6bTzUVOsdCl+7BqK44ZsCtq/dxxAogsXwQTQGQBcAUpIkbQDtAbYB0mhj/KUU5P/venodu6a1Vl2A0FDcYewVrIQNKATwAIFqlSRHAIcbwlsHs3Lfl9XU96lWORNNg7Ck+kODm8QMQKgGM19K2Fw4ADZCkn5W/s+YLLQ1rEozdxQfjmCA9B0IFGKK0sBkBEgHvShL7YcU7RW1aGFQVDAZGuzc2bQLDLwAkaiFIAS4Qe2XIFbXziX0FfWoMKQ5Gbcn7EwDDXgAr1QjQCgK+BMMjZfWFJ5Xa4JQ0enXj/gLAcBJfk0AAAAOyGeFQTUnTNqU2ZPeM2pKmxwC2B4BBqVPdIdr1n8lHnqqqqpJkNZNTuaak8WkC/VJuu7GAgHqb2Pf4hn0bhmS0iYyakqZtBLZLmbSxgQHv2cW+hzfs2+COpH5Ec0ZtSVMJgb2sTtroQ8C3b/LWiHWH7RnV3228jyP6DIBRlbKxhLEny+uLwvbqkMF4bfO7dtFhPAGiSdopGxOcIGlxed2a46EqhRwmotNU+38QCAAwQeLqq9d+EHJ1HDQYu0saVwN4WHNZYwUhi4vmd4auEoCXihssMYL1DIAMXYSNHUOQpPxgL3gBe4ZNsG7HKAWCN3AQTPxouAIAI+O4F4LdHNEzXtvcbBadg+cAJOulyJ5qxdRvpuGeWQmwjrcABAz0ONHR0o3WT75CV6su6YphmMSxvMq3i0773xD8C1xOx1bSKRBEhPx1GZj5rQxwvO/3EGU3IXNRMjIXJeNff72Mw2+chcsh6iKDk/AsgI3+N0YMEwKr1EUBEZaUT0P+uswRgfAna0kKHtw5F6ZovV5/aH11yQfx/qU+wajZ2JgPYKYe7meunYSspSkR1x+fbsOSiml6SAEAI8e4R/wLfYJBjB7Tw7M9JRr56+TPxxNnJ2LSgiQdFAHAyGf1Hyar9XA7vTAdnKAodYK8hzL0eUcmzH+j9GOfPK1H4Sub/pQIIFdrn4KRR8Yi5fPxuDQrEjJiNVTkgXMOue73KRj+wIvicujwHSRmx4I3KOsVw6RM0yfRTpy03Pvao5IYTdfDYdy9Ng1sxGigJAB+z3znKyNM1cOfOUb9z6MlVrfsgc8ze/ffbD28Ead+5GlhIwjJu4qbrcMX3sEYsQjRAuctl2objt6I05hyIZNhwDMheQdDl4HZfUn9fnFPR78GSoLgZp7n9g6G2s3hgHS19kByM1U2Ov7ZrZGakUgEzwzvHQx1ioPgGhTRfqxLcfv+bgc6z97QUJEvDOTJnHsHQ9U+ZSjOHLgAxpTFuuXgRUiirL0gWRh48oxj759W3Q6DXDvXi9ZPLslu191+Cy0ftuugyAs3HyAYjHXq6fPo79tkJW36ux1ofvkfquebMEhkNl4dvvAeJpqccQiG6HTjo1+dwMUTV8LWvXGxDwdfOIbergE9JQGMtW95vcAxfCncKUcr6byD6hoU8edfn8KkBUnIWTkREybbfe73XO5H218u4YsPL+rdI25DXKv35Z20H49T0G+e8uH84U6cP9wJk9UAa7wZgolH31UH+rsd4RtrinTK+8oTDN4kfioNGkQEyIvqhbPPBWef+hWqUjiJmr2vfQZGbUnjEYDm6ynAEmtCTKIF1ngzDGYBhigBHBGGBkWIQ270X3eg/7oDvVcGdFr5eBgyCXxc6d5VnuWtby8g2g8GbYNBQOqMeGQuTEJSbhyi48yRKR1w4UrbTZw/0okLR7sgOiM6VSCHZu9AAH7BILA3Geh5aJTkscZbsGzbDCRm28NX9sMYZUBafjzS8uMxa30mPq8+o+lKlBH2+pf5pKDK6oraAXyuhbPY5Gis+fF8RYHwxxpvwaodczFxtmYHCvtcLsv7/oUj8nFMg9M50ePNWPnMbFjswU5Ey4fjCQXbZyItT32mgYBXAx2THBGMy1OO/gFAq395pAgmHg88MwcxCRalJoLCCRwKtufBnqrqBdvlFt0vBbTvX1BVVSUR6KdKPS3cnKNWbEgEE49vfD8fBouyFQAD21O5b+3FQPcCpq0vTTmyFwyH5TqaUpCGrCWR75opJTY5GgtL5adsGdDLeP75YPcDBqOqqkoCJz2J2393iIiYBAvmbZwsW6BSMpekIH3eBJmt6NnKt1Z3BLsbdEOjvG7NcQL9JjIfwKKtuTCYR23xCuD2kLTYIsycM/zNLt6qDlUl5O6OOyZhB4C/h/OTvTQVKdP1+kdFcMw2I+ZsiCipf4M49mi486Ahg1FZM9cFgX8UQNAkpMEiYHZxViSCdCHr/hQkZIbcfpSIcZv+t4YKSdh9v/K9q85LjBUCCJiinrU+E1EarifkQkRYuDkHFCT/wIg9XVa/ujESWxFtglbWFx2h2+cZfF4x7alW5KyYGIkJXRmfbkP2stQR5UTsJxV1RZHNe5DxF4uy+tWNjGPfAcGTflpQOjXsKZzRYk5xFoxRdyZwYvh5WV3Rc3JsyNoer3i7aD+TpJUAutPy4pGcGyenua6YbUZML0oHADeIKsvqC3fItSH7rEBF/ZpDkuielbU0RflmiE6kz5sgGoxCYXndgzVK2ivu4we2HzBNLMo5OLkgbfnXYah0tHR3Xjh5fdnSx3MUJ7ZVP8WpP57blDoz7nfj0qzW8LW1p7/b4f7q5JXq6asynlBrS5OvtLmqWUhYmL4rLS9+izXeMip/1xoaENnl09ebu/59rWRxaV74/YcI0LR/H6s+ZjDeM+7FpClxW+PujVF/ZCcAfdcGXZ0tN5rcg+7KaUWTNN340m2wn3ivbYUt0fqjuIkx821JFlXJjcEep3j9Qu/Znsv9v807kVlLVaTLpsaozHxfftyRy0xSpdkmLI5JiMqw2I2xgpEP+EvG3IwN9Dj6+645vnL0uo47+x1v5q7I+Gg0dI7ZzwBjLEUUxWyO42a4nG4SjNwFnudbALQTkS6Hxu9yF2X8FygRuFW7xsvhAAAAAElFTkSuQmCC" height="41" width="41" y="456.5" x="197.5"/>
										<image id="svg_83" stroke="null" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEMAAABDCAYAAADHyrhzAAAABmJLR0QA/wD/AP+gvaeTAAAJOUlEQVR4nO2be1BU1x3Hv797775gWVYE5BWDPFTwAT7jM0qr0YA2tQZTTCRqecyYmHYykxlTmymZ6aRt2qbTSW0GMOZhQgl2JkkjYpM0NElrdXx2tERIq2KsgA9E5LHL3r2nf1jW3WVf9wWZjp+/9p57zu/3vb895+y5v3MWuIsHGgunDcUNfC9ssZxBtLsZb5UkEgy82OPkDX2ua+6bTzUVOsdCl+7BqK44ZsCtq/dxxAogsXwQTQGQBcAUpIkbQDtAbYB0mhj/KUU5P/venodu6a1Vl2A0FDcYewVrIQNKATwAIFqlSRHAIcbwlsHs3Lfl9XU96lWORNNg7Ck+kODm8QMQKgGM19K2Fw4ADZCkn5W/s+YLLQ1rEozdxQfjmCA9B0IFGKK0sBkBEgHvShL7YcU7RW1aGFQVDAZGuzc2bQLDLwAkaiFIAS4Qe2XIFbXziX0FfWoMKQ5Gbcn7EwDDXgAr1QjQCgK+BMMjZfWFJ5Xa4JQ0enXj/gLAcBJfk0AAAAOyGeFQTUnTNqU2ZPeM2pKmxwC2B4BBqVPdIdr1n8lHnqqqqpJkNZNTuaak8WkC/VJuu7GAgHqb2Pf4hn0bhmS0iYyakqZtBLZLmbSxgQHv2cW+hzfs2+COpH5Ec0ZtSVMJgb2sTtroQ8C3b/LWiHWH7RnV3228jyP6DIBRlbKxhLEny+uLwvbqkMF4bfO7dtFhPAGiSdopGxOcIGlxed2a46EqhRwmotNU+38QCAAwQeLqq9d+EHJ1HDQYu0saVwN4WHNZYwUhi4vmd4auEoCXihssMYL1DIAMXYSNHUOQpPxgL3gBe4ZNsG7HKAWCN3AQTPxouAIAI+O4F4LdHNEzXtvcbBadg+cAJOulyJ5qxdRvpuGeWQmwjrcABAz0ONHR0o3WT75CV6su6YphmMSxvMq3i0773xD8C1xOx1bSKRBEhPx1GZj5rQxwvO/3EGU3IXNRMjIXJeNff72Mw2+chcsh6iKDk/AsgI3+N0YMEwKr1EUBEZaUT0P+uswRgfAna0kKHtw5F6ZovV5/aH11yQfx/qU+wajZ2JgPYKYe7meunYSspSkR1x+fbsOSiml6SAEAI8e4R/wLfYJBjB7Tw7M9JRr56+TPxxNnJ2LSgiQdFAHAyGf1Hyar9XA7vTAdnKAodYK8hzL0eUcmzH+j9GOfPK1H4Sub/pQIIFdrn4KRR8Yi5fPxuDQrEjJiNVTkgXMOue73KRj+wIvicujwHSRmx4I3KOsVw6RM0yfRTpy03Pvao5IYTdfDYdy9Ng1sxGigJAB+z3znKyNM1cOfOUb9z6MlVrfsgc8ze/ffbD28Ead+5GlhIwjJu4qbrcMX3sEYsQjRAuctl2objt6I05hyIZNhwDMheQdDl4HZfUn9fnFPR78GSoLgZp7n9g6G2s3hgHS19kByM1U2Ov7ZrZGakUgEzwzvHQx1ioPgGhTRfqxLcfv+bgc6z97QUJEvDOTJnHsHQ9U+ZSjOHLgAxpTFuuXgRUiirL0gWRh48oxj759W3Q6DXDvXi9ZPLslu191+Cy0ftuugyAs3HyAYjHXq6fPo79tkJW36ux1ofvkfquebMEhkNl4dvvAeJpqccQiG6HTjo1+dwMUTV8LWvXGxDwdfOIbergE9JQGMtW95vcAxfCncKUcr6byD6hoU8edfn8KkBUnIWTkREybbfe73XO5H218u4YsPL+rdI25DXKv35Z20H49T0G+e8uH84U6cP9wJk9UAa7wZgolH31UH+rsd4RtrinTK+8oTDN4kfioNGkQEyIvqhbPPBWef+hWqUjiJmr2vfQZGbUnjEYDm6ynAEmtCTKIF1ngzDGYBhigBHBGGBkWIQ270X3eg/7oDvVcGdFr5eBgyCXxc6d5VnuWtby8g2g8GbYNBQOqMeGQuTEJSbhyi48yRKR1w4UrbTZw/0okLR7sgOiM6VSCHZu9AAH7BILA3Geh5aJTkscZbsGzbDCRm28NX9sMYZUBafjzS8uMxa30mPq8+o+lKlBH2+pf5pKDK6oraAXyuhbPY5Gis+fF8RYHwxxpvwaodczFxtmYHCvtcLsv7/oUj8nFMg9M50ePNWPnMbFjswU5Ey4fjCQXbZyItT32mgYBXAx2THBGMy1OO/gFAq395pAgmHg88MwcxCRalJoLCCRwKtufBnqrqBdvlFt0vBbTvX1BVVSUR6KdKPS3cnKNWbEgEE49vfD8fBouyFQAD21O5b+3FQPcCpq0vTTmyFwyH5TqaUpCGrCWR75opJTY5GgtL5adsGdDLeP75YPcDBqOqqkoCJz2J2393iIiYBAvmbZwsW6BSMpekIH3eBJmt6NnKt1Z3BLsbdEOjvG7NcQL9JjIfwKKtuTCYR23xCuD2kLTYIsycM/zNLt6qDlUl5O6OOyZhB4C/h/OTvTQVKdP1+kdFcMw2I+ZsiCipf4M49mi486Ahg1FZM9cFgX8UQNAkpMEiYHZxViSCdCHr/hQkZIbcfpSIcZv+t4YKSdh9v/K9q85LjBUCCJiinrU+E1EarifkQkRYuDkHFCT/wIg9XVa/ujESWxFtglbWFx2h2+cZfF4x7alW5KyYGIkJXRmfbkP2stQR5UTsJxV1RZHNe5DxF4uy+tWNjGPfAcGTflpQOjXsKZzRYk5xFoxRdyZwYvh5WV3Rc3JsyNoer3i7aD+TpJUAutPy4pGcGyenua6YbUZML0oHADeIKsvqC3fItSH7rEBF/ZpDkuielbU0RflmiE6kz5sgGoxCYXndgzVK2ivu4we2HzBNLMo5OLkgbfnXYah0tHR3Xjh5fdnSx3MUJ7ZVP8WpP57blDoz7nfj0qzW8LW1p7/b4f7q5JXq6asynlBrS5OvtLmqWUhYmL4rLS9+izXeMip/1xoaENnl09ebu/59rWRxaV74/YcI0LR/H6s+ZjDeM+7FpClxW+PujVF/ZCcAfdcGXZ0tN5rcg+7KaUWTNN340m2wn3ivbYUt0fqjuIkx821JFlXJjcEep3j9Qu/Znsv9v807kVlLVaTLpsaozHxfftyRy0xSpdkmLI5JiMqw2I2xgpEP+EvG3IwN9Dj6+645vnL0uo47+x1v5q7I+Gg0dI7ZzwBjLEUUxWyO42a4nG4SjNwFnudbALQTkS6Hxu9yF2X8FygRuFW7xsvhAAAAAElFTkSuQmCC" height="41" width="41" y="339.5" x="37.5"/>
										<image stroke="null" id="svg_84" xlink:href="data:image/png;base64,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" height="41" width="41" y="215.83069" x="197.16931"/>
										<image id="svg_85" stroke="null" xlink:href="data:image/png;base64,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" height="41" width="41" y="89.5" x="191.5"/>
										<image id="svg_86" stroke="null" xlink:href="data:image/png;base64,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" height="41" width="41" y="79.5" x="551.5"/>
										<image stroke="null" xlink:href="data:image/png;base64,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" id="svg_87" height="47" width="37" y="336" x="771"/>
										<image id="svg_88" stroke="null" xlink:href="data:image/png;base64,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" height="47" width="37" y="328.5" x="1083.5"/>
										<image id="svg_89" stroke="null" xlink:href="data:image/png;base64,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" height="47" width="37" y="212.5" x="921.5"/>
										<image id="svg_90" stroke="null" xlink:href="data:image/png;base64,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" height="47" width="37" y="462.5" x="917.5"/>
										<image id="svg_91" stroke="null" xlink:href="data:image/png;base64,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" height="47" width="37" y="572.5" x="921.5"/>
										<image id="svg_92" stroke="null" xlink:href="data:image/png;base64,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" height="47" width="37" y="504.5" x="717.5"/>
										<image stroke="null" id="svg_93" xlink:href="data:image/png;base64,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" height="47" width="37" y="572.5" x="649.5"/>
										<image id="svg_94" stroke="null" xlink:href="data:image/png;base64,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" height="47" width="37" y="330.5" x="647.5"/>
										<image id="svg_95" stroke="null" xlink:href="data:image/png;base64,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" height="47" width="37" y="74.5" x="915.5"/>
										<image id="svg_96" stroke="null" xlink:href="data:image/png;base64,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" height="47" width="37" y="70.5" x="653.5"/>
										<image id="svg_97" stroke="null" xlink:href="data:image/png;base64,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" height="47" width="37" y="150.5" x="699.5"/>
										<g id="svg_115" transform="translate(3505.199951171875,2194.56005859375) ">
										<rect id="svg_116" height="0" width="0" y="-652.45981" x="-1342.17869" display="none" stroke-width="0.5" stroke="#22C" fill-opacity="0.15" fill="#22C"/>
										<g id="svg_117" display="inline">
											<path id="svg_118" d="m-1218.48675,-782.84842l3208.496,0l0,2080.736l-3208.496,0z" stroke-dasharray="5,5" stroke="#22C" fill="none"/>
											<g id="svg_119" display="inline">
											<circle id="svg_120" cy="-782.84842" cx="-1218.48675" pointer-events="all" stroke-width="2" style="cursor:nw-resize" r="4" fill="#22C"/>
											<circle id="svg_121" cy="-782.84842" cx="385.76125" pointer-events="all" stroke-width="2" style="cursor:n-resize" r="4" fill="#22C"/>
											<circle id="svg_122" cy="-782.84842" cx="1990.00925" pointer-events="all" stroke-width="2" style="cursor:ne-resize" r="4" fill="#22C"/>
											<circle id="svg_123" cy="257.51958" cx="1990.00925" pointer-events="all" stroke-width="2" style="cursor:e-resize" r="4" fill="#22C"/>
											<circle id="svg_124" cy="1297.88758" cx="1990.00925" pointer-events="all" stroke-width="2" style="cursor:se-resize" r="4" fill="#22C"/>
											<circle id="svg_125" cy="1297.88758" cx="385.76125" pointer-events="all" stroke-width="2" style="cursor:s-resize" r="4" fill="#22C"/>
											<circle id="svg_126" cy="1297.88758" cx="-1218.48675" pointer-events="all" stroke-width="2" style="cursor:sw-resize" r="4" fill="#22C"/>
											<circle id="svg_127" cy="257.51958" cx="-1218.48675" pointer-events="all" stroke-width="2" style="cursor:w-resize" r="4" fill="#22C"/>
											<line id="svg_128" y2="-802.84842" x2="385.76125" y1="-782.84842" x1="385.76125" stroke="#22C"/>
											<circle id="svg_129" cy="-802.84842" cx="385.76125" style="cursor:url(images/rotate.png) 12 12, auto;" stroke-width="2" stroke="#22C" r="4" fill="lime"/>
											</g>
										</g>
										<g id="svg_130">
											<circle id="svg_131" cy="-18.57737" cx="-736.95954" xlink:title="Drag node to move it. Double-click node to change segment type" cursor="move" stroke-width="2" stroke="#00F" fill="#0FF" r="0" display="none"/>
											<path id="svg_132" d="m-742.63403,-23.77352c2.51213,1.01324 4.13221,3.11628 5.67449,5.19615" stroke-width="2" stroke="#0FF" fill="none" display="none"/>
											<circle id="svg_133" cy="-11.92252" cx="-732.44767" xlink:title="Drag node to move it. Double-click node to change segment type" cursor="move" stroke-width="2" stroke="#00F" fill="#0FF" r="0" display="none"/>
											<path id="svg_134" d="m-736.95954,-18.57737c1.61874,2.18294 3.58904,4.23249 4.51187,6.65485" stroke-width="2" stroke="#0FF" fill="none" display="none"/>
											<circle id="svg_135" cy="-4.40465" cx="-729.54762" xlink:title="Drag node to move it. Double-click node to change segment type" cursor="move" stroke-width="2" stroke="#00F" fill="#0FF" r="0" display="none"/>
											<path id="svg_136" d="m-732.44767,-11.92252c0.97989,2.57221 2.17512,4.75422 2.90005,7.51787" stroke-width="2" stroke="#0FF" fill="none" display="none"/>
											<circle id="svg_137" cy="3.07889" cx="-727.45565" xlink:title="Drag node to move it. Double-click node to change segment type" cursor="move" stroke-width="2" stroke="#00F" fill="#0FF" r="0" display="none"/>
											<path id="svg_138" d="m-729.54762,-4.40465c0.67973,2.59137 1.25965,4.94639 2.09197,7.48354" stroke-width="2" stroke="#0FF" fill="none" display="none"/>
											<circle id="svg_139" cy="10.67861" cx="-725.40796" xlink:title="Drag node to move it. Double-click node to change segment type" cursor="move" stroke-width="2" stroke="#00F" fill="#0FF" r="0" display="none"/>
											<path id="svg_140" d="m-727.45565,3.07889c0.78967,2.40711 0.33923,5.34553 2.04769,7.59972" stroke-width="2" stroke="#0FF" fill="none" display="none"/>
											<circle id="svg_141" cy="17.12724" cx="-720.96028" xlink:title="Drag node to move it. Double-click node to change segment type" cursor="move" stroke-width="2" stroke="#00F" fill="#0FF" r="0" display="none"/>
											<path id="svg_142" d="m-725.40796,10.67861c1.52148,2.0076 3.12501,3.93837 4.44768,6.44863" stroke-width="2" stroke="#0FF" fill="none" display="none"/>
											<circle id="svg_143" cy="19.14693" cx="-719.3861" xlink:title="Drag node to move it. Double-click node to change segment type" cursor="move" stroke-width="2" stroke="#00F" fill="#0FF" r="0" display="none"/>
											<path id="svg_144" d="m-720.96028,17.12724l1.57418,2.01969" stroke-width="2" stroke="#0FF" fill="none" display="none"/>
											<circle id="svg_145" cy="-23.77352" cx="-742.63403" xlink:title="Drag node to move it. Double-click node to change segment type" cursor="move" stroke-width="2" stroke="#0FF" fill="#0FF" r="0" display="none"/>
											<circle id="svg_146" cy="-22.76028" cx="-740.1219" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#EEE" r="0" display="none"/>
											<circle id="svg_147" cy="-537.27711" cx="-1151.93224" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#0FF" r="0" display="none"/>
											<line id="svg_148" display="none" y2="-537.27711" x2="-1151.93224" y1="-535.27711" x1="-1151.93224" stroke="#555"/>
											<line id="svg_149" display="none" y2="-23.77352" x2="-742.63403" y1="-22.76028" x1="-740.1219" stroke="#555"/>
											<line id="svg_150" display="none" y2="-18.57737" x2="-736.95954" y1="-20.65724" x1="-738.50182" stroke="#555"/>
											<circle id="svg_151" cy="-20.65724" cx="-738.50182" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#0FF" r="0" display="none"/>
											<line id="svg_152" display="none" y2="-18.57737" x2="-736.95954" y1="-16.39443" x1="-735.3408" stroke="#555"/>
											<circle id="svg_153" cy="-16.39443" cx="-735.3408" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#EEE" r="0" display="none"/>
											<line id="svg_154" display="none" y2="-11.92252" x2="-732.44767" y1="-14.34488" x1="-733.3705" stroke="#555"/>
											<circle id="svg_155" cy="-14.34488" cx="-733.3705" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#0FF" r="0" display="none"/>
											<line id="svg_156" display="none" y2="-11.92252" x2="-732.44767" y1="-9.35031" x1="-731.46778" stroke="#555"/>
											<circle id="svg_157" cy="-9.35031" cx="-731.46778" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#EEE" r="0" display="none"/>
											<line id="svg_158" display="none" y2="-4.40465" x2="-729.54762" y1="-7.1683" x1="-730.27255" stroke="#555"/>
											<circle id="svg_159" cy="-7.1683" cx="-730.27255" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#0FF" r="0" display="none"/>
											<line id="svg_160" display="none" y2="-4.40465" x2="-729.54762" y1="-1.81328" x1="-728.86789" stroke="#555"/>
											<circle id="svg_161" cy="-1.81328" cx="-728.86789" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#EEE" r="0" display="none"/>
											<line id="svg_162" display="none" y2="3.07889" x2="-727.45565" y1="0.54174" x1="-728.28797" stroke="#555"/>
											<circle id="svg_163" cy="0.54174" cx="-728.28797" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#0FF" r="0" display="none"/>
											<line id="svg_164" display="none" y2="3.07889" x2="-727.45565" y1="5.486" x1="-726.66598" stroke="#555"/>
											<circle id="svg_165" cy="5.486" cx="-726.66598" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#EEE" r="0" display="none"/>
											<line id="svg_166" display="none" y2="10.67861" x2="-725.40796" y1="8.42442" x1="-727.11642" stroke="#555"/>
											<circle id="svg_167" cy="8.42442" cx="-727.11642" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#0FF" r="0" display="none"/>
											<line id="svg_168" display="none" y2="10.67861" x2="-725.40796" y1="12.68621" x1="-723.88648" stroke="#555"/>
											<circle id="svg_169" cy="12.68621" cx="-723.88648" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#EEE" r="0" display="none"/>
											<line id="svg_170" display="none" y2="17.12724" x2="-720.96028" y1="14.61698" x1="-722.28295" stroke="#555"/>
											<circle id="svg_171" cy="14.61698" cx="-722.28295" xlink:title="Drag control point to adjust curve properties" cursor="move" stroke="#55F" fill="#0FF" r="0" display="none"/>
											<path id="svg_172" d="m-1371.7323,-820.51709l0,0" stroke-width="2" stroke="#0FF" fill="none" display="none"/>
											<circle id="svg_173" cy="21.52083" cx="-718.67224" xlink:title="Drag node to move it. Double-click node to change segment type" cursor="move" stroke-width="2" stroke="#00F" fill="#0FF" r="0" display="none"/>
											<path id="svg_174" d="m-719.3861,19.14693l0.71386,2.3739" stroke-width="2" stroke="#0FF" fill="none" display="none"/>
										</g>
										</g>
									</g>
								</svg>
							</div>
							<div class="football-board-bottom"></div>
				</div>

			<?php
				}
			?>

			<!-- END H2H -->
			<!-- END H2H -->
			<!-- END H2H -->

			<!-- START LINEUPS -->
			<!-- START LINEUPS -->
			<!-- START LINEUPS -->

			<?php
				if ($currentTab == 'LINEUPS') {
			?>

				<div class="showData">
					<div class="titleShowData">
						<span>Lineups</span>
						<!-- <span style="margin-left: 15px;"><?php echo $infoRow->match_awayEn; ?></span> -->
					</div>

					<hr>

					<?php
					// SHOW OVERALL LINEUPS

					if (tep_num_rows($qryLineups) == 0) {
						echo '<div class="noData">No data.</div>';
					} else {
						echo '<table class="tableShowData" id="tableShowLineupBackup">
                        <thead class="thShowData">
                          <td class="col-show-standing" style="text-align: left;">
                          	<div style="display:inline; margin-right:3px;"><img src="' . $homeTeamLogo . '" style="object-fit: cover !important; height: 20px !important; width: 20px !important;"></div>
                          	<div style="display:inline; margin-right:3px;">' . $infoTeamHome->team_nameEn . '</div>
                          </td>
                          <td class="col-show-standing" style="text-align: left;">
                          	<div style="display:inline; margin-right:3px;"><img src="' . $awayTeamLogo . '" style="object-fit: cover !important; height: 20px !important; width: 20px !important;"></div>
                          	<div>' . $infoTeamAway->team_nameEn . '</div>
                          </td>
                        </thead>';

						$countBackupHome = 0;
						$countBackupAway = 0;

						while ($infoLineups = tep_fetch_object($qryLineups)) {
							$qryOverallLineup = tep_query("SELECT * FROM nano_football_lineups WHERE matchid = '" . $infoRow->match_code . "' AND (lineups_type = 'HOME_LINEUP' OR lineups_type = 'AWAY_LINEUP' OR lineups_type = 'AWAY_BACKUP' OR lineups_type = 'HOME_BACKUP') AND lineups_insert_datetime = '" . $infoLineups->lineups_insert_datetime . "'");

							while ($infoOverallLineup = tep_fetch_object($qryOverallLineup)) {
								$divShowStat = "";

								// GET PLAYER INFO

								$infoPlayer = tep_fetch_object(tep_query("SELECT * FROM nano_football_player_info WHERE player_playerId = '" . $infoOverallLineup->playerId . "'"));

								// GET PLAYER RATING

								$infoStatisticPlayer = tep_fetch_object(tep_query("SELECT * FROM nano_football_player_statistic_match WHERE playerId = '" . $infoOverallLineup->playerId . "' AND matchId = '" . $infoRow->match_code . "'"));

								// REPLACE MATCH TEMPERATURE CHARACTER

								$infoRow->match_temp = str_replace("??", "-", $infoRow->match_temp);

								// GET PLAYER STATS

								$qryPlayerTechnicalStat = tep_query("SELECT * FROM nano_football_technical_statistic WHERE statistic_matchId = '" . $infoRow->match_code . "' AND (statistic_playerId = '" . $infoOverallLineup->playerId . "' OR statistic_playerId2 = '" . $infoOverallLineup->playerId . "') ");

								// CHECK THE PLAYER IS IT GOAL OR ASSIST

								while ($infoPlayerTechnicalStat = tep_fetch_object($qryPlayerTechnicalStat)) {
									if ($infoPlayerTechnicalStat->statistic_kind == 'Goal') {
										if ($infoPlayerTechnicalStat->statistic_playerId == $infoOverallLineup->playerId) {
											$infoPlayerTechnicalStat->statistic_kind = 'Goal';
										} else if ($infoPlayerTechnicalStat->statistic_playerId2 == $infoOverallLineup->playerId) {
											$infoPlayerTechnicalStat->statistic_kind = 'Assist';
										}
									}

									// SHOW OUT THE KIND ICON

									if ($infoPlayerTechnicalStat->statistic_kind == 'Sub') {
										$kindIcon = "includes/images/substitution.png";
									} else if ($infoPlayerTechnicalStat->statistic_kind == 'Yellow card') {
										$kindIcon = "includes/images/yellowcard.png";
									} else if ($infoPlayerTechnicalStat->statistic_kind == 'Goal') {
										$kindIcon = "includes/images/goals.png";
									} else if ($infoPlayerTechnicalStat->statistic_kind == 'Own goal') {
										$kindIcon = "includes/images/owngoal.png";
									} else if ($infoPlayerTechnicalStat->statistic_kind == 'Red card') {
										$kindIcon = "includes/images/redcard.png";
									} else if ($infoPlayerTechnicalStat->statistic_kind == 'Second Yellow Card') {
										$kindIcon = "includes/images/secondyellow.jpg";
									} else if ($infoPlayerTechnicalStat->statistic_kind == 'Assist') {
										$kindIcon = "includes/images/assist.png";
									} else {
										$kindIcon = "";
									}

									$divShowStat .= '<div style="display:inline; margin-right:3px;"><img src=' . $kindIcon . ' style="object-fit: cover !important; height: 20px !important; width: 20px !important;"></div>';
								}

								// HOME LINEUPS

								if ($infoOverallLineup->lineups_type == 'HOME_LINEUP') {
									$infoLineup = tep_fetch_object(tep_query("SELECT MAX(positionId) AS positionId FROM nano_football_lineups WHERE matchId = '" . $infoOverallLineup->matchId . "' AND lineups_type = 'HOME_LINEUP'"));

									// HOME FORMATION

									// 0: Goalkeeper, 
									// 1: Defender, 
									// 2: Midfielder, 
									// 3: Forward

									if ($infoLineup->positionId == 3) {
										if ($infoOverallLineup->positionId == 0) {
											$position = "Goalkeeper";
										}
										if ($infoOverallLineup->positionId == 1) {
											$position = "Defender";
										}
										if ($infoOverallLineup->positionId == 2) {
											$position = "Midfielder";
										}
										if ($infoOverallLineup->positionId == 3) {
											$position = "Forward";
										}
									}

									// 4 columns:
									// 0: goalkeeper, 
									// 1: defender, 
									// 2: defensive midfielder, 
									// 3: offensive midfielder, 
									// 4: forward

									if ($infoLineup->positionId == 4) {
										if ($infoOverallLineup->positionId == 0) {
											$position = "Goalkeeper";
										}
										if ($infoOverallLineup->positionId == 1) {
											$position = "Defender";
										}
										if ($infoOverallLineup->positionId == 2) {
											$position = "Defensive Midfielder";
										}
										if ($infoOverallLineup->positionId == 3) {
											$position = "Offensive Midfielder";
										}
										if ($infoOverallLineup->positionId == 4) {
											$position = "Forward";
										}
									}

									// 5 columns:
									// 0: Goalkeeper, 
									// 1: Defender, 
									// 2: defensive midfielder,
									// 3: Midfielder, 
									// 4: offensive midfielder,
									// 5: Forward

									if ($infoLineup->positionId == 5) {
										if ($infoOverallLineup->positionId == 0) {
											$position = "Goalkeeper";
										}
										if ($infoOverallLineup->positionId == 1) {
											$position = "Defender";
										}
										if ($infoOverallLineup->positionId == 2) {
											$position = "Defensive Midfielder";
										}
										if ($infoOverallLineup->positionId == 3) {
											$position = "Midfielder";
										}
										if ($infoOverallLineup->positionId == 4) {
											$position = "Offensive Midfielder";
										}
										if ($infoOverallLineup->positionId == 5) {
											$position = "Forward";
										}
									}

									// Some matches have no specific lineup positions, and all return 0.

									if ($infoLineup->positionId == 0) {
										$position = "";
									}

									// GET PLAYER PHOTO

									$infoPlayer2 = tep_fetch_object(tep_query("SELECT * FROM nano_football_player_info WHERE player_playerId = '" . $infoOverallLineup->playerId . "'"));

									if ($infoPlayer2->player_photo2 == "") {
										$playerLogo = "includes/images/football/general/lineups-user-icon.png";
									} else {
										$playerLogo = "includes/images/football/team/player/" . $infoPlayer2->player_photo2;
									}

									// echo '
									// 	<div=""></div>
									// ';
								}

								// AWAY LINEUPS

								else if ($infoOverallLineup->lineups_type == 'AWAY_LINEUP') {
									$infoLineup = tep_fetch_object(tep_query("SELECT MAX(positionId) AS positionId FROM nano_football_lineups WHERE matchId = '" . $infoOverallLineup->matchId . "' AND lineups_type = 'AWAY_LINEUP'"));

									// HOME FORMATION

									// 0: Goalkeeper, 
									// 1: Defender, 
									// 2: Midfielder, 
									// 3: Forward

									if ($infoLineup->positionId == 3) {
										if ($infoOverallLineup->positionId == 0) {
											$position = "Goalkeeper";
										}
										if ($infoOverallLineup->positionId == 1) {
											$position = "Defender";
										}
										if ($infoOverallLineup->positionId == 2) {
											$position = "Midfielder";
										}
										if ($infoOverallLineup->positionId == 3) {
											$position = "Forward";
										}
									}

									// 4 columns:
									// 0: goalkeeper, 
									// 1: defender, 
									// 2: defensive midfielder, 
									// 3: offensive midfielder, 
									// 4: forward

									if ($infoLineup->positionId == 4) {
										if ($infoOverallLineup->positionId == 0) {
											$position = "Goalkeeper";
										}
										if ($infoOverallLineup->positionId == 1) {
											$position = "Defender";
										}
										if ($infoOverallLineup->positionId == 2) {
											$position = "Defensive Midfielder";
										}
										if ($infoOverallLineup->positionId == 3) {
											$position = "Offensive Midfielder";
										}
										if ($infoOverallLineup->positionId == 4) {
											$position = "Forward";
										}
									}

									// 5 columns:
									// 0: Goalkeeper, 
									// 1: Defender, 
									// 2: defensive midfielder,
									// 3: Midfielder, 
									// 4: offensive midfielder,
									// 5: Forward

									if ($infoLineup->positionId == 5) {
										if ($infoOverallLineup->positionId == 0) {
											$position = "Goalkeeper";
										}
										if ($infoOverallLineup->positionId == 1) {
											$position = "Defender";
										}
										if ($infoOverallLineup->positionId == 2) {
											$position = "Defensive Midfielder";
										}
										if ($infoOverallLineup->positionId == 3) {
											$position = "Midfielder";
										}
										if ($infoOverallLineup->positionId == 4) {
											$position = "Offensive Midfielder";
										}
										if ($infoOverallLineup->positionId == 5) {
											$position = "Forward";
										}
									}

									// Some matches have no specific lineup positions, and all return 0.

									if ($infoLineup->positionId == 0) {
										$position = "";
									}

									// GET PLAYER PHOTO

									$infoPlayer2 = tep_fetch_object(tep_query("SELECT * FROM nano_football_player_info WHERE player_playerId = '" . $infoOverallLineup->playerId . "'"));

									if ($infoPlayer2->player_photo2 == "") {
										$playerLogo = "includes/images/football/general/lineups-user-icon.png";
									} else {
										$playerLogo = "includes/images/football/team/player/" . $infoPlayer2->player_photo2;
									}
								}

								// HOME BACKUPS

								else if ($infoOverallLineup->lineups_type == 'HOME_BACKUP') {
									$countBackupHome++;

									// echo "home backup : " . $countBackupHome . "<br>";

									$infoLineup = tep_fetch_object(tep_query("SELECT MAX(positionId) AS positionId FROM nano_football_lineups WHERE matchId = '" . $infoOverallLineup->matchId . "' AND lineups_type = 'HOME_BACKUP'"));

									// HOME FORMATION

									// 0: Goalkeeper, 
									// 1: Defender, 
									// 2: Midfielder, 
									// 3: Forward

									if ($infoLineup->positionId == 3) {
										if ($infoOverallLineup->positionId == 0) {
											$position = "Goalkeeper";
										}
										if ($infoOverallLineup->positionId == 1) {
											$position = "Defender";
										}
										if ($infoOverallLineup->positionId == 2) {
											$position = "Midfielder";
										}
										if ($infoOverallLineup->positionId == 3) {
											$position = "Forward";
										}
									}

									// 4 columns:
									// 0: goalkeeper, 
									// 1: defender, 
									// 2: defensive midfielder, 
									// 3: offensive midfielder, 
									// 4: forward

									if ($infoLineup->positionId == 4) {
										if ($infoOverallLineup->positionId == 0) {
											$position = "Goalkeeper";
										}
										if ($infoOverallLineup->positionId == 1) {
											$position = "Defender";
										}
										if ($infoOverallLineup->positionId == 2) {
											$position = "Defensive Midfielder";
										}
										if ($infoOverallLineup->positionId == 3) {
											$position = "Offensive Midfielder";
										}
										if ($infoOverallLineup->positionId == 4) {
											$position = "Forward";
										}
									}

									// 5 columns:
									// 0: Goalkeeper, 
									// 1: Defender, 
									// 2: defensive midfielder,
									// 3: Midfielder, 
									// 4: offensive midfielder,
									// 5: Forward

									if ($infoLineup->positionId == 5) {
										if ($infoOverallLineup->positionId == 0) {
											$position = "Goalkeeper";
										}
										if ($infoOverallLineup->positionId == 1) {
											$position = "Defender";
										}
										if ($infoOverallLineup->positionId == 2) {
											$position = "Defensive Midfielder";
										}
										if ($infoOverallLineup->positionId == 3) {
											$position = "Midfielder";
										}
										if ($infoOverallLineup->positionId == 4) {
											$position = "Offensive Midfielder";
										}
										if ($infoOverallLineup->positionId == 5) {
											$position = "Forward";
										}
									}

									// Some matches have no specific lineup positions, and all return 0.

									if ($infoLineup->positionId == 0) {
										$position = "";
									}

									// GET PLAYER PHOTO

									$infoPlayer2 = tep_fetch_object(tep_query("SELECT * FROM nano_football_player_info WHERE player_playerId = '" . $infoOverallLineup->playerId . "'"));

									if ($infoPlayer2->player_photo2 == "") {
										$playerLogo = "includes/images/football/general/lineups-user-icon.png";
									} else {
										$playerLogo = "includes/images/football/team/player/" . $infoPlayer2->player_photo2;
									}

									$playerBackupHome = $infoOverallLineup->nameEn;

									echo '<tr>
	                                <td class="col-show-standing" style="text-align: left;">
	                                	<div class="row">
	                                		<div class="col-sm-1">' . $infoOverallLineup->number . '</div>
	                                		<div class="col-sm-1"><img src="' . $playerLogo . '" style="border-radius: 50% !important; object-fit: cover !important; height: 28px !important; width: 28px !important;"></div>
	                                		<div class="col-sm-4">' . $infoOverallLineup->nameEn . '</div>
	                                		<div class="col-sm-6">' . $divShowStat . '</div>
	                                	</div>
	                                <td class="col-show-standing" id="col-show-lineups-backup' . $countBackupHome . '" style="text-align: left;"></td>
	                                <td>
	                              </tr>';
								}

								// AWAY BACKUPS

								else if ($infoOverallLineup->lineups_type == 'AWAY_BACKUP') {
									$countBackupAway++;

									$infoLineup = tep_fetch_object(tep_query("SELECT MAX(positionId) AS positionId FROM nano_football_lineups WHERE matchId = '" . $infoOverallLineup->matchId . "' AND lineups_type = 'AWAY_BACKUP'"));

									// HOME FORMATION

									// 0: Goalkeeper, 
									// 1: Defender, 
									// 2: Midfielder, 
									// 3: Forward

									if ($infoLineup->positionId == 3) {
										if ($infoOverallLineup->positionId == 0) {
											$position = "Goalkeeper";
										}
										if ($infoOverallLineup->positionId == 1) {
											$position = "Defender";
										}
										if ($infoOverallLineup->positionId == 2) {
											$position = "Midfielder";
										}
										if ($infoOverallLineup->positionId == 3) {
											$position = "Forward";
										}
									}

									// 4 columns:
									// 0: goalkeeper, 
									// 1: defender, 
									// 2: defensive midfielder, 
									// 3: offensive midfielder, 
									// 4: forward

									if ($infoLineup->positionId == 4) {
										if ($infoOverallLineup->positionId == 0) {
											$position = "Goalkeeper";
										}
										if ($infoOverallLineup->positionId == 1) {
											$position = "Defender";
										}
										if ($infoOverallLineup->positionId == 2) {
											$position = "Defensive Midfielder";
										}
										if ($infoOverallLineup->positionId == 3) {
											$position = "Offensive Midfielder";
										}
										if ($infoOverallLineup->positionId == 4) {
											$position = "Forward";
										}
									}

									// 5 columns:
									// 0: Goalkeeper, 
									// 1: Defender, 
									// 2: defensive midfielder,
									// 3: Midfielder, 
									// 4: offensive midfielder,
									// 5: Forward

									if ($infoLineup->positionId == 5) {
										if ($infoOverallLineup->positionId == 0) {
											$position = "Goalkeeper";
										}
										if ($infoOverallLineup->positionId == 1) {
											$position = "Defender";
										}
										if ($infoOverallLineup->positionId == 2) {
											$position = "Defensive Midfielder";
										}
										if ($infoOverallLineup->positionId == 3) {
											$position = "Midfielder";
										}
										if ($infoOverallLineup->positionId == 4) {
											$position = "Offensive Midfielder";
										}
										if ($infoOverallLineup->positionId == 5) {
											$position = "Forward";
										}
									}

									// Some matches have no specific lineup positions, and all return 0.

									if ($infoLineup->positionId == 0) {
										$position = "";
									}

									// GET PLAYER PHOTO

									$infoPlayer2 = tep_fetch_object(tep_query("SELECT * FROM nano_football_player_info WHERE player_playerId = '" . $infoOverallLineup->playerId . "'"));

									if ($infoPlayer2->player_photo2 == "") {
										$playerLogo = "includes/images/football/general/lineups-user-icon.png";
									} else {
										$playerLogo = "includes/images/football/team/player/" . $infoPlayer2->player_photo2;
									}

									$playerBackupAway = $infoOverallLineup->nameEn;

									$awayRow = '<div class="row">
	                                		<div class="col-sm-1">' . $infoOverallLineup->number . '</div>
	                                		<div class="col-sm-1"><img src="' . $playerLogo . '" style="border-radius: 50% !important; object-fit: cover !important; height: 28px !important; width: 28px !important;"></div>
	                                		<div class="col-sm-2">' . $infoOverallLineup->nameEn . '</div>
	                                		<div class="col-sm-6">' . $divShowStat . '</div>
	                                	</div>';
					?>
									<script>
										$('#col-show-lineups-backup<?php echo $countBackupAway; ?>').html('<div class="row"><div class="col-sm-1"><?php echo $infoOverallLineup->number; ?></div><div class="col-sm-1"><img src="<?php echo $playerLogo; ?>" style="border-radius: 50% !important; object-fit: cover !important; height: 28px !important; width: 28px !important;"></div><div class="col-sm-4"><?php echo $infoOverallLineup->nameEn; ?></div><div class="col-sm-6"><?php echo $divShowStat; ?></div></div>');
									</script>
					<?php
								}
							}
						}
						echo "</table>";
					}
					?>
				</div>

				
					 
				

			<?php
				}
			?>

			<script>

			</script>

			<!-- END LINEUPS -->
			<!-- END LINEUPS -->
			<!-- END LINEUPS -->
			
			

			</div> <!-- details_container-->



	</div> <!-- panel_details-->