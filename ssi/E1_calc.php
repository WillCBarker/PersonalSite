<?php
$Years = $_POST["Years"];
$Salary = $_POST["Salary"];

$income = $Years * $Salary;

echo "Your income is: ", $income;
?>