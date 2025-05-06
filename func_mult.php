<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fun Mulit</title>
</head>
<body>
    




<?php

$res=op(10,4);
echo "SUM: {$res[0]}<br/>";
echo "sub: {$res[1]}<br/>";
echo "mult: {$res[2]}<br/>";
echo "div: {$res[3]}<br/>";

function op($n1,$n2){
    
$arra=array();

$arra[]=$n1+$n2;
$arra[]=$n1-$n2;
$arra[]=$n1/$n2;
$arra[]=$n1*$n2;

return $arra;

};





?>







</body>
</html>