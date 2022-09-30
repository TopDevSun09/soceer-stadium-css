
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
            

            <?php

            if($_GET['selectDate']!=""){
              $extSql .= " AND DATE_FORMAT(TimeStart, '%Y-%m-%d') = '".$_GET['selectDate']."' ";
              
            } else {
              $extSql .= " AND DATE_FORMAT(TimeStart, '%Y-%m-%d') = '".date('Y-m-d')."' ";
              
            }

            // FILTER SORT
            // FILTER SORT
            // FILTER SORT
            switch($_SESSION['filterSort']){
                case "sortByTime": 
                      $extSql .= " AND TimeStart > NOW() ";
                      $extSqlOrder = " League ASC, TimeStart ASC "; 
                      break;
                default: 
                      $extSqlOrder = " League ASC, TimeStart ASC ";
            }


            switch($_GET['filterLive']){
                case "LIVE":
                    $extSql .= " AND NowPlaying = 1 ";
                    break;
                case "END":
                    $extSql .= " AND TimeStart < NOW() ";
                    break;
            }

            // LIVE COUNT
            // LIVE COUNT
            // LIVE COUNT

            $liveCount = tep_num_rows(tep_query("SELECT * FROM nano_esport_live_match WHERE NowPlaying = 1 AND DATE(TimeStart) = '".date("Y-m-d")."' "));

            $qryString = "SELECT * 
                        FROM nano_esport_live_match elm 
                        LEFT JOIN nano_esport_lol_match bll ON elm.match_list_id = bll.match_id
                        WHERE
                          1=1
                          $extSql
                        ORDER BY ". $extSqlOrder;
            
            $qryRow = tep_query($qryString);

            $leagueId = "";

            if(tep_num_rows($qryRow)!=0){

                while($infoRow = tep_fetch_object($qryRow)){

                  if ( $infoRow->League != $leagueId) {
                    $leagueId = $infoRow->League;

                    // SET LOGO
                    // SET LOGO
                    // SET LOGO
                    $defineLogo = "===".$infoRow->League;
                    if( strpos($defineLogo, "DOTA") > 0 ){
                        $strLogo = "dota-default";
                    } else if( strpos($defineLogo, "LEAGUE OF LEGENDS") > 0 ){
                        $strLogo = "lol-default";
                    } else if( strpos($defineLogo, "COUNTER-STRIKE") > 0 || strpos($defineLogo, "CS") > 0){
                        $strLogo = "cs-default";
                    } else if( strpos($defineLogo, "VALORANT") > 0){
                        $strLogo = "valorant-default";
                    } else if( strpos($defineLogo, "KING OF GLORY") > 0){
                        $strLogo = "wangzhe-default";
                    } else {
                        $strLogo = "";
                    }

                    echo "
                    <div class=\"league_title\">
                      
                      <div style=\"margin-left:10px;float:left;width:25px;\">
                        <img src=\"includes/images/esport/country/logo/" . $strLogo . ".png\" />
                      </div>

                      <div style=\"margin-left:10px;float:left;margin-top:5px;width:379px;\">
                        ".$infoRow->League."
                      </div>


                      <div style=\"clear:both\"></div>

                    </div>";

                  } 





                  // STATUS// STATUS// STATUS// STATUS// STATUS// STATUS// STATUS// STATUS
                  // STATUS// STATUS// STATUS// STATUS// STATUS// STATUS// STATUS// STATUS
                  // STATUS// STATUS// STATUS// STATUS// STATUS// STATUS// STATUS// STATUS
                  if($infoRow->match_status == 'First half')
                  {
                    $todayDate = date_create(date("Y-m-d H:i:s"));
                    $startDate = date_create($infoRow->TimeStart);
                    $diffDate = date_diff($startDate, $todayDate);
                    $remainingDay = $diffDate->format('%R%a');
                    $remainingTime = $diffDate->format("%H");
                    $remainingMins = $diffDate->format("%i");

                    $mins = $remainingTime * 30;
                    $matchProgressTime = $mins + $remainingMins . "'";

                    if($matchProgressTime > 30)
                    {
                        $matchProgressTime = '30+';
                    }
                    else
                    {
                        $matchProgressTime = $matchProgressTime;
                    }
                  }
                  else if($infoRow->match_status == 'Second half')
                  {
                    $todayDate = date_create(date("Y-m-d H:i:s"));
                    $startDate = date_create($infoRow->TimeStart);
                    $diffDate = date_diff($startDate, $todayDate);
                    $remainingDay = $diffDate->format('%R%a');
                    $remainingTime = $diffDate->format("%H");
                    $remainingMins = $diffDate->format("%i");

                    $mins = $remainingTime * 30;
                    $matchProgressTime = $mins + $remainingMins + 25 . "'";

                    if($matchProgressTime > 45)
                    {
                        $matchProgressTime = '45+';
                    }
                    else
                    {
                        $matchProgressTime = $matchProgressTime;
                    }
                  }
                  else if($infoRow->match_status == 'Half-time break')
                  {
                    $matchProgressTime = "HT";
                  }

                  else if($infoRow->match_status == 'Finished')
                  {
                    $matchProgressTime = "FT";
                  }
                  else
                  {
                    $matchProgressTime = $infoRow->match_status;
                  }


                  // GLIVE_ID  // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID 
                  // GLIVE_ID  // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID 
                  // GLIVE_ID  // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID // GLIVE_ID 
                  if($infoRow->IsLive > 0){
                      
                      if($infoRow->NowPlaying=="1"){
                      
                          $strLive = "<img src=\"includes/images/icon-live.gif\" />";

                      } else {

                          $strLive = "<img src=\"includes/images/icon-live-grey.jpg\" style=\"height:18px;\" /> <img src=\"includes/images/icon-live-finished.png\" style=\"height:18px;\" />";

                      }

                  } else {

                    $strLive = "";

                  }


                  echo "
                  <div class=\"league_matches_row\" onclick=\"window.location='esport-live?id=".createToken($infoRow->match_list_id)."'\">
                    
                    <div class=\"league_matches_row_time\">
                      ".date('H:i:s',strtotime($infoRow->TimeStart))." 
                    </div>

                    <div class=\"league_matches_row_status\">
                      ".$matchProgressTime."
                    </div>

                    <div class=\"league_matches_row_team\">
                      ".$infoRow->Home."<br>
                      ".$infoRow->Away."
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
    <script>
        $('#spanLiveCount').html("(<?php echo $liveCount; ?>)");
    </script>
       

