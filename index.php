<?php
include "classes.php";
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $myPerson = new Person($_POST["fName"], $_POST["lName"], $_POST["bDate"]);
    setcookie("user", serialize($myPerson), time() + 7 * 24 * 60 * 60);
    $_COOKIE["user"] = serialize($myPerson);
}

if(isset($_COOKIE["user"])) {
    header('Location: ./myhoroscope.php');  
} 
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Horoskop</title>
</head>
<body>

<form method="POST">
    Vad är ditt förnamn? <input type="text" name="fName"><br>
    Vad är ditt efternamn? <input type="text" name="lName"><br>
    Vad är ditt födelsedatum? <input type="number" name="bDate"><br>
<input type="submit" value="Skicka">
</form>

    
</body>
</html>