<?php
// STRING
$x = "Hello world!";
$y = 'Hello world!';
echo $x."<br>";
echo $y."<br>";
//Integer
//Voir le type d'un variable avec var_dump()
$x = 5985;
echo "Type of int".var_dump($x)." : <br>";// retourner le type
echo "Verifier le type de variable avec var_dump(is_int(\$x)): <br>";
echo var_dump(is_int($x))."<br>"; // retourne true or False

// Float
$x = 10.20;
echo "type of float ==> ".var_dump($x)."<br>";
echo "are is float ==> ".var_dump(is_float($x))."<br>";
echo "Data and type of an table : <br>";
$cars = array("Volvo","BMW","Toyota");
echo "<br>"."Tableau ==> ".var_dump($cars)."<br>";

// Transformer un str ou float en int
echo "Transformer un str ou float en int <br>";
echo "23465.768 ==> ".(int)23465.768."<br>";
echo "\"23465.768\" ==> ".(int)"23465.768"."<br>";

// Verifier si un valeur finie or infinie
echo "<br>"."Finie ou infinie (1.9e411) ==> ".var_dump(1.9e411)."<br>";

// Is Numeric
echo "<br>"."5985 is numeric ? ==> ".var_dump(is_numeric(5985))."<br>";
echo "<br>"."\"5985\" is numeric ? ==> ".var_dump(is_numeric("5985"))."<br>";
echo "<br>"."\"59.85\" + 100 is numeric ? ==> ".var_dump(is_numeric("59.85" + 100))."<br>";
echo "<br>"."\"Hello\" is numeric ? ==> ".var_dump(is_numeric("Hello"))."<br>";

// Declaration d'une Classe
class Car {
    function Car() {
        $this->model = "VW";
    }
}
$herbie = new Car(); // creation de l'objet
echo $herbie->model ."<br>"; // show object properties
// Valeur NULL PHP
$x = "Hello world! <br>";
$x = null;
echo var_dump($x)."<br>";

// Constantes
echo "Declaration et affichage d'un constante <br>";
echo "define(\"GREETING\", \"Welcome to W3Schools.com!\"); <br>";
define("GREETING", "Welcome to W3Schools.com!");
echo "GREETING ==> ".GREETING."<br>";

echo "Créez une constante avec un nom insensible à la casse <br>";
echo "define(\"GREETING\", \"Welcome to W3Schools.com!\", true) <br>";
define("GREETING", "Welcome to W3Schools.com!", true);
echo "greeting ==> ".greeting."<br>";
// Les variables constantes sont globales
function myVarCte() {echo GREETING;}
myVarCte();
// Créez une constante Array:
echo "Créez une constante Array <br>";
echo "define(\"cars\", [ \"Alfa Romeo\", \"BMW\", \"Toyota\"]); <br>";
define("cars", [ "Alfa Romeo", "BMW", "Toyota"], true);
echo "cars[0] ==> ".Cars[0]."<br>";



?>
