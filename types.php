<?php
$text ="do not count your chicks before they hatch";//string

echo  strtoupper($text);
echo "<br>";
echo strlen($text);//characters
echo "<br>";
echo str_word_count($text); //words
echo "<br>";
echo  ucwords($text);
$x =ucwords($text);
echo"<br>";

echo $x;
echo "<br>";
echo  ucwords("tom juma");

echo strtoupper("This is my sentence");