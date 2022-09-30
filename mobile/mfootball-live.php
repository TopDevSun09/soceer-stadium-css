<style>
body{
    background-color: #ebebeb;
}
*, *::before, *::after {
    -webkit-box-sizing: inherit;
    box-sizing: inherit;
}
html{
  box-sizing: border-box;
}
p{
  margin: 0;
  padding: 0;
}
#app {
    width: 550px;
    margin: 0 auto;
    position: relative;
    background: white;
}
#app .route-page {
    height: 100%;
    background: #F1E8D5;
    position: relative;
    width: 100%;
}

#app .matchindex {
    min-height: 503.333px;
    padding-top: 415px;
    background: #ffffff;
    height: 100%;
}
#app .matchindex .head-wrap {
    position: fixed;
    top: 0;
    left: 50%;
    width: 550px;
    z-index: 0;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
}
#app .matchindex .head {
    width: 100%;
    height: 360px;
    background: #333333;
    position: relative;
    overflow: hidden;
}
#app .matchindex .head .nav {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    padding-top: 57.29px;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
}
#app .matchindex .head .nav .nav-left {
    width: 21%;
    height: 43px;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    cursor: pointer;
    padding-left: 20.90px;
    position: relative;
    z-index: 10;
}
#app .matchindex .head .nav .nav-left i {
    display: block;
    width: 16.60px;
    height: 33px;
    background: url(data:image/svg+xml;base64,PHN2ZyBpZD0i5Zu+5bGCXzEiIGRhdGEtbmFtZT0i5Zu+5bGCIDEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDU5LjcgMTA1LjEiPjxkZWZzPjxzdHlsZT4uY2xzLTF7ZmlsbDpub25lO3N0cm9rZTojZmZmO3N0cm9rZS1taXRlcmxpbWl0OjEwO3N0cm9rZS13aWR0aDo4cHg7fTwvc3R5bGU+PC9kZWZzPjxwb2x5bGluZSBjbGFzcz0iY2xzLTEiIHBvaW50cz0iNTMuOSAxMDIuMyA1LjcgNTQgNTYuOSAyLjgiLz48L3N2Zz4=) no-repeat;
    background-size: 100% 100%;
    margin-right: 2.80px;
}
#app .matchindex .head .nav .nav-text {
    width: 322px;
    color: #ffffff;
    height: 46px;
    font-size: 15.18px;
    font-weight: 500;
    line-height: 22.34px;
    text-align: center;
}
#app .matchindex .head .nav .nav-text span {
    display: block;
    margin-top: 2.29px;
}
#app .matchindex .head .nav .nav-right {
    width: 21%;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    display: flex;
    height: 42.96px;
    -webkit-box-pack: end;
    -ms-flex-pack: end;
    justify-content: flex-end;
    padding-right: 20px;
}
#app .matchindex .head .nav .nav-right .collection {
    width: 30.35px;
    height: 30.35px;
    cursor: pointer;
}
#app .collect {
    width: 100%;
    height: 100%;
    position: relative;
}
#app .collect svg {
    position: absolute;
    left: 0%;
    top: 0%;
    display: block;
    -webkit-transition: all .3s;
    transition: all .3s;
}
#app .collect .color-white {
    fill: #d6d6d6;
}
#app .collect svg:last-child {
    -webkit-clip-path: ellipse(0 0 at 0% 100%);
    clip-path: ellipse(0 0 at 0% 100%);
}
#app .collect .color-green {
    fill: #E5BA5C;
}

