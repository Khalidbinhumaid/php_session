<!DOCTYPE hmtl>


<html>


<head></head>

<body>


<h2>if statment</h2>

 
<?php 
 
$var1=10;
$var2=20;

if($var1>$var2){
    echo "number one is bigger";
}elseif($var1<$var2){
    echo "this is true";

}else{
    echo "none";
}


?>
<h1> complex if-else statment</h1>

<?php 


$max=100;
$minv=1;
$input=100;

if (  ($input>=$minv) && ($input<=$max) )
{
    echo "inputs is in the range 1-100";
}
else
{

}
?>


</body>


</html>