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
        $horoscopes = array(
            "ariesFM"       => 3,   "ariesLM"         => 4,  "ariesFD"         => 21, "ariesLD"        => 20,
            "taurusFM"      => 4,   "taurusLM"        => 5,  "taurusFD"        => 21, "taurusLD"       => 21,
            "geminiFM"      => 5,   "geminiLM"        => 6,  "geminiFD"        => 22, "geminiLD"       => 21,
            "cancerFM"      => 6,   "cancerLM"        => 7,  "cancerFD"        => 22, "cancerLD"       => 22,
            "leoFM"         => 7,   "leoLM"           => 8,  "leoFD"           => 23, "leoLD"          => 23,
            "virgoFM"       => 8,   "virgoLM"         => 9,  "virgoFD"         => 24, "virgoLD"        => 22,
            "libraFM"       => 9,   "libraLM"         => 10, "libraFD"         => 23, "libraLD"        => 23,
            "scorpioFM"     => 10,  "scorpioLM"       => 11, "scorpioFD"       => 24, "scorpioLD"      => 22,
            "sagittariusFM" => 11,  "sagittariusLM"   => 12, "sagittariusFD"   => 23, "sagittariusLD"  => 21,
            "capricornFM"   => 12,  "capricornLM"     => 1,  "capricornFD"     => 22, "capricornLD"    => 20,
            "aquariusFM"    => 1,   "aquariusLM"      => 2,  "aquariusFD"      => 21, "aquariusLD"     => 18,
            "piscesFM"      => 2,   "piscesLM"        => 3,  "piscesFD"        => 19, "piscesLD"       => 20,
        );
        if($month == $horoscopes["ariesFM"] && $day >= $horoscopes["ariesFD"] || $month == $horoscopes["ariesLM"] && $day <= $horoscopes["ariesLD"]){          
            echo "</br>";
            echo "Du är Vädur";
        }
        if($month == $horoscopes["taurusFM"] && $day >= $horoscopes["taurusFD"] || $month == $horoscopes["taurusLM"] && $day <= $horoscopes["taurusLD"]){          
            echo "</br>";
            echo "Du är Oxe";
        }
        if($month == $horoscopes["geminiFM"] && $day >= $horoscopes["geminiFD"] || $month == $horoscopes["geminiLM"] && $day <= $horoscopes["geminiLD"]){          
            echo "</br>";
            echo "Du är Tvilling";
        }
        if($month == $horoscopes["cancerFM"] && $day >= $horoscopes["cancerFD"] || $month == $horoscopes["cancerLM"] && $day <= $horoscopes["cancerLD"]){          
            echo "</br>";
            echo "Du är Kräfta";
        }
        if($month == $horoscopes["leoFM"] && $day >= $horoscopes["leoFD"] || $month == $horoscopes["leoLM"] && $day <= $horoscopes["leoLD"]){          
            echo "</br>";
            echo "Du är Lejon";
        }
        if($month == $horoscopes["virgoFM"] && $day >= $horoscopes["virgoFD"] || $month == $horoscopes["virgoLM"] && $day <= $horoscopes["virgoLD"]){          
            echo "</br>";
            echo "Du är Jungfru";
        }
        if($month == $horoscopes["libraFM"] && $day >= $horoscopes["libraFD"] || $month == $horoscopes["libraLM"] && $day <= $horoscopes["libraLD"]){          
            echo "</br>";
            echo "Du är Våg";
        }
        if($month == $horoscopes["scorpioFM"] && $day >= $horoscopes["scorpioFD"] || $month == $horoscopes["scorpioLM"] && $day <= $horoscopes["scorpioLD"]){          
            echo "</br>";
            echo "Du är Skorpion";
        }
        if($month == $horoscopes["sagittariusFM"] && $day >= $horoscopes["sagittariusFD"] || $month == $horoscopes["sagittariusLM"] && $day <= $horoscopes["sagittariusLD"]){          
            echo "</br>";
            echo "Du är Skytt";
        }
        if($month == $horoscopes["capricornFM"] && $day >= $horoscopes["capricornFD"] || $month == $horoscopes["capricornLM"] && $day <= $horoscopes["capricornLD"]){          
            echo "</br>";
            echo "Du är Stenbock";
        }
        if($month == $horoscopes["aquariusFM"] && $day >= $horoscopes["aquariusFD"] || $month == $horoscopes["aquariusLM"] && $day <= $horoscopes["aquariusLD"]){          
            echo "</br>";
            echo "Du är Vattuman";
        }
        if($month == $horoscopes["piscesFM"] && $day >= $horoscopes["piscesFD"] || $month == $horoscopes["piscesLM"] && $day <= $horoscopes["piscesLD"]){          
            echo "</br>";
            echo "Du är Fisk";
        }




        //Lägg till fler if satser

    }
}


?>