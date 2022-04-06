<?php
$coupon = $_POST["coupon"];
define ("candyBar", 10);
define ("gumball", 3);
calc($coupon);

function calc($coupon){
    $leftover = $coupon % candyBar;
    $bars = ($coupon - $leftover)/candyBar;
    $couponsGB = $leftover % gumball;
    $gumballs = ($leftover - $couponsGB)/gumball;
    $finalLeft = ($coupon - (($bars * candyBar) + ($gumballs * gumball)));
    graphic($bars, $gumballs, $finalLeft);
}

function graphic($bars, $gumballs, $finalLeft){
    echo $bars, " candy bars<br>", str_repeat("o", $bars), "<br>";
    echo $gumballs, " gumballs<br>", str_repeat("o", $gumballs), "<br>";
    echo $finalLeft, " coupons left over<br>", str_repeat("o", $finalLeft), "<br>";
    echo "<br><br>", "Legend: Candy Bar = 10 | Gumball = 3";
}

?>