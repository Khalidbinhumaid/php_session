<!DOCTYPE hmtl>


<html>


<head></head>

<body>


<h2>Function</h2>

 
<?php 


sum(10,5);
$result=div(10,5);
echo "<br/>result {$result}";
function sum($n1,$n2){
    $sum=$n1+$n2;
    echo "SUM: {$sum}";
}



function div($n1,$n2){
    $div=$n1/$n2;
    return $div;
}
?>

</body>


</html>