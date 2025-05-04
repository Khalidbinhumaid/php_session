<!DOCTYPE html>
<html>
<head></head>

<h4> Array </h4>

<?php
// print Arrays

$users = ["khalid","guest","admin"];
echo "arr: " . print_r($users) , "</br>";
echo "<br>";

//update arrays
$users[0]="ahmed";
echo "update arr: " . print_r($users);
echo "<br>";


//add new string, init on array

$users[]="faisal";
print_r($users);
echo "<br>";

//mult arrays

$item = array(1,2,3,4,array("red","blue","yellow"));
echo $item[4][0]; // red
echo "<br>";
//


$db = [
    "name" => "khalid",
    "secret" => "SecRet",
    "Cookie" => "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0"
];

echo "this is a cookie: ". $db["Cookie"] , "</br>" . "Per_info: " . $db["name"];







?>

<h1>array methods max , count , sort , rsort </h1>

<?php 

$numbers = array(1,2,4,100,10,44,55,77);

echo "arrays: " , print_r($numbers);

echo "<br>";

echo "max number is: " . max($numbers);
echo "<br>";
echo "<br>";

echo "len of array: " . count($numbers);
echo "<br>";


echo "Sort Arrays: " . sort($numbers) , print_r($numbers);
echo "<br>";


echo "Reverse Arrays: " . rsort($numbers) , print_r($numbers);
echo "<br>";









?>
number 99 in array :<?php echo in_array(99,$numbers); ?>  <!-- false -->

</html>