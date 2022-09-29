<?php 
	include "includes/mvc-controller/football-live.php"; 

	// FOR RETRIEVE LIVE STREAM - FETCH FROM API
    // FOR RETRIEVE LIVE STREAM - FETCH FROM API
    // FOR RETRIEVE LIVE STREAM - FETCH FROM API

    include('includes/api/football-api.php');

    // CHECK TEAM LOGO IS IT HAVE BLANK
    if($infoTeamHome->team_logo2 == "")
    {
    	$homeTeamLogo = "includes/mvc-theme/$layout/$infoOrganization->organization_domain/images/team-no-logo.svg";
    }
    else
    {
    	$homeTeamLogo = "includes/images/football/team/logo/" . $infoTeamHome->team_logo2;
    }

    if($infoTeamAway->team_logo2 == "")
    {
    	$awayTeamLogo = "includes/mvc-theme/$layout/$infoOrganization->organization_domain/images/team-no-logo.svg";
    }
    else
    {
    	$awayTeamLogo = "includes/images/football/team/logo/" . $infoTeamAway->team_logo2;
    }

    $infoRow->match_leagueId = 13014; // FOR JY TESTING ONLY
?>

	<style>
		.football_detail_header .league_time{
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

		.football_detail_header{
			background: #fff;
			min-height: 207px;
			padding: 31px 0 0 0;
		}

		/* new */
		.football_detail_header .comp{
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
		.live-streaming .live-title{
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
		.live-streaming .video-wrap{
			height: 3.380208rem;
			width: 100%;
			height: 470px;
			overflow: hidden;
			position: relative;
		}
		.live-streaming .video-wrap .component-mask{
			display: flex;
			justify-content: space-around;
			position: absolute;
			width: 75%;
			height: 50%;
			left: 50%;
			top: 50%;
			transform: translate(-50%, -50%);
			color: #fff;
			background-color: rgba(5,25,7,0.6);
		}
		.live-streaming .video-wrap .component-mask .component-item{
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
		.live-streaming .video-wrap .component-mask .component-item .itemlogo{
			display: flex;
			height: 50%;
			-webkit-box-pack: center;
			justify-content: center;
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
			flex-direction: column;
		}
		.live-streaming .video-wrap .component-mask .component-score{
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
		.live-streaming .video-wrap .component-mask .component-score .match-score{
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
		.live-streaming .video-wrap .component-mask .component-score .match-status{
			display: flex;
			-webkit-box-pack: center;
			justify-content: center;
			-webkit-box-orient: vertical;
			-webkit-box-direction: normal;
			flex-direction: column;
			width: 80%;
			height: 60px;
		}
		.live-streaming .video-wrap .component-mask .component-score .status-text{
			position: relative;
			-webkit-box-align: center;
			align-items: center;
			-webkit-box-pack: center;
			justify-content: center;
			width: 100%;
			background-color: rgba(5,25,7,0.6);
			text-align: center;
			padding: 10px;
			height: 40px;
		}
		.live-streaming .video-wrap .component-mask .component-score .status-text:before{
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
		.live-streaming .video-wrap .component-mask .component-item .teamname{
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
	        width:  100%;
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
			margin-bottom:10px;
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

      	.showData{
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
			<div class="league_time"> <?=$infoRow->match_leagueEn?> <?=$infoRow->match_time?> 
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
					<a href="football-team?teamid=<?php echo createToken($infoRow->match_homeId);?>" target="_blank">
						<div class="comp1">
							<div class="comp1new"> <?=$infoRow->match_homeEn?> </div>
						</div>
					</a>
					<div class="comp2">
						<img src="<?php echo $homeTeamLogo; ?>" alt="">
					</div>
					<div class="comp3"><?=$infoRow->match_homeScore?></div>
				</div>
				<div class="comp4">
					<p class="m_d_matchProgressTime blinktime_livetab"></p>
					<p class="m_d_status"><?=$infoRow->match_status?></p>
					<b class="m_d_allstatus">( HT <?=$infoRow->match_homeHalfScore?> : <?=$infoRow->match_awayHalfScore?> )</b>
				</div>
				<div class="comp-flex comp-flex2">
					<div class="comp5"><?=$infoRow->match_awayScore?></div>
					<div class="comp6">
						<img src="<?php echo $awayTeamLogo; ?>" alt="">
					</div>
					<a href="football-team?teamid=<?php echo createToken($infoRow->match_awayId);?>" target="_blank">
						<div class="comp7">
							<div class="comp1new"> <?=$infoRow->match_awayEn?> </div>
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

			$qryLineups = tep_query("SELECT * FROM nano_football_lineups WHERE matchId = '".$infoRow->match_code."' ORDER BY lineups_insert_datetime DESC LIMIT 0,1 ");

			if(tep_num_rows($qryLineups) >= 1)
			{
				$tab = '<span ><a href="football-live?tab=LINEUPS&id='.createToken($infoRow->match_id).'">Lineups</a></span>';
			}
			else
			{
				$tab = "";
			}

			$currentTab = (isset($_GET['tab']) && $_GET['tab']!='') ? $_GET['tab'] : 'LIVE';
			
			$strTab = ''.$tab.'
			<span ><a href="football-live?tab=H2H&id='.createToken($infoRow->match_id).'">H2H</a></span>
			<span ><a href="football-live?tab=STANDING&id='.createToken($infoRow->match_id).'">Standing</a></span>
			<span ><a href="football-live?tab=LIVE&id='.createToken($infoRow->match_id).'">Live</a></span>
			';

			echo str_replace("?tab=".$currentTab."\">", "?tab=".$currentTab."\" class=\"tabSelected\">", $strTab);
            ?>
        </div>

        <div class="details_container">

       	<!-- START LIVE TAB -->
       	<!-- START LIVE TAB -->
       	<!-- START LIVE TAB -->

        <?php
    	if($currentTab == 'LIVE')
    	{
        ?>
            <div class="details_left">
				<?php

				// CHECK IS IT HAVE LIVESTREAM
				// YES - SHOW IFRAME
				// NO - SHOW RESULT

				if($infoRow->NowPlaying == 1) //HAVE LIVE STREAM
            	{
					$live = LSGLiveLink($infoRow->Channel);
				?>

				<iframe src="<?php echo $live->H5LINKROW; ?>" height = "500" width = "800"></iframe>

				<?php
				}else{ // NO LIVESTREAM
					?>
                <div class="live-streaming">
                  <center>
                      <!-- Title -->
                      <div class="live-title">
                        <i></i>
                        <span><?=$infoRow->league_nameEn?></span>
                        <span><?=date("Y-m-d H:i:s", strtotime($infoRow->match_time))?></span>
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
                              <div class="match-score"><?php echo $infoRow->match_homeScore . " - " . $infoRow->match_awayScore;?></div>
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
									    $qryTechnicalStatistic = tep_query("SELECT * FROM nano_football_technical_statistic WHERE statistic_matchId = '".tep_input($infoRow->match_code)."' ORDER BY statistic_time DESC");

										while($infoTechnicalStatistic = tep_fetch_object($qryTechnicalStatistic))
										{

											if ($infoTechnicalStatistic->statistic_isHome == 1)
											{
												$isHome = "Home";
												$side = "Left";
											}
											else
											{
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



						<div class="assists"><p>Figure Legends:</p> <ul><li><img src="https://www.a8livetv.com/themes/a8livetv/image/goals.png" alt="">Goal</li> <li><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyNC4xLjMsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCAxNTAgMTUwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAxNTAgMTUwOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPg0KCS5zdDB7ZmlsbDojODZCRTU3O30NCgkuc3Qxe2ZpbGw6IzFFQkJFODt9DQoJLnN0MntmaWxsOiNGMkFGMUM7fQ0KCS5zdDN7ZmlsbDojRUQzMzI3O30NCgkuc3Q0e2ZpbGw6I0VDMzYyNzt9DQoJLnN0NXtmaWxsOiM2OUQxNzM7fQ0KCS5zdDZ7ZmlsbDojRkZGRkZGO30NCgkuc3Q3e2ZpbGw6I0VCRUFFQzt9DQoJLnN0OHtmaWxsOiNEQUQ5REQ7fQ0KCS5zdDl7ZmlsbDojRkY1MjUyO30NCgkuc3QxMHtmaWxsOiNGNDQwNDA7fQ0KCS5zdDExe2ZpbGw6bm9uZTtzdHJva2U6IzNFQjg2MjtzdHJva2Utd2lkdGg6NjtzdHJva2UtbWl0ZXJsaW1pdDoxMDt9DQoJLnN0MTJ7ZmlsbDojM0NCNzZFO30NCgkuc3QxM3tmaWxsOm5vbmU7c3Ryb2tlOiNGRjNFMzE7c3Ryb2tlLXdpZHRoOjY7c3Ryb2tlLW1pdGVybGltaXQ6MTA7fQ0KCS5zdDE0e2ZpbGw6I0ZGM0UzMTt9DQoJLnN0MTV7ZmlsbDojRjQzNjE2O30NCjwvc3R5bGU+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggY2xhc3M9InN0MTUiIGQ9Ik03NSwyLjc3QzM1LjE2LDIuNzcsMi43NywzNS4xNiwyLjc3LDc1UzM1LjE2LDE0Ny4yMyw3NSwxNDcuMjNzNzIuMjMtMzIuMzksNzIuMjMtNzIuMjMNCgkJCVMxMTQuODQsMi43Nyw3NSwyLjc3eiBNNzkuNiwyNi4yNWwxOC41Ni05Ljk5YzEwLjI3LDQuMDYsMTkuMjcsMTAuNzUsMjYuMDcsMTkuMjRsLTQuNDMsMjAuNDNsLTE0LjE2LDYuOTRMNzkuNTcsNDMuODhWMjYuMjUNCgkJCUg3OS42eiBNNTIuMDEsMTYuMmwxOC41NiwxMC4wMnYxNy42M0w0NC41Myw2Mi44NEwzMC4yOCw1NS45bC00LjQzLTIwLjU0QzMyLjcxLDI2Ljg3LDQxLjcxLDIwLjI0LDUyLjAxLDE2LjJ6IE0yMi45MiwxMTAuNjkNCgkJCWMtNS45LTguNTgtOS43My0xOC42NS0xMC43OC0yOS41N2wxNS4yOS0xNi41OWwxMy45NCw2LjgzbDEwLjUsMjkuODJsLTguODksMTAuNjRMMjIuOTIsMTEwLjY5eiBNOTEuMTEsMTM2LjA1DQoJCQljLTUuMTYsMS4zNS0xMC41MiwyLjE0LTE2LjExLDIuMTRjLTYuNzQsMC0xMy4yLTEuMDctMTkuMy0zLjA1bC01LjY3LTE3LjY5bDkuMDYtMTAuODlIOTFsOC44OSwxMC41Mkw5MS4xMSwxMzYuMDV6DQoJCQkgTTEwNi45MSwxMTEuNTFsLTguNzItMTAuMzNsMTAuNjQtMjkuODJsMTMuODgtNi44bDE1LjIxLDE2LjU5Yy0wLjksOS40LTMuOTUsMTguMTctOC41MiwyNS45M0wxMDYuOTEsMTExLjUxeiIvPg0KCTwvZz4NCjwvZz4NCjwvc3ZnPg0K" alt="">OwnGoal</li> <li><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyNC4xLjMsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCAxNTAgMTUwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAxNTAgMTUwOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPg0KCS5zdDB7ZmlsbDojMTliYmU4O30NCjwvc3R5bGU+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggY2xhc3M9InN0MCIgZD0iTTc1LDIuNzdDMzUuMTYsMi43NywyLjc3LDM1LjE2LDIuNzcsNzVTMzUuMTYsMTQ3LjIzLDc1LDE0Ny4yM3M3Mi4yMy0zMi4zOSw3Mi4yMy03Mi4yM1MxMTQuODQsMi43Nyw3NSwyLjc3DQoJCQl6IE03OS42LDI2LjI1bDE4LjU2LTkuOTljMTAuMjcsNC4wNiwxOS4yNywxMC43NSwyNi4wNywxOS4yNGwtNC40MywyMC40M2wtMTQuMTYsNi45NEw3OS41Nyw0My44OFYyNi4yNUg3OS42eiBNNTIuMDEsMTYuMg0KCQkJbDE4LjU2LDEwLjAydjE3LjYzTDQ0LjUzLDYyLjg0TDMwLjI4LDU1LjlsLTQuNDMtMjAuNTRDMzIuNzEsMjYuODcsNDEuNzEsMjAuMjQsNTIuMDEsMTYuMnogTTIyLjkyLDExMC42OQ0KCQkJYy01LjktOC41OC05LjczLTE4LjY1LTEwLjc4LTI5LjU3bDE1LjI5LTE2LjU5bDEzLjk0LDYuODNsMTAuNSwyOS44MmwtOC44OSwxMC42NEwyMi45MiwxMTAuNjl6IE05MS4xMSwxMzYuMDUNCgkJCWMtNS4xNiwxLjM1LTEwLjUyLDIuMTQtMTYuMTEsMi4xNGMtNi43NCwwLTEzLjItMS4wNy0xOS4zLTMuMDVsLTUuNjctMTcuNjlsOS4wNi0xMC44OUg5MWw4Ljg5LDEwLjUyTDkxLjExLDEzNi4wNXoNCgkJCSBNMTA2LjkxLDExMS41MWwtOC43Mi0xMC4zM2wxMC42NC0yOS44MmwxMy44OC02LjhsMTUuMjEsMTYuNTljLTAuOSw5LjQtMy45NSwxOC4xNy04LjUyLDI1LjkzTDEwNi45MSwxMTEuNTF6Ii8+DQoJPC9nPg0KPC9nPg0KPC9zdmc+DQo=" alt="">Penalty</li> <li><img src="data:image/svg+xml;base64,PHN2ZyBpZD0iU3ZnanNTdmcxMDMxIiB3aWR0aD0iMjg4IiBoZWlnaHQ9IjI4OCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4bWxuczpzdmdqcz0iaHR0cDovL3N2Z2pzLmNvbS9zdmdqcyI+PGRlZnMgaWQ9IlN2Z2pzRGVmczEwMzIiPjwvZGVmcz48ZyBpZD0iU3ZnanNHMTAzMyI+PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDE1MCAxNTAiIHZpZXdCb3g9IjAgMCAxNTAgMTUwIiB3aWR0aD0iMjg4IiBoZWlnaHQ9IjI4OCI+PHBhdGggZmlsbD0iIzE5YmJlOCIgZD0iTTc1LDIuNzdDMzUuMTYsMi43NywyLjc3LDM1LjE2LDIuNzcsNzVTMzUuMTYsMTQ3LjIzLDc1LDE0Ny4yM3M3Mi4yMy0zMi4zOSw3Mi4yMy03Mi4yM1MxMTQuODQsMi43Nyw3NSwyLjc3CgkJCXogTTc5LjYsMjYuMjVsMTguNTYtOS45OWMxMC4yNyw0LjA2LDE5LjI3LDEwLjc1LDI2LjA3LDE5LjI0bC00LjQzLDIwLjQzbC0xNC4xNiw2Ljk0TDc5LjU3LDQzLjg4VjI2LjI1SDc5LjZ6IE01Mi4wMSwxNi4yCgkJCWwxOC41NiwxMC4wMnYxNy42M0w0NC41Myw2Mi44NEwzMC4yOCw1NS45bC00LjQzLTIwLjU0QzMyLjcxLDI2Ljg3LDQxLjcxLDIwLjI0LDUyLjAxLDE2LjJ6IE0yMi45MiwxMTAuNjkKCQkJYy01LjktOC41OC05LjczLTE4LjY1LTEwLjc4LTI5LjU3bDE1LjI5LTE2LjU5bDEzLjk0LDYuODNsMTAuNSwyOS44MmwtOC44OSwxMC42NEwyMi45MiwxMTAuNjl6IE05MS4xMSwxMzYuMDUKCQkJYy01LjE2LDEuMzUtMTAuNTIsMi4xNC0xNi4xMSwyLjE0Yy02Ljc0LDAtMTMuMi0xLjA3LTE5LjMtMy4wNWwtNS42Ny0xNy42OWw5LjA2LTEwLjg5SDkxbDguODksMTAuNTJMOTEuMTEsMTM2LjA1egoJCQkgTTEwNi45MSwxMTEuNTFsLTguNzItMTAuMzNsMTAuNjQtMjkuODJsMTMuODgtNi44bDE1LjIxLDE2LjU5Yy0wLjksOS40LTMuOTUsMTguMTctOC41MiwyNS45M0wxMDYuOTEsMTExLjUxeiIgY2xhc3M9ImNvbG9yNGNiNzQ4IHN2Z1NoYXBlIj48L3BhdGg+PHBhdGggZmlsbD0iI2RmMjcyNiIgZD0iTTM3LjA0LDExNS41OUwzNy4wNCwxMTUuNTljLTMuODQtMy44NC0zLjg0LTEwLjA1LDAtMTMuODZMOTkuMSwzOS42N2MzLjg0LTMuODQsMTAuMDUtMy44NCwxMy44NiwwbDAsMAoJYzMuODQsMy44NCwzLjg0LDEwLjA1LDAsMTMuODZMNTAuOSwxMTUuNTlDNDcuMDgsMTE5LjQ0LDQwLjg4LDExOS40NCwzNy4wNCwxMTUuNTl6IiBjbGFzcz0iY29sb3JkZjI3MjYgc3ZnU2hhcGUiPjwvcGF0aD48cGF0aCBmaWxsPSIjZGYyNzI2IiBkPSJNMTEyLjk2LDExNS41OUwxMTIuOTYsMTE1LjU5Yy0zLjg0LDMuODQtMTAuMDUsMy44NC0xMy44NiwwTDM3LjA0LDUzLjUzYy0zLjg0LTMuODQtMy44NC0xMC4wNSwwLTEzLjg2bDAsMAoJYzMuODQtMy44NCwxMC4wNS0zLjg0LDEzLjg2LDBsNjIuMDYsNjIuMDZDMTE2LjgxLDEwNS41NCwxMTYuODEsMTExLjc4LDExMi45NiwxMTUuNTl6IiBjbGFzcz0iY29sb3JkZjI3MjYgc3ZnU2hhcGUiPjwvcGF0aD48L3N2Zz48L2c+PC9zdmc+" alt="">Penalty Missed</li> <li><img src="https://www.a8livetv.com/themes/a8livetv/image/assist.png" alt="">Assists</li> <li><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyMS4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCAxMDAgMTQ2IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAxMDAgMTQ2OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPg0KCS5zdDB7ZmlsbDojRjRCMTFFO30NCjwvc3R5bGU+DQo8cGF0aCBjbGFzcz0ic3QwIiBkPSJNODAuNSwxNDQuOEgxOS42Yy04LjcsMC0xNS43LTcuMS0xNS43LTE1LjdWMTdjMC04LjcsNy4xLTE1LjcsMTUuNy0xNS43aDYwLjljOC43LDAsMTUuNyw3LjEsMTUuNywxNS43djExMg0KCUM5Ni4yLDEzNy43LDg5LjEsMTQ0LjgsODAuNSwxNDQuOHoiLz4NCjwvc3ZnPg0K" alt="">Yellow card</li> <li><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyMS4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCAxMDAgMTQ2IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAxMDAgMTQ2OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPg0KCS5zdDB7ZmlsbDojRUQzMzI3O30NCjwvc3R5bGU+DQo8cGF0aCBjbGFzcz0ic3QwIiBkPSJNODAuNSwxNDQuOEgxOS42Yy04LjcsMC0xNS43LTcuMS0xNS43LTE1LjdWMTdjMC04LjcsNy4xLTE1LjcsMTUuNy0xNS43aDYwLjljOC43LDAsMTUuNyw3LjEsMTUuNywxNS43djExMg0KCUM5Ni4yLDEzNy43LDg5LjEsMTQ0LjgsODAuNSwxNDQuOHoiLz4NCjwvc3ZnPg0K" alt="">Red card</li> <li><img src="https://www.a8livetv.com/assets/589c34ad1e1c68c1bebaba09b921d815.svg" alt="">Second Yellow</li> <li><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyNC4xLjMsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCAxNTAgMTUwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAxNTAgMTUwOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPg0KCS5zdDB7ZmlsbDojRUY0NDM3O30NCgkuc3Qxe2ZpbGw6IzNFQjc2RTt9DQo8L3N0eWxlPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik04NC4wMyw4Mi4xYy0wLjMtMS4wMi0xLTEuNjgtMS43OC0xLjY4SDYxLjFWMTIuNDVjMC0xLjUtMC44Ni0yLjcyLTEuOTMtMi43MkgyOC4zDQoJCQljLTEuMDcsMC0xLjkzLDEuMjItMS45MywyLjcydjY3Ljk2SDUuMTVjLTAuNzgsMC0xLjQ4LDAuNjYtMS43OCwxLjY3Yy0wLjMsMS4wMi0wLjE0LDIuMTksMC40MiwyLjk2bDM4LjQ5LDU0LjQxDQoJCQljMC4zNiwwLjUxLDAuODUsMC44LDEuMzcsMC44YzAuNTEsMCwxLTAuMjksMS4zNy0wLjc5bDM4LjYxLTU0LjQxQzg0LjE2LDg0LjI4LDg0LjMzLDgzLjExLDg0LjAzLDgyLjF6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGNsYXNzPSJzdDEiIGQ9Ik02NS45Nyw2Ny45YzAuMywxLjAyLDEsMS42OCwxLjc4LDEuNjhIODguOXY2Ny45NmMwLDEuNSwwLjg2LDIuNzIsMS45MywyLjcyaDMwLjg3DQoJCQljMS4wNywwLDEuOTMtMS4yMiwxLjkzLTIuNzJWNjkuNThoMjEuMjJjMC43OCwwLDEuNDgtMC42NiwxLjc4LTEuNjdjMC4zLTEuMDIsMC4xNC0yLjE5LTAuNDItMi45NmwtMzguNDktNTQuNDENCgkJCWMtMC4zNi0wLjUxLTAuODUtMC44LTEuMzctMC44cy0xLDAuMjktMS4zNywwLjc5TDY2LjM5LDY0Ljk0QzY1Ljg0LDY1LjcyLDY1LjY3LDY2Ljg5LDY1Ljk3LDY3Ljl6Ii8+DQoJPC9nPg0KPC9nPg0KPC9zdmc+DQo=" alt="">Substitution</li> <li><img src="https://www.a8livetv.com/assets/GoalCancelled.svg" alt="">Goal Cancelled</li></ul></div>
					</div>
				</div>
				<style>
					.panel{
						border-radius: 6px;
						width: 100%;
						background: #F3F4F6;
						margin:10px 0px;
					}
					.details_right .panel{
						width: 90%;
						margin:10px auto;
					}
					.panelheader{
						background-image: linear-gradient(to right, #AB790D 20%, #E5BA5C 75%);
						color: white;
						text-align: left;
						font-size: 15px;
						font-weight: bold;
						padding-top: 12px;
						padding-left: 12px;
						padding-bottom: 5px;
					}
					.panelheader h3{
						font-size: 14px;
					}
					.panelsubheader{
						color: #333333;
						background: #f7f3e7;
						border-bottom: 2px solid #e2e2e2;
						height: 50px;
						padding: 10px 10px;
					}
					.panelsubheader img{
						width:30px;
					}
					.panelbody{
						width: 100%;
						padding:10px;
						background-color: #F3F4F6;
						overflow-y: auto;
					}
					.panelbody .overviews{
						
					}
					.panelbody .overviews ul{
						padding:50px 10px;
						display: flex;
						flex-wrap: wrap;
						flex-direction: column-reverse;
					}
					.panelbody .overviews ul li{
						width: 100%;
						display: flex;
						-webkit-box-align: center;
						align-items: center;
						-webkit-box-pack: center;
						justify-content: center;
						margin-bottom: 0.09375rem;
					}
					.panelbody .overviews ul li div{
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
					.panelbody .assists p{
						font-size: 14px;
						font-weight: 500;
						color: #666666;
						line-height: 23px;
						margin: 0 auto 13px auto;
						height: 58px;
						padding-top: 32px;
					}
					.panelbody .assists ul{
						display: flex;
						flex-wrap: wrap;
						height: 85px;
						background: #e0e0e2;
						border-radius: 10px;
						margin: 0 auto;
						padding: 20px 20px 0 20px;
						align-content: flex-start;
					}
					.panelbody .assists ul li{
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
					.panelbody .assists ul li img{
						height: 20px;
						margin-right: 10px;
						vertical-align:middle
					}
					.panelbody .version h6{
					    height: 13px;
						font-size: 16px;
						font-weight: bold;
						color: #555555;
						margin-top: 15px;
						margin-bottom: 9px;
					}
					.panelbody .version p .link-to-team{
					    cursor: pointer;
						color: #f8bc3d;
					}
				</style>

                <!-- SHOW TECHNICAL STATISTIC -->
                <div class="football_inner_column_bottom">
					<div class="row">
						<?php
                        // GET TECHNICAL STATISTIC INFO
						

                        $infoTechnicalDetails = tep_fetch_object(tep_query("SELECT * FROM nano_football_technical_statistic_details WHERE matchId = '".$infoRow->match_code."' "));

                        $arrTechnicCount = explode(";", $infoTechnicalDetails->statistic_technicCount);
                        
						$technicCountList = array('Kick-off','First Corner Kick','First Yellow Card','Shots','Shots on goal','Fouls','Corner kicks','Corner kicks (OT)','Free kicks','Offsides','Own goals','Yellow cards','Yellow cards (OT)','Red cards','Possession','Heads','Saves','Goalkeeper Off His Line','Conceded','Tackle Success','Intercept','Long Passes','Short Passes','Assist','Cross Success','First Substitution','Last Substitution','First offside','Last offside','Substitutions','Last Corner Kick','Last Yellow Card','Substitutions (OT)','Offsides (OT)','Off Target','Hit The Post','Head Success','Blocked','Tackles','Dribbles','Throw ins','Passes','Pass Success','Attack','Dangerous Attack','Corner Kicks (HT)','Possession (HT)');
						
                        for($i = 0; $i < sizeof($arrTechnicCount); $i++){
                            $arrTechnicCountDetail = explode(",", $arrTechnicCount[$i]);
							$technicCountKey = (int) $arrTechnicCountDetail[0];
							$technicCount = isset($technicCountList[$technicCountKey]) ? $technicCountList[$technicCountKey] : '';
                            
                            $technicCountHome = str_replace('%', '', $arrTechnicCountDetail[1]);
                            $technicCountAway = str_replace('%','',$arrTechnicCountDetail[2]);

                            if($technicCount){
                                $technicArr[] = [
                                    "technicType" => $technicCount,
                                    "technicHome" => $technicCountHome,
                                    "technicAway" => $technicCountAway
                                ];

                                if($technicCount == 'Possession'){
                                    $homePossession = $technicCountHome;
                                    $awayPossession = $technicCountAway;
                                }

                                if($technicCount == 'Corner kicks'){
                                    $homeCornerKick = $technicCountHome;
                                    $awayCornerKick = $technicCountAway;
                                }

                                if($technicCount == 'Red cards'){
                                    $homeRedCard = $technicCountHome;
                                    $awayRedCard = $technicCountAway;
                                }

                                if($technicCount == 'Yellow cards'){
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

							  $qryTechnicalStatistic = tep_query("SELECT * FROM nano_football_technical_statistic WHERE statistic_matchId = '".tep_input($infoRow->match_code)."' ORDER BY statistic_time DESC LIMIT 0,1");

							  while($infoTechnicalStatistic = tep_fetch_object($qryTechnicalStatistic))
							  {

							    if ($infoTechnicalStatistic->statistic_isHome == 1)
							    {
							      $isHome = "Home";
							    }
							    else
							    {
							      $isHome = "Away";
							    }
							    
							    $infoTechnicalDetails = tep_fetch_object(tep_query("SELECT * FROM nano_football_technical_statistic_details WHERE matchId = '".$infoTechnicalStatistic->statistic_matchId."' "));
							    
							    if($infoTechnicalDetails == null)
							    {
							      $arrTechnicCount = explode(";", $infoTechnicalStatistic->statistic_technicCount);
							    }

							    else
							    {
							      $arrTechnicCount = explode(";", $infoTechnicalDetails->statistic_technicCount);
							    }

							    $technicCountStr = "";

							    for($i = 0; $i < sizeof($arrTechnicCount); $i++)
							    {

							      $arrTechnicCountDetail = explode(",", $arrTechnicCount[$i]);

							      switch ($arrTechnicCountDetail[0]) 
							      {
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
							      $technicCountAway = str_replace('%','',$arrTechnicCountDetail[2]);

							      if($technicCount != "")
							      {


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
									$mathTimeParts = explode(' ',$infoRow->match_time);
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
				
				<div class="row">
					<div class="col-md-12">
						jjklrjrkewoaprewrokltrdkgtlrktrejoi
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
    	if($currentTab == 'STANDING')
    	{
    	?>
    		<div class="showData">
              <div class="titleShowData">
                STANDING
              </div>

              <hr>

			  <div class="btnFrame">
				<div class="btnDiv">
					<div class="btnGroup">
						<button type="button" class="btnStanding" id="btn-standing-all"><!----><!----><span>All</span></button>
						<button type="button" class="btnStanding" id="btn-standing-home"><!----><!----><span>Home</span></button>
						<button type="button" class="btnStanding" id="btn-standing-away"><!----><!----><span>Away</span></button>
					</div>
				</div>
			  </div>

              <!-- SHOW STANDING -->
              <!-- SHOW STANDING -->
              <!-- SHOW STANDING -->

              <?php
              	$infoLeagues = tep_fetch_object(tep_query("SELECT * FROM nano_football_leagues_list WHERE league_leagueId = '".$infoRow->match_leagueId."' "));

              	// SHOW LEAGUE STANDING

				if($infoLeagues->league_type == 'League')
				{

					$standing = getLeagueStandings($infoRow->match_leagueId);
					$list = $standing->data;

					// echo "<pre>".print_r($standing, true)."</pre>";

					$leagueInfo = $list->leagueInfo;

					if($leagueInfo)
					{
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

						foreach($totalStanding as $arrTotalStanding)
						{
							// recentFirstResult

							if($arrTotalStanding->recentFirstResult == 0)
							{
								$arrTotalStanding->recentFirstResult = 'Win';
								$recentResultClass1 = "standing-recent-win";
							}
							if($arrTotalStanding->recentFirstResult == 1)
							{
								$arrTotalStanding->recentFirstResult = 'Draw';
								$recentResultClass1 = "standing-recent-draw";
							}
							if($arrTotalStanding->recentFirstResult == 2)
							{
								$arrTotalStanding->recentFirstResult = 'Lose';
								$recentResultClass1 = "standing-recent-lose";
							}
							if($arrTotalStanding->recentFirstResult == 3)
							{
								$arrTotalStanding->recentFirstResult = '';
								$recentResultClass1 = "";
							}

							// recentSecondResult
							if($arrTotalStanding->recentSecondResult == 0)
							{
								$arrTotalStanding->recentSecondResult = 'Win';
								$recentResultClass2 = "standing-recent-win";
							}
							if($arrTotalStanding->recentSecondResult == 1)
							{
								$arrTotalStanding->recentSecondResult = 'Draw';
								$recentResultClass2 = "standing-recent-draw";
							}
							if($arrTotalStanding->recentSecondResult == 2)
							{
								$arrTotalStanding->recentSecondResult = 'Lose';
								$recentResultClass2 = "standing-recent-lose";
							}
							if($arrTotalStanding->recentSecondResult == 3)
							{
								$arrTotalStanding->recentSecondResult = '';
								$recentResultClass2 = "";
							}

							// recentThirdResult
							if($arrTotalStanding->recentThirdResult == 0)
							{
								$arrTotalStanding->recentThirdResult = 'Win';
								$recentResultClass3 = "standing-recent-win";
							}
							if($arrTotalStanding->recentThirdResult == 1)
							{
								$arrTotalStanding->recentThirdResult = 'Draw';
								$recentResultClass3 = "standing-recent-draw";
							}
							if($arrTotalStanding->recentThirdResult == 2)
							{
								$arrTotalStanding->recentThirdResult = 'Lose';
								$recentResultClass3 = "standing-recent-lose";
							}
							if($arrTotalStanding->recentThirdResult == 3)
							{
								$arrTotalStanding->recentThirdResult = '';
								$recentResultClass3 = "";
							}

							// recentFourthResult
							if($arrTotalStanding->recentFourthResult == 0)
							{
								$arrTotalStanding->recentFourthResult = 'Win';
								$recentResultClass4 = "standing-recent-win";
							}
							if($arrTotalStanding->recentFourthResult == 1)
							{
								$arrTotalStanding->recentFourthResult = 'Draw';
								$recentResultClass4 = "standing-recent-draw";
							}
							if($arrTotalStanding->recentFourthResult == 2)
							{
								$arrTotalStanding->recentFourthResult = 'Lose';
								$recentResultClass4 = "standing-recent-lose";
							}
							if($arrTotalStanding->recentFourthResult == 3)
							{
								$arrTotalStanding->recentFourthResult = '';
								$recentResultClass4 = "";
							}

							// recentFifthResult
							if($arrTotalStanding->recentFifthResult == 0)
							{
								$arrTotalStanding->recentFifthResult = 'Win';
								$recentResultClass5 = "standing-recent-win";
							}
							if($arrTotalStanding->recentFifthResult == 1)
							{
								$arrTotalStanding->recentFifthResult = 'Draw';
								$recentResultClass5 = "standing-recent-draw";
							}
							if($arrTotalStanding->recentFifthResult == 2)
							{
								$arrTotalStanding->recentFifthResult = 'Lose';
								$recentResultClass5 = "standing-recent-lose";
							}
							if($arrTotalStanding->recentFifthResult == 3)
							{
								$arrTotalStanding->recentFifthResult = '';
								$recentResultClass5 = "";
							}

							// recentSixthResult
							if($arrTotalStanding->recentSixthResult == 0)
							{
								$arrTotalStanding->recentSixthResult = 'Win';
								$recentResultClass6 = "standing-recent-win";
							}
							if($arrTotalStanding->recentSixthResult == 1)
							{
								$arrTotalStanding->recentSixthResult = 'Draw';
								$recentResultClass6 = "standing-recent-draw";
							}
							if($arrTotalStanding->recentSixthResult == 2)
							{
								$arrTotalStanding->recentSixthResult = 'Lose';
								$recentResultClass6 = "standing-recent-lose";
							}
							if($arrTotalStanding->recentSixthResult == 3)
							{
								$arrTotalStanding->recentSixthResult = '';
								$recentResultClass6 = "";
							}

							// unset($arrTotalStanding);

							$infoTeam = tep_fetch_object(tep_query("SELECT * FROM nano_football_team_profile WHERE team_code = '".$arrTotalStanding->teamId."'"));

							echo '<tr class="row-show-standing-all">
		                            <td class="col-show-standing" style="text-align: left; border-right: none;">'.$arrTotalStanding->rank.'</td>
		                            <td class="col-show-standing" style="text-align: left; border-left: none;">'.$infoTeam->team_nameEn.'</td>
		                            <td class="col-show-standing">'.$arrTotalStanding->totalCount.'</td>
		                            <td class="col-show-standing col-show-standing-w">'.$arrTotalStanding->winCount.'</td>
		                            <td class="col-show-standing col-show-standing-d">'.$arrTotalStanding->drawCount.'</td>
		                            <td class="col-show-standing col-show-standing-l">'.$arrTotalStanding->loseCount.'</td>
		                            <td class="col-show-standing">'.$arrTotalStanding->getScore.'</td>
		                            <td class="col-show-standing">
		                            	<div class="'.$recentResultClass1.' div-show-standing-result">A</div>
		                            	<div class="'.$recentResultClass2.' div-show-standing-result">B</div>
		                            	<div class="'.$recentResultClass3.' div-show-standing-result">C</div>
		                            	<div class="'.$recentResultClass4.' div-show-standing-result">D</div>
		                            	<div class="'.$recentResultClass5.' div-show-standing-result">E</div>
		                            </td>
		                            <td class="col-show-standing">'.$arrTotalStanding->integral.'</td>
		                          </tr>';

						} // END TOTAL STANDING

						// SHOW HOME STANDING

						$homeStanding = $list->homeStandings;
						foreach($homeStanding as $arrHomeStanding)
						{
							
							$qryRecentResults = tep_query("SELECT * FROM nano_schedule_match WHERE match_leagueId = '".$infoRow->match_leagueId."' AND match_state = 'Finished' AND (match_homeId = '".$arrHomeStanding->teamId."' OR match_awayId = '".$arrHomeStanding->teamId."') ORDER BY match_time DESC LIMIT 0,5 ");

							$n = 0;

							$recentResult = "";

							while($infoRecentResults = tep_fetch_object($qryRecentResults))
							{
								if($infoRecentResults->match_homeId == $arrHomeStanding->teamId)
								{
									if($infoRecentResults->match_homeScore > $infoRecentResults->match_awayScore)
									{
										$recentResult .= "Win;";
									}
									else if($infoRecentResults->match_homeScore < $infoRecentResults->match_awayScore)
									{
										$recentResult .= "Lose;";
									}
									else if($infoRecentResults->match_homeScore == $infoRecentResults->match_awayScore)
									{
										$recentResult .= "Draw;";
									}
								}

								if($infoRecentResults->match_awayId == $arrHomeStanding->teamId)
								{
									if($infoRecentResults->match_homeScore > $infoRecentResults->match_awayScore)
									{
										$recentResult .= "Lose;";
									}
									else if($infoRecentResults->match_homeScore < $infoRecentResults->match_awayScore)
									{
										$recentResult .= "Win;";
									}
									else if($infoRecentResults->match_homeScore == $infoRecentResults->match_awayScore)
									{
										$recentResult .= "Draw;";
									}
								}
							}

							$arrRecentResult = explode(";",$recentResult);

							if($arrRecentResult[0] == 'Win')
							{
								$recentResultClass1 = "standing-recent-win";
							}
							else if($arrRecentResult[0] == 'Lose')
							{
								$recentResultClass1 = "standing-recent-lose";
							}
							else if($arrRecentResult[0] == 'Draw')
							{
								$recentResultClass1 = "standing-recent-draw";
							}

							if($arrRecentResult[1] == 'Win')
							{
								$recentResultClass2 = "standing-recent-win";
							}
							else if($arrRecentResult[1] == 'Lose')
							{
								$recentResultClass2 = "standing-recent-lose";
							}
							else if($arrRecentResult[1] == 'Draw')
							{
								$recentResultClass2 = "standing-recent-draw";
							}

							if($arrRecentResult[2] == 'Win')
							{
								$recentResultClass3 = "standing-recent-win";
							}
							else if($arrRecentResult[2] == 'Lose')
							{
								$recentResultClass3 = "standing-recent-lose";
							}
							else if($arrRecentResult[2] == 'Draw')
							{
								$recentResultClass3 = "standing-recent-draw";
							}

							if($arrRecentResult[3] == 'Win')
							{
								$recentResultClass4 = "standing-recent-win";
							}
							else if($arrRecentResult[3] == 'Lose')
							{
								$recentResultClass4 = "standing-recent-lose";
							}
							else if($arrRecentResult[3] == 'Draw')
							{
								$recentResultClass4 = "standing-recent-draw";
							}

							if($arrRecentResult[4] == 'Win')
							{
								$recentResultClass5 = "standing-recent-win";
							}
							else if($arrRecentResult[4] == 'Lose')
							{
								$recentResultClass5 = "standing-recent-lose";
							}
							else if($arrRecentResult[4] == 'Draw')
							{
								$recentResultClass5 = "standing-recent-draw";
							}

							$infoTeam = tep_fetch_object(tep_query("SELECT * FROM nano_football_team_profile WHERE team_code = '".$arrHomeStanding->teamId."'"));

							echo '<tr class="row-show-standing-home" style="display:none;">
		                            <td class="col-show-standing" style="text-align: left; border-right: none;">'.$arrHomeStanding->rank.'</td>
		                            <td class="col-show-standing" style="text-align: left; border-left: none;">'.$infoTeam->team_nameEn.'</td>
		                            <td class="col-show-standing ">'.$arrHomeStanding->totalCount.'</td>
		                            <td class="col-show-standing col-show-standing-w">'.$arrHomeStanding->winCount.'</td>
		                            <td class="col-show-standing col-show-standing-d">'.$arrHomeStanding->drawCount.'</td>
		                            <td class="col-show-standing col-show-standing-l">'.$arrHomeStanding->loseCount.'</td>
		                            <td class="col-show-standing">'.$arrHomeStanding->getScore.'</td>
		                            <td class="col-show-standing">
		                            	<div class="'.$recentResultClass1.' div-show-standing-result">A</div>
		                            	<div class="'.$recentResultClass2.' div-show-standing-result">B</div>
		                            	<div class="'.$recentResultClass3.' div-show-standing-result">C</div>
		                            	<div class="'.$recentResultClass4.' div-show-standing-result">D</div>
		                            	<div class="'.$recentResultClass5.' div-show-standing-result">E</div>
		                            </td>
		                            <td class="col-show-standing">'.$arrHomeStanding->integral.'</td>
		                          </tr>';

						} // END HOME STANDING

						// SHOW AWAY STANDING

						$awayStanding = $list->awayStandings;
						foreach($awayStanding as $arrAwayStanding)
						{
							
							$qryRecentResults = tep_query("SELECT * FROM nano_schedule_match WHERE match_leagueId = '".$infoRow->match_leagueId."' AND match_state = 'Finished' AND (match_homeId = '".$arrAwayStanding->teamId."' OR match_awayId = '".$arrAwayStanding->teamId."') ORDER BY match_time DESC LIMIT 0,5 ");

							$n = 0;

							$recentResult = "";

							while($infoRecentResults = tep_fetch_object($qryRecentResults))
							{
								if($infoRecentResults->match_homeId == $arrAwayStanding->teamId)
								{
									if($infoRecentResults->match_homeScore > $infoRecentResults->match_awayScore)
									{
										$recentResult .= "Win;";
									}
									else if($infoRecentResults->match_homeScore < $infoRecentResults->match_awayScore)
									{
										$recentResult .= "Lose;";
									}
									else if($infoRecentResults->match_homeScore == $infoRecentResults->match_awayScore)
									{
										$recentResult .= "Draw;";
									}
								}

								if($infoRecentResults->match_awayId == $arrAwayStanding->teamId)
								{
									if($infoRecentResults->match_homeScore > $infoRecentResults->match_awayScore)
									{
										$recentResult .= "Lose;";
									}
									else if($infoRecentResults->match_homeScore < $infoRecentResults->match_awayScore)
									{
										$recentResult .= "Win;";
									}
									else if($infoRecentResults->match_homeScore == $infoRecentResults->match_awayScore)
									{
										$recentResult .= "Draw;";
									}
								}
							}

							$arrRecentResult = explode(";",$recentResult);

							if($arrRecentResult[0] == 'Win')
							{
								$recentResultClass1 = "standing-recent-win";
							}
							else if($arrRecentResult[0] == 'Lose')
							{
								$recentResultClass1 = "standing-recent-lose";
							}
							else if($arrRecentResult[0] == 'Draw')
							{
								$recentResultClass1 = "standing-recent-draw";
							}

							if($arrRecentResult[1] == 'Win')
							{
								$recentResultClass2 = "standing-recent-win";
							}
							else if($arrRecentResult[1] == 'Lose')
							{
								$recentResultClass2 = "standing-recent-lose";
							}
							else if($arrRecentResult[1] == 'Draw')
							{
								$recentResultClass2 = "standing-recent-draw";
							}

							if($arrRecentResult[2] == 'Win')
							{
								$recentResultClass3 = "standing-recent-win";
							}
							else if($arrRecentResult[2] == 'Lose')
							{
								$recentResultClass3 = "standing-recent-lose";
							}
							else if($arrRecentResult[2] == 'Draw')
							{
								$recentResultClass3 = "standing-recent-draw";
							}

							if($arrRecentResult[3] == 'Win')
							{
								$recentResultClass4 = "standing-recent-win";
							}
							else if($arrRecentResult[3] == 'Lose')
							{
								$recentResultClass4 = "standing-recent-lose";
							}
							else if($arrRecentResult[3] == 'Draw')
							{
								$recentResultClass4 = "standing-recent-draw";
							}

							if($arrRecentResult[4] == 'Win')
							{
								$recentResultClass5 = "standing-recent-win";
							}
							else if($arrRecentResult[4] == 'Lose')
							{
								$recentResultClass5 = "standing-recent-lose";
							}
							else if($arrRecentResult[4] == 'Draw')
							{
								$recentResultClass5 = "standing-recent-draw";
							}

							$infoTeam = tep_fetch_object(tep_query("SELECT * FROM nano_football_team_profile WHERE team_code = '".$arrAwayStanding->teamId."'"));

							echo '<tr class="row-show-standing-away" style="display:none;">
		                            <td class="col-show-standing" style="text-align: left; border-right: none;">'.$arrAwayStanding->rank.'</td>
		                            <td class="col-show-standing" style="text-align: left; border-left: none;">'.$infoTeam->team_nameEn.'</td>
		                            <td class="col-show-standing">'.$arrAwayStanding->totalCount.'</td>
		                            <td class="col-show-standing col-show-standing-w">'.$arrAwayStanding->winCount.'</td>
		                            <td class="col-show-standing col-show-standing-d">'.$arrAwayStanding->drawCount.'</td>
		                            <td class="col-show-standing col-show-standing-l">'.$arrAwayStanding->loseCount.'</td>
		                            <td class="col-show-standing">'.$arrAwayStanding->getScore.'</td>
		                            <td class="col-show-standing">
		                            	<div class="'.$recentResultClass1.' div-show-standing-result">A</div>
		                            	<div class="'.$recentResultClass2.' div-show-standing-result">B</div>
		                            	<div class="'.$recentResultClass3.' div-show-standing-result">C</div>
		                            	<div class="'.$recentResultClass4.' div-show-standing-result">D</div>
		                            	<div class="'.$recentResultClass5.' div-show-standing-result">E</div>
		                            </td>
		                            <td class="col-show-standing">'.$arrAwayStanding->integral.'</td>
		                          </tr>';

						} // END AWAY STANDING

						echo "</table>";
					}
					else // NO DATA
					{
						echo '<div class="noData">No data.</div>';
					}
				} // END LEAGUE STANDING

				// SHOW CUP STANDING

				else if($infoLeagues->league_type == 'Cup')
				{
					$standing = getCupStandings($infoRow->match_leagueId);
					$list = $standing->data;

					// echo "<pre>".print_r($standing,true)."</pre>";

					if($list)
					{
						foreach($list as $arrList)
						{
							$score = $arrList->roundScoreItems;
							$subId = $arrList->subId;

							if($score)
							{
								foreach($score as $arrScore)
								{
									$groupScore = $arrScore->groupScoreItems;

									if($groupScore)
									{
										foreach($groupScore as $arrGroupScore)
										{

											echo "<div>
													<span>".$arrGroupScore->groupName."</span>
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

											if($scoreItems)
											{

												foreach($scoreItems as $arrScoreItems)
												{
													$infoLeague = tep_fetch_object(tep_query("SELECT * FROM nano_football_leagues_list WHERE league_leagueId = '".$arrList->leagueId."' "));

													$qryRecentResults = tep_query("SELECT * FROM nano_schedule_match WHERE match_leagueId = '".$infoRow->match_leagueId."' AND match_state = 'Finished' AND (match_homeId = '".$arrScoreItems->teamId."' OR match_awayId = '".$arrScoreItems->teamId."') ORDER BY match_time DESC LIMIT 0,5 ");

													$recentResult = "";

													while($infoRecentResults = tep_fetch_object($qryRecentResults))
													{
														if($infoRecentResults->match_homeId == $arrScoreItems->teamId)
														{
															if($infoRecentResults->match_homeScore > $infoRecentResults->match_awayScore)
															{
																$recentResult .= "Win;";
															}
															else if($infoRecentResults->match_homeScore < $infoRecentResults->match_awayScore)
															{
																$recentResult .= "Lose;";
															}
															else if($infoRecentResults->match_homeScore == $infoRecentResults->match_awayScore)
															{
																$recentResult .= "Draw;";
															}
														}

														if($infoRecentResults->match_awayId == $arrScoreItems->teamId)
														{
															if($infoRecentResults->match_homeScore > $infoRecentResults->match_awayScore)
															{
																$recentResult .= "Lose;";
															}
															else if($infoRecentResults->match_homeScore < $infoRecentResults->match_awayScore)
															{
																$recentResult .= "Win;";
															}
															else if($infoRecentResults->match_homeScore == $infoRecentResults->match_awayScore)
															{
																$recentResult .= "Draw;";
															}
														}
													}

													$arrRecentResult = explode(";",$recentResult);

													if($arrRecentResult[0] == 'Win')
													{
														$recentResultClass1 = "standing-recent-win";
													}
													else if($arrRecentResult[0] == 'Lose')
													{
														$recentResultClass1 = "standing-recent-lose";
													}
													else if($arrRecentResult[0] == 'Draw')
													{
														$recentResultClass1 = "standing-recent-draw";
													}

													if($arrRecentResult[1] == 'Win')
													{
														$recentResultClass2 = "standing-recent-win";
													}
													else if($arrRecentResult[1] == 'Lose')
													{
														$recentResultClass2 = "standing-recent-lose";
													}
													else if($arrRecentResult[1] == 'Draw')
													{
														$recentResultClass2 = "standing-recent-draw";
													}

													if($arrRecentResult[2] == 'Win')
													{
														$recentResultClass3 = "standing-recent-win";
													}
													else if($arrRecentResult[2] == 'Lose')
													{
														$recentResultClass3 = "standing-recent-lose";
													}
													else if($arrRecentResult[2] == 'Draw')
													{
														$recentResultClass3 = "standing-recent-draw";
													}

													if($arrRecentResult[3] == 'Win')
													{
														$recentResultClass4 = "standing-recent-win";
													}
													else if($arrRecentResult[3] == 'Lose')
													{
														$recentResultClass4 = "standing-recent-lose";
													}
													else if($arrRecentResult[3] == 'Draw')
													{
														$recentResultClass4 = "standing-recent-draw";
													}

													if($arrRecentResult[4] == 'Win')
													{
														$recentResultClass5 = "standing-recent-win";
													}
													else if($arrRecentResult[4] == 'Lose')
													{
														$recentResultClass5 = "standing-recent-lose";
													}
													else if($arrRecentResult[4] == 'Draw')
													{
														$recentResultClass5 = "standing-recent-draw";
													}

													$infoTeam = tep_fetch_object(tep_query("SELECT * FROM nano_football_team_profile WHERE team_code = '".$arrScoreItems->teamId."' "));

													echo '<tr class="">
								                            <td class="col-show-standing" style="text-align: left; border-right: none;">'.$arrScoreItems->rank.'</td>
								                            <td class="col-show-standing" style="text-align: left; border-left: none;">'.$infoTeam->team_nameEn.'</td>
								                            <td class="col-show-standing">'.$arrScoreItems->totalCount.'</td>
								                            <td class="col-show-standing col-show-standing-w">'.$arrScoreItems->winCount.'</td>
								                            <td class="col-show-standing col-show-standing-d">'.$arrScoreItems->drawCount.'</td>
								                            <td class="col-show-standing col-show-standing-l">'.$arrScoreItems->loseCount.'</td>
								                            <td class="col-show-standing">'.$arrScoreItems->getScore.'</td>
								                            <td class="col-show-standing">
								                            	<div class="'.$recentResultClass1.' div-show-standing-result">A</div>
								                            	<div class="'.$recentResultClass2.' div-show-standing-result">B</div>
								                            	<div class="'.$recentResultClass3.' div-show-standing-result">C</div>
								                            	<div class="'.$recentResultClass4.' div-show-standing-result">D</div>
								                            	<div class="'.$recentResultClass5.' div-show-standing-result">E</div>
								                            </td>
								                            <td class="col-show-standing">'.$arrScoreItems->integral.'</td>
								                          </tr>';

												}
											}

											echo "</table>";
										}
									}
								}
							}

							else
							{
								echo '<div class="noData">No data.</div>';
							}
						}
					}
					else
					{
						echo '<div class="noData">No data.</div>';
					}
				}
				else
				{
					echo '<div class="noData">No data.</div>';
				}

              ?>

            </div>

            <!-- FOR CHECK CLICK ON HOME STANDING / AWAY STANDING -->

            <script type="text/javascript">

			$("#btn-standing-all").click(function(){
				$(".row-show-standing-all").css("display", "");
				$(".row-show-standing-home").css("display", "none");
				$(".row-show-standing-away").css("display", "none");
			});

			$("#btn-standing-home").click(function(){
				$(".row-show-standing-all").css("display", "none");
				$(".row-show-standing-home").css("display", "");
				$(".row-show-standing-away").css("display", "none");
			});

			$("#btn-standing-away").click(function(){
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
    	if($currentTab == 'H2H')
    	{
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
              	$qryMatch = tep_query("SELECT * FROM nano_schedule_match WHERE (match_homeId = '".$infoRow->match_homeId."' OR match_awayId = '".$infoRow->match_homeId."') AND match_state = 'Finished' AND match_time < '".date("Y-m-d H:i:s")."' ORDER BY match_time DESC LIMIT 0,20");

              	if(tep_num_rows($qryMatch) == 0)
              	{
              		echo '<div class="noData">No data.</div>';
              	}

              	else
              	{
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

              		while($infoMatch = tep_fetch_object($qryMatch))
					{

						// FOR CHECKING THE SAME TEAM
	                    if($infoMatch->match_homeId == $infoRow->match_homeId)
	                    {
	                      $colShowH2HTeamNameHome = "colShowH2HTeamNameHome";
	                    }
	                    else
	                    {
	                      $colShowH2HTeamNameHome = "";
	                    }

	                    if($infoMatch->match_awayId == $infoRow->match_homeId)
	                    {
	                      $colShowH2HTeamNameAway = "colShowH2HTeamNameAway";
	                    }
	                    else
	                    {
	                      $colShowH2HTeamNameAway = "";
	                    }

						$infoRecentResult = tep_fetch_object(tep_query("SELECT * FROM nano_schedule_match WHERE match_code = '".$infoMatch->match_code."'"));

						if($infoRecentResult->match_homeId == $infoRow->match_homeId)
						{
							if($infoRecentResult->match_homeScore > $infoRecentResult->match_awayScore)
							{
								$recentResult = "Win";
								$h2h_recent_result = "h2h-recent-win";
								$colShowH2HScore = "colShowH2HScoreGreen";
							}
							else if($infoRecentResult->match_homeScore < $infoRecentResult->match_awayScore)
							{
								$recentResult = "Lose";
								$h2h_recent_result = "h2h-recent-lose";
								$colShowH2HScore = "colShowH2HScoreRed";
							}
							else if($infoRecentResult->match_homeScore == $infoRecentResult->match_awayScore)
							{
								$recentResult = "Draw";
								$h2h_recent_result = "h2h-recent-draw";
								$colShowH2HScore = "colShowH2HScoreYellow";
							}
						}

						else if($infoRecentResult->match_awayId == $infoRow->match_homeId)
						{
							if($infoRecentResult->match_homeScore < $infoRecentResult->match_awayScore)
							{
								$recentResult = "Win";
								$h2h_recent_result = "h2h-recent-win";
								$colShowH2HScore = "colShowH2HScoreGreen";
							}
							else if($infoRecentResult->match_homeScore > $infoRecentResult->match_awayScore)
							{
								$recentResult = "Lose";
								$h2h_recent_result = "h2h-recent-lose";
								$colShowH2HScore = "colShowH2HScoreRed";
							}
							else if($infoRecentResult->match_homeScore == $infoRecentResult->match_awayScore)
							{
								$recentResult = "Draw";
								$h2h_recent_result = "h2h-recent-draw";
								$colShowH2HScore = "colShowH2HScoreYellow";
							}
						}

						echo "
	                        <tr class='row-show-h2h'>
	                          <td class='col-show-h2h-title'>".$infoMatch->match_leagueEn."</td>
	                          <td class='col-show-h2h'>".$infoMatch->match_time."</td>
	                          <td class='col-show-h2h ".$colShowH2HTeamNameHome."'>".$infoMatch->match_homeEn."</td>
	                          <td class='col-show-h2h-score ".$colShowH2HScore."'>".$infoMatch->match_homeScore." - ".$infoMatch->match_awayScore."</td>
	                          <td class='col-show-h2h ".$colShowH2HTeamNameAway."'>".$infoMatch->match_awayEn."</td>
	                          <td class='col-show-h2h'>".$infoMatch->match_homeHalfScore." - ".$infoMatch->match_awayHalfScore."</td>
	                          <td class='col-show-h2h'>
	                          	<div class='".$h2h_recent_result."'>A</div>
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
              	$qryMatch = tep_query("SELECT * FROM nano_schedule_match WHERE (match_homeId = '".$infoRow->match_awayId."' OR match_awayId = '".$infoRow->match_awayId."') AND match_state = 'Finished' AND match_time < '".date("Y-m-d H:i:s")."' ORDER BY match_time DESC LIMIT 0,20");

              	if(tep_num_rows($qryMatch) == 0)
              	{
              		echo '<div class="noData">No data.</div>';
              	}

              	else
              	{
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

              		while($infoMatch = tep_fetch_object($qryMatch))
					{

						// FOR CHECKING THE SAME TEAM
	                    if($infoMatch->match_homeId == $infoRow->match_awayId)
	                    {
	                      $colShowH2HTeamNameHome = "colShowH2HTeamNameHome";
	                    }
	                    else
	                    {
	                      $colShowH2HTeamNameHome = "";
	                    }

	                    if($infoMatch->match_awayId == $infoRow->match_awayId)
	                    {
	                      $colShowH2HTeamNameAway = "colShowH2HTeamNameAway";
	                    }
	                    else
	                    {
	                      $colShowH2HTeamNameAway = "";
	                    }

						$infoRecentResult = tep_fetch_object(tep_query("SELECT * FROM nano_schedule_match WHERE match_code = '".$infoMatch->match_code."'"));

						if($infoRecentResult->match_homeId == $infoRow->match_awayId)
						{
							if($infoRecentResult->match_homeScore > $infoRecentResult->match_awayScore)
							{
								$recentResult = "Win";
								$h2h_recent_result = "h2h-recent-win";
								$colShowH2HScore = "colShowH2HScoreGreen";
							}
							else if($infoRecentResult->match_homeScore < $infoRecentResult->match_awayScore)
							{
								$recentResult = "Lose";
								$h2h_recent_result = "h2h-recent-lose";
								$colShowH2HScore = "colShowH2HScoreRed";
							}
							else if($infoRecentResult->match_homeScore == $infoRecentResult->match_awayScore)
							{
								$recentResult = "Draw";
								$h2h_recent_result = "h2h-recent-draw";
								$colShowH2HScore = "colShowH2HScoreYellow";
							}
						}

						else if($infoRecentResult->match_awayId == $infoRow->match_awayId)
						{
							if($infoRecentResult->match_homeScore < $infoRecentResult->match_awayScore)
							{
								$recentResult = "Win";
								$h2h_recent_result = "h2h-recent-win";
								$colShowH2HScore = "colShowH2HScoreGreen";
							}
							else if($infoRecentResult->match_homeScore > $infoRecentResult->match_awayScore)
							{
								$recentResult = "Lose";
								$h2h_recent_result = "h2h-recent-lose";
								$colShowH2HScore = "colShowH2HScoreRed";
							}
							else if($infoRecentResult->match_homeScore == $infoRecentResult->match_awayScore)
							{
								$recentResult = "Draw";
								$h2h_recent_result = "h2h-recent-draw";
								$colShowH2HScore = "colShowH2HScoreYellow";
							}
						}

						echo "
	                        <tr class='row-show-h2h'>
	                          <td class='col-show-h2h-title'>".$infoMatch->match_leagueEn."</td>
	                          <td class='col-show-h2h'>".$infoMatch->match_time."</td>
	                          <td class='col-show-h2h ".$colShowH2HTeamNameHome."'>".$infoMatch->match_homeEn."</td>
	                          <td class='col-show-h2h-score ".$colShowH2HScore."'>".$infoMatch->match_homeScore." - ".$infoMatch->match_awayScore."</td>
	                          <td class='col-show-h2h ".$colShowH2HTeamNameAway."'>".$infoMatch->match_awayEn."</td>
	                          <td class='col-show-h2h'>".$infoMatch->match_homeHalfScore." - ".$infoMatch->match_awayHalfScore."</td>
	                          <td class='col-show-h2h'>
	                          	<div class='".$h2h_recent_result."'>A</div>
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
              	$qryMatch = tep_query("SELECT * FROM nano_schedule_match WHERE (match_homeId = '".$infoRow->match_homeId."' OR match_homeId = '".$infoRow->match_awayId."') AND (match_awayId = '".$infoRow->match_homeId."' OR match_awayId = '".$infoRow->match_awayId."') AND match_state = 'Finished' AND match_time < '".date("Y-m-d H:i:s")."' ORDER BY match_time DESC LIMIT 0,20");

              	if(tep_num_rows($qryMatch) == 0)
              	{
              		echo '<div class="noData">No data.</div>';
              	}

              	else
              	{
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

              		while($infoMatch = tep_fetch_object($qryMatch))
					{
						$infoRecentResult = tep_fetch_object(tep_query("SELECT * FROM nano_schedule_match WHERE match_code = '".$infoMatch->match_code."'"));

						if($infoRecentResult->match_awayId == $infoRow->match_awayId)
						{
							if($infoRecentResult->match_homeScore > $infoRecentResult->match_awayScore)
							{
								$recentResult = "Win";
								$h2h_recent_result = "h2h-recent-win";
								$colShowH2HScore = "colShowH2HScoreGreen";
							}
							else if($infoRecentResult->match_homeScore < $infoRecentResult->match_awayScore)
							{
								$recentResult = "Lose";
								$h2h_recent_result = "h2h-recent-lose";
								$colShowH2HScore = "colShowH2HScoreRed";
							}
							else if($infoRecentResult->match_homeScore == $infoRecentResult->match_awayScore)
							{
								$recentResult = "Draw";
								$h2h_recent_result = "h2h-recent-draw";
								$colShowH2HScore = "colShowH2HScoreYellow";
							}
						}

						else if($infoRecentResult->match_awayId == $infoRow->match_awayId)
						{
							if($infoRecentResult->match_homeScore < $infoRecentResult->match_awayScore)
							{
								$recentResult = "Win";
								$h2h_recent_result = "h2h-recent-win";
								$colShowH2HScore = "colShowH2HScoreGreen";
							}
							else if($infoRecentResult->match_homeScore > $infoRecentResult->match_awayScore)
							{
								$recentResult = "Lose";
								$h2h_recent_result = "h2h-recent-lose";
								$colShowH2HScore = "colShowH2HScoreRed";
							}
							else if($infoRecentResult->match_homeScore == $infoRecentResult->match_awayScore)
							{
								$recentResult = "Draw";
								$h2h_recent_result = "h2h-recent-draw";
								$colShowH2HScore = "colShowH2HScoreYellow";
							}
						}

						echo "
	                        <tr class='row-show-h2h'>
	                          <td class='col-show-h2h-title'>".$infoMatch->match_leagueEn."</td>
	                          <td class='col-show-h2h'>".$infoMatch->match_time."</td>
	                          <td class='col-show-h2h'>".$infoMatch->match_homeEn."</td>
	                          <td class='col-show-h2h-score ".$colShowH2HScore."'>".$infoMatch->match_homeScore." - ".$infoMatch->match_awayScore."</td>
	                          <td class='col-show-h2h'>".$infoMatch->match_awayEn."</td>
	                          <td class='col-show-h2h'>".$infoMatch->match_homeHalfScore." - ".$infoMatch->match_awayHalfScore."</td>
	                          <td class='col-show-h2h'>
	                          	<div class='".$h2h_recent_result."'>A</div>
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
              	$qryMatch = tep_query("SELECT * FROM nano_schedule_match WHERE (match_homeId = '".$infoRow->match_homeId."' OR match_awayId = '".$infoRow->match_homeId."') AND match_state = 'Not started' AND match_time > '".date("Y-m-d H:i:s")."' ");

              	if(tep_num_rows($qryMatch) == 0)
              	{
              		echo '<div class="noData">No data.</div>';
              	}

              	else
              	{
              		echo '
	                    <table class="tableShowData table-show-h2h">
		                    <thead class="thShowData">
		                      <td class="col-show-h2h-title">Leagues</td>
		                      <td class="col-show-h2h-title">Date</td>
		                      <td class="col-show-h2h-title">Home</td>
		                      <td class="col-show-h2h-title">Away</td>
	                    	</thead>
                    ';

              		while($infoMatch = tep_fetch_object($qryMatch))
					{

						echo "
	                        <tr class='row-show-h2h'>
	                          <td class='col-show-h2h-title'>".$infoMatch->match_leagueEn."</td>
	                          <td class='col-show-h2h'>".$infoMatch->match_time."</td>
	                          <td class='col-show-h2h'>".$infoMatch->match_homeEn."</td>
	                          <td class='col-show-h2h'>".$infoMatch->match_awayEn."</td>
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
              	$qryMatch = tep_query("SELECT * FROM nano_schedule_match WHERE (match_homeId = '".$infoRow->match_awayId."' OR match_awayId = '".$infoRow->match_awayId."') AND match_state = 'Not started' AND match_time > '".date("Y-m-d H:i:s")."' ");

              	if(tep_num_rows($qryMatch) == 0)
              	{
              		echo '<div class="noData">No data.</div>';
              	}

              	else
              	{
              		echo '
	                    <table class="tableShowData table-show-h2h">
		                    <thead class="thShowData">
		                      <td class="col-show-h2h-title">Leagues</td>
		                      <td class="col-show-h2h-title">Date</td>
		                      <td class="col-show-h2h-title">Home</td>
		                      <td class="col-show-h2h-title">Away</td>
	                    	</thead>
                    ';

              		while($infoMatch = tep_fetch_object($qryMatch))
					{

						echo "
	                        <tr class='row-show-h2h'>
	                          <td class='col-show-h2h-title'>".$infoMatch->match_leagueEn."</td>
	                          <td class='col-show-h2h'>".$infoMatch->match_time."</td>
	                          <td class='col-show-h2h'>".$infoMatch->match_homeEn."</td>
	                          <td class='col-show-h2h'>".$infoMatch->match_awayEn."</td>
	                        </tr>
                     	 ";
					}

					echo "</table>";
              	}

              ?>
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
    	if($currentTab == 'LINEUPS')
    	{
    	?>

		<div class="showData">
          <div class="titleShowData">
            <span>Lineups</span>
            <!-- <span style="margin-left: 15px;"><?php echo $infoRow->match_awayEn; ?></span> -->
          </div>

          <hr>

          <?php
          	// SHOW OVERALL LINEUPS

          	if(tep_num_rows($qryLineups) == 0)
          	{
          		echo '<div class="noData">No data.</div>';
          	}

          	else
          	{
          		echo '<table class="tableShowData" id="tableShowLineupBackup">
                        <thead class="thShowData">
                          <td class="col-show-standing" style="text-align: left;">
                          	<div style="display:inline; margin-right:3px;"><img src="'.$homeTeamLogo.'" style="object-fit: cover !important; height: 20px !important; width: 20px !important;"></div>
                          	<div style="display:inline; margin-right:3px;">'.$infoTeamHome->team_nameEn.'</div>
                          </td>
                          <td class="col-show-standing" style="text-align: left;">
                          	<div style="display:inline; margin-right:3px;"><img src="'.$awayTeamLogo.'" style="object-fit: cover !important; height: 20px !important; width: 20px !important;"></div>
                          	<div>'.$infoTeamAway->team_nameEn.'</div>
                          </td>
                        </thead>';

                $countBackupHome = 0;
                $countBackupAway = 0;

          		while($infoLineups = tep_fetch_object($qryLineups))
          		{
          			$qryOverallLineup = tep_query("SELECT * FROM nano_football_lineups WHERE matchid = '".$infoRow->match_code."' AND (lineups_type = 'HOME_LINEUP' OR lineups_type = 'AWAY_LINEUP' OR lineups_type = 'AWAY_BACKUP' OR lineups_type = 'HOME_BACKUP') AND lineups_insert_datetime = '".$infoLineups->lineups_insert_datetime."'");

          			while($infoOverallLineup = tep_fetch_object($qryOverallLineup))
					{
						$divShowStat = "";

						// GET PLAYER INFO

						$infoPlayer = tep_fetch_object(tep_query("SELECT * FROM nano_football_player_info WHERE player_playerId = '".$infoOverallLineup->playerId."'"));

						// GET PLAYER RATING

						$infoStatisticPlayer = tep_fetch_object(tep_query("SELECT * FROM nano_football_player_statistic_match WHERE playerId = '".$infoOverallLineup->playerId."' AND matchId = '".$infoRow->match_code."'"));

						// REPLACE MATCH TEMPERATURE CHARACTER

						$infoRow->match_temp = str_replace("??", "-", $infoRow->match_temp);

						// GET PLAYER STATS

						$qryPlayerTechnicalStat = tep_query("SELECT * FROM nano_football_technical_statistic WHERE statistic_matchId = '".$infoRow->match_code."' AND (statistic_playerId = '".$infoOverallLineup->playerId."' OR statistic_playerId2 = '".$infoOverallLineup->playerId."') ");

						// CHECK THE PLAYER IS IT GOAL OR ASSIST

						while($infoPlayerTechnicalStat = tep_fetch_object($qryPlayerTechnicalStat))
						{
							if($infoPlayerTechnicalStat->statistic_kind == 'Goal')
							{
								if($infoPlayerTechnicalStat->statistic_playerId == $infoOverallLineup->playerId)
								{
									$infoPlayerTechnicalStat->statistic_kind = 'Goal';
								}

								else if($infoPlayerTechnicalStat->statistic_playerId2 == $infoOverallLineup->playerId)
								{
									$infoPlayerTechnicalStat->statistic_kind = 'Assist';
								}
							}

							// SHOW OUT THE KIND ICON

							if($infoPlayerTechnicalStat->statistic_kind == 'Sub')
							{
								$kindIcon = "includes/images/substitution.png";
							}
							else if($infoPlayerTechnicalStat->statistic_kind == 'Yellow card')
							{
								$kindIcon = "includes/images/yellowcard.png";
							}
							else if($infoPlayerTechnicalStat->statistic_kind == 'Goal')
							{
								$kindIcon = "includes/images/goals.png";
							}
							else if($infoPlayerTechnicalStat->statistic_kind == 'Own goal')
							{
								$kindIcon = "includes/images/owngoal.png";
							}
							else if($infoPlayerTechnicalStat->statistic_kind == 'Red card')
							{
								$kindIcon = "includes/images/redcard.png";
							}
							else if($infoPlayerTechnicalStat->statistic_kind == 'Second Yellow Card')
							{
								$kindIcon = "includes/images/secondyellow.jpg";
							}
							else if($infoPlayerTechnicalStat->statistic_kind == 'Assist')
							{
								$kindIcon = "includes/images/assist.png";
							}
							else
							{
								$kindIcon = "";
							}

							$divShowStat .= '<div style="display:inline; margin-right:3px;"><img src='.$kindIcon.' style="object-fit: cover !important; height: 20px !important; width: 20px !important;"></div>';
						}

						// HOME LINEUPS

						if($infoOverallLineup->lineups_type == 'HOME_LINEUP')
						{
							$infoLineup = tep_fetch_object(tep_query("SELECT MAX(positionId) AS positionId FROM nano_football_lineups WHERE matchId = '".$infoOverallLineup->matchId."' AND lineups_type = 'HOME_LINEUP'"));

							// HOME FORMATION

							// 0: Goalkeeper, 
							// 1: Defender, 
							// 2: Midfielder, 
							// 3: Forward

							if($infoLineup->positionId == 3)
							{
								if($infoOverallLineup->positionId == 0)
								{
									$position = "Goalkeeper";
								}
								if($infoOverallLineup->positionId == 1)
								{
									$position = "Defender";
								}
								if($infoOverallLineup->positionId == 2)
								{
									$position = "Midfielder";
								}
								if($infoOverallLineup->positionId == 3)
								{
									$position = "Forward";
								}
							}

							// 4 columns:
							// 0: goalkeeper, 
							// 1: defender, 
							// 2: defensive midfielder, 
							// 3: offensive midfielder, 
							// 4: forward

							if($infoLineup->positionId == 4)
							{
								if($infoOverallLineup->positionId == 0)
								{
									$position = "Goalkeeper";
								}
								if($infoOverallLineup->positionId == 1)
								{
									$position = "Defender";
								}
								if($infoOverallLineup->positionId == 2)
								{
									$position = "Defensive Midfielder";
								}
								if($infoOverallLineup->positionId == 3)
								{
									$position = "Offensive Midfielder";
								}
								if($infoOverallLineup->positionId == 4)
								{
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

							if($infoLineup->positionId == 5)
							{
								if($infoOverallLineup->positionId == 0)
								{
									$position = "Goalkeeper";
								}
								if($infoOverallLineup->positionId == 1)
								{
									$position = "Defender";
								}
								if($infoOverallLineup->positionId == 2)
								{
									$position = "Defensive Midfielder";
								}
								if($infoOverallLineup->positionId == 3)
								{
									$position = "Midfielder";
								}
								if($infoOverallLineup->positionId == 4)
								{
									$position = "Offensive Midfielder";
								}
								if($infoOverallLineup->positionId == 5)
								{
									$position = "Forward";
								}
							}

							// Some matches have no specific lineup positions, and all return 0.

							if($infoLineup->positionId == 0)
							{
								$position = "";
							}

							// GET PLAYER PHOTO

							$infoPlayer2 = tep_fetch_object(tep_query("SELECT * FROM nano_football_player_info WHERE player_playerId = '".$infoOverallLineup->playerId."'"));

							if($infoPlayer2->player_photo2 == "")
							{
								$playerLogo = "includes/images/football/general/lineups-user-icon.png";
							}
							else
							{
								$playerLogo = "includes/images/football/team/player/" . $infoPlayer2->player_photo2;
							}

							// echo '
							// 	<div=""></div>
							// ';
						}

						// AWAY LINEUPS

						else if($infoOverallLineup->lineups_type == 'AWAY_LINEUP')
						{	
							$infoLineup = tep_fetch_object(tep_query("SELECT MAX(positionId) AS positionId FROM nano_football_lineups WHERE matchId = '".$infoOverallLineup->matchId."' AND lineups_type = 'AWAY_LINEUP'"));

							// HOME FORMATION

							// 0: Goalkeeper, 
							// 1: Defender, 
							// 2: Midfielder, 
							// 3: Forward

							if($infoLineup->positionId == 3)
							{
								if($infoOverallLineup->positionId == 0)
								{
									$position = "Goalkeeper";
								}
								if($infoOverallLineup->positionId == 1)
								{
									$position = "Defender";
								}
								if($infoOverallLineup->positionId == 2)
								{
									$position = "Midfielder";
								}
								if($infoOverallLineup->positionId == 3)
								{
									$position = "Forward";
								}
							}

							// 4 columns:
							// 0: goalkeeper, 
							// 1: defender, 
							// 2: defensive midfielder, 
							// 3: offensive midfielder, 
							// 4: forward

							if($infoLineup->positionId == 4)
							{
								if($infoOverallLineup->positionId == 0)
								{
									$position = "Goalkeeper";
								}
								if($infoOverallLineup->positionId == 1)
								{
									$position = "Defender";
								}
								if($infoOverallLineup->positionId == 2)
								{
									$position = "Defensive Midfielder";
								}
								if($infoOverallLineup->positionId == 3)
								{
									$position = "Offensive Midfielder";
								}
								if($infoOverallLineup->positionId == 4)
								{
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

							if($infoLineup->positionId == 5)
							{
								if($infoOverallLineup->positionId == 0)
								{
									$position = "Goalkeeper";
								}
								if($infoOverallLineup->positionId == 1)
								{
									$position = "Defender";
								}
								if($infoOverallLineup->positionId == 2)
								{
									$position = "Defensive Midfielder";
								}
								if($infoOverallLineup->positionId == 3)
								{
									$position = "Midfielder";
								}
								if($infoOverallLineup->positionId == 4)
								{
									$position = "Offensive Midfielder";
								}
								if($infoOverallLineup->positionId == 5)
								{
									$position = "Forward";
								}
							}

							// Some matches have no specific lineup positions, and all return 0.

							if($infoLineup->positionId == 0)
							{
							$position = "";
							}

							// GET PLAYER PHOTO

							$infoPlayer2 = tep_fetch_object(tep_query("SELECT * FROM nano_football_player_info WHERE player_playerId = '".$infoOverallLineup->playerId."'"));

							if($infoPlayer2->player_photo2 == "")
							{
								$playerLogo = "includes/images/football/general/lineups-user-icon.png";
							}
							else
							{
								$playerLogo = "includes/images/football/team/player/" . $infoPlayer2->player_photo2;
							}
						}

						// HOME BACKUPS

						else if($infoOverallLineup->lineups_type == 'HOME_BACKUP')
						{
							$countBackupHome++;

							// echo "home backup : " . $countBackupHome . "<br>";

							$infoLineup = tep_fetch_object(tep_query("SELECT MAX(positionId) AS positionId FROM nano_football_lineups WHERE matchId = '".$infoOverallLineup->matchId."' AND lineups_type = 'HOME_BACKUP'"));

							// HOME FORMATION

							// 0: Goalkeeper, 
							// 1: Defender, 
							// 2: Midfielder, 
							// 3: Forward

							if($infoLineup->positionId == 3)
							{
								if($infoOverallLineup->positionId == 0)
								{
									$position = "Goalkeeper";
								}
								if($infoOverallLineup->positionId == 1)
								{
									$position = "Defender";
								}
								if($infoOverallLineup->positionId == 2)
								{
									$position = "Midfielder";
								}
								if($infoOverallLineup->positionId == 3)
								{
									$position = "Forward";
								}
							}

							// 4 columns:
							// 0: goalkeeper, 
							// 1: defender, 
							// 2: defensive midfielder, 
							// 3: offensive midfielder, 
							// 4: forward

							if($infoLineup->positionId == 4)
							{
								if($infoOverallLineup->positionId == 0)
								{
									$position = "Goalkeeper";
								}
								if($infoOverallLineup->positionId == 1)
								{
									$position = "Defender";
								}
								if($infoOverallLineup->positionId == 2)
								{
									$position = "Defensive Midfielder";
								}
								if($infoOverallLineup->positionId == 3)
								{
									$position = "Offensive Midfielder";
								}
								if($infoOverallLineup->positionId == 4)
								{
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

							if($infoLineup->positionId == 5)
							{
								if($infoOverallLineup->positionId == 0)
								{
									$position = "Goalkeeper";
								}
								if($infoOverallLineup->positionId == 1)
								{
									$position = "Defender";
								}
								if($infoOverallLineup->positionId == 2)
								{
									$position = "Defensive Midfielder";
								}
								if($infoOverallLineup->positionId == 3)
								{
									$position = "Midfielder";
								}
								if($infoOverallLineup->positionId == 4)
								{
									$position = "Offensive Midfielder";
								}
								if($infoOverallLineup->positionId == 5)
								{
									$position = "Forward";
								}
							}

							// Some matches have no specific lineup positions, and all return 0.

							if($infoLineup->positionId == 0)
							{
							$position = "";
							}

							// GET PLAYER PHOTO

							$infoPlayer2 = tep_fetch_object(tep_query("SELECT * FROM nano_football_player_info WHERE player_playerId = '".$infoOverallLineup->playerId."'"));

							if($infoPlayer2->player_photo2 == "")
							{
								$playerLogo = "includes/images/football/general/lineups-user-icon.png";
							}
							else
							{
								$playerLogo = "includes/images/football/team/player/" . $infoPlayer2->player_photo2;
							}

							$playerBackupHome = $infoOverallLineup->nameEn;

							echo '<tr>
	                                <td class="col-show-standing" style="text-align: left;">
	                                	<div class="row">
	                                		<div class="col-sm-1">'.$infoOverallLineup->number.'</div>
	                                		<div class="col-sm-1"><img src="'.$playerLogo.'" style="border-radius: 50% !important; object-fit: cover !important; height: 28px !important; width: 28px !important;"></div>
	                                		<div class="col-sm-4">'.$infoOverallLineup->nameEn.'</div>
	                                		<div class="col-sm-6">'.$divShowStat.'</div>
	                                	</div>
	                                <td class="col-show-standing" id="col-show-lineups-backup'.$countBackupHome.'" style="text-align: left;"></td>
	                                <td>
	                              </tr>';
						}

						// AWAY BACKUPS
						
						else if($infoOverallLineup->lineups_type == 'AWAY_BACKUP')
						{
							$countBackupAway++;

							$infoLineup = tep_fetch_object(tep_query("SELECT MAX(positionId) AS positionId FROM nano_football_lineups WHERE matchId = '".$infoOverallLineup->matchId."' AND lineups_type = 'AWAY_BACKUP'"));

							// HOME FORMATION

							// 0: Goalkeeper, 
							// 1: Defender, 
							// 2: Midfielder, 
							// 3: Forward

							if($infoLineup->positionId == 3)
							{
								if($infoOverallLineup->positionId == 0)
								{
									$position = "Goalkeeper";
								}
								if($infoOverallLineup->positionId == 1)
								{
									$position = "Defender";
								}
								if($infoOverallLineup->positionId == 2)
								{
									$position = "Midfielder";
								}
								if($infoOverallLineup->positionId == 3)
								{
									$position = "Forward";
								}
							}

							// 4 columns:
							// 0: goalkeeper, 
							// 1: defender, 
							// 2: defensive midfielder, 
							// 3: offensive midfielder, 
							// 4: forward

							if($infoLineup->positionId == 4)
							{
								if($infoOverallLineup->positionId == 0)
								{
									$position = "Goalkeeper";
								}
								if($infoOverallLineup->positionId == 1)
								{
									$position = "Defender";
								}
								if($infoOverallLineup->positionId == 2)
								{
									$position = "Defensive Midfielder";
								}
								if($infoOverallLineup->positionId == 3)
								{
									$position = "Offensive Midfielder";
								}
								if($infoOverallLineup->positionId == 4)
								{
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

							if($infoLineup->positionId == 5)
							{
								if($infoOverallLineup->positionId == 0)
								{
									$position = "Goalkeeper";
								}
								if($infoOverallLineup->positionId == 1)
								{
									$position = "Defender";
								}
								if($infoOverallLineup->positionId == 2)
								{
									$position = "Defensive Midfielder";
								}
								if($infoOverallLineup->positionId == 3)
								{
									$position = "Midfielder";
								}
								if($infoOverallLineup->positionId == 4)
								{
									$position = "Offensive Midfielder";
								}
								if($infoOverallLineup->positionId == 5)
								{
									$position = "Forward";
								}
							}

							// Some matches have no specific lineup positions, and all return 0.

							if($infoLineup->positionId == 0)
							{
							$position = "";
							}

							// GET PLAYER PHOTO

							$infoPlayer2 = tep_fetch_object(tep_query("SELECT * FROM nano_football_player_info WHERE player_playerId = '".$infoOverallLineup->playerId."'"));

							if($infoPlayer2->player_photo2 == "")
							{
								$playerLogo = "includes/images/football/general/lineups-user-icon.png";
							}
							else
							{
								$playerLogo = "includes/images/football/team/player/" . $infoPlayer2->player_photo2;
							}

							$playerBackupAway = $infoOverallLineup->nameEn;

	                        $awayRow = '<div class="row">
	                                		<div class="col-sm-1">'.$infoOverallLineup->number.'</div>
	                                		<div class="col-sm-1"><img src="'.$playerLogo.'" style="border-radius: 50% !important; object-fit: cover !important; height: 28px !important; width: 28px !important;"></div>
	                                		<div class="col-sm-2">'.$infoOverallLineup->nameEn.'</div>
	                                		<div class="col-sm-6">'.$divShowStat.'</div>
	                                	</div>';
            				?>
                        	<script>
					        	$('#col-show-lineups-backup<?php echo $countBackupAway;?>').html('<div class="row"><div class="col-sm-1"><?php echo $infoOverallLineup->number;?></div><div class="col-sm-1"><img src="<?php echo $playerLogo; ?>" style="border-radius: 50% !important; object-fit: cover !important; height: 28px !important; width: 28px !important;"></div><div class="col-sm-4"><?php echo $infoOverallLineup->nameEn; ?></div><div class="col-sm-6"><?php echo $divShowStat; ?></div></div>');

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
        


    </div>  <!-- panel_details-->