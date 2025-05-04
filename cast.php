<!DOCTYPE hmtl>


<html>


<head></head>

<body>


<h2>casting</h2>

$var1 is: 
<?php 
//getting type of var

$var1="4 months";
echo gettype($var1) , "</br>";


?></br>

<?php 

$var1=$var1+5;       // this will take number 4 with number var1+5 will be integer
echo gettype($var1) , "</br>";


?></br>
<h2>change int , flot,str to anything </h2>
<?php 
$var2 = (string) $var1; // change to string
echo gettype($var2) , "</br>";

//$var3 = settype($var2, "integer");
echo gettype($var2);




?>

</body>


</html>