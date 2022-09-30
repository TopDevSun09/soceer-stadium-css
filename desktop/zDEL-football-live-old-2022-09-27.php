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

.details_container {
      width: 1200px;
      margin: 20px auto 50px auto;
  }

.details_left {
    width: 800px;
    float: left;
    border: 1px solid blue;
    margin-bottom: 50px;

}
.details_right {
    width: 385px;
    float: right;
    border: 1px solid blue;
    margin-bottom: 50px;
}

.teamlogo {
    width: 58px;
    height: 58px;
}

.football_first_bar {
    width:  100%;
    margin: 5px 0px;
    padding: 13px 0px 12px 0px;
    background: rgb(196,154,18);
              background: linear-gradient(135deg, rgba(196,154,18,1) 35%, rgba(166,147,6,1) 100%);
    text-align: center;
    font-size: 14px;
    font-weight: bold;
}
.football_first_bar span {
    margin:  0px 15px;

}
.football_first_bar span a {
    color: white;
  
}
.football_first_bar span a:hover {
    color: black;
    padding-bottom: 10px;
    text-decoration: none;
    border-bottom: 3px solid #333333;
  
}

.football_first_bar span .tabSelected {
    color: black;
    padding-bottom: 10px;
    text-decoration: none;
    border-bottom: 3px solid #333333;
}

.football_inner_column {
    padding: 100px;
    border: 1px solid blue;
}

.football_inner_column_bottom {
    border: 1px solid blue;
}

</style>



    <div class="panel_details">
        


        <?php

        $infoRow = tep_fetch_object(tep_query("
                        SELECT * 
                        FROM nano_schedule_match sm 
                        LEFT JOIN nano_football_leagues_list bll ON sm.match_leagueId = bll.league_leagueId 
                        LEFT JOIN nano_live_match_list lml ON lml.MatchID = sm.glive_id
                        WHERE 
                            sm.match_id = '&".tep_input($_GET['id'])."&'"));


        if($infoRow->match_id==""){
            echo redirect('football-main');
        }

        // GET TEAM INFO
        // GET TEAM INFO
        // GET TEAM INFO

        $infoTeamHome = tep_fetch_object(tep_query("SELECT * FROM nano_football_team_profile WHERE team_code = '".$infoRow->match_homeId."' "));
        $infoTeamAway = tep_fetch_object(tep_query("SELECT * FROM nano_football_team_profile WHERE team_code = '".$infoRow->match_awayId."' "));


        ?>

       

        <div class="football_detail_header">
          <div class="league_time"> <?=$infoRow->match_leagueEn?> <?=$infoRow->match_time?> <i>
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
              <div class="comp1">
                <div class="comp1new"> <?=$infoRow->match_homeEn?> </div>
              </div>
              <div class="comp2">
                <img src="includes/images/football/team/logo/<?php echo $infoTeamHome->team_logo2; ?>" alt="">
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
                <img src="includes/images/football/team/logo/<?php echo $infoTeamAway->team_logo2; ?>" alt="">
              </div>
              <div class="comp7">
                <div class="comp1new"> <?=$infoRow->match_awayEn?> </div>
              </div>
            </div>
          </div>
        </div>

        <div class="football_first_bar">
            <?php

                if($_GET['tab']==""){
                    $_GET['tab'] = "LIVE";
                }

                $strTab = '<span ><a href="football-details?tab=H2H&id='.createToken($infoRow->match_id).'">H2H</a></span>
                           <span ><a href="football-details?tab=STANDING&id='.createToken($infoRow->match_id).'">Standing</a></span>
                           <span ><a href="football-details?tab=LIVE&id='.createToken($infoRow->match_id).'">Live</a></span>';


                echo str_replace("?tab=".$_GET['tab']."\">", "?tab=".$_GET['tab']."\" class=\"tabSelected\">", $strTab);

            ?>
        </div>

        <div class="details_container">
        
            <div class="details_left">
              <?php
              // echo "<pre>".print_r($infoRow,true)."</pre>";
              // FOR RETRIEVE LIVE STREAM - FETCH FROM API
              // FOR RETRIEVE LIVE STREAM - FETCH FROM API
              // FOR RETRIEVE LIVE STREAM - FETCH FROM API

              include('includes/api/horse-api.php');

              if($infoRow->NowPlaying == 1)
              {
                $live = LSGLiveLink($infoRow->Channel);
              ?>

                <iframe src="<?php echo $live->H5LINKROW; ?>" height = "500" width = "800"></iframe>
              <?php
              }

              else
              {

              ?>
                <div class="football_inner_column">
                  <center>
                      <!-- ROW 1 -->
                      <div class="row">
                        <div class="col-sm-4">
                            <img class="teamlogo" src="includes/images/football/team/logo/<?php echo $infoTeamHome->team_logo2; ?>" alt="">
                        </div>

                        <div class="col-sm-4">
                          <?php
                            echo $infoRow->match_homeScore . " - " . $infoRow->match_awayScore;
                          ?>
                        </div>

                        <div class="col-sm-4">
                            <img class="teamlogo" src="includes/images/football/team/logo/<?php echo $infoTeamAway->team_logo2; ?>" alt="">
                        </div>
                      </div>

                      <br>

                      <!-- ROW 2 -->
                      <div class="row">
                        <div class="col-sm-4">
                            <?php echo $infoRow->match_homeEn; ?>
                        </div>

                        <div class="col-sm-4">
                            <?php echo $infoRow->match_state; ?>
                        </div>

                        <div class="col-sm-4">
                            <?php echo $infoRow->match_awayEn; ?>
                        </div>
                      </div>

                      <br>
                  </center>
                </div>

                <!-- SHOW TECHNICAL STATISTIC -->
                <div class="football_inner_column_bottom">
                  <div class="row">
                    <?php
                     

                        $infoTechnicalDetails = tep_fetch_object(tep_query("SELECT * FROM nano_football_technical_statistic_details WHERE matchId = '".$infoRow->match_code."' "));

                        $arrTechnicCount = explode(";", $infoTechnicalDetails->statistic_technicCount);
                        
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

                            if($technicCount)
                            {
                                $technicArr[] = [
                                    "technicType" => $technicCount,
                                    "technicHome" => $technicCountHome,
                                    "technicAway" => $technicCountAway
                                ];

                                if($technicCount == 'Possession')
                                {
                                    $homePossession = $technicCountHome;
                                    $awayPossession = $technicCountAway;
                                }

                                if($technicCount == 'Corner kicks')
                                {
                                    $homeCornerKick = $technicCountHome;
                                    $awayCornerKick = $technicCountAway;
                                }

                                if($technicCount == 'Red cards')
                                {
                                    $homeRedCard = $technicCountHome;
                                    $awayRedCard = $technicCountAway;
                                }

                                if($technicCount == 'Yellow cards')
                                {
                                    $homeYellowCard = $technicCountHome;
                                    $awayYellowCard = $technicCountAway;
                                }
                            }

                            $technicCountStr .= $technicCount . ";";
                        }

                        // echo "<pre>".print_r($technicArr,true)."</pre>";
                    ?>

                    <div class="col-sm-2">
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
                    </div>
                  </div>
                </div>
              <?php
              }
              ?>
                
            </div>

            <div class="details_right">
				<?php
			      livechat();
				?>
            </div>


      </div> <!-- details_container-->
        


    </div>  <!-- panel_details-->

