<?php

echo "Welke operatie wil je uitvoeren? (+,-)\n";
$a = readline();
if ($a == '+' || $a == '-')
{
echo "Eerste getal?\n";
$getal1 = readline();
echo "Tweede getal?\n";
$getal2 = readline();
if ($a == '+')
	echo $getal1 + $getal2;
else
	echo $getal1 - $getal2;
}
else
	echo "Sorry, dit is niet +, of -\n";



?>