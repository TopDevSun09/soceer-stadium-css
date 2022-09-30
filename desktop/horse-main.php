

<?php

// FOR RETRIEVE LIVE STREAM - FETCH FROM API
// FOR RETRIEVE LIVE STREAM - FETCH FROM API
// FOR RETRIEVE LIVE STREAM - FETCH FROM API

include('includes/api/horse-api.php');

?>


    <div class="panel_details horse">

        <?php

        

        if( $_GET['channel']!="" ){
          
            $infoRow = tep_fetch_object(tep_query("SELECT * FROM nano_horse_channel WHERE channel_code = '&".tep_input($_GET['channel'])."&'"));

            if($infoRow->channel_id==""){
                
                echo redirect('horse-main');

            }

        } else {

            $infoRow = tep_fetch_object(tep_query("SELECT * FROM nano_horse_channel WHERE 1=1 ORDER BY channel_sort ASC LIMIT 0, 1"));

        }



        ?>
        
        <h1><?=$infoRow->channel_name?></h1>

        <div class="first_bar">
            
            <?php


                $strTab = '<span ><a href="horse-main">Live TV</a> </span>
                           <span ><a href="horse-calendar">Calendar</a> </span>';


                echo str_replace("href=\"".$pageURL."\">", "href=\"".$pageURL."\" class=\"tabSelected\">", $strTab);

            ?>

        </div>



        <div class="details_container">


            <div class="horse_second_bar">
                <?php

                $qryChannel = tep_query("SELECT * FROM nano_horse_channel ORDER BY channel_sort ASC LIMIT 0, 8");
                
                while($infoChannel = tep_fetch_object($qryChannel)){
                    
                    $strChannel .= "
                      <div onclick=\"window.location='horse-main?tab=".$_GET['tab']."&channel=".createToken($infoChannel->channel_code)."'\" class=\"channelTab\">
                        <img src=\"includes/images/horse/country/logo/" . $infoChannel->channel_country .".svg\" />
                        ".$infoChannel->channel_name."
                      </div>";


                }
                 
                echo str_replace("&channel=".$_GET['channel']."'\" class=\"channelTab\">", "&channel=".$_GET['channel']."'\" class=\"channelTab channelSelected\">", $strChannel);

                echo "<div class=\"channelTab\" href=\"#.\" data-bs-toggle=\"modal\" data-bs-target=\"#staticBackdrop\" style=\"float:right;text-align:left;padding-top:10px;padding-right:25px;\">MORE</div>";

                ?>

			

                <div style="clear:both"></div>
            </div>
            
            


            <div class="details_left">
            
                <div class="channel_title"><span class="channel_title_minibar"></span> <?=$infoRow->channel_name?></div>

                <?php
                    
                    $live = LSGLiveLink($infoRow->channel_code);

                ?>

                <iframe src="<?php echo $live->H5LINKROW; ?>" height = "500" width = "800"></iframe>

            </div>

            

            <div class="details_right">
            

            <?php


              $match_id = $infoRow->channel_code;

              $message_category = "HORSE";

              include_once('includes/mvc-controller/module-livechat.php');

            ?>

            </div>


        </div> <!-- details_container-->
        


    </div>  <!-- panel_details-->




<!-- FOR POP UP READ MORE -->
<!-- FOR POP UP READ MORE -->
<!-- FOR POP UP READ MORE -->
<script src="includes/js/bootstrap.bundle.min.js"></script>

<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-lg" style="width:600px;margin:5px auto;position:relative">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="staticBackdropLabel" style="font-size:14px;margin-bottom:6px;line-height:10px">Channel list</h5>
    </div>
    <div class="modal-body" style="padding-bottom:0px">
      <div class="links-list">

        <?php
        $qryChannelMore = tep_query("SELECT * FROM nano_horse_channel ORDER BY channel_sort ASC");
            
        while($infoChannelMore = tep_fetch_object($qryChannelMore)){
            
            echo "<a onclick=\"window.location='horse-main?tab=".$_GET['tab']."&channel=".createToken($infoChannelMore->channel_code)."'\"><img src=\"includes/images/horse/country/logo/" . $infoChannelMore->channel_country .".svg\" /> <span>".$infoChannelMore->channel_name."</span></a>";

        }

        ?>
      </div>
    </div>
    <div class="modal-footer"">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" style="background-color:#fff;bordercolor:#ccc;color:#333;padding:4px 12px;">Close</button>
    </div>
  </div>
</div>
</div>

