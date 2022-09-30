
    <div class="panel_right" >

        <?php
      
          slide_banner($getMember);

        ?>
		
        <div class="home_date">
            
            
            <?php

            if($_GET['selectDate']!=""){
                $_SESSION['selectDate'] = $_GET['selectDate'];
            }

            if($_SESSION['selectDate']==""){
                $_SESSION['selectDate'] = date('Y-m-d');
            }

            echo "
              <div class=\"dateBox\">
                  <i class=\"fa fa-star\" style=\"margin-top:6px;\"></i> Favourite
              </div>";
            
            for($d=-2; $d<=2; $d++){

                $strDateRange = date('Y-m-d') . $d . ' days';

                if($_SESSION['selectDate'] == date('Y-m-d', strtotime($strDateRange))){
                    $selectDateHighlight = "dateBoxSelected";
                } else {
                    $selectDateHighlight = "";
                }

                echo "
                <div class=\"dateBox {$selectDateHighlight}\" onclick=\"window.location='?selectDate=".date('Y-m-d', strtotime($strDateRange))."'\">".
                    date('D', strtotime($strDateRange))."<br>".
                    date('d M', strtotime($strDateRange))."
                </div>";
            
            }

            // SET FILTER SORT 
            // SET FILTER SORT 
            // SET FILTER SORT 
            if($_GET['filterSort']!=""){
                $_SESSION['filterSort'] = $_GET['filterSort'];
            }
            if($_SESSION['filterSort']==""){
                $_SESSION['filterSort'] = "sortByLeague";
            }

            ?>

            <select class="filter_dropdown" onchange="window.location='?filterSort='+this.value">
                <?php
                $filterSort = '<option value="sortByLeague">Sort by League</option>
                               <option value="sortByTime">Sort by Time</option>';
                echo str_replace("value=\"".$_SESSION['filterSort']."\">", "value=\"".$_SESSION['filterSort']."\" SELECTED>", $filterSort);
                ?>
            </select>

            <div style="clear:both"></div>

        </div>


        <div class="home_schedule">
            


            <style >
          
       
            
              

            </style>


            <?php

            if($_GET['selectDate']!=""){
              $extSql .= " AND DATE_FORMAT(match_time, '%Y-%m-%d') = '".$_GET['selectDate']."' ";
              
            } else {
              $extSql .= " AND DATE_FORMAT(match_time, '%Y-%m-%d') = '".date('Y-m-d')."' ";
              
            }

            // FILTER SORT
            // FILTER SORT
            // FILTER SORT
            switch($_SESSION['filterSort']){
                case "sortByTime": 
                      $extSql .= " AND match_time > NOW() ";
                      $extSqlOrder = " league_popular ASC, bll.league_countryEn ASC, sm.match_time ASC ";
                      break;
                default: 
                      $extSqlOrder = " bll.league_countryEn ASC, sm.match_time ASC, league_popular ASC ";
            }


            switch($_GET['filterLive']){
                case "LIVE":
                    $extSql .= " AND (sm.match_state = 'The first quarter' OR sm.match_state = 'The second quarter' OR sm.match_state = 'The third quarter' OR sm.match_state = 'The fourth quarter' OR sm.match_state = 'Half-time' ) ";
                    break;
                case "END":
                    $extSql .= " AND sm.match_state = 'Finished' ";
                    break;
            }

            $qryString = "SELECT *, COALESCE(pl.league_update_status, match_leagueId) AS league_popular,
                            match_leagueId, match_leagueEn
                        FROM nano_basketball_schedule_match sm
                        LEFT JOIN nano_basketball_league_list bll ON sm.match_leagueId = bll.league_leagueId
                        LEFT JOIN nano_basketball_popular_league pl ON pl.league_code = sm.match_leagueId
                        LEFT JOIN nano_basketball_live_match blm ON blm.MatchID = sm.glive_id
                        WHERE
                          1=1
                          $extSql
                        ORDER BY ". $extSqlOrder;
            
            // LIVE COUNT
            // LIVE COUNT
            // LIVE COUNT

            $liveCount = tep_num_rows(tep_query("SELECT * FROM nano_basketball_schedule_match WHERE (match_state = 'The first quarter' OR match_state = 'The second quarter' OR match_state = 'The third quarter' OR match_state = 'The fourth quarter' OR match_state = 'Half-time' ) AND DATE(match_time) = '".date("Y-m-d")."' "));

            $qryRow = tep_query($qryString);

            $leagueId = "";

            if(tep_num_rows($qryRow)!=0){

                while($infoRow = tep_fetch_object($qryRow)){

                  if ( $infoRow->match_leagueId != $leagueId) {

                    $leagueId = $infoRow->match_leagueId;

                    echo "
                    <div class=\"league_title\">
                      
                      <div style=\"margin-left:10px;float:left;width:25px;\">
                        <img src=\"includes/images/basketball/country/logo/" . strtolower($infoRow->league_countryEn) . ".svg\" />
                      </div>

                      <div style=\"margin-left:10px;float:left;margin-top:3px;width:379px;\">
                        ".$infoRow->league_countryEn.": ".$infoRow->league_nameEn."
                      </div>


                      <div class=\"league_score\">
                          <div class=\"league_score_quarter\">
                            Q1
                          </div>
                          <div class=\"league_score_quarter\">
                            Q2
                          </div>
                          <div class=\"league_score_quarter\">
                            Q3
                          </div>
                          <div class=\"league_score_quarter\">
                            Q4
                          </div>
                          <div class=\"league_score_total\">
                            Total
                          </div>
                      </div>

                      <div style=\"clear:both\"></div>

                    </div>";

                  } 





                  // STATUS// STATUS// STATUS// STATUS// STATUS// STATUS// STATUS// STATUS
                  // STATUS// STATUS// STATUS// STATUS// STATUS// STATUS// STATUS// STATUS
                  // STATUS// STATUS// STATUS// STATUS// STATUS// STATUS// STATUS// STATUS

                  // JY NEW CODE HERE 20220923

                  switch ($infoRow->match_state) 
                  {
                    case 'The first quarter':

                      $matchProgressTime = 'Q1';
                      $remainTime = $infoRow->match_remainTime == null ? "" : $infoRow->match_remainTime;

                      break;

                    case 'The second quarter':

                      $matchProgressTime = 'Q2';
                      $remainTime = $infoRow->match_remainTime == null ? "" : $infoRow->match_remainTime;
                      
                      break;

                    case 'The third quarter':

                      $matchProgressTime = 'Q3';
                      $remainTime = $infoRow->match_remainTime == null ? "" : $infoRow->match_remainTime;
                      
                      break;

                    case 'The fourth quarter':

                      $matchProgressTime = 'Q4';
                      $remainTime = $infoRow->match_remainTime == null ? "" : $infoRow->match_remainTime;
                      
                      break;

                    case 'Finished':

                      $matchProgressTime = 'FT';
                      $remainTime = "";
                      
                      break;

                    case 'Half-time':

                      $matchProgressTime = 'HT';
                      $remainTime = $infoRow->match_remainTime == null ? "" : $infoRow->match_remainTime;
                    
                    default:
                      $matchProgressTime = $infoRow->match_state;
                      $remainTime = "";
                      break;
                  }

              
                  // SCORE HIGHLIGHT
                  // SCORE HIGHLIGHT
                  // SCORE HIGHLIGHT
                  $strMatchHome1Bold = "";
                  $strMatchAway1Bold = "";
                  if($infoRow->match_home1 > $infoRow->match_away1){
                      $strMatchHome1Bold = "league_score_quarter_bold";
                  } else if($infoRow->match_away1 > $infoRow->match_home1){
                      $strMatchAway1Bold = "league_score_quarter_bold";
                  }

                  $strMatchHome2Bold = "";
                  $strMatchAway2Bold = "";
                  if($infoRow->match_home2 > $infoRow->match_away2){
                      $strMatchHome2Bold = "league_score_quarter_bold";
                  } else if($infoRow->match_away2 > $infoRow->match_home2){
                      $strMatchAway2Bold = "league_score_quarter_bold";
                  }

                  $strMatchHome3Bold = "";
                  $strMatchAway3Bold = "";
                  if($infoRow->match_home3 > $infoRow->match_away3){
                      $strMatchHome3Bold = "league_score_quarter_bold";
                  } else if($infoRow->match_away3 > $infoRow->match_home3){
                      $strMatchAway3Bold = "league_score_quarter_bold";
                  }

                  $strMatchHome4Bold = "";
                  $strMatchAway4Bold = "";
                  if($infoRow->match_home4 > $infoRow->match_away4){
                      $strMatchHome4Bold = "league_score_quarter_bold";
                  } else if($infoRow->match_away4 > $infoRow->match_home4){
                      $strMatchAway4Bold = "league_score_quarter_bold";
                  }

                  $strMatchHomeScoreBold = "";
                  $strMatchAwayScoreBold = "";
                  if($infoRow->match_homeScore > $infoRow->match_awayScore){
                      $strMatchHomeScoreBold = "league_score_quarter_bold";
                  } else if($infoRow->match_awayScore > $infoRow->match_homeScore){
                      $strMatchAwayScoreBold = "league_score_quarter_bold";
                  }


                  // GLIVE_ID  // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID 
                  // GLIVE_ID  // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID 
                  // GLIVE_ID  // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID 
                  if($infoRow->glive_id > 0){
                      
                      if($infoRow->match_state=="Finished"){
                      
                          $strLive = "<img src=\"includes/images/icon-live-grey.jpg\" style=\"height:18px;\" /> <img src=\"includes/images/icon-live-finished.png\" style=\"height:18px;\" />";

                      } else if( $infoRow->match_state=="First half" || $infoRow->match_state=="Second half" || $infoRow->match_state=="Half-time break" || $infoRow->NowPlaying=="1" ){

                          $strLive = "<img src=\"includes/images/icon-live.gif\" />";

                      } else {

                          $strLive = "<img src=\"includes/images/icon-sleep.png\" style=\"height:18px;\" />";

                      }

                  } else {
                    $strLive = "";
                  }


                  switch($matchProgressTime){
                      case "Not started":
                      case "TBD":
                      case "Postponed":
                      case "Cancelled":
                          $infoRow->match_home1 = "-";
                          $infoRow->match_home2 = "-";
                          $infoRow->match_home3 = "-";
                          $infoRow->match_home4 = "-";
                          $infoRow->match_homeScore = "-";
                          $infoRow->match_away1 = "-";
                          $infoRow->match_away2 = "-";
                          $infoRow->match_away3 = "-";
                          $infoRow->match_away4 = "-";
                          $infoRow->match_awayScore = "-";
                  }

                  // NOW PLAYING AND BLINKING 
                  // NOW PLAYING AND BLINKING 
                  // NOW PLAYING AND BLINKING 

                  $totalHomeScore = "";
                  $totalAwayScore = "";
                  $firstQuarterHomeScore = "";
                  $firstQuarterAwayScore = "";
                  $secondQuarterHomeScore = "";
                  $secondQuarterAwayScore = "";
                  $thirdQuarterHomeScore = "";
                  $thirdQuarterAwayScore = "";
                  $fourthQuarterHomeScore = "";
                  $fourthQuarterAwayScore = "";
                  
                  if($matchProgressTime == 'Q1')
                  {
                      $strNowPlaying = "league_matches_row_now_playing";
                      $firstQuarterHomeScore = "league_score_quarter_red";
                      $firstQuarterAwayScore = "league_score_quarter_red";
                      $totalHomeScore = "league_score_quarter_red";
                      $totalAwayScore = "league_score_quarter_red";
                  } 
                  else if($matchProgressTime == 'Q2')
                  {
                      $strNowPlaying = "league_matches_row_now_playing";
                      $secondQuarterHomeScore = "league_score_quarter_red";
                      $secondQuarterAwayScore = "league_score_quarter_red";
                      $totalHomeScore = "league_score_quarter_red";
                      $totalAwayScore = "league_score_quarter_red";
                  } 
                  else if($matchProgressTime == 'Q3')
                  {
                      $strNowPlaying = "league_matches_row_now_playing";
                      $thirdQuarterHomeScore = "league_score_quarter_red";
                      $thirdQuarterAwayScore = "league_score_quarter_red";
                      $totalHomeScore = "league_score_quarter_red";
                      $totalAwayScore = "league_score_quarter_red";
                  } 
                  else if($matchProgressTime == 'Q4')
                  {
                      $strNowPlaying = "league_matches_row_now_playing";
                      $fourthQuarterHomeScore = "league_score_quarter_red";
                      $fourthQuarterAwayScore = "league_score_quarter_red";
                      $totalHomeScore = "league_score_quarter_red";
                      $totalAwayScore = "league_score_quarter_red";
                  } 
                  else if($matchProgressTime == 'Cancelled' || $matchProgressTime == 'Interrupted' || $matchProgressTime == 'Postponed' || $matchProgressTime == "TBD")
                  {
                      $strNowPlaying = "league_matches_row_now_playing";
                  }
                  else 
                  {
                      $strNowPlaying = "";
                      $totalHomeScore = "";
                      $totalAwayScore = "";
                      $firstQuarterHomeScore = "";
                      $firstQuarterAwayScore = "";
                      $secondQuarterHomeScore = "";
                      $secondQuarterAwayScore = "";
                      $thirdQuarterHomeScore = "";
                      $thirdQuarterAwayScore = "";
                      $fourthQuarterHomeScore = "";
                      $fourthQuarterAwayScore = "";
                  }


                  echo "
                  <div class=\"league_matches_row\" match-id=\"".$infoRow->match_id."\" onclick=\"window.location='basketball-live?id=".createToken($infoRow->match_id)."'\">
                    
                    <div class=\"league_matches_row_time\">
                      ".date('H:i:s',strtotime($infoRow->match_time))." 
                    </div>

                    <div class=\"league_matches_row_status {$strNowPlaying} \">
                      ".$matchProgressTime." <br> ".$remainTime."
                    </div>

                    <div class=\"league_matches_row_team\">
                      ".$infoRow->match_homeTeamEn."<br>
                      ".$infoRow->match_awayTeamEn."
                    </div>

                    <div class=\"league_score\">
                        <div class=\"league_score_quarter {$strMatchHome1Bold} {$firstQuarterHomeScore}\">
                          ".$infoRow->match_home1."
                        </div>
                        <div class=\"league_score_quarter {$strMatchHome2Bold} {$secondQuarterHomeScore}\">
                          ".$infoRow->match_home2."
                        </div>
                        <div class=\"league_score_quarter {$strMatchHome3Bold} {$thirdQuarterHomeScore}\">
                          ".$infoRow->match_home3."
                        </div>
                        <div class=\"league_score_quarter {$strMatchHome4Bold} {$fourthQuarterHomeScore}\">
                          ".$infoRow->match_home4."
                        </div>

                        <div class=\"league_score_total {$strMatchHomeScoreBold} {$totalHomeScore}\">
                          ".$infoRow->match_homeScore."
                        </div>

                        <div style=\"clear:both\"></div>

                        <div class=\"league_score_quarter {$strMatchAway1Bold} {$firstQuarterAwayScore}\">
                          ".$infoRow->match_away1."
                        </div>
                        <div class=\"league_score_quarter {$strMatchAway2Bold} {$secondQuarterAwayScore}\">
                          ".$infoRow->match_away2."
                        </div>
                        <div class=\"league_score_quarter {$strMatchAway3Bold} {$thirdQuarterAwayScore}\">
                          ".$infoRow->match_away3."
                        </div>
                        <div class=\"league_score_quarter {$strMatchAway4Bold} {$fourthQuarterAwayScore} \">
                          ".$infoRow->match_away4."
                        </div>

                        <div class=\"league_score_total {$strMatchAwayScoreBold} {$totalAwayScore} \">
                          ".$infoRow->match_awayScore."
                        </div>

                        <div style=\"clear:both\"></div>

                    </div>

                    
                    <div class=\"league_matches_row_live\">
                      {$strLive}
                    </div>

                    <div style=\"clear:both\"></div>

                  </div>";


             


                } // WHILE // WHILE // WHILE // WHILE // WHILE // WHILE // WHILE // WHILE

            } else {

                echo "<div class=\"noData\">No matches.</div>";

            }


            ?>


        </div> <!--// home_schedule -->
		

    </div> 


    <!-- SHOW THE LIVE COUNT IN HEADER -->
    <!-- SHOW THE LIVE COUNT IN HEADER -->
    <!-- SHOW THE LIVE COUNT IN HEADER -->
    <script>
      $('#spanLiveCount').html("(<?php echo $liveCount; ?>)");
    </script>

      
