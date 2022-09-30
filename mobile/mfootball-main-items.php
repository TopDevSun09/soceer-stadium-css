<style>

/* Header */

.nav-football-details {
    width: 100%;
    height: 120px;
    border: 0px !important;
    background: #E5BA5C;
    color: white;
    font-weight: bold;
    position: relative;
}

.nav-football-title {
    float: left;
    text-align: center;
    font-size: 20px;
    position: absolute;
    top: 0%;
    width: 80%;
    margin: auto;
    margin-left: 75px;
    height: 120px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.nav-back {
    width: 20%;
    margin-top: 42px;
    float: left;
    display: flex;
    justify-content: flex-start;
}


/* Main Panel */

.title-content {
    height: 100%;
    width: 100%;
    margin-left: 25px;
}

.title {
    height: 40px;
    width: 100%;
    background: #222;
    color: #fff;
}

.title-content img {
    margin-top: 8px;
    float: left;
    width: 30px;
}

.title-content span {
    margin-top: 12px;
    margin-left: 10px;
    float: left;
    font-size: 12px;
    font-weight: 400;
}

.item-left {
    width: 22%;
    height: 100%;
    float: left;
    font-size: 12px;
    color: #999;
    border-bottom: 1px solid grey;
    border-right: 1px solid grey;
}

.item-center {
    width: 68%;
    height: 100%;
    float: left;
    border-bottom: 1px solid grey;
    border-right: 1px solid grey;
}

.match-schedule li {
    height: 68px;
}

.star i {
    margin-top: 22px;
    margin-left: 12px;
    color: white;
}

.star {
    width: 31%;
    float: left;
    height: 100%;
}

.time {
    width: 50%;
    float: left;
    height: 100%;
    margin-top: 5px;
}

.club-one {
    width: 100%;
    height: 50%;
    margin-left: 15px;
    font-weight: 900;
    display: flex;
    align-items: flex-start;
    justify-content: flex-start;
    font-size: 12px;
}

.club-two {
    width: 100%;
    height: 50%;
    margin-left: 15px;
    display: flex;
    justify-content: flex-start;
    align-items: flex-start;
    margin-top: -10px;
    font-size: 12px;
}

.club-one p {
    float: left;
    margin-left: 10px;
    margin-top: 14px;
}

.club-two p {
    float: left;
    margin-left: 10px;
    margin-top: 12px;
}

.club-one img {
    margin-top: 13px;
    height: 50%;
    width: 20px;
    float: left;
    margin-bottom: 4px;
}

.club-two img {
    height: 50%;
    width: 20px;
    float: left;
    margin-top: 13px;
}

.score-club-one {
    margin-top: 6px;
    padding-top: 2px;
    margin-left: 20px;
    font-weight: 400;
    color: red;
    font-size: 13;
}

.mobile_container {
    width: 550px;
    margin: 0px auto;
    background: #ffffff;
    min-height: 100vh;
    overflow: hidden;
    position: relative;
}


/* Bottom Arrangement */

.standing-football-details {
    width: 30%;
    margin-left: 10px;
    padding-top: 6px;
    color: #E5BA5C;
    display: flex;
    justify-content: space-between;
}

.standing-football-details img {
    width: 35px;
    height: 35px;
    float: left;
    margin-top: 10px;
    margin-left: 40px;
}

.standing-football-details span {
    width: 30%;
    float: left;
    margin-left: 5px;
    padding-top: 15px;
}

</style>



<?php

  $infoRow = tep_fetch_object(tep_query("SELECT * FROM nano_football_leagues_list WHERE league_leagueId = '&".tep_input($_GET['id'])."&'"));


  
  if($infoRow->league_leagueId==""){

      echo redirect('football-main');

  }


?>


<div class="football-details">
     <div class="nav-football-details">
       <div class="nav-back" onclick="window.location='mfootball-main'">
         <img src="data:image/svg+xml;base64,PHN2ZyBpZD0i5Zu+5bGCXzEiIGRhdGEtbmFtZT0i5Zu+5bGCIDEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDU5LjcgMTA1LjEiPjxkZWZzPjxzdHlsZT4uY2xzLTF7ZmlsbDpub25lO3N0cm9rZTojZmZmO3N0cm9rZS1taXRlcmxpbWl0OjEwO3N0cm9rZS13aWR0aDo4cHg7fTwvc3R5bGU+PC9kZWZzPjxwb2x5bGluZSBjbGFzcz0iY2xzLTEiIHBvaW50cz0iNTMuOSAxMDIuMyA1LjcgNTQgNTYuOSAyLjgiLz48L3N2Zz4="/>

       </div>
       <div class="nav-football-title">

         <?=$infoRow->league_nameEn?>

       </div>


     </div>
     
     <div class="match-schedule">
        
        <div class="title">
               <div class="title-content">
                  <img src="includes/images/football/country/logo/<?=strtolower($infoRow->league_countryEn)?>.svg" />
                  <span>Football > <?=$infoRow->league_countryEn?> : <?=$infoRow->league_nameEn?></span>
               </div>
        </div>

        <ul style="list-style: none; padding: 0px; margin: 0px;">


          <?php

          $qryMatch = tep_query("SELECT * 
                              FROM nano_schedule_match sm 
                              WHERE 
                                  1=1 AND 
                                  DATE(sm.match_time) =  DATE(NOW()) AND 
                                  sm.match_leagueId = '".tep_input($infoRow->league_leagueId)."'");



          while($infoMatch = tep_fetch_object($qryMatch)){

              $infoTeamHome = tep_fetch_object(tep_query("SELECT * FROM nano_football_team_profile WHERE team_code = '".$infoMatch->match_homeId."' "));
              
              $infoTeamAway = tep_fetch_object(tep_query("SELECT * FROM nano_football_team_profile WHERE team_code = '".$infoMatch->match_awayId."' "));

              // CHECK TEAM LOGO IS IT HAVE BLANK
              if($infoTeamHome->team_logo2 == "")
              {
                $homeTeamLogo = "includes/images/team-no-logo.svg";
              }
              else
              {
                $homeTeamLogo = "includes/images/football/team/logo/" . $infoTeamHome->team_logo2;
              }

              if($infoTeamAway->team_logo2 == "")
              {
                $awayTeamLogo = "includes/images/team-no-logo.svg";
              }
              else
              {
                $awayTeamLogo = "includes/images/football/team/logo/" . $infoTeamAway->team_logo2;
              }


              echo '

              <li onclick="window.location=\'mfootball-live?id='.createToken($infoMatch->match_id).'\'">
                <div class="item-left">
                  <div class="star">
                    <i class="fa-solid fa-star fa-2x"></i>
                  </div>
                  <div class="time">
                    <p style="margin-top: 24px; margin-left: 5px;">'.date('H:m', strtotime($infoMatch->match_time)).'</p>
                  </div>

                </div>
                <div class="item-center">

                    <div class="club-one">
                      <div><img src="'.$homeTeamLogo.'" /></div>
                      <div><p>'.$infoMatch->match_homeEn.'</p></div>
                    </div>   

                    <div class="club-two">
                      <div><img src="'.$awayTeamLogo.'" /></div>
                      <div><p>'.$infoMatch->match_awayEn.'</p></div>
                    </div>
                 
                </div>
                <div class="item-right">
                  <div class="score-club-one">'.$infoMatch->match_homeScore.'</div>
                  <div class="score-club-one">'.$infoMatch->match_awayScore.'</div>
                </div>

              </li>';

          }

          ?>

          
        </ul>

     </div>

     <div class="standing-football-details" onclick="window.location='mfootball-league-standing'">
        <img src="includes/images/standingicon.png" />
        <span>Standing</span>

        <img src="includes/images/standingicon.png" />
        <span>Lineup</span>

        <img src="includes/images/standingicon.png" />
        <span>H2H</span>

        <img src="includes/images/standingicon.png" />
        <span>Live</span>
     </div>

</div>


<div class="tabs ggg">
    <div class="el-tabs el-tabs--top" style="opacity: 1;">
      <div class="el-tabs__header is-top">
        <div class="el-tabs__nav-wrap is-top">
          <div class="el-tabs__nav-scroll">
            <div role="tablist" class="el-tabs__nav is-top" style="transform: translateX(0px);">
              <div class="el-tabs__active-bar is-top" style="width: 25.1564px; transform: translateX(190.922px);"></div>
              
              <div id="tab-lineups" aria-controls="pane-lineups" role="tab" tabindex="-1" class="el-tabs__item is-top"
                style="display: none;">Lineups</div>
              
              <div id="tab-h2h" aria-controls="pane-h2h" role="tab" tabindex="-1" class="el-tabs__item is-top" style="display: none;">H2H</div>
              
              <div id="tab-standings" aria-controls="pane-standings" role="tab" tabindex="-1"
                class="el-tabs__item is-top" style="display: none;">Standings</div>
              
              <div id="tab-live" aria-controls="pane-live" role="tab" aria-selected="true" tabindex="0"
                class="el-tabs__item is-top is-active" style="display: none;">Live</div>
            
            </div>
          </div>
        </div>
      </div>
      <div class="el-tabs__content">
        <div role="tabpanel" aria-hidden="true" id="pane-lineups" aria-labelledby="tab-lineups" class="el-tab-pane"
          style="display: none;"></div>
        <div role="tabpanel" aria-hidden="true" id="pane-h2h" aria-labelledby="tab-h2h" class="el-tab-pane"
          style="display: none;"></div>
        <div role="tabpanel" aria-hidden="true" id="pane-standings" aria-labelledby="tab-standings" class="el-tab-pane"
          style="display: none;"></div>
        <div role="tabpanel" id="pane-live" aria-labelledby="tab-live" class="el-tab-pane"></div>
      </div>
    </div>
  </div> 

  <br><br><br><br><br><br>
