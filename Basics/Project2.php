<?php
/*
 Calculate the age of person
  We'll get the a date and print out the number of days since their birthday
  eg. 102 days since my birthday

*/

$dob = "1941-12-31";
$today = date("Y-m-d");

$diff = strtotime($today) - strtotime($dob);

echo("Number of days".$diff/(60*60*24));
?>