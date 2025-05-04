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

</html>