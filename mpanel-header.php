<html>
<head>
	
    <title><?=$infoOrganization->organization_name?> :: LIVE TV | Football | Basketball | Horse | ESport</title>

    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="viewport"
        content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no,viewport-fit=cover" />

    
    
    <link rel="stylesheet" href="includes/mvc-theme/<?=$layout?>/football.css?ver=<?=time()?>">

    <link rel="stylesheet" href="includes/mvc-theme/<?=$layout?>/mall.css?ver=<?=time()?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
   
    
	<?php

    // THEME CSS
    // THEME CSS
    // THEME CSS
	echo "<link rel=\"stylesheet\" href=\"includes/mvc-theme/".$layout."/".$infoOrganization->organization_domain."/custom-css.php\">";
	echo "<link rel=\"shortcut icon\" type=\"image/jpg\" href=\"includes/mvc-theme/".$layout."/".$infoOrganization->organization_domain."/images/favicon.ico\" />";

	?>

    <script src="https://kit.fontawesome.com/e0ea3a0915.js" crossorigin="anonymous"></script>

    <script type="text/javascript" src="includes/js/jquery.js"></script>
    
    

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

  <style>


    .menu-bar-nikola {
      background-color: black;
      border: 1px solid green;
      display: flex;
      align-items: left;
      justify-content: space-between;
      --left: 40px;
      --top: 65px;
    }

    #dropdown-menu-ul-nikola {
      background-color: #FDFDFC;
      transform: translate(var(--left), var(--top)) !important;
      width: 350px !important;
      border-radius: 8px;
    }

    #dropdown-menu-ul-nikola>li {
      display: flex;
      background-color: #5A5A5A;
      border-radius: 5px;
      margin: 3px 10px 3px 10px;
      display: flex;
      align-items: center;
      cursor: pointer;
    }
    #dropdown-menu-ul-nikola>li>i {
      margin-left: 10px;
      font-size: 24px !important;
    }

    #dropdown-menu-ul-nikola>li>* {
      pointer-events: none;
    }

    #dropdown-menu-ul-nikola>li>img {
      width: 15% !important;
      height: 15% !important;
    }

    #dropdown-menu-ul-nikola>li>button {
      text-transform: uppercase;
      color: white !important;
      font-size: 16px;
      font-weight: 500;
    }

    #dropdown-menu-ul-nikola>li>div {
      font-weight: 500;
    }

    #dropdown-menu-ul-nikola>li>div :first-child {
      color: #cf4e52;
    }

    .dropdown-button-nikola {
      background-color: transparent;
      border: 1px solid lightgrey;
      color: white;
      border-radius: 5px;
      margin-top: 10px;
      margin-bottom: 10px;
      text-transform: uppercase;
      font-weight: 600;
      font-size: 17px;
      padding: 3px 15px 3px 15px;
    }

    .dropdown-menu-board-nikola {
      background-color: white;
    }

    .dropdown-item-right-nikola {
      background-color: #ADABAC;
      border-radius: 10px;
      margin: 3px 15px 3px 15px;
      padding: 3px 15px 3px 15px;
      width: 35%;
      display: flex;
      justify-content: center;
    }

    
  </style>

        <?php

            if($_GET['module']!=""){
                $_SESSION['module'] = $_GET['module'];
            }

            if($_SESSION['module']==""){
                $_SESSION['module'] = "mfootball";
            }


        ?>

        <div class="menu-bar-nikola">
            <div class="dropdown" id="menu-bar-droparrow-nikola">
              <button class="dropdown-toggle dropdown-button-nikola" id="navbarDarkDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                <span id="spanCountMODULE">MODULE</span>
              </button>
              <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-board-nikola" id="dropdown-menu-ul-nikola"
                aria-labelledby="navbarDarkDropdownMenuLink">
                <li><i class="fa-sharp fa-solid fa-futbol" style="font-size:20px"></i> 
                    <button class="dropdown-item">Football</button>
                    <div class="dropdown-item dropdown-item-right-nikola">
                        <span id="spanCountFootballLive">-</span>/
                        <span id="spanCountFootballAll">-</span></div>
                </li>
                <li><i class="fa-solid fa-basketball" style="font-size:20px"></i> 
                    <button class="dropdown-item">Basketball</button>
                    <div class="dropdown-item dropdown-item-right-nikola">
                        <span id="spanCountBasketballLive">-</span>/
                        <span id="spanCountBasketballAll">-</span></div>
                </li>
                <li><i class="fa-sharp fa-solid fa-horse-head" style="font-size:20px"></i> 
                    <button class="dropdown-item">Horse</button>
                    <div class="dropdown-item dropdown-item-right-nikola">
                        <span id="spanCountHorseLive">-</span>/
                        <span id="spanCountHorseAll">-</span></div>
                </li>
                <li><i class="fa-solid fa-gamepad" style="font-size:20px"></i> 
                    <button class="dropdown-item">Esport</button>
                    <div class="dropdown-item dropdown-item-right-nikola">
                        <span id="spanCountEsportLive">-</span>/
                        <span id="spanCountEsportAll">-</span></div>
                </li>
                <li><i class="fa-solid fa-hands-helping" style="font-size:20px"></i> 
                    <button class="dropdown-item">Guide</button>
                </li>
                <li><i class="fa-solid fa-newspaper" style="font-size:20px"></i> 
                    <button class="dropdown-item">News</button>
                </li>
              </ul>
            </div>
        </div>

        <script>
        $("#navbarDarkDropdownMenuLink").on("click", function () {
          var classList = $('#menu-bar-droparrow-nikola').attr('class').split(/\s+/);
          $.each(classList, function (index, item) {
            if (item === 'dropdown') {
              $("#menu-bar-droparrow-nikola").removeClass("dropdown");
              $("#menu-bar-droparrow-nikola").addClass("dropup");
              // $("#dropdown-menu-ul-nikola").fadeIn();
              $("li:first-child").css("background-color", "#2B2B2B");
              $("body").css("background-color", "lightgrey");
            } else {
              $("#menu-bar-droparrow-nikola").removeClass("dropup");
              $("#menu-bar-droparrow-nikola").addClass("dropdown");
              // $("#dropdown-menu-ul-nikola").fadeOut();
              $("body").css("background-color", "white");
            }
          });
        });
        </script>




    <script>
        $('#spanCountMODULE').html("<?=substr($_SESSION['module'],1,strlen($_SESSION['module'])-1)?>");
        $('#spanCountFootballLive').html("(1)");
        $('#spanCountFootballAll').html("(111)");
        $('#spanCountBasketballLive').html("(2)");
        $('#spanCountBasketballAll').html("(222)");
        $('#spanCountHorseLive').html("(3)");
        $('#spanCountHorseAll').html("(333)");
        $('#spanCountEsportLive').html("(4)");
        $('#spanCountEsportAll').html("(444)");
    </script>



   
    </div>


    <!-- CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN -->
    <!-- CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN -->
    <!-- CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN CONTENT MAIN -->
    <div class="panel_main">