#app .matchindex .head .against {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    margin-top: 57px;
    padding: 0 22.91px;
}
#app .matchindex .head .against>div {
    -webkit-box-flex: 1;
    -ms-flex: 1;
    flex: 1;
}
#app .matchindex .head .against>div.piece {
    cursor: pointer;
}
#app .matchindex .head .against>div.piece div {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    position: relative;
}
#app .matchindex .head .against>div.piece div .collection {
    width: 30.35px;
    height: 30.35px;
    position: absolute;
    top: 7.16px;
    left: 50%;
    display: block;
    margin-left: -76.77px;
}
#app .collect {
    width: 100%;
    height: 100%;
    position: relative;
}
#app .collect svg {
    position: absolute;
    left: 0%;
    top: 0%;
    display: block;
    -webkit-transition: all .3s;
    transition: all .3s;
}
#app .collect .color-white {
    fill: #d6d6d6;
}
#app .collect svg:last-child {
    -webkit-clip-path: ellipse(0 0 at 0% 100%);
    clip-path: ellipse(0 0 at 0% 100%);
}
#app .collect .color-green {
    fill: #E5BA5C;
}
#app .matchindex .head .against>div.piece div img {
    width: 42.96px;
    height: 42.96px;
    display: block;
}
#app .matchindex .head .against>div.piece p {
    font-size: 21.40px;
    font-weight: 500;
    color: #ffffff;
    margin-top: 29.80px;
    text-align: center;
    width: 160.41px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    overflow: hidden;
    text-overflow: ellipsis;
    -webkit-box-orient: vertical;
}
#app .matchindex .head .against>div.score {
    margin-top: -28px;
    overflow: hidden;
}
#app .matchindex .head .against>div.score p {
    color: #ffffff;
    line-height: 1;
    text-align: center;
    white-space: nowrap;
}
#app .matchindex .head .against>div.score p:nth-child(1) {
    font-size: 18px;
    font-weight: 500;
}
#app .matchindex .head .against>div.score p:nth-child(2) {
    font-size: 38.60px;
    font-weight: bold;
    margin: 20.30px -11.45px 20.30px -11.45px;
}
#app .matchindex .head .against>div.score p:nth-child(3) {
    font-size: 18px;
    font-weight: 500;
}
#app .matchindex .head .against>div.piece {
    cursor: pointer;
}
#app .matchindex .head .against>div.piece div {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    position: relative;
}
#app .matchindex .head .against>div.piece-right>div .collection {
    width: 30.35px;
    height: 30.35px;
    margin-right: 8.60px;
    position: absolute;
    top: 7.16px;
    left: 100%;
    margin-left: -37.240px;
}
#app .matchindex .head .pay-btn {
    margin: 0 auto;
    background: #ffffff;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    cursor: pointer;
    width: 162.50px;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    border-radius: 28.65px;
    height: 34px;
    margin-top: 28.64px;
    font-size: 15.46px;
    font-weight: 500;
    color: #666666;
    line-height: 1;
    padding-top: 1.43px;
    position: absolute;
    left: 50%;
    bottom: 35.50px;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
}
#app .matchindex .head .pay-btn i {
    width: 20px;
    height: 20px;
    background: url(https://m.a8livetv.com/themes/a8livetv/assets/live.png) no-repeat;
    background-size: 100% 100%;
    margin-right: 16.90px;
}

/* tab */

#app .matchindex .tabs-container {
    background: #ffffff;
    width: 100%;
}
.scroll-container {
    height: 100%;
    overflow: hidden;
    position: relative;
}
#app .matchindex .menu-list {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
.scroll-container .scroll-wrapper {
    -ms-flex-negative: 0;
    flex-shrink: 0;
}
#app .matchindex .tabs-container .tabs {
    height: 55px;
}
#app .matchindex .tabs-container .tabs .tabs-box {
    width: 100%;
    height: 55px;
    background: #ffffff;
    white-space: nowrap;
    font-size: 19.47px;
    font-weight: 500;
    position: relative;
    color: #666666;
    border-bottom: 0.66px solid #f5f5f5;
    padding: 0 11.45px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}
#app .matchindex .tabs-container .tabs .tabs-box>div {
    height: 55.50px;
    line-height: 55.50px;
    text-align: center;
    width: 126.60px;
    margin-left: 2.80px;
    cursor: pointer;
    margin-right: 2.80px;
}
#app .matchindex .tabs-container .tabs .tabs-box>div.active {
    color: #E5BA5C;
}
#app .matchindex .tabs-container .tabs .tabs-box .bottom-line {
    position: absolute;
    height: 3.43px;
    background-color: #E5BA5C;
    margin: 0;
    bottom: 0;
}

/* #app .overview {
    min-height: calc(100vh - 7.552083rem);
} */

#app .overview>div {
    min-height: 68px;
    position: relative;
} 

