<?php
include "classes.php";
if(!isset($_COOKIE["user"]))
{
    header("Location: ./index.php");
}

$myPerson = unserialize($_COOKIE['user']);

    

    $myPerson -> printName();
    echo "</br>";
    $myPerson -> checkHoroscope();




?>