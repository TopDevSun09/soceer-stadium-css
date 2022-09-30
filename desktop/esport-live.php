    <style>
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
    </style>
    

    <div class="panel_details">
        

        <?php

        // FOR RETRIEVE LIVE STREAM - FETCH FROM API
        // FOR RETRIEVE LIVE STREAM - FETCH FROM API
        // FOR RETRIEVE LIVE STREAM - FETCH FROM API

        include('includes/api/horse-api.php');

        $infoRow = tep_fetch_object(tep_query("SELECT * FROM nano_esport_live_match WHERE match_list_id = '&".tep_input($_GET['id'])."&'"));

        if($infoRow->match_list_id==""){
            echo redirect('esport-main');
        }


        // CHECK STATUS

        if($infoRow->StartTime > date("Y-m-d H:i:s"))
        {
          $progress = "Not Started";
        }
        else if($infoRow->StopTime < date("Y-m-d H:i:s"))
        {
          $progress = "Finished";
        }
        else if($infoRow->StartTime >= date("Y-m-d H:i:s") && $infoRow->StopTime <= date("Y-m-d H:i:s"))
        {
          $progress = "In Progress";
        }
        ?>

        <div class="details_team">
            

            <div class="team_home"><?=$infoRow->Home?> </div>
            <div class="team_vs">vs</div> 
            <div class="team_away"><?=$infoRow->Away?></div>
            
            <div style="clear: both;"></div>

            <div style="margin-top:22px;">
                <span class="team_league"><?=$infoRow->League?></span>
            </div>

        </div>

        

        <div class="first_bar">
          <?php

              if($_GET['tab']==""){
                  $_GET['tab'] = "LIVE";
              }

              $strTab = '<span ><a href="esport-details?tab=LIVE&id='.createToken($infoRow->match_list_id).'">Live</a> </span>';


              echo str_replace("?tab=".$_GET['tab']."\">", "?tab=".$_GET['tab']."\" class=\"tabSelected\">", $strTab);

          ?>
        </div>



      <div class="details_container">

          <div class="details_left">
            
            <?php
            

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
                      <span><?=$infoRow->League?></span>
                      <span><?=($infoRow->StartTime)?></span>
                    </div>

                    <div class="video-wrap">
                      <div style="position: relative; background: url('includes/images/esport-background.jpeg') no-repeat center center;width: 100%;height: 100%;">
                        <div class="component-mask">
                          
                          <!-- Home Team -->
                          <div class="component-item">
                            <!-- <div class="itemlogo">
                              <img class="teamlogo" src="<?php echo $homeTeamLogo; ?>" alt="">
                            </div> -->
                            <div class="teamname"><?php echo $infoRow->Home; ?></div>
                          </div>
                          
                          <!-- Score -->
                          <div class="component-score">
                            <div class="match-score"><?php echo $infoRow->HomeScore . " - " . $infoRow->AwayScore;?></div>
                            <div class="match-status">
                              <div class="status-text"><?php echo $progress; ?></div>
                            </div>
                          </div>

                          <!-- Away Team -->
                          <div class="component-item">
                            <!-- <div class="itemlogo">
                              <img class="teamlogo" src="<?php echo $awayTeamLogo; ?>" alt="">
                            </div> -->
                            <div class="teamname"><?php echo $infoRow->Away; ?></div>
                          </div>
                          
                        </div>
                      </div>
                    </div>

                </center>
              </div>
            <?php
            }
            ?>
          </div>

          <div class="details_right">
  				

          <?php


            $match_id = $infoRow->match_list_id;

            $message_category = "ESPORT";

            include_once('includes/mvc-controller/module-livechat.php');

          ?>

          </div>

        

      </div> <!-- details_container-->
        


    </div>  <!-- panel_details-->

