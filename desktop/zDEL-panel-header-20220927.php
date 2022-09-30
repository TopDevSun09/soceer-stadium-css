<html device="pc">

<head>

    <title><?=$infoOrganization->organization_name?> :: LIVE TV | Football | Basketball | Horse | ESport</title>

    <!-- CSS -->
    <!-- CSS -->
    <!-- CSS -->
    
    <link rel="stylesheet" href="includes/mvc-theme/<?= $layout ?>/all.css?ver=<?= time() ?>">

    <link rel="stylesheet" href="includes/mvc-theme/<?= $layout ?>/bootstrap.min.css?ver=<?= time() ?>">


    <!-- FONT -->
    <!-- FONT -->
    <!-- FONT -->
    <link rel="stylesheet" href="includes/mvc-theme/<?= $layout ?>/font-roboto.css?ver=<?= time() ?>"> 

    <!--<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>-->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300&display=swap" rel="stylesheet">  -->
    <!-- <link rel="stylesheet" href="includes/mvc-theme/<?= $layout ?>/font-roboto.css?ver=<?= time() ?>"> -->

    <!--<link rel="stylesheet" href="includes/mvc-theme/<?= $layout ?>/awesomefont.min.css?ver=<?= time() ?>"  />-->
    
    <!--<link rel="stylesheet" href="includes/mvc-theme/<?= $layout ?>/awesome6.2.0all.min.css?ver=<?= time() ?>"  />
    <link rel="stylesheet" href="includes/mvc-theme/<?= $layout ?>/awesome5.15.4.css?ver=<?= time() ?>"  />-->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->

    <link rel="stylesheet" href="includes/mvc-theme/<?=$layout?>/<?=$infoOrganization->organization_domain?>/custom-css.php?ver=<?= time() ?>">

    <?php // echo "includes/mvc-theme/$layout/$infoOrganization->organization_domain/custom-css.php?ver=".time() ?>

    <!--<link rel="stylesheet" href="includes/mvc-theme/<?= $layout ?>/awesome6.2.0all.min.css"  />
    <link rel="stylesheet" href="includes/mvc-theme/<?= $layout ?>/awesome5.15.4.css"  />-->


    <script type="text/javascript" src="includes/js/jquery-3.2.1.slim.min.js"></script>
    <script type="text/javascript" src="includes/js/slider.js"></script>
    <script type="text/javascript" src="includes/js/popper.min.js"></script>
    <script type="text/javascript" src="includes/js/bootstrapv4.min.js"></script>

    <link rel="shortcut icon" type="image/jpg" href="includes/mvc-theme/<?=$layout?>/<?=$infoOrganization->organization_domain?>/images/favicon.ico" />

    <style>
    /* width */
    ::-webkit-scrollbar {
      width: 5px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      background: #f1f1f1; 
      border-radius: 5px;
    }
     
    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #888; 
      border-radius: 5px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: #555; 
      border-radius: 5px;
    }
    </style>

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

            if($pageURL==""){
                $pageURL = "football-main";
            }

            $menuActive = $pageURL;

            if($pageURL=="horse-details"){
                $menuActive = "horse-main";
            }

            $strHeaderMenu = '
              <li><a class="menu-nav" id="football-main" href="football-main"><i class="fa-sharp fa-solid fa-futbol" style="font-size:20px"></i> <span>Football</span></a></li>
              <li><a class="menu-nav" id="basketball-main" href="basketball-main"><i class="fa-solid fa-basketball" style="font-size:20px"></i> <span>Basketball</span></a></li>
              <li><a class="menu-nav" id="horse-main" href="horse-main"><i class="fa-sharp fa-solid fa-horse-head" style="font-size:20px"></i> <span>Horse Racing</span></a></li>
              <li><a class="menu-nav" id="esport-main" href="esport-main"><i class="fa-solid fa-gamepad" style="font-size:20px"></i> <span>Esport</spann></a></li>
              <li><a class="menu-nav" id="content-listguide" href="content-list?contentType=guide" class="menu-nav"><i class="fa-solid fa-hands-helping" style="font-size:20px"></i> <span>Guide</span></a></li>
              <li><a class="menu-nav" id="content-listnews" href="content-list?contentType=news"><i class="fa-solid fa-newspaper" style="font-size:20px"></i> <span>News</span></a></li>';

            echo str_replace("class=\"menu-nav\" id=\"".$menuActive.$_GET['contentType']."\"", "class=\"menu-nav active\" id=\"".$menuActive.$_GET['contentType']."\"", $strHeaderMenu);

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
                                        '.$infoRowLeague->league_name.(strlen($infoRowLeague->league_name)>28?'..':'').'</a>
                               </div>';
                        } 

                        break;

                    /*case "basketball-main":

                        $qryRowLeague = tep_query("SELECT * FROM nano_basketball_popular_league WHERE 1=1 ORDER BY league_update_status ASC");
                                
                         while($infoRowLeague = tep_fetch_object($qryRowLeague)){
                            echo '
                               <div class="menu-link">
                                  <a href="#">';
                            echo '<div style="display: flex; align-items: center; justify-content: center;">';
                            echo '<img src="includes/images/basketball/league/logo/' . $infoRowLeague->league_logo .'" style="float:left; width: 25px;height: 25px;border-radius: 50%; margin-right:10px; margin-left: -5px;" />';
                            echo '<div style="width: 160px; margin-right:8px; font-size:13px ;font-weight: bold;"><span>'.$infoRowLeague->league_name.'</span></div>';
                            echo '</div>';
                            echo '</a>
                               </div>';
                        } 

                        break;

                    case "esport-main":

                        $qryRowLeague = tep_query("SELECT League, COUNT(match_list_id) AS 'total' FROM nano_esport_live_match WHERE 1=1 GROUP BY League ORDER BY total DESC LIMIT 0, 10");
                                
                         while($infoRowLeague = tep_fetch_object($qryRowLeague)){

                            // SET LOGO
                            // SET LOGO
                            // SET LOGO
                            $defineLogo = "===".$infoRowLeague->League;
                            if( strpos($defineLogo, "DOTA") > 0 ){
                                $strLogo = "dota-default";
                            } else if( strpos($defineLogo, "LEAGUE OF LEGENDS") > 0 ){
                                $strLogo = "lol-default";
                            } else if( strpos($defineLogo, "COUNTER-STRIKE") > 0 || strpos($defineLogo, "CS") > 0){
                                $strLogo = "cs-default";
                            } else if( strpos($defineLogo, "VALORANT") > 0){
                                $strLogo = "valorant-default";
                            } else if( strpos($defineLogo, "KING OF GLORY") > 0){
                                $strLogo = "wangzhe-default";
                            } else {
                                $strLogo = "";
                            }

                           echo '
                               <div class="menu-link">
                                  <a href="#">';
							
                            echo '<div style="display: flex; align-items: center; justify-content: center;">';
                            echo '<img src="includes/images/esport/country/logo/' . $strLogo .'.png" style="float:left; width: 25px;height: 25px;border-radius: 50%;margin-right:10px; margin-left: -5px;" />';
                            echo '<div style="width: 160px; margin-right:8px; font-size:12px ;font-weight: bold;"><span>'.substr($infoRowLeague->League, 0, 30).(strlen($infoRowLeague->League)>30?'..':'').'</span></div>';
							echo '</div>';
                            echo '</a>
                               </div>';
                        } 
                    */
                    
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
                        <div style="margin-top:5px;margin-bottom:15px;cursor:pointer;" onclick="window.location=\'content-details?cId='.createToken($infoRow->content_id).'\'" >
                            
                            <div style="height:150px;width:100%;background-image:url(\'uploads/content/'.$infoRow->content_banner.'\'); border-radius:5px;"></div>
                            
                            <div class="content-description" style="line-height:19px; margin-top:5px;font-size:13px;">'.substr($infoRow->content_description, 0, 150).'..</div>

                        </div>';
                    }
                ?>
            </div>


            <div class="panel_left_box menu-left" style="height:600px; overflow-y: scroll; overflow-x: hidden;">                  
                <h2 class="menu-title" style="font-size: 13px; color: #e5ba5c; font-weight: bold ;padding:0px ; margin:0px">Other Leagues [A-Z]</h2>
                <hr class="title-hr" style="margin-top:3px;margin-bottom:5px;">
                <input class="search-country" id="searchCountry" style="background: #ebebeb;margin-top:2px;font-size:12px; margin-bottom:7px; border-radius: 3px; border: none; height:25px; padding: 10px 10px;width:206px;" type="text" maxlength="40" placeholder="Search" onkeyup="searchFunc()">
                
                <?php
                $qryRowLeague = tep_query("SELECT * FROM nano_football_leagues_list WHERE 1=1 ORDER BY league_countryEn ASC");
                $strCountry = "";
                while($infoRowLeague = tep_fetch_object($qryRowLeague)){

                        if($strCountry != $infoRowLeague->league_countryEn){
                            
                            $strCountry = $infoRowLeague->league_countryEn;
                            
                           echo "<p class='header_country_title' onclick=showLeague(".$infoRowLeague->league_countryId.")> &nbsp; <img src=\"includes/images/football/country/logo/" . strtolower($infoRowLeague->league_countryEn) . ".svg\" class=\"header_country_logo\" />".$infoRowLeague->league_countryEn."</p>";
                            
                        }

                        echo '
                        
                        <div class="ID'.$infoRowLeague->league_countryId.' menu-link" style="font-size:12px; display: none;">
                            
                            <a href="#"> + '.$infoRowLeague->league_nameEn.'</a>

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
          }else{
            collection[i].style.display = "none";
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


    
