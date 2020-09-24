<?php
$x0 = 5;
$x1 = 10.01;
$x = $x0 /* + 15 */ + $x1;
echo "Calcul simple".($x+$x0+$x1)."<br>";
echo "pi($x) ==> ".pi($x)."<br>";
echo "abs(-6.7) ==> ".abs(-6.7)."<br>";
echo "sqrt(64) ==> ".sqrt(64)."<br>";
echo "round(0.60) ==> ".round(0.60)."<br>";
echo "round(0.49) ==> ".round(0.49)."<br>";
echo "Nombre aleatoire rand() ==> ".rand()."<br>";
echo "Un entier aleatoire entre 10 et 100 rand(10, 100) ==> ".rand(10, 100)."<br>";

$tab = array(0, 150, 30, 20, -8, -200);
//echo "tableau d'entiers =>" . $tab . "<br>";
print_r($tab);
echo "<br>";
echo "min(tab) => ".(min($tab))." <br>";
echo "max(tab) => ".(max($tab))." <br>";
?>