<style>
  .content {
      margin-bottom: 40px;
  }
  .content .bigTitle {
      font-size: 22px; font-weight: bold; margin-top: 16px;
      margin-bottom: 3px;
      color: #2c3e50;
  }
  .content h3 a{
      font-size: 20px;
      color: #666666;

  }
  .content h3 a:hover{
      color: #333333;
      text-decoration: none;
  }
  .content .content_row {
      margin-bottom: 20px;
      border-top: 1px dotted #cccccc;
      padding-top: 10px;
  }
  .content .cover {
        width: 100%;
  }
  .content .cover img {
        width: 100%;
      border-radius: 10px;
  }

  .content .content_description {
       font-size: 16px;
       margin-top: 15px;
  }
</style>


    <div class="panel_right content">

        <?php

        $infoRow = tep_fetch_object(tep_query("
                            SELECT * 
                            FROM nano_cms_content 
                            WHERE 
                              organization_id = '".tep_input($infoOrganization->organization_id)."' AND 
                              content_id = '&".$_GET['cId']."&'")); 

        if($infoRow->content_id==""){
            echo redirect('football-main');
        }

        ?>
        
        <div class="bigTitle"><?=$infoRow->content_type?> » <?=$infoRow->content_title?> <span style="font-size:60%;font-style:italic;color:#666666;"> on <?=$infoRow->content_createdate?> </span> </div>

        <?php
            

            
            echo "
            <div class=\"content_row\">

                <div class=\"cover\">
                    <!--<img style=\"width:400px; \" style=\"uploads/content/".$infoRow->content_banner."\" />-->
                    <img src=\"uploads/content/".$infoRow->content_banner."\" />
                </div>

                <div class=\"content_description\">".$infoRow->content_description."</div>

                <div style=\"clear:both\"></div>

            </div>";
            
        ?>


    </div> 

