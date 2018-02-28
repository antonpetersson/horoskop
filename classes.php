<?php

class Person{
    function __construct($fName, $lName, $birthdate){
        $this -> fName = $fName;
        $this -> lName = $lName;
        $this -> birthdate = $birthdate;
    }
    function printName(){
        echo $this -> fName . " " . $this -> lName;
        
    }
function checkHoroscope(){
    $month = substr($this -> birthdate, 2, 2);
    $day = substr($this -> birthdate, 4, 2);

        //FM=FirstMonth. LM=LastMonth, FD=FirstDay, LD=LastDay
        $horoscopes = array("ariesFM" => 03, "ariesLM" => 04, "ariesFD" => 21, "ariesLD" => 19,
        //Lägg in fler horoskop
        );
        
        if($month >= $horoscopes["ariesFM"] && $month <= $horoscopes["ariesLM"]){
            echo "</br>";
            echo "Du är Vädur";
        }

    }
}


?>