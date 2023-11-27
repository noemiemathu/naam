<?php
/** opdracht 1*/
$a = 43;
if ($a > 0){
    echo "$a is groter dan 0 <br>";
}

/** opdracht 2*/
$b = 6;
if ($b > 0 and $b < 10){
    echo "$b ligt tussen de 0 en 10 <br>";
}

/** opdracht 3*/
$c = 243;
if ($c > 0 and $c <= 10){
    if ($c <=5){
        echo "Onvoldoende :( <br>";
    }
    else {
        echo "Voldoende! <br>";
    }
}
else {
    echo "Foutmelding. $c ligt niet tussen 0 en 10. <br>";
}
