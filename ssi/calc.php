<?php
$earned = $_POST["earnedParticipation"];
$max = $_POST["maxParticipation"];
define("partWeight", $_POST["weightParticipation"]);
$x = calcP($earned, $max);
$x = is_nan($x) ? (int) $x : $x;
$z = calcW($x, partWeight);
echo "You earned: ", 100 *$x , "% for Participation, with a weighted value of ", 100 *$z  , "%<br><br>";
$final += $z;

$earned = $_POST["earnedQuiz"];
$max = $_POST["maxQuiz"];
define("quizWeight", $_POST["weightQuiz"]);
$x = calcP($earned, $max);
$x = is_nan($x) ? (int) $x : $x;
$z = calcW($x, quizWeight);
echo "You earned: ", 100 *$x, "% for the Quizzes, with a weighted value of ", 100 *$z, "%<br><br>";
$final += $z;

$earned = $_POST["earnedLab"];
$max = $_POST["maxLab"];
define("labWeight", $_POST["weightLab"]);
$x = calcP($earned, $max);
$x = is_nan($x) ? (int) $x : $x;
$z = calcW($x, labWeight);
echo "You earned: ", 100 *$x , "% for the Labs, with a weighted value of ", 100 *$z  , "%<br><br>";
$final += $z;

$earned = $_POST["earnedPracticum"];
$max = $_POST["maxPracticum"];
define("pracWeight", $_POST["weightPracticum"]);
$x = calcP($earned, $max);
$x = is_nan($x) ? (int) $x : $x;
$z = calcW($x, pracWeight);
echo "You earned: ", 100 *$x , "% for the Practica, with a weighted value of ", 100 *$z , "%<br><br>";
$final += $z;

function calcP($earned, $max){
    $percentage = $earned/$max;
    return $percentage;
}

function calcW($percentage, $weight){
    $result = $percentage * ($weight/100);
    return $result;
}
$letter = ($final < 0.60 ? "F" : ($final < 0.70 ? "D" : ($final < 0.80 ? "C" : ($final < 0.90 ? "B" : "A"))));
$sign = (fmod($final, 0.10) >= 0.07 && $final >= 0.60 ? "+" : $sign);
echo "Your final grade is: ", $final * 100 , "%", ", which is a ", $letter, $sign;
?>