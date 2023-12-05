<?php
$age = 25;
$minutesAge = $age * 60 * 24 * 365;
$hoursAge = $age * 24 * 365;
$daysAge = $age * 365;

echo 'Welcome to the Age Calculator! '."<br>";
echo 'You have been alive for: '."<br>";
echo $daysAge, ' days'."<br>";
echo $hoursAge, ' hours'."<br>";
echo $minutesAge, ' minutes';