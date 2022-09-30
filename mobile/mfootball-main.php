<style>

.home_date{
  width: 100%;
  height: 55px;
  overflow: hidden;
  background: #fff;
  -webkit-box-pack: justify;
  justify-content: space-between;
  -webkit-box-align: center;
  align-items: center;
}
.date{
  width: 20%;
  height: 83%;
  margin-top: 5px;
  margin-bottom: 5px;
  font-size: 15px;
}
.day{
  width: 100%;
  height: 45%;
  margin-top: 2px;
}
.date-details{
  width: 100%;
  height: 45%;
}
.dateBoxSelected{
  color: #999999;
  font-weight: bold;
  background: #ebebeb;
}
.sort-bar {
    width: 100%;
    height: 55px;
    background: #F1E8D5;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    padding: 0px 0px 0 0px;
    -webkit-box-pack: justify;
    justify-content: space-between;
}
.sort-left-container {
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    margin-left: 25px;
}
.sort-left-container img {
    width: 40px;
    height: 100%;
    float: left;
    margin-left: 0px;
    margin-right: 15px;
}
.sort-left-container b {
    float: left;
    margin-top: 0px;
    margin-left: 0px;
    font-size: 15px;
    color: #000000;
}
.sort-right-container{
    display: flex;
    -webkit-box-align: center;
    align-items: center;    
    justify-content: right;
    margin-right: 25px;
}
.sort-right-container span {
    float: left;
    margin-top: 0px;
    margin-left: 0px;
    font-size: 12px;
    font-weight: 400;
    color: #666666;
}
.sort-right-container i {
    margin-top: 0px;
    margin-left: 5px;
    color: #868686;
}
.sort-bar .sort-right-container i {
    color: #333333;
    font-size: 18px;
}

.other-leagues {
    height: 40px;
    width: 95.5%;
    background: #666666;
    color: #fff;
    font-size: 13px;
    font-weight: bold;
    line-height: 40px;
    padding-left: 25px;
}

