<?php
define("COLLEGE", "MARWADI UNIVERSITY");

$name = "Rachit Chauhan";
$semester = "Semester 3";
$php = 85;
$db = 78;
$network = 90;

$total = $php + $db + $network;
$percentage = $total / 3;

echo "----------------------------------<br>";
echo "!! semester - 4 !!<br>";
echo "----------------------------------<br>";
echo "College Name : " . COLLEGE . "<br>";
echo "Student Name : " . $name . "<br>";
echo "Semester     : " . $semester . "<br>";
echo "----------------------------------<br>";
echo "PHP          : " . $php . "<br>";
echo "Database     : " . $db . "<br>";
echo "Networking   : " . $network . "<br>";
echo "----------------------------------<br>";
echo "Total Marks  : " . $total . "<br>";
echo "Percentage   : " . $percentage . "%<br>";
echo "----------------------------------<br>";
echo "!! THANK YOU !!";
?>