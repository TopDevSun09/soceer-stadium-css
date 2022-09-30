

    <div class="home_date">
      <div class="date">
        <div class="day">
          Sun
        </div>
        <div class="date-details">
          16 Sept
        </div>
      </div>
      <div class="date">
        <div class="day">
          Mon
        </div>
        <div class="date-details">
          16 Sept
        </div>
      </div>
      <div class="date">
        <div class="day">
          Tue
        </div>
        <div class="date-details">
          16 Sept
        </div>
      </div>
      <div class="date">
        <div class="day">
          Wed
        </div>
        <div class="date-details">
          16 Sept
        </div>
      </div>
      <div class="date">
        <div class="day">
          Thu
        </div>
        <div class="date-details">
          16 Sept
        </div>
      </div>
      <div class="date">
        <div class="day">
          Fri
        </div>
        <div class="date-details">
          16 Sept
        </div>
      </div>
      <div class="calendar-icon">
        <img src="/includes/mvc-theme/mobile/wc.a8livetv.com/images/calendaricon.png" />
      </div>
    </div>

    <div class="bgc"></div>

    <div class="sort-bar">
      <div class="sort-left-container">
        <img
          src="data:image/svg+xml;base64,PHN2ZyBpZD0i5Zu+5bGCXzEiIGRhdGEtbmFtZT0i5Zu+5bGCIDEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDE1MSAxNTEiPjxkZWZzPjxzdHlsZT4uY2xzLTF7ZmlsbDojMTNBNTEzO30uY2xzLTJ7ZmlsbDojZmZmO308L3N0eWxlPjwvZGVmcz48Y2lyY2xlIGNsYXNzPSJjbHMtMSIgY3g9Ijc1LjUiIGN5PSI3NS41IiByPSI3NS41Ii8+PHBhdGggY2xhc3M9ImNscy0yIiBkPSJNMzcuNiw4NS40YTU1LjgsNTUuOCwwLDEsMSw1NS43LDU1LjlBNTUuOSw1NS45LDAsMCwxLDM3LjYsODUuNFptNTUuOC01MmE1Mi4xLDUyLjEsMCwxLDAsNTIuMSw1MkE1Mi4yLDUyLjIsMCwwLDAsOTMuNCwzMy40WiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTE3LjkgLTEwKSIvPjxwYXRoIGNsYXNzPSJjbHMtMiIgZD0iTTkxLjUsMTA0LjhjMC00LjQsMC04LjguMS0xMy4yYTEuOCwxLjgsMCwwLDAtMS0xLjgsNS4yLDUuMiwwLDAsMS0xLjktNi42LDUuNCw1LjQsMCwwLDEsNi42LTIuNiwxLjcsMS43LDAsMCwwLDEuNS0uM0wxMTEsNjguOWwxLS44YzEuMS0uOCwyLjItLjcsMi44LjJhMS44LDEuOCwwLDAsMS0uNSwyLjdsLTUuOSw0LjctOS4zLDcuNmExLjgsMS44LDAsMCwwLS42LDEuMyw0LjksNC45LDAsMCwxLTIuMiw1LjEsMi4yLDIuMiwwLDAsMC0xLjEsMi4ydjI1LjhhNy42LDcuNiwwLDAsMS0uMSwxLjUsMS42LDEuNiwwLDAsMS0xLjYsMS41LDEuOCwxLjgsMCwwLDEtMS45LTEuNSw1LjcsNS43LDAsMCwxLDAtMS4zQzkxLjUsMTEzLjUsOTEuNSwxMDkuMiw5MS41LDEwNC44WiIgdHJhbnNmb3JtPSJ0cmFuc2xhdGUoLTE3LjkgLTEwKSIvPjwvc3ZnPg0K" />
        <b>Sort by time</b>
      </div>
      <div class="sort-right-container">
        <span>205</span>
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

            $qryRowLeague = tep_query("SELECT * FROM nano_football_leagues_list WHERE 1=1 ORDER BY league_countryEn ASC");
            
            $strCountry = "";
            
            while($infoRowLeague = tep_fetch_object($qryRowLeague)){

                    /*if($strCountry != $infoRowLeague->league_countryEn){
                        
                        $strCountry = $infoRowLeague->league_countryEn;
                        
                       echo "<p class='header_country_title' onclick=showLeague(".$infoRowLeague->league_countryId.")> &nbsp; <img src=\"includes/images/football/country/logo/" . strtolower($infoRowLeague->league_countryEn) . ".svg\" class=\"header_country_logo\" />".$infoRowLeague->league_countryEn."</p>";
                        
                    }*/



                echo '

                <li onclick=\'location.href="football-country-league?id='.createToken($infoRowLeague->league_leagueId).'"\'>
                    <div class="football-match">
                        <img src="includs/images/football/country/logo/'.strtolower($infoRowLeague->league_countryEn).'.svg" />
                        <span><b>'.$infoRowLeague->league_countryEn.'</b> : '.$infoRowLeague->league_nameEn .'</span>
                     </div>  
                     
                     <div class="sort-right-container">
                         <span>2</span>
                        <i class="fa-solid fa-angle-right"></i>
                     </div>

                     
               
                </li>';
 

            }
            ?>



            <li onclick='location.href="football-country-league?id=xxxxx"'>
                <div class="football-match">
                    <img src="/includes/mvc-theme/mobile/wc.a8livetv.com/images/argentina.svg" />
                    <span><b>Ecuador</b> : Argentine Division 1</span>
                 </div>  
                 
                 <div class="sort-right-container">
                     <span>2</span>
                    <i class="fa-solid fa-angle-right"></i>
                 </div>

                 
           
            </li>

            <li onclick='location.href="football-country-league?id=xxxxx"'>
                <div class="football-match">
                    <img src="/includes/mvc-theme/mobile/wc.a8livetv.com/images/argentina.svg" />
                    <span><b>Ecuador</b> : Argentine Division 1</span>
                 </div>  
                 
                 <div class="sort-right-container">
                     <span>2</span>
                    <i class="fa-solid fa-angle-right"></i>
                 </div>

                 
           
            </li>

            <li onclick='location.href="football-country-league?id=xxxxx"'>
                <div class="football-match">
                    <img src="/includes/mvc-theme/mobile/wc.a8livetv.com/images/argentina.svg" />
                    <span><b>Ecuador</b> : Argentine Division 1</span>
                 </div>  
                 
                 <div class="sort-right-container">
                     <span>2</span>
                    <i class="fa-solid fa-angle-right"></i>
                 </div>

                 
           
            </li>

            <li onclick='location.href="football-country-league?id=xxxxx"'>
                <div class="football-match">
                    <img src="/includes/mvc-theme/mobile/wc.a8livetv.com/images/argentina.svg" />
                    <span><b>Ecuador</b> : Argentine Division 1</span>
                 </div>  
                 
                 <div class="sort-right-container">
                     <span>2</span>
                    <i class="fa-solid fa-angle-right"></i>
                 </div>

                 
           
            </li>

            <li onclick='location.href="football-country-league?id=xxxxx"'>
                <div class="football-match">
                    <img src="/includes/mvc-theme/mobile/wc.a8livetv.com/images/argentina.svg" />
                    <span><b>Ecuador</b> : Argentine Division 1</span>
                 </div>  
                 
                 <div class="sort-right-container">
                     <span>2</span>
                    <i class="fa-solid fa-angle-right"></i>
                 </div>

                 
           
            </li>

            <li onclick='location.href="football-country-league?id=xxxxx"'>
                <div class="football-match">
                    <img src="/includes/mvc-theme/mobile/wc.a8livetv.com/images/argentina.svg" />
                    <span><b>Ecuador</b> : Argentine Division 1</span>
                 </div>  
                 
                 <div class="sort-right-container">
                     <span>2</span>
                    <i class="fa-solid fa-angle-right"></i>
                 </div>

                 
           
            </li>

        </ul>

      </div>
    </div>
