<?php
/** Opdracht 3*/
for ($a = 1; $a <= 10; $a += 2){
    echo $a . "<br>";
}
echo "<br>";

/** Opdracht 4*/
$b = 9;
for ($i = 1; $i <= 10; $i++){
    $c = $b * $i;
    echo $c . "<br>";
}
echo "<br>";

/** Opdracht 5*/
$t = 1;
$v = 0;
while ($t <= 1000){
    $j = $t + $v;
    $v = $t;
    $t = $j;
    echo $t . " ";
}