#app .overview .title {
    height: 31.50px;
    background: #e2e2e2;
    opacity: 0.63;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    font-size: 15.40px;
    font-weight: 500;
    color: #666666;
    padding-top: 19.76px;
}
#app .overview .title>div {
    height: 18.60px;
    line-height: 18.60px;
}
#app .overview .title>div:nth-child(1) {
    border-left: 11.17px solid #f6b222;
    padding-left: 5.70px;
}
#app .overview .title>div:nth-child(2) {
    padding-right: 11.17px;
    border-right: 5.70px solid #f6b222;
}
.panel_main{
  margin-top: 0px !important;
}
.title{
  box-sizing: content-box !important;
}
#app .overview .score-box {
    background: #ffffff;
    height: 201px;
    border-bottom: 14px solid #f1f1f1;
}
#app .overview .score-box .score {
    padding-top: 10px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    padding-bottom: 18px;
}


</style>


<?php

  $infoMatch = tep_fetch_object(tep_query("SELECT * 
                                          FROM nano_schedule_match sm 
                                          LEFT JOIN nano_live_match_list lml ON sm.glive_id = lml.match_list_id 
                                          WHERE 
                                              1=1 AND 
                                              sm.match_id = '&".tep_input($_GET['id'])."&'"));

  
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


?>


<div id="app">
  <div class="matchindex route-page">
    <div class="head-wrap">
      <div class="head">
       
        <div class="nav">
          <div class="nav-left">
            <i></i>
          </div> 
          <div class="nav-text">
            <?=$infoMatch->match_leagueEn?>
            <span><?=date('d/m/Y H:i A', strtotime($infoMatch->match_time))?></span>
          </div> 
          <div class="nav-right">
            <i class="collection">
              <div class="collect"><!----> 
                <svg viewBox="0 0 50.7 51.9">
                  <path d="M25.3,5.06l6.57,13.23.3.7.7.1,14.62,2.19L36.94,31.52l-.5.5.1.7L39,47.34,26,40.47l-.7-.3-.7.3-13,7,2.49-14.62.1-.7-.4-.6L3.12,21.27l14.62-2.19.7-.1.3-.7L25.3,5.06M25.3,2,17.54,17.69.13,20.28,12.77,32.52l-3,17.41L25.3,41.67l15.62,8.26-3-17.41L50.57,20.28,33.16,17.69,25.3,2Z" class="color-white"></path>
                </svg> 
                <svg viewBox="0 0 50.7 51.9">
                  <polygon points="25.3 1.85 33.2 17.65 50.7 20.25 38 32.55 41 50.05 25.3 41.75 9.7 50.05 12.7 32.55 0 20.25 17.5 17.65 25.3 1.85" class="color-green"></polygon>
                </svg>
              </div>
            </i>
          </div>
        </div>

        <div class="against">
          <div class="piece">
            <div>
              <div class="collection">
                <div class="collect"><!----> 
                  <svg viewBox="0 0 50.7 51.9">
                    <path d="M25.3,5.06l6.57,13.23.3.7.7.1,14.62,2.19L36.94,31.52l-.5.5.1.7L39,47.34,26,40.47l-.7-.3-.7.3-13,7,2.49-14.62.1-.7-.4-.6L3.12,21.27l14.62-2.19.7-.1.3-.7L25.3,5.06M25.3,2,17.54,17.69.13,20.28,12.77,32.52l-3,17.41L25.3,41.67l15.62,8.26-3-17.41L50.57,20.28,33.16,17.69,25.3,2Z" class="color-white"></path>
                  </svg> 
                  <svg viewBox="0 0 50.7 51.9">
                    <polygon points="25.3 1.85 33.2 17.65 50.7 20.25 38 32.55 41 50.05 25.3 41.75 9.7 50.05 12.7 32.55 0 20.25 17.5 17.65 25.3 1.85" class="color-green"></polygon>
                  </svg>
                </div>
              </div> 
              <img src="https://www.a8livetv.com/api/images/football/team/logo/20130913230856.png" alt="">
            </div> 
            <p>Vasco da Gama</p>
          </div> 
          <div class="score">
            <p>FT</p> 
            <p>1 - 1</p> 
            <p>HT 1 - 1</p>
          </div> 
          <div class="piece piece-right">
            <div>
              <div class="collection">
                <div class="collect"><!----> 
                  <svg viewBox="0 0 50.7 51.9">
                    <path d="M25.3,5.06l6.57,13.23.3.7.7.1,14.62,2.19L36.94,31.52l-.5.5.1.7L39,47.34,26,40.47l-.7-.3-.7.3-13,7,2.49-14.62.1-.7-.4-.6L3.12,21.27l14.62-2.19.7-.1.3-.7L25.3,5.06M25.3,2,17.54,17.69.13,20.28,12.77,32.52l-3,17.41L25.3,41.67l15.62,8.26-3-17.41L50.57,20.28,33.16,17.69,25.3,2Z" class="color-white"></path>
                  </svg> 
                  <svg viewBox="0 0 50.7 51.9">
                    <polygon points="25.3 1.85 33.2 17.65 50.7 20.25 38 32.55 41 50.05 25.3 41.75 9.7 50.05 12.7 32.55 0 20.25 17.5 17.65 25.3 1.85" class="color-green"></polygon>
                  </svg>
                </div>
              </div> 
              <img src="https://www.a8livetv.com/api/images/football/team/logo/20130924105150.png" alt="">
            </div> 
            <p>Londrina PR</p>
          </div>
        </div>

        <div class="pay-btn">
          <i></i>
          Live Stream
        </div>

      </div>  
      
      <div class="tabs-container">
        <div class="scroll-container menu-list" style="touch-action: none;">
          <div class="scroll-wrapper" style="pointer-events: auto;">
            <div class="tabs" style="pointer-events: auto;">
              <div class="tabs-box only-four">
                <div class="item active">
                  <span>Overview</span>
                </div>
                <div class="item">
                  <span>Lineups</span>
                </div>
                <div class="item">
                  <span>H2H</span>
                </div>
                <div class="item">
                  <span>Standings</span>
                </div>
                <div class="bottom-line" style="left: 24px;width: 80px;transition: all 0.3s ease 0s;"></div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>

    <div class="tab-page">
      <div class="overview" leagueid="10527">
        <div>
          <div class="title">
            <div>Independiente Santa Fe</div>
            <div>Atletico Nacional Medellin</div>
          </div>
          <div class="score-box">
            <div class="score">
              <di class="score1">
                
              </di>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

<!--

<div class="football__details">
    <div class="details__nav">
        <div class="details__top">
            <div class="arrow__left"><i class="arrow__left--i"></i></div>
            <div class="details__text">
                <?=$infoMatch->match_leagueEn?>
                <span class="details__text--span"><?=date('d/m/Y H:i A', strtotime($infoMatch->match_time))?></span>
            </div>
            <div class="details__star">
                <svg viewBox="0 0 50.7 51.9"><path d="M25.3,5.06l6.57,13.23.3.7.7.1,14.62,2.19L36.94,31.52l-.5.5.1.7L39,47.34,26,40.47l-.7-.3-.7.3-13,7,2.49-14.62.1-.7-.4-.6L3.12,21.27l14.62-2.19.7-.1.3-.7L25.3,5.06M25.3,2,17.54,17.69.13,20.28,12.77,32.52l-3,17.41L25.3,41.67l15.62,8.26-3-17.41L50.57,20.28,33.16,17.69,25.3,2Z" class="color-white"></path></svg>
            </div>
        </div>
        <div class="details__time">
            <p class="detail__time--para"><?=$infoMatch->match_state?></p>
        </div>
        <div class="details__team--wrapper">
            <div class="details__team">
                <div class="details__team--logo">
                    <svg class="team__star--left" viewBox="0 0 50.7 51.9"><path d="M25.3,5.06l6.57,13.23.3.7.7.1,14.62,2.19L36.94,31.52l-.5.5.1.7L39,47.34,26,40.47l-.7-.3-.7.3-13,7,2.49-14.62.1-.7-.4-.6L3.12,21.27l14.62-2.19.7-.1.3-.7L25.3,5.06M25.3,2,17.54,17.69.13,20.28,12.77,32.52l-3,17.41L25.3,41.67l15.62,8.26-3-17.41L50.57,20.28,33.16,17.69,25.3,2Z" class="color-white"></path></svg>
                    <img class="team__logo--left" src="https://www.a8livetv.com/api/images/football/team/logo/164047928222.png" alt="">
                </div>
                <p class="details__team--name">
                    <?=$infoMatch->match_homeEn?>
                </p>
            </div>
            <div class="details__point">
                <p class="details__point--score"><?=$infoMatch->match_homeScore?> - <?=$infoMatch->match_awayScore?></p>
                <p class="details__point--ht">HT <?=$infoMatch->match_homeHalfScore?> - <?=$infoMatch->match_homeAwayScore?></p>
            </div>
            <div class="details__team">
                <div class="details__team--logo">s
                    <img class="team__logo--right" src="https://www.a8livetv.com/api/images/football/team/logo/164047928222.png" alt="">
                    <svg class="team__star--right" viewBox="0 0 50.7 51.9"><path d="M25.3,5.06l6.57,13.23.3.7.7.1,14.62,2.19L36.94,31.52l-.5.5.1.7L39,47.34,26,40.47l-.7-.3-.7.3-13,7,2.49-14.62.1-.7-.4-.6L3.12,21.27l14.62-2.19.7-.1.3-.7L25.3,5.06M25.3,2,17.54,17.69.13,20.28,12.77,32.52l-3,17.41L25.3,41.67l15.62,8.26-3-17.41L50.57,20.28,33.16,17.69,25.3,2Z" class="color-white"></path></svg>
                </div>
                <p class="details__team--name">
                    <?=$infoMatch->match_awayEn?>
                </p>
            </div>
        </div>
        <div class="live__button">
            Live Stream
        </div>
    </div>
    <div class="menu__wrapper">
        <div class="tablinks menu__overview first__menu--active" onclick="openTabs(event, 'Overview')">
            Overview
        </div>
        <div class="tablinks menu__h2h" onclick="openTabs(event, 'H2H')">
            H2H
        </div>
        <div class="tablinks menu__standings" onclick="openTabs(event, 'Standings')">
            Standings
        </div>
        <div class="tablinks menu__chat" onclick="openTabs(event, 'Chat')">
            Chat
        </div>
    </div>

    <div id="Overview" class="tabcontent" style="display:block;">
        <h3>Overview</h3>
        <p>Overview Content.</p> 
        <div class="title">
            <div>Atletico La Paz</div>
            <div>Atletico La Paz2</div>
        </div>
    </div>

    <div id="H2H" class="tabcontent" style="display:none;">
        <div class="h2h__bar">
            <p class="h2h__bar--title">H2H</p>
            <div class="h2h__checkbox">
                <input type="checkbox" name="test" id="test">
                <p class="h2h__checkbox--title">Sisaket United - Home</p>
                <input type="checkbox" name="test" id="test">
                <p class="h2h__checkbox--title">This League</p>
            </div>
        </div>
        <div class="h2h__tips">
            <p>Last 20, Liverpool Win 7, Draw 7, Lose 6, Scored 1.40</p>
        </div>
        <div class="h2h__table">
            <div class="h2h__table--title">
                <p class="h2h__table-title--one">
                    Date
                </p>
                <p class="h2h__table-title--two">
                    Team
                </p>
                <p class="h2h__table-title--three">
                    HT
                </p>
                <p class="h2h__table-title--four">
                    FT
                </p>
                <p class="h2h__table-title--five"></p>
            </div>
            <div class="h2h__table--data">
                <div class="h2h__table-data--rowOne">
                    <p class="data__date">8/23/22</p>
                    <p class="data__league">English Premier League</p>
                </div>
                <div class="h2h__table-data--rowTwo">
                    <div class="data__team">
                        <img class="data__team--logo" src="https://www.a8livetv.com/api/images/football/team/logo/164577479190.png" alt="">
                        <p class="data__team--name">Machester United</p>
                    </div>
                    <div class="data__team data__team--bottom">
                        <img class="data__team--logo" src="https://www.a8livetv.com/api/images/football/team/logo/164577447430.png" alt="">
                        <p class="data__team--name">Liverpool</p>
                    </div>
                </div>
                <div class="h2h__table-data--rowThree">
                    <div class="data__team">
                        <p class="data__team--name">1</p>
                    </div>
                    <div class="data__team data__team--bottom">
                        <p class="data__team--name">0</p>
                    </div>
                </div>
                <div class="h2h__table-data--rowFour">
                    <div class="data__team">
                        <p class="data__team--name">2</p>
                    </div>
                    <div class="data__team data__team--bottom">
                        <p class="data__team--name">1</p>
                    </div>
                </div>
                <div class="h2h__table-data--rowFive">
                    <div class="data__team">
                        <p class="data__team--result">W</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="h2h__bar">
            <p class="h2h__bar--title">Latest Matches</p>
            <div class="h2h__checkbox">
                <input type="checkbox" name="test" id="test">
                <p class="h2h__checkbox--title">Home / Away</p>
                <input type="checkbox" name="test" id="test">
                <p class="h2h__checkbox--title">This League</p>
            </div>
        </div>
        <div class="h2h__team">
            <img class="h2h__team--logo" src="https://www.a8livetv.com/api/images/football/team/logo/164577447430.png" alt="">
            <p class="h2h__team--name">Liverpool</p>
        </div>
        <div class="h2h__tips--two">
            <p>Last 20, Liverpool Win 7, Draw 7, Lose 6, Scored 1.40</p>
        </div>
        <div class="h2h__table">
            <div class="h2h__table--title">
                <p class="h2h__table-title--one">
                    Date
                </p>
                <p class="h2h__table-title--two">
                    Team
                </p>
                <p class="h2h__table-title--three">
                    HT
                </p>
                <p class="h2h__table-title--four">
                    FT
                </p>
                <p class="h2h__table-title--five"></p>
            </div>
            <div class="h2h__table--data">
                <div class="h2h__table-data--rowOne">
                    <p class="data__date">8/23/22</p>
                    <p class="data__league">English Premier League</p>
                </div>
                <div class="h2h__table-data--rowTwo">
                    <div class="data__team">
                        <img class="data__team--logo" src="https://www.a8livetv.com/api/images/football/team/logo/164577479190.png" alt="">
                        <p class="data__team--name">Machester United</p>
                    </div>
                    <div class="data__team data__team--bottom">
                        <img class="data__team--logo" src="https://www.a8livetv.com/api/images/football/team/logo/164577447430.png" alt="">
                        <p class="data__team--name">Liverpool</p>
                    </div>
                </div>
                <div class="h2h__table-data--rowThree">
                    <div class="data__team">
                        <p class="data__team--name">1</p>
                    </div>
                    <div class="data__team data__team--bottom">
                        <p class="data__team--name">0</p>
                    </div>
                </div>
                <div class="h2h__table-data--rowFour">
                    <div class="data__team">
                        <p class="data__team--name">2</p>
                    </div>
                    <div class="data__team data__team--bottom">
                        <p class="data__team--name">1</p>
                    </div>
                </div>
                <div class="h2h__table-data--rowFive">
                    <div class="data__team">
                        <p class="data__team--result">W</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="h2h__team">
            <img class="h2h__team--logo" src="https://www.a8livetv.com/api/images/football/team/logo/164577479190.png" alt="">
            <p class="h2h__team--name">Machester United</p>
        </div>
        <div class="h2h__tips--two">
            <p>Last 20, Liverpool Win 7, Draw 7, Lose 6, Scored 1.40</p>
        </div>
        <div class="h2h__table">
            <div class="h2h__table--title">
                <p class="h2h__table-title--one">
                    Date
                </p>
                <p class="h2h__table-title--two">
                    Team
                </p>
                <p class="h2h__table-title--three">
                    HT
                </p>
                <p class="h2h__table-title--four">
                    FT
                </p>
                <p class="h2h__table-title--five"></p>
            </div>
            <div class="h2h__table--data">
                <div class="h2h__table-data--rowOne">
                    <p class="data__date">8/23/22</p>
                    <p class="data__league">English Premier League</p>
                </div>
                <div class="h2h__table-data--rowTwo">
                    <div class="data__team">
                        <img class="data__team--logo" src="https://www.a8livetv.com/api/images/football/team/logo/164577479190.png" alt="">
                        <p class="data__team--name">Machester United</p>
                    </div>
                    <div class="data__team data__team--bottom">
                        <img class="data__team--logo" src="https://www.a8livetv.com/api/images/football/team/logo/164577447430.png" alt="">
                        <p class="data__team--name">Liverpool</p>
                    </div>
                </div>
                <div class="h2h__table-data--rowThree">
                    <div class="data__team">
                        <p class="data__team--name">1</p>
                    </div>
                    <div class="data__team data__team--bottom">
                        <p class="data__team--name">0</p>
                    </div>
                </div>
                <div class="h2h__table-data--rowFour">
                    <div class="data__team">
                        <p class="data__team--name">2</p>
                    </div>
                    <div class="data__team data__team--bottom">
                        <p class="data__team--name">1</p>
                    </div>
                </div>
                <div class="h2h__table-data--rowFive">
                    <div class="data__team">
                        <p class="data__team--result">W</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="h2h__lastbar">
            <p class="h2h__bar--title">Next 35 Matches</p>
        </div>
        <div class="h2h__team">
            <img class="h2h__team--logo" src="https://www.a8livetv.com/api/images/football/team/logo/164577447430.png" alt="">
            <p class="h2h__team--name">Liverpool</p>
        </div>
        <div class="h2h__table">
            <div class="h2h__table--data">
                <div class="h2h__table-data--rowOne">
                    <p class="data__date">8/23/22</p>
                    <p class="data__league">English Premier League</p>
                </div>
                <div class="h2h__table-data--rowTwo">
                    <div class="data__team">
                        <img class="data__team--logo" src="https://www.a8livetv.com/api/images/football/team/logo/164577479190.png" alt="">
                        <p class="data__team--name">Machester United</p>
                    </div>
                    <div class="data__team data__team--bottom">
                        <img class="data__team--logo" src="https://www.a8livetv.com/api/images/football/team/logo/164577447430.png" alt="">
                        <p class="data__team--name">Liverpool</p>
                    </div>
                </div>
                <div class="h2h__table-next">
                    <div class="data__next">
                        <p class="data__next">0 days</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="h2h__team">
            <img class="h2h__team--logo" src="https://www.a8livetv.com/api/images/football/team/logo/164577479190.png" alt="">
            <p class="h2h__team--name">Machester United</p>
        </div>
        <div class="h2h__table">
            <div class="h2h__table--data">
                <div class="h2h__table-data--rowOne">
                    <p class="data__date">8/23/22</p>
                    <p class="data__league">English Premier League</p>
                </div>
                <div class="h2h__table-data--rowTwo">
                    <div class="data__team">
                        <img class="data__team--logo" src="https://www.a8livetv.com/api/images/football/team/logo/164577479190.png" alt="">
                        <p class="data__team--name">Machester United</p>
                    </div>
                    <div class="data__team data__team--bottom">
                        <img class="data__team--logo" src="https://www.a8livetv.com/api/images/football/team/logo/164577447430.png" alt="">
                        <p class="data__team--name">Liverpool</p>
                    </div>
                </div>
                <div class="h2h__table-next">
                    <div class="data__next">
                        <p class="data__next">0 days</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="Standings" class="tabcontent" style="display:none;">
        <h3>Standings</h3>
        <p>Standings Content.</p> 
    </div>

    <div id="Chat" class="tabcontent" style="display:none;">
        <div class="chat__wrapper">
            <div class="chats">
                <div class="chat">
                    <div class="chat__username">
                        Anonymous123 : 
                    </div>
                    <div class="chat__para">
                        test
                    </div>
                </div>
            </div>
            <div class="chats">
                <div class="chat">
                    <div class="chat__username">
                        Anonymous123 : 
                    </div>
                    <div class="chat__para">
                        test
                    </div>
                </div>
            </div>
            <div class="chats">
                <div class="chat">
                    <div class="chat__username">
                        Anonymous123 : 
                    </div>
                    <div class="chat__para">
                        test
                    </div>
                </div>
            </div>
        </div>
        <div class="chat__entry">
            <div class="chat__entry--wrapper">
                <input class="chat__input" type="text" name="" id="" placeholder="Share your views">
                <div class="chat__emo"></div>
                <div class="chat__send"></div>
            </div>
        </div>
    </div>
</div>   
-->

<script>
    function openTabs(evt, tabsName) {
        let i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].classList.remove("first__menu--active");
            tablinks[i].className = tablinks[i].className.replace(" menu__active", "");
        }
        document.getElementById(tabsName).style.display = "block";
        evt.currentTarget.className += " menu__active";
    }
</script>