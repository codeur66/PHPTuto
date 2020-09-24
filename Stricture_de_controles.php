<?php
// if
$t = date("H");
if ($t < "20") {
    echo "Have a good day!";
}elseif ($t < "20") {
    echo "Have a good day!";
}else {
    echo "Have a good night!";
}
// switch case
$favcolor = "red";
switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}

// While
$x = 1;
while($x <= 15 and $x >0 ) {
    echo "The number is: $x <br>";
    $x++;
}

// do ... while Loop
$x = 6;
do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);

// for
for ($x = 0; $x <= 100; $x+=10) {
    echo "The number is: $x <br>";
}

// foreach
$colors = array("red", "green", "blue", "yellow");
foreach ($colors as $value) {
    echo "$value <br>";
}
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
foreach($age as $x => $val) {
    echo "$x = $val<br>";
}
//Boucle for, & continue & break
for ($x = 0; $x < 10; $x++) {
    if ($x == 9) {
        break;
    }elseif($x >= 0){
        echo "The number is: $x <br>";
        continue;
    }
}


?>