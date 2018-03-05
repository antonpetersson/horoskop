<?php
setcookie("user", serialize($myPerson), time() + 24 * 60 * 60);

include "classes.php";



echo "</br>";
$myPerson = new Person($_POST["fName"], $_POST["lName"], $_POST["bDate"]);
$myPerson -> printName();
$myPerson -> checkHoroscope();
?>