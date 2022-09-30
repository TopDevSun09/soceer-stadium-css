<?php include "includes/mvc-controller/football-main.php"; ?>
    <div class="panel_right" >
        <?php slide_banner($getMember); ?>
        <div class="home_date">
			<div class="dateBox">
				<i class="fa fa-star" style="margin-top:6px;"></i> Favourite
			</div>
            <?php
			//Don't need to write static html in php using echo, you are giving extra work to php runtime to do, and this will cost us
            
            for($d=-2; $d<=2; $d++){
                $strDateRange = date('Y-m-d') . $d . ' days';
				
				//No need to write extra else if you have only one condition
				$selectDateHighlight = "";
                if($_SESSION['selectDate'] == date('Y-m-d', strtotime($strDateRange))){
                    $selectDateHighlight = "dateBoxSelected";
                }

                echo "
                <div class=\"dateBox {$selectDateHighlight}\" onclick=\"window.location='?selectDate=".date('Y-m-d', strtotime($strDateRange))."'\">".
                    date('D', strtotime($strDateRange))."<br>".
                    date('d M', strtotime($strDateRange))."
                </div>";
            
            }
            ?>
            <select class="filter_dropdown" onchange="window.location='?filterData='+this.value">
                <option value="Rankings">Rankings</option>
                <option value="RedCard">Red Card</option>
                <option value="YellowCard">Yellow Card</option>
                <option value="HTScore">HT Score </option>
                <option value="Corner">Corner</option>
            </select>
            <select class="filter_dropdown" onchange="window.location='?filterSort='+this.value">
                <?php
				//There is a much better way to do this, i will teach you all these things after this project
                $filterSort = '<option value="sortByLeague">Sort by League</option>
                               <option value="sortByTime">Sort by Time</option>';
                echo str_replace("value=\"".$_SESSION['filterSort']."\">", "value=\"".$_SESSION['filterSort']."\" SELECTED>", $filterSort);
                ?>
            </select>
            <div style="clear:both"></div>
        </div>

        <div class="home_schedule">
            <?php

            // GLIVE MATCHES

            $qryRowGlive = tep_query($qryGlive);

            $strGlive = "";

            if(tep_num_rows($qryRowGlive) != 0)
            {
            	while($infoRowGlive = tep_fetch_object($qryRowGlive))
            	{
            		// STATUS// STATUS// STATUS// STATUS// STATUS// STATUS// STATUS// STATUS
					//Always initialize a variable outside a block, otherwise it will create bugs
					$matchProgressTime = '-';
					
					if($infoRowGlive->NowPlaying == 1){
						$todayDate = date_create(date("Y-m-d H:i:s"));
						$startDate = date_create($infoRowGlive->TimeStart);
						$diffDate = date_diff($startDate, $todayDate);
						$remainingDay = $diffDate->format('%R%a');
						$remainingTime = $diffDate->format("%H");
						$remainingMins = $diffDate->format("%i");

						$mins = $remainingTime * 60;
						$matchProgressTime = $mins + $remainingMins . "'";
						
						if($matchProgressTime > 60){
							$matchProgressTime = '60+';
						}

						if($matchProgressTime > 90){
							$matchProgressTime = '90+';
						}

					}else if($infoRowGlive->NowPlaying == 0 && $infoRowGlive->TimeStart > date("Y-m-d H:i:s")){
						$matchProgressTime = "Not started";
					}else if($infoRowGlive->NowPlaying == 0 && $infoRowGlive->TimeStop < date("Y-m-d H:i:s")){
						$matchProgressTime = "FT";
					}

					// CONTROL NOT STARTED
					switch($matchProgressTime){
						case "Not started":
							$matchProgressTime = "-";
							$hideData = "hideData";
							break;
						default:
							$hideData = "";
					}

					// SCORE // SCORE // SCORE // SCORE // SCORE // SCORE // SCORE // SCORE // SCORE
					$homeScore = "color: #a5b1c2;";
					$awayScore = "color: #a5b1c2;";
					
					if( $infoRowGlive->HomeScore > $infoRowGlive->AwayScore){
						$homeScore = "color: #000000;";
						$awayScore = "color: #a5b1c2;";
					} else if( $infoRowGlive->AwayScore > $infoRow->HomeScore){
						$homeScore = "color: #a5b1c2;";
						$awayScore = "color: #000000;";
					}

					// NOW PLAYING AND BLINKING 
					$strNowPlaying = "";
					
					if($infoRowGlive->NowPlaying == 1){
                      $strNowPlaying = "league_matches_row_now_playing";
                      $homeScore = "color:red;";
                      $awayScore = "color:red;";
					}

					//  IsLive
					// GLIVE_ID  // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID 
					$strLive = "";
					if($infoRowGlive->MatchID > 0){
						$strLive = "<img src=\"includes/images/icon-live-grey.jpg\" style=\"height:18px;\" />";
						
						if($infoRowGlive->TimeStop < date("Y-m-d H:i:s")){
							$strLive = "<img src=\"includes/images/icon-live-grey.jpg\" style=\"height:18px;\" /> <img src=\"includes/images/icon-live-finished.png\" style=\"height:18px;\" />";

						} else if($infoRowGlive->NowPlaying == 1){
							$strLive = "<img src=\"includes/images/icon-live.gif\" />";
						}
					}

            		$strGlive .= '<div class="league_title">
									<div class="league-name">
										Glive : '.$infoRowGlive->League.'
									</div>
									<div style="clear:both"></div>
								  </div>
								  <div class="league_matches_row" match-id="'.$infoRowGlive->MatchID.'" onclick="window.location=\'football-live?id='.createToken($infoRowGlive->MatchID).'\'">
										<div class="league_matches_row_time">
											'.date('H:i:s',strtotime($infoRowGlive->TimeStart)).'
										</div>

										<div class="league_matches_row_status '.$strNowPlaying.'">
											'.$matchProgressTime.'
										</div>

										<div class="league_matches_row_home">
											'.$infoRowGlive->Home.'
										</div>

										<div class="league_matches_row_score '.$strNowPlaying.'">
											<div class="'.$hideData.'">
												<span  style="'.$homeScore.'">'.$infoRowGlive->HomeScore.'</span>
												- 
												<span  style="'.$awayScore.'">'.$infoRowGlive->AwayScore.'</span>
											</div>
										</div>

										<div class="league_matches_row_away">
											'.$infoRowGlive->Away.'
										</div>

										<div class="league_matches_row_live">
											'.$strLive.'
										</div>
										<div style="clear:both"></div>
									</div>
								';
            	}
            }

            $qryRow = tep_query($qryString);
        	
            $leagueId = "";
            if(tep_num_rows($qryRow)!=0){
                while($infoRow = tep_fetch_object($qryRow)){
					if ( $infoRow->match_leagueId != $leagueId) {
						$leagueId = $infoRow->match_leagueId;
						?>
						<div class="league_title" onclick="window.location='football-league?id=<?php echo createToken($infoRow->league_leagueId); ?>'" style="cursor: pointer;">
							<div style="margin-left:10px;float:left;width:25px;">
								<img src="includes/images/football/country/logo/<?php echo strtolower($infoRow->league_countryEn); ?>.svg" />
							</div>
							<div class="league-name">
								<?php echo $infoRow->league_countryEn.": ".$infoRow->league_nameEn; ?>
							</div>
							<div style="clear:both"></div>
						</div>
						<?php
					} 
					/*
					Don't mix the coding styles, it creates confusion, like in other code you write if like this
					if(condition){
						code
					}
					and in below code you are writing like this
					if(condition)
					{
						code
					}
					*/
					// STATUS// STATUS// STATUS// STATUS// STATUS// STATUS// STATUS// STATUS
					//Always initialize a variable outside a block, otherwise it will create bugs
					$matchProgressTime = $infoRow->match_state;
					
					if($infoRow->match_state == 'First half'){
						$todayDate = date_create(date("Y-m-d H:i:s"));
						$startDate = date_create($infoRow->match_startTime);
						$diffDate = date_diff($startDate, $todayDate);
						$remainingDay = $diffDate->format('%R%a');
						$remainingTime = $diffDate->format("%H");
						$remainingMins = $diffDate->format("%i");

						$mins = $remainingTime * 60;
						$matchProgressTime = $mins + $remainingMins . "'";
						
						if($matchProgressTime > 60){
							$matchProgressTime = '60+';
						}
					}else if($infoRow->match_state == 'Second half'){
						$todayDate = date_create(date("Y-m-d H:i:s"));
						$startDate = date_create($infoRow->match_startTime);
						$diffDate = date_diff($startDate, $todayDate);
						$remainingDay = $diffDate->format('%R%a');
						$remainingTime = $diffDate->format("%H");
						$remainingMins = $diffDate->format("%i");

						$mins = $remainingTime * 60;
						$matchProgressTime = $mins + $remainingMins + 45 . "'";

						if($matchProgressTime > 90){
							$matchProgressTime = '90+';
						}
					}else if($infoRow->match_state == 'Half-time break'){
						$matchProgressTime = "HT";
					}else if($infoRow->match_state == 'Finished'){
						$matchProgressTime = "FT";
					}
					
					// SCORE // SCORE // SCORE // SCORE // SCORE // SCORE // SCORE // SCORE // SCORE
					$homeScore = "color: #a5b1c2;";
					$awayScore = "color: #a5b1c2;";
					
					if( $infoRow->match_homeScore > $infoRow->match_awayScore){
						$homeScore = "color: #000000;";
						$awayScore = "color: #a5b1c2;";
					} else if( $infoRow->match_awayScore > $infoRow->match_homeScore){
						$homeScore = "color: #a5b1c2;";
						$awayScore = "color: #000000;";
					}

					// RANK // RANK// RANK// RANK// RANK// RANK// RANK// RANK// RANK// RANK// RANK// RANK
					$strHomeRank = "";
					if($infoRow->match_homeRankEn!=""){
						// $strHomeRank = "[".$infoRow->match_homeRankEn."]";
						$strHomeRank = "<span class=\"cardRank\">[".$infoRow->match_homeRankEn."]</span>";
						
					}
					
					$strAwayRank = "";
					if($infoRow->match_awayRankEn!=""){
						$strAwayRank = "<span class=\"cardRank\">[".$infoRow->match_awayRankEn."]</span>";
					}
					
					// RED YELLOW // RED YELLOW // RED YELLOW // RED YELLOW // RED YELLOW // RED YELLOW 
					$strHomeRed = "";
					$strAwayRed = "";
					$strHomeYellow = "";
					$strAwayYellow = "";
					
					if($infoRow->match_homeRed > 0){
						$strHomeRed = "<span class=\"cardRed\">".$infoRow->match_homeRed."</span>";
					}
					if($infoRow->match_awayRed > 0){
						$strAwayRed = "<span class=\"cardRed\">".$infoRow->match_awayRed."</span>";
					}

					if($infoRow->match_homeYellow > 0){
						$strHomeYellow = "<span class=\"cardYellow\">".$infoRow->match_homeYellow."</span>";
					}

					if($infoRow->match_awayYellow > 0){
						$strAwayYellow = "<span class=\"cardYellow\">".$infoRow->match_awayYellow."</span>";
					}
					
					// CONTROL NOT STARTED
					switch($matchProgressTime){
						case "Not started":
							$matchProgressTime = "-";
							$hideData = "hideData";
							break;
						case "Cancelled":
						case "Postponed":
						case "TBD":
							$hideData = "hideData";
							break;
						default:
							$hideData = "";
					}
					
					// NOW PLAYING AND BLINKING 
					$strNowPlaying = "";
					
					if( $infoRow->NowPlaying == "1" || strpos($matchProgressTime,"'") > 0 || $matchProgressTime == 'Postponed' || $matchProgressTime == 'Cancelled' || $matchProgressTime == 'Interrupted' || $matchProgressTime == 'TBD' || $matchProgressTime == 'Terminated' || $matchProgressTime == 'HT'){
                      $strNowPlaying = "league_matches_row_now_playing";
                      $homeScore = "color:red;";
                      $awayScore = "color:red;";
					}

					//  IsLive
					// GLIVE_ID  // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID 
					$strLive = "";
					if($infoRow->glive_id > 0){
						$strLive = "<img src=\"includes/images/icon-live-grey.jpg\" style=\"height:18px;\" />";
						
						if($infoRow->match_state=="Finished"){
							$strLive = "<img src=\"includes/images/icon-live-grey.jpg\" style=\"height:18px;\" /> <img src=\"includes/images/icon-live-finished.png\" style=\"height:18px;\" />";

						} else if( $infoRow->match_state=="First half" || $infoRow->match_state=="Second half" || $infoRow->match_state=="Half-time break" || $infoRow->NowPlaying=="1" ){
							$strLive = "<img src=\"includes/images/icon-live.gif\" />";
						} else if( $infoRow->match_state=="Postponed" ){
							$strLive = "<img src=\"includes/images/icon-sleep.png\" style=\"height:18px;margin-top:-1px;\" />";
						}
					}
					?>
					<div class="league_matches_row" match-id="<?php echo $infoRow->match_id; ?>" onclick="window.location='football-live?id=<?php echo createToken($infoRow->match_id); ?>'">
						<div class="league_matches_row_time">
							<?php echo date('H:i:s',strtotime($infoRow->match_time)); ?>
						</div>

						<div class="league_matches_row_status <?php echo $strNowPlaying; ?>">
							<?php echo $matchProgressTime; ?>
						</div>

						<div class="league_matches_row_home">
							<?php echo $strHomeRed."&nbsp;".$strHomeYellow."&nbsp;".$strHomeRank." ".$infoRow->match_homeEn; ?>
						</div>

						<div class="league_matches_row_score <?php echo $strNowPlaying; ?>">
							<div class="<?php echo $hideData; ?>">
								<span  style="<?php echo $homeScore; ?>"><?php echo $infoRow->match_homeScore; ?></span>
								- 
								<span  style="<?php echo $awayScore; ?>"><?php echo $infoRow->match_awayScore; ?></span>
							</div>
						</div>

						<div class="league_matches_row_away">
							<?php echo $infoRow->match_awayEn." ".$strAwayRank."&nbsp;".$strAwayYellow."&nbsp;".$strAwayRed; ?>
						</div>

						<div class="league_matches_row_ht">
							<div class="<?php echo $hideData; ?>">
								HT <?php echo $infoRow->match_homeHalfScore." - ".$infoRow->match_awayHalfScore; ?>
							</div>
						</div>

						<div class="league_matches_row_corner">
							<div class="<?php echo $hideData; ?>">
								<img src="includes/images/icon-corner.svg" style="height:15px;margin-top:-5px;" />
								<?php echo $infoRow->match_homeCorner." - ".$infoRow->match_awayCorner; ?>
							</div>
						</div>

						<div class="league_matches_row_live">
							<?php echo $strLive; ?>
						</div>
						<div style="clear:both"></div>
					</div>

					<?php

				} // WHILE // WHILE // WHILE // WHILE // WHILE // WHILE // WHILE // WHILE

				echo $strGlive;
            }else{
                echo "<div class=\"noData\">No matches.</div>";
            }
            ?>
        </div> <!--// home_schedule -->
    </div> 
    <!-- SHOW THE LIVE COUNT IN HEADER -->
    <script>
		$('#spanLiveCount').html("(<?php echo $liveCount; ?>)");
    </script>