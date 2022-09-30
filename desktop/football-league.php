<link rel="stylesheet" href="includes/mvc-theme/<?= $layout ?>/football-league.css?ver=<?= time() ?>">



    <div class="panel_details">
      
      
<?php

$infoRow = tep_fetch_object(tep_query("SELECT * FROM nano_football_leagues_list WHERE league_leagueId = '&".tep_input($_GET['id'])."&'"));



if($infoRow->league_leagueId==""){

    echo redirect('football-main');

}

?>


    <div id="app" class="app">
      <div class="leaguen-info">
        <div class="info-wrap">
          <div class="info-head">
            <div class="info-head-wrap">
              <div class="info-left">
                <div class="left-title">
                  <div>
                    <img class="le_img" src="includes/images/football/league/logo/<?=$infoRow->league_leagueLogo2?>">
                  </div>
                  <div>
                    <div>
                      <h2 class="le_h2"><?=$infoRow->league_nameEn?></h2>
                      <i class="star-img star_imgbox ">
                        <svg viewBox="0 0 150 150" class="collect1">
                          <path d="M120.99,144.34H29.01c-9.05,0-16.38-7.34-16.38-16.38V26.89c0-9.05,7.34-16.38,16.38-16.38h91.99
                            c9.05,0,16.38,7.34,16.38,16.38v101.06C137.38,137,130.04,144.34,120.99,144.34z" class="st0">
                          </path> 
                          <path d="M120.99,139.5H29.01c-9.05,0-16.38-7.34-16.38-16.38V22.05c0-9.05,7.34-16.38,16.38-16.38h91.99
                            c9.05,0,16.38,7.34,16.38,16.38v101.06C137.38,132.16,130.04,139.5,120.99,139.5z" class="st1">
                          </path> 
                          <path d="M124.3,60.98c-0.65-2.01-2.43-3.43-4.53-3.62l-28.61-2.6L79.84,28.29c-0.83-1.94-2.73-3.2-4.84-3.2
                            s-4.01,1.26-4.84,3.2L58.84,54.76l-28.61,2.6c-2.1,0.19-3.88,1.62-4.53,3.62c-0.65,2.01-0.05,4.21,1.54,5.6l21.62,18.96l-6.38,28.09
                            c-0.47,2.06,0.33,4.2,2.05,5.44c0.92,0.67,2,1,3.08,1c0.94,0,1.87-0.25,2.7-0.75L75,104.57l24.67,14.74
                            c1.8,1.08,4.08,0.99,5.79-0.25c1.71-1.24,2.52-3.37,2.05-5.44l-6.38-28.09l21.62-18.96C124.35,65.19,124.95,62.99,124.3,60.98z" class="st2">
                          </path>
                        </svg> 
                        <svg viewBox="0 0 150 150" class="collect2">
                          <path d="M120.99,144.34H29.01c-9.05,0-16.38-7.34-16.38-16.38V26.89c0-9.05,7.34-16.38,16.38-16.38h91.99
                            c9.05,0,16.38,7.34,16.38,16.38v101.06C137.38,137,130.04,144.34,120.99,144.34z" class="st0">
                          </path> 
                          <path d="M120.99,139.5H29.01c-9.05,0-16.38-7.34-16.38-16.38V22.05c0-9.05,7.34-16.38,16.38-16.38h91.99
                            c9.05,0,16.38,7.34,16.38,16.38v101.06C137.38,132.16,130.04,139.5,120.99,139.5z" class="st1">
                          </path> 
                          <path d="M124.3,60.98c-0.65-2.01-2.43-3.43-4.53-3.62l-28.61-2.6L79.84,28.29c-0.83-1.94-2.73-3.2-4.84-3.2
                            s-4.01,1.26-4.84,3.2L58.84,54.76l-28.61,2.6c-2.1,0.19-3.88,1.62-4.53,3.62c-0.65,2.01-0.05,4.21,1.54,5.6l21.62,18.96l-6.38,28.09
                            c-0.47,2.06,0.33,4.2,2.05,5.44c0.92,0.67,2,1,3.08,1c0.94,0,1.87-0.25,2.7-0.75L75,104.57l24.67,14.74
                            c1.8,1.08,4.08,0.99,5.79-0.25c1.71-1.24,2.52-3.37,2.05-5.44l-6.38-28.09l21.62-18.96C124.35,65.19,124.95,62.99,124.3,60.98z" class="st2">
                          </path>
                        </svg>
                      </i>
                    </div>
                    <div>
                      <img alt="" class="le_img_c" src="includes/images/football/country/logo/<?=strtolower($infoRow->league_countryEn)?>.svg">
                      <b class="le_countryname"><?=$infoRow->league_countryEn?></b>

                      <div class="el-select europe-select el-select--mini">
                        <div class="el-input el-input--mini is-disabled el-input--suffix">
                          <input type="text" disabled="disabled" readonly="readonly" autocomplete="off" placeholder="21/22" class="el-input__inner">
                            <span class="el-input__suffix">
                              <span class="el-input__suffix-inner">
                                <i class="el-select__caret el-input__icon el-icon-arrow-up">
                                </i>
                              </span>
                            </span>
                          </div>

                    </div>
                  </div>
                </div>
               </div>
              </div>

              <div class="right-title"> 

                <?php

                $totalTeam = tep_num_rows(tep_query("
                      SELECT * 
                      FROM nano_football_team_profile ftp  
                      WHERE ftp.league_id = '".tep_input($infoRow->league_leagueId)."'"));

             
                $totalPlayer = tep_num_rows(tep_query("
                      SELECT * 
                      FROM 
                        nano_football_team_profile ftp, 
                        nano_football_player_info fpi 
                      WHERE 
                        ftp.team_code = fpi.teamID AND 
                        ftp.league_id = '".tep_input($infoRow->league_leagueId)."'"));

                $totalForeigner = tep_num_rows(tep_query("
                      SELECT * 
                      FROM 
                        nano_football_team_profile ftp, 
                        nano_football_player_info fpi 
                        
                      WHERE 
                        ftp.team_code = fpi.teamID AND 
                        ftp.league_id = '".tep_input($infoRow->league_leagueId)."' AND 
                        fpi.player_countryEn != '".$infoRow->league_countryEn."'"));

                $totalValue = tep_fetch_object(tep_query("
                      SELECT SUM(money) AS 'total' 
                      FROM 
                        nano_football_team_profile ftp, 
                        nano_football_player_info fpi, 
                        nano_football_player_transfer_record fptr 
                      WHERE 
                        ftp.team_code = fpi.teamID AND 
                        ftp.league_id = '".tep_input($infoRow->league_leagueId)."' AND 
                        fptr.playId = fpi.player_playerId AND 
                        fptr.toTeamId = fpi.teamID AND 
                        fpi.player_countryEn != '".$infoRow->league_countryEn."'"));


                ?>

                <div class="right-title-headingbox">
                  <div class="right-title-inheadingbox">
                    21-22 PREM STATS (Lukas ask)
                  </div>
                </div>

                <div class="main-right-main-item-box gg">
                  <div class="mrmib_firstbox">
                    <div class="mrmib_f_1">Players</div>
                    <div class="mrmib_f_2"><?=$totalPlayer?></div>
                  </div>
                  <div class="flex-1">
                    <div class="mrmib_f_1">Foreign players</div>
                    <div class="mrmib_f_2"><?=$totalForeigner?></div>
                  </div>
                  <div class="flex-1">
                    <div class="mrmib_f_1">Number of teams</div>
                    <div class="mrmib_f_2"><?=$totalTeam?></div>
                  </div>
                  <div class="flex-1 last_item_box">
                    <div class="mrmib_f_1">Total market value</div>
                    <div class="mrmib_f_2">€ <?=$totalValue->total?></div>
                  </div>
                </div>

              </div>
          </div>

          <div class="tabs">
            <div class="el-tabs el-tabs--top" style="opacity: 1;">
              <div class="el-tabs__header is-top">
                <div class="el-tabs__nav-wrap is-top">
                  <div class="el-tabs__nav-scroll">
                    <div role="tablist" class="el-tabs__nav is-top" style="transform: translateX(0px);">
                      <div class="el-tabs__active-bar is-top" style="width: 55.1564px; transform: translateX(19.9218px);"></div>
                      <div id="tab-preliminaryrou" aria-controls="pane-preliminaryrou" role="tab" tabindex="0" class="el-tabs__item is-top is-active" aria-selected="true" onclick="tabChange(1,this)">
                        Overview
                      </div>
                      <div id="tab-schedule" aria-controls="pane-schedule" role="tab" tabindex="-1" class="el-tabs__item is-top" onclick="tabChange(2,this)">
                        Schedule
                      </div>
                      <div id="tab-standing" aria-controls="pane-standing" role="tab" tabindex="-1" class="el-tabs__item is-top" onclick="tabChange(3,this)">
                        Standings
                      </div>
                      <div id="tab-transfer" aria-controls="pane-transfer" role="tab" tabindex="-1" class="el-tabs__item is-top" onclick="tabChange(4,this)">
                        Transfer
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="info-centent">

          <div class="tab1 preliminary tabinfo" style="display: none;">
            <div class="preliminary-wrap">
              <div class="preliminary-left llh">
                <div class="width-bg">
                  <div class="title-wrap"></div>
                  <div class="tabs">
                    
                    <?php

                    $qryStanding = tep_query("SELECT * FROM nano_football_standing WHERE league_leagueId = '".tep_input($infoRow->league_leagueId)."'");
                    
                    $countRound = tep_num_rows($qryStanding);

                    // $countRound = 33;

                    for($i=1; $i<=$countRound; $i++){

                        $strStanding .= '<div style="display: block;" id="'.$i.'">'.$i.'</div>';

                    }

                    echo str_replace('id="'.$infoStanding->league_currRound.'">', 'id="'.$infoStanding->league_currRound.'" class="active ol ddd">', $strStanding);

                    ?>
                    
                  </div>

                  <ul class="list">

                    <?php
                    $qryOverview = tep_query("SELECT nano_live_match_list.TimeStart,nano_live_match_list.Home,nano_live_match_list.Away,nano_live_match_list.match_list_id FROM nano_live_match_list,nano_schedule_match WHERE nano_live_match_list.MatchID =nano_schedule_match.match_code AND nano_schedule_match.match_leagueId = '".tep_input($infoRow->league_leagueId)."'");
                    while($qryOverview1 = tep_fetch_object($qryOverview))
                    {
                      echo($qryOverview1->match_list_id);
                      ?>

                    <li style="display: flex;" onclick="window.location='football-live?id=<?=createToken($qryOverview1->match_list_id)?>'">
                      <div data-date="9" data-count_id="0" class="game-time"><?=$qryOverview1->TimeStart?></div>
                      <div class="game-center">
                        <div class="game-team first-team">
                          <span><?=$qryOverview1->Home?></span>
                        </div>
                        <div class="game-score"></div>
                        <div class="game-team">
                          <span><?=$qryOverview1->Away?></span>
                        </div>
                      </div>
                      <div class="li-arrow">
                        
                      </div>
                    </li>
                    <?php

                    }

                    ?>
                    
                  </ul>

                </div>

                <div class="stadddddd" style="margin-top: 20px;">
                  <div class="formRank kk" formtitle="Standings2">
                    <div class="formRank-wrap">
                      <h1 style="margin-bottom: 10px;">Standings</h1>
                      <div class="centen visibli">
                        <div>
                          <div class="head list">
                            <div class="data-list-box normal  visibli">
                              <div class="formTitle">
                                <span class="standingboxfilter active" onclick="standingChange(1)">All</span>
                                <span class="standingboxfilter" onclick="standingChange(2)">Home</span>
                                <span class="standingboxfilter" onclick="standingChange(3)">Away</span>
                              </div>

                              <div class="head heda-title">
                                <div class="row1">#</div>
                                <div class="row2">Team</div>
                                <div class="row3">
                                  <span>P</span> 
                                  <span>W</span> 
                                  <span>D</span> 
                                  <span>L</span>
                                </div>
                                <div class="row4">Goals</div>
                                <div class="row5">
                                  <span>Last5</span> 
                                  <i></i>
                                </div>
                                <div class="row6">Points</div>
                              </div>

                              <div class="allStanding standingData" style="display: none;">
                                <div class="head data-list">
                                  <div class="row1">1</div>
                                  <div class="row2">Arsenal</div>
                                  <div class="row3">
                                    <span>7</span> 
                                    <span>6</span> 
                                    <span>0</span> 
                                    <span>1</span>
                                  </div>
                                  <div class="row4">17:7</div>
                                  <div class="row5">
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="ll"></b> 
                                  </div>
                                  <div class="row6">18</div>
                                </div>

                                <div class="head data-list">
                                  <div class="row1">2</div>
                                  <div class="row2">Manchester City</div>
                                  <div class="row3">
                                    <span>7</span> 
                                    <span>5</span> 
                                    <span>2</span> 
                                    <span>0</span>
                                  </div>
                                  <div class="row4">23:6</div>
                                  <div class="row5">
                                    <b class="ww"></b> 
                                    <b class="dd"></b> 
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="dd"></b> 
                                  </div>
                                  <div class="row6">18</div>
                                </div>

                                <div class="head data-list">
                                  <div class="row1">3</div> 
                                  <div class="row2">Tottenham Hotspur</div> 
                                  <div class="row3">
                                    <span>7</span> 
                                    <span>5</span> 
                                    <span>2</span> 
                                    <span>0</span>
                                  </div> 
                                  <div class="row4">18:7</div> 
                                  <div class="row5">
                                    <b class="dd"></b> 
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="dd"></b> 
                                    <b class="ww"></b> 
                                  </div> 
                                  <div class="row6">17</div>
                                </div>
                              </div>


                              <div class="homeStanding standingData" style="display: none;">
                                <div class="head data-list">
                                  <div class="row1">4</div>
                                  <div class="row2">Arsenal</div>
                                  <div class="row3">
                                    <span>7</span> 
                                    <span>6</span> 
                                    <span>0</span> 
                                    <span>1</span>
                                  </div>
                                  <div class="row4">17:7</div>
                                  <div class="row5">
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="ll"></b> 
                                  </div>
                                  <div class="row6">18</div>
                                </div>

                                <div class="head data-list">
                                  <div class="row1">5</div>
                                  <div class="row2">Manchester City</div>
                                  <div class="row3">
                                    <span>7</span> 
                                    <span>5</span> 
                                    <span>2</span> 
                                    <span>0</span>
                                  </div>
                                  <div class="row4">23:6</div>
                                  <div class="row5">
                                    <b class="ww"></b> 
                                    <b class="dd"></b> 
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="dd"></b> 
                                  </div>
                                  <div class="row6">18</div>
                                </div>

                                <div class="head data-list">
                                  <div class="row1">6</div> 
                                  <div class="row2">Tottenham Hotspur</div> 
                                  <div class="row3">
                                    <span>7</span> 
                                    <span>5</span> 
                                    <span>2</span> 
                                    <span>0</span>
                                  </div> 
                                  <div class="row4">18:7</div> 
                                  <div class="row5">
                                    <b class="dd"></b> 
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="dd"></b> 
                                    <b class="ww"></b> 
                                  </div> 
                                  <div class="row6">17</div>
                                </div>
                              </div>

                              <div class="awayStanding standingData" style="display: none;">
                                <div class="head data-list">
                                  <div class="row1">7</div>
                                  <div class="row2">Arsenal</div>
                                  <div class="row3">
                                    <span>7</span> 
                                    <span>6</span> 
                                    <span>0</span> 
                                    <span>1</span>
                                  </div>
                                  <div class="row4">17:7</div>
                                  <div class="row5">
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="ll"></b> 
                                  </div>
                                  <div class="row6">18</div>
                                </div>

                                <div class="head data-list">
                                  <div class="row1">8</div>
                                  <div class="row2">Manchester City</div>
                                  <div class="row3">
                                    <span>7</span> 
                                    <span>5</span> 
                                    <span>2</span> 
                                    <span>0</span>
                                  </div>
                                  <div class="row4">23:6</div>
                                  <div class="row5">
                                    <b class="ww"></b> 
                                    <b class="dd"></b> 
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="dd"></b> 
                                  </div>
                                  <div class="row6">18</div>
                                </div>

                                <div class="head data-list">
                                  <div class="row1">9</div> 
                                  <div class="row2">Tottenham Hotspur</div> 
                                  <div class="row3">
                                    <span>7</span> 
                                    <span>5</span> 
                                    <span>2</span> 
                                    <span>0</span>
                                  </div> 
                                  <div class="row4">18:7</div> 
                                  <div class="row5">
                                    <b class="dd"></b> 
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="dd"></b> 
                                    <b class="ww"></b> 
                                  </div> 
                                  <div class="row6">17</div>
                                </div>
                              </div>


                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="preliminary-left-2box">
                  <div class="preliminary-left-2box-innerbox">
                    <div class="pl2i_headingbox">
                      <span class="pl2i_h_span"> Top Scorer 21-22</span>
                    </div>
                    <div class="head heda-title">
                      <div class="row1 pllsame rbox">R</div> 
                      <div class="row2 pllsame pbox">Player/Team</div> 
                      <div class="row4 pllsame gbox">G</div>
                      <div class="row5 pllsame hgbox">HG</div>
                      <div class="row6 pllsame agbox">AG</div>
                    </div>
                    <div class="l_players_mainbox">
                      <div class="head data-list">
                        <div class="row1 lpm_itembox">1</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/2019824101538.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Erling Haaland</div>
                            <div class="pl2i_conbox2">Manchester City</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">11</div>
                        <div class="row4 lpm_itembox">6</div>
                        <div class="row5 lpm_itembox">5</div>
                      </div>

                      <div class="head data-list">
                        <div class="row1 lpm_itembox">2</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/201862110351.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Harry Kane</div>
                            <div class="pl2i_conbox2">Tottenham Hotspur</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">6</div>
                        <div class="row4 lpm_itembox">3</div>
                        <div class="row5 lpm_itembox">3</div>
                      </div>

                      <div class="head data-list">
                        <div class="row1 lpm_itembox">3</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                            <div class="pl2i_conbox2">Fulham</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">6</div>
                        <div class="row4 lpm_itembox">4</div>
                        <div class="row5 lpm_itembox">2</div>
                      </div>

                      <div class="head data-list">
                        <div class="row1 lpm_itembox">1</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/2019824101538.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Erling Haaland</div>
                            <div class="pl2i_conbox2">Manchester City</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">11</div>
                        <div class="row4 lpm_itembox">6</div>
                        <div class="row5 lpm_itembox">5</div>
                      </div>

                      <div class="head data-list">
                        <div class="row1 lpm_itembox">2</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/201862110351.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Harry Kane</div>
                            <div class="pl2i_conbox2">Tottenham Hotspur</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">6</div>
                        <div class="row4 lpm_itembox">3</div>
                        <div class="row5 lpm_itembox">3</div>
                      </div>

                      <div class="head data-list">
                        <div class="row1 lpm_itembox">3</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                            <div class="pl2i_conbox2">Fulham</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">6</div>
                        <div class="row4 lpm_itembox">4</div>
                        <div class="row5 lpm_itembox">2</div>
                      </div>
                      <div class="head data-list">
                        <div class="row1 lpm_itembox">1</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/2019824101538.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Erling Haaland</div>
                            <div class="pl2i_conbox2">Manchester City</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">11</div>
                        <div class="row4 lpm_itembox">6</div>
                        <div class="row5 lpm_itembox">5</div>
                      </div>

                      <div class="head data-list">
                        <div class="row1 lpm_itembox">2</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/201862110351.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Harry Kane</div>
                            <div class="pl2i_conbox2">Tottenham Hotspur</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">6</div>
                        <div class="row4 lpm_itembox">3</div>
                        <div class="row5 lpm_itembox">3</div>
                      </div>

                      <div class="head data-list">
                        <div class="row1 lpm_itembox">3</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                            <div class="pl2i_conbox2">Fulham</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">6</div>
                        <div class="row4 lpm_itembox">4</div>
                        <div class="row5 lpm_itembox">2</div>
                      </div>
                      <div class="head data-list">
                        <div class="row1 lpm_itembox">1</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/2019824101538.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Erling Haaland</div>
                            <div class="pl2i_conbox2">Manchester City</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">11</div>
                        <div class="row4 lpm_itembox">6</div>
                        <div class="row5 lpm_itembox">5</div>
                      </div>

                      <div class="head data-list">
                        <div class="row1 lpm_itembox">2</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/201862110351.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Harry Kane</div>
                            <div class="pl2i_conbox2">Tottenham Hotspur</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">6</div>
                        <div class="row4 lpm_itembox">3</div>
                        <div class="row5 lpm_itembox">3</div>
                      </div>

                      <div class="head data-list">
                        <div class="row1 lpm_itembox">3</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                            <div class="pl2i_conbox2">Fulham</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">6</div>
                        <div class="row4 lpm_itembox">4</div>
                        <div class="row5 lpm_itembox">2</div>
                      </div>
                      <div class="head data-list">
                        <div class="row1 lpm_itembox">1</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/2019824101538.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Erling Haaland</div>
                            <div class="pl2i_conbox2">Manchester City</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">11</div>
                        <div class="row4 lpm_itembox">6</div>
                        <div class="row5 lpm_itembox">5</div>
                      </div>

                      <div class="head data-list">
                        <div class="row1 lpm_itembox">2</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/201862110351.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Harry Kane</div>
                            <div class="pl2i_conbox2">Tottenham Hotspur</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">6</div>
                        <div class="row4 lpm_itembox">3</div>
                        <div class="row5 lpm_itembox">3</div>
                      </div>

                      <div class="head data-list">
                        <div class="row1 lpm_itembox">3</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                            <div class="pl2i_conbox2">Fulham</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">6</div>
                        <div class="row4 lpm_itembox">4</div>
                        <div class="row5 lpm_itembox">2</div>
                      </div>
                      <div class="head data-list">
                        <div class="row1 lpm_itembox">1</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/2019824101538.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Erling Haaland</div>
                            <div class="pl2i_conbox2">Manchester City</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">11</div>
                        <div class="row4 lpm_itembox">6</div>
                        <div class="row5 lpm_itembox">5</div>
                      </div>

                      <div class="head data-list">
                        <div class="row1 lpm_itembox">2</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/201862110351.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Harry Kane</div>
                            <div class="pl2i_conbox2">Tottenham Hotspur</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">6</div>
                        <div class="row4 lpm_itembox">3</div>
                        <div class="row5 lpm_itembox">3</div>
                      </div>

                      <div class="head data-list">
                        <div class="row1 lpm_itembox">3</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                            <div class="pl2i_conbox2">Fulham</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">6</div>
                        <div class="row4 lpm_itembox">4</div>
                        <div class="row5 lpm_itembox">2</div>
                      </div>
                      <div class="head data-list">
                        <div class="row1 lpm_itembox">1</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/2019824101538.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Erling Haaland</div>
                            <div class="pl2i_conbox2">Manchester City</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">11</div>
                        <div class="row4 lpm_itembox">6</div>
                        <div class="row5 lpm_itembox">5</div>
                      </div>

                      <div class="head data-list">
                        <div class="row1 lpm_itembox">2</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/201862110351.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Harry Kane</div>
                            <div class="pl2i_conbox2">Tottenham Hotspur</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">6</div>
                        <div class="row4 lpm_itembox">3</div>
                        <div class="row5 lpm_itembox">3</div>
                      </div>

                      <div class="head data-list">
                        <div class="row1 lpm_itembox">3</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                            <div class="pl2i_conbox2">Fulham</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">6</div>
                        <div class="row4 lpm_itembox">4</div>
                        <div class="row5 lpm_itembox">2</div>
                      </div>
                      <div class="head data-list">
                        <div class="row1 lpm_itembox">1</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/2019824101538.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Erling Haaland</div>
                            <div class="pl2i_conbox2">Manchester City</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">11</div>
                        <div class="row4 lpm_itembox">6</div>
                        <div class="row5 lpm_itembox">5</div>
                      </div>

                      <div class="head data-list">
                        <div class="row1 lpm_itembox">2</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/201862110351.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Harry Kane</div>
                            <div class="pl2i_conbox2">Tottenham Hotspur</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">6</div>
                        <div class="row4 lpm_itembox">3</div>
                        <div class="row5 lpm_itembox">3</div>
                      </div>

                      <div class="head data-list">
                        <div class="row1 lpm_itembox">3</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                            <div class="pl2i_conbox2">Fulham</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">6</div>
                        <div class="row4 lpm_itembox">4</div>
                        <div class="row5 lpm_itembox">2</div>
                      </div>
                      <div class="head data-list">
                        <div class="row1 lpm_itembox">1</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/2019824101538.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Erling Haaland</div>
                            <div class="pl2i_conbox2">Manchester City</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">11</div>
                        <div class="row4 lpm_itembox">6</div>
                        <div class="row5 lpm_itembox">5</div>
                      </div>

                      <div class="head data-list">
                        <div class="row1 lpm_itembox">2</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/201862110351.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Harry Kane</div>
                            <div class="pl2i_conbox2">Tottenham Hotspur</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">6</div>
                        <div class="row4 lpm_itembox">3</div>
                        <div class="row5 lpm_itembox">3</div>
                      </div>

                      <div class="head data-list">
                        <div class="row1 lpm_itembox">3</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                            <div class="pl2i_conbox2">Fulham</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">6</div>
                        <div class="row4 lpm_itembox">4</div>
                        <div class="row5 lpm_itembox">2</div>
                      </div>
                      <div class="head data-list">
                        <div class="row1 lpm_itembox">1</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/2019824101538.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Erling Haaland</div>
                            <div class="pl2i_conbox2">Manchester City</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">11</div>
                        <div class="row4 lpm_itembox">6</div>
                        <div class="row5 lpm_itembox">5</div>
                      </div>

                      <div class="head data-list">
                        <div class="row1 lpm_itembox">2</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/201862110351.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Harry Kane</div>
                            <div class="pl2i_conbox2">Tottenham Hotspur</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">6</div>
                        <div class="row4 lpm_itembox">3</div>
                        <div class="row5 lpm_itembox">3</div>
                      </div>

                      <div class="head data-list">
                        <div class="row1 lpm_itembox">3</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                            <div class="pl2i_conbox2">Fulham</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">6</div>
                        <div class="row4 lpm_itembox">4</div>
                        <div class="row5 lpm_itembox">2</div>
                      </div>
                      <div class="head data-list">
                        <div class="row1 lpm_itembox">1</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/2019824101538.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Erling Haaland</div>
                            <div class="pl2i_conbox2">Manchester City</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">11</div>
                        <div class="row4 lpm_itembox">6</div>
                        <div class="row5 lpm_itembox">5</div>
                      </div>

                      <div class="head data-list">
                        <div class="row1 lpm_itembox">2</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/201862110351.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Harry Kane</div>
                            <div class="pl2i_conbox2">Tottenham Hotspur</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">6</div>
                        <div class="row4 lpm_itembox">3</div>
                        <div class="row5 lpm_itembox">3</div>
                      </div>

                      <div class="head data-list">
                        <div class="row1 lpm_itembox">3</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                            <div class="pl2i_conbox2">Fulham</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">6</div>
                        <div class="row4 lpm_itembox">4</div>
                        <div class="row5 lpm_itembox">2</div>
                      </div>
                      <div class="head data-list">
                        <div class="row1 lpm_itembox">1</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/2019824101538.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Erling Haaland</div>
                            <div class="pl2i_conbox2">Manchester City</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">11</div>
                        <div class="row4 lpm_itembox">6</div>
                        <div class="row5 lpm_itembox">5</div>
                      </div>

                      <div class="head data-list">
                        <div class="row1 lpm_itembox">2</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/201862110351.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Harry Kane</div>
                            <div class="pl2i_conbox2">Tottenham Hotspur</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">6</div>
                        <div class="row4 lpm_itembox">3</div>
                        <div class="row5 lpm_itembox">3</div>
                      </div>

                      <div class="head data-list">
                        <div class="row1 lpm_itembox">3</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                            <div class="pl2i_conbox2">Fulham</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">6</div>
                        <div class="row4 lpm_itembox">4</div>
                        <div class="row5 lpm_itembox">2</div>
                      </div>
                      <div class="head data-list">
                        <div class="row1 lpm_itembox">1</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/2019824101538.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Erling Haaland</div>
                            <div class="pl2i_conbox2">Manchester City</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">11</div>
                        <div class="row4 lpm_itembox">6</div>
                        <div class="row5 lpm_itembox">5</div>
                      </div>

                      <div class="head data-list">
                        <div class="row1 lpm_itembox">2</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/201862110351.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Harry Kane</div>
                            <div class="pl2i_conbox2">Tottenham Hotspur</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">6</div>
                        <div class="row4 lpm_itembox">3</div>
                        <div class="row5 lpm_itembox">3</div>
                      </div>

                      <div class="head data-list">
                        <div class="row1 lpm_itembox">3</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                            <div class="pl2i_conbox2">Fulham</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">6</div>
                        <div class="row4 lpm_itembox">4</div>
                        <div class="row5 lpm_itembox">2</div>
                      </div>
                      <div class="head data-list">
                        <div class="row1 lpm_itembox">1</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/2019824101538.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Erling Haaland</div>
                            <div class="pl2i_conbox2">Manchester City</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">11</div>
                        <div class="row4 lpm_itembox">6</div>
                        <div class="row5 lpm_itembox">5</div>
                      </div>

                      <div class="head data-list">
                        <div class="row1 lpm_itembox">2</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/201862110351.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Harry Kane</div>
                            <div class="pl2i_conbox2">Tottenham Hotspur</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">6</div>
                        <div class="row4 lpm_itembox">3</div>
                        <div class="row5 lpm_itembox">3</div>
                      </div>

                      <div class="head data-list">
                        <div class="row1 lpm_itembox">3</div>
                        <div class="row2 lpm_itembox">
                          <span class="pl2i_imgbox">
                            <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                          </span>
                          <div class="pl2i_conbox">
                            <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                            <div class="pl2i_conbox2">Fulham</div>
                          </div>
                        </div>
                        <div class="row3 lpm_itembox">6</div>
                        <div class="row4 lpm_itembox">4</div>
                        <div class="row5 lpm_itembox">2</div>
                      </div>

                    </div>
                  </div>

                  <div class="preliminary-left-2box-innerbox margin-top-20">
                    <div class="pl2i_headingbox">
                      <span class="pl2i_h_span">League Info</span>
                    </div>
                    <div class="pl2i_innerbox">
                      <div class="pl2i_ib_teambox">
                        <span class="pl2i_ib_teamboxspan">
                          <img src="https://www.a8livetv.com/api/images/football/team/logo/164609952917.png" class="pl2i_ib_teambox_img">
                          <span class="pl2i_ib_teamboxspan1">Tottenham Hotspur</span>
                          <span class="pl2i_ib_teamboxspan2"> Most Title (38)</span>
                        </span>
                      </div>
                      <div class="pl2i_most_vbox">
                        <div class="pl2i_most_vbox1">Most valuable player</div>
                        <div class="pl2i_most_vbox2">
                          <div class="pl2i_most_vbox2div1">
                            <span class="pl2i_most_vbox2div1span1">Tobi Omole</span>
                          </div>
                          <div class="pl2i_most_vbox2div2">€ 10800.00</div>
                        </div>
                        <div class="pl2i_container_box">
                          <div class="pl2i_infobox1">Info</div>
                          <div class="pl2i_infflex1">
                            <div class="pl2i_infflex1div1">Rounds</div>
                            <div class="pl2i_infflex1div2">38</div>
                          </div>
                          <div class="pl2i_infflex1">
                            <div class="pl2i_infflex1div1">Players</div>
                            <div class="pl2i_infflex1div2">629</div>
                          </div>
                          <div class="pl2i_infflex1">
                            <div class="pl2i_infflex1div1">Foreigners</div>
                            <div class="pl2i_infflex1div2">547</div>
                          </div>
                          <div class="pl2i_infflex1">
                            <div class="pl2i_infflex1div1">Yellow cards</div>
                            <div class="pl2i_infflex1div2">258</div>
                          </div>
                          <div class="pl2i_infflex1">
                            <div class="pl2i_infflex1div1">Red cards</div>
                            <div class="pl2i_infflex1div2">4</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

              </div>
            </div>
          </div>


          <div class="tab2 schedule preliminary tabinfo" style="display: none;">
            <div class="preliminary-wrap">
              <div class="preliminary-left llh">
                <div class="width-bg">
                  <div class="title-wrap"></div>
                  <div class="tabs">
                    <div class="" style="display: block;">1</div>
                    <div class="active ol ddd" style="display: block;">2</div>
                    <div class="" style="display: block;">3</div>
                    <div class="" style="display: block;">4</div>
                    <div class="" style="display: block;">5</div>
                    <div class="" style="display: block;">6</div>
                    <div class="" style="display: block;">7</div>
                    <div class="" style="display: block;">8</div>
                    <div class="" style="display: block;">9</div>
                    <div class="" style="display: block;">10</div>
                    <div class="" style="display: block;">11</div>
                    <div class="" style="display: block;">12</div>
                    <div class="" style="display: block;">13</div>
                    <div class="" style="display: block;">14</div>
                    <div class="" style="display: block;">15</div>
                    <div class="" style="display: block;">16</div>
                    <div class="" style="display: block;">17</div>
                    <div class="" style="display: block;">18</div>
                    <div class="" style="display: block;">19</div>
                    <div class="" style="display: block;">20</div>
                    <div class="" style="display: block;">21</div>
                    <div class="" style="display: block;">22</div>
                    <div class="" style="display: block;">23</div>
                    <div class="" style="display: block;">24</div>
                    <div class="" style="display: block;">25</div>
                    <div class="" style="display: block;">26</div>
                    <div class="" style="display: block;">27</div>
                    <div class="" style="display: block;">28</div>
                    <div class="" style="display: block;">29</div>
                    <div class="" style="display: block;">30</div>
                    <div class="" style="display: block;">31</div>
                    <div class="" style="display: block;">32</div>
                    <div class="" style="display: block;">33</div>
                    <div class="" style="display: block;">34</div>
                    <div class="" style="display: block;">35</div>
                    <div class="" style="display: block;">36</div>
                    <div class="" style="display: block;">37</div>
                    <div class="" style="display: block;">38</div>
                  </div>

                  <ul class="list">
                    <li style="display: flex;">
                      <div data-date="9" data-count_id="0" class="game-time">01 Oct 19:30</div>
                      <div class="game-center">
                        <div class="game-team first-team">
                          <span>Arsenal</span>
                        </div>
                        <div class="game-score">2 - 1</div>
                        <div class="game-team">
                          <span>Tottenham Hotspur</span>
                        </div>
                      </div>
                      <div class="li-arrow">
                        
                      </div>
                    </li>

                    <li style="display: flex;">
                      <div data-date="9" data-count_id="0" class="game-time">01 Oct 22:00</div>
                      <div class="game-center">
                        <div class="game-team first-team">
                          <span>Bournemouth AFC</span>
                        </div>
                        <div class="game-score">2 - 1</div>
                        <div class="game-team">
                          <span>Brentford</span>
                        </div>
                      </div>
                      <div class="li-arrow">
                        
                      </div>
                    </li>

                    <li style="display: flex;">
                      <div data-date="9" data-count_id="0" class="game-time">01 Oct 19:30</div>
                      <div class="game-center">
                        <div class="game-team first-team">
                          <span>Arsenal</span>
                        </div>
                        <div class="game-score">2 - 1</div>
                        <div class="game-team">
                          <span>Tottenham Hotspur</span>
                        </div>
                      </div>
                      <div class="li-arrow">
                        
                      </div>
                    </li>

                    <li style="display: flex;">
                      <div data-date="9" data-count_id="0" class="game-time">01 Oct 22:00</div>
                      <div class="game-center">
                        <div class="game-team first-team">
                          <span>Bournemouth AFC</span>
                        </div>
                        <div class="game-score">2 - 1</div>
                        <div class="game-team">
                          <span>Brentford</span>
                        </div>
                      </div>
                      <div class="li-arrow">
                        
                      </div>
                    </li>

                    <li style="display: flex;">
                      <div data-date="9" data-count_id="0" class="game-time">01 Oct 19:30</div>
                      <div class="game-center">
                        <div class="game-team first-team">
                          <span>Arsenal</span>
                        </div>
                        <div class="game-score">2 - 1</div>
                        <div class="game-team">
                          <span>Tottenham Hotspur</span>
                        </div>
                      </div>
                      <div class="li-arrow">
                        
                      </div>
                    </li>

                    <li style="display: flex;">
                      <div data-date="9" data-count_id="0" class="game-time">01 Oct 22:00</div>
                      <div class="game-center">
                        <div class="game-team first-team">
                          <span>Bournemouth AFC</span>
                        </div>
                        <div class="game-score">2 - 1</div>
                        <div class="game-team">
                          <span>Brentford</span>
                        </div>
                      </div>
                      <div class="li-arrow">
                        
                      </div>
                    </li>
                    
                  </ul>

                </div>

              </div>

              <div class="preliminary-left-2box">
                <div class="preliminary-left-2box-innerbox">
                  <div class="pl2i_headingbox">
                    <span class="pl2i_h_span"> Top Scorer 21-22</span>
                  </div>
                  <div class="head heda-title">
                    <div class="row1 pllsame rbox">R</div> 
                    <div class="row2 pllsame pbox">Player/Team</div> 
                    <div class="row4 pllsame gbox">G</div>
                    <div class="row5 pllsame hgbox">HG</div>
                    <div class="row6 pllsame agbox">AG</div>
                  </div>
                  <div class="l_players_mainbox">
                    <div class="head data-list">
                      <div class="row1 lpm_itembox">1</div>
                      <div class="row2 lpm_itembox">
                        <span class="pl2i_imgbox">
                          <img src="https://www.a8livetv.com/api/images/football/team/player/2019824101538.png" alt="" class="pl2i_img">
                        </span>
                        <div class="pl2i_conbox">
                          <div class="pl2i_conbox1">Erling Haaland</div>
                          <div class="pl2i_conbox2">Manchester City</div>
                        </div>
                      </div>
                      <div class="row3 lpm_itembox">11</div>
                      <div class="row4 lpm_itembox">6</div>
                      <div class="row5 lpm_itembox">5</div>
                    </div>

                    <div class="head data-list">
                      <div class="row1 lpm_itembox">2</div>
                      <div class="row2 lpm_itembox">
                        <span class="pl2i_imgbox">
                          <img src="https://www.a8livetv.com/api/images/football/team/player/201862110351.png" alt="" class="pl2i_img">
                        </span>
                        <div class="pl2i_conbox">
                          <div class="pl2i_conbox1">Harry Kane</div>
                          <div class="pl2i_conbox2">Tottenham Hotspur</div>
                        </div>
                      </div>
                      <div class="row3 lpm_itembox">6</div>
                      <div class="row4 lpm_itembox">3</div>
                      <div class="row5 lpm_itembox">3</div>
                    </div>

                    <div class="head data-list">
                      <div class="row1 lpm_itembox">3</div>
                      <div class="row2 lpm_itembox">
                        <span class="pl2i_imgbox">
                          <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                        </span>
                        <div class="pl2i_conbox">
                          <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                          <div class="pl2i_conbox2">Fulham</div>
                        </div>
                      </div>
                      <div class="row3 lpm_itembox">6</div>
                      <div class="row4 lpm_itembox">4</div>
                      <div class="row5 lpm_itembox">2</div>
                    </div>

                  </div>
                </div>

                <div class="preliminary-left-2box-innerbox margin-top-20">
                  <div class="pl2i_headingbox">
                    <span class="pl2i_h_span">League Info</span>
                  </div>
                  <div class="pl2i_innerbox">
                    <div class="pl2i_ib_teambox">
                      <span class="pl2i_ib_teamboxspan">
                        <img src="https://www.a8livetv.com/api/images/football/team/logo/164609952917.png" class="pl2i_ib_teambox_img">
                        <span class="pl2i_ib_teamboxspan1">Tottenham Hotspur</span>
                        <span class="pl2i_ib_teamboxspan2"> Most Title (38)</span>
                      </span>
                    </div>
                    <div class="pl2i_most_vbox">
                      <div class="pl2i_most_vbox1">Most valuable player</div>
                      <div class="pl2i_most_vbox2">
                        <div class="pl2i_most_vbox2div1">
                          <span class="pl2i_most_vbox2div1span1">Tobi Omole</span>
                        </div>
                        <div class="pl2i_most_vbox2div2">€ 10800.00</div>
                      </div>
                      <div class="pl2i_container_box">
                        <div class="pl2i_infobox1">Info</div>
                        <div class="pl2i_infflex1">
                          <div class="pl2i_infflex1div1">Rounds</div>
                          <div class="pl2i_infflex1div2">38</div>
                        </div>
                        <div class="pl2i_infflex1">
                          <div class="pl2i_infflex1div1">Players</div>
                          <div class="pl2i_infflex1div2">629</div>
                        </div>
                        <div class="pl2i_infflex1">
                          <div class="pl2i_infflex1div1">Foreigners</div>
                          <div class="pl2i_infflex1div2">547</div>
                        </div>
                        <div class="pl2i_infflex1">
                          <div class="pl2i_infflex1div1">Yellow cards</div>
                          <div class="pl2i_infflex1div2">258</div>
                        </div>
                        <div class="pl2i_infflex1">
                          <div class="pl2i_infflex1div1">Red cards</div>
                          <div class="pl2i_infflex1div2">4</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab3 standing preliminary tabinfo" style="display: none;">
            <div class="preliminary-wrap">
              <div class="preliminary-left llh">

                <div class="stadddddd" style="margin-top: 20px;">
                  <div class="formRank kk" formtitle="Standings2">
                    <div class="formRank-wrap">
                      <h1 style="margin-bottom: 10px;">Standings</h1>
                      <div class="centen visibli">
                        <div>
                          <div class="head list">
                            <div class="data-list-box normal  visibli">
                              <div class="formTitle">
                                <span class="standingboxfilter active" onclick="standingChange(1)">All</span>
                                <span class="standingboxfilter" onclick="standingChange(2)">Home</span>
                                <span class="standingboxfilter" onclick="standingChange(3)">Away</span>
                              </div>

                              <div class="head heda-title">
                                <div class="row1">#</div>
                                <div class="row2">Team</div>
                                <div class="row3">
                                  <span>P</span> 
                                  <span>W</span> 
                                  <span>D</span> 
                                  <span>L</span>
                                </div>
                                <div class="row4">Goals</div>
                                <div class="row5">
                                  <span>Last5</span> 
                                  <i></i>
                                </div>
                                <div class="row6">Points</div>
                              </div>

                              <div class="allStanding standingData" style="display: none;">
                                <div class="head data-list">
                                  <div class="row1">1</div>
                                  <div class="row2">Arsenal</div>
                                  <div class="row3">
                                    <span>7</span> 
                                    <span>6</span> 
                                    <span>0</span> 
                                    <span>1</span>
                                  </div>
                                  <div class="row4">17:7</div>
                                  <div class="row5">
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="ll"></b> 
                                  </div>
                                  <div class="row6">18</div>
                                </div>

                                <div class="head data-list">
                                  <div class="row1">2</div>
                                  <div class="row2">Manchester City</div>
                                  <div class="row3">
                                    <span>7</span> 
                                    <span>5</span> 
                                    <span>2</span> 
                                    <span>0</span>
                                  </div>
                                  <div class="row4">23:6</div>
                                  <div class="row5">
                                    <b class="ww"></b> 
                                    <b class="dd"></b> 
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="dd"></b> 
                                  </div>
                                  <div class="row6">18</div>
                                </div>

                                <div class="head data-list">
                                  <div class="row1">3</div> 
                                  <div class="row2">Tottenham Hotspur</div> 
                                  <div class="row3">
                                    <span>7</span> 
                                    <span>5</span> 
                                    <span>2</span> 
                                    <span>0</span>
                                  </div> 
                                  <div class="row4">18:7</div> 
                                  <div class="row5">
                                    <b class="dd"></b> 
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="dd"></b> 
                                    <b class="ww"></b> 
                                  </div> 
                                  <div class="row6">17</div>
                                </div>
                              </div>


                              <div class="homeStanding standingData" style="display: none;">
                                <div class="head data-list">
                                  <div class="row1">4</div>
                                  <div class="row2">Arsenal</div>
                                  <div class="row3">
                                    <span>7</span> 
                                    <span>6</span> 
                                    <span>0</span> 
                                    <span>1</span>
                                  </div>
                                  <div class="row4">17:7</div>
                                  <div class="row5">
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="ll"></b> 
                                  </div>
                                  <div class="row6">18</div>
                                </div>

                                <div class="head data-list">
                                  <div class="row1">5</div>
                                  <div class="row2">Manchester City</div>
                                  <div class="row3">
                                    <span>7</span> 
                                    <span>5</span> 
                                    <span>2</span> 
                                    <span>0</span>
                                  </div>
                                  <div class="row4">23:6</div>
                                  <div class="row5">
                                    <b class="ww"></b> 
                                    <b class="dd"></b> 
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="dd"></b> 
                                  </div>
                                  <div class="row6">18</div>
                                </div>

                                <div class="head data-list">
                                  <div class="row1">6</div> 
                                  <div class="row2">Tottenham Hotspur</div> 
                                  <div class="row3">
                                    <span>7</span> 
                                    <span>5</span> 
                                    <span>2</span> 
                                    <span>0</span>
                                  </div> 
                                  <div class="row4">18:7</div> 
                                  <div class="row5">
                                    <b class="dd"></b> 
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="dd"></b> 
                                    <b class="ww"></b> 
                                  </div> 
                                  <div class="row6">17</div>
                                </div>
                              </div>

                              <div class="awayStanding standingData" style="display: none;">
                                <div class="head data-list">
                                  <div class="row1">7</div>
                                  <div class="row2">Arsenal</div>
                                  <div class="row3">
                                    <span>7</span> 
                                    <span>6</span> 
                                    <span>0</span> 
                                    <span>1</span>
                                  </div>
                                  <div class="row4">17:7</div>
                                  <div class="row5">
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="ll"></b> 
                                  </div>
                                  <div class="row6">18</div>
                                </div>

                                <div class="head data-list">
                                  <div class="row1">8</div>
                                  <div class="row2">Manchester City</div>
                                  <div class="row3">
                                    <span>7</span> 
                                    <span>5</span> 
                                    <span>2</span> 
                                    <span>0</span>
                                  </div>
                                  <div class="row4">23:6</div>
                                  <div class="row5">
                                    <b class="ww"></b> 
                                    <b class="dd"></b> 
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="dd"></b> 
                                  </div>
                                  <div class="row6">18</div>
                                </div>

                                <div class="head data-list">
                                  <div class="row1">9</div> 
                                  <div class="row2">Tottenham Hotspur</div> 
                                  <div class="row3">
                                    <span>7</span> 
                                    <span>5</span> 
                                    <span>2</span> 
                                    <span>0</span>
                                  </div> 
                                  <div class="row4">18:7</div> 
                                  <div class="row5">
                                    <b class="dd"></b> 
                                    <b class="ww"></b> 
                                    <b class="ww"></b> 
                                    <b class="dd"></b> 
                                    <b class="ww"></b> 
                                  </div> 
                                  <div class="row6">17</div>
                                </div>
                              </div>


                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="preliminary-left-2box">
                <div class="preliminary-left-2box-innerbox">
                  <div class="pl2i_headingbox">
                    <span class="pl2i_h_span"> Top Scorer 21-22</span>
                  </div>
                  <div class="head heda-title">
                    <div class="row1 pllsame rbox">R</div> 
                    <div class="row2 pllsame pbox">Player/Team</div> 
                    <div class="row4 pllsame gbox">G</div>
                    <div class="row5 pllsame hgbox">HG</div>
                    <div class="row6 pllsame agbox">AG</div>
                  </div>
                  <div class="l_players_mainbox">
                    <div class="head data-list">
                      <div class="row1 lpm_itembox">1</div>
                      <div class="row2 lpm_itembox">
                        <span class="pl2i_imgbox">
                          <img src="https://www.a8livetv.com/api/images/football/team/player/2019824101538.png" alt="" class="pl2i_img">
                        </span>
                        <div class="pl2i_conbox">
                          <div class="pl2i_conbox1">Erling Haaland</div>
                          <div class="pl2i_conbox2">Manchester City</div>
                        </div>
                      </div>
                      <div class="row3 lpm_itembox">11</div>
                      <div class="row4 lpm_itembox">6</div>
                      <div class="row5 lpm_itembox">5</div>
                    </div>

                    <div class="head data-list">
                      <div class="row1 lpm_itembox">2</div>
                      <div class="row2 lpm_itembox">
                        <span class="pl2i_imgbox">
                          <img src="https://www.a8livetv.com/api/images/football/team/player/201862110351.png" alt="" class="pl2i_img">
                        </span>
                        <div class="pl2i_conbox">
                          <div class="pl2i_conbox1">Harry Kane</div>
                          <div class="pl2i_conbox2">Tottenham Hotspur</div>
                        </div>
                      </div>
                      <div class="row3 lpm_itembox">6</div>
                      <div class="row4 lpm_itembox">3</div>
                      <div class="row5 lpm_itembox">3</div>
                    </div>

                    <div class="head data-list">
                      <div class="row1 lpm_itembox">3</div>
                      <div class="row2 lpm_itembox">
                        <span class="pl2i_imgbox">
                          <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                        </span>
                        <div class="pl2i_conbox">
                          <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                          <div class="pl2i_conbox2">Fulham</div>
                        </div>
                      </div>
                      <div class="row3 lpm_itembox">6</div>
                      <div class="row4 lpm_itembox">4</div>
                      <div class="row5 lpm_itembox">2</div>
                    </div>

                  </div>
                </div>

                <div class="preliminary-left-2box-innerbox margin-top-20">
                  <div class="pl2i_headingbox">
                    <span class="pl2i_h_span">League Info</span>
                  </div>
                  <div class="pl2i_innerbox">
                    <div class="pl2i_ib_teambox">
                      <span class="pl2i_ib_teamboxspan">
                        <img src="https://www.a8livetv.com/api/images/football/team/logo/164609952917.png" class="pl2i_ib_teambox_img">
                        <span class="pl2i_ib_teamboxspan1">Tottenham Hotspur</span>
                        <span class="pl2i_ib_teamboxspan2"> Most Title (38)</span>
                      </span>
                    </div>
                    <div class="pl2i_most_vbox">
                      <div class="pl2i_most_vbox1">Most valuable player</div>
                      <div class="pl2i_most_vbox2">
                        <div class="pl2i_most_vbox2div1">
                          <span class="pl2i_most_vbox2div1span1">Tobi Omole</span>
                        </div>
                        <div class="pl2i_most_vbox2div2">€ 10800.00</div>
                      </div>
                      <div class="pl2i_container_box">
                        <div class="pl2i_infobox1">Info</div>
                        <div class="pl2i_infflex1">
                          <div class="pl2i_infflex1div1">Rounds</div>
                          <div class="pl2i_infflex1div2">38</div>
                        </div>
                        <div class="pl2i_infflex1">
                          <div class="pl2i_infflex1div1">Players</div>
                          <div class="pl2i_infflex1div2">629</div>
                        </div>
                        <div class="pl2i_infflex1">
                          <div class="pl2i_infflex1div1">Foreigners</div>
                          <div class="pl2i_infflex1div2">547</div>
                        </div>
                        <div class="pl2i_infflex1">
                          <div class="pl2i_infflex1div1">Yellow cards</div>
                          <div class="pl2i_infflex1div2">258</div>
                        </div>
                        <div class="pl2i_infflex1">
                          <div class="pl2i_infflex1div1">Red cards</div>
                          <div class="pl2i_infflex1div2">4</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab4 transfer preliminary tabinfo" style="display: none;">
            <div class="preliminary-wrap">
              <div class="preliminary-left llh">

                <div class="stadddddd" style="margin-top: 20px;">
                  <div class="formRank kk" formtitle="Standings2">
                    <div class="formRank-wrap">
                      <h1 style="margin-bottom: 10px;">English Premier League Transfer 21-22</h1>
                      <div class="centen visibli">
                        <div>
                          <div class="t_mainbox">
                            <div class="l_t_b">
                              <div class="head data-list">
                                <div class="l_t_b_heading">
                                  <span class="l_t_b_heading_span">
                                    Arsenal
                                    <span class="l_t_b_tringlebox"></span>
                                  </span>
                                </div>
                                <div class="l_t_t_mb">
                                  <div class="l_t_b_inbox">
                                    <div class="l_t_b_inbox_title">
                                      Transfer in 
                                    </div>
                                    <div class="l_t_box">

                                      <div class="l_item_box">
                                        <div class="col l_i_imgbox">
                                          <span class="l_i_imgspan">
                                            <img src="https://www.a8livetv.com/api/images/football/team/player/20151221204345.jpg" class="l_i_img">
                                          </span>
                                          <span class="l_i_i_span1">
                                            <span class="l_i_i_span1_2">
                                              Pablo Mari Villar
                                            </span>
                                            <span class="l_i_i_span1_3">
                                              <span class="l_i_i_span1_3_1">Age 29</span>
                                              <span class="l_i_i_span1_3_2dot"> </span>
                                              <span class="l_i_i_span1_3_3">Spain</span>
                                            </span>
                                          </span>
                                        </div>

                                        <div class="col l_i_teambox">
                                          <span class="l_i_span2">
                                            <span class="l_i_span2_1">Udinese</span>
                                            <img src="https://www.a8livetv.com/api/images/football/team/logo/163746448935.png?v=de3e8397dc6df2daf3081150fedbb3c9" class="l_i_span2_1_img">
                                          </span>
                                          <div class="l_i_arrowbox">
                                            <span class="l_i_arrowbox_span fa fa-long-arrow-right"></span>
                                          </div>
                                          <span class="l_i_span3">
                                            <img src="https://www.a8livetv.com/api/images/football/team/logo/164577419697.png?v=4f5a5116038fdb790ab3ef4a6d6aa9bd" class="l_i_span3_1_img">
                                            <span class="l_i_span3_1">Arsenal</span>
                                          </span>
                                        </div>

                                        <div class="col l_i_t_ybox" style="width: 105px;">
                                          <div class="l_i_t_ybox1">End Loan</div>
                                          <div class="l_i_t_ybox2"></div>
                                        </div>

                                      </div>

                                      <div class="l_item_box">
                                        <div class="col l_i_imgbox">
                                          <span class="l_i_imgspan">
                                            <img src="https://www.a8livetv.com/api/images/football/team/player/2018531170054.jpg" class="l_i_img">
                                          </span>
                                          <span class="l_i_i_span1">
                                            <span class="l_i_i_span1_2">Runar Alex Runarsson</span>
                                            <span class="l_i_i_span1_3">
                                              <span class="l_i_i_span1_3_1">Age 27</span>
                                              <span class="l_i_i_span1_3_2dot"> </span>
                                              <span class="l_i_i_span1_3_3">Iceland</span>
                                            </span>
                                          </span>
                                        </div>
                                        <div class="col l_i_teambox">
                                          <span class="l_i_span2">
                                            <span class="l_i_span2_1">Alanyaspor</span>
                                            <img src="https://www.a8livetv.com/api/images/football/team/logo/2008121517315684607.jpg?v=4f5a5116038fdb790ab3ef4a6d6aa9bd" class="l_i_span2_1_img">
                                          </span>
                                          <div class="l_i_arrowbox">
                                            <span class="l_i_arrowbox_span fa fa-long-arrow-right"></span>
                                          </div>
                                          <span class="l_i_span3">
                                            <img src="https://www.a8livetv.com/api/images/football/team/logo/164577419697.png?v=4f5a5116038fdb790ab3ef4a6d6aa9bd" class="l_i_span3_1_img">
                                            <span class="l_i_span3_1">Arsenal</span>
                                          </span>
                                        </div>
                                        <div class="col l_i_t_ybox" style="width: 105px;">
                                          <div class="l_i_t_ybox1">End Loan</div>
                                          <div class="l_i_t_ybox2"></div>
                                        </div>
                                      </div>

                                      <div class="l_item_box">
                                        <div class="col l_i_imgbox">
                                          <span class="l_i_imgspan">
                                            <img src="https://www.a8livetv.com/api/images/football/team/player/2015724162447.jpg" class="l_i_img">
                                          </span>
                                          <span class="l_i_i_span1">
                                            <span class="l_i_i_span1_2">Nicolas Pepe</span>
                                            <span class="l_i_i_span1_3">
                                              <span class="l_i_i_span1_3_1">Age 27</span>
                                              <span class="l_i_i_span1_3_2dot"> </span>
                                              <span class="l_i_i_span1_3_3">Cote D Ivoire</span>
                                            </span>
                                          </span>
                                        </div>
                                        <div class="col l_i_teambox">
                                          <span class="l_i_span2">
                                            <span class="l_i_span2_1">Nice</span>
                                            <img src="https://www.a8livetv.com/api/images/football/team/logo/20150714134319.png?v=4f5a5116038fdb790ab3ef4a6d6aa9bd" class="l_i_span2_1_img">
                                          </span>
                                          <div class="l_i_arrowbox">
                                            <span class="l_i_arrowbox_span fa fa-long-arrow-right"></span>
                                          </div>
                                          <span class="l_i_span3">
                                            <img src="https://www.a8livetv.com/api/images/football/team/logo/164577419697.png?v=4f5a5116038fdb790ab3ef4a6d6aa9bd" class="l_i_span3_1_img">
                                            <span class="l_i_span3_1">Arsenal</span>
                                          </span>
                                        </div>
                                        <div class="col l_i_t_ybox" style="width: 105px;">
                                          <div class="l_i_t_ybox1">End Loan</div>
                                          <div class="l_i_t_ybox2"></div>
                                        </div>
                                      </div>

                                    </div>
                                  </div>


                                  <div class="l_t_b_inbox">
                                    <div class="l_t_b_inbox_title">
                                      Transfer Out
                                    </div>
                                    <div class="l_t_box">

                                      
                                      <div class="l_item_box">
                                        <div class="col l_i_imgbox">
                                          <span class="l_i_imgspan">
                                            <img src="https://www.a8livetv.com/api/images/football/team/player/201866111444.png" class="l_i_img">
                                          </span>
                                          <span class="l_i_i_span1">
                                            <span class="l_i_i_span1_2">Mesut Ozil</span>
                                            <span class="l_i_i_span1_3">
                                              <span class="l_i_i_span1_3_1">Age 33</span>
                                              <span class="l_i_i_span1_3_2dot"> </span>
                                              <span class="l_i_i_span1_3_3">Germany</span>
                                            </span>
                                          </span>
                                        </div>
                                        <div class="col l_i_teambox">
                                          <span class="l_i_span2">
                                            <span class="l_i_span2_1">Arsenal</span>
                                            <img src="https://www.a8livetv.com/api/images/football/team/logo/164577419697.png?v=4f5a5116038fdb790ab3ef4a6d6aa9bd" class="l_i_span2_1_img">
                                          </span>
                                          <div class="l_i_arrowbox">
                                            <span class="l_i_arrowbox_span fa fa-long-arrow-right"></span>
                                          </div>
                                          <span class="l_i_span3">
                                            <img src="https://www.a8livetv.com/api/images/football/team/logo/20130804174913.png?v=4f5a5116038fdb790ab3ef4a6d6aa9bd" class="l_i_span3_1_img">
                                            <span class="l_i_span3_1">Fenerbahce</span>
                                          </span>
                                        </div>
                                        <div class="col l_i_t_ybox" style="width: 105px;">
                                          <div class="l_i_t_ybox1">Free Transfer</div>
                                          <div class="l_i_t_ybox2"></div>
                                        </div>
                                      </div>


                                      

                                    </div>
                                  </div>


                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="preliminary-left-2box">
                <div class="preliminary-left-2box-innerbox">
                  <div class="pl2i_headingbox">
                    <span class="pl2i_h_span"> Top Scorer 21-22</span>
                  </div>
                  <div class="head heda-title">
                    <div class="row1 pllsame rbox">R</div> 
                    <div class="row2 pllsame pbox">Player/Team</div> 
                    <div class="row4 pllsame gbox">G</div>
                    <div class="row5 pllsame hgbox">HG</div>
                    <div class="row6 pllsame agbox">AG</div>
                  </div>
                  <div class="l_players_mainbox">
                    <div class="head data-list">
                      <div class="row1 lpm_itembox">1</div>
                      <div class="row2 lpm_itembox">
                        <span class="pl2i_imgbox">
                          <img src="https://www.a8livetv.com/api/images/football/team/player/2019824101538.png" alt="" class="pl2i_img">
                        </span>
                        <div class="pl2i_conbox">
                          <div class="pl2i_conbox1">Erling Haaland</div>
                          <div class="pl2i_conbox2">Manchester City</div>
                        </div>
                      </div>
                      <div class="row3 lpm_itembox">11</div>
                      <div class="row4 lpm_itembox">6</div>
                      <div class="row5 lpm_itembox">5</div>
                    </div>

                    <div class="head data-list">
                      <div class="row1 lpm_itembox">2</div>
                      <div class="row2 lpm_itembox">
                        <span class="pl2i_imgbox">
                          <img src="https://www.a8livetv.com/api/images/football/team/player/201862110351.png" alt="" class="pl2i_img">
                        </span>
                        <div class="pl2i_conbox">
                          <div class="pl2i_conbox1">Harry Kane</div>
                          <div class="pl2i_conbox2">Tottenham Hotspur</div>
                        </div>
                      </div>
                      <div class="row3 lpm_itembox">6</div>
                      <div class="row4 lpm_itembox">3</div>
                      <div class="row5 lpm_itembox">3</div>
                    </div>

                    <div class="head data-list">
                      <div class="row1 lpm_itembox">3</div>
                      <div class="row2 lpm_itembox">
                        <span class="pl2i_imgbox">
                          <img src="https://www.a8livetv.com/api/images/football/team/player/201863110605.png" alt="" class="pl2i_img">
                        </span>
                        <div class="pl2i_conbox">
                          <div class="pl2i_conbox1">Aleksandar Mitrovic</div>
                          <div class="pl2i_conbox2">Fulham</div>
                        </div>
                      </div>
                      <div class="row3 lpm_itembox">6</div>
                      <div class="row4 lpm_itembox">4</div>
                      <div class="row5 lpm_itembox">2</div>
                    </div>

                  </div>
                </div>

                <div class="preliminary-left-2box-innerbox margin-top-20">
                  <div class="pl2i_headingbox">
                    <span class="pl2i_h_span">League Info</span>
                  </div>
                  <div class="pl2i_innerbox">
                    <div class="pl2i_ib_teambox">
                      <span class="pl2i_ib_teamboxspan">
                        <img src="https://www.a8livetv.com/api/images/football/team/logo/164609952917.png" class="pl2i_ib_teambox_img">
                        <span class="pl2i_ib_teamboxspan1">Tottenham Hotspur</span>
                        <span class="pl2i_ib_teamboxspan2"> Most Title (38)</span>
                      </span>
                    </div>
                    <div class="pl2i_most_vbox">
                      <div class="pl2i_most_vbox1">Most valuable player</div>
                      <div class="pl2i_most_vbox2">
                        <div class="pl2i_most_vbox2div1">
                          <span class="pl2i_most_vbox2div1span1">Tobi Omole</span>
                        </div>
                        <div class="pl2i_most_vbox2div2">€ 10800.00</div>
                      </div>
                      <div class="pl2i_container_box">
                        <div class="pl2i_infobox1">Info</div>
                        <div class="pl2i_infflex1">
                          <div class="pl2i_infflex1div1">Rounds</div>
                          <div class="pl2i_infflex1div2">38</div>
                        </div>
                        <div class="pl2i_infflex1">
                          <div class="pl2i_infflex1div1">Players</div>
                          <div class="pl2i_infflex1div2">629</div>
                        </div>
                        <div class="pl2i_infflex1">
                          <div class="pl2i_infflex1div1">Foreigners</div>
                          <div class="pl2i_infflex1div2">547</div>
                        </div>
                        <div class="pl2i_infflex1">
                          <div class="pl2i_infflex1div1">Yellow cards</div>
                          <div class="pl2i_infflex1div2">258</div>
                        </div>
                        <div class="pl2i_infflex1">
                          <div class="pl2i_infflex1div1">Red cards</div>
                          <div class="pl2i_infflex1div2">4</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div> 
          </div>  


    </div>



<script>
tabChange(1);
function tabChange(index,target){

    $('.el-tabs__item.is-active').removeClass('is-active');
    $(target).addClass('is-active');

    if(index==1){
      $('.el-tabs__active-bar').css('transform','translateX(19.921px)');
      $('.tabinfo').hide();
      $('.tab1').show();
    }
    else if (index==2){
      $('.el-tabs__active-bar').css('transform','translateX(114.922px)');
      $('.tabinfo').hide();
      $('.tab2').show();
    }
    else if (index==3){
      $('.el-tabs__active-bar').css('transform','translateX(210.922px)');
      $('.tabinfo').hide();
      $('.tab3').show();
      standingChange(1);
    }
    else if (index==4){

      $('.el-tabs__active-bar').css('transform','translateX(311.922px)');
      $('.tabinfo').hide();
      $('.tab4').show();
    }
}

function standingChange(index){
  if(index==1){
    $('.standingData').hide();
    $('.allStanding').show();
  }
  else if(index==2){
    $('.standingData').hide();
    $('.homeStanding').show();
  }
  else if(index==3){
    $('.standingData').hide();
    $('.awayStanding').show();
  }
}
</script>






    </div>  <!-- panel_details-->

