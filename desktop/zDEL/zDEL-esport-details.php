
    <div class="panel_details">
        
        <style>
          .details_team {
              
              text-align: center;
              padding: 40px 0px 20px 0px;
              font-size: 28px;
              font-weight: bold;
              margin-bottom: 10px;
          }
          .details_team .team_time {
              font-size: 17px;
          }
          .details_team .team_vs {
              font-size: 22px; 
              padding: 0px 20px;
              width: 10%;float: left;
          }
          .details_team .team_home {
              width: 45%;float: left;text-align: right;
          }
          .details_team .team_away {
              width: 45%;float: left;text-align: left;
          }
          .details_team .team_league {

              font-size: 14px;
              text-align: center;
              background: black;
              color: white;
              padding: 4px 12px;
          }
          .details_container {
              width: 1200px;
              margin: 20px auto 50px auto;
          }
          .details_left {
              width: 66%;
              float: left;
              border: 1px solid blue;
              margin-bottom: 50px;

          }
          .details_right {
              width: 32%;
              float: right;
              border: 1px solid blue;
              margin-bottom: 50px;
          }

          .first_bar {
              width:  100%;
              margin: 5px 0px;
              padding: 10px 0px 10px 0px;
              background: rgb(196,154,18);
              background: linear-gradient(135deg, rgba(196,154,18,1) 35%, rgba(166,147,6,1) 100%);
              text-align: center;
              font-size: 14px;
              font-weight: bold;
          }
          .first_bar span {
              margin:  0px 15px;

          }
          .first_bar span a {
              color: white;
              
          }
          .first_bar span a:hover {
              color: black;
              padding-bottom: 10px;
              text-decoration: none;
              border-bottom: 3px solid #333333;
              
          }

          .first_bar span .tabSelected {
              color: black;
              padding-bottom: 10px;
              text-decoration: none;
              border-bottom: 3px solid #333333;
          }

          .inner_column {
              padding: 100px;
              border: 1px solid blue;
          }
        </style>

        <?php

        // FOR RETRIEVE LIVE STREAM - FETCH FROM API
        // FOR RETRIEVE LIVE STREAM - FETCH FROM API
        // FOR RETRIEVE LIVE STREAM - FETCH FROM API

        include('includes/api/horse-api.php');

        $infoRow = tep_fetch_object(tep_query("SELECT * FROM nano_esport_live_match WHERE match_list_id = '&".tep_input($_GET['id'])."&'"));

        if($infoRow->match_list_id==""){
            echo redirect('esport-main');
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
              <div class="inner_column">
                <center>
                    <!-- ROW 1 -->
                    <div class="row">
                      <div class="col-sm-4">
                          
                      </div>

                      <div class="col-sm-4">
                        <?php
                          echo $infoRow->HomeScore . " - " . $infoRow->AwayScore;
                        ?>
                      </div>

                      <div class="col-sm-4">
                          
                      </div>
                    </div>

                    <br>

                    <!-- ROW 2 -->
                    <div class="row">
                      <div class="col-sm-4">
                          <?php echo $infoRow->Home; ?>
                      </div>

                      <div class="col-sm-4">
                          <?php 
                          if($infoRow->TimeStart > date("Y-m-d H:i:s"))
                          {
                            $state = "Not Started";
                          }
                          else
                          {
                            $state = "Finished";
                          }
                          
                          echo $state; 

                          ?>
                      </div>

                      <div class="col-sm-4">
                          <?php echo $infoRow->Away; ?>
                      </div>
                    </div>

                    <br>
                </center>
              </div>
            <?php
            }
            ?>
          </div>

          <div class="details_right">
            chatbox<br>chatbox<br>chatbox<br>chatbox<br>chatbox<br>chatbox<br>chatbox<br>chatbox<br>
          </div>

        

      </div> <!-- details_container-->
        


    </div>  <!-- panel_details-->

