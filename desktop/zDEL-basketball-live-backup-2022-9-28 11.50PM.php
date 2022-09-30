  <?php
    // FOR RETRIEVE LIVE STREAM - FETCH FROM API
    // FOR RETRIEVE LIVE STREAM - FETCH FROM API
    // FOR RETRIEVE LIVE STREAM - FETCH FROM API

    include('includes/api/basketball-api.php');

    $matchid = 22724746; // FOR JY TESTING ONLY
  ?>
    

    <div class="panel_details">
        
        <style>
.header{
margin-bottom: 0px;
}
          .details_team {         
              text-align: center;
              padding: 20px 0px 20px 0px;
              font-size: 28px;
              font-weight: bold;
              margin-bottom: 0px;
background: #fff;
          }
          .details_team .team_time {
              font-size: 17px;
          }
          .details_team .team_vs {
              font-size: 14px; 
              padding: 0px 20px;
              width: 10%;float: left;
          }
          .details_team .team_home {
              width: max-content !important;
              float: right !important;
              padding: 5px 20px !important;
              cursor: pointer !important;
              font-weight: bold;
          }
          .details_team .team_away {
              width: max-content !important;
              float: left !important;
              padding: 5px 20px !important;
              cursor: pointer !important;
              font-weight: bold;
          }
         .details_team .team_league {
    display: flex;
    align-content: center;
    -webkit-box-pack: center;
    justify-content: center;
    font-weight: 600;
    color: #666666;
    -webkit-box-align: center;
    align-items: center;
    font-size: 14px;
    padding: 20px 12px;
    margin-bottom: 15px;
    background: none;
}

