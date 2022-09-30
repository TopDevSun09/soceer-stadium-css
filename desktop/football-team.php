<link rel="stylesheet" href="includes/mvc-theme/<?= $layout ?>/football-team.css?ver=<?= time() ?>">
<script type="text/javascript" src="includes/js/openTab.js"></script>

    <?php

        $infoRow = tep_fetch_object(tep_query("SELECT * FROM nano_football_team_profile WHERE team_code = '&".$_GET['teamid']."&' "));

  
        $getCountry = tep_fetch_object(tep_query("SELECT * FROM nano_football_leagues_list WHERE league_leagueId = '".$infoRow->league_id."' "));
  
    ?>
    

<div class="panel_details">
  <div class="info-wrap">
    <!-- INFO HEADER START -->
    <div class="info-header">
      <div class="info-header-wrap">
        <div class="info-left">
          <div>x
            <img class="team-logo" src="includes/images/arsenal.png" alt="arsenal">
          </div>
          <div class="team-text">
            <div class="flex align-items-center">
              <h2 class="team-name"><?php echo $infoRow->team_nameEn; ?></h2>
              
                <svg onclick="" id="rating" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="16" height="16" viewBox="0 0 256 256"
                xml:space="preserve" style="
                  background: gray;
                  border-radius: 5px;
                  margin-left: 15px;
                  margin-bottom: 8px;
                ">
                
                <g style="stroke: none;stroke-width: 0;stroke-dasharray: none;stroke-linecap: butt;stroke-linejoin: miter;stroke-miterlimit: 10;fill: none;fill-rule: nonzero;opacity: 1;margin: 1.5px;"
                  transform="translate(24.406593 22.406593) scale(2.3 2.3)">
                  <path
                    d="M 41.32 72.726 L 20.189 87.608 c -2.158 1.52 -5.01 -0.576 -4.205 -3.089 l 7.853 -24.508 c 0.838 -2.614 -0.088 -5.471 -2.298 -7.097 L 1.126 37.892 c -2.14 -1.575 -1.026 -4.968 1.631 -4.968 h 25.235 c 2.745 0 5.183 -1.753 6.058 -4.355 l 8.342 -24.817 c 0.84 -2.5 4.376 -2.5 5.216 0 L 55.95 28.57 c 0.875 2.602 3.313 4.355 6.058 4.355 h 25.235 c 2.657 0 3.771 3.393 1.631 4.968 L 68.461 52.914 c -2.211 1.627 -3.136 4.484 -2.298 7.097 l 7.853 24.508 c 0.805 2.513 -2.047 4.609 -4.205 3.089 L 48.68 72.726 C 46.473 71.172 43.527 71.172 41.32 72.726 z"
                    style="stroke: none;stroke-width: 1;stroke-dasharray: none;stroke-linecap: butt;stroke-linejoin: miter;stroke-miterlimit: 10;fill: white;fill-rule: nonzero;opacity: 1;margin: 1.5px;"
                    transform=" matrix(1 0 0 1 0 0) " stroke-linecap="round"></path>
                </g>
                
              </svg>
            </div>
            <div class="flex align-items-center">
              <img class="country-logo" src="includes/images/england.svg" alt="england">
              <p class="country-name"><?php echo $getCountry->league_nameEn; ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="tabs">
        <div class="tabs-header">
          <ul>
            <li onclick="openTab(event, 'overview')" class="tabs-item active">
              <a>Overview</a>
            </li>
            <li onclick="openTab(event, 'schedule')" class="tabs-item">
              <a>Schedule</a>
            </li>
            <li onclick="openTab(event, 'squad')" class="tabs-item">
              <a>Squad</a>
            </li>
            <li onclick="openTab(event, 'transfer')" class="tabs-item">
              <a>Transfer</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- INFO HEADER END -->

    <!-- INFO CONTENT START -->
    <div class="info-content">
      <div class="tabs-body">
        <div id="overview" class="tab-content">
          <div class="info-overview-wrap">
            <div class="info-overview-left">
              <h2 class="title"><?php echo $infoRow->team_nameEn; ?> Team</h2>
              <div class="left-match-info">
                <div class="time-top">
                  <div class="time-top-left">
                    <svg class="arrow-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                      <path
                        d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
                    </svg>
                    <span class="month-btn">Previous</span>
                  </div>
                 
                  <div class="time-top-right">
                    <span class="month-btn">Next</span>
                    <svg class="arrow-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                      <path
                        d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                    </svg>
                  </div>
                </div>
                <div>
                  <div class="info-list">
                    <div class="info-list-left">
                      <span>05 Aug 16:0</span>
                      <span style="margin-left:5px !important">English Premier League</span>
                    </div>
                    <div class="info-list-center">
                      <span>Crystal Palace</span>
                      <img src="includes/images/crystal_palace.png" alt="crystal">
                      <b>0 - 2</b>
                      <img src="includes/images/arsenal.png" alt="arsenal">
                      <span>Arsenal</span>
                    </div>
                    <div class="info-list-right">
                      <img class="right-arrow" src="includes/images/chevron-right-solid.svg" alt="right">
                    </div>
                  </div>
                  
                  <div class="info-list">
                    <div class="info-list-left">
                      <span>31 Aug 15:30</span>
                      <span>English Premier League</span>
                    </div>
                    <div class="info-list-center">
                      <span>Arsenal</span>
                      <img src="includes/images/arsenal.png" alt="arsenal">
                      <b>2 - 1</b>
                      <img src="includes/images/aston_villa.png" alt="aston_villa">
                      <span>Aston Villa</span>
                    </div>
                    <div class="info-list-right">
                      <img class="right-arrow" src="includes/images/chevron-right-solid.svg" alt="right">
                    </div>
                  </div>
                  <div class="info-list">
                    <div class="info-list-left">
                      <span>31 Aug 15:30</span>
                      <span>English Premier League</span>
                    </div>
                    <div class="info-list-center">
                      <span>Arsenal</span>
                      <img src="includes/images/arsenal.png" alt="arsenal">
                      <b>2 - 1</b>
                      <img src="includes/images/aston_villa.png" alt="aston_villa">
                      <span>Aston Villa</span>
                    </div>
                    <div class="info-list-right">
                      <img class="right-arrow" src="includes/images/chevron-right-solid.svg" alt="right">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="schedule" class="tab-content">
            <div class="info-overview-wrap">
              <div class="info-overview-left">
                <h2 class="title">Arsenal Team</h2>
                <div class="left-match-info">
                  <div class="time-top">
                    <div class="time-top-left">
                      <svg class="arrow-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path
                          d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
                      </svg>
                      <span class="month-btn">Previous</span>
                    </div>
                    <div class="time-top-right">
                      <span class="month-btn">Next</span>
                      <svg class="arrow-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path
                          d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                      </svg>
                    </div>
                  </div>
                  <div>
                    <div class="info-list">
                      <div class="info-list-left">
                        <span>05 Aug 16:0</span>
                        <span style="margin-left:5px !important">English Premier League</span>
                      </div>
                      <div class="info-list-center">
                        <span>Crystal Palace</span>
                        <img src="includes/images/crystal_palace.png" alt="crystal">
                        <b>0 - 2</b>
                        <img src="includes/images/arsenal.png" alt="arsenal">
                        <span>Arsenal</span>
                      </div>
                      <div class="info-list-right">
                        <img class="right-arrow" src="includes/images/chevron-right-solid.svg" alt="right">
                      </div>
                    </div>
            
                    <div class="info-list">
                      <div class="info-list-left">
                        <span>31 Aug 15:30</span>
                        <span>English Premier League</span>
                      </div>
                      <div class="info-list-center">
                        <span>Arsenal</span>
                        <img src="includes/images/arsenal.png" alt="arsenal">
                        <b>2 - 1</b>
                        <img src="includes/images/aston_villa.png" alt="aston_villa">
                        <span>Aston Villa</span>
                      </div>
                      <div class="info-list-right">
                        <img class="right-arrow" src="includes/images/chevron-right-solid.svg" alt="right">
                      </div>
                    </div>
                    <div class="info-list">
                    <div class="info-list-left">
                      <span>31 Aug 15:30</span>
                      <span>English Premier League</span>
                    </div>
                    <div class="info-list-center">
                      <span>Arsenal</span>
                      <img src="includes/images/arsenal.png" alt="arsenal">
                      <b>2 - 1</b>
                      <img src="includes/images/aston_villa.png" alt="aston_villa">
                      <span>Aston Villa</span>
                    </div>
                    <div class="info-list-right">
                      <img class="right-arrow" src="includes/images/chevron-right-solid.svg" alt="right">
                    </div>
                  </div>
                  <div class="info-list">
                    <div class="info-list-left">
                      <span>31 Aug 15:30</span>
                      <span>English Premier League</span>
                    </div>
                    <div class="info-list-center">
                      <span>Arsenal</span>
                      <img src="includes/images/arsenal.png" alt="arsenal">
                      <b>2 - 1</b>
                      <img src="includes/images/aston_villa.png" alt="aston_villa">
                      <span>Aston Villa</span>
                    </div>
                    <div class="info-list-right">
                      <img class="right-arrow" src="includes/images/chevron-right-solid.svg" alt="right">
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div id="squad" class="tab-content">
            <div class="info-overview-wrap">
              <div class="info-overview-left">
                <h2 class="title">Arsenal Team</h2>
                <div class="left-match-info">
                  <div class="time-top">
                    <div class="time-top-left">
                      <svg class="arrow-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path
                          d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
                      </svg>
                      <span class="month-btn">Previous</span>
                    </div>
                    <div class="time-top-right">
                      <span class="month-btn">Next</span>
                      <svg class="arrow-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path
                          d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
                      </svg>
                    </div>
                  </div>
                  <div>
                    <div class="info-list">
                      <div class="info-list-left">
                        <span>05 Aug 16:0</span>
                        <span style="margin-left:5px !important">English Premier League</span>
                      </div>
                      <div class="info-list-center">
                        <span>Crystal Palace</span>
                        <img src="includes/images/crystal_palace.png" alt="crystal">
                        <b>0 - 2</b>
                        <img src="includes/images/arsenal.png" alt="arsenal">
                        <span>Arsenal</span>
                      </div>
                      <div class="info-list-right">
                        <img class="right-arrow" src="includes/images/chevron-right-solid.svg" alt="right">
                      </div>
                    </div>
            
                    <div class="info-list">
                      <div class="info-list-left">
                        <span>31 Aug 15:30</span>
                        <span>English Premier League</span>
                      </div>
                      <div class="info-list-center">
                        <span>Arsenal</span>
                        <img src="includes/images/arsenal.png" alt="arsenal">
                        <b>2 - 1</b>
                        <img src="includes/images/aston_villa.png" alt="aston_villa">
                        <span>Aston Villa</span>
                      </div>
                      <div class="info-list-right">
                        <img class="right-arrow" src="includes/images/chevron-right-solid.svg" alt="right">
                      </div>
                    </div>
                    <div class="info-list">
                    <div class="info-list-left">
                      <span>31 Aug 15:30</span>
                      <span>English Premier League</span>
                    </div>
                    <div class="info-list-center">
                      <span>Arsenal</span>
                      <img src="includes/images/arsenal.png" alt="arsenal">
                      <b>2 - 1</b>
                      <img src="includes/images/aston_villa.png" alt="aston_villa">
                      <span>Aston Villa</span>
                    </div>
                    <div class="info-list-right">
                      <img class="right-arrow" src="includes/images/chevron-right-solid.svg" alt="right">
                    </div>
                  </div>
                  <div class="info-list">
                    <div class="info-list-left">
                      <span>31 Aug 15:30</span>
                      <span>English Premier League</span>
                    </div>
                    <div class="info-list-center">
                      <span>Arsenal</span>
                      <img src="includes/images/arsenal.png" alt="arsenal">
                      <b>2 - 1</b>
                      <img src="includes/images/aston_villa.png" alt="aston_villa">
                      <span>Aston Villa</span>
                    </div>
                    <div class="info-list-right">
                      <img class="right-arrow" src="includes/images/chevron-right-solid.svg" alt="right">
                    </div>
                  </div>
                  <div class="info-list">
                    <div class="info-list-left">
                      <span>31 Aug 15:30</span>
                      <span>English Premier League</span>
                    </div>
                    <div class="info-list-center">
                      <span>Arsenal</span>
                      <img src="includes/images/arsenal.png" alt="arsenal">
                      <b>2 - 1</b>
                      <img src="includes/images/aston_villa.png" alt="aston_villa">
                      <span>Aston Villa</span>
                    </div>
                    <div class="info-list-right">
                      <img class="right-arrow" src="includes/images/chevron-right-solid.svg" alt="right">
                    </div>
                  </div>
                  <div class="info-list">
                    <div class="info-list-left">
                      <span>31 Aug 15:30</span>
                      <span>English Premier League</span>
                    </div>
                    <div class="info-list-center">
                      <span>Arsenal</span>
                      <img src="includes/images/arsenal.png" alt="arsenal">
                      <b>2 - 1</b>
                      <img src="includes/images/aston_villa.png" alt="aston_villa">
                      <span>Aston Villa</span>
                    </div>
                    <div class="info-list-right">
                      <img class="right-arrow" src="includes/images/chevron-right-solid.svg" alt="right">
                    </div>
                  </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div id="transfer" class="tab-content">
            <div class="info-overview-wrap">
             
              <div class="info-overview-right">
                <img class="no-data-img" src="includes/images/no_data.png" alt="no data">
                <h4 class="no-data-text">No Data</h4>
              </div>
            </div>
        </div>
      </div>
    </div>
    <!-- INFO CONTENT END -->

    <!-- INNER TEMP START -->
    <div class="inner-temp-wrap">
      <div class="inner-temp">
        <div class="future-btn">
          Matches Future
        </div>
        <ul class="flex">
          <li>Arsenal - Tottenham Hotspur</li>
          <li>Arsenal - Bodo Glimt</li>
          <li>Arsenal - Liverpool</li>
          <li>Bodo Glimt - Arsenal</li>
          <li>Leeds United - Arsenal</li>
          <li>Arsenal - Manchester City</li>
          <li>Arsenal - PSV Eindhoven</li>
          <li>Southampton - Arsenal</li>
          <li>PSV Eindhoven - Arsenal</li>
          <li>Arsenal - Nottingham Forest</li>
        </ul>
      </div>
    </div>
    <!-- INNER TEMP END -->
  </div>

  





    </div>  <!-- panel_details-->

