<!DOCTYPE hmtl>


<html>


<head></head>

<body>


<h2>this is null?</h2>


<?php 

$var1="khalid";
$var2=null;
$var3="";
$f1=12.1;
$int=12
?>

var1 is null <?php echo is_null($var1);  ?> </br>
var2 is null <?php echo is_null($var2);  ?> </br>
var3 is null <?php echo is_null($var3);  ?> </br>
this is var4 but its not there <?php echo is_null($var4); ?> </br>

<h3>int / float</b3>

this is int: <?php echo is_int($int); ?></br>
this is  float: <?php echo is_float($f1); ?></br>
<!-- this is must return false -->
this is float: <?php  echo is_int($f1); ?>


<h2>boolen </h2>


<?php 
$its_blocked=true;

echo $its_blocked


?>

</body>


</html>