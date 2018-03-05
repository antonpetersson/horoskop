<?php
include "classes.php"; 
$myPerson = new Person($_POST["fName"], $_POST["lName"], $_POST["bDate"]);
setcookie("user", serialize($myPerson), time() + 120);





$myPerson -> printName();
echo "</br>";
$myPerson -> checkHoroscope();
print_r($myPerson);
echo "</br>";
echo $_COOKIE["user"];

?>