<?php include "includes/mvc-controller/football-live.php"; ?>

	<style>
		.football_detail_header .league_time{
			text-align: center;
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-ms-flex-line-pack: center;
			align-content: center;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			justify-content: center;
			height: 13px;
			font-size: 13px;
			font-weight: 500;
			color: #666666;
			-webkit-box-align: center;
			-ms-flex-align: center;
			align-items: center;
			margin: 0 0 38px 0;
			letter-spacing: 0.79px;
		}
		.football_detail_header .league_time i svg {
			width: 17px;
			height: 17px;
			position: absolute;
			left: 0%;
			top: 0%;
			display: block;
		}

		.football_detail_header .league_time i svg.collect1 {
			margin-top: 0px !important;
		}

		.football_detail_header .collect1 .st0 {
			fill: #999999;
		}

		.football_detail_header .collect1 .st1 {
			fill: #bbbbbb;
		}

		.football_detail_header .collect1 .st2 {
			fill: #ffffff;
		}

		.football_detail_header .league_time i {
			width: 17px;
			height: 17px;
			position: relative;
			background-size: 100% 100%;
			cursor: pointer;
			margin-left: 11px;
		}
		.football_detail_header .league_time i {
			width: 17px;
			height: 17px;
			position: relative;
			background-size: 100% 100%;
			cursor: pointer;
			margin-left: 12px;
		}

		.football_detail_header{
			background: #fff;
			min-height: 207px;
			padding: 31px 0 0 0;
		}

		/* new */
		.football_detail_header .comp{
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-align: center;
			-ms-flex-align: center;
			align-items: center;
			-webkit-box-pack: center;
			-ms-flex-pack: center;
			justify-content: center;
		}

		.football_detail_header .comp .comp-flex {
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-align: center;
			-ms-flex-align: center;
			align-items: center;
		}

		.football_detail_header .comp .comp-flex1 {
			-webkit-animation: Aleft 0.6s;
			animation: Aleft 0.6s;
		}

		.football_detail_header .comp .comp1 {
			font-size: 24px;
			font-weight: 500;
			color: #333333;
			width: 319px;
			cursor: pointer;
			text-align: right;
			cursor: auto !important;
		}
		.football_detail_header .comp1new {
			width: max-content !important;
			float: right !important;
			padding: 5px 20px !important;
			cursor: pointer !important;
		}
		.football_detail_header .comp .comp2 {
			width: 58px;
			height: 58px;
			margin: 0 20px;
		}
		.football_detail_header .comp .comp2 img {
			max-width: 100%;
			display: block;
		}

		.football_detail_header .comp .comp3 {
			font-size: 40px;
			font-weight: bold;
			color: #333333;
			width: 74px;
			text-align: center;
		}

		.football_detail_header .comp .comp4 {
			font-size: 12px;
			font-weight: 500;
			color: #666666;
			text-align: center;
			width: 232px;
		}
		.football_detail_header p {
			margin: 0 0 10px;
		}
		.football_detail_header .comp .comp4 p {
			line-height: 1;
			margin-bottom: 8px;
		}

		.football_detail_header .comp .comp4 b {
			line-height: 1;
		}

		.football_detail_header .comp .comp-flex {
			display: -webkit-box;
			display: -ms-flexbox;
			display: flex;
			-webkit-box-align: center;
			-ms-flex-align: center;
			align-items: center;
		}

		.football_detail_header .comp .comp-flex2 {
			-webkit-animation: Aright 0.6s;
			animation: Aright 0.6s;
		}

		.football_detail_header .comp .comp5 {
			font-size: 40px;
			font-weight: bold;
			color: #333333;
			width: 74px;
			text-align: center;
		}
		.football_detail_header .comp .comp6 {
			width: 58px;
			height: 58px;
			margin: 0 20px;
		}
		.football_detail_header .comp .comp6 img {
			max-width: 100%;
			display: block;
		}
		.football_detail_header .comp .comp7 {
			font-size: 24px;
			font-weight: 500;
			color: #333333;
			cursor: pointer;
			width: 319px;
			white-space: nowrap;
		}
		.football_detail_header .comp7 .comp1new {
			float: none !important;
			width: max-content !important;
			padding: 5px 20px !important;
			cursor: pointer !important;
		}

		
		.teamlogo {
			width: 58px;
			height: 58px;
		}

		

		.football_inner_column {
			padding: 100px;
			border: 1px solid blue;
		}

		.football_inner_column_bottom {
			border: 1px solid blue;
		}
	</style>
	
	<div class="panel_details">
        <div class="football_detail_header">
			<div class="league_time"> <?=$infoRow->match_leagueEn?> <?=$infoRow->match_time?> 
				<i>
					<svg viewBox="0 0 150 150" class="collect1">
						<path d="M120.99,139.5H29.01c-9.05,0-16.38-7.34-16.38-16.38V22.05c0-9.05,7.34-16.38,16.38-16.38h91.99
						c9.05,0,16.38,7.34,16.38,16.38v101.06C137.38,132.16,130.04,139.5,120.99,139.5z" class="st1"></path>
						<path d="M124.3,60.98c-0.65-2.01-2.43-3.43-4.53-3.62l-28.61-2.6L79.84,28.29c-0.83-1.94-2.73-3.2-4.84-3.2
						s-4.01,1.26-4.84,3.2L58.84,54.76l-28.61,2.6c-2.1,0.19-3.88,1.62-4.53,3.62c-0.65,2.01-0.05,4.21,1.54,5.6l21.62,18.96l-6.38,28.09
						c-0.47,2.06,0.33,4.2,2.05,5.44c0.92,0.67,2,1,3.08,1c0.94,0,1.87-0.25,2.7-0.75L75,104.57l24.67,14.74
						c1.8,1.08,4.08,0.99,5.79-0.25c1.71-1.24,2.52-3.37,2.05-5.44l-6.38-28.09l21.62-18.96C124.35,65.19,124.95,62.99,124.3,60.98z" class="st2"></path>
					</svg>
				</i>
			</div>
			<div class="comp">
				<div class="comp-flex comp-flex1 kk">
					<div class="comp1">
						<div class="comp1new"> <?=$infoRow->match_homeEn?> </div>
					</div>
					<div class="comp2">
						<img src="includes/images/football/team/logo/<?php echo $infoTeamHome->team_logo2; ?>" alt="">
					</div>
					<div class="comp3"><?=$infoRow->match_homeScore?></div>
				</div>
				<div class="comp4">
					<p class="m_d_matchProgressTime blinktime_livetab"></p>
					<p class="m_d_status"><?=$infoRow->match_status?></p>
					<b class="m_d_allstatus">( HT <?=$infoRow->match_homeHalfScore?> : <?=$infoRow->match_awayHalfScore?> )</b>
				</div>
				<div class="comp-flex comp-flex2">
					<div class="comp5"><?=$infoRow->match_awayScore?></div>
					<div class="comp6">
						<img src="includes/images/football/team/logo/<?php echo $infoTeamAway->team_logo2; ?>" alt="">
					</div>
					<div class="comp7">
						<div class="comp1new"> <?=$infoRow->match_awayEn?> </div>
					</div>
				</div>
			</div>
        </div>

        <div class="first_bar">
            <?php
			//Don't change built in system arrays like $_GET
			/*
			if($_GET['tab']==""){
				$_GET['tab'] = "LIVE";
			}
			*/
			$currentTab = (isset($_GET['tab']) && $_GET['tab']!='') ? $_GET['tab'] : 'H2H';
			
			$strTab = '<span ><a href="football-live?tab=H2H&id='.$infoRow->match_id.'">H2H</a></span>
			<span ><a href="football-live?tab=STANDING&id='.$infoRow->match_id.'">Standing</a></span>
			<span ><a href="football-live?tab=LIVE&id='.$infoRow->match_id.'">Live</a></span>';

			echo str_replace("?tab=".$currentTab."\">", "?tab=".$currentTab."\" class=\"tabSelected\">", $strTab);
            ?>
        </div>

        <div class="details_container">
            <div class="details_left">
				<?php
				// FOR RETRIEVE LIVE STREAM - FETCH FROM API
				include('includes/api/horse-api.php');
				//echo '<pre>';
				//var_dump($infoRow);
				//echo '</pre>';
				//if($infoRow->NowPlaying == 1){
				if($currentTab == 'LIVE'){
					$live = LSGLiveLink($infoRow->Channel);
					?>
					<iframe src="<?php echo $live->H5LINKROW; ?>" height = "500" width = "800"></iframe>
					<div class="panel">
						<div class="panelheader">
							<h3>Overview</h3>
						</div>
						<div class="panelsubheader">
							<div class="row">
								<div class="col-md-6">
									<img src="includes/images/football/team/logo/<?php echo $infoTeamHome->team_logo2; ?>" alt="">
									<?php echo $infoTeamHome->team_nameEn; ?>
								</div>
								<div class="col-md-6 text-right">
									<?php echo $infoTeamAway->team_nameEn; ?>
									<img src="includes/images/football/team/logo/<?php echo $infoTeamAway->team_logo2; ?>" alt="">
								</div>
							</div>
						</div>
						<div class="panelbody">
							<div class="overviews"><div><ul class="timelist"> <li class="start"><div> 0 - 0</div></li></ul></div></div>
							<div class="assists"><p>Figure Legends:</p> <ul><li><img src="https://www.a8livetv.com/themes/a8livetv/image/goals.png" alt="">Goal</li> <li><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyNC4xLjMsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCAxNTAgMTUwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAxNTAgMTUwOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPg0KCS5zdDB7ZmlsbDojODZCRTU3O30NCgkuc3Qxe2ZpbGw6IzFFQkJFODt9DQoJLnN0MntmaWxsOiNGMkFGMUM7fQ0KCS5zdDN7ZmlsbDojRUQzMzI3O30NCgkuc3Q0e2ZpbGw6I0VDMzYyNzt9DQoJLnN0NXtmaWxsOiM2OUQxNzM7fQ0KCS5zdDZ7ZmlsbDojRkZGRkZGO30NCgkuc3Q3e2ZpbGw6I0VCRUFFQzt9DQoJLnN0OHtmaWxsOiNEQUQ5REQ7fQ0KCS5zdDl7ZmlsbDojRkY1MjUyO30NCgkuc3QxMHtmaWxsOiNGNDQwNDA7fQ0KCS5zdDExe2ZpbGw6bm9uZTtzdHJva2U6IzNFQjg2MjtzdHJva2Utd2lkdGg6NjtzdHJva2UtbWl0ZXJsaW1pdDoxMDt9DQoJLnN0MTJ7ZmlsbDojM0NCNzZFO30NCgkuc3QxM3tmaWxsOm5vbmU7c3Ryb2tlOiNGRjNFMzE7c3Ryb2tlLXdpZHRoOjY7c3Ryb2tlLW1pdGVybGltaXQ6MTA7fQ0KCS5zdDE0e2ZpbGw6I0ZGM0UzMTt9DQoJLnN0MTV7ZmlsbDojRjQzNjE2O30NCjwvc3R5bGU+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggY2xhc3M9InN0MTUiIGQ9Ik03NSwyLjc3QzM1LjE2LDIuNzcsMi43NywzNS4xNiwyLjc3LDc1UzM1LjE2LDE0Ny4yMyw3NSwxNDcuMjNzNzIuMjMtMzIuMzksNzIuMjMtNzIuMjMNCgkJCVMxMTQuODQsMi43Nyw3NSwyLjc3eiBNNzkuNiwyNi4yNWwxOC41Ni05Ljk5YzEwLjI3LDQuMDYsMTkuMjcsMTAuNzUsMjYuMDcsMTkuMjRsLTQuNDMsMjAuNDNsLTE0LjE2LDYuOTRMNzkuNTcsNDMuODhWMjYuMjUNCgkJCUg3OS42eiBNNTIuMDEsMTYuMmwxOC41NiwxMC4wMnYxNy42M0w0NC41Myw2Mi44NEwzMC4yOCw1NS45bC00LjQzLTIwLjU0QzMyLjcxLDI2Ljg3LDQxLjcxLDIwLjI0LDUyLjAxLDE2LjJ6IE0yMi45MiwxMTAuNjkNCgkJCWMtNS45LTguNTgtOS43My0xOC42NS0xMC43OC0yOS41N2wxNS4yOS0xNi41OWwxMy45NCw2LjgzbDEwLjUsMjkuODJsLTguODksMTAuNjRMMjIuOTIsMTEwLjY5eiBNOTEuMTEsMTM2LjA1DQoJCQljLTUuMTYsMS4zNS0xMC41MiwyLjE0LTE2LjExLDIuMTRjLTYuNzQsMC0xMy4yLTEuMDctMTkuMy0zLjA1bC01LjY3LTE3LjY5bDkuMDYtMTAuODlIOTFsOC44OSwxMC41Mkw5MS4xMSwxMzYuMDV6DQoJCQkgTTEwNi45MSwxMTEuNTFsLTguNzItMTAuMzNsMTAuNjQtMjkuODJsMTMuODgtNi44bDE1LjIxLDE2LjU5Yy0wLjksOS40LTMuOTUsMTguMTctOC41MiwyNS45M0wxMDYuOTEsMTExLjUxeiIvPg0KCTwvZz4NCjwvZz4NCjwvc3ZnPg0K" alt="">OwnGoal</li> <li><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyNC4xLjMsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCAxNTAgMTUwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAxNTAgMTUwOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPg0KCS5zdDB7ZmlsbDojMTliYmU4O30NCjwvc3R5bGU+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggY2xhc3M9InN0MCIgZD0iTTc1LDIuNzdDMzUuMTYsMi43NywyLjc3LDM1LjE2LDIuNzcsNzVTMzUuMTYsMTQ3LjIzLDc1LDE0Ny4yM3M3Mi4yMy0zMi4zOSw3Mi4yMy03Mi4yM1MxMTQuODQsMi43Nyw3NSwyLjc3DQoJCQl6IE03OS42LDI2LjI1bDE4LjU2LTkuOTljMTAuMjcsNC4wNiwxOS4yNywxMC43NSwyNi4wNywxOS4yNGwtNC40MywyMC40M2wtMTQuMTYsNi45NEw3OS41Nyw0My44OFYyNi4yNUg3OS42eiBNNTIuMDEsMTYuMg0KCQkJbDE4LjU2LDEwLjAydjE3LjYzTDQ0LjUzLDYyLjg0TDMwLjI4LDU1LjlsLTQuNDMtMjAuNTRDMzIuNzEsMjYuODcsNDEuNzEsMjAuMjQsNTIuMDEsMTYuMnogTTIyLjkyLDExMC42OQ0KCQkJYy01LjktOC41OC05LjczLTE4LjY1LTEwLjc4LTI5LjU3bDE1LjI5LTE2LjU5bDEzLjk0LDYuODNsMTAuNSwyOS44MmwtOC44OSwxMC42NEwyMi45MiwxMTAuNjl6IE05MS4xMSwxMzYuMDUNCgkJCWMtNS4xNiwxLjM1LTEwLjUyLDIuMTQtMTYuMTEsMi4xNGMtNi43NCwwLTEzLjItMS4wNy0xOS4zLTMuMDVsLTUuNjctMTcuNjlsOS4wNi0xMC44OUg5MWw4Ljg5LDEwLjUyTDkxLjExLDEzNi4wNXoNCgkJCSBNMTA2LjkxLDExMS41MWwtOC43Mi0xMC4zM2wxMC42NC0yOS44MmwxMy44OC02LjhsMTUuMjEsMTYuNTljLTAuOSw5LjQtMy45NSwxOC4xNy04LjUyLDI1LjkzTDEwNi45MSwxMTEuNTF6Ii8+DQoJPC9nPg0KPC9nPg0KPC9zdmc+DQo=" alt="">Penalty</li> <li><img src="data:image/svg+xml;base64,PHN2ZyBpZD0iU3ZnanNTdmcxMDMxIiB3aWR0aD0iMjg4IiBoZWlnaHQ9IjI4OCIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB2ZXJzaW9uPSIxLjEiIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB4bWxuczpzdmdqcz0iaHR0cDovL3N2Z2pzLmNvbS9zdmdqcyI+PGRlZnMgaWQ9IlN2Z2pzRGVmczEwMzIiPjwvZGVmcz48ZyBpZD0iU3ZnanNHMTAzMyI+PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDE1MCAxNTAiIHZpZXdCb3g9IjAgMCAxNTAgMTUwIiB3aWR0aD0iMjg4IiBoZWlnaHQ9IjI4OCI+PHBhdGggZmlsbD0iIzE5YmJlOCIgZD0iTTc1LDIuNzdDMzUuMTYsMi43NywyLjc3LDM1LjE2LDIuNzcsNzVTMzUuMTYsMTQ3LjIzLDc1LDE0Ny4yM3M3Mi4yMy0zMi4zOSw3Mi4yMy03Mi4yM1MxMTQuODQsMi43Nyw3NSwyLjc3CgkJCXogTTc5LjYsMjYuMjVsMTguNTYtOS45OWMxMC4yNyw0LjA2LDE5LjI3LDEwLjc1LDI2LjA3LDE5LjI0bC00LjQzLDIwLjQzbC0xNC4xNiw2Ljk0TDc5LjU3LDQzLjg4VjI2LjI1SDc5LjZ6IE01Mi4wMSwxNi4yCgkJCWwxOC41NiwxMC4wMnYxNy42M0w0NC41Myw2Mi44NEwzMC4yOCw1NS45bC00LjQzLTIwLjU0QzMyLjcxLDI2Ljg3LDQxLjcxLDIwLjI0LDUyLjAxLDE2LjJ6IE0yMi45MiwxMTAuNjkKCQkJYy01LjktOC41OC05LjczLTE4LjY1LTEwLjc4LTI5LjU3bDE1LjI5LTE2LjU5bDEzLjk0LDYuODNsMTAuNSwyOS44MmwtOC44OSwxMC42NEwyMi45MiwxMTAuNjl6IE05MS4xMSwxMzYuMDUKCQkJYy01LjE2LDEuMzUtMTAuNTIsMi4xNC0xNi4xMSwyLjE0Yy02Ljc0LDAtMTMuMi0xLjA3LTE5LjMtMy4wNWwtNS42Ny0xNy42OWw5LjA2LTEwLjg5SDkxbDguODksMTAuNTJMOTEuMTEsMTM2LjA1egoJCQkgTTEwNi45MSwxMTEuNTFsLTguNzItMTAuMzNsMTAuNjQtMjkuODJsMTMuODgtNi44bDE1LjIxLDE2LjU5Yy0wLjksOS40LTMuOTUsMTguMTctOC41MiwyNS45M0wxMDYuOTEsMTExLjUxeiIgY2xhc3M9ImNvbG9yNGNiNzQ4IHN2Z1NoYXBlIj48L3BhdGg+PHBhdGggZmlsbD0iI2RmMjcyNiIgZD0iTTM3LjA0LDExNS41OUwzNy4wNCwxMTUuNTljLTMuODQtMy44NC0zLjg0LTEwLjA1LDAtMTMuODZMOTkuMSwzOS42N2MzLjg0LTMuODQsMTAuMDUtMy44NCwxMy44NiwwbDAsMAoJYzMuODQsMy44NCwzLjg0LDEwLjA1LDAsMTMuODZMNTAuOSwxMTUuNTlDNDcuMDgsMTE5LjQ0LDQwLjg4LDExOS40NCwzNy4wNCwxMTUuNTl6IiBjbGFzcz0iY29sb3JkZjI3MjYgc3ZnU2hhcGUiPjwvcGF0aD48cGF0aCBmaWxsPSIjZGYyNzI2IiBkPSJNMTEyLjk2LDExNS41OUwxMTIuOTYsMTE1LjU5Yy0zLjg0LDMuODQtMTAuMDUsMy44NC0xMy44NiwwTDM3LjA0LDUzLjUzYy0zLjg0LTMuODQtMy44NC0xMC4wNSwwLTEzLjg2bDAsMAoJYzMuODQtMy44NCwxMC4wNS0zLjg0LDEzLjg2LDBsNjIuMDYsNjIuMDZDMTE2LjgxLDEwNS41NCwxMTYuODEsMTExLjc4LDExMi45NiwxMTUuNTl6IiBjbGFzcz0iY29sb3JkZjI3MjYgc3ZnU2hhcGUiPjwvcGF0aD48L3N2Zz48L2c+PC9zdmc+" alt="">Penalty Missed</li> <li><img src="https://www.a8livetv.com/themes/a8livetv/image/assist.png" alt="">Assists</li> <li><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyMS4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCAxMDAgMTQ2IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAxMDAgMTQ2OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPg0KCS5zdDB7ZmlsbDojRjRCMTFFO30NCjwvc3R5bGU+DQo8cGF0aCBjbGFzcz0ic3QwIiBkPSJNODAuNSwxNDQuOEgxOS42Yy04LjcsMC0xNS43LTcuMS0xNS43LTE1LjdWMTdjMC04LjcsNy4xLTE1LjcsMTUuNy0xNS43aDYwLjljOC43LDAsMTUuNyw3LjEsMTUuNywxNS43djExMg0KCUM5Ni4yLDEzNy43LDg5LjEsMTQ0LjgsODAuNSwxNDQuOHoiLz4NCjwvc3ZnPg0K" alt="">Yellow card</li> <li><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyMS4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCAxMDAgMTQ2IiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAxMDAgMTQ2OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPg0KCS5zdDB7ZmlsbDojRUQzMzI3O30NCjwvc3R5bGU+DQo8cGF0aCBjbGFzcz0ic3QwIiBkPSJNODAuNSwxNDQuOEgxOS42Yy04LjcsMC0xNS43LTcuMS0xNS43LTE1LjdWMTdjMC04LjcsNy4xLTE1LjcsMTUuNy0xNS43aDYwLjljOC43LDAsMTUuNyw3LjEsMTUuNywxNS43djExMg0KCUM5Ni4yLDEzNy43LDg5LjEsMTQ0LjgsODAuNSwxNDQuOHoiLz4NCjwvc3ZnPg0K" alt="">Red card</li> <li><img src="https://www.a8livetv.com/assets/589c34ad1e1c68c1bebaba09b921d815.svg" alt="">Second Yellow</li> <li><img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAyNC4xLjMsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjxzdmcgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgeD0iMHB4IiB5PSIwcHgiDQoJIHZpZXdCb3g9IjAgMCAxNTAgMTUwIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCAxNTAgMTUwOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+DQo8c3R5bGUgdHlwZT0idGV4dC9jc3MiPg0KCS5zdDB7ZmlsbDojRUY0NDM3O30NCgkuc3Qxe2ZpbGw6IzNFQjc2RTt9DQo8L3N0eWxlPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGNsYXNzPSJzdDAiIGQ9Ik04NC4wMyw4Mi4xYy0wLjMtMS4wMi0xLTEuNjgtMS43OC0xLjY4SDYxLjFWMTIuNDVjMC0xLjUtMC44Ni0yLjcyLTEuOTMtMi43MkgyOC4zDQoJCQljLTEuMDcsMC0xLjkzLDEuMjItMS45MywyLjcydjY3Ljk2SDUuMTVjLTAuNzgsMC0xLjQ4LDAuNjYtMS43OCwxLjY3Yy0wLjMsMS4wMi0wLjE0LDIuMTksMC40MiwyLjk2bDM4LjQ5LDU0LjQxDQoJCQljMC4zNiwwLjUxLDAuODUsMC44LDEuMzcsMC44YzAuNTEsMCwxLTAuMjksMS4zNy0wLjc5bDM4LjYxLTU0LjQxQzg0LjE2LDg0LjI4LDg0LjMzLDgzLjExLDg0LjAzLDgyLjF6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGNsYXNzPSJzdDEiIGQ9Ik02NS45Nyw2Ny45YzAuMywxLjAyLDEsMS42OCwxLjc4LDEuNjhIODguOXY2Ny45NmMwLDEuNSwwLjg2LDIuNzIsMS45MywyLjcyaDMwLjg3DQoJCQljMS4wNywwLDEuOTMtMS4yMiwxLjkzLTIuNzJWNjkuNThoMjEuMjJjMC43OCwwLDEuNDgtMC42NiwxLjc4LTEuNjdjMC4zLTEuMDIsMC4xNC0yLjE5LTAuNDItMi45NmwtMzguNDktNTQuNDENCgkJCWMtMC4zNi0wLjUxLTAuODUtMC44LTEuMzctMC44cy0xLDAuMjktMS4zNywwLjc5TDY2LjM5LDY0Ljk0QzY1Ljg0LDY1LjcyLDY1LjY3LDY2Ljg5LDY1Ljk3LDY3Ljl6Ii8+DQoJPC9nPg0KPC9nPg0KPC9zdmc+DQo=" alt="">Substitution</li> <li><img src="https://www.a8livetv.com/assets/GoalCancelled.svg" alt="">Goal Cancelled</li></ul></div>
						</div>
					</div>
					<style>
						.panel{
							border-radius: 6px;
							width: 100%;
							background: #F3F4F6;
							margin:10px 0px;
						}
						.details_right .panel{
							width: 90%;
							margin:10px auto;
						}
						.panelheader{
							background-image: linear-gradient(to right, #AB790D 20%, #E5BA5C 75%);
							color: white;
							text-align: left;
							font-size: 15px;
							font-weight: bold;
							padding-top: 12px;
							padding-left: 12px;
							padding-bottom: 5px;
						}
						.panelheader h3{
							font-size: 14px;
						}
						.panelsubheader{
							color: #333333;
							background: #f7f3e7;
							border-bottom: 2px solid #e2e2e2;
							height: 50px;
							padding: 10px 10px;
						}
						.panelsubheader img{
							width:30px;
						}
						.panelbody{
							width: 100%;
							padding:10px;
							background-color: #F3F4F6;
							overflow-y: auto;
						}
						.panelbody .overviews{
							
						}
						.panelbody .overviews ul{
							padding:50px 10px;
							display: flex;
							flex-wrap: wrap;
							flex-direction: column-reverse;
						}
						.panelbody .overviews ul li{
							width: 100%;
							display: flex;
							-webkit-box-align: center;
							align-items: center;
							-webkit-box-pack: center;
							justify-content: center;
							margin-bottom: 0.09375rem;
						}
						.panelbody .overviews ul li div{
						    width: 105px;
							height: 37px;
							background: #999999;
							border-radius: 5px;
							text-align: center;
							line-height: 37px;
							font-size: 17px;
							font-weight: 500;
							color: #ffffff;
						}
						.panelbody .assists p{
							font-size: 14px;
							font-weight: 500;
							color: #666666;
							line-height: 23px;
							margin: 0 auto 13px auto;
							height: 58px;
							padding-top: 32px;
						}
						.panelbody .assists ul{
							display: flex;
							flex-wrap: wrap;
							height: 85px;
							background: #e0e0e2;
							border-radius: 10px;
							margin: 0 auto;
							padding: 20px 20px 0 20px;
							align-content: flex-start;
						}
						.panelbody .assists ul li{
							font-weight: normal !important;
							font-size: 15px !important;
							display: flex;
							-webkit-box-align: center;
							align-items: center;
							margin-right: 20px;
							height: 20px;
							white-space: nowrap;
							margin-bottom: 10px;
							color: #666666;
						}
						.panelbody .assists ul li img{
							height: 20px;
							margin-right: 10px;
							vertical-align:middle
						}
						.panelbody .version h6{
						    height: 13px;
							font-size: 16px;
							font-weight: bold;
							color: #555555;
							margin-top: 15px;
							margin-bottom: 9px;
						}
						.panelbody .version p .link-to-team{
						    cursor: pointer;
							color: #f8bc3d;
						}
					</style>
					<?php
				}else{
					?>
                <div class="football_inner_column">
					<center>
						<!-- ROW 1 -->
						<div class="row">
							<div class="col-sm-4">
								<img class="teamlogo" src="includes/images/football/team/logo/<?php echo $infoTeamHome->team_logo2; ?>" alt="">
							</div>

							<div class="col-sm-4">
								<?php echo $infoRow->match_homeScore . " - " . $infoRow->match_awayScore; ?>
							</div>
							<div class="col-sm-4">
								<img class="teamlogo" src="includes/images/football/team/logo/<?php echo $infoTeamAway->team_logo2; ?>" alt="">
							</div>
						</div>
						<br />
						
						<!-- ROW 2 -->
						<div class="row">
							<div class="col-sm-4"><?php echo $infoRow->match_homeEn; ?></div>
							<div class="col-sm-4"><?php echo $infoRow->match_state; ?></div>
							<div class="col-sm-4"><?php echo $infoRow->match_awayEn; ?></div>
						</div>
						<br />
					</center>
                </div>

                <!-- SHOW TECHNICAL STATISTIC -->
                <div class="football_inner_column_bottom">
					<div class="row">
						<?php
                        // GET TECHNICAL STATISTIC INFO
						
                        // $qryTechnical = tep_query("SELECT * FROM nano_football_technical_statistic WHERE statistic_matchId = '".tep_input($infoRow->match_code)."' ORDER BY statistic_time DESC");

                        // while($infoTechnical = tep_fetch_object($qryTechnical))
                        // {
                        //     $infoTechnicalDetails = tep_fetch_object(tep_query("SELECT * FROM nano_football_technical_statistic_details WHERE matchId = '".$infoTechnical->statistic_matchId."' "));


                        //     echo "<pre>".print_r($infoTechnical,true)."</pre>";
                        //     echo "<pre>".print_r($infoTechnicalDetails,true)."</pre>";
                        // }

                        $infoTechnicalDetails = tep_fetch_object(tep_query("SELECT * FROM nano_football_technical_statistic_details WHERE matchId = '".$infoRow->match_code."' "));

                        $arrTechnicCount = explode(";", $infoTechnicalDetails->statistic_technicCount);
                        
						$technicCountList = array('Kick-off','First Corner Kick','First Yellow Card','Shots','Shots on goal','Fouls','Corner kicks','Corner kicks (OT)','Free kicks','Offsides','Own goals','Yellow cards','Yellow cards (OT)','Red cards','Possession','Heads','Saves','Goalkeeper Off His Line','Conceded','Tackle Success','Intercept','Long Passes','Short Passes','Assist','Cross Success','First Substitution','Last Substitution','First offside','Last offside','Substitutions','Last Corner Kick','Last Yellow Card','Substitutions (OT)','Offsides (OT)','Off Target','Hit The Post','Head Success','Blocked','Tackles','Dribbles','Throw ins','Passes','Pass Success','Attack','Dangerous Attack','Corner Kicks (HT)','Possession (HT)');
						
                        for($i = 0; $i < sizeof($arrTechnicCount); $i++){
                            $arrTechnicCountDetail = explode(",", $arrTechnicCount[$i]);
							$technicCountKey = (int) $arrTechnicCountDetail[0];
							$technicCount = isset($technicCountList[$technicCountKey]) ? $technicCountList[$technicCountKey] : '';
                            
                            $technicCountHome = str_replace('%', '', $arrTechnicCountDetail[1]);
                            $technicCountAway = str_replace('%','',$arrTechnicCountDetail[2]);

                            if($technicCount){
                                $technicArr[] = [
                                    "technicType" => $technicCount,
                                    "technicHome" => $technicCountHome,
                                    "technicAway" => $technicCountAway
                                ];

                                if($technicCount == 'Possession'){
                                    $homePossession = $technicCountHome;
                                    $awayPossession = $technicCountAway;
                                }

                                if($technicCount == 'Corner kicks'){
                                    $homeCornerKick = $technicCountHome;
                                    $awayCornerKick = $technicCountAway;
                                }

                                if($technicCount == 'Red cards'){
                                    $homeRedCard = $technicCountHome;
                                    $awayRedCard = $technicCountAway;
                                }

                                if($technicCount == 'Yellow cards'){
                                    $homeYellowCard = $technicCountHome;
                                    $awayYellowCard = $technicCountAway;
                                }
                            }
                            $technicCountStr .= $technicCount . ";";
                        }
                        // echo "<pre>".print_r($technicArr,true)."</pre>";
                    ?>

                    <div class="col-sm-2">
                        <?php echo "Corner Kick " . $homeCornerKick; ?>
                    </div>

                    <div class="col-sm-2">
                        <?php echo "Red Card " . $homeRedCard; ?>
                    </div>

                    <div class="col-sm-2">
                        <?php echo "Yellow Card " . $homeYellowCard; ?>
                    </div>

                    <div class="col-sm-2">
                        <?php echo $homePossession . "%" . " Possession " . $awayPossession . "%"; ?>
                    </div>

                    <div class="col-sm-2">
                        <?php echo "Yellow Card " . $awayYellowCard; ?>
                    </div>

                    <div class="col-sm-2">
                        <?php echo "Red Card " . $awayRedCard; ?>
                    </div>

                    <div class="col-sm-2">
                        <?php echo "Corner Kick " . $awayCornerKick; ?>
                    </div>
                  </div>
                </div>
              <?php
              }
              ?>
                
            </div>

            <div class="details_right">
				<?php 


				$match_id = $infoRow->match_list_id;

	            $message_category = "FOOTBALL";

	            include_once('includes/mvc-controller/module-livechat.php');



				echo '<div class="row"><div class="col-md-12">';
				


				echo '</div></div>';
				if($currentTab == 'LIVE'){
				?>
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
							<div class="panelheader">
								<h3>Match Info</h3>
							</div>
							<div class="panelbody">
								<div class="version">
									<h6>About The Match</h6> 
									<p>
										<span class="link-to-team"><?php echo $infoTeamHome->team_nameEn; ?> (w) </span> vs
										<span class="link-to-team"><?php echo $infoTeamAway->team_nameEn; ?> (w) </span>
										live score (and video online live stream) starts on 
										<?php echo $infoRow->match_time; ?>
										UTC time in Chinese League Two. Here on
										<span class="link-to-team"><?php echo $infoTeamHome->team_nameEn; ?> (w)</span> vs
										<span class="link-to-team"><?php echo $infoTeamAway->team_nameEn; ?> (w)</span>
										LiveScore you can find all
										<span class="link-to-team"><?php echo $infoTeamHome->team_nameEn; ?> (w)</span> vs
										<span class="link-to-team"><?php echo $infoTeamAway->team_nameEn; ?> (w)</span>
										previous results sorted by their H2H matches.
									</p> 
									
									<h6>Match Details </h6> 
									<p><span>Event:</span> <?php echo $infoRow->match_leagueEn; ?></p> 
									<p>
										<span>Name:</span> <span class="link-to-team"> <?php echo $infoTeamHome->team_nameEn; ?> (w)</span> vs 
										<span class="link-to-team"> <?php echo $infoTeamAway->team_nameEn; ?> (w)</span>
									</p> 
									<?php
									$mathTimeParts = explode(' ',$infoRow->match_time);
									?>
									<p><span>Date:</span> <?php echo $mathTimeParts[0]; ?></p> 
									<p><span>Time:</span> <?php echo $mathTimeParts[1]; ?></p> 
									<p><span>Stadium:</span> - </p> 
									
									<h6>More Details</h6> 
									<p><span class="link-to-team"><?php echo $infoTeamHome->team_nameEn; ?> (w) fixtures</span></p> 
									<p><span class="link-to-team"><?php echo $infoTeamAway->team_nameEn; ?> (w) fixtures</span></p> 
									<p class="tip">
										A8LiveTV football LiveScore is available as iPhone and iPad app, Android app on Google Play and Windows phone app. You can find us in all stores on different languages as "A8LiveTV". Install A8LiveTV app on and follow<span class="link-to-team"> <?php echo $infoTeamHome->team_nameEn; ?> (w)</span> vs <span class="link-to-team"><?php echo $infoTeamAway->team_nameEn; ?> (w)</span> live on your mobile!
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?>
            </div>


      </div> <!-- details_container-->
        


    </div>  <!-- panel_details-->
<?php if($currentTab=='LIVE'){ ?>
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
<script>
	getScheduleMatchSingle(function(resp){
		console.log('Schedule match info : ',resp);
	});
	getTechnicalStatistic(function(resp){
		console.log('Technical Statistic info : ',resp);
	});
	getLeagueStandings(function(resp){
		console.log('League Standings : ',resp);
	});
	getMatchPlayerInfo(function(resp){
		console.log('Match PlayerInfo : ',resp);
	});
	getMatchTeamnew(function(resp){
		console.log('Match Teamnew : ',resp);
	});
	
	/*
	var realDataInterval = setInterval(function(){
		getRealData(function(resp){
			console.log('Real Data : ',resp);
		});
	},5000);
	*/
	
	function getScheduleMatchSingle(callback){
		var apilink = '/includes/apiVer1/GetScheduleMatchSingle.php';
		jQuery.ajax({
			url: apilink,
			method: 'POST',
			type: 'POST',
			traditional: true,
			data: JSON.stringify({
				matchid: '<?php echo $infoRow->match_id; ?>',
				timezone: '',
				token: 'QP4xLob48I'
			}),
			contentType: "application/json; charset=utf-8"
		}).done(function(resp){
			callback(resp);
		});
	}
	
	function getTechnicalStatistic(callback){
		var apilink = '/includes/apiVer1/GetTechnicalStatistic.php';
		jQuery.ajax({
			url: apilink,
			method: 'POST',
			type: 'POST',
			traditional: true,
			data: JSON.stringify({
				matchid: '<?php echo $infoRow->match_id; ?>',
				timezone: '',
				token: 'QP4xLob48I'
			}),
			contentType: "application/json; charset=utf-8"
		}).done(function(resp){
			callback(resp);
		});
	}
	
	function getLeagueStandings(callback){
		var apilink = '/includes/apiVer1/GetLeagueStandings.php';
		jQuery.ajax({
			url: apilink,
			method: 'POST',
			type: 'POST',
			traditional: true,
			data: JSON.stringify({
				leagueid: '<?php echo $infoRow->match_leagueId; ?>',
				timezone: '',
				token: 'QP4xLob48I',
				type: 'all'
			}),
			contentType: "application/json; charset=utf-8"
		}).done(function(resp){
			callback(resp);
		});
	}
	
	function getMatchPlayerInfo(callback){
		var apilink = '/includes/apiVer1/GetMatchPlayerInfo.php';
		jQuery.ajax({
			url: apilink,
			method: 'POST',
			type: 'POST',
			traditional: true,
			data: JSON.stringify({
				matchid: '<?php echo $infoRow->match_id; ?>',
				timezone: '',
				token: 'QP4xLob48I'
			}),
			contentType: "application/json; charset=utf-8"
		}).done(function(resp){
			callback(resp);
		});
	}
	
	function getMatchTeamnew(callback){
		var apilink = '/includes/apiVer1/GetMatchTeamnew.php';
		jQuery.ajax({
			url: apilink,
			method: 'POST',
			type: 'POST',
			traditional: true,
			data: JSON.stringify({
				away_teamid: '<?php echo $infoRow->match_awayId; ?>',
				home_teamid: '<?php echo $infoRow->match_homeId; ?>',
				timezone: '',
				token: 'QP4xLob48I'
			}),
			contentType: "application/json; charset=utf-8"
		}).done(function(resp){
			callback(resp);
		});
	}
	
	function getRealData(callback){
		var apilink = '/includes/apiVer1/GetRealData.php';
		jQuery.ajax({
			url: apilink,
			method: 'POST',
			type: 'POST',
			traditional: true,
			data: JSON.stringify({
				matchid: '<?php echo $infoRow->match_id; ?>',
				timezone: '',
				token: 'QP4xLob48I'
			}),
			contentType: "application/json; charset=utf-8"
		}).done(function(resp){
			callback(resp);
		});
	}
</script>
<?php } ?>