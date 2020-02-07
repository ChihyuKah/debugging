<?php
declare(strict_types=1);

ini_set('display_errors', "1");
ini_set('display_startup_errors', "1");
error_reporting(E_ALL);

echo "<br/><br/><br/>Exercise 1 starts here:<br/>";


new_exercise();

function new_exercise() {
    $block = "<br/><hr/><br/><br/>Exercise one starts here:<br/><br/><br/>";
    echo $block;
}

echo "<br/><br/><br/>Exercise 2 starts here:<br/>";
// === Exercise 2 ===
// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
$monday = $week[0];

echo $monday;

echo "<br/><br/><br/>Exercise 3 starts here:<br/>";
// === Exercise 3 ===
// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed


$str = "Debugged! also very fun";
//$str = “Debugged.!.Also.very.fun”;
echo substr($str, 0, 10);



echo "Exercise 4 starts here:<br/>";
// === Exercise 4 ===
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it, with ONE CHARACTER!

foreach($week as &$day) {
    $day = substr($day, 0, strlen($day)-3);
}

print_r($week);


echo "<br/><br/><br/>Exercise 5 starts here:<br/>";
?>
