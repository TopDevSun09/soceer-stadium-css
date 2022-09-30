
<?php


$select_dates = tep_query("SELECT * FROM horse_celander");



while ($dates = tep_fetch_object($select_dates)) {

    $originalDate = $dates->meeting_date;

    $date = str_replace('/', '-', $originalDate);
    
    $originalDate =  date('Y-m-d', strtotime($date));

    $newDate = date("Y-m-d", strtotime($originalDate));

    if ($dates->race_type == "RaceResultAndDividends") {
  
        $data[] = array('title' => $dates->meeting_venue, 'url' => 'ViewRaceResult.php?race_no=1&race_id='.$dates->race_id, 'start' => $newDate );
    
    } else {
        
        $data[] = array('title' => $dates->meeting_venue, 'url' => 'ViewRaceCard.php?race_no=1&race_id='.$dates->race_id, 'start' => $newDate );
    
    }

}

$calendarData = json_encode($data);

?>
    

    <div class="panel_details" style="width:100%;">
        
       

        <div class="details_team">
            

            Race Card
          

        </div>


        <div class="first_bar">
            
            <?php


                $strTab = '<span ><a href="horse-main">Live TV</a> </span>
                           <span ><a href="horse-calendar">Calendar</a> </span>';


                echo str_replace("href=\"".$pageURL."\">", "href=\"".$pageURL."\" class=\"tabSelected\">", $strTab);

            ?>

        </div>

      

      <div class="details_container">


          <div class="ui container">
              <div class="ui grid">
                  <div class="ui sixteen column calendar">
                      <div id="calendar"></div>
                  </div>
              </div>
          </div>

      </div>

        


    </div> 



<!-- JS CSS FOR HORSE MODULE ONLY --> <!-- JS CSS FOR HORSE MODULE ONLY -->
<!-- JS CSS FOR HORSE MODULE ONLY --> <!-- JS CSS FOR HORSE MODULE ONLY -->
<!-- JS CSS FOR HORSE MODULE ONLY --> <!-- JS CSS FOR HORSE MODULE ONLY -->

<link href='includes/mvc-theme/desktop/fullcalendar.print.min.css' rel='stylesheet' media='print' />
<link rel='stylesheet' href='includes/mvc-theme/desktop/fullcalendar.min.css'>
<link rel='stylesheet' href='includes/mvc-theme/desktop/semantic.min.css'>

<script src='includes/js/semantic.min.js'></script>
<script src='includes/js/moment.min.js'></script>
<script src='includes/js/fullcalendar.min.js'></script>




<script type="text/javascript">
  
  $(document).ready(function() {
    
    $('#calendar').fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,basicWeek,basicDay'
      },
      navLinks: true, // can click day/week names to navigate views
      editable: true,
      eventLimit: true, // allow "more" link when too many events
      events: <?php echo $calendarData ?>
    });
    
  });
</script>


