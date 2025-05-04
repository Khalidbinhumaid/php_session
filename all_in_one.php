<!DOCTYPE html>

<html>

<head></head>
<body>
<h1>This is a variable , string,  integer, and float </h1>
<?php
$name= "khalid";      // string variable
$age = 25;        // integer variable
$height = 5.9;       // float variable


echo "String: $name <br>";
echo "integer: $age <br>";
echo "float: $height <br>";






?>

<h2> Simple Math Operations </h2>
<?php 
$employee_name = "khalid";
$employee_working_hourse = 40;
$employee_salary = 1000;
$full_package =  $employee_salary * $employee_working_hourse;

echo "Employee Name: $employee_name <br>";
echo "full package:  $full_package ";

echo "</br></br>";
echo "<h2>calcu</h2>";

$n1=10;
$n2=5;

$sum = ($n1+$n2);
echo "this is Sum: " . $sum , "</br>";
$sub = ($n1-$n2);
echo "this is sub: " . $sub , "</br>";
$mult = ($n1*$n2);
echo "this is mult: " . $mult , "</br>";

$div = ($n1/$n2);
echo "this is div: " . $div , "</br>";
$mod = ($n1%$n2);
echo "this is mod: " . $mod , "</br>";
$expo = ($n1**$n2);
echo "this is expo: " . $expo , "</br>";
?>




</body>

</html>