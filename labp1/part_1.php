<?php
$weight = $_POST["weight"];
$kgWeight = $weight/2.2;
$runTime = $_POST["runTime"];
$ballTime = $_POST["ballTime"];
$sleepTime = $_POST["sleepTime"];
define ("runMET", 10);
define ("ballMET", 8);
define ("sleepMET", 1);

function burn($time, $MET, $kgWeight){
    $Cals = (0.0175 * $MET * $kgWeight);
    $burned = $Cals * $time;
    $burned = round($burned);
    return $burned;
}
$runFinal = burn($runTime, runMET, $kgWeight);
$ballFinal = burn($ballTime, runMET, $kgWeight);
$sleepFinal = burn($sleepTime, runMET, $kgWeight); 
echo "For a ", $weight, " pound person, it is estimated that: <br>";
echo $runFinal, " calories were burned running. <br>";
echo $ballFinal, " calories were burned playing basketball.<br>";
echo $sleepFinal, " calories were burned sleeping.<br>";
echo "Total calories burned : ", ($runFinal + $ballFinal + $sleepFinal)
?>