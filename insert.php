<?php
include "includes/class.autoload.inc.php";



if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"]==="POST"){

$userid = filter_var($_POST["users_id"],FILTER_VALIDATE_INT);
$firstname= $_POST["users_firstname"];
$lastname=$_POST["users_lastname"];
$dateofbirth=$_POST["datebirth"];
}











$usersObj2 = new UsersContr();
if(true){
$usersObj2->createUser($userid,$firstname,$lastname,$dateofbirth);
    echo"Inserted successfully";
}
else{
    echo"Insertion failed";
}