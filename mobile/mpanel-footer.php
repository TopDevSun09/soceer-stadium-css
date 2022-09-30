

    </div> <!-- // panel_main FROM panel-header -->



    <div class="footer">

    <?php
    
    if( $_SESSION['module'] == "mfootball" || $_SESSION['module'] == "mbasketball" ){
    ?>
        
        <div class="menu-item" onclick="window.location='<?=$_SESSION['module']?>-main'">
            <i class="fa-solid fa-trophy"></i><br>
            All Games
        </div>

        <div class="menu-item-divider"></div>

        <div class="menu-item" onclick="window.location='<?=$_SESSION['module']?>-main-live'">
            <i class="fa-solid fa-video"></i><br>
            Live
        </div>

        <div class="menu-item-divider"></div>

        <div class="menu-item" onclick="window.location='<?=$_SESSION['module']?>-favourite'">
            <i class="fa-solid fa-user-plus"></i><br>
            Favourite
        </div>

        <div class="menu-item-divider"></div>

        <div class="menu-item" onclick="window.location='<?=$_SESSION['module']?>-league'">
            <i class="fa-solid fa-sitemap"></i><br>
            League
        </div>

        <div class="menu-item-divider"></div>

        <?php
        if($getMember->member_id!=""){
            $accountURL = "maccount-profile";
            $accountLabel = "Profile";
        } else {
            $accountURL = "maccount-access";
            $accountLabel = "Login";
        }
        ?>
        <div class="menu-item" onclick="window.location='<?=$accountURL?>'">
            <i class="fa-solid fa-gear"></i><br>
            <?=$accountLabel?>
        </div>

    <?php
    } else if( $_SESSION['module'] == "mhorse" || $_SESSION['module'] == "mesport" ){
    ?>
        No menu now

    <?php
    } else {
    ?>

        Also no menu

    <?php   
    }
    ?>


    </div> <!-- footer -->



</div> <!-- // mobile_container FROM panel-header -->



</body>



</html>