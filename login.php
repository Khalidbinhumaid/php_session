

<?php



$user=$_POST["uname"]?? '';
$pass=$_POST["psw"] ?? '';


$us = ['admin','guest'];
$ps = ['admin','guest'];


if (($user == $us[0]) && ($pass == $ps[0])) {
    echo "welcome admin";
}elseif(($user == $us[1]) && ($pass == $ps[1])){
    echo "welcome Guest";

}else{
    echo "access Denied";
}








?>