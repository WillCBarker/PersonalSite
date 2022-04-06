
<div class = "container">
<div class = "signup">
<?php $t = $_POST["times"]?>
<form method="post" action="index2.php">

	<h1>Office Hours Sign Up</h1>
	Student Name: <input type="text" name="studentName" />
	Student Email: <input type="text" name="email" />
	<input type="submit" />
</div>
<?php
if (!empty($_POST['email']))
    $email = "Email successfully sent from " . $_POST['email'];
if (!empty($email))
	{
	echo $email;
	mail('hkord@gmu.edu', 'IT207-008 Office Hours', $_POST["time"]);
	}

define("monday", $_POST["MondayTimes"]);

define("tuesday", $_POST["TuesdayTimes"]);

define("wednesday", $_POST["WednesdayTimes"]);

define("thursday", $_POST["ThursdayTimes"]);

define("friday", $_POST["FridayTimes"]);





$DaysofWeek = array ("Sunday", "Monday", "Tuesday",
"Wednesday","Thursday", "Friday","Saturday");
$x = date("t");
$m = date("m");
$y = date("Y");
if (date("l", mktime(0,0,0,$m,1,$y)) == "Sunday") $day = 0;
if (date("l", mktime(0,0,0,$m,1,$y)) == "Monday") $day = 1;
if (date("l", mktime(0,0,0,$m,1,$y)) == "Tuesday") $day = 2;
if (date("l", mktime(0,0,0,$m,1,$y)) == "Wednesday") $day = 3;
if (date("l", mktime(0,0,0,$m,1,$y)) == "Thursday") $day = 4;
if (date("l", mktime(0,0,0,$m,1,$y)) == "Friday") $day = 5;
if (date("l", mktime(0,0,0,$m,1,$y)) == "Saturday") $day = 6;

?>
<div class = "date"><?php echo date("F"), ", ", $y?></div>
<?php
$c = 0;
$z = 0;
for ($z; $z < $day - 1; $z++){
	if ($z == 0){
	for ($a =0; $a <= 7; $a++){
		$c++;
    ?>
    <div class = "day"><?php echo $DaysofWeek[$a] ?></div>
    <?php
    }   
    }
	?>
    <div class = "empty"><?php echo "" ?></div>
    <?php
}
for ($count = 1; $count <= $x; $count++){
    $c++;
    switch ($day){
	case 0:
		$currentDay = 99;
		break;
	case 1:
		$currentDay = monday;
		break;
	case 2:
		$currentDay = tuesday;
		break;
	case 3:
		$currentDay = wednesday;
		break;
	case 4:
		$currentDay = thursday;
		break;
	case 5:
		$currentDay = friday;
		break;
	case 6:
		$currentDay = 99;
		break;
    }
    ?>
    <div class = "day"><?php echo $count, "<br>"; 
	if (empty($_POST['$currentDay']))
	{
	foreach($currentDay as $timeSlot){
		echo "<input type=\"radio\" name=\"time\" value=\"$count".$timeSlot."\" />". $timeSlot. "<br />";
		if ($c > 14 && $c < 20){
			echo "<input type=\"hidden\" name=\"$currentDay"."[]\""."  value=\"$timeSlot\" />";
		}
	}
	}
	
	if (!empty($_POST['$currentDay'])){
		foreach ($_POST["$currentDay"] as $timeSlot){
		echo "<input type=\"radio\" name=\"time\" value=\"$count".$timeSlot."\" />". $timeSlot. "<br />";
		if ($c > 14 && $c < 20){
			echo "<input type=\"hidden\" name=\"$currentDay"."[]\""."  value=\"$timeSlot\" />";
	}
	}
	}

	?></div>
    <?php   
	$day++;
    if ($day > 6){
    	$day = 0;
    }
}

?>
</form>
</div>
