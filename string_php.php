<?php
$str = "Hello world!";
echo "Traitement de la chaine str : $str <br>";
echo "longeur de str : ".strlen($str)."<br>";
echo "nombre des mots : ".str_word_count($str)."<br>";
echo "Inverser str : ".strrev($str)."<br>";
echo "Chercher le mot \"world\" dans str : ".strpos($str,"world")."<br>";
echo "Remplacer un mot dans str : ".str_replace("world", "Dolly", $str)."<br>";

?>