<?php

declare(strict_types =1);

include "class.autoload.inc.php";

if (isset($_SERVER["REQUEST_METHOD"])&& $_SERVER["REQUEST_METHOD"]==="POST"){
    $operator = $_POST["oper"];
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $num1=filter_var($num1,FILTER_VALIDATE_INT);
    $num2=filter_var($num2,FILTER_VALIDATE_INT);


    $cal = new Calc($operator,$num1,$num2);
    try{
        echo $cal->Calculator();
    }catch(TypeError $e){

        echo " Error!: ".$e->getMessage(); 
        
    }





}