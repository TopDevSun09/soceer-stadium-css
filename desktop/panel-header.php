<html device="pc">

<head>


    <?php

    switch($pageURL){

        case "football-main":
            $seoTITLE = "Football Live Stream";
            break;

        case "football-live":
            $infoRow = tep_fetch_object(tep_query("SELECT * FROM nano_schedule_match WHERE match_id = '".tep_input($_GET['id'])."'"));
            $seoTITLE = $infoRow->match_homeEn." vs ".$infoRow->match_awayEn." (".$infoRow->match_leagueEn.") Football Match Live Stream";
            break;

        case "basketball-main":
            $seoTITLE = "Basketball Live Stream";
            break;

        case "basketball-live":
            $infoRow = tep_fetch_object(tep_query("SELECT * FROM nano_basketball_live_match WHERE match_list_id = '&".tep_input($_GET['id'])."&'"));
            $seoTITLE = $infoRow->Home." vs ".$infoRow->Away." (".$infoRow->League.") Basketball Match Live Stream";
            break;

        case "horse-main":
            if( $_GET['channel']!="" ){
                $extSql = " AND channel_code = '&".tep_input($_GET['channel'])."&' ";
            } else {
                $extSql = " ORDER BY channel_sort ASC LIMIT 0, 1 ";
            }
            $infoRow = tep_fetch_object(tep_query("SELECT * FROM nano_horse_channel WHERE 1=1 {$extSql}"));
            $seoTITLE = $infoRow->channel_name." (".strtoupper($infoRow->channel_country).") Horse Racing Live Stream";
            break;

        case "esport-main":
            $seoTITLE = "Esport Live Stream";
            break;

        case "esport-live":
            $infoRow = tep_fetch_object(tep_query("SELECT * FROM nano_esport_live_match WHERE match_list_id = '&".tep_input($_GET['id'])."&'"));
            $seoTITLE = $infoRow->Home." vs ".$infoRow->Away." (".$infoRow->League.") Esport Match Live Stream";
            break;

        case "content-list":
            $seoTITLE = strtoupper($_GET['contentType']);
            break;

        case "content-details":
            $infoRow = tep_fetch_object(tep_query("SELECT * FROM nano_cms_content WHERE content_id = '&".tep_input($_GET['cId'])."&'"));
            $seoTITLE = $infoRow->content_title." :: ".strtoupper($_GET['contentType']);
            break;

        default:
            $seoTITLE = "Football LIVE Stream | Basketball | Horse | ESport";

    }

    ?>

    <title><?=$seoTITLE?> :: <?=$infoOrganization->organization_name?></title>

    <meta name="description" content="<?=$seoTITLE?>">
    <meta name="keywords" content="football live stream, basketball live stream, horse racing live stream, esport live stream">
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="1 days">
    <link rel="canonical" href="https://<?=$infoOrganization->organization_domain?>" />


    <!-- CSS -->
    <!-- CSS -->
    <!-- CSS -->
    
    <link rel="stylesheet" href="includes/mvc-theme/<?= $layout ?>/all.css?ver=<?= time() ?>">

    <link rel="stylesheet" href="includes/mvc-theme/<?= $layout ?>/bootstrap.min.css">


    <!-- FONT -->
    <!-- FONT -->
    <!-- FONT -->
    <link rel="stylesheet" href="includes/mvc-theme/<?= $layout ?>/font-roboto.css"> 
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <link rel="stylesheet" href="includes/mvc-theme/<?= $layout ?>/awesome6.2.0all.min.css"> 

    <link rel="stylesheet" href="includes/mvc-theme/<?=$layout?>/<?=$infoOrganization->organization_domain?>/custom-css.php">


    <script type="text/javascript" src="includes/js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="includes/js/slider.js"></script>
    <script type="text/javascript" src="includes/js/popper.min.js"></script>
    <script type="text/javascript" src="includes/js/bootstrapv4.min.js"></script>

    <link rel="shortcut icon" type="image/jpg" href="includes/mvc-theme/<?=$layout?>/<?=$infoOrganization->organization_domain?>/images/favicon.ico" />

   

</head>

