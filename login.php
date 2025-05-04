

<?php

$user=$_POST["uname"]?? '';
$pass=$_POST["psw"] ?? '';

$login = [

    'username' => 'admin',
    'password' => 'Khalid',
    'guest' => 'guest', 
    'pguest' => '1212'

];

if ($user == $login['username'] && $pass == $login['password']){
    echo 'welcome admin';
    
     
}elseif($user == $login['guest'] && $pass == $login['pguest']){
    echo "welcome Guest";

}else{
    echo "Access Denied";
}

?>