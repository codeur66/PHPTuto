<?php
function familyName($fname, $year, $a = 0, $b = 0 ) {
    echo "$fname Refsnes. Born in $year and have ".($a+$b)." dollars <br>";
    return (int) $a+$b;
}
familyName("Hege", "1975");
familyName("Stale", "1978", 66, 99);
$n = familyName("Kai Jim", "1983", 99, 100);
$n += 5;
echo $n;
?>