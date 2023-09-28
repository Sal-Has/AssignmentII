<?php

include "includes/class.autoload.inc.php";


if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"]==="POST"){

        $firstname=$_POST["firstname"];



}

$usersObj = new UsersView();
if (true){
$usersObj->showUser($firstname);
echo" Displayed Successfully!";
}
else{
    echo "Failed";
}