.home_schedule {
    border: 0px;
}
.football-list li {
    height: 45px;
    width: 100%;
    background: #F1E8D5;
    padding: 0 0 0 0;
    justify-content: space-between;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    border-bottom: 0.005208rem solid #d7d7d7;
}
.football-match {
    display: flex;
    margin-left: 25px;
}
.football-list li img {
    margin-top: 0px;
    float: left;
    width: 40px;
}
.football-list li span {
    margin-top: 0px;
    margin-left: 15px;
    float: left;
    font-size: 14px;
    display: flex;
    -webkit-box-align: center;
    align-items: center;
    -webkit-box-pack: justify;
}
.league-country{
    color: #000000;
}
.football-list li span .symbol{
    margin-left: 5px;
    margin-right: 0px;
    padding: 0 1px 0 1px;
    font-weight: bold;
}
.league-name{
    color: #868686;
}
</style>

    <div class="home_date">
      
      <?php
        
      if($_GET['selectDate']!=""){
        $_SESSION['selectDate'] = $_GET['selectDate'];
      }
      else{
        $_SESSION['selectDate'] = date('Y-m-d');
      }

      if($_SESSION['selectDate']==""){
        $_SESSION['selectDate'] = date('Y-m-d');
      }


      for($d=-2; $d<=2; $d++){

        $strDateRange = date('Y-m-d') . $d . ' days';

        if($_SESSION['selectDate'] == date('Y-m-d', strtotime($strDateRange))){
            $selectDateHighlight = "dateBoxSelected";
        } else {
            $selectDateHighlight = "";
        }

        if(date('Y-m-d', strtotime($strDateRange)) == date('Y-m-d')){
          $dateDetails = "TODAY";
        }
        else{
          $dateDetails = date('d M', strtotime($strDateRange));
        }

        echo "
        <div class=\"date {$selectDateHighlight}\" onclick=\"window.location='?selectDate=".date('Y-m-d', strtotime($strDateRange))."'\">
          <div class=\"day\">".date('D', strtotime($strDateRange))." </div>
          <div class=\"date-details\">".$dateDetails." </div>
        </div>";
      }

      ?>

    </div>

    <div class="bgc"></div>

    <div class="sort-bar" onclick="window.location='mfootball-main-bytime'">
      <div class="sort-left-container">
        <img
          src="data:image/svg+xml;base64,PHN2ZyBpZD0i5Zu+5bGCXzEiIGRhdGEtbmFtZT0i5Zu+5bGCIDEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDE1MSAxNTEiPjxkZWZzPjxzdHlsZT4uY2xzLTF7ZmlsbDojMTNBNTEzO30uY2xzLTJ7ZmlsbDojZmZmO308L3N0eWxlPjwvZGVmcz48Y2lyY2xlIGNsYXNzPSJjbHMtMSIgY3g9Ijc1LjUiIGN5PSI3NS41IiByPSI3NS41Ii8+PHBhdGggY2xhc3M9ImNscy0yIiBkPSJNMzcuNiw4NS40YTU1LjgsNTUuOCwwLDEsMSw1NS43LDU1LjlBNTUuOSw1NS45LDAsMCwxLDM3LjYsODUuNFptNTUuOC01MmE1Mi4xLDUyLjEsMCwxLDAsNTIuMSw1MkE1Mi4yLDUyLjIsMCwwLDAsOTMuNCwzMy40WiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTE3LjkgLTEwKSIvPjxwYXRoIGNsYXNzPSJjbHMtMiIgZD0iTTkxLjUsMTA0LjhjMC00LjQsMC04LjguMS0xMy4yYTEuOCwxLjgsMCwwLDAtMS0xLjgsNS4yLDUuMiwwLDAsMS0xLjktNi42LDUuNCw1LjQsMCwwLDEsNi42LTIuNiwxLjcsMS43LDAsMCwwLDEuNS0uM0wxMTEsNjguOWwxLS44YzEuMS0uOCwyLjItLjcsMi44LjJhMS44LDEuOCwwLDAsMS0uNSwyLjdsLTUuOSw0LjctOS4zLDcuNmExLjgsMS44LDAsMCwwLS42LDEuMyw0LjksNC45LDAsMCwxLTIuMiw1LjEsMi4yLDIuMiwwLDAsMC0xLjEsMi4ydjI1LjhhNy42LDcuNiwwLDAsMS0uMSwxLjUsMS42LDEuNiwwLDAsMS0xLjYsMS41LDEuOCwxLjgsMCwwLDEtMS45LTEuNSw1LjcsNS43LDAsMCwxLDAtMS4zQzkxLjUsMTEzLjUsOTEuNSwxMDkuMiw5MS41LDEwNC44WiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTE3LjkgLTEwKSIvPjwvc3ZnPg0K" />
        <b>Sort by time</b>
      </div>
      <div class="sort-right-container">

        <?php

        $qryRowLeagueTotal = tep_num_rows(tep_query("
                                        SELECT * 
                                        FROM nano_live_match_list lml 
                                        WHERE 
                                            1=1 AND 
                                            NowPlaying = '1' AND 
                                            DATE(lml.TimeStart) = DATE(NOW())"));
        ?>

        <span><?=$qryRowLeagueTotal?></span>
        <i class="fa-solid fa-angle-right"></i>
      </div>

    </div>

    <div class="other-leagues">
      Other Leagus (A-Z)
    </div>


    <div class="home_schedule">
      <div class="football-list">
         <ul style="list-style: none; padding: 0px; margin: 0px;">



            <?php

            if($_GET['selectDate']!=""){
              $date = $_SESSION['selectDate'];
            } else {
              $date = date('Y-m-d'); 
            }

            // POPULAR LEAGUES
            // POPULAR LEAGUES
            // POPULAR LEAGUES
            $qryRowLeague = tep_query("SELECT *, COUNT(sm.match_id) AS 'total'
                                        FROM  nano_football_popular_league fpl , nano_football_leagues_list fll 
                                            LEFT JOIN nano_schedule_match sm ON sm.match_leagueId = fll.league_leagueId AND DATE(sm.match_time) = DATE('".$date."') 
                                        WHERE 
                                            1=1 AND 
                                            fll.league_leagueId = fpl.league_code AND 
                                            fpl.league_code IS NOT NULL AND 
                                            sm.match_id IS NOT NULL 
                                        GROUP BY fll.league_leagueId 
                                        ORDER BY total DESC");

            
            while($infoRowLeague = tep_fetch_object($qryRowLeague)){

                echo '

                <li onclick=\'location.href="mfootball-main-items?id='.createToken($infoRowLeague->league_leagueId).'"\'>
                    <div class="football-match">
                        <img src="includes/images/football/country/logo/'.strtolower($infoRowLeague->league_countryEn).'.svg" />
                        <span>
                          <b class="league-country">'.$infoRowLeague->league_countryEn.'</b>
                          <span class="symbol">:</span>
                          <span class="league-name">'.$infoRowLeague->league_nameEn .'</span>
                        </span>
                     </div>  
                     
                     <div class="sort-right-container">
                         <span>'.$infoRowLeague->total.'</span>
                        <i class="fa-solid fa-angle-right"></i>
                     </div>

                     
               
                </li>';
 

            }


            // OTHER LEAGUES
            // OTHER LEAGUES
            // OTHER LEAGUES
            
            $qryRowLeague = tep_query("SELECT * ,  COUNT(sm.match_id) AS 'total' 
                                        FROM nano_football_leagues_list fll 
                                            LEFT JOIN nano_football_popular_league fpl ON fll.league_leagueId = fpl.league_code 
                                            LEFT JOIN nano_schedule_match sm ON sm.match_leagueId = fll.league_leagueId AND DATE(sm.match_time) = DATE('".$date."') 
                                        WHERE 
                                            1=1 AND 
                                            fpl.league_code IS NULL AND 
                                            sm.match_id IS NOT NULL 
                                        GROUP BY fll.league_leagueId
                                        ORDER BY total DESC");

            
            while($infoRowLeague = tep_fetch_object($qryRowLeague)){

                echo '

                <li onclick=\'location.href="mfootball-main-items?id='.createToken($infoRowLeague->league_leagueId).'"\'>
                    <div class="football-match">
                        <img src="includes/images/football/country/logo/'.strtolower($infoRowLeague->league_countryEn).'.svg" />
                        <span>
                          <b class="league-country">'.$infoRowLeague->league_countryEn.'</b>
                          <span class="symbol">:</span>
                          <span class="league-name">'.$infoRowLeague->league_nameEn .'</span>
                      </span>
                     </div>  
                     
                     <div class="sort-right-container">
                         <span>'.$infoRowLeague->total.'</span>
                        <i class="fa-solid fa-angle-right"></i>
                     </div>

                     
               
                </li>';
 

            }

            ?>




        </ul>

      </div>
    </div>
