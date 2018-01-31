<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="countdown.js">
</script>
<link rel="stylesheet" type="text/css" href="countdown.css">
<title>crishrice</title>
</head>
<body>
<ul>
  <?php 
  date_default_timezone_set("America/Los_Angeles");
	$startTime=strtotime("07:00:00 February 6 2017");
    $arrivalTime=strtotime("18:43:00 December 26 2017");
   /*echo "I will be in Los Angeles on " . date("Y-m-d H:i:sa",   
    $arrivalTime) . " and right now it is: " . date("Y-m-d H:i:sa");*/
  ?>
  <li class="days" data-percent="<?php $days=floor(($arrivalTime-time())/60/60/24); $daysTotal=ceil((($arrivalTime-$startTime)/60/60/24)); $daysPercent=($days/$daysTotal)*100; echo $daysPercent;?>">
    <span>
    <?php
    	echo $days;	
    ?>
  </span> Days</li>
  <li class="hours" data-percent="<?php $hours=floor(date( 'H', $arrivalTime)-date( 'H')); if ($hours<0){ $hours+=24;} if(date( 'i', $arrivalTime)>date('i')){ $hours+=0;} else{ $hours--;} $hoursPercent=ceil(($hours/24)*100); echo $hoursPercent;?>">
    <span>
    <?php
	echo $hours;
    ?>
</span> Hours</li>
  <li class="minutes" data-percent="<?php $minutes=floor((date( 'i', $arrivalTime))-(date( 'i'))-1); if ($minutes>=0){ $minutes+=0;} else{ $minutes+=60;} $minutesPercent=ceil(($minutes/60)*100); echo $minutesPercent;?>">
    <span>
    <?php
	echo $minutes;
    ?>
</span> Minutes</li>
  <li class="seconds" data-percent="<?php $seconds=floor(date( 'sa', $arrivalTime)-date( 'sa')+60); $secondsPercent=ceil(($seconds/60)*100); echo $secondsPercent;?>"><span>
    <?php
      echo $seconds;
    ?>
</span> Seconds</li>
  <p> <br>Left until I return home</p>
</ul>
</body>
</html>