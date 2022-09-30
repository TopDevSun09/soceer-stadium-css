
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
                  <i class=\"fa fa-star\" style=\"margin-top:6px;\">Favourite</i>
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

            ?>

            <select class="filter_dropdown" onchange="window.location='?filterData='+this.value">
                <option value="Rankings">Rankings</option>
                <option value="RedCard">Red Card</option>
                <option value="YellowCard">Yellow Card</option>
                <option value="HTScore">HT Score </option>
                <option value="Corner">Corner</option>
            </select>

            <?php

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
                      $extSqlOrder = " league_popular ASC, match_time ASC "; 
                      break;
                default: 
                      $extSqlOrder = " league_popular ASC, match_time ASC ";
            }


            switch($_GET['filterLive']){
                case "LIVE":
                   
                    $extSql .= " AND (sm.match_state = 'First half' OR sm.match_state = 'Second half' OR sm.match_state = 'Half-time break' ) ";
                    break;
                case "END":
                    $extSql .= " AND sm.match_state = 'Finished' ";
                    break;
            }


            $qryString = "SELECT *, COALESCE(pl.league_update_status, match_leagueId) AS league_popular, 
                            match_leagueId,  match_leagueEn
                        FROM nano_schedule_match sm 
                        LEFT JOIN nano_football_leagues_list ll ON sm.match_leagueId = ll.league_leagueId 
                        LEFT JOIN nano_football_popular_league pl ON pl.league_code = sm.match_leagueId 
                        LEFT JOIN nano_live_match_list lml ON lml.MatchId = sm.glive_id 
                        WHERE 
                          1=1 
                          $extSql 
                        ORDER BY ".$extSqlOrder;

            // CALCULATE THE LIVE COUNT (IN PROGRESS MATCH)
            $liveCount = tep_num_rows(tep_query($qryString));

            echo "JY test test test" . "<br>";

            $qryRow = tep_query($qryString);

            $leagueId = "";

            if(tep_num_rows($qryRow)!=0){

                while($infoRow = tep_fetch_object($qryRow)){

                  if ( $infoRow->match_leagueId != $leagueId) {

                    $leagueId = $infoRow->match_leagueId;

                    echo "
                    <div class=\"league_title\">
                      
                      <div style=\"margin-left:10px;float:left;width:25px;\">
                        <img src=\"includes/images/football/country/logo/" . strtolower($infoRow->league_countryEn) . ".svg\" />
                      </div>

                      <div style=\"margin-left:10px;float:left;margin-top:3px;\">
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

                  // CONTROL NOT STARTED
                  // CONTROL NOT STARTED
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
                  // NOW PLAYING AND BLINKING 
                  // NOW PLAYING AND BLINKING 
                  if( $infoRow->NowPlaying == "1" || strpos($matchProgressTime,"'") > 0 || $matchProgressTime == 'Postponed' || $matchProgressTime == 'Cancelled' || $matchProgressTime == 'Interrupted' || $matchProgressTime == 'TBD' || $matchProgressTime == 'Terminated' || $matchProgressTime == 'HT'){
                      $strNowPlaying = "league_matches_row_now_playing";
                      $homeScore = "color:red;";
                      $awayScore = "color:red;";
                  } else {
                      $strNowPlaying = "";
                  }

                  //  IsLive

                  // GLIVE_ID  // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID 
                  // GLIVE_ID  // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID 
                  // GLIVE_ID  // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID 
                  if($infoRow->glive_id > 0){
                      
                      if($infoRow->match_state=="Finished"){
                      
                          $strLive = "<img src=\"includes/images/icon-live-grey.jpg\" style=\"height:18px;\" /> <img src=\"includes/images/icon-live-finished.png\" style=\"height:18px;\" />";

                      } else if( $infoRow->match_state=="First half" || $infoRow->match_state=="Second half" || $infoRow->match_state=="Half-time break" || $infoRow->NowPlaying=="1" ){

                          $strLive = "<img src=\"includes/images/icon-live.gif\" />";

                      } else if( $infoRow->match_state=="Postponed" ){

                          $strLive = "<img src=\"includes/images/icon-sleep.png\" style=\"height:18px;margin-top:-1px;\" />";

                      } else {

                          $strLive = "<img src=\"includes/images/icon-live-grey.jpg\" style=\"height:18px;\" />";

                      }

                  } else {
                      
                      $strLive = "";

                  }

                  


                  echo "
                  <div class=\"league_matches_row\" match-id=\"".$infoRow->match_id."\" onclick=\"window.location='football-live?id=".createToken($infoRow->match_id)."'\">
                    
                    <div class=\"league_matches_row_time\">
                      ".date('H:i:s',strtotime($infoRow->match_time))." 
                    </div>

                    <div class=\"league_matches_row_status {$strNowPlaying}\">
                      ".$matchProgressTime."
                    </div>

                    <div class=\"league_matches_row_home\">
                      {$strHomeRed} 
                      {$strHomeYellow} 
                      ".$strHomeRank." ".$infoRow->match_homeEn."
                    </div>

                    <div class=\"league_matches_row_score {$strNowPlaying}\">
                      <div class=\"{$hideData}\">
                        <span style=\"{$homeScore}\">".$infoRow->match_homeScore."</span>
                         - 
                        <span style=\"{$awayScore}\">".$infoRow->match_awayScore."</span>
                      </div>
                    </div>

                    <div class=\"league_matches_row_away\">
                      ".$infoRow->match_awayEn." ".$strAwayRank."
                      {$strAwayYellow} 
                      {$strAwayRed} 
                    </div>

                    <div class=\"league_matches_row_ht \">
                        <div class=\"{$hideData}\">
                            HT ".$infoRow->match_homeHalfScore." - ".$infoRow->match_awayHalfScore."
                        </div>
                    </div>

                    <div class=\"league_matches_row_corner \">
                        <div class=\"{$hideData}\">
                            <img src=\"includes/images/icon-corner.svg\" style=\"height:15px;margin-top:-5px;\" />".$infoRow->match_homeCorner." - ".$infoRow->match_awayCorner."
                        </div>
                    </div>

                    <div class=\"league_matches_row_live\">
                      {$strLive} $infoRow->glive_id
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


