<?php
$x = 5; // global scope
$x0 = 50; // global scope
$x1 = 51; // global scope
// Le mot clé global
function f_global_1() {
    // using x inside this function will generate an error
    $x = 556; // redeclaration de x
    echo "<p>Variable x inside function is: $x</p>";
    //global est utilisé pour accéder à une variable de hors de la fonction.
    global $x0, $x1;
    echo "<p>x0 + x1 ==> : $x0 + $x1</p>";
}
echo "<p>Variable x outside function is: $x</p>";
f_global_1();

function f_global_2(){
    //appeler directements des variables global $GLOBALS[index] index
    // elle permet de retourner des variables globals
    $GLOBALS['y'] = $GLOBALS['x0'] + $GLOBALS['x1'];
}
f_global_2();
echo "<p> f_global_2() : y ==> : $y </p>";

// declaration des variables statics
function static_() {
    static $x = 899990;
    echo "Static = ".$x;
    $x++;
}
static_();

?>