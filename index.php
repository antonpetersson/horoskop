<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Horoskop</title>
</head>
<body>

<form action="myhoroscope.php" method="POST">
    Vad är ditt förnamn? <input type="text" name="fName"><br>
    Vad är ditt efternamn? <input type="text" name="lName"><br>
    Vad är ditt födelsedatum? <input type="number" name="bDate"><br>
<input type="submit" value="Skicka">
</form>


<?php




// $test = "90041700";
// $testYear = $test[0] . $test[1];
// echo $testYear;

// $day =  substr($test, 4, 2);
//  echo $day;

?>
    
</body>
</html>