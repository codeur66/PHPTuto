<?php
$cars = array("Volvo", "BMW", "Toyota");
$cars[0] = "Volvo_1";
echo "I like ".$cars[0].", ".$cars[1]." and ".$cars[2].".<br>";
echo "Le tableau à ".count($cars)." voitures .<br>";
// Parcourir et afficher le contenu de tableau
for($x = 0; $x < count($cars); $x++) {
    echo $cars[$x]."<br>";
}

// Tableau associative : cle=é-valeur
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.<br>";

//Parcourir un tableau associative
foreach($age as $x => $x_value) {
    echo "Key=".$x.", Value=".$x_value;
    echo "<br>";
}


// Tableaux bidimentionnelles
$cars_ = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);
//Affichage simple de contenu d'un tableau bidimentionnelle
echo $cars_[0][0].": In stock: ".$cars_[0][1].", sold: ".$cars_[0][2].".<br>";
echo $cars_[1][0].": In stock: ".$cars_[1][1].", sold: ".$cars_[1][2].".<br>";
echo $cars_[2][0].": In stock: ".$cars_[2][1].", sold: ".$cars_[2][2].".<br>";
echo $cars_[3][0].": In stock: ".$cars_[3][1].", sold: ".$cars_[3][2].".<br>";
// PArcourir un tableau 2D
for ($r = 0; $r < 4; $r++) {
    echo "<p><b>Ligne N° : $r</b></p>";
    echo "<ul>";
    for ($c = 0; $c < 3; $c++){
        echo "<li>".$cars_[$r][$c]."</li>";
    }
    echo "</ul>";
}
// ou une autre facon
for ($r = 0; $r < 4; $r++) {
    for ($c = 0; $c < 3; $c++){
        echo $cars_[$r][$c]."<br>";
    }
}
// trie d'un tableau dont des str
$cars = array("Volvo", "BMW", "Toyota");
echo "Tableau avant   le trie <br>";
print_r($cars);
rsort($cars); // trie d'ordre decroissant
sort($cars);// trie d'ordre croissant
echo "Apres le  Trie en ordre croissant : <br>";
for($x = 0; $x < count($cars); $x++) {echo $cars[$x]."<br>";}

// trie d'un tableau d'entiers
echo "Trie d'un tableau d'entiers <br>";
echo "Avant le trie <br>";
$numbers = array(4, 6, 2, 22, 11);
print_r($numbers);
sort($numbers); // trie croissant
rsort($numbers); // trie decroissant
print_r($numbers);

// Trie d'un tableau associatif
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age); // Troe croissant selon les valeurs
ksort($age);  // Trie cropissant  selon les keys
asort($age); // trie decroissant selon les valeurs
krsort($age); // trie decroissant selon les keys





?>