<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Countdown</title>
  <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js'></script>
  <script  src="js/index.js"></script>
</head>

<body>
  <?php 
    date_default_timezone_set("America/Los_Angeles");
    $arrivalTime=strtotime("19:00:00 December 26 2017");
    echo "I will be in San Francisco on " . date("Y-m-d H:i:sa", $arrivalTime) . " and right now it is: " . date("Y-m-d H:i:sa");
      $days=floor(($arrivalTime-time())/60/60/24); 
      echo $days;
      $hours=floor(date( 'H', $arrivalTime)-date( 'H')); 
      if ($hours<0){ $hours+=24;} if(date( 'i', $arrivalTime)>date('i')){ $hours+=0;} else{ $hours--;}
      echo $hours;
      $minutes=floor((date( 'i', $arrivalTime))-(date( 'i'))-1); 
      if ($minutes>=0){ $minutes+=0;} else{ $minutes+=60;}
      echo $minutes;
      $seconds=floor(date( 'sa', $arrivalTime)-date( 'sa')+60); 
      echo $seconds;
    ?>
  <div class="wrap">  
  <h1>Countdown to San Francisco</h1>

  <div class="countdown">
    <div class="bloc-time days" data-init-value=<?php echo $days;?>>
      <span class="count-title">Days</span>

      <div class="figure days days-1">
        <span class="top"><?php $daysFirst = floor($days/10); echo $daysFirst;?></span>
        <span class="top-back">
          <span><?php $daysFirst = floor($days/10); echo $daysFirst;?></span>
        </span>
        <span class="bottom"><?php $daysFirst = floor($days/10); echo $daysFirst;?></span>
        <span class="bottom-back">
          <span><?php $daysFirst = floor($days/10); echo $daysFirst;?></span>
        </span>
      </div>

      <div class="figure days days-2">
        <span class="top"><?php $daysSecond = floor($days-($daysFirst*10)); echo $daysSecond;?></span>
        <span class="top-back">
          <span><?php $daysSecond = floor($days-($daysFirst*10)); echo $daysSecond;?></span>
        </span>
        <span class="bottom"><?php $daysSecond = floor($days-($daysFirst*10)); echo $daysSecond;?></span>
        <span class="bottom-back">
          <span><?php $daysSecond = floor($days-($daysFirst*10)); echo $daysSecond;?></span>
        </span>
      </div>
    </div>

    <div class="bloc-time hours" data-init-value=<?php echo $hours;?>>
      <span class="count-title">Hours</span>

      <div class="figure hours hours-1">
        <span class="top"><?php $hoursFirst = floor($hours/10); echo $hoursFirst;?></span>
        <span class="top-back">
          <span><?php $hoursFirst = floor($hours/10); echo $hoursFirst;?></span>
        </span>
        <span class="bottom"><?php $hoursFirst = floor($hours/10); echo $hoursFirst;?></span>
        <span class="bottom-back">
          <span><?php $hoursFirst = floor($hours/10); echo $hoursFirst;?></span>
        </span>
      </div>

      <div class="figure hours hours-2">
        <span class="top"><?php $hoursSecond = floor($hours-($hoursFirst*10)); echo $hoursSecond;?></span>
        <span class="top-back">
          <span><?php $hoursSecond = floor($hours-($hoursFirst*10)); echo $hoursSecond;?></span>
        </span>
        <span class="bottom"><?php $hoursSecond = floor($hours-($hoursFirst*10)); echo $hoursSecond;?></span>
        <span class="bottom-back">
          <span><?php $hoursSecond = floor($hours-($hoursFirst*10)); echo $hoursSecond;?></span>
        </span>
      </div>
    </div>

    <div class="bloc-time min" data-init-value=<?php echo $minutes;?>>
      <span class="count-title">Minutes</span>

      <div class="figure min min-1">
        <span class="top"><?php $minutesFirst = floor($minutes/10); echo $minutesFirst;?></span>
        <span class="top-back">
          <span><?php $minutesFirst = floor($minutes/10); echo $minutesFirst;?></span>
        </span>
        <span class="bottom"><?php $minutesFirst = floor($minutes/10); echo $minutesFirst;?></span>
        <span class="bottom-back">
          <span><?php $minutesFirst = floor($minutes/10); echo $minutesFirst;?></span>
        </span>        
      </div>

      <div class="figure min min-2">
       <span class="top"><?php $minutesSecond = floor($minutes-($minutesFirst*10)); echo $minutesSecond;?></span>
        <span class="top-back">
          <span><?php $minutesSecond = floor($minutes-($minutesFirst*10)); echo $minutesSecond;?></span>
        </span>
        <span class="bottom"><?php $minutesSecond = floor($minutes-($minutesFirst*10)); echo $minutesSecond;?></span>
        <span class="bottom-back">
          <span><?php $minutesSecond = floor($minutes-($minutesFirst*10)); echo $minutesSecond;?></span>
        </span>
      </div>
    </div>

    <div class="bloc-time sec" data-init-value=<?php echo $seconds;?>>
      <span class="count-title">Seconds</span>

        <div class="figure sec sec-1">
        <span class="top"><?php $secondsFirst = floor($seconds/10); echo $secondsFirst;?></span>
        <span class="top-back">
          <span><?php $secondsFirst = floor($seconds/10); echo $secondsFirst;?></span>
        </span>
        <span class="bottom"><?php $secondsFirst = floor($seconds/10); echo $secondsFirst;?></span>
        <span class="bottom-back">
          <span><?php $secondsFirst = floor($seconds/10); echo $secondsFirst;?></span>
        </span>          
      </div>

      <div class="figure sec sec-2">
        <span class="top"><?php $secondsSecond = floor($seconds-($secondsFirst*10)); echo $secondsSecond;?></span>
        <span class="top-back">
          <span><?php $secondsSecond = floor($seconds-($secondsFirst*10)); echo $secondsSecond;?></span>
        </span>
        <span class="bottom"><?php $secondsSecond = floor($seconds-($secondsFirst*10)); echo $secondsSecond;?></span>
        <span class="bottom-back">
          <span><?php $secondsSecond = floor($seconds-($secondsFirst*10)); echo $secondsSecond;?></span>
        </span>
      </div>
    </div>
  </div>
</div>
</body>
</html>