<body>

   

    <!-- HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER -->
    <!-- HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER -->
    <!-- HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER -->
    
    <div class="header">
        
        <div class="header_logo" style="">
            
            <a href="https://<?=$infoOrganization->organization_domain?>">
                <img src="includes/mvc-theme/desktop/<?=$infoOrganization->organization_domain?>/images/brand-logo.png" alt="<?=$infoOrganization->organization_domain?>" style="height:53px;margin:5px 0px 2px 0px; float: left;">
            </a>
            
            <div class="header_login">
                <?php
                if($getMember->member_id==""){
                    echo '<a href="account-access"><i class="fa-regular fa-user" style="font-size:18px"></i> Sign In</a>';
                } else {
                    echo '<a href="logout"><i class="fa-solid fa-right-from-bracket" style="font-size:18px"></i> Logout</a> | <a href="account-profile"><i class="fa-regular fa-user" style="font-size:18px"></i> My Account</a>';
                }
                ?>
            </div>

            <div style="clear: both;"></div>

        </div>

        <div class="header_menu_div">
        <div class="header_menu">
            <ul>
            
            <?php

            if( $pageURL == "content-list" || $pageURL == "content-details" ){
                
                $menuActive = "content-list".$_GET['contentType'];
                
            } else {
                
                $splitMenuFile = explode("-", $pageURL);

                $menuActive = $splitMenuFile[0];

            }
            
            // DEFAULT MENU // DEFAULT MENU // DEFAULT MENU  // DEFAULT MENU // DEFAULT MENU
            if($menuActive==""){
                $menuActive = "football";
            }

            $strHeaderMenu = '
              <li><a class="menu-nav" id="football" href="football-main"><i class="fa-sharp fa-solid fa-futbol" style="font-size:20px"></i> <span>Football</span></a></li>
              <li><a class="menu-nav" id="basketball" href="basketball-main"><i class="fa-solid fa-basketball" style="font-size:20px"></i> <span>Basketball</span></a></li>
              <li><a class="menu-nav" id="horse" href="horse-main"><i class="fa-sharp fa-solid fa-horse-head" style="font-size:20px"></i> <span>Horse Racing</span></a></li>
              <li><a class="menu-nav" id="esport" href="esport-main"><i class="fa-solid fa-gamepad" style="font-size:20px"></i> <span>Esport</spann></a></li>
              <li><a class="menu-nav" id="content-listguide" href="content-list?contentType=guide" class="menu-nav"><i class="fa-solid fa-hands-helping" style="font-size:20px"></i> <span>Guide</span></a></li>
              <li><a class="menu-nav" id="content-listnews" href="content-list?contentType=news"><i class="fa-solid fa-newspaper" style="font-size:20px"></i> <span>News</span></a></li>';

            echo str_replace("class=\"menu-nav\" id=\"".$menuActive."\"", "class=\"menu-nav active\" id=\"".$menuActive."\"", $strHeaderMenu);

            ?>

            </ul>

        </div>
    </div>


    </div>


    <!-- CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN -->
    <!-- CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN -->
    <!-- CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN -->


    <?php

    if ($pageURL == "" || $pageURL == "football-main" || $pageURL == "basketball-main" || $pageURL == "esport-main" || $pageURL == "content-list" || $pageURL == "content-details") {

    ?>


    <div class="panel_main">


        <div class="panel_left">

            <?php

            if($pageURL != "content-list" && $pageURL != "content-details") {

            ?>

            <div class="panel_left_box menu-left">
                <div class="menu-link">
                    <a href="?filterLive=LIVE"><i class="fas fa-satellite-dish"></i> &nbsp; Live <span id="spanLiveCount" class="filter-live" style="color:red;">(0)</span></a>
                </div>
                <div class="menu-link">
                    <a href="?filterLive=END"><i class="fas fa-table"></i> &nbsp; End Score</a>
                </div>
                <div class="menu-link">
                    <a href="../football-league-standing"><i class="fa-solid fa-sitemap"></i> &nbsp; League Standing</a>
                </div>
            </div>

            <?php

            }

            ?>


            <?php

            if($pageURL == "football-main" && $pageURL != "basketball-main") {

            ?>

            <div class="panel_left_box menu-left">                  
                <h2 class="menu-title" style="font-size: 13px; color: #e5ba5c; font-weight: bold ;padding:0px ; margin:0px">Popular</h2>
                <hr class="title-hr" style="margin-top:3px;margin-bottom:2px;">
                
                <?php    

                switch($pageURL){
             
                    case "football-main":

                        $qryRowLeague = tep_query("SELECT * 
                            FROM 
                                nano_football_popular_league 
                            WHERE 
                                1=1 
                                ORDER BY league_update_status ASC");
                                
                         while($infoRowLeague = tep_fetch_object($qryRowLeague)){
                            echo '
                               <div class="menu-link">
                                  <a href="football-league?id='.createToken($infoRowLeague->league_code).'"><img src="includes/images/football/league/logo/' . $infoRowLeague->league_logo .'" style="width: 25px;height: 25px;border-radius: 50%;" />
                                        '.substr($infoRowLeague->league_name,0,25).(strlen($infoRowLeague->league_name)>25?'..':'').'</a>
                               </div>';
                        } 

                        break;

                    case "basketball-main":

                        $qryRowLeague = tep_query("SELECT * 
                            FROM 
                                nano_basketball_popular_league 
                            WHERE 
                                1=1 
                                ORDER BY league_update_status ASC");
                                
                         while($infoRowLeague = tep_fetch_object($qryRowLeague)){
                            echo '
                               <div class="menu-link">
                                  <a href="basketball-league?id='.createToken($infoRowLeague->league_code).'"><img src="includes/images/basketball/league/logo/' . $infoRowLeague->league_logo .'" style="width: 25px;height: 25px;border-radius: 50%;" />
                                        '.substr($infoRowLeague->league_name,0,25).(strlen($infoRowLeague->league_name)>25?'..':'').'</a>
                               </div>';
                        } 

                        break;
                }


                ?>
            </div>


            <?php

            }

            ?>


            
            <div class="panel_left_box menu-left">                  
                <h2 class="menu-title" style="font-size: 13px; color: #e5ba5c; font-weight: bold ;padding:0px ; margin:0px">Recommended</h2>
                <hr class="title-hr" style="margin-top:3px;margin-bottom:2px;">
                
                <?php
                    $qryRow = tep_query("SELECT * FROM nano_cms_content WHERE content_type = 'Recommend Article' AND organization_id = '".tep_input($infoOrganization->organization_id)."' ORDER BY content_id DESC LIMIT 0, 2"); 
                    
                    while ($infoRow = tep_fetch_object($qryRow)){
                        
                        echo '
                        <div style="margin-top:5px;margin-bottom:15px;cursor:pointer;" onclick="window.location=\'content-details?contentType=RECOMMENDED&cId='.createToken($infoRow->content_id).'\'" >
                            
                            <div style="height:150px;width:100%;background-image:url(\'uploads/content/'.$infoRow->content_banner.'\');background-size:cover; border-radius:5px;"></div>
                            
                            <div class="content-description" style="line-height:19px; margin-top:5px;font-size:13px;">'.substr($infoRow->content_description, 0, 150).'..</div>

                        </div>';
                    }
                ?>
            </div>


            <div class="panel_left_box menu-left" style="height:906px; overflow-y: scroll; overflow-x: hidden;">                  
                <h2 class="menu-title" style="font-size: 13px; color: #e5ba5c; font-weight: bold ;padding:0px ; margin:0px">Other Leagues [A-Z]</h2>
                <hr class="title-hr" style="margin-top:3px;margin-bottom:5px;">
                <input class="search-country" id="searchCountry" style="background: #ebebeb;margin-top:2px;font-size:12px; margin-bottom:9px; border-radius: 3px; border: none; height:25px; padding: 10px 10px;width:201px;" type="text" maxlength="40" placeholder="Search" onkeyup="searchFunc()">
                
                <?php
                
                $qryRowLeague = tep_query("SELECT * FROM nano_football_leagues_list WHERE 1=1 ORDER BY league_countryEn ASC");
                
                $strCountry = "";
                
                while($infoRowLeague = tep_fetch_object($qryRowLeague)){

                        if($strCountry != $infoRowLeague->league_countryEn){
                            
                            $strCountry = $infoRowLeague->league_countryEn;
                            
                           echo "<p id='cntry".$infoRowLeague->league_countryId."' class='header_country_title' onclick=showLeague(".$infoRowLeague->league_countryId.")> &nbsp; <img src=\"includes/images/football/country/logo/" . strtolower($infoRowLeague->league_countryEn) . ".svg\" class=\"header_country_logo\" />".$infoRowLeague->league_countryEn."</p>";
                            
                        }

                        echo '
                        
                        <div class="ID'.$infoRowLeague->league_countryId.' country_sub" style="font-size:10px; display: none;">
                            
                            <a href="football-league?id='.createToken($infoRowLeague->league_leagueId).'">  '.$infoRowLeague->league_nameEn.'</a>

                        </div>';
                    } 

                ?>

            </div>




        </div>






    <?php

    } else {

    echo '
    <div class="panel_main" style="width:100%;">    ';

    }

    ?>
	
<script type="text/javascript">
    function showLeague(id){
        const collection = document.getElementsByClassName("ID"+id);
        for (let i = 0; i < collection.length; i++) {
          // collection[i].style.display = "";

          if(collection[i].style.display === "none"){
            collection[i].style.display = "";
            document.getElementById("cntry"+id).style.cssText = "color: #AB790D; background: #ebebeb;";
          }else{
            collection[i].style.display = "none";
            document.getElementById("cntry"+id).style.cssText = "";
          }

        }
    }
</script>

<script>
function searchFunc() {
    var input = document.getElementById("searchCountry");
    var filter = input.value.toUpperCase();

    var country = document.getElementsByClassName("header_country_title");
    for (i = 0; i < country.length; i++) {
        txtValue = country[i].textContent || country[i].innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            country[i].style.display = "";
        } else {
            country[i].style.display = "none";
        }
    }
}
</script>


    