.team_league span {
    margin: 0 5px;
    line-height: 0;
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

          .score_frame {
              margin-bottom: 10px;
          }

          .score_frame .title {
              width: 100%;
              height: 30px;
              background: #f7f3e7;
              font-size: 12px;
              font-weight: 400;
              color: #999;
          }
          .score_frame .body {
              width: 100%;
              height: 30px;
              background: #fff;
              font-size: 12px;
              font-weight: 400;
              color: #111111;
          }
          .score_frame table, th, td {
              text-align: center;
              border: 1px solid #d9d9d9;
          }
         .attacks {
    opacity: 1;
    display: flex;
    width: 100%;
    height: auto;
    background: #2b2b2b;
    padding: 21px 0;
    align-items: center;
    justify-content: space-between;
}
          .attacks .foul-content{
              display: flex;
              width: 120px;
              height: 100%;
              flex-direction: column;
              justify-content: space-around;
              align-items: center;
          }
          .attacks .shoot-content{
              display: flex;
              justify-content: space-around;
              flex-direction: column;
              padding: 10px 0;
              text-align: center;
          }
          .attacks .mid-content-text{
              font-size: 12px;
              font-weight: 400;
              color: #fff;
              width: 130px;
              text-align: center;
          }
          .attacks .process-box{
              width: auto;
min-width:170px;
position: relative;
          }
.process-box::after{
content: "";
    position: absolute;
    left: 0px;
    right: 0px;
    background: #000;
    height: 6px;
    width: 100%;
    top: -4px;
}
          .quarter-btn-group {
              display: flex;
              justify-content: center;
              padding-bottom: 15px;
              padding-top: 15px;
              vertical-align: middle;
              /*background: rgb(196,154,18);
              background: linear-gradient(135deg, rgba(196,154,18,1) 35%, rgba(166,147,6,1) 100%);*/
              /*width: 80%;*/
          }

          .team_vs_playing {
            color: red;
          }

          /* SECTION PLAY BY PLAY CSS */

          .section-play-by-play {
            background-color: white;
            padding: 0px 10px;
          }

          .btn-quarter-play-by-play {
            border: 1px solid black;
            padding-left: 80px;
            padding-right: 80px;
            padding-top: 3px;
            padding-bottom: 3px;
            text-align: center;
            font-size: 12px;
            cursor: pointer;
          }

          .show-play-by-play-quarter2 {
            display: none;
          }

          .show-play-by-play-quarter3 {
            display: none;
          }

          .show-play-by-play-quarter4 {
            display: none;
          }

          .show-play-by-play-quarter1:nth-child(odd) {
            background-color: #f9f9f9;
          }

          .show-play-by-play-quarter2:nth-child(odd) {
            background-color: #f9f9f9;
          }

          .show-play-by-play-quarter3:nth-child(odd) {
            background-color: #f9f9f9;
          }

          .show-play-by-play-quarter4:nth-child(odd) {
            background-color: #f9f9f9;
          }

.quarter-1-play-by-play .row{margin-left:-10px;margin-right:-11px;}

          .show-row-top-player {
    padding: 10px;
    font-size: 10px;
    text-align: center;
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin: 0;
}

          .hr-top-player {
            border: 1px dashed #dfdfdf;
          }

          .div-hr-top-player {
            padding-left: 30px;
            padding-right: 30px;
          }

          .vertical-bar-top-player-home {
                border-left: 15px solid #2dadef;
    height: 50px;
    bottom: 0px;
    margin: 0 0 0 8px;
          }

          .vertical-bar-top-player-away {
                border-left: 15px solid #f5c35f;
    height: 30px;
    bottom: 0px;
margin: 0 0 0 8px;
          }

          .player-logo-top-player {
    width: 55px;
    border-radius: 50%;
    border: 1px solid #cbcbcb;
    height: 55px;
    padding: 2px;
}



          .team-logo-top-player {
            width: 30px;
            border-radius: 50%;
          }

          .section-top-player {
            background-color: white;
          }

          .div-top-player {
            background-color: white;
          }

          .section-team-top-player {
            background-color: #f7f3e7;
            width:  100%;
            margin: 5px 0px;
            padding: 10px 0px 10px 0px;
            text-align: center;
            font-size: 14px;
            font-weight: normal;
            margin-top: 10px;
          }

.section-team-top-player img{
display: none;
}

          .div-match-stat {
            background-color: white;
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

          .show-row-match-stat {
            font-size: 14px;
            margin: 5px 0px;
            padding: 10px 15px 10px 15px;
          }

.show-row-match-stat .row:first-child{margin-bottom:10px;}

          .hr-match-stat {

          }

          .table-show-h2h {
            width: 100%;
            border: 1px solid #eee;
            padding: 10px;
            margin-top: 10px !important;
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

          .btnBoxScore {
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
            /*padding: 10px;*/
            border: none;
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

          .rowShowData {
            border-bottom: 1px solid #eee;
          }

          .rowShowData:nth-child(even) {
            background-color: #f7f3e7;
          }

          .col-show-h2h {
            padding: 10px;
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

          .col-show-standing {
            padding: 10px;
          }

          /*.basketball_boxScore {
              width: 1200px;
              margin: 12px auto;
              box-shadow: 0 1px 0 0 #eee, 0 2px 4px 0 rgb(0 0 0 / 10%);
              border-radius: 12px;
              background-color: #fff;
              padding-bottom: 24px;
          }*/


/* CSS by Syed start */

.teams-score{display: flex;-webkit-box-align: center;align-items: center;-webkit-box-pack: center;justify-content: center;}
.team-a{display: flex;-webkit-box-align: center;align-items: center;}
.team_home{font-weight: 500;}
.team-logo{width: 50px;height: 50px;margin-left: 25px;margin-right:25px;}
.team-logo img{max-width: 100%;display: block;}
.main-score{font-weight: bold;text-align: center;}
.color-red{color:#000;}
.team_away{font-weight: 500;}
.first_bar span a{font-weight: 400;}
.score_frame table, th, td{font-size: 12px;}
.first_bar{margin: 0px 0px 10px 0px;}
.details_container{margin: 20px auto 0px auto;}
.font-weight-bold{font-weight: bold;font-size: 13px;}
.width-250{width:250px;}
.live-title span{margin-right:5px;}
.foul-content{display: flex;text-align: center;justify-content: center;flex-direction: column;font-size: 12px;font-weight: 400;}
.foul-block{display: flex;text-align: center;justify-content: center;flex-direction: column;font-size: 12px;font-weight: 400;}
.foul-number{color: #fff;font-size: 16px;}
.foul-label{color: #999;font-size: 13px;}
.process-box{color:#fff}
.row-block{display:flex;margin-bottom:10px;align-items: center;justify-content: space-between;}
.absolute{position: absolute;}
.left-fix{left: -25px;font-size: 13px;top: -8px;z-index: 99;background: #2b2b2b;padding-right: 5px;}
.right-fix{right: -25px;font-size: 13px;top: -8px;z-index: 99;background: #2b2b2b;padding-left: 5px;}
.mt-20{margin-top:20px;}
.mt-20{margin-bottom:20px;}
.title-section{color: #fff;text-align: left;font-weight: normal;padding: 15px;background:linear-gradient(300deg, rgb(211 169 37) 35%, rgb(135 107 17) 100%);font-size:16px;font-weight:400}
.score_frame table th {background: #fff;border: 1px solid #ffffff;border-bottom: 1px solid #d9d9d9;}
.mb-0{margin-bottom:0px;}
.show-play-by-play-quarter1 div{padding:12px 20px;border: 0.2px solid #d9d9d94d;font-size:12px;}
.team_league span.fa-star{background: #666666;display: inline-block;line-height: 19px;color: #fff;font-size: 11px;padding: 1px 4px 2px;border-radius: 4px;}

/* CSS by Syed end */
          
        </style>

        <?php

        $infoRow = tep_fetch_object(tep_query("
                        SELECT * 
                        FROM nano_basketball_schedule_match bsm 
                        LEFT JOIN nano_basketball_league_list bll ON bsm.match_leagueId = bll.league_leagueId 
                        LEFT JOIN nano_basketball_live_match blm ON bsm.glive_id = blm.MatchId 
                        WHERE 
                            bsm.match_id = '&".tep_input($_GET['id'])."&'"));

        if($infoRow->match_id==""){
            echo redirect('basketball-main');
        }


        // GET TEAM INFO
        // GET TEAM INFO
        // GET TEAM INFO

        $infoTeamHome = tep_fetch_object(tep_query("SELECT * FROM nano_basketball_team_profile WHERE team_teamId = '".$infoRow->match_homeTeamId."' "));
        $infoTeamAway = tep_fetch_object(tep_query("SELECT * FROM nano_basketball_team_profile WHERE team_teamId = '".$infoRow->match_awayTeamId."' "));
        
        if($infoTeamHome->team_logo2 == ''){
          $homeTeamLogo = "https://www.a8livetv.com/themes/a8livetv/assets/no-logo.svg";
        } else{
          $homeTeamLogo = "includes/images/basketball/team/logo/" . $infoTeamHome->team_logo2;
        }

        if($infoTeamAway->team_logo2 == ''){
          $awayTeamLogo = "https://www.a8livetv.com/themes/a8livetv/assets/no-logo.svg";
        } else {
          $awayTeamLogo = "includes/images/basketball/team/logo/" . $infoTeamAway->team_logo2;
        }


        // MATCH STATUS - FOR SHOWING RED COLOR
        // MATCH STATUS - FOR SHOWING RED COLOR
        // MATCH STATUS - FOR SHOWING RED COLOR

        $totalHomeScore = "";
        $totalAwayScore = "";

        switch ($infoRow->match_state) 
        {
          case 'The first quarter':

            $matchProgressTime = 'Q1';
            $remainTime = $infoRow->match_remainTime == null ? "" : $infoRow->match_remainTime;
            $team_vs_playing = "team_vs_playing";
            $totalHomeScore = "team_vs_playing";
            $totalAwayScore = "team_vs_playing";

            break;

          case 'The second quarter':

            $matchProgressTime = 'Q2';
            $remainTime = $infoRow->match_remainTime == null ? "" : $infoRow->match_remainTime;
            $team_vs_playing = "team_vs_playing";
            $totalHomeScore = "team_vs_playing";
            $totalAwayScore = "team_vs_playing";
            
            break;

          case 'The third quarter':

            $matchProgressTime = 'Q3';
            $remainTime = $infoRow->match_remainTime == null ? "" : $infoRow->match_remainTime;
            $team_vs_playing = "team_vs_playing";
            $totalHomeScore = "team_vs_playing";
            $totalAwayScore = "team_vs_playing";
            
            break;

          case 'The fourth quarter':

            $matchProgressTime = 'Q4';
            $remainTime = $infoRow->match_remainTime == null ? "" : $infoRow->match_remainTime;
            $team_vs_playing = "team_vs_playing";
            $totalHomeScore = "team_vs_playing";
            $totalAwayScore = "team_vs_playing";
            
            break;

          case 'Finished':

            $matchProgressTime = 'FT';
            $remainTime = "";
            $team_vs_playing = "";
            $totalHomeScore = "";
            $totalAwayScore = "";
            
            break;

          case 'Half-time':

            $matchProgressTime = 'HT';
            $remainTime = $infoRow->match_remainTime == null ? "" : $infoRow->match_remainTime;
            $team_vs_playing = "team_vs_playing";
            $totalHomeScore = "team_vs_playing";
            $totalAwayScore = "team_vs_playing";

            break;
          
          default:
            $matchProgressTime = $infoRow->match_state;
            $remainTime = "";
            $team_vs_playing = "";
            $totalHomeScore = "";
            $totalAwayScore = "";

            break;
        }



        ?>

        <div class="details_team">

            <div class="team_league">
                <span><?=$infoRow->league_nameEn?></span>
                <span><?=date("Y-m-d H:i:s", strtotime($infoRow->match_time))?></span>
                <span class="fa fa-star"></span>
            </div>
            
            <div class="teams-score">

              <div class="team-a">
                <div>
                  <div class="team_home"><?=$infoRow->match_homeTeamEn?> </div>
                </div>
                <div class="team-logo">
                  <img src="<?php echo $homeTeamLogo; ?>">
                </div>
                <div class="<?php echo $team_vs_playing; ?> main-score color-red"><?=$infoRow->match_homeScore?></div>
              </div>

              <div class="team_vs color-red <?php echo $team_vs_playing?>"><?php echo $matchProgressTime . "  " . $remainTime ?></div>

              <div class="team-a">
                <div class="<?php echo $team_vs_playing; ?> color-red"><?=$infoRow->match_awayScore?></div>
                <div class="team-logo">
                  <img src="<?php echo $awayTeamLogo; ?>">
                </div>
                <div>
                  <div class="team_away"><?=$infoRow->match_awayTeamEn?></div>
                </div>
              </div>
            </div>
            <div style="clear: both;"></div>



        </div>


        <div class="first_bar">
          <?php

                if($_GET['tab']==""){
                    $_GET['tab'] = "LIVE";
                }

                $strTab = '<span ><a href="basketball-live?tab=BOXSCORE&id='.createToken($infoRow->match_id).'">Box Score</a></span>
                           <span ><a href="basketball-live?tab=H2H&id='.createToken($infoRow->match_id).'">H2H</a></span>
                           <span ><a href="basketball-live?tab=STANDING&id='.createToken($infoRow->match_id).'">Standing</a></span>
                           <span ><a href="basketball-live?tab=LIVE&id='.createToken($infoRow->match_id).'">Live</a></span>';


                echo str_replace("?tab=".$_GET['tab']."\">", "?tab=".$_GET['tab']."\" class=\"tabSelected\">", $strTab);

          ?>
        </div>


        <div class="details_container">
            <?php

            ?>

            <!-- START LIVE TAB -->
            <!-- START LIVE TAB -->
            <!-- START LIVE TAB -->

            <?php
            if($_GET['tab'] == 'LIVE')
            {
            ?>
              <!-- SHOW SCORE -->
              <!-- SHOW SCORE -->
              <!-- SHOW SCORE -->

              <div class="score_frame">
                <table style="width: 100%; border: 0;">
                <thead>
                    <tr class="title">
                      <th style="width: 35px"></th>
                      <th>Q1</th>
                      <th>Q2</th>
                      <th>Q3</th>
                      <th>Q4</th>
                      <th>OT1</th>
                      <th>OT2</th>
                      <th>OT3</th>
                      <th>T</th>
                    </tr>
                </thead>
                  <!-- 
                    Q1 - Q4 match_home1-4
                    OT1 - OT3 match_homeOT1-4
                    T match_homeScore
                  -->
                  <tbody>
                  <tr class="body">
                    <td class="font-weight-bold width-250"><?php echo $infoRow->match_homeTeamEn; ?></td>
                    <td><?php echo $infoRow->match_home1; ?></td>
                    <td><?php echo $infoRow->match_home2; ?></td>
                    <td><?php echo $infoRow->match_home3; ?></td>
                    <td><?php echo $infoRow->match_home4; ?></td>
                    <td><?php echo $infoRow->match_homeOT1; ?></td>
                    <td><?php echo $infoRow->match_homeOT2; ?></td>
                    <td><?php echo $infoRow->match_homeOT3; ?></td>
                    <td class="<?php echo $totalHomeScore; ?> color-red font-weight-bold"><?php echo $infoRow->match_homeScore; ?></td>
                  </tr>

                  <tr class="body">
                    <td class="font-weight-bold width-250"><?php echo $infoRow->match_awayTeamEn; ?></td>
                    <td><?php echo $infoRow->match_away1; ?></td>
                    <td><?php echo $infoRow->match_away2; ?></td>
                    <td><?php echo $infoRow->match_away3; ?></td>
                    <td><?php echo $infoRow->match_away4; ?></td>
                    <td><?php echo $infoRow->match_awayOT1; ?></td>
                    <td><?php echo $infoRow->match_awayOT2; ?></td>
                    <td><?php echo $infoRow->match_awayOT3; ?></td>
                    <td class="<?php echo $totalAwayScore; ?> color-red font-weight-bold"><?php echo $infoRow->match_awayScore; ?></td>
                  </tr>
                </tbody>
                </table>
              </div>


              <div class="details_left">

                <?php
                // echo "<pre>".print_r($infoRow,true)."</pre>";

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
                  <div class="live-streaming">
                  <center>
                      <!-- Title -->
                      <div class="live-title">
                        <i></i>
                        <span><?=$infoRow->league_nameEn?></span>
                        <span><?=date("Y-m-d H:i:s", strtotime($infoRow->match_time))?></span>
                      </div>

                      <div class="video-wrap">
                        <div style="position: relative; background: url('https://www.a8livetv.com/assets/basketball.png') no-repeat center center;width: 100%;height: 100%;">
                          <div class="component-mask">
                            
                            <!-- Home Team -->
                            <div class="component-item">
                              <div class="itemlogo">
                                <img class="teamlogo" src="<?php echo $homeTeamLogo; ?>" alt="">
                              </div>
                              <div class="teamname"><?php echo $infoRow->match_homeTeamEn; ?></div>
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
                              <div class="teamname"><?php echo $infoRow->match_awayTeamEn; ?></div>
                            </div>
                            
                          </div>
                        </div>
                      </div>

                  </center>
                  </div>

                  <!-- SHOW MATCH STATE -->
                  <!-- SHOW MATCH STATE -->
                  <!-- SHOW MATCH STATE -->

                  <?php

                    // CAN REFER api/basketballGetMatchStat.php

                    // TAKE NOTE ::::: AFTER DONE IMPLEMENT NEED UNCOMMENT THIS LINE
                    // $qryState = tep_query("SELECT * FROM nano_basketball_match_statistic WHERE matchId = '".$infoRow->match_code."' ");

                    // IF HAVE DATA ,,,, SHOW DATA
                    // IF NO DATA ,,,, SHOW "NO DATA" ICON

                    // TAKE NOTE ::::: AFTER DONE IMPLEMENT NEED REMOVE THIS LINE
                    $qryState = tep_query("SELECT * FROM nano_basketball_match_statistic WHERE matchId = '22724746' ");

                    if(tep_num_rows($qryState) == 0)
                    {
                      
                    }

                    while($infoState = tep_fetch_object($qryState))
                    {
                      // echo "<pre>".print_r($infoState,true)."</pre>";

                      // NEED BASED ON type = HOME / AWAY, and sum up the data below

                      // EXAMPLE :::

                      if($infoState->type == 'HOME')
                      {
                        $shootHit = $shootHit + $infoState->shootHit;
                        $shoot = $shoot + $infoState->shoot;
                        $threePointHit = $threePointHit + $infoState->threePointHit;
                        $threePointShoot = $threePointShoot + $infoState->threePointShoot;
                        $freeThrowHit = $freeThrowHit + $infoState->freeThrowHit;
                        $freeThrowShoot = $freeThrowShoot + $infoState->freeThrowShoot;
                        $offensiveRebound = $offensiveRebound + $infoState->offensiveRebound;
                        $defensiveRebound = $defensiveRebound + $infoState->defensiveRebound;
                        $assist = $assist + $infoState->assist;
                        $foul = $foul + $infoState->foul;
                        $steal = $steal + $infoState->steal;
                        $turnover = $turnover + $infoState->turnover;
                        $block = $block + $infoState->block;
                        $score = $score + $infoState->score;
                      }

                      if($infoState->type == 'AWAY')
                      {
                        $shootHitAway = $shootHitAway + $infoState->shootHit;
                        $shootAway = $shootAway + $infoState->shoot;
                        $threePointHitAway = $threePointHitAway + $infoState->threePointHit;
                        $threePointShootAway = $threePointShootAway + $infoState->threePointShoot;
                        $freeThrowHitAway = $freeThrowHitAway + $infoState->freeThrowHit;
                        $freeThrowShootAway = $freeThrowShootAway + $infoState->freeThrowShoot;
                        $offensiveReboundAway = $offensiveReboundAway + $infoState->offensiveRebound;
                        $defensiveReboundAway = $defensiveReboundAway + $infoState->defensiveRebound;
                        $assistAway = $assistAway + $infoState->assist;
                        $foulAway = $foulAway + $infoState->foul;
                        $stealAway = $stealAway + $infoState->steal;
                        $turnoverAway = $turnoverAway + $infoState->turnover;
                        $blockAway = $blockAway + $infoState->block;
                        $scoreAway = $scoreAway + $infoState->score;
                      }

                      // SHOW THE DATA IN HOME AND AWAY SECTION
                      // foul = $foul
                      // 3 points = $threePointHit / $threePointShoot * 100
                      // 2 points = $shootHit / $shoot * 100
                      // Free Throw = $freeThrowHit / $freeThrowShoot * 100
                    }

                    // MATCH STAT HOME

                    $totalShootHitHome = $shootHit;
                    $totalShootHome = $shoot;
                    $totalThreePointHitHome = $threePointHit;
                    $totalThreePointShootHome = $threePointShoot;
                    $totalFreeThrowHitHome = $freeThrowHit;
                    $totalFreeThrowShootHome = $freeThrowShoot;
                    $totalOffensiveReboundHome = $offensiveRebound;
                    $totalDefensiveReboundHome = $defensiveRebound;
                    $totalAssistHome = $assist;
                    $totalFoulHome = $foul;
                    $totalStealHome = $steal;
                    $totalTurnoverHome = $turnover;
                    $totalBlockHome = $block;
                    $totalScoreHome = $score;

                    $percentageThreePointHome = ($totalThreePointHitHome / $totalThreePointShootHome) * 100;
                    $percentageFieldGoalHome = ($totalShootHitHome / $totalShootHome) * 100;
                    $percentageFreeThrowHome = ($totalFreeThrowHitHome / $totalFreeThrowShootHome) * 100;

                    $reboundsHome = $totalOffensiveReboundHome + $totalDefensiveReboundHome;

                    // MATCH STAT AWAY

                    $totalShootHitAway = $shootHitAway;
                    $totalShootAway = $shootAway;
                    $totalThreePointHitAway = $threePointHitAway;
                    $totalThreePointShootAway = $threePointShootAway;
                    $totalFreeThrowHitAway = $freeThrowHitAway;
                    $totalFreeThrowShootAway = $freeThrowShootAway;
                    $totalOffensiveReboundAway = $offensiveReboundAway;
                    $totalDefensiveReboundAway = $defensiveReboundAway;
                    $totalAssistAway = $assistAway;
                    $totalFoulAway = $foulAway;
                    $totalStealAway = $stealAway;
                    $totalTurnoverAway = $turnoverAway;
                    $totalBlockAway = $blockAway;
                    $totalScoreAway = $scoreAway;

                    $percentageThreePointAway = ($totalThreePointHitAway / $totalThreePointShootAway) * 100;
                    $percentageFieldGoalAway = ($totalShootHitAway / $totalShootAway) * 100;
                    $percentageFreeThrowAway = ($totalFreeThrowHitAway / $totalFreeThrowShootAway) * 100;

                    $reboundsAway = $totalOffensiveReboundAway + $totalDefensiveReboundAway;
                  ?>
                  
                  <!-- Home Away Attack -->
                  <div class="attacks">
                        <!-- Home Attack Info -->
                        <div class="foul-content">
                          <div class="foul-block">
                            <span class="foul-number"><?php echo $totalFoulHome ?></span>
                            <span class="foul-label">Foul</span>
                          </div>
                        </div>

                        <div class="shoot-content">

                          <!-- Three Points -->
                          <div class="row-block">
                            <div class="process-box">
                              <span class="absolute left-fix"><?php echo round($percentageThreePointHome, 2); ?></span>
                            </div>
                            <div class="mid-content-text">3 Points</div>
                            <div class="process-box">
                              <span class="absolute right-fix"><?php echo round($percentageThreePointAway, 2); ?></span>
                            </div>
                           </div> 
                           
                          <!-- Two Points -->
                          <div class="row-block">
                            <div class="process-box">
                              <span class="absolute left-fix"><?php echo round($percentageFieldGoalHome, 2); ?></span>
                            </div>
                            <div class="mid-content-text">2 Points</div>
                            <div class="process-box">
                              <span class="absolute left-fix"><?php echo round($percentageFieldGoalAway, 2); ?></span>
                            </div>
                          </div>
                          <!-- Free Throws -->
                          <div class="row-block">
                            <div class="process-box" style="justify-content: flex-end;">
                              <span class="absolute left-fix"><?php echo round($percentageFreeThrowHome, 2); ?></span>
                            </div>
                            <div class="mid-content-text">Free Throws</div>
                            <div class="process-box">
                              <span class="absolute left-fix"><?php echo round($percentageFreeThrowAway, 2); ?></span>
                            </div>
                          </div>

                        </div>

                        <!-- Away Attack Info -->
                        <div class="foul-content">
                          <div class="foul-block">
                            <span class="foul-number"><?php echo $totalFoulAway ?></span>
                            <span class="foul-label">Foul</span>
                          </div>
                        </div>
   
                  </div>

                <?php
                }
                ?>

                <!-- SHOW SCORE -->
                <!-- SHOW SCORE -->
                <!-- SHOW SCORE -->

                <div class="first_bar mt-20 mb-20 title-section">
                  Score
                </div>
                
                <div class="score_frame">
                <table style="width: 100%; border: 0;">
                <thead>
                    <tr class="title">
                      <th style="width: 35px"></th>
                      <th>Q1</th>
                      <th>Q2</th>
                      <th>Q3</th>
                      <th>Q4</th>
                      <th>OT1</th>
                      <th>OT2</th>
                      <th>OT3</th>
                      <th>T</th>
                    </tr>
                </thead>
                  <!-- 
                    Q1 - Q4 match_home1-4
                    OT1 - OT3 match_homeOT1-4
                    T match_homeScore
                  -->
                  <tbody>
                  <tr class="body">
                    <td class="font-weight-bold width-250"><?php echo $infoRow->match_homeTeamEn; ?></td>
                      <td><?php echo $infoRow->match_home1; ?></td>
                      <td><?php echo $infoRow->match_home2; ?></td>
                      <td><?php echo $infoRow->match_home3; ?></td>
                      <td><?php echo $infoRow->match_home4; ?></td>
                      <td><?php echo $infoRow->match_homeOT1; ?></td>
                      <td><?php echo $infoRow->match_homeOT2; ?></td>
                      <td><?php echo $infoRow->match_homeOT3; ?></td>
                      <td class="<?php echo $totalHomeScore; ?> color-red font-weight-bold"><?php echo $infoRow->match_homeScore; ?></td>
                    </tr>

                    <tr class="body">
                      <td class="font-weight-bold width-250"><?php echo $infoRow->match_awayTeamEn; ?></td>
                      <td><?php echo $infoRow->match_away1; ?></td>
                      <td><?php echo $infoRow->match_away2; ?></td>
                      <td><?php echo $infoRow->match_away3; ?></td>
                      <td><?php echo $infoRow->match_away4; ?></td>
                      <td><?php echo $infoRow->match_awayOT1; ?></td>
                      <td><?php echo $infoRow->match_awayOT2; ?></td>
                      <td><?php echo $infoRow->match_awayOT3; ?></td>
                      <td class="<?php echo $totalAwayScore; ?> color-red font-weight-bold"><?php echo $infoRow->match_awayScore; ?></td>
                    </tr>
                  </tbody>
                  </table>
                </div>

                <br>

                <!-- PLAY BY PLAY -->
                <!-- PLAY BY PLAY -->
                <!-- PLAY BY PLAY -->

                <div class="first_bar title-section mb-0">
                  Play By Play
                </div>

                <div>
                  <?php

                    // CAN REFER api/basketballGetMatchInfo.php

                    // TAKE NOTE ::::: AFTER DONE IMPLEMENT NEED REMOVE THIS LINE
                    $liveText = basGetTextContent(22724746);

                    // TAKE NOTE ::::: AFTER DONE IMPLEMENT NEED UNCOMMENT THIS LINE 
                    // $liveText = basGetTextContent($infoRow->match_code);
                    $list = $liveText->data;

                    // echo "<pre>".print_r($list,true)."</pre>";

                    // show based on "matchState"
                    // "matchState" have 1 - 7 (means Quarter 1 - 4 || OT 1 - 3)

                    // show based on "teamKind"
                    // "teamKind" have 1 - 3 (we show only 1 - 2) 1 - HOME || 2 - AWAY

                    // NOT ALL THE MATCHES WILL HAVE THIS DATA
                    // IF NO DATA ,,,, SHOW "NO DATA" ICON
                  ?>
                </div>
                
                <div class="section-play-by-play">

                  <?php
                  // CHECK IS THERE HAVE DATA
                  // YES - SHOW DATA
                  // ELSE - SHOW "NO DATA"
                  if($list){
                    ?>
                    <div class="quarter-btn-group">
                      <div class="btn-quarter-play-by-play" id="btn-quarter-1-play-by-play" type="button">Q1</div>
                      <div class="btn-quarter-play-by-play" id="btn-quarter-2-play-by-play" type="button">Q2</div>
                      <div class="btn-quarter-play-by-play" id="btn-quarter-3-play-by-play" type="button">Q3</div>
                      <div class="btn-quarter-play-by-play" id="btn-quarter-4-play-by-play" type="button">Q4</div>
                    </div>

                    <!-- SHOW PLAY BY PLAY CONTENT -->
                    <div class="quarter-1-play-by-play">
                      <table>
                    <?php
                    foreach($list as $arrList)
                    {
                        echo '<div class="row show-play-by-play-quarter'.$arrList->matchState.' ">
                                <div class="col-sm-2">'.$arrList->remainTime.'</div>
                                <div class="col-sm-8">'.$arrList->content.'</div>
                                <div class="col-sm-2">'.$arrList->score.'</div>
                              </div>';
                    }
                  ?>
                      </table>
                    </div>
                  <?php
                  }
                  else{

                    ?>
                      <div class="noData">No data.</div>
                    <?php
                    }
                    ?> 

                </div>

                <!-- CHECK THE CLICK FOR QUARTER BUTTON - PLAY BY PLAY -->
                <script type="text/javascript">
                  // QUARTER 1 

                  $("#btn-quarter-1-play-by-play").click(function(){
                    $(".show-play-by-play-quarter1").show();
                    $(".show-play-by-play-quarter2").hide();
                    $(".show-play-by-play-quarter3").hide();
                    $(".show-play-by-play-quarter4").hide();
                  });

                  $("#btn-quarter-2-play-by-play").click(function(){
                    $(".show-play-by-play-quarter1").hide();
                    $(".show-play-by-play-quarter2").show();
                    $(".show-play-by-play-quarter3").hide();
                    $(".show-play-by-play-quarter4").hide();
                  });

                  $("#btn-quarter-3-play-by-play").click(function(){
                    $(".show-play-by-play-quarter1").hide();
                    $(".show-play-by-play-quarter2").hide();
                    $(".show-play-by-play-quarter3").show();
                    $(".show-play-by-play-quarter4").hide();
                  });

                  $("#btn-quarter-4-play-by-play").click(function(){
                    $(".show-play-by-play-quarter1").hide();
                    $(".show-play-by-play-quarter2").hide();
                    $(".show-play-by-play-quarter3").hide();
                    $(".show-play-by-play-quarter4").show();
                  });
                </script>


              </div>

                <div class="details_right">
                

                <?php


                  $match_id = $infoRow->match_id;

                  $message_category = "BASKETBALL";

                  include_once('includes/mvc-controller/module-livechat.php');

                ?>

                




              <div>

                <!-- SHOW TOP PLAYER -->
                <!-- SHOW TOP PLAYER -->
                <!-- SHOW TOP PLAYER -->

                <?php

                  // CAN REFER api/basketballGetTopPlayers.php

                  // TAKE NOTE :::: AFTER DONE IMPLEMENT MUST UNCOMMENT THIS LINE
                  // $qryTopPlayer = tep_query("SELECT * FROM nano_basketball_match_statistic WHERE matchId = '".$infoRow->match_code."'");

                  // IF HAVE DATA ,,,, SHOW DATA
                  // ELSE ,,,, SHOW "NO DATA" ICON

                  // TAKE NOTE :::: AFTER DONE IMPLEMENT MUST REMOVE THIS LINE
                  $qryTopPlayer = tep_query("SELECT * FROM nano_basketball_match_statistic WHERE matchId = '22724746'");

                  while($infoTopPlayer = tep_fetch_object($qryTopPlayer))
                  {
                    // find out the top one for two type => score || assist based on "HOME" || "AWAY"

                    if($infoTopPlayer->type == 'HOME')
                    {

                      $infoPointsHome = tep_fetch_object(tep_query("SELECT * FROM nano_basketball_match_statistic WHERE matchId = '".$matchid."' AND type = 'HOME' ORDER BY score DESC LIMIT 0,1"));
                      tep_free_result(tep_query("SELECT * FROM nano_basketball_match_statistic WHERE matchId = '".$matchid."' AND type = 'HOME' ORDER BY score DESC LIMIT 0,1"));

                      $infoAssistHome = tep_fetch_object(tep_query("SELECT * FROM nano_basketball_match_statistic WHERE matchId = '".$matchid."' AND type = 'HOME' ORDER BY assist DESC LIMIT 0,1"));
                      tep_free_result(tep_query("SELECT * FROM nano_basketball_match_statistic WHERE matchId = '".$matchid."' AND type = 'HOME' ORDER BY assist DESC LIMIT 0,1"));
                      
                      $reboundsHomeCnt = $infoTopPlayer->offensiveRebound + $infoTopPlayer->defensiveRebound;

                      if($reboundsHomeCnt >= $reboundsHome)
                      {
                        $reboundsHome = $reboundsHomeCnt;
                        $player = $infoTopPlayer->playerEn;
                        $playerId = $infoTopPlayer->playerId;
                      }

                      // GET THE PLAYER INFO
                      // GET THE PLAYER INFO
                      // GET THE PLAYER INFO

                      $infoPointsHomePlayer = tep_fetch_object(tep_query("SELECT * FROM nano_basketball_player_info WHERE player_playerId = '".$infoPointsHome->playerId."'"));
                      tep_free_result(tep_query("SELECT * FROM nano_basketball_player_info WHERE player_playerId = '".$infoPointsHome->playerId."'"));

                      $infoAssistHomePlayer = tep_fetch_object(tep_query("SELECT * FROM nano_basketball_player_info WHERE player_playerId = '".$infoAssistHome->playerId."'"));
                      tep_free_result(tep_query("SELECT * FROM nano_basketball_player_info WHERE player_playerId = '".$infoAssistHome->playerId."'"));

                      $infoReboundHomePlayer = tep_fetch_object(tep_query("SELECT * FROM nano_basketball_player_info WHERE player_playerId = '".$playerId."'"));
                      tep_free_result(tep_query("SELECT * FROM nano_basketball_player_info WHERE player_playerId = '".$playerId."'"));
                    }

                    else if($infoTopPlayer->type == 'AWAY')
                    {
                      $infoPointsAway = tep_fetch_object(tep_query("SELECT * FROM nano_basketball_match_statistic WHERE matchId = '".$matchid."' AND type = 'AWAY' ORDER BY score DESC LIMIT 0,1"));
                      tep_free_result(tep_query("SELECT * FROM nano_basketball_match_statistic WHERE matchId = '".$matchid."' AND type = 'AWAY' ORDER BY score DESC LIMIT 0,1"));

                      $infoAssistAway = tep_fetch_object(tep_query("SELECT * FROM nano_basketball_match_statistic WHERE matchId = '".$matchid."' AND type = 'AWAY' ORDER BY assist DESC LIMIT 0,1"));
                      tep_free_result(tep_query("SELECT * FROM nano_basketball_match_statistic WHERE matchId = '".$matchid."' AND type = 'AWAY' ORDER BY assist DESC LIMIT 0,1"));
                      
                      $reboundsAwayCnt = $infoTopPlayer->offensiveRebound + $infoTopPlayer->defensiveRebound;

                      if($reboundsAwayCnt >= $reboundsAway)
                      {
                        $reboundsAway = $reboundsAwayCnt;
                        $player = $infoTopPlayer->playerEn;
                        $playerId = $infoTopPlayer->playerId;
                      }

                      // GET THE PLAYER INFO
                      // GET THE PLAYER INFO
                      // GET THE PLAYER INFO

                      $infoPointsAwayPlayer = tep_fetch_object(tep_query("SELECT * FROM nano_basketball_player_info WHERE player_playerId = '".$infoPointsAway->playerId."'"));
                      tep_free_result(tep_query("SELECT * FROM nano_basketball_player_info WHERE player_playerId = '".$infoPointsAway->playerId."'"));

                      $infoAssistAwayPlayer = tep_fetch_object(tep_query("SELECT * FROM nano_basketball_player_info WHERE player_playerId = '".$infoAssistAway->playerId."'"));
                      tep_free_result(tep_query("SELECT * FROM nano_basketball_player_info WHERE player_playerId = '".$infoAssistAway->playerId."'"));

                      $infoReboundAwayPlayer = tep_fetch_object(tep_query("SELECT * FROM nano_basketball_player_info WHERE player_playerId = '".$playerId."'"));
                      tep_free_result(tep_query("SELECT * FROM nano_basketball_player_info WHERE player_playerId = '".$playerId."'"));
                    }

                    // echo "<pre>".print_r($infoTopPlayer, true)."</pre>";

                    // POINTS - TOP PLAYER HOME - PHOTO

                    if($infoPointsHomePlayer->player_photo2 == ''){
                      $homePlayerLogoPoints = "includes/images/basketball/team/player/no-data.png";
                    } else{
                      $homePlayerLogoPoints = "includes/images/basketball/team/player/" . $infoPointsHomePlayer->player_photo2;
                    }

                    // POINTS - TOP PLAYER AWAY - PHOTO

                    if($infoPointsAwayPlayer->player_photo2 == ''){
                      $awayPlayerLogoPoints = "includes/images/basketball/team/player/no-data.png";
                    } else{
                      $awayPlayerLogoPoints = "includes/images/basketball/team/player/" . $infoPointsAwayPlayer->player_photo2;
                    }

                    // ASSISTS - TOP PLAYER HOME - PHOTO

                    if($infoAssistHomePlayer->player_photo2 == ''){
                      $homePlayerLogoAssist = "includes/images/basketball/team/player/no-data.png";
                    } else{
                      $homePlayerLogoAssist = "includes/images/basketball/team/player/" . $infoPointsHomePlayer->player_photo2;
                    }

                    // ASSISTS - TOP PLAYER AWAY - PHOTO

                    if($infoAssistAwayPlayer->player_photo2 == ''){
                      $awayPlayerLogoAssist = "includes/images/basketball/team/player/no-data.png";
                    } else{
                      $awayPlayerLogoAssist = "includes/images/basketball/team/player/" . $infoPointsAwayPlayer->player_photo2;
                    }

                    // REBOUND - TOP PLAYER HOME - PHOTO

                    if($infoReboundHomePlayer->player_photo2 == ''){
                      $homePlayerLogoRebound = "includes/images/basketball/team/player/no-data.png";
                    } else{
                      $homePlayerLogoRebound = "includes/images/basketball/team/player/" . $infoPointsHomePlayer->player_photo2;
                    }

                    // REBOUND - TOP PLAYER AWAY - PHOTO

                    if($infoReboundAwayPlayer->player_photo2 == ''){
                      $awayPlayerLogoRebound = "includes/images/basketball/team/player/no-data.png";
                    } else{
                      $awayPlayerLogoRebound = "includes/images/basketball/team/player/" . $infoPointsAwayPlayer->player_photo2;
                    }


                  }
                ?>

                <br>

                <!-- START TOP PLAYER SECTION -->

                <div class="div-top-player">

                  <div class="first_bar title-section mb-0">
                    Top Players
                  </div>

                  <div class="section-team-top-player">
                    <div class="row">
                      <div class="col-sm-6">
                        <img class="team-logo-top-player" src="<?php echo $homeTeamLogo; ?>">
                        <?php echo $infoRow->match_homeTeamEn; ?>
                      </div>

                      <div class="col-sm-6">
                        <img class="team-logo-top-player" src="<?php echo $awayTeamLogo; ?>">
                        <?php echo $infoRow->match_awayTeamEn; ?>
                      </div>
                    </div>
                  </div>

                  <div class="body-stats">

                    <!-- POINTS -->
                    <!-- POINTS -->
                    <!-- POINTS -->

                    <div class="row show-row-top-player">
                      <div class="col-sm-3">
                        <img class="player-logo-top-player" src="<?php echo $homePlayerLogoPoints; ?>">
                      </div>

                      <div class="col-sm-2">
                        <?php echo $infoPointsHome->score; ?>
                        <div class="vertical-bar-top-player-home"></div>
                      </div>

                      <div class="col-sm-2">
                        Points
                      </div>

                      <div class="col-sm-2">
                        <?php echo $infoPointsAway->score; ?>
                        <div class="vertical-bar-top-player-away"></div>
                      </div>

                      <div class="col-sm-3">
                        <img class="player-logo-top-player" src="<?php echo $awayPlayerLogoPoints; ?>">
                      </div>

                    </div>

                    <div class="div-hr-top-player">
                      <hr class="hr-top-player">
                    </div>

                    <!-- ASSIST -->
                    <!-- ASSIST -->
                    <!-- ASSIST -->

                    <div class="row show-row-top-player">
                      <div class="col-sm-3">
                        <img class="player-logo-top-player" src="<?php echo $homePlayerLogoAssist; ?>">
                      </div>

                      <div class="col-sm-2">
                        <?php echo $infoAssistHome->assist; ?>
                        <div class="vertical-bar-top-player-home"></div>
                      </div>

                      <div class="col-sm-2">
                        Assists
                      </div>

                      <div class="col-sm-2">
                        <?php echo $infoAssistAway->assist; ?>
                        <div class="vertical-bar-top-player-away"></div>
                      </div>

                      <div class="col-sm-3">
                        <img class="player-logo-top-player" src="<?php echo $awayPlayerLogoAssist; ?>">
                      </div>

                    </div>

                    <div class="div-hr-top-player">
                      <hr class="hr-top-player">
                    </div>

                    <!-- REBOUND -->
                    <!-- REBOUND -->
                    <!-- REBOUND -->

                    <div class="row show-row-top-player">
                      <div class="col-sm-3">
                        <img class="player-logo-top-player" src="<?php echo $homePlayerLogoRebound; ?>">
                      </div>

                      <div class="col-sm-2">
                        <?php echo $reboundsHome; ?>
                        <div class="vertical-bar-top-player-home"></div>
                      </div>

                      <div class="col-sm-2">
                        Rebounds
                      </div>

                      <div class="col-sm-2">
                        <?php echo $reboundsAway; ?>
                        <div class="vertical-bar-top-player-away"></div>
                      </div>

                      <div class="col-sm-3">
                        <img class="player-logo-top-player" src="<?php echo $awayPlayerLogoRebound; ?>">
                      </div>

                    </div>
                  </div>
                </div>

                <br>

              <!-- SHOW MATCH STATE -->
              <!-- SHOW MATCH STATE -->
              <!-- SHOW MATCH STATE -->

              <?php
                // REFER TOP "MATCH STAT" SECTION
                // JUST SHOW OUT ALL THE DATA (FG || FG% || 3PT || 3PT % etc.)
              ?>

              <div class="div-match-stat">

                <div class="first_bar title-section mb-0">
                  Stats
                </div>

                <div class="section-team-match-stat">
                  <div class="row">
                    <div class="col-sm-6">
                      <?php echo $infoRow->match_homeTeamEn; ?>
                    </div>

                    <div class="col-sm-6">
                      <?php echo $infoRow->match_awayTeamEn; ?>
                    </div>
                  </div>
                </div>

                <div class="body-stats">
                  <!-- FG -->

                  <div class="show-row-match-stat">
                    <!-- FIRST ROW -->
                    <div class="row">
                      <div class="col-sm-4" style="text-align: left;">
                        <?php echo $totalShootHome . '/' . $totalShootHitHome; ?>
                      </div>

                      <div class="col-sm-4" style="text-align: center;">
                        FG
                      </div>

                      <div class="col-sm-4" style="text-align: right;">
                        <?php echo $totalShootAway . '/' . $totalShootHitAway; ?>
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
                  </div>

                  <hr>

                  <!-- FG % -->

                  <div class="show-row-match-stat">
                    <!-- FIRST ROW -->
                    <div class="row">
                      <div class="col-sm-4" style="text-align: left;">
                        <?php echo number_format($percentageFieldGoalHome, 2); ?>
                      </div>

                      <div class="col-sm-4" style="text-align: center;">
                        Field Goal %
                      </div>

                      <div class="col-sm-4" style="text-align: right;">
                        <?php echo number_format($percentageFieldGoalAway, 2); ?>
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
                  </div>

                  <hr>

                  <!-- 3PT -->

                  <div class="show-row-match-stat">
                    <!-- FIRST ROW -->
                    <div class="row">
                      <div class="col-sm-4" style="text-align: left;">
                        <?php echo $totalThreePointHitHome . "/" . $totalThreePointShootHome; ?>
                      </div>

                      <div class="col-sm-4" style="text-align: center;">
                        3 Points
                      </div>

                      <div class="col-sm-4" style="text-align: right;">
                        <?php echo $totalThreePointHitAway . "/" . $totalThreePointShootAway; ?>
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
                  </div>

                  <hr>

                  <!-- 3PT % -->

                  <div class="show-row-match-stat">
                    <!-- FIRST ROW -->
                    <div class="row">
                      <div class="col-sm-4" style="text-align: left;">
                        <?php echo round($percentageThreePointHome, 1); ?>
                      </div>

                      <div class="col-sm-4" style="text-align: center;">
                        3 Points %
                      </div>

                      <div class="col-sm-4" style="text-align: right;">
                        <?php echo round($percentageThreePointAway, 1); ?>
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
                  </div>

                  <hr>

                  <!-- Free Throw -->

                  <div class="show-row-match-stat">
                    <!-- FIRST ROW -->
                    <div class="row">
                      <div class="col-sm-4" style="text-align: left;">
                        <?php echo $totalFreeThrowHitHome . "/" . $totalFreeThrowShootHome; ?>
                      </div>

                      <div class="col-sm-4" style="text-align: center;">
                        FT
                      </div>

                      <div class="col-sm-4" style="text-align: right;">
                        <?php echo $totalFreeThrowHitAway . "/" . $totalFreeThrowShootAway; ?>
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
                  </div>

                  <hr>

                  <!-- Free Throw % -->

                  <div class="show-row-match-stat">
                    <!-- FIRST ROW -->
                    <div class="row">
                      <div class="col-sm-4" style="text-align: left;">
                        <?php echo round($percentageFreeThrowHome, 1); ?>
                      </div>

                      <div class="col-sm-4" style="text-align: center;">
                        Free Throw %
                      </div>

                      <div class="col-sm-4" style="text-align: right;">
                        <?php echo round($percentageFreeThrowAway, 1); ?>
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
                  </div>

                  <hr>

                  <!-- Rebounds -->

                  <div class="show-row-match-stat">
                    <!-- FIRST ROW -->
                    <div class="row">
                      <div class="col-sm-4" style="text-align: left;">
                        <?php echo $reboundsHome; ?>
                      </div>

                      <div class="col-sm-4" style="text-align: center;">
                        Rebounds
                      </div>

                      <div class="col-sm-4" style="text-align: right;">
                        <?php echo $reboundsAway; ?>
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
                  </div>

                  <hr>

                  <!-- Assists -->

                  <div class="show-row-match-stat">
                    <!-- FIRST ROW -->
                    <div class="row">
                      <div class="col-sm-4" style="text-align: left;">
                        <?php echo $totalAssistHome; ?>
                      </div>

                      <div class="col-sm-4" style="text-align: center;">
                        Assist
                      </div>

                      <div class="col-sm-4" style="text-align: right;">
                        <?php echo $totalAssistAway; ?>
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
                  </div>

                  <hr>

                  <!-- Foul -->

                  <div class="show-row-match-stat">
                    <!-- FIRST ROW -->
                    <div class="row">
                      <div class="col-sm-4" style="text-align: left;">
                        <?php echo $totalFoulHome; ?>
                      </div>

                      <div class="col-sm-4" style="text-align: center;">
                        Foul
                      </div>

                      <div class="col-sm-4" style="text-align: right;">
                        <?php echo $totalFoulAway; ?>
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
                  </div>

                  <hr>

                </div>
                </div>
              </div>
            <?php
            }
            ?>

            <!-- END LIVE TAB -->
            <!-- END LIVE TAB -->
            <!-- END LIVE TAB -->

            <!-- START STANDING -->
            <!-- START STANDING -->
            <!-- START STANDING -->

            <?php
            if($_GET['tab'] == 'STANDING')
            {
            ?>

            <div class="showData">
              <div class="titleShowData">
                STANDING
              </div>

              <!-- SHOW STANDING -->
              <!-- SHOW STANDING -->
              <!-- SHOW STANDING -->

              <?php
                // GET THE LEAGUE INFO TO KNOW IS LEAGUE OR CUP

                // TAKE NOTE :::: AFTER DONE IMPLEMENT NEED UNCOMMENT THIS LINE
                // $infoLeague = tep_fetch_object(tep_query("SELECT * FROM nano_basketball_league_list WHERE league_leagueId = '".$infoRow->match_leagueId."'"));

                // TAKE NOTE :::: AFTER DONE IMPLEMENT NEED REMOVE THIS LINE
                // $infoLeague = tep_fetch_object(tep_query("SELECT * FROM nano_basketball_league_list WHERE league_leagueId = '111'")); // LEAGUE WITH CONFERENCE
                // $infoLeague = tep_fetch_object(tep_query("SELECT * FROM nano_basketball_league_list WHERE league_leagueId = '11517'")); // LEAGUE WITHOUT CONFERENCE
                $infoLeague = tep_fetch_object(tep_query("SELECT * FROM nano_basketball_league_list WHERE league_leagueId = '17737'")); // CUP

                // check the league whether league or cup
                // as league & cup output not same 

                if($infoLeague->league_leagueKind == "League")
                {
                  // TAKE NOTE :::: AFTER DONE IMPLEMENT NEED UNCOMMENT THIS LINE
                  $leagueStanding = basGetLeagueStandings($infoLeague->league_leagueId);

                  $list = $leagueStanding->data;

                  if($list)
                  {

                    foreach ($list as $arrList) {

                      if($arrList->totalRank == 1)
                      {
                        $winFirst = $arrList->homeWin+$arrList->awayWin;
                        $loseFirst = $arrList->homeLoss+$arrList->awayLoss;

                        $GBFirst = ($winFirst - $loseFirst) / 2;
                        $gameBack = 0;
                      }

                      $infoTeams = tep_fetch_object(tep_query("SELECT * FROM nano_basketball_team_profile WHERE team_teamId = '".$arrList->teamId."' AND league_id = '".$infoLeague->league_leagueId."' "));

                      if($infoTeams->team_conferenceEn != 'NO')
                      {

                        $qryTeam = tep_query("SELECT * FROM nano_basketball_team_profile WHERE league_id = '".$infoLeague->league_leagueId."' ");

                        tep_free_result(tep_query("SELECT * FROM nano_basketball_team_profile WHERE league_id = '".$infoLeague->league_leagueId."' "));

                        while($infoTeam = tep_fetch_object($qryTeam))
                        {
                          if($arrList->leagueName == $infoTeam->team_conferenceEn)
                          {

                            $infoTeam = tep_fetch_object(tep_query("SELECT * FROM nano_basketball_team_profile WHERE team_teamId = '".$arrList->teamId."' "));
                            
                            $winDiff = $arrList->homeWin+$arrList->awayWin;
                            $loseDiff = $arrList->homeLoss+$arrList->awayLoss;

                            $GBDiff = ($winDiff - $loseDiff) / 2;

                            $gameBack = $GBFirst - $GBDiff;

                            $standingConference = [
                              'leaguename' => $arrList->leagueName,
                              'rank' => $arrList->totalRank,
                              'teamid' => $arrList->teamId,
                              'teamname' => $arrList->teamName,
                              "teamlogo" => $infoTeam->team_logo2 == "" ? "" : 'includes/images/basketball/team/logo/' . $infoTeam->team_logo2,
                              'home' => $arrList->homeWin . '-' . $arrList->homeLoss,
                              'away' => $arrList->awayWin . '-' . $arrList->awayLoss,
                              'totalwin' => $arrList->homeWin+$arrList->awayWin,
                              'totallose' => $arrList->homeLoss+$arrList->awayLoss,
                              'winRate' => round($arrList->winScale / 100, 3),
                              'strk' => $arrList->state,
                              'gamesBack' => round($gameBack, 1),
                            ];
                          }
                        }

                        $qryTeamDivision = tep_query("SELECT * FROM nano_basketball_team_profile WHERE league_id = '".$infoLeague->league_leagueId."' GROUP BY team_divisionEn");

                        tep_free_result(tep_query("SELECT * FROM nano_basketball_team_profile WHERE league_id = '".$infoLeague->league_leagueId."' team_divisionEn"));

                        while($infoTeamDivision = tep_fetch_object($qryTeamDivision))
                        {
                          $qryDivision = tep_query("SELECT * FROM nano_basketball_team_profile WHERE league_id = '".$infoLeague->league_leagueId."' AND team_divisionEn = '".$infoTeamDivision->team_divisionEn."' ");

                          tep_free_result(tep_query("SELECT * FROM nano_basketball_team_profile WHERE league_id = '".$infoLeague->league_leagueId."' AND team_divisionEn = '".$infoTeamDivision->team_divisionEn."' "));

                          while($infoDivision = tep_fetch_object($qryDivision))
                          {
                            if($arrList->teamId == $infoDivision->team_teamId)
                            {
                              $winDiff = $arrList->homeWin+$arrList->awayWin;
                              $loseDiff = $arrList->homeLoss+$arrList->awayLoss;

                              $GBDiff = ($winDiff - $loseDiff) / 2;

                              $gameBack = $GBFirst - $GBDiff;

                              $standingDivision[] = [
                                'leaguename' => $infoDivision->team_divisionEn,
                                'rank' => $arrList->totalRank,
                                'teamid' => $arrList->teamId,
                                'teamname' => $arrList->teamName,
                                "teamlogo" => $infoDivision->team_logo2 == "" ? "" : 'includes/images/basketball/team/logo/' . $infoDivision->team_logo2,
                                'home' => $arrList->homeWin . '-' . $arrList->homeLoss,
                                'away' => $arrList->awayWin . '-' . $arrList->awayLoss,
                                'totalwin' => $arrList->homeWin+$arrList->awayWin,
                                'totallose' => $arrList->homeLoss+$arrList->awayLoss,
                                'winRate' => round($arrList->winScale / 100, 3),
                                'strk' => $arrList->state,
                                'gamesBack' => round($gameBack, 1),
                              ];
                            } 
                          }
                        }

                        $conference[] = $standingConference;

                        $standingConference = array(
                          "conference" => $conference,
                          "division" => $standingDivision,
                        );
                      }

                      else
                      {

                        $winDiff = $arrList->homeWin+$arrList->awayWin;
                        $loseDiff = $arrList->homeLoss+$arrList->awayLoss;

                        $GBDiff = ($winDiff - $loseDiff) / 2;

                        $gameBack = $GBFirst - $GBDiff;

                        $infoTeam = tep_fetch_object(tep_query("SELECT * FROM nano_basketball_team_profile WHERE team_teamId = '".$arrList->teamId."' "));

                        $standingLeague[] = [
                          'leaguename' => $infoLeague->league_nameEn,
                          'rank' => $arrList->totalRank,
                          'teamid' => $arrList->teamId,
                          'teamname' => $arrList->teamName,
                          "teamlogo" => $infoTeam->team_logo2 == "" ? "" : 'includes/images/basketball/team/logo/' . $infoTeam->team_logo2,
                          'home' => $arrList->homeWin . '-' . $arrList->homeLoss,
                          'away' => $arrList->awayWin . '-' . $arrList->awayLoss,
                          'total' => $arrList->homeWin+$arrList->awayWin+$arrList->homeLoss+$arrList->awayLoss,
                          'totalwin' => $arrList->homeWin+$arrList->awayWin,
                          'totallose' => $arrList->homeLoss+$arrList->awayLoss,
                          'winRate' => round($arrList->winScale / 100, 3),
                          'strk' => $arrList->state,
                          'points' => $arrList->homeWin+$arrList->awayWin+$arrList->homeLoss+$arrList->awayLoss+$arrList->homeWin+$arrList->awayWin,
                          'gamesBack' => round($gameBack, 1),
                        ];
                      }
                    }
                  }
                }

                else if($infoLeague->league_leagueKind == "Cup")
                {
                  $leagueStanding = basGetCupStandings($infoLeague->league_leagueId);

                  $list = $leagueStanding->data;

                  if($list)
                  {
                    foreach ($list as $arrList) {
                      if($arrList->totalRank == 1)
                      {
                        $winFirst = $arrList->homeWin+$arrList->awayWin;
                        $loseFirst = $arrList->homeLoss+$arrList->awayLoss;

                        $GBFirst = ($winFirst - $loseFirst) / 2;
                        $gameBack = 0;
                      }

                      $infoTeam = tep_fetch_object(tep_query("SELECT * FROM nano_basketball_team_profile WHERE team_teamId = '".$arrList->teamId."' "));

                      $standingCup[] = [
                        'roundEn' => $arrList->round,
                        'group' => $arrList->groupName,
                        'rank' => $arrList->rank,
                        'teamid' => $arrList->teamId,
                        'teamname' => $infoTeam->team_nameEn,
                        "teamlogo" => $infoTeam->team_logo2 == "" ? "" : 'includes/images/basketball/team/logo/' . $infoTeam->team_logo2,
                        'total' => $arrList->totalScore+$arrList->totalLoss,
                        'totalwin' => $arrList->totalScore,
                        'totallose' => $arrList->totalLoss,
                        'strk' => $arrList->streak,
                        'points' => $arrList->totalScore+$arrList->totalLoss+$arrList->totalScore
                      ];
                    }
                  }
                }

                // echo "<pre>".print_r($standingConference,true)."</pre>";
              ?>

                <?php

                // LEAGUE WITHOUT CONFERENCE
                // LEAGUE WITHOUT CONFERENCE
                // LEAGUE WITHOUT CONFERENCE

                if($standingLeague)
                {
                  echo '<table class="tableShowData">
                          <thead class="thShowData">
                            <td class="col-show-standing" style="text-align: left; border-right: none;">#</td>
                            <td class="col-show-standing" style="text-align: left; border-left: none;">Team</td>
                            <td class="col-show-standing">P</td>
                            <td class="col-show-standing">Win</td>
                            <td class="col-show-standing">Loss</td>
                            <td class="col-show-standing">Strike</td>
                            <td class="col-show-standing">Points</td>
                          </thead>';

                  foreach($standingLeague as $arrStandingLeague)
                  {
                    echo '<tr>
                            <td class="col-show-standing" style="text-align: left; border-right: none;">'.$arrStandingLeague['rank'].'</td>
                            <td class="col-show-standing" style="text-align: left; border-left: none;">'.$arrStandingLeague['teamname'].'</td>
                            <td class="col-show-standing">'.$arrStandingLeague['total'].'</td>
                            <td class="col-show-standing">'.$arrStandingLeague['totalwin'].'</td>
                            <td class="col-show-standing">'.$arrStandingLeague['totallose'].'</td>
                            <td class="col-show-standing">'.$arrStandingLeague['strk'].'</td>
                            <td class="col-show-standing">'.$arrStandingLeague['points'].'</td>
                          </tr>';
                  }

                  echo '</table>';
                }

                // CUP
                // CUP
                // CUP

                else if($standingCup)
                {
                    $group = array();
                    $arrGroup = array();

                    foreach($standingCup as $arrStandingCup)
                    {
                      // CHECK IS IT CUP

                      if($arrStandingCup['roundEn'] != "")
                      {
                        if(in_array($arrStandingCup['group'], $group) == false)
                        {
                          $arrGroup[] = $arrStandingCup['group'];
                        }
                      }

                      $group[] = $arrStandingCup['group'];
                    }

                    for($i = 0; $i < sizeof($arrGroup); $i++)
                    {
                      echo "<span>Group ".$arrGroup[$i]."</span>";

                      echo "<br>";

                      echo '<table class="tableShowData">
                              <thead class="thShowData">
                                <td class="col-show-standing" style="text-align: left; border-right: none;">#</td>
                                <td class="col-show-standing" style="text-align: left; border-left: none;">Team</td>
                                <td class="col-show-standing">P</td>
                                <td class="col-show-standing">Win</td>
                                <td class="col-show-standing">Loss</td>
                                <td class="col-show-standing">Strike</td>
                                <td class="col-show-standing">Points</td>
                              </thead>';

                      foreach($standingCup as $arrStandingCup)
                      {
                        if($arrGroup[$i] == $arrStandingCup['group'])
                        {
                          echo '<tr>
                                  <td class="col-show-standing" style="text-align: left; border-right: none;">'.$arrStandingCup['rank'].'</td>
                                  <td class="col-show-standing" style="text-align: left; border-left: none;">'.$arrStandingCup['teamname'].'</td>
                                  <td class="col-show-standing">'.$arrStandingCup['total'].'</td>
                                  <td class="col-show-standing">'.$arrStandingCup['totalwin'].'</td>
                                  <td class="col-show-standing">'.$arrStandingCup['totallose'].'</td>
                                  <td class="col-show-standing">'.$arrStandingCup['strk'].'</td>
                                  <td class="col-show-standing">'.$arrStandingCup['points'].'</td>
                                </tr>';
                        }
                      }

                      echo "</table>";
                    }
                }

                // LEAGUE WITH CONFERENCE
                // LEAGUE WITH CONFERENCE
                // LEAGUE WITH CONFERENCE

                else if($standingConference)
                {
                  // CONFERENCE

                  $conference = $standingConference['conference'];

                  $strConference = "";
                  $arrConference = array();

                  // FOR CHECKING TOTAL HOW MANY CONFERENCE

                  foreach($conference as $arrStandingConference)
                  {
                    // CHECK IS IT CONFERENCE

                    if($arrStandingConference['leaguename'] != "")
                    {
                      if($strConference != $arrStandingConference['leaguename'])
                      {
                        $arrConference[] = $arrStandingConference['leaguename'];
                      }
                    }

                    $strConference = $arrStandingConference['leaguename'];
                  }

                  for($i = 0; $i < sizeof($arrConference); $i++)
                  {
                    echo "<span>".$arrConference[$i]."</span>";

                    echo "<br>";

                    echo '<table class="tableShowData table-show-conference">
                            <thead class="thShowData">
                              <td class="col-show-standing" style="text-align: left; border-right: none;">#</td>
                              <td class="col-show-standing" style="text-align: left; border-left: none;">Team</td>
                              <td class="col-show-standing">Win</td>
                              <td class="col-show-standing">Loss</td>
                              <td class="col-show-standing">P</td>
                              <td class="col-show-standing">Strike</td>
                              <td class="col-show-standing">Games Back</td>
                            </thead>';

                    foreach($conference as $arrStandingConference)
                    {
                      if($arrConference[$i] == $arrStandingConference['leaguename'])
                      {
                        echo '<tr>
                                <td class="col-show-standing" style="text-align: left; border-right: none;">'.$arrStandingConference['rank'].'</td>
                                <td class="col-show-standing" style="text-align: left; border-left: none;">'.$arrStandingConference['teamname'].'</td>
                                <td class="col-show-standing">'.$arrStandingConference['totalwin'].'</td>
                                <td class="col-show-standing">'.$arrStandingConference['totallose'].'</td>
                                <td class="col-show-standing">'.$arrStandingConference['winRate'].'</td>
                                <td class="col-show-standing">'.$arrStandingConference['strk'].'</td>
                                <td class="col-show-standing">'.$arrStandingConference['gamesBack'].'</td>
                              </tr>';
                      }
                    }

                    echo "</table>";
                  }

                  // DIVISION

                  $division = $standingConference['division'];

                  $strDivision = array();
                  $arrDivision = array();

                  // FOR CHECKING TOTAL HOW MANY DIVISION

                  foreach($division as $arrStandingDivision)
                  {

                    if($arrStandingDivision['leaguename'] != "")
                    {
                      if(in_array($arrStandingDivision['leaguename'], $strDivision) == false)
                      {
                        $arrDivision[] = $arrStandingDivision['leaguename'];
                      }
                    }

                    $strDivision[] = $arrStandingDivision['leaguename'];
                  }

                  for($i = 0; $i < sizeof($arrDivision); $i++)
                  {
                    echo "<span>".$arrDivision[$i]."</span>";

                    echo "<br>";

                    echo '<table class="tableShowData table-show-division">
                            <thead class="thShowData">
                              <td class="col-show-standing" style="text-align: left; border-right: none;">#</td>
                              <td class="col-show-standing" style="text-align: left; border-left: none;">Team</td>
                              <td class="col-show-standing">Win</td>
                              <td class="col-show-standing">Loss</td>
                              <td class="col-show-standing">P</td>
                              <td class="col-show-standing">Strike</td>
                              <td class="col-show-standing">Games Back</td>
                            </thead>';

                    foreach($division as $arrStandingDivision)
                    {
                      if($arrDivision[$i] == $arrStandingDivision['leaguename'])
                      {
                        echo '<tr>
                                <td class="col-show-standing" style="text-align: left; border-right: none;">'.$arrStandingDivision['rank'].'</td>
                                <td class="col-show-standing" style="text-align: left; border-left: none;">'.$arrStandingDivision['teamname'].'</td>
                                <td class="col-show-standing">'.$arrStandingDivision['totalwin'].'</td>
                                <td class="col-show-standing">'.$arrStandingDivision['totallose'].'</td>
                                <td class="col-show-standing">'.$arrStandingDivision['winRate'].'</td>
                                <td class="col-show-standing">'.$arrStandingDivision['strk'].'</td>
                                <td class="col-show-standing">'.$arrStandingDivision['gamesBack'].'</td>
                              </tr>';
                      }
                    }

                    echo "</table>";
                  }
                }
                // NO DATA
                else
                {
                  echo '<div class="noData">No data.</div>';
                }
                ?>
            </div>

            <?php
            }


            ?>

            <!-- END STANDING -->
            <!-- END STANDING -->
            <!-- END STANDING -->

            <!-- START H2H -->
            <!-- START H2H -->
            <!-- START H2H -->

            <?php
            if($_GET['tab'] == 'H2H')
            {
            ?>

            <!-- SHOW H2H -->
            <!-- SHOW H2H -->
            <!-- SHOW H2H -->

            <div class="showData">

              <!-- HOME MATCHES -->
              <!-- HOME MATCHES -->
              <!-- HOME MATCHES -->

              <div class="titleShowData">
                <span>Latest Matches</span>
                <span style="margin-left: 15px;"><?php echo $infoRow->match_homeTeamEn; ?></span>
              </div>

              <?php

                // H2H - HOME LAST MATCHES
                // H2H - HOME LAST MATCHES
                // H2H - HOME LAST MATCHES

                $qryH2H_Home_Last = tep_query("SELECT * FROM nano_basketball_h2h WHERE (h2h_homeTeamId = '".$infoRow->match_homeTeamId."' OR h2h_awayTeamId = '".$infoRow->match_homeTeamId."') AND h2h_type = 'HOME_LAST' ");

                $colShowH2HTeamName = "";

                if(tep_num_rows($qryH2H_Home_Last) == 0)
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
                      <td class="col-show-h2h-title">DIFF</td>
                      <td class="col-show-h2h-title">Total</td>
                      <td class="col-show-h2h-title">W/L</td>
                    </thead>
                  ';
                  while($infoH2H_Home_Last = tep_fetch_object($qryH2H_Home_Last))
                  {
                    // FOR CHECKING THE SAME TEAM
                    if($infoH2H_Home_Last->h2h_homeTeamId == $infoRow->match_homeTeamId)
                    {
                      $colShowH2HTeamNameHome = "colShowH2HTeamNameHome";
                    }
                    else
                    {
                      $colShowH2HTeamNameHome = "";
                    }

                    if($infoH2H_Home_Last->h2h_awayTeamId == $infoRow->match_homeTeamId)
                    {
                      $colShowH2HTeamNameAway = "colShowH2HTeamNameAway";
                    }
                    else
                    {
                      $colShowH2HTeamNameAway = "";
                    }

                    // FOR CHECKING WIN / LOSS

                    if($infoH2H_Home_Last->h2h_homeScore > $infoH2H_Home_Last->h2h_awayScore)
                    {
                      $colShowH2HScore = "colShowH2HScoreGreen";
                    }
                    else if($infoH2H_Home_Last->h2h_homeScore < $infoH2H_Home_Last->h2h_awayScore)
                    {
                      $colShowH2HScore = "colShowH2HScoreRed";
                    }
                    else if($infoH2H_Home_Last->h2h_homeScore == $infoH2H_Home_Last->h2h_awayScore)
                    {
                      $colShowH2HScore = "colShowH2HScoreYellow";
                    }


                    echo "
                        <tr class='row-show-h2h'>
                          <td class='col-show-h2h-title'>".$infoH2H_Home_Last->h2h_leagueName."</td>
                          <td class='col-show-h2h'>".$infoH2H_Home_Last->h2h_matchTime."</td>
                          <td class='col-show-h2h ".$colShowH2HTeamNameHome."'>".$infoH2H_Home_Last->h2h_homeTeamName."</td>
                          <td class='col-show-h2h-score ".$colShowH2HScore."'>".$infoH2H_Home_Last->h2h_homeScore." : ".$infoH2H_Home_Last->h2h_awayScore."</td>
                          <td class='col-show-h2h ".$colShowH2HTeamNameAway."'>".$infoH2H_Home_Last->h2h_awayTeamName."</td>
                          <td class='col-show-h2h'>".$infoH2H_Home_Last->h2h_scoreGap."</td>
                          <td class='col-show-h2h'>".$infoH2H_Home_Last->h2h_total."</td>
                          <td class='col-show-h2h'>".$infoH2H_Home_Last->h2h_result."</td>
                        </tr>
                      ";
                  }
                }
              ?>
              </table>
            </div>

            <!-- AWAY MATCHES -->
            <!-- AWAY MATCHES -->
            <!-- AWAY MATCHES -->

            <div class="showData">
              <div class="titleShowData">
                <span>Latest Matches</span>
                <span style="margin-left: 15px;"><?php echo $infoRow->match_awayTeamEn; ?></span>
              </div>

              <?php

                // H2H - AwAY LAST MATCHES
                // H2H - AwAY LAST MATCHES
                // H2H - AwAY LAST MATCHES

                $qryH2H_Away_Last = tep_query("SELECT * FROM nano_basketball_h2h WHERE (h2h_homeTeamId = '".$infoRow->match_awayTeamId."' OR h2h_awayTeamId = '".$infoRow->match_awayTeamId."') AND h2h_type = 'AWAY_LAST' ");

                if(tep_num_rows($qryH2H_Away_Last) == 0)
                {
                  echo '<div class="noData">No data.</div>';
                }
                else
                {
                  echo '
                    <table class="tableShowData table-show-h2h">
                    <thead class="thShowData">
                      <td class="col-show-h2h">Leagues</td>
                      <td class="col-show-h2h">Date</td>
                      <td class="col-show-h2h">Home</td>
                      <td class="col-show-h2h">Score</td>
                      <td class="col-show-h2h">Away</td>
                      <td class="col-show-h2h">DIFF</td>
                      <td class="col-show-h2h">Total</td>
                      <td class="col-show-h2h">W/L</td>
                    </thead>
                  ';
                  while($infoH2H_Away_Last = tep_fetch_object($qryH2H_Away_Last))
                  {
                    // FOR CHECKING THE SAME TEAM
                    if($infoH2H_Away_Last->h2h_homeTeamId == $infoRow->match_awayTeamId)
                    {
                      $colShowH2HTeamNameHome = "colShowH2HTeamNameHome";
                    }
                    else
                    {
                      $colShowH2HTeamNameHome = "";
                    }

                    if($infoH2H_Away_Last->h2h_awayTeamId == $infoRow->match_awayTeamId)
                    {
                      $colShowH2HTeamNameAway = "colShowH2HTeamNameAway";
                    }
                    else
                    {
                      $colShowH2HTeamNameAway = "";
                    }

                    // FOR CHECKING WIN / LOSS

                    if($infoH2H_Away_Last->h2h_homeScore > $infoH2H_Away_Last->h2h_awayScore)
                    {
                      $colShowH2HScore = "colShowH2HScoreGreen";
                    }
                    else if($infoH2H_Away_Last->h2h_homeScore < $infoH2H_Away_Last->h2h_awayScore)
                    {
                      $colShowH2HScore = "colShowH2HScoreRed";
                    }
                    else if($infoH2H_Away_Last->h2h_homeScore == $infoH2H_Away_Last->h2h_awayScore)
                    {
                      $colShowH2HScore = "colShowH2HScoreYellow";
                    }


                    echo "
                        <tr class='row-show-h2h'>
                          <td class='col-show-h2h'>".$infoH2H_Away_Last->h2h_leagueName."</td>
                          <td class='col-show-h2h'>".$infoH2H_Away_Last->h2h_matchTime."</td>
                          <td class='col-show-h2h ".$colShowH2HTeamNameHome."'>".$infoH2H_Away_Last->h2h_homeTeamName."</td>
                          <td class='col-show-h2h ".$colShowH2HScore."'>".$infoH2H_Away_Last->h2h_homeScore." : ".$infoH2H_Away_Last->h2h_awayScore."</td>
                          <td class='col-show-h2h ".$colShowH2HTeamNameAway."'>".$infoH2H_Away_Last->h2h_awayTeamName."</td>
                          <td class='col-show-h2h'>".$infoH2H_Away_Last->h2h_scoreGap."</td>
                          <td class='col-show-h2h'>".$infoH2H_Away_Last->h2h_total."</td>
                          <td class='col-show-h2h'>".$infoH2H_Away_Last->h2h_result."</td>
                        </tr>
                      ";
                  }
                }
              ?>

              </table>
            </div>

            <!-- HEAD TO HEAD MATCHES -->
            <!-- HEAD TO HEAD MATCHES -->
            <!-- HEAD TO HEAD MATCHES -->

            <div class="showData">
              <div class="titleShowData">
                <span>H2H</span>
              </div>

              <?php

                // H2H 
                // H2H
                // H2H

                $qryH2H = tep_query("SELECT * FROM nano_basketball_h2h WHERE (h2h_homeTeamId = '".$infoRow->match_homeTeamId."' OR h2h_awayTeamId = '".$infoRow->match_homeTeamId."') AND (h2h_homeTeamId = '".$infoRow->match_awayTeamId."' OR h2h_awayTeamId = '".$infoRow->match_awayTeamId."') AND h2h_type = 'H2H' ");


                if(tep_num_rows($qryH2H) == 0)
                {
                  echo '<div class="noData">No data.</div>';
                }
                else
                {
                  echo '
                    <table class="tableShowData table-show-h2h">
                    <thead class="thShowData">
                      <td class="col-show-h2h">Leagues</td>
                      <td class="col-show-h2h">Date</td>
                      <td class="col-show-h2h">Home</td>
                      <td class="col-show-h2h">Score</td>
                      <td class="col-show-h2h">Away</td>
                      <td class="col-show-h2h">DIFF</td>
                      <td class="col-show-h2h">Total</td>
                      <td class="col-show-h2h">W/L</td>
                    </thead>
                  ';

                  while($infoH2H = tep_fetch_object($qryH2H))
                  {
                    
                    // FOR CHECKING WIN / LOSS

                    if($infoH2H->h2h_homeScore > $infoH2H->h2h_awayScore)
                    {
                      $colShowH2HScore = "colShowH2HScoreGreen";
                    }
                    else if($infoH2H->h2h_homeScore < $infoH2H->h2h_awayScore)
                    {
                      $colShowH2HScore = "colShowH2HScoreRed";
                    }
                    else if($infoH2H->h2h_homeScore == $infoH2H->h2h_awayScore)
                    {
                      $colShowH2HScore = "colShowH2HScoreYellow";
                    }

                    echo "
                      <tr class='row-show-h2h'>
                        <td class='col-show-h2h'>".$infoH2H->h2h_leagueName."</td>
                        <td class='col-show-h2h'>".$infoH2H->h2h_matchTime."</td>
                        <td class='col-show-h2h'>".$infoH2H->h2h_homeTeamName."</td>
                        <td class='col-show-h2h ".$colShowH2HScore."'>".$infoH2H->h2h_homeScore." : ".$infoH2H->h2h_awayScore."</td>
                        <td class='col-show-h2h'>".$infoH2H->h2h_awayTeamName."</td>
                        <td class='col-show-h2h'>".$infoH2H->h2h_scoreGap."</td>
                        <td class='col-show-h2h'>".$infoH2H->h2h_total."</td>
                        <td class='col-show-h2h'>".$infoH2H->h2h_result."</td>
                      </tr>
                      ";
                  }
                }
              ?>

              </table>
            </div>

            <!-- SCHEDULED MATCHES -->
            <!-- SCHEDULED MATCHES -->
            <!-- SCHEDULED MATCHES -->

            <div class="showData">
              <div class="titleShowData">
                <span>Scheduled Matches</span>
                <span style="margin-left: 15px;"><?php echo $infoRow->match_homeTeamEn; ?></span>
              </div>

              <?php

                // FUTURE MATCHES HOME
                // FUTURE MATCHES HONE
                // FUTURE MATCHES HOME

                $qryFutureHome = tep_query("SELECT * FROM nano_basketball_h2h WHERE (h2h_homeTeamId = '".$infoRow->match_homeTeamId."' OR h2h_awayTeamId = '".$infoRow->match_homeTeamId."') AND h2h_type = 'HOME_SCHEDULE' ");

                if(tep_num_rows($qryFutureHome) == 0)
                {
                  echo '<div class="noData">No data.</div>';
                }
                else
                {
                  echo '
                    <table class="tableShowData table-show-h2h">
                    <thead class="thShowData">
                      <td class="col-show-h2h">Leagues</td>
                      <td class="col-show-h2h">Date</td>
                      <td class="col-show-h2h">Home</td>
                      <td class="col-show-h2h">Away</td>
                    </thead>
                  ';

                  while($infoFutureHome = tep_fetch_object($qryFutureHome))
                  {
                    
                    // FOR CHECKING THE SAME TEAM
                    if($infoFutureHome->h2h_homeTeamId == $infoRow->match_homeTeamId)
                    {
                      $colShowH2HTeamNameHome = "colShowH2HTeamNameHome";
                    }
                    else
                    {
                      $colShowH2HTeamNameHome = "";
                    }

                    if($infoFutureHome->h2h_awayTeamId == $infoRow->match_homeTeamId)
                    {
                      $colShowH2HTeamNameAway = "colShowH2HTeamNameAway";
                    }
                    else
                    {
                      $colShowH2HTeamNameAway = "";
                    }

                    echo "
                      <tr class='row-show-h2h'>
                        <td class='col-show-h2h'>".$infoFutureHome->h2h_leagueName."</td>
                        <td class='col-show-h2h'>".$infoFutureHome->h2h_matchTime."</td>
                        <td class='col-show-h2h ".$colShowH2HTeamNameHome."'>".$infoFutureHome->h2h_homeTeamName."</td>
                        <td class='col-show-h2h ".$colShowH2HTeamNameAway."'>".$infoFutureHome->h2h_awayTeamName."</td>
                      </tr>
                      ";
                  }
                }
              ?>

              </table>
            </div>

            <!-- SCHEDULED MATCHES -->
            <!-- SCHEDULED MATCHES -->
            <!-- SCHEDULED MATCHES -->

            <div class="showData">
              <div class="titleShowData">
                <span>Scheduled Matches</span>
                <span style="margin-left: 15px;"><?php echo $infoRow->match_awayTeamEn; ?></span>
              </div>
              
              <?php

                // FUTURE MATCHES HOME
                // FUTURE MATCHES HONE
                // FUTURE MATCHES HOME

                $qryFutureAway = tep_query("SELECT * FROM nano_basketball_h2h WHERE (h2h_homeTeamId = '".$infoRow->match_awayTeamId."' OR h2h_awayTeamId = '".$infoRow->match_awayTeamId."') AND h2h_type = 'AWAY_SCHEDULE' ");

                if(tep_num_rows($qryFutureAway) == 0)
                {
                  echo '<div class="noData">No data.</div>';
                }
                else
                {
                  echo '
                    <table class="tableShowData table-show-h2h">
                    <thead class="thShowData">
                      <td class="col-show-h2h">Leagues</td>
                      <td class="col-show-h2h">Date</td>
                      <td class="col-show-h2h">Home</td>
                      <td class="col-show-h2h">Away</td>
                    </thead>
                  ';

                  while($infoFutureAway = tep_fetch_object($qryFutureAway))
                  {
                    
                    // FOR CHECKING THE SAME TEAM
                    if($infoFutureAway->h2h_homeTeamId == $infoRow->match_awayTeamId)
                    {
                      $colShowH2HTeamNameHome = "colShowH2HTeamNameHome";
                    }
                    else
                    {
                      $colShowH2HTeamNameHome = "";
                    }

                    if($infoFutureAway->h2h_awayTeamId == $infoRow->match_awayTeamId)
                    {
                      $colShowH2HTeamNameAway = "colShowH2HTeamNameAway";
                    }
                    else
                    {
                      $colShowH2HTeamNameAway = "";
                    }

                    echo "
                      <tr class='row-show-h2h'>
                        <td class='col-show-h2h'>".$infoFutureAway->h2h_leagueName."</td>
                        <td class='col-show-h2h'>".$infoFutureAway->h2h_matchTime."</td>
                        <td class='col-show-h2h ".$colShowH2HTeamNameHome."'>".$infoFutureAway->h2h_homeTeamName."</td>
                        <td class='col-show-h2h ".$colShowH2HTeamNameAway."'>".$infoFutureAway->h2h_awayTeamName."</td>
                      </tr>
                      ";
                  }
                }
              ?>

              </table>
            </div>

              
            <?php
            }
            ?>

            <!-- END H2H -->
            <!-- END H2H -->
            <!-- END H2H -->

            <!-- START BOX SCORE -->
            <!-- START BOX SCORE -->
            <!-- START BOX SCORE -->

            <?php
            if($_GET['tab'] == 'BOXSCORE')
            {

            ?>
              <div class="showData">
                <div class="titleShowData">
                  BOX SCORE
                </div>

                <hr>

                <div class="btnFrame">
                  <div class="btnDiv">
                    <div class="btnGroup">
                      <button type="button" class="btnBoxScore" id="btn-box-score-all"><!----><!----><span>All</span></button>
                      <button type="button" class="btnBoxScore" id="btn-box-score-home"><!----><!----><span>Home</span></button>
                      <button type="button" class="btnBoxScore" id="btn-box-score-away"><!----><!----><span>Away</span></button>
                    </div>
                  </div>
                </div>

                <?php

                  // SHOW BOXSCORE
                  // SHOW BOXSCORE
                  // SHOW BOXSCORE

                  $qryStatistic = tep_query("SELECT * FROM nano_basketball_match_statistic WHERE matchId = '".$matchid."' ");

                  $infoMatch = tep_fetch_object(tep_query("SELECT * FROM nano_basketball_schedule_match WHERE match_code = '".$matchid."' "));

                  if(tep_num_rows($qryStatistic) == 0)
                  {
                    echo '<div class="noData">No data.</div>';
                  }
                  else
                  {
                    echo '
                      <table class="tableShowData">
                      <thead class="thShowData">
                        <td class="colShowData" style="width:20%; text-align: left; border-right:1px solid #eee;"><span style="margin-left: 15px;">#Player</span></td>
                        <td class="colShowData">P</td>
                        <td class="colShowData">MIN</td>
                        <td class="colShowData">PTS</td>
                        <td class="colShowData">REB</td>
                        <td class="colShowData">AST</td>
                        <td class="colShowData">STL</td>
                        <td class="colShowData">BLK</td>
                        <td class="colShowData">FG%</td>
                        <td class="colShowData">3PT%</td>
                        <td class="colShowData">FT%</td>
                        <td class="colShowData">OREB</td>
                        <td class="colShowData">DREB</td>
                        <td class="colShowData">TOV</td>
                        <td class="colShowData">FOUL</td>
                      </thead>
                    ';
                    while($infoStatistic = tep_fetch_object($qryStatistic)) 
                    {
                      
                        if($infoStatistic->type == 'HOME')
                        {
                            $infoPlayer = tep_fetch_object(tep_query("SELECT * FROM nano_basketball_player_info WHERE player_playerId = '".$infoStatistic->playerId."'"));

                            $shootHit = $infoStatistic->shootHit == 0 ? 0 : ($infoStatistic->shootHit / $infoStatistic->shoot) * 100;
                            $threePointHit = $infoStatistic->threePointHit == 0 ? 0 : ($infoStatistic->threePointHit / $infoStatistic->threePointShoot) * 100;
                            $freeThrowHit = $infoStatistic->freeThrowHit == 0 ? 0 : ($infoStatistic->freeThrowHit / $infoStatistic->freeThrowShoot) * 100;

                            $rebound = $infoStatistic->offensiveRebound + $infoStatistic->defensiveRebound;

                            // style="width:20%; text-align: left;"><span style="margin-left: 15px;">#Player</span>

                            echo "
                              <tr class='rowShowData box-score-home' id='box-score-home'>
                                <td class='colShowData' style='width:20%; text-align: left; border-right:1px solid #eee;'>
                                  <span style='margin-left: 15px;'>".$infoPlayer->player_nameEn."</span>
                                  <br>
                                  <span style='margin-left: 15px; font-size: 11px;'>".$infoRow->match_homeTeamEn."</span>
                                </td>
                                <td class='colShowData'>".$infoStatistic->score."</td>
                                <td class='colShowData'>".$infoStatistic->playtime."</td>
                                <td class='colShowData'>".$infoStatistic->score."</td>
                                <td class='colShowData'>".$rebound."</td>
                                <td class='colShowData'>".$infoStatistic->assist."</td>
                                <td class='colShowData'>".$infoStatistic->steal."</td>
                                <td class='colShowData'>".$infoStatistic->block."</td>
                                <td class='colShowData'>".round($shootHit, 1)."</td>
                                <td class='colShowData'>".round($threePointHit, 1)."</td>
                                <td class='colShowData'>".round($freeThrowHit, 1)."</td>
                                <td class='colShowData'>".$infoStatistic->offensiveRebound."</td>
                                <td class='colShowData'>".$infoStatistic->defensiveRebound."</td>
                                <td class='colShowData'>".$infoStatistic->turnover."</td>
                                <td class='colShowData'>".$infoStatistic->foul."</td>
                              </tr>
                            ";
                        }

                        if($infoStatistic->type == 'AWAY')
                        {
                            $infoPlayer = tep_fetch_object(tep_query("SELECT * FROM nano_basketball_player_info WHERE player_playerId = '".$infoStatistic->playerId."'"));

                            $shootHit = $infoStatistic->shootHit == 0 ? 0 : ($infoStatistic->shootHit / $infoStatistic->shoot) * 100;
                            $threePointHit = $infoStatistic->threePointHit == 0 ? 0 : ($infoStatistic->threePointHit / $infoStatistic->threePointShoot) * 100;
                            $freeThrowHit = $infoStatistic->freeThrowHit == 0 ? 0 : ($infoStatistic->freeThrowHit / $infoStatistic->freeThrowShoot) * 100;

                            $rebound = $infoStatistic->offensiveRebound + $infoStatistic->defensiveRebound;

                            echo "
                              <tr class='rowShowData box-score-away' id='box-score-away'>
                                <td class='colShowData' style='width:20%; text-align: left; border-right:1px solid #eee;'>
                                  <span style='margin-left: 15px;'>".$infoPlayer->player_nameEn."</span>
                                  <br>
                                  <span style='margin-left: 15px; font-size: 11px;'>".$infoRow->match_awayTeamEn."</span>
                                </td>
                                <td class='colShowData'>".$infoStatistic->score."</td>
                                <td class='colShowData'>".$infoStatistic->playtime."</td>
                                <td class='colShowData'>".$infoStatistic->score."</td>
                                <td class='colShowData'>".$rebound."</td>
                                <td class='colShowData'>".$infoStatistic->assist."</td>
                                <td class='colShowData'>".$infoStatistic->steal."</td>
                                <td class='colShowData'>".$infoStatistic->block."</td>
                                <td class='colShowData'>".round($shootHit, 1)."</td>
                                <td class='colShowData'>".round($threePointHit, 1)."</td>
                                <td class='colShowData'>".round($freeThrowHit, 1)."</td>
                                <td class='colShowData'>".$infoStatistic->offensiveRebound."</td>
                                <td class='colShowData'>".$infoStatistic->defensiveRebound."</td>
                                <td class='colShowData'>".$infoStatistic->turnover."</td>
                                <td class='colShowData'>".$infoStatistic->foul."</td>
                              </tr>
                            ";
                        }
                    }
                  }
                ?>
                </table>
              </div>

              <script type="text/javascript">

                // $("#box-score-away").hide();

                // $('.box-score-away').hide();


                // FOR CLICK BOX SCORE - HOME / AWAY

                $("#btn-box-score-all").click(function(){
                  $(".box-score-home").css("display", "");
                  $(".box-score-away").css("display", "");
                  // $(".rowShowData:nth-child(even)").css("background-color", "#f7f3e7");
                });

                $("#btn-box-score-home").click(function(){
                  $(".box-score-home").css("display", "");
                  $(".box-score-away").css("display", "none");
                  $(".box-score-home:nth-child(even)").css("background-color", "#f7f3e7");
                });

                $("#btn-box-score-away").click(function(){
                  $(".box-score-home").css("display", "none");
                  $(".box-score-away").css("display", "");
                  $(".box-score-away:nth-child(even)").css("background-color", "#f7f3e7");
                });

              </script>
            <?php
            }
            ?>

            <!-- END BOX SCORE -->
            <!-- END BOX SCORE -->
            <!-- END BOX SCORE -->

        </div> <!-- details_container-->
        


    </div>  <!-- panel_details-->

