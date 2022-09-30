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
  .content .content_inner_left {
      float:left;
      vertical-align:top;
      width: 35%;
      cursor: pointer;
  }
  .content .content_inner_left img {
      width: 100%;
      border-radius: 10px;
  }
  .content .content_inner_right {
      float: right;
      width: 63%;
      vertical-align:top;
  }
  .content .content_description {
       font-size: 16px;
       color:white !important; 
  }
</style>


    <div class="panel_right content">
        
        <?php
        
        $qryRow = tep_query("SELECT * 
                                FROM nano_cms_content 
                                WHERE 
                                  content_type = '".tep_input($_GET['contentType'])."' AND 
                                  organization_id = '".tep_input($infoOrganization->organization_id)."' 
                                ORDER BY content_id DESC LIMIT 0, 50"); 
        

        if( tep_num_rows($qryRow)==0 ){
            echo redirect('football-main');
        }

        ?>

        <div class="bigTitle"><?=ucfirst(strtolower($_GET['contentType']))?></div>

        <?php
            

            while ($infoRow = tep_fetch_object($qryRow)){


                echo "
                <div class=\"content_row\">

                    <div class=\"content_inner_left\" onclick=\"window.location='content-details?contentType=".$_GET['contentType']."&cId=".createToken($infoRow->content_id)."'\">
                        <img style=\"width:400px; \" style=\"uploads/content/".$infoRow->content_banner."\" />
                        <img src=\"uploads/content/".$infoRow->content_banner."\" />
                    </div>

                    <div class=\"content_inner_right\">
                        
                        <h3><a href=\"content-details?contentType=".$_GET['contentType']."&cId=".createToken($infoRow->content_id)."\">".$infoRow->content_title."</a></h3>

                        <div class=\"content_description\">".substr($infoRow->content_description, 0, 300)." [..] </div>

                    </div>

                    <div style=\"clear:both\"></div>

                </div>";

            }

        ?>


    </div> 

