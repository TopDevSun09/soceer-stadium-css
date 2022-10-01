<div class="league-details">

    <div class="league-details-header" style="border: none;">
        <style>
            .header-follow {
                display: block;
                justify-content: center;
                align-items: center;
                height: auto;
                width: auto;
                padding-left: 10px;
                padding-right: 10px;
                border-radius: 20px;
            }

            .header-date {
                display: block;
                justify-content: space-between;
                align-items: center;
                height: auto;
                width: auto;
                padding-left: 10px;
                padding-right: 10px;
                border-radius: 20px;
            }

            .le_img_c{
                width: 1.145833rem;
                height: 1.145833rem;
                margin-right: 0.026042rem;
            }
        </style>

        <div class="header-icon">
            <img src="data:image/svg+xml;base64,PHN2ZyBpZD0i5Zu+5bGCXzEiIGRhdGEtbmFtZT0i5Zu+5bGCIDEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDU5LjcgMTA1LjEiPjxkZWZzPjxzdHlsZT4uY2xzLTF7ZmlsbDpub25lO3N0cm9rZTojZmZmO3N0cm9rZS1taXRlcmxpbWl0OjEwO3N0cm9rZS13aWR0aDo4cHg7fTwvc3R5bGU+PC9kZWZzPjxwb2x5bGluZSBjbGFzcz0iY2xzLTEiIHBvaW50cz0iNTMuOSAxMDIuMyA1LjcgNTQgNTYuOSAyLjgiLz48L3N2Zz4=" />
            <div class="header-follow">
                <span>+ Follow </span>
            </div>
            <div class="header-date">
                <img style="margin-right: 0; margin-left: 20px;" src="data:image/svg+xml;base64,PHN2ZyBpZD0i5Zu+5bGCXzEiIGRhdGEtbmFtZT0i5Zu+5bGCIDEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgdmlld0JveD0iMCAwIDM5LjkgNzkiPjxkZWZzPjxzdHlsZT4uY2xzLTF7ZmlsbDojZmZmZmZmO308L3N0eWxlPjwvZGVmcz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik04Mi42LDEwMy43bDEzLDE5LjRhNS41LDUuNSwwLDAsMSwwLDZsLTEzLDE5LjVhMTAuOSwxMC45LDAsMCwwLDkuMSwxN2gwYTEwLjcsMTAuNywwLDAsMCw5LjEtNC45TDExOCwxMzVhMTYsMTYsMCwwLDAsMC0xNy44TDEwMC44LDkxLjVhMTEsMTEsMCwwLDAtOS4xLTQuOWgwQTExLDExLDAsMCwwLDgyLjYsMTAzLjdaIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgtODAuNyAtODYuNikiLz48L3N2Zz4=" />
                <span style="margin-left: 10px;">22-23</span>
            </div>
        </div>

        <div class="league-details-title" style="display: flex; align-items:center; margin-top:20px;">
            <div class="league-image" style="margin-left: 60px;width:8%;">
                <img style="width: 100%;" src="https://www.a8livetv.com/api/images/football/league/logo/164577482086.png" />
            </div>

            <div class="about" style="width: 70%; margin-left:15px;">
                <h3 style="color: white;">Italian Serie A</h3>
                <div class="region">
                    <img alt="" class="le_img_c" src="https://www.a8livetv.com/api/images/football/country/logo/england.svg">
                    England / 0
                    <!-- <img alt="" class="le_img_c" src="includes/images/football/country/logo/<?=strtolower($infoRow->league_countryEn)?>.svg">
                    <b class="le_countryname"><?=$infoRow->league_countryEn?></b> -->
                </div>
            </div>
        </div>
    </div>

    <div class="menu__wrapper">
        <div class="tablinks menu__overview first__menu--active" onclick="openTabs(event, 'Overview')">
            Overview
        </div>
        <div class="tablinks menu__h2h" onclick="openTabs(event, 'Standing')">
            Standing
        </div>
        <div class="tablinks menu__standings" onclick="openTabs(event, 'Matches')">
            Matches
        </div>
        <div class="tablinks menu__chat" onclick="openTabs(event, 'TopScorers')">
            TopScorers
        </div>
    </div>

    <div id="Overview" class="tabcontent" style="display:block;">
        <style>
            .progress-label-num {
                width: 80%;
                display: block;
                margin: auto;
                position: relative;
                top: 10px;
                display: flex;
                justify-content:space-between;
            }

            progress {
                border: none;
                background: crimson;
                height: 0.426042rem;
                border-radius: 7px;
            }

            progress {
                color: lightblue;
            }

            progress::-moz-progress-bar {
                background: lightcolor;
                border-radius: 7px;

            }

            progress::-webkit-progress-value {
                background: #05AFE0;
                border-radius: 7px;

            }

            progress::-webkit-progress-bar {
                background: #DEB14F;
                border-radius: 7px;

            }

            .league-info-container > div {
                display: flex;
                align-items: center;
                justify-content: space-between;
                color: lightgray;
                width: 85%;
                margin: auto;
            }

            .progress > div {
                height: 0.426042rem;
            }
        </style>

        <div class="league-progress">
            <div class="progress-container">
                <div class="progress-label-num">
                    <span>6/21/22</span>
                    <span>Season</span>
                    <span>11/3/22</span>
                </div>
                <progress style="width: 80%; display:block; margin: auto; margin-top: 5px; position: relative;top: 10px;" value="32" max="100">32%</progress>
            </div>
        </div>

        <div class="featured-match">
            <div class="afeatured-continer">
                <div class="featured-title">
                    <span>Featured Match</span>
                </div>
                <div class="featured-club">
                    <div class="club-left">
                        <img src="https://www.a8livetv.com/api/images/football/country/logo/albania.svg" />
                        <span style="margin-left: 50px;">Albania</span>
                    </div>
                    <div class="club-center">
                        <span style="color: lightgrey;">10/5/22 0:45</span>
                        <div class="vs" style="display: flex; align-items: center; justify-content: center;">
                            <div>VS</div>
                        </div>
                    </div>
                    <div class="club-right">
                        <img src="https://www.a8livetv.com/api/images/football/country/logo/angola.svg" />
                        <span style="margin-left: 50px;">Angola</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="champions">
            <div class="champions-container">
                <div class="featured-title">
                    <span>Champions</span>
                </div>
                <img src="https://www.a8livetv.com/api/images/football/country/logo/belize.svg" />
                <span id="title-num" style="top: 50% !important;">Most titles (0)</span>
            </div>
        </div>

        <div class="league-info">
            <div class="league-info-container">
                <div class="featured-title" style="margin: 0 !important; width: 100%; color: black;">
                    <span>Info</span>
                </div>
                <div class="league-host">
                    <span class="host-left">Host</span>
                    <span class="host-right">Europe</span>
                </div>
                <div class="league-num-teams">
                    <span class="num-left">Num of Teams</span>
                    <span class="num-right">0</span>
                </div>
                <div class="league-rounds">
                    <span class="rounds-left">Rounds</span>
                    <span class="rounds-right">0</span>
                </div>
                <div class="league-foreign">
                    <span class="foreign-left">Foreign players</span>
                    <span class="foreign-right">0</span>
                </div>
                <div class="league-val-player">
                    <span class="val-left">Most valuable player</span>
                    <i class="fa-thin fa-arrow-up-right"></i>
                    <span class="val-right">(0)</span>
                </div>
                <div class="info-progress" style="margin:0 !important; width:97%; left:10px; display:flex; justify-content:space-between;">
                    <span style="color: #05AFE0;">Home(35%)</span>
                    <span style="color: gray; text-align:center;">Draws(32%)</span>
                    <span style="color: #DEB14F; text-align:right;">Away(33%)</span>
                </div>

                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
                <div class="progress" style="width: 90%; height: 0.426042rem; margin-top:5px;">
                    <div class="progress-bar progress-bar-info" role="progressbar" style="width:35%"></div>
                    <div class="progress-bar progress-bar-default" role="progressbar" style="width:32%; background-color:gray;"></div>
                    <div class="progress-bar progress-bar-warning" role="progressbar" style="width:33%"></div>
                </div>
            </div>
        </div>
    </div>

    <div id="Standing" class="tabcontent" style="display:none;">
        <style>
            .flex-center {
                display: flex;
                align-items: center;
                /* justify-content: center; */
            }

            li > div {
                border-bottom: 1px solid lightgray; 
            }

            li > div > div {
                height: 40px;
                padding-top: 12px;
            }
        </style>
        <div class="league-group">
            <div style="padding: 20 10 10 10; background-color: lightgrey;">
                <button type="button" class="btn btn-warning" style="border: none;  margin-left: 10px;">All</button>
                <button type="button" class="btn btn-default" style="border: none;  margin-left: 10px;">Home</button>
                <button type="button" class="btn btn-default" style="border: none;  margin-left: 10px;">Away</button>
            </div>
            <div class="group-title flex-center">
                <img src="https://www.a8livetv.com/api/images/football/country/logo/england.svg" />
                <h3>League</h3>
            </div>

            <div class="league-table-header flex-center">
                <div class="index">#</div>
                <div class="header-team">Team</div>
                <div class="header-p">P</div>
                <div class="header-w">W</div>
                <div class="header-d">D</div>
                <div class="header-l">L</div>
                <div class="header-goals">Goals</div>
                <div class="header-pts">PTS</div>
            </div>
            <ul class="league-table-content">
                <li>
                    <div class="team-score flex-center">
                        <div class="team-index">1</div>
                        <div class="header-team" style="padding: 0;">
                            <div class="team-name flex-center">
                                <img style="margin: 3px;" src="https://www.a8livetv.com/api/images/football/country/logo/dr%20congo.svg" />
                                <span>Napoli</span>
                            </div>
                        </div>
                        <div class="team-p" style="text-align: center;">2</div>
                        <div class="team-w">2</div>
                        <div class="team-d">0</div>
                        <div class="team-l">0</div>
                        <div class="team-goals" style="margin-left: 1px;">7:1</div>
                        <div class="team-pts" style="margin-left: 1px;">6</div>
                    </div>
                </li>
                <li>
                    <div class="team-score flex-center" style="border-bottom: 1px solid lightgray;">
                        <div class="team-index">2</div>
                        <div class="header-team" style="padding: 0;">
                            <div class="team-name flex-center">
                                <img style="margin: 3px;" src="https://www.a8livetv.com/api/images/football/country/logo/czech%20republic.svg" />
                                <span>Manchester United</span>
                            </div>
                        </div>
                        <div class="team-p">2</div>
                        <div class="team-w">2</div>
                        <div class="team-d">2</div>
                        <div class="team-l">0</div>
                        <div class="team-goals" style="margin-left: 1px;">10:1</div>
                        <div class="team-pts" style="margin-left: 1px;">9</div>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    <div id="Matches" class="tabcontent">
        <style>
            li > div > div > div {
                margin: 0 !important;
            }

            li > div > div {
                margin: 0 !important;
            }

            img {
                margin: 0 !important;
            }

            .flex-col {
                flex-direction: column; 
                justify-content:center;
            }
        </style>
        <div class="match-live" style="border:none;">
            <div class="match-title">
                <div class="match-title-content" style="color: lightgray;">
                    <span>League  : 35</span>
                </div>
            </div>
            <ul style="list-style: none; padding: 0px; margin: 0px;">
                <li>
                    <div class="match-item-left flex-center" style="border:1px solid lightgray; border-left:0; border-top:0;">
                        <div style="width: 40%;">
                            <img src="./Stars Clipart 954.jpg" alt="">
                        </div>
                        <div class="match-time flex-col flex-center">
                            <p style="color:gray">08/03</p>
                            <p style="color:red;">FT</p>
                        </div>
                    </div>
                    <div class="match-item-center" style="border:1px solid lightgray; border-left:0; border-top:0;">
                        <div class="match-club" style="font-size: 14px;">
                            <div class="match-club-one">
                                <img src="https://www.a8livetv.com/api/images/football/country/logo/argentina.svg" />
                                <p><b>Argentinos Juniors</b></p>
                            </div>
                            <div class="match-club-two">
                                <img src="https://www.a8livetv.com/api/images/football/country/logo/australia.svg" />
                                <p><b>Atletico Tucuman</b></p>
                            </div>
                        </div>
                        <div class="match-club-icon">
                            <div class="match-club-inner">
                                <img class="team" style="width: 1.8rem; height: 1.8rem;" src="https://www.a8livetv.com/themes/a8livetv/image/lineups.png"></img>
                            </div>
                        </div>
                    </div>
                    <div class="match-item-right" style="border:none; border-bottom:1px solid lightgray;width:10%;">
                        <div class="match-club-one" style="color: red;">0</div>
                        <div class="match-club-two" style="color: red;">1</div>
                    </div>
                </li>
            </ul>
            <!-- end of div -->
        </div>
    </div>

    <div id="TopScorers" class="tabcontent" style="display:none;">
        <div class="top-scorer">
            <div class="top-scorer-header">
                <div class="r">R</div>
                <div class="top-score-player">Team/Player</div>
                <div class="top-score-g">G</div>
                <div class="top-score-hg">HG</div>
                <div class="top-score-ag">AG</div>
            </div>
            <ul class="top-score-content">
                <li>
                    <div class="top-scorer-list">
                        <div class="list-r">1</div>
                        <div class="list-player">
                            <span class="player-name">Erling Haaland</span>
                            <span class="player-team">Manchester City</span>
                        </div>
                        <div class="list-g">1</div>
                        <div class="list-hg">3</div>
                        <div class="list-ag">2</div>
                    </div>
                </li>

                <li>
                    <div class="top-scorer-list">
                        <div class="list-r">2</div>
                        <div class="list-player">
                            <span class="player-name">Walcott</span>
                            <span class="player-team">Arsenal</span>
                        </div>
                        <div class="list-g">1</div>
                        <div class="list-hg">3</div>
                        <div class="list-ag">2</div>
                    </div>
                </li>

                <li>
                    <div class="top-scorer-list">
                        <div class="list-r">3</div>
                        <div class="list-player">
                            <span class="player-name">Alexis Sanchez</span>
                            <span class="player-team">Manchester United</span>
                        </div>
                        <div class="list-g">1</div>
                        <div class="list-hg">3</div>
                        <div class="list-ag">2</div>
                    </div>
                </li>


            </ul>

        </div>
    </div>

</div>

<script>
    function openTabs(evt, tabsName) {
        let i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].classList.remove("first__menu--active");
            tablinks[i].className = tablinks[i].className.replace(" menu__active", "");
        }
        document.getElementById(tabsName).style.display = "block";
        evt.currentTarget.className += " menu__active";
    }
</script>