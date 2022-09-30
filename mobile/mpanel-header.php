<html>
<head>
	
    <title><?=$infoOrganization->organization_name?> :: LIVE TV | Football | Basketball | Horse | ESport</title>

    <link rel="stylesheet" href="includes/mvc-theme/<?=$layout?>/all.css?ver=<?=time()?>">
    
    <link rel="stylesheet" href="includes/mvc-theme/<?=$layout?>/football.css?ver=<?=time()?>">
   
    
	<?php

    // THEME CSS
    // THEME CSS
    // THEME CSS
	echo "<link rel=\"stylesheet\" href=\"includes/mvc-theme/".$layout."/".$_SERVER['SERVER_NAME']."/custom-css.php\">";
	

	?>

    <script src="includes/js/fontawesomekitconfig.js" crossorigin="anonymous"></script>

    <script type="text/javascript" src="includes/js/jquery.js?ver=<?=time()?>"></script>
    
    <link rel="shortcut icon" type="image/jpg" href="includes/mvc-theme/<?=$layout?>/<?=$infoOrganization->organization_domain?>/images/favicon.ico" />
    

</head>

<body>


<div class="mobile_container">
    
    

    <!-- HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER -->
    <!-- HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER -->
    <!-- HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER HEADER -->
    <div class="header">
        
        <div class="logo">
            <img src="/includes/mvc-theme/mobile/<?=$infoOrganization->organization_domain?>/images/brand-logo.png" />
        </div>

        <div class="dropdown">
             <select class="dropdown-select" style="background: transparent;" name="sports" id="sports" onchange="window.location='?module='+$(this).val()">
                
                <?php
                
                // SET THE MODULE TO USE AT FOOTER
                // SET THE MODULE TO USE AT FOOTER
                // SET THE MODULE TO USE AT FOOTER
                if($_GET['module']!=""){
                    $_SESSION['module'] = $_GET['module'];
                }

                if($_SESSION['module']==""){
                    $_SESSION['module'] = "mfootball";
                }

                $strModule = '
                    <option value="mfootball">Football</option>
                    <option value="mbasketball">Basketball</option>
                    <option value="mhorse">Horse</option>
                    <option value="mesport">Esports</option>';

                echo str_replace("value=\"".$_SESSION['module']."\">", "value=\"".$_SESSION['module']."\" SELECTED>", $strModule);

                ?>

             </select>
        </div>
   
    </div>


    <!-- CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN -->
    <!-- CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN -->
    <!-- CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN -->
    <div class="panel_main">



